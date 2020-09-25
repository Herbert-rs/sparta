<?php

use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Carbon\Carbon;

if ( ! function_exists('retorna_km')) {
    function retorna_km($distanciaMetros)
    {
        if ( ! is_null($distanciaMetros)) {
            if ($distanciaMetros > 1000) {
                $distanciaKM = $distanciaMetros / 1000;

                return number_format($distanciaKM, 2, ',', '.').' KM';
            }

            return $distanciaMetros.' M';
        }

        return 'Não calculado';
    }
}

if ( ! function_exists('value_in_words')) {
    function value_in_words($value)
    {
        $value = number_format($value, 2, '.', '');
        list($integer, $fraction) = explode('.', $value);

        $str = '';
        $f = new \NumberFormatter('pt_BR', \NumberFormatter::SPELLOUT);

        $str .= str_replace(["duzcentos"], ["duzentos"], $f->format($integer)).' reais';

        if ($fraction > 0) {
            $str .= ' e '.$f->format($fraction).' centavos';
        }

        return $str;
    }
}

if ( ! function_exists('format_date')) {
    function format_date($date)
    {
        if (empty($date) || is_null($date)) {
            return '';
        }

        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    }
}

if ( ! function_exists('format_datehour')) {
    function format_datehour($date)
    {
        if ($date != null) {
            return \Carbon\Carbon::parse($date)->format('d/m/Y H:i:s');
        }

        return null;
    }
}

if ( ! function_exists('format_moeda')) {
    function format_moeda($value, $num = 2)
    {
        return number_format($value, $num, ',', '.');
    }
}

if ( ! function_exists('limpa_moeda')) {
    function limpa_moeda($value)
    {
        return str_replace(",", ".", str_replace(".", "", $value));
    }
}

if ( ! function_exists('str_mask')) {
    function str_mask($str, $mask)
    {
        if (trim($str) == '') {
            return '';
        }

        $mask_size = substr_count($mask, '#');

        for ($i = 0, $iMax = strlen($str); $i < $iMax; $i++) {
            if ($i < $mask_size) {
                $mask[strpos($mask, '#')] = $str[$i];
            }
        }

        return str_replace('#', '', $mask);
    }
}

if ( ! function_exists('as_cnpj')) {
    function as_cnpj($str)
    {
        return str_mask($str, '##.###.###/####-##');
    }
}

if ( ! function_exists('as_cpf')) {
    function as_cpf($str)
    {
        return str_mask($str, '###.###.###-##');
    }
}

if ( ! function_exists('format_tax_id')) {
    function format_tax_id($str)
    {
        return strlen($str)>11?as_cnpj($str):as_cpf($str);
    }
}

if ( ! function_exists('as_rg')) {
    function as_rg($str)
    {
        return str_mask($str, '##.###.###-#');
    }
}

if ( ! function_exists('as_fixphone')) {
    function as_fixphone($str)
    {
        $str = preg_replace('/[^0-9]/', '', $str);

        return str_mask($str, '(##) ####-####');
    }
}
if ( ! function_exists('number')) {
    function number($str)
    {
        $str = preg_replace('/[^0-9]/', '', $str);

        return trim($str);
    }
}

if ( ! function_exists('as_phone')) {
    function as_phone($str)
    {
        if (strlen($str) == 10) {
            $str = preg_replace('/[^0-9]/', '', $str);

            return str_mask($str, '(##) ####-####');
        }
        $str = preg_replace('/[^0-9]/', '', $str);

        return str_mask($str, '(##) #####-####');
    }
}

if ( ! function_exists('as_mail_code')) {
    function as_mail_code($str)
    {
        $str = preg_replace('/[^0-9]/', '', $str);

        return str_mask($str, '#####-###');
    }
}

if ( ! function_exists('format_valor')) {
    function format_valor($value, $num = 2)
    {
        return number_format($value, $num, ',', '');
    }
}

