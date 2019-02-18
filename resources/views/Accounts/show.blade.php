@extends('Accounts.base')
@section('action-content')
<br/>
<section class="content-header text-center">
        <h1>
          Account Management
        </h1>
      </section>
      @include('partials.message')
<div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Expense Accounts</h4>
                        <div class="row">
                                <div class="col-sm-4 pull-right">
                                <a href="{{route('account.create')}}">
                                    <button type="button" class="btn btn-info add-new "><i class="fa fa-plus"></i> Add New Expense Account</button>
                                        </a>
                                </div>
                            </div>
                        <table>
                            <tr>
                                <th>Account Name</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Petty Cashier</th>
                                <th>Date Created</th>
                                <th>Email</th>
                                <th>Setting</th>
                            </tr>
                            @foreach($accounts as $account)
                            <tr>
                            <td>{{$account->account_name}}</td>
                            @if(App\Spendings::where('expense_name',$account->account_name)->first())
                                <td>
                                    <button class="pd-setting">Active</button>
                                </td>
                                @else
                                <td>
                                        <button class="btn">Inactive</button>
                                    </td>
                                @endif
                            <td>{{$account->account_description}}</td>
                                <td>{{$account->surname}}</td>
                            <td>{{$account->created_at}}</td>
                            <td>{{$account->email}}</td>
                                <td>
                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
                            <ul class="pagination">
                                {{ $accounts->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection