@extends('demo::layouts.master')

@section('content')
<div class="wrapper">
    <div class="wrapper__title">Welcome, {{ auth()->user()->name }}</div>
  </div>
@endsection