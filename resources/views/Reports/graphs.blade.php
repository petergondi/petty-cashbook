@extends('Reports.base')
@include('partials.message')
@section('actions-content')
<section class="content-header text-center">
    <h1>
      Report Management
    </h1>
  </section>
<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
       
      {!! $chart->render() !!}
    </div>
</div>
@endsection
