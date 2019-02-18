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
    <!--modal content-->
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
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
    <!--end modal content--> 
      @include('partials.message')
<div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Spendings</h4>
     <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalCenter">
  Export
</button>
                        <div class="col-lg-3 col-md-5 col-sm-3 col-xs-12">
                            <div class="header-top-menu tabl-d-n hd-search-rp">
                                <div class="breadcome-heading">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-4 pull-right">
                                <a href="{{route('spendings.create')}}">
                                    <button type="button" class="btn btn-info add-new "><i class="fa fa-plus"></i> Add New Spending</button>
                                        </a>
                                </div>
                            </div>
                            <form  role="search" class="">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-group">
                                                <div class="input-group-btn custom-dropdowns-button">
                                                    <select id="inputtype"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false">Action <span class="caret"></span>
                                                        <ul class="dropdown-menu">
                                                            <option selected>Choose...</option>
                                                                    <option value="date">Date</option>
                                                                    <option value="expense">Expense</option>
                                                                    <option value="person_given">Person Given
                                                                    </option>
                                                                </ul>
                                                    </select>
                                                </div>
                                                <input type="text" placeholder="filter search" id="search" class="form-control">
                                                
                                            </div>
                                        </div>
                            </form>
                            <div id="printableArea">
                        <table id="mytable" >
                            <tr>
                                <th>Expense Name</th>
                                <th>Date</th>
                                <th>Person Given</th>
                                <th>Purpose</th>
                                <th>Amount Given(ksh.)</th>
                                <th>Closing Balance</th>
                                <th>Setting</th>
                            </tr>
                            @foreach($spendings as $spend)
                            <tr>
                            <td>{{$spend->expense_name}}</td>
                            <td>{{$spend->created_at->format('d/m/Y')}}</td>
                            @if($spend->person_given==null)
                            <td>Not Provided</td>
                            @else
                            <td>{{$spend->person_given}}</td>
                            @endif
                            <td>{{$spend->purpose}}</td>
                            @if($spend->expense_amount==null)
                            <td>0</td>
                            @else
                            <td>{{$spend->expense_amount}}</td>
                            @endif
                            @if($spend->closing_balance==null)
                            <td>Not Provided</td>
                            @else
                            <td>{{$spend->closing_balance}}</td>
                            @endif
                                <td>  
                                    <button data-toggle="tooltip" title="Trash" data-id="{{$spend->id}}" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            
                            @endforeach
                                    <tr class="bg-primary">
                                      <td><h5>Total Expense</h5></td>
                                    <td><h5>{{$total_expense}}</h5></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr class="bg-primary">
                                            <td><h5>Closing Balance</h5></td>
                                    <td><h5>{{$balance}}</h5></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                        </table>
                            </div>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                {{ $spendings->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
 
        $('#search').on('keyup',function(){
         
        $value=$(this).val();
        $select=$('#inputtype').val();
         
        $.ajax({
         
        type : 'get',
         
        url : '{{URL::to('spending/view')}}',
         
        data:{'search':$value, 'select':$select},
         
        success:function(data){
         
        $('tbody').html(data);
}
         
        })
         
        }); 
        
        
    });
     $(".pd-setting-ed").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        var tr = $(this).closest('tr');
        var confirmation = confirm("are you sure you want to delete?");
        //if ( confirm("Do you want to Delete?")) {
    // If you pressed OK!";
     if (confirmation) {

        $.ajax(
        {
            url: "/spending/delete/"+id,
            type: 'DELETE',
            dataType: "JSON",
            data: {
                "id": id,
                "_method": 'DELETE',
                "_token": token,
            },
            success: function (data)
          {
               
                tr.fadeOut(1000, function(){
                        $(this).remove();
                    });
 
                  
            },
        });
         }
        else{
            return false;
        }
        
        

        
    });
        </script>
         
        <script type="text/javascript">
         
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
         
        </script>
    @endsection