if ( ! function_exists('format_decimal')) {
    function format_decimal($money)
    {
        $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
        $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

        $separatorsCountToBeErased = (strlen($cleanString) - strlen($onlyNumbersString) - 1);

        $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
        $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '', $stringWithCommaOrDot);

        return (float)str_replace(',', '.', $removedThousendSeparator);
    }
}

if (! function_exists('status_badge')) {
    function status_badge($type, $field, $value, $label, $size="11px")
    {
        $color = Config::get("telium.status_badge.$field.$value");
        return "<span style='font-size:$size;' class='$type label-$color'>$label</span>";
    }
}

if ( ! function_exists('back_button')) {
    function back_button($class = "btn btn-primary btn-sm")
    {
        $prev_url = \URL::previous();
        $current_url = \URL::current();

        $text = "Voltar";
        if (preg_match('/proposal/', $prev_url)) {
            $text = "Voltar para proposta";
        } elseif (preg_match('/customer/', $prev_url)) {
            $text = "Voltar para cliente";
        } elseif (preg_match('/service/', $prev_url)) {
            $text = "Voltar para serviço";
        } elseif (preg_match('/search/', $prev_url)) {
            $text = "Voltar para pesquisa";
        }

        if ($prev_url != $current_url) {
            return "<a class='$class' href='$prev_url'><i class='fa fa-arrow-left'></i> $text</a>";
        }

        return '';
    }
}

if ( ! function_exists('format_system_date')) {
    function format_system_date($date)
    {
        if ( ! is_null($date)) {
            return \Carbon\Carbon::parse($date)->format('d/m/Y');
        } else {
            return "";
        }
    }
}

if ( ! function_exists('normalize_date')) {
    function normalize_date($date)
    {
        return ($date ? \Carbon\Carbon::createFromFormat('d/m/Y', $date)->toDateString() : null);
    }
}

if ( ! function_exists('format_full_date')) {
    function format_full_date($date)
    {
        if ( ! is_null($date)) {
            return \Carbon\Carbon::parse($date)->format('d/m/Y H:i:s');
        } else {
            return "";
        }
    }
}

if ( ! function_exists('remove_acentos')) {
    function remove_acentos($string)
    {
        $map = array(
            'á' => 'a',
            'à' => 'a',
            'ã' => 'a',
            'â' => 'a',
            'é' => 'e',
            'ê' => 'e',
            'í' => 'i',
            'ó' => 'o',
            'ô' => 'o',
            'õ' => 'o',
            'ú' => 'u',
            'ü' => 'u',
            'ç' => 'c',
            'Á' => 'A',
            'À' => 'A',
            'Ã' => 'A',
            'Â' => 'A',
            'É' => 'E',
            'Ê' => 'E',
            'Í' => 'I',
            'Ó' => 'O',
            'Ô' => 'O',
            'Õ' => 'O',
            'Ú' => 'U',
            'Ü' => 'U',
            'Ç' => 'C',
        );

        return trim(strtr($string, $map));
    }
}

if ( ! function_exists('array_avg')) {
    function array_avg(array $array)
    {
        if (count($array) > 0) {
            return array_sum($array) / count($array);
        }

        return 0;
    }
}

if ( ! function_exists('transpose_array')) {
    function transpose_array(array $array, array $search = [])
    {
        $i = 0;
        $trans = [];
        foreach ($array as $val) {
            foreach ($val as $k => $v) {
                if (count($search) > 0) {
                    if (in_array($k, $search)) {
                        $trans[$k] = array_column(array_values($array), $k);
                    }
                } else {
                    $trans[$k] = array_column(array_values($array), $k);
                }
            }
            $i++;
        }

        return $trans;
    }
}

if ( ! function_exists('replaceParams')) {
    function replaceParams($str, $params)
    {
        $params = json_decode($params, true);
        $search = array();
        $replace = array();
        if (is_array($params)) {
            foreach ($params as $s => $r) {
                $search[] = "%{$s}%";
                if ( ! is_array($r)) {
                    $replace[] = nl2br("{$r}");
                } else {
                    $replace[] = "";
                }
            }

            $str = str_replace($search, $replace, $str);
            $str = preg_replace("/%([A-Za-z0-9]|[-_\ ])+%/", "", $str);
        }

        return $str;
    } // replaceParams
}

