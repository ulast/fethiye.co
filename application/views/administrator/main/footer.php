<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 13:20
 * Mail  : ulas@mail.com
 */
?>
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2014 &copy; Metronic by keenthemes.
    </div>
    <div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/administrator/plugins/respond.min.js"></script>
<script src="assets/administrator/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/administrator/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/administrator/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/administrator/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="assets/administrator/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="assets/administrator/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/administrator/plugins/select2/select2.min.js"></script>
<script src="assets/administrator/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/administrator/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="assets/administrator/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/administrator/plugins/ckeditor/ckeditor.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/administrator/scripts/core/app.js" type="text/javascript"></script>
<script src="assets/administrator/scripts/custom/index.js" type="text/javascript"></script>
<script src="assets/administrator/scripts/custom/tasks.js" type="text/javascript"></script>
<script src="assets/administrator/scripts/custom/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Index.initDashboardDaterange();
        Index.initIntro();
        Tasks.initDashboardWidget();
        FormSamples.init();
    });

    $(function(){
        var url = window.location.pathname,
            urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
        // now grab every link from the navigation
        $('.page-sidebar-menu li a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).parent().addClass('active');
                $(this).parent().parent().parent().addClass('active');
            }
        });
        $('.nav--primary li a').each(function(){
            // and test its normalized href against the url pathname regexp
            if(urlRegExp.test(this.href.replace(/\/$/,''))){
                $(this).parent().addClass('selected');
            }
        });
    });

    /*
    $('#add_hotel').submit(function(){
        $.ajax({
            url : "administrator/hotel/save",
            type: "POST",
            data : $(this).serializeArray(),
            success: function(data, textStatus, jqXHR)
            {
                window.location.href = data.redirect;
            },
            error: function (jqXHR, textStatus, errorThrown)
            {

            }
        });
        return false;
    });
    */
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>