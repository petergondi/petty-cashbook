@extends('layouts.master')
@section('content')
    <!-- Content Header (Page header) --> 
    
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
    
    <br/><br/><br/>
    <section class="text-center">
      <h1>
        Spending Management
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
            <div class="row">
                   
                </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                    <div class="col-sm-4 pull-right">
                            <a href="/admin/tasks/assign">
                        <button type="button" class="btn btn-info add-new "><i class="fa fa-plus"></i> Add  Account New Expense</button>
                            </a>
                    </div>
                <div class="sparkline12-hd">
                        <div  class="main-sparkline12-hd">
                        <h1 style="color:white;">Date: {{$now}}</h1>
                        <div class="col-sm-1 bg-primary" style="color:white;border-radius:10px;">{{$weekday}}</div>
                            </div>
                            <br/><br/>
                    <div  class="main-sparkline12-hd">
                        <h1 style="color:white;">Record Daily Expenditure</h1>
                    </div>
                    <div  class="main-sparkline12-hd">
                        <h1 style="color:white;">Opening Balance: {{$balance}}</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    {!! Form::open(['action' => 'SpendingsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                    {{ csrf_field() }}
                                      
                                       <div class="container">
                                            <table id="myTable" class=" table order-list">
                                            <thead>
                                                <tr>
                                                    <td>Expense</td>
                                                    <td>Purpose</td>
                                                    <td>Person Given</td>
                                                    <td>Amount</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                            <td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                   
                                                                        <select style="color:white;" class="form-control custom-select-value" name="account[]" required>
                                                                            <option value="">select expense type</option> 
                                                                            @foreach($expense_accounts as $expense_account)
                                                                        <option value="{{$expense_account->account_name}}">{{$expense_account->account_name}}</option> 
                                                                            @endforeach   
                                                                            </select>
                                                                 
                                                                </td>
                                                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                        <input type="text" name="purpose[]"  class="form-control" required/>
                                                    </td>
                                                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                    <input type="text" name="person[]"   class="form-control" required/>
                                                    </td>
                                                    <td class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                            <div class="input-group">
                                                        <input type="text" name="amount[]" id="qty" class="form-control" required/>
                                                        <span class="input-group-addon">.00</span>
                                                            </div>
                                                    </td>
                                                    <td class="col-sm-2"><a class="deleteRow"></a>
                                        
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="5" style="text-align: left;">
                                                        <input type="button" class="btn btn-lg btn-block bg-primary " id="addrow" value="Add Daily Expense" required/>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <div class="col-lg-3"></div>
                                                    <div class="col-lg-9">
                                                        <div class="login-horizental cancel-wp pull-left">
                                                            <button class="btn btn-info" type="submit">Cancel</button>
                                                            <button class="btn btn-sm btn-primary login-submit-cs" id="submit" type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="main-sparkline12-hd">
                                                <h1 style="color:white;" id="rel">Closing Balance:<h1>
                                                <h1 id="result" style="color:white;"><span id="rel"><span></h1>
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
<script>
      
    
$(document).ready(function () {
    var counter = 0;
    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols +='<td> <select style="color:white;" class="form-control custom-select-value"  name="account[]" required><option value="">select expense type</option> @foreach($expense_accounts as $expense_account)  <option value="{{$expense_account->account_name}}">{{$expense_account->account_name}}</option>@endforeach </select></td>';                                                                                                                                                                                                            
        cols += '<td><input type="text" class="form-control"name="purpose[]" required/></td>';
        cols += '<td><input type="text" class="form-control"  name="person[]" required/></td>';
        cols += '<td> <div class="input-group"><input type="text" class="form-control" id="qty" name="amount[]"/><span class="input-group-addon" required>.00</span></div></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });
   


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}


$('#qty').on('keyup',function(){
            $.get("{{URL::to('spend/create')}}",function(data){
             var balance=data;
            
             if($("#qty").val().length == 0){
                 $('#result').text(balance);
                 $('#rel').text(bal);
             }
             else{
                var sum = 0;
                $('#qty').each(function() {
        sum += Number($(this).val());
    });
   
             $('#result').text(parseInt(balance)-(sum));
             }
            
            })
       
})

$.get("{{URL::to('spend/create')}}",function(data){     
    var balance=data;
   $('#result').text(balance);
})
$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
//$("#submit").on("click", function () {
//      event.preventDefault();
//   $.ajax({
//      type:"post",
//      url:"{{url('spending/create') }}",
//      data:$(this).serialize(),
//      success: function(data){
//         alert("Data Save: " + data);
//      }
//   });
//   })
   

</script>

         
    
     
    
<!-- Basic Form End-->
</div>
    <!-- /.content -->
@endsection