if ( ! function_exists('showPagination')) {
    function showPagination($data)
    {
       $pagination = new Paginator($data->data,$data->total,$data->per_page,$data->current_page,['path'  => \Request::url(),'query' => \Request::query()]);
       return $pagination->render();
    } // showPagination
}

if ( ! function_exists("filesize_format")) {
    function filesize_format($bytes, $precision = 2)
    {
        $bytes = (float)$bytes;
        if ($bytes == 0) {
            return round(0, $precision).'B';
        }
        $base = log($bytes) / log(1000);
        $suffixes = array('B', 'KB', 'MB', 'GB', 'TB');

        return round(pow(1000, $base - floor($base)), $precision).$suffixes[floor($base)];
    } // filesize_format
}

if ( ! function_exists("filesize_1024_format")) {
    function filesize_1024_format($bytes, $precision = 2)
    {
        $bytes = (float)$bytes;
        if ($bytes == 0) {
            return round(0, $precision).'B';
        }
        $base = log($bytes) / log(1024);
        $suffixes = array('B', 'KB', 'MB', 'GB', 'TB');

        return round(pow(1024, $base - floor($base)), $precision).$suffixes[floor($base)];
    } // filesize_format
}

if ( ! function_exists('parse_to_float')) {
    function parse_to_float($value)
    {
        if (is_float($value)) {
            return $value;
        }

        return (float)str_replace(['.', ','], ['', '.'], $value);
    }
}

if ( ! function_exists('get_string_between')) {
    function get_string_between($string, $start, $end)
    {
        $string = " ".$string;
        $ini = strpos($string, $start);
        if ($ini == 0) {
            return "";
        }
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;

        return substr($string, $ini, $len);
    }
}

if ( ! function_exists("format_currency")) {
    function format_currency($value, $currency = "BR")
    {
        switch ($currency) {
            case 'BR':
                $moeda = 'R$';
                break;
            case 'US':
                $moeda = 'USD';
                break;
            case 'EU':
                $moeda = '€';
                break;
            default:
                $moeda = '$';
        }

        return "<span class='pull-left'>$moeda</span><div class='text-right form-currency'> $value</div>";
    } // format_currency
}

if ( ! function_exists('test_and_convert_date')) {
    function test_and_convert_date($date)
    {
        try {
            $converted = \Carbon\Carbon::createfromFormat('d/m/Y', $date)->format('Y-m-d');
        } catch (\Exception $exception) {
            try {
                $converted = \Carbon\Carbon::createfromFormat('Y-m-d', $date)->format('Y-m-d');
            } catch (\Exception $exception) {
                throw new \Exception("Data inválida");
            }

            return $converted;
        }

        return $converted;
    }
}
if ( ! function_exists('convert_date_ddmmyyyy_to_yyyymmdd')) {
    function convert_date_ddmmyyyy_to_yyyymmdd(string $date){
        $date_transform = preg_replace('/^(\d{2}).(\d{2}).(\d{4})$/','$3/$2/$1',$date);
        return $date_transform;
    }
}
if ( ! function_exists('convert_date_yyyymmdd_to_ddmmyyyy')) {
    function convert_date_yyyymmdd_to_ddmmyyyy(string $date){
        $date_transform = preg_replace('/(\d{4}).(\d{2}).(\d{2})$/','$3/$2/$1',$date);
        return $date_transform;
    }
}
if ( ! function_exists('validate_password')) {
    function validate_password($value)
    {
        $pattern = "/((?=.*\d)(?=.*[a-zA-Z])(?=.*\W).{8,20})/";

        if ( ! preg_match($pattern, $value)) {
            return false;
        } else {
            return true;
        }
    }
}

