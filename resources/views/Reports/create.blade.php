@extends('Reports.base')
@include('partials.message')
@section('actions-content')
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<br/>
<section class="content-header text-center">
        <h1>
          Report Management
        </h1>
      </section>
  <!-- Mobile Menu end -->
  <div class="breadcome-area">
        <div class="container-fluid">
        
<!-- Basic Form Start -->
<div class="basic-form-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div  class="main-sparkline12-hd">
                            <h1 style="color:white;">Create Report</h1>
                        </div>
                    <h2 class="pull-right"></h2>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                            {!! Form::open(['action' => 'ReportsController@displayReport','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                            {{ csrf_field() }}
                                                      
                                            <div class="form-group-inner">
                                                    <div class="row">
                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                    <label style="color:white;" class="login2 pull-right pull-right-pro">Report Title</label>
                                                                </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <input style="color:white;border-radius:10px;" type="text" name="title" class="form-control" required/>
                                                            </div>
                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                    <label style="color:white;border-radius:10px;" class="login2 pull-right pull-right-pro">Report Type</label>
                                                                </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-select-list">
                                                                        <select style="color:white;border-radius:10px;" class="form-control custom-select-value" name="type">
                                                                            <option value="">Select</option>    
                                                                            <option value="mpesa">Expenditure</option>
                                                                            <option value="bank">Top Up</option>
                                                                            <option value="cash">Expense Accounts</option>
                                                                            </select>
                                                                    </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                               
                                                <br/>
                                                <div class="form-group-inner">
                                                        <div class="row">
                                                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">From Date </label>
                                                                    </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <div style="color:white; " class="input-group ccol-lg-3 col-md-12 col-sm-12 col-xs-12">
    
                                                                            <input style="color:white;border-radius:10px;" class="form-control" id="date" name="from_date" placeholder="yy/mm/dd" type="text" required/>
                                                                           </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                    <label style="color:white;" class="login2 pull-right pull-right-pro">To Date</label>
                                                                </div>
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <div  class="input-group ccol-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                           
                                                                            </div>
                                                                            <input  style="color:white;border-radius:10px;" class="form-control" id="date1" name="to_date" placeholder="yy/mm/dd" type="text"/>
                                                                           
                                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                          
                                   
                                            <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-9">
                                                            <div class="login-horizental cancel-wp pull-left">
                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Generate</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            
                                            {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<script type="text/javascript">

    var options={
            format: 'YYYY-MM-DD',
            todayHighlight: true,
            autoclose: true,
        };

    $('#date').datepicker(options);
    $('#date1').datepicker(options);

</script>
<!-- Basic Form End-->
</div>
@endsection
