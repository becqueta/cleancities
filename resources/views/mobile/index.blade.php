@extends('mobile.template')

@section('main')
<div class="container text-center actions">
      <a href="{{url('report')}}">
        <img src="img/report.png" class="big-btn">
        <p class="lead">Signaler</p>
      </a>
    </div>
    <div class="container text-center actions">
      <a href="{{url('scan')}}}">
        <img src="img/scan.png" class="big-btn">
        <p class="lead">Scanner</p>
      </a>
    </div>
@endsection