if ( ! function_exists('generate_password')) {
    function generate_password()
    {
        $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
        $password = substr($random, 0, 10);

        while (validate_password($password) == false) {
            $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
            $password = substr($random, 0, 10);
        }

        return $password;
    }
}

if ( ! function_exists('today_is_working_day')) {
    function today_is_working_day()
    {
        $date = date('Y-m-d');
        $workday = \DB::select(\DB::raw("SELECT billing.next_workday('$date')"));
        foreach ($workday as $day) {
            return $date == $day->next_workday;
        }
    }
}

if (! function_exists('normalize_postgres_date')) {

    /**
     * Remove miliseconds from postgres date
     *
     * @param $date
     * @return string
     */
    function normalize_postgres_date($date)
    {
        if (strpos($date, '.')) {
            return substr($date, 0, strpos($date, '.'));
        }

        return $date;
    }
}

if ( ! function_exists('config_path'))
{
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

if (! function_exists('replaceTemplates')) {
    function replaceTemplates($str, $templates)
    {
        $template_list = array();
        if (preg_match_all("/\{\{[0-9A-Za-z]+\}\}/", $str, $matches)) {
            foreach ($matches as $match) {
                foreach ($match as $m) {
                    if (! in_array($m, $template_list)) {
                        $template_list[] = str_replace("}}", "", str_replace("{{", "", $m));
                    }
                }
            }
            foreach ($template_list as $template_id) {
                $str = str_replace('{{'.$template_id.'}}', $templates->{$template_id}[0]->content, $str);
            }
        }

        return $str;
    } // replaceTemplates
}

if (! function_exists('cast_date')) {
    function cast_date($date, $format = 'd/m/Y', $initial_format = 'Y-m-d') {
        if (! $date) {
            return null;
        }

        if ($format == $initial_format) {
            $initial_format = 'd/m/Y';
        }

        try {
            return Carbon::createFromFormat($initial_format, $date)->format($format);
        } catch(\Exception $e) {
            return $date;
        }
    }
}

if (! function_exists('presenter_service_description')) {
    function presenter_service_description($service_name) {
        $service_name = preg_replace('/\(([^\)]+)\)/', '(<span style="color: #0088cc;font-weight: bold;">$1</span>)', ucwords(strtolower($service_name)), 1);
        $service_name = preg_replace('/^(.{3} -)/', '<span style="text-transform:uppercase;">$1</span>', $service_name);

        return $service_name;
    }
}

if (! function_exists('presenter_service_status')) {

    function presenter_service_status($service_status_id)
    {
        switch ($service_status_id) {
            case 1: return '<span class="label badge label-success">Ativo</span>';
            case 3: return '<span class="label badge label-warning">Suspenso</span>';
            case 6:
            case 9:
                return '<span class="label badge label-info">Novo</span>';
        }
    }
}


if (! function_exists('presenter_event_status')) {

    function presenter_event_status($event)
    {
        switch ($event->status->event_status_id) {
            case 11:
            case 13:
            case 38:
            case 40:
                $label = 'label-success';
                break;
            case 8:
            case 35:
                $label = 'label-warning';
                break;
            case 12:
            case 14:
            case 15:
            case 39:
            case 41:
            case 42:
                $label = 'label-danger';
                break;
            default:
                $label = 'label-info';
        }

       return '<span class="label badge ' . $label . '">' . $event->status->visible_name . '</span>';
    }
}

if(! function_exists('presenter_event_date')) {
    function presenter_event_date($event)
    {
        return format_data(normalize_postgres_date($event->creation_date), 'Y-m-d H:i:s', 'd/m/Y H:i');
    }
}

if(! function_exists('presenter_event_duration')) {
    function presenter_event_duration($event)
    {
        return formatSeconds($event->event_duration);
    }
}

if(! function_exists('presenter_event_type')) {
    function presenter_event_type($event)
    {
        switch ($event->event_type_id)
        {
            case "IN": $label = 'Incidente';
                break;
            case "RDS": $label = 'RDS';
                break;
        }

        return $label;
    }
}

if(! function_exists('presenter_history_description_client')) {
    function presenter_history_description_client($description_client)
    {
        return addslashes(str_replace("\r", ' ', str_replace("\n", "<br>", htmlentities($description_client))));
    }
}

if (! function_exists('formatSeconds')) {
    function formatSeconds($seconds){
        $dtF = new \DateTime("@0");
        $dtT = new \DateTime("@$seconds");
        if($seconds>=60 && $seconds<=3600)
        {
            return $dtF->diff($dtT)->format('%i<b>m</b> %s<b>s</b>');
        }
        elseif($seconds>=3600 && $seconds<=86400)
        {
            return $dtF->diff($dtT)->format('%h<b>h</b> %i<b>m</b> %s<b>s</b>');
        }
        else if($seconds>=86400)
        {
            return $dtF->diff($dtT)->format('%a<b>d</b> %h<b>h</b> %i<b>m</b> %s<b>s</b>');
        }
        else
        {
            return $dtF->diff($dtT)->format('%s<b>s</b>');
        }
    }
}
if (! function_exists('format_data')) {
    function format_data($date, $from_format = 'Y-m-d', $to_format = 'd/m/Y')
    {
        if (! $date) {
            return null;
        }

        return Carbon::createFromFormat($from_format, $date)->format($to_format);
    }
}

if(! function_exists('presenter_first_character_uppercase')){
    function presenter_first_character_uppercase(string $value){

        $value = preg_replace('/[.,|_-]{1,}/',' ',$value);
        return preg_replace_callback('/\b(.)(.*?)\b/',
            function ($m){
                        return strtoupper($m[1]) . strtolower($m[2]);
                    },
            $value);
    }
}

if (! function_exists('lists')) {
    function lists($collection, $value, $label, $blank_line = false) {
        $result = [];

        if ($blank_line) {
            $result[''] = '';
        }

        foreach ($collection as $item) {
            $result[$item->{$value}] = $item->{$label};
        }

        return $result;
    }
}

if (! function_exists('as_collection')) {
    function as_collection($records, $className = null) {
        $collection = new Collection();

        foreach ($records as $record) {
            $collection->push(($className ? new $className($record) : $record));
        }

        return $collection;
    }
}

if (! function_exists('get_scripts')) {
    function get_scripts() {
        $scripts = \Session::get('_scripts');

        \Session::forget('_scripts');

        return $scripts;
    }
}

if (! function_exists('add_script')) {
    function add_script($script) {
        $scripts = get_scripts();

        if (! $scripts) {
            $scripts = [];
        }

        if (! in_array($script, $scripts)) {
            $scripts[] = $script;
        }

        \Session::put('_scripts', $scripts);
    }
}

if (! function_exists('normalize_postgres_date')) {

    /**
     * Remove miliseconds from postgres date
     *
     * @param $date
     * @return string
     */
    function normalize_postgres_date($date)
    {
        if (strpos($date, '.')) {
            return substr($date, 0, strpos($date, '.'));
        }

        return $date;
    }
}

if (! function_exists('nfe_link')) {
    function nfe_link($invoice, $btn_size = '')
    {
        if (! $invoice['invoice_no'] || ! $invoice['nfe_code'] ) {
            return '<a rel="tooltip" title="NFe não disponível" class="btn '. $btn_size .' btn-primary disabled"><i class="fa fa-file"></i> Nota Fiscal</a>';
        }
        $url = "https://nfe.prefeitura.sp.gov.br/contribuinte/notaprint.aspx?inscricao=33873585&nf={$invoice['invoice_no']}&verificacao={$invoice['nfe_code']}";
        return '<a rel="tooltip" title="Abrir nota fiscal em nova página" class="btn btn-primary '. $btn_size . '"' .
            'onclick="window.open(\''.$url.'\');" href="#"><i class="fa fa-file"></i> Nota Fiscal</a>';
    }
}

if (! function_exists("get_bits_size")) {
    function get_bits_size($size) {
        $suffixes = [
            ['scale' => 'bits', 'divisor' => 1],
            ['scale' => 'Kbits', 'divisor' => 1000],
            ['scale' => 'Mbits', 'divisor' => 1000*1000],
            ['scale' => 'Gbits', 'divisor' => 1000*1000*1000],
            ['scale' => 'Tbits', 'divisor' => 1000*1000*1000*1000],
        ];

        $base = 1;
        if ($size > 0) 
        {
            $base = log($size) / log(1000);
        }
        return $suffixes[floor($base)];
    }
}

if (! function_exists('format_bits')) {
    function format_bits($bytes, $precision = 2)
    {
        $bytes = (float) $bytes;
        if ( $bytes == 0 ) {
            return round(0, $precision) . 'B';
        }
        $base = log($bytes) / log(1000);

        if ($base < 0) {
            $base = 0;
        }

        $suffixes = ['b', 'Kb', 'Mb', 'Gb', 'Tb'];

        return round(pow(1000, $base - floor($base)), $precision) . $suffixes[$base];
    }
}

if (! function_exists('yearMonthTreated')) {
     function yearMonthTreated($yearMonth)
    {
        $arrayData=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $arrayDataPT=array("Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez");
        return str_ireplace($arrayData,$arrayDataPT,format_date($yearMonth, 'Y-m', 'M/Y'));
    }
}

function recursive_array_search($needle,$haystack) {
    foreach($haystack as $key=>$value) {
        $current_key=$key;
        if($needle===$value OR (is_array($value) && recursive_array_search($needle,$value) !== false)) {
            return $current_key;
        }
    }
    return false;
}

function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }
    return false;
}

