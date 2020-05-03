var funcRealTime;

function stopRealTime() {
    clearTimeout(funcRealTime);
}

function showChart(elId, labels, inbound, outbound, format, scale) {
    var chart = c3.generate({
        bindto: elId,
        interaction: {
            enabled: true
        },
        data: {
            colors: {
                Download: '#00CF00',
                Upload: '#002A97'
            },
            x: 'labels',
            xFormat: '%Y-%m-%d %H:%M:%S',
            columns: [
                labels,
                inbound,
                outbound
            ],
            types: {
                Download: 'area-step',
                Upload: 'area-step'
            }
        },
        axis: {
            x: {
                type: 'timeseries',
                tick: {
                    multiline: false,
                    fit: false,
                    format: format,
                    culling: {
                        max: 8
                    }
                }
            },
            y: {
                label: {
                    text: scale + ' por segundo',
                    position: 'outer-middle'
                }
            }
        },
        grid: {
            x: {
                show: true
            },
            y: {
                show: true
            }
        }
    });
    var divSize=$("#abas").width();
    divSize=divSize-(divSize*0.1);
    chart.resize({width:divSize});
}

function getGraphData(service_id, search_type, format) 
{
    /*if (!search_type) 
    {
        search_type = 1;
    }*/

    stopRealTime();

    var panel = $('#chart_div-' + service_id).parents('.grafico:first');
    $('.load-hourglass').toggle();
    if(search_type==6)
    {
        getGraphDataRealTime(false,service_id,search_type,format)
    }
    else
    {
        $.getJSON('/' + service_id + '/detail/bandwidthData/' + search_type, function(data) 
        {
            $('.load-hourglass').toggle();

            $('[data-chart-detail="'+service_id+'"] [data-field="max-inbound"]').html(format_bits(data._metadata.max.in));
            $('[data-chart-detail="'+service_id+'"] [data-field="max-outbound"]').html(format_bits(data._metadata.max.out));
            $('[data-chart-detail="'+service_id+'"] [data-field="min-inbound"]').html(format_bits(data._metadata.min.in));
            $('[data-chart-detail="'+service_id+'"] [data-field="min-outbound"]').html(format_bits(data._metadata.min.out));
            $('[data-chart-detail="'+service_id+'"] [data-field="avg-inbound"]').html(format_bits(data._metadata.avg.in));
            $('[data-chart-detail="'+service_id+'"] [data-field="avg-outbound"]').html(format_bits(data._metadata.avg.out));
            $('#average-interval').html(data._metadata.period.interval + (data._metadata.period.interval > 1 ? ' minutos' : ' minuto'));

            //var start = new Date(data._metadata.period.start_date);
            start=data._metadata.period.start_date;
            end=data._metadata.period.end_date;
            //var end = new Date(data._metadata.period.end_date);
            $('[data-chart-detail="'+service_id+'"] [data-field="period"]').html(start + ' até ' + end);

            showChart('#chart_div-' + service_id, data.labels, data.records[0], data.records[1], format, data.scale);
        });
    }
}

function getGraphDataRealTime(chart,service_id,search_type,format)
{
   var panel = $('#chart_div-' + service_id).parents('.grafico:first');
   
   $.getJSON('/' + service_id + '/detail/bandwidthData/' + search_type, function(data) 
    {      
        //load_mask(panel, false);  
        $('[data-chart-detail="'+service_id+'"] [data-field="max-inbound"]').html(format_bits(data._metadata.max.in));
        $('[data-chart-detail="'+service_id+'"] [data-field="max-outbound"]').html(format_bits(data._metadata.max.out));
        $('[data-chart-detail="'+service_id+'"] [data-field="min-inbound"]').html(format_bits(data._metadata.min.in));
        $('[data-chart-detail="'+service_id+'"] [data-field="min-outbound"]').html(format_bits(data._metadata.min.out));
        $('[data-chart-detail="'+service_id+'"] [data-field="avg-inbound"]').html(format_bits(data._metadata.avg.in));
        $('[data-chart-detail="'+service_id+'"] [data-field="avg-outbound"]').html(format_bits(data._metadata.avg.out));
        $('#average-interval').html('5 segundos');
        start=data._metadata.period.start_date;
        end=data._metadata.period.end_date;
        $('[data-chart-detail="'+service_id+'"] [data-field="period"]').html(start + ' até ' + end);
        if(!chart)
        {
            chart=showChartRealTime(service_id,data.labels, data.records[0], data.records[1], data.scale);
        }
        else
        {
            chart.load(
            {
                columns: 
                    [
                        data.labels, 
                        data.records[0], 
                        data.records[1]
                    ]
            });
        }
        
    });
    
    funcRealTime=setTimeout(getGraphDataRealTime,5000,chart,service_id, search_type, format);
}

function showChartRealTime(service_id,labels, inbound, outbound,scale)
{
    var elId='#chart_div-' + service_id;
    var chart = c3.generate({
        bindto: elId,
        interaction: {
            enabled: true
        },
        data: {
            colors: {
                Download: '#002A97',
                Upload: '#00CF00'
            },
            x: 'labels',
            xFormat: '%H:%M:%S',
            columns: [
                labels,
                inbound,
                outbound
            ],
            types: {
                Download: 'area-step',
                Upload: 'area-step'
            }
        },
        axis: {
            x: {
                type: 'timeseries',
                tick: {
                    multiline: false,
                    fit: false,
                    format: '%H:%M:%S',
                    culling: {
                        max: 8
                    }
                }
            },
            y: {
                label: {
                    text: scale + ' por segundo',
                    position: 'outer-middle'
                }
            }
        },
        grid: {
            x: {
                show: true
            },
            y: {
                show: true
            }
        }
    });
    return chart;
}

$('[data-graph-service]').click(function() 
{
    var service_id = $(this).attr('data-graph-service');
    var search_type = $(this).attr('data-search-type');
    var date_format = $(this).attr('data-graph-format');

    getGraphData(service_id, search_type, date_format);
});

function format_bits(bits, decimals) {
    if (bits == 0) return '0b';
    var k = 1000;
    var dm = decimals + 1 || 3;
    var sizes = ['b', 'Kb', 'Mb', 'Gb', 'Tb', 'Pb', 'Eb', 'Zb', 'Yb'];
    var i = Math.floor(Math.log(bits) / Math.log(k));
    return (bits / Math.pow(k, i)).toPrecision(dm) + sizes[i];
}
