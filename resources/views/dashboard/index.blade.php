@extends('layout.admin')

@section('title', 'Dashboard')

@section('content')
<div class="right_col" role="main" style="min-height: 1381px;">
    <div class="">
        <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="count">{{$siswa->count()}}</div>
            <h3>Jumlah Pendaftar</h3>
            <p>Jumlah Pendaftar Selama Ini</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
            <div class="icon"><i class="fa fa-automobile"></i></div>
            <div class="count">{{$tkr}}</div>
            <h3>TKR</h3>
            <p>Jumlah Pendaftar Jurusan TKR</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
            <div class="icon"><i class="fa fa-cogs"></i></div>
            <div class="count">{{$tpm}}</div>
            <h3>TPM</h3>
            <p>Jumlah Pendaftar Jurusan TPM</p>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="tile-stats">
            <div class="icon"><i class="fa fa-desktop"></i></div>
            <div class="count">{{$rpl}}</div>
            <h3>RPL</h3>
            <p>Jumlah Pendaftar Jurusan RPL</p>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
            <div class="x_title">
                <h2>Transaction Summary <small>Weekly progress</small></h2>
                <div class="filter">
                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span>March 22, 2020 - April 20, 2020</span> <b class="caret"></b>
                </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="demo-container" style="height:280px">
                    <div id="chart_plot_02" class="demo-placeholder" style="padding: 0px; position: relative;"><canvas class="flot-base" width="756" height="280" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 756px; height: 280px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 53px; text-align: center;">21/04/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 123px; text-align: center;">23/04/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 194px; text-align: center;">25/04/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 265px; text-align: center;">27/04/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 335px; text-align: center;">29/04/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 406px; text-align: center;">01/05/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 477px; text-align: center;">03/05/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 548px; text-align: center;">05/05/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 618px; text-align: center;">07/05/20</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 63px; top: 265px; left: 689px; text-align: center;">09/05/20</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 248px; left: 12px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 198px; left: 6px; text-align: right;">20</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 149px; left: 6px; text-align: right;">40</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 99px; left: 6px; text-align: right;">60</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 50px; left: 6px; text-align: right;">80</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="756" height="280" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 756px; height: 280px;"></canvas><div class="legend"><div style="position: absolute; width: 71px; height: 15px; top: -17px; right: 21px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:-17px;right:21px;;font-size:smaller;color:#3f3f3f"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid rgb(150,202,89);overflow:hidden"></div></div></td><td class="legendLabel">Email Sent&nbsp;&nbsp;</td></tr></tbody></table></div></div>
                </div>
                <div class="tiles">
                    <div class="col-md-4 tile">
                    <span>Total Sessions</span>
                    <h2>231,809</h2>
                    <span class="sparkline11 graph" style="height: 160px;"><canvas width="198" height="40" style="display: inline-block; width: 198px; height: 40px; vertical-align: top;"></canvas></span>
                    </div>
                    <div class="col-md-4 tile">
                    <span>Total Revenue</span>
                    <h2>$231,809</h2>
                    <span class="sparkline22 graph" style="height: 160px;"><canvas width="200" height="40" style="display: inline-block; width: 200px; height: 40px; vertical-align: top;"></canvas></span>
                    </div>
                    <div class="col-md-4 tile">
                    <span>Total Sessions</span>
                    <h2>231,809</h2>
                    <span class="sparkline11 graph" style="height: 160px;"><canvas width="198" height="40" style="display: inline-block; width: 198px; height: 40px; vertical-align: top;"></canvas></span>
                    </div>
                </div>

                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                <div>
                    <div class="x_title">
                    <h2>Top Profiles</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    </div>
                    <ul class="list-unstyled top_profiles scroll-view">
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                        <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                        <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-blue profile_thumb">
                        <i class="fa fa-user blue"></i>
                        </a>
                        <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                        <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                        </div>
                    </li>
                    <li class="media event">
                        <a class="pull-left border-green profile_thumb">
                        <i class="fa fa-user green"></i>
                        </a>
                        <div class="media-body">
                        <a class="title" href="#">Ms. Mary Jane</a>
                        <p><strong>$2300. </strong> Agent Avarage Sales </p>
                        <p> <small>12 Sales Today</small>
                        </p>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>

            </div>
            </div>
        </div>
        </div>



        <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
            <div class="x_title">
                <h2>Weekly Summary <small>Activity shares</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                <div class="col-md-7" style="overflow:hidden;">
                    <span class="sparkline_one" style="height: 160px; padding: 10px 25px;"><canvas width="478" height="125" style="display: inline-block; width: 478px; height: 125px; vertical-align: top;"></canvas></span>
                    <h4 style="margin:18px">Weekly sales progress</h4>
                </div>

                <div class="col-md-5">
                    <div class="row" style="text-align: center;">
                    <div class="col-md-4"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                        <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0px; width: 110px; height: 110px;"></canvas>
                        <h4 style="margin:0">Bounce Rates</h4>
                    </div>
                    <div class="col-md-4"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                        <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0px; width: 110px; height: 110px;"></canvas>
                        <h4 style="margin:0">New Traffic</h4>
                    </div>
                    <div class="col-md-4"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                        <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0px; width: 110px; height: 110px;"></canvas>
                        <h4 style="margin:0">Device Share</h4>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>



        <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
            <div class="x_title">
                <h2>Top Profiles <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item One Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Three Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
            <div class="x_title">
                <h2>Top Profiles <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item One Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Three Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
            <div class="x_title">
                <h2>Top Profiles <small>Sessions</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item One Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Two Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
                <article class="media event">
                <a class="pull-left date">
                    <p class="month">April</p>
                    <p class="day">23</p>
                </a>
                <div class="media-body">
                    <a class="title" href="#">Item Three Title</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </article>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection
