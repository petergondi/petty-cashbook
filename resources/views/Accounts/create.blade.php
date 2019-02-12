@extends('Accounts.base')
@section('action-content')
<br/>
<section class="content-header text-center">
        <h1>
          Account Management
        </h1>
      </section>
  <!-- Mobile Menu end -->
  <div class="breadcome-area">
        <div class="container-fluid">
        </div>
    </div>
</div>
@include('partials.message')
<!-- Basic Form Start -->
<div class="basic-form-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline12-list">
                    <div class="sparkline12-hd">
                        <div  class="main-sparkline12-hd">
                            <h1 style="color:white;">Create Expense Account</h1>
                        </div>
                    </div>
                    {!! Form::open(['action' => 'AccountsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    {{ csrf_field() }}
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <form action="#">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Account Name</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input style="color:white;" type="text" name="account_name" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Account Description</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <textarea class="form-control"  name="account_description"  rows="10" id="comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Creator</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input style="color:white;" type="text" name="surname" class="form-control" placeholder="Surname" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Email</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                        <input style="color:white;" type="text" name="creator_email" class="form-control" placeholder="Email" />
                                                    </div>
                                                </div>
                                            </div>
                                   
                                            <div class="form-group-inner">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3"></div>
                                                        <div class="col-lg-9">
                                                            <div class="login-horizental cancel-wp pull-left">
                                                                <button class="btn btn-info" type="submit">Cancel</button>
                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
<!-- Basic Form End-->
</div>
@endsection
