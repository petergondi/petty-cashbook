@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger alert-mg-b alert-success-style4 alert-success-stylenone">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
    <i class="fa fa-times adminpro-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
    <p class="message-alert-none"><strong></strong> {{$error}}</p>
</div>

@endforeach
@endif
@if(session('success'))
<div class="alert alert-success alert-success-style1 alert-success-stylenone">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
        </button>
    <i class="fa fa-check adminpro-checked-pro admin-check-sucess admin-check-pro-none" aria-hidden="true"></i>
    <p class="message-alert-none"><strong></strong>  {{session('success')}}.</p>
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif