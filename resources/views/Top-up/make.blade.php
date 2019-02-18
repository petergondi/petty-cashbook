@extends('Top-up.base')
@include('partials.message')
@section('actions-content')
<br/>


<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="content-header text-center">
        <h1>
          Account Top Up
        </h1>
      </section>
  <!-- Mobile Menu end -->
  <div class="breadcome-area">
        <div class="container-fluid">
                <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered " role="document">
                          <div style="background:black;" class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" >Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
                       
                    <h2  class="pull-right" id="balance">Balance: ksh.{{$balance}}</h2>
                    <h2  class="pull-right" id="bal"></h2>
                      
                    </div>
                    <div class="sparkline12-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="all-form-element-inner">
                                        <form id="myForm">
                                            <div class="form-group-inner">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Top Up</label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="form-select-list">
                                                            <select style="color:white;" class="form-control custom-select-value" id="account" name="account" required>
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
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                        <label style="color:white;" class="login2 pull-right pull-right-pro">Amount</label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="input-group">
                                                            <input style="color:white;" name="topup" type="text" id="topup" class="form-control" required>
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
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                        <input style="color:white" type="text" name="petty_cashier" id="petty_cashier" class="form-control" required/>
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
                                                                <button class="btn btn-sm btn-primary login-submit-cs" id="submit">Top Up</button>
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
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
 $('#submit').on('click', function(e) {
    e.preventDefault();
       var account = $('#account').val();
       var topup = $('#topup').val();
       var petty_cashier = $('#petty_cashier').val();
       $.ajax({
           type: "POST",
           url:'{{URL::to('topup/make')}}',
           data: {account:account, topup:topup, petty_cashier:petty_cashier,_token: '{!! csrf_token() !!}'},
           success:function(data){
            if(!($("#account").val().length||$("#topup").val().length||!$("#petty_cashier").val().length)== 0){
            document.getElementById('bal').innerHTML += 'Balance: ksh.';
            $('#balance').text(data);
            $('#account').val("");
            $('#topup').val("");
            $('#petty_cashier').val("");
            $('#exampleModalCenter').modal('show'); 
            setTimeout(function() {
                $('#exampleModalCenter').modal('hide'); 
}, 2000)
        }
}
       });
   });
</script>
@endsection