if (! function_exists('eventWaitingForClient')) {
    function eventWaitingForClient($event)
    {
        return in_array($event->event_status_id, [8, 35]);
    }
}

if (! function_exists('eventNeedConfirmation')) {
    function eventNeedConfirmation($event)
    {
        return in_array($event->event_status_id, [11, 38]);
    }
}

if (! function_exists('as_check')) {
    function as_check($check=false)
    {
        if( $check == true ) {
            return '<i style="color: dodgerblue; font-size:16px;text-align:center;" class="fa fa-check"></i>';
        } else {
            return '<i style="color: lightgrey; font-size:16px;text-align:center;" class="fa fa-minus"></i>';
        }
    }
}

if (! function_exists('colletionPaidStatus')) {
    function colletionPaidStatus()
    {
        return [
            ''      => 'Todas',
            'A'     => 'Abertas',
            'P'     => 'Pagas',
        ];
    }
}

if (! function_exists('collectionStartDate')) {
    function collectionStartDate()
    {
        return [
            ''      => 'Qualquer data',
            '3'     => 'Últimos 3 meses',
            '6'     =>  'Últimos 6 meses' ,
            '12'    => 'Último ano'
        ];
    }
}

if (! function_exists('serviceToServiceType')) {
    function serviceToServiceType($service) {

        $service_conf_list = \Config::get('telium.service_list');

        foreach ($service_conf_list as $service_type => $service_conf) {
            if (
                (isset($service->account_code) && in_array($service->account_code, $service_conf['account_codes'])) ||
                (isset($service->service_catalog->account_code) && in_array($service->service_catalog->account_code, $service_conf['account_codes']))
            ) {
                return $service_type;
            }
        }

        return null;
    }
}

