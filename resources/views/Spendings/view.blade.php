@extends('layouts.master')
@section('content')
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- Content Header (Page header) --> 
    
    <br/><br/><br/>
    <section class="text-center">
      <h1>
        Spending Management
      </h1>
    </section>
    <script>
    function printDiv() {
        w=window.open();
w.document.write($('#printArea').html());
w.print();
w.close();
 </script>
      @include('partials.message')
<div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Spendings</h4>
                        <button class="btn btn-primary hidden-print pull-right" onclick="printDiv('printableArea')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
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
                                                    <select id="inputState"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" aria-expanded="false">Action <span class="caret"></span>
                                                        <ul class="dropdown-menu">
                                                            <option selected>Choose...</option>
                                                                    <option>Date</option>
                                                                    <option>Expense</option>
                                                                    <option>Person Given</option>
                                                                </ul>
                                                    </select>
                                                </div>
                                                <input type="text" placeholder="filter search" id="search" class="form-control">
                                                
                                            </div>
                                        </div>
                            </form>
                            <div id="printableArea">
                        <table >
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
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
    <script type="text/javascript">
 
        $('#search').on('keyup',function(){
         
        $value=$(this).val();
         
        $.ajax({
         
        type : 'get',
         
        url : '{{URL::to('spending/view')}}',
         
        data:{'search':$value},
         
        success:function(data){
         
        $('tbody').html(data);
}
         
        })
         
        }); 
        
        </script>
         
        <script type="text/javascript">
         
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
         
        </script>
    @endsection