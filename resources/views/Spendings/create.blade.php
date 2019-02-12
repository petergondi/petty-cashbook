@extends('Spendings.base')
@section('action-content')
<br/>
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
                                <h1 style="color:white;">Record Daily Expenditure</h1>
                            </div>
                        </div>
                        <p style="text-align: center;">Cost</p>
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="all-form-element-inner">
                                            <form action="#">
                                                
                                               @foreach($expense_accounts as $expense_account)
                                               
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">{{$expense_account->account_name}} Expense</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="input-group">
                                                                <input style="color:white;" type="text" class="form-control">
                                                                <span class="input-group-addon">.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                               
                                                <div class="form-group-inner">
                                                    <div class="login-btn-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3"></div>
                                                            <div class="col-lg-9">
                                                                <div class="login-horizental cancel-wp pull-left">
                                                                    <button class="btn btn-info" type="submit">Cancel</button>
                                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Submit</button>
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
                       
                    </div>

                </div>
            </div>
        </div>
        </div>
        <!-- Basic Form End-->
        </div>
            <!-- /.content -->
@endsection
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
        <div class="input-group">
            <input style="color:white;" name="{{$expense_account->account_name}}" type="text" class="form-control" placeholder="kshs. amount given">
            <span class="input-group-addon">.00</span>
        </div>
    </div>
