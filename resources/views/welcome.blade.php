@extends('layouts.master')
@section('content')
<br/>
<div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="icon nalika-home"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Today's Analytics</h2>
                                        <p>Welcome to Movetech Petty Cash <span class="bread-ntd">Management</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- income order visit user Start -->
  <div class="income-order-visit-user-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="income-dashone-total reso-mg-b-30">
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-nalika-rate">
                                <h3><span>$</span><span class="counter">{{$total_topup}}</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"></span>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Total Top Up</p>
                                <span class="income-percentange bg-green"><span class="counter">95</span>% <i class="fa fa-bolt"></i>
                                </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="income-dashone-total reso-mg-b-30">
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-nalika-rate">
                                    <h3><span class="counter">6400</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline6"></span>
                                </div>
                            </div>
                            <div class="income-range order-cl">
                                <p>Total Expenditure</p>
                                <span class="income-percentange bg-red"><span class="counter">65</span>% <i class="fa fa-level-up"></i>
                                </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="income-dashone-total reso-mg-b-30 res-mg-t-30">
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-nalika-rate">
                                    <h3><span class="counter">4500</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline2"></span>
                                </div>
                            </div>
                            <div class="income-range visitor-cl">
                                <p>New Visitor</p>
                                <span class="income-percentange bg-blue"><span class="counter">75</span>% <i class="fa fa-level-up"></i>
                                </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="income-dashone-total res-mg-t-30">
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-nalika-rate">
                                    <h3><span class="counter">235400</span></h3>
                                </div>
                                
                            </div>
                            <div class="income-range low-value-cl">
                                <p>In first month</p>
                                <span class="income-percentange bg-purple"><span class="counter">35</span>% <i class="fa fa-level-down"></i>
                                </span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- income order visit user End -->
    <div class="dashtwo-order-area mg-tb-30">
       
    </div>
    <div class="analytics-sparkle-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Expense Last Week</h5>
                            <h2 class="counter">5600</h2>
                            <div id="sparkline22"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Expense This week</h5>
                            <h2 class="counter">3400</h2>
                            <div id="sparkline23"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30 res-mg-t-30">
                        <div class="analytics-content">
                            <h5>Last month</h5>
                            <h2 class="counter">3300</h2>
                            <div id="sparkline24"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line res-mg-t-30">
                        <div class="analytics-content">
                            <h5>Avarage time</h5>
                            <h2>00:06:40</h2>
                            <div id="sparkline25"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="analysis-rounded-area mg-tb-30">
        <div class="container-fluid">
            </div>
        </div>
    </div>
    <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019 <a href="../">Movetech</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection