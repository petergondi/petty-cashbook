@extends('Top-up.base')
@section('actions-content')
<br/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="content-header text-center">
        <h1>
          Account Top Up
        </h1>
      </section>
      @include('partials.message')
  <!-- Mobile Menu end -->
  <div class="breadcome-area">
        <div class="container-fluid">
        </div>
    </div>
</div>
<div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1 style="color:white;">Top Up <span class="table-project-n">Data</span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select>
                                </div>
                                <br/>
                                <table  class="table table-bordered">
                                        <thead >
                                            <tr class="bg-primary" >
                                                <th >Date</th>
                                                <th>Account Type</th>
                                                <th>Top up</th>
                                                <th>Petty Cashier</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               @foreach($topups as $topup)
                                                <tr>
                                                        <td>{{$topup->created_at->format('d/m/Y')}}</td>
                                                        <td>{{$topup->account_type}}</td>
                                                        <td>{{$topup->topup}}</td>
                                                        <td>{{$topup->petty_cashier}}</td>
                                                            <td>
                                                                <button data-toggle="tooltip" title="Edit"  class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                <button data-toggle="tooltip" title="Trash" data-id="{{ $topup->id }}"  class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                        <tr class="bg-primary">
                                                            <td id="result">Total Topup:{{$total_topup}}</td>
                                                            <td id="cash">Cash:{{$cash}}</td>
                                                            <td id="mpesa">Mpesa:{{$mpesa}}</td>
                                                            <td id="bank">Bank:{{$bank}}</td>
                                                            <td></td>
                                                            
                                                        </tr>
                                                        
                                                      
                                                                       
                                                                       
                                                                  
                                                                       
                                                           
                                                            
                                        </tbody>
                                    </table>
                                <div class="custom-pagination">
                                        <ul class="pagination">
                                                {{$topups->links()}}
                                        </ul>
                                    </div>
                            </div>
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
    $(".pd-setting-ed").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        var tr = $(this).closest('tr');
        $.ajax(
        {
            url: "/topup/delete/"+id,
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
                    $('#result').text(data.total_topup);
                    $('#mpesa').text(data.mpesa);
                    $('#cash').text(data.cash);
                    $('#bank').text(data.bank);
            }
        });

        
    });
    </script>
    <!-- Static Table End -->
    @endsection