<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bucketadmin.themebucket.net/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Aug 2014 13:02:30 GMT -->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.html">

    <title>Urithi : Sales</title>

    <!--Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
     <link href="<?php echo base_url(); ?>assets/css/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/clndr.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>assets/https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<?php include 'header.php'; ?>

<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->   
        <?php include 'lsb.php'; ?>
        <!-- sidebar menu end-->
    </div>
</aside>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">

<!--mini statistics start-->
<div class="row">
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="gauge-canvas">
                        <h4 class="widget-h">Monthly Expense</h4>
                        <canvas width=160 height=100 id="gauge"></canvas>
                    </div>
                    <ul class="gauge-meta clearfix">
                        <li id="gauge-textfield" class="pull-left gauge-value"></li>
                        <li class="pull-right gauge-title">Safe</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <div class="daily-visit">
                        <h4 class="widget-h">Daily Visitors</h4>
                        <div id="daily-visit-chart" style="width:100%; height: 100px; display: block">

                        </div>
                        <ul class="chart-meta clearfix">
                            <li class="pull-left visit-chart-value">3233</li>
                            <li class="pull-right visit-chart-title"><i class="fa fa-arrow-up"></i> 15%</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <h4 class="widget-h">Top Advertise</h4>
                    <div class="sm-pie">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <section class="panel">
            <div class="panel-body">
                <div class="top-stats-panel">
                    <h4 class="widget-h">Daily Sales</h4>
                    <div class="bar-stats">
                        <ul class="progress-stat-bar clearfix">
                            <li data-percent="50%"><span class="progress-stat-percent pink"></span></li>
                            <li data-percent="90%"><span class="progress-stat-percent"></span></li>
                            <li data-percent="70%"><span class="progress-stat-percent yellow-b"></span></li>
                        </ul>
                        <ul class="bar-legend">
                            <li><span class="bar-legend-pointer pink"></span> New York</li>
                            <li><span class="bar-legend-pointer green"></span> Los Angels</li>
                            <li><span class="bar-legend-pointer yellow-b"></span> Dallas</li>
                        </ul>
                        <div class="daily-sales-info">
                            <span class="sales-count">1200 </span> <span class="sales-label">Products Sold</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!--mini statistics end-->
<div class="row">
    <div class="col-md-8">
        <!--earning graph start-->
        <section class="panel">
            <header class="panel-heading">
                Earning Graph <span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
            <a href="javascript:;" class="fa fa-cog"></a>
            <a href="javascript:;" class="fa fa-times"></a>
            </span>
            </header>
            <div class="panel-body">

                <div id="graph-area" class="main-chart">
                </div>
                <div class="region-stats">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="region-earning-stats">
                                This year total earning <span>$68,4545,454</span>
                            </div>
                            <ul class="clearfix location-earning-stats">
                                <li class="stat-divider">
                                    <span class="first-city">$734503</span>
                                    Rocky Mt,NC </li>
                                <li class="stat-divider">
                                    <span class="second-city">$734503</span>
                                    Dallas/FW,TX </li>
                                <li>
                                    <span class="third-city">$734503</span>
                                    Millville,NJ </li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div id="world-map" class="vector-stat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--earning graph end-->
    </div>
    <div class="col-md-4">
        <!--widget graph start-->
        <section class="panel">
            <div class="panel-body">
                <div class="monthly-stats pink">
                    <div class="clearfix">
                        <h4 class="pull-left"> January 2015</h4>
                        <!-- Nav tabs -->
                        <div class="btn-group pull-right stat-tab">
                            <a href="#line-chart" class="btn stat-btn active" data-toggle="tab"><i class="ico-stats"></i></a>
                            <a href="#bar-chart" class="btn stat-btn" data-toggle="tab"><i class="ico-bars"></i></a>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="line-chart">
                            <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-min-spot-color="false" data-max-spot-color="false" data-line-color="#ffffff" data-spot-color="#ffffff" data-fill-color="" data-highlight-line-color="#ffffff" data-highlight-spot-color="#e1b8ff" data-spot-radius="3" data-data="[100,200,459,234,600,800,345,987,675,457,765]">
                            </div>
                        </div>
                        <div class="tab-pane" id="bar-chart">
                            <div class="sparkline" data-type="bar" data-resize="true" data-height="75" data-width="90%" data-bar-color="#d4a7f5" data-bar-width="10" data-data="[300,200,500,700,654,987,457,300,876,454,788,300,200,500,700,654,987,457,300,876,454,788]"></div>
                        </div>
                    </div>
                </div>
                <div class="circle-sat">
                    <ul>
                        <li class="left-stat-label"><span class="sell-percent">60%</span><span>Direct Sell</span></li>
                        <li><span class="epie-chart" data-percent="45">
                        <span class="percent"></span>
                        </span></li>
                        <li class="right-stat-label"><span class="sell-percent">40%</span><span>Channel Sell</span></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--widget graph end-->
        <!--widget graph start-->
        <section class="panel">
            <div class="panel-body">
                <ul class="clearfix prospective-spark-bar">
                    <li class="pull-left spark-bar-label">
                        <span class="bar-label-value"> $18887</span>
                        <span>Prospective Label</span>
                    </li>
                    <li class="pull-right">
                        <div class="sparkline" data-type="bar" data-resize="true" data-height="40" data-width="90%" data-bar-color="#f6b0ae" data-bar-width="5" data-data="[300,200,500,700,654,987,457,300,876,454,788,300,200,500,700,654,987,457,300,876,454,788]"></div>
                    </li>
                </ul>
            </div>
        </section>
        <!--widget graph end-->
        <!--widget weather start-->
        <section class="weather-widget clearfix">
            <div class="pull-left weather-icon">
                <canvas id="icon1" width="60" height="60"></canvas>
            </div>
            <div>
                <ul class="weather-info">
                    <li class="weather-city">New York <i class="ico-location"></i></li>
                    <li class="weather-cent"><span>18</span></li>
                    <li class="weather-status">Rainy Day</li>
                </ul>
            </div>
        </section>
        <!--widget weather end-->
    </div>
</div>
<!--mini statistics start-->
<div class="row">
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
            <div class="mini-stat-info">
                <span>320</span>
                New Order Received
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
            <div class="mini-stat-info">
                <span>22,450</span>
                Copy Sold Today
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
            <div class="mini-stat-info">
                <span>34,320</span>
                Dollar Profit Today
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
            <div class="mini-stat-info">
                <span>32720</span>
                Unique Visitors
            </div>
        </div>
    </div>
</div>





</div>
</div>
</section>
</section>
<!--main content end-->
<!--right sidebar start-->
<?php include 'rsb.php'; ?>
<!--right sidebar end-->

</section>

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo base_url(); ?>assets/js/skycons/skycons.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/easypiechart/jquery.easypiechart.js"></script>
<script src="<?php echo base_url(); ?>assets/js/calendar/clndr.js"></script>
<script src="<?php echo base_url(); ?>assets/js/calendar/moment-2.2.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/evnt.calendar.init.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url(); ?>assets/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="<?php echo base_url(); ?>assets/js/gauge/gauge.js"></script>

<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<!--clock init-->
<script src="<?php echo base_url(); ?>assets/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="<?php echo base_url(); ?>assets/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="<?php echo base_url(); ?>assets/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="<?php echo base_url(); ?>assets/js/morris-chart/morris.js"></script>
<script src="<?php echo base_url(); ?>assets/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<!--script for this page-->
</body>

<!-- Mirrored from bucketadmin.themebucket.net/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Aug 2014 13:02:30 GMT -->
</html>
