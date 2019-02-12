@extends('Top-up.base')
@include('partials.message')
@section('actions-content')
<br/>
<section class="content-header text-center">
        <h1>
          Account Top Up
        </h1>
      </section>
  <!-- Mobile Menu end -->
  <div class="breadcome-area">
        <div class="container-fluid">
        </div>
    </div>
</div>
<!-- Basic Form Start -->
<div class="basic-form-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div  class="main-sparkline12-hd">
                            <h1 style="color:white;">Make Top Up</h1>
                        </div>
                    <h2 class="pull-right">Balance: ksh.{{$balance}}</h2>
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                            {!! Form::open(['action' => 'TopupController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                                            {{ csrf_field() }}
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Top Up</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select style="color:white;" class="form-control custom-select-value" name="account">
                                                                <option value="">select top up type</option>    
                                                                <option value="mpesa">Mpesa</option>
                                                                <option value="bank">Bank</option>
                                                                <option value="cash">Cash</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Amount</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="input-group">
                                                            <input style="color:white;" name="topup" type="text" class="form-control">
                                                            <span class="input-group-addon">.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Petty Cashier</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input style="color:white" type="text" name="petty_cashier" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                   
                                            <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-9">
                                                            <div class="login-horizental cancel-wp pull-left">
                                                                <button class="btn btn-white" type="submit">Cancel</button>
                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Top Up</button>
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
<!-- Basic Form End-->
</div>
@endsection