if (! function_exists('serviceNameExhibition')) {
    function serviceNameExhibition($service) {
       $serviceNameExhibition = $service->invoice_description_ok;

        if (trim($service->invoice_description_suffix) != '') {
            $serviceNameExhibition = substr($service->invoice_description_ok, 0, strlen($service->invoice_description_ok) - strlen($service->invoice_description_suffix));
        }

        return $serviceNameExhibition;
    }
}

if (! function_exists('presenter_custom_tools')) {
    function presenter_custom_tools($tools) {
        $custom_tools = config('telium.custom_tools');

        $result = \Illuminate\Support\Collection::wrap($tools);

        if(count($custom_tools) == 0){
            return $result;
        }

        foreach ($result as $item){

            if(array_key_exists( $item->label,$custom_tools)){
                foreach ($custom_tools[$item->label] as $atribute => $value) {
                    $item->$atribute = $value;
                }
            }
            else{
                $item->custom_route = false;
            }
        }

        return $result;
    }
}

if (! function_exists('getSortedMenuItens')) {
    function getSortedMenuItens() {

        $menuItens = config('menu.customer');

        usort($menuItens, function ($a, $b) {
            return $a['precedence'] > $b['precedence'];
        });

        return $menuItens;

    }
}

if (! function_exists('validateMenuItem')) {
    function validateMenuItem($menuItem) {

        $data = \Session::get('user');

        if ($data['current_role'] && !in_array($data['current_role']->customer_role_id, $menuItem['roles'])) {
            return false;
        }

        if ($menuItem['corp'] && !$data['current_customer']->corporate) {
            return false;
        }

        if ($menuItem['channel'] && !$data['current_customer']->channel) {
            return false;
        }

        return true;

    }
}

