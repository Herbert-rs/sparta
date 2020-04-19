<script src="/js/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/js/popper/popper.min.js"></script>
<script src="/js/bootstrap/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="/js/jquery/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/js/waves/waves.js"></script>
<!--Menu sidebar -->
<script src="/js/sidebar/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="/js/sticky/sticky-kit.min.js"></script>
<script src="/js/jquery/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="/js/adminlte/custom.min.js"></script>

@toastr_js
@toastr_render

@stack ('scripts')

<script type="application/javascript">

    if($.fn.dataTable) {
        $.extend(true, $.fn.dataTable.defaults, {
            "lengthChange": false,
            "pageLength": 20,
        });
    }
</script>