if (! function_exists('format_ip')) {
    function format_ip($subnet) {

        if(strlen($subnet) > 10) {
            return \IPTools\IP::parseLong($subnet,'IPv6'); //IPV6
        }

        return long2ip($subnet); //IPV4
    }
}

if (! function_exists('check_ip_type')) {
    function check_ip_type($ip) {
        $ip = new \IPTools\IP($ip);
        return $ip->version;
    }
}

if (! function_exists('getPercentageBgColor')) {
    function getPercentageBgColor($percentage) {
        if ($percentage >= 90) {
            return 'danger';
        }
        if ($percentage >= 75) {
            return 'warning';
        }
        return 'success';
    }
}

if (! function_exists('getCatalogAttribute')) {
    function getCatalogAttribute($service, $attr){
        foreach ($service->service_attribute as $attribute) {
            if ($attribute->service_attribute_type_id == $attr) {
                return $attribute->value;
            }
        }

        foreach ($service->service_catalog_attribute as $attribute) {
            if ($attribute->service_catalog_attribute_type_id == $attr) {
                return $attribute->value;
            }
        }

        return null;
    }
}

if (! function_exists('getPercentageValue')) {
    function getPercentageValue($value1, $value2, $precision = 0) {
        if ($value2 > 0) {
            $percentage = ($value1 / $value2) * 100;

            if ($percentage < 0) {
                return 0;
            }

            if ($percentage > 100) {
                return 100;
            }

            if ($precision > 0) {
                return round($percentage, $precision);
            } else {
                return ceil($percentage); 
            }
        } else {
            return 0;
        }
    }
}

if (! function_exists('format_address')) {
    function format_address($type, $street, $number, $complement, $district, $city, $state, $cep) {
        $address = '';

        if ($type) {
            $address .= $type . ' ';
        }
        $address .= $street;
        $address .= ', ' . $number;
        if ($complement) {
            $address .= ', ' . $complement;
        }
        $address .= ' - ';
        if ($district) {
            $address .= $district . ', ';
        }
        $address .= $city;
        $address .= ' - ';
        $address .= $state;
        $address .= ', ';
        $address .= $cep;

        return strtoupper($address);
    }
}

if (! function_exists('findMenuParent')) {
    function findMenuParent(array $trail, $menu = null) {
        if (!$menu) {
            $menu = getSortedMenuItens();
        }
        foreach (array_reverse($trail) as $route) {
            foreach ($menu as $menuItem) {
                if ($route->url == route($menuItem['route'])) {
                    return $route->url;
                }
            }
        }
        return null;
    }
}

if (! function_exists('userRoute')) {
    function userRoute() {
        

        if( preg_match("#^user(.*)$#i", Route::currentRouteName()) ){
            return true;
        }
        return false;
    }
}