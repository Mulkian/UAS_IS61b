@extends('layouts.master')
@section('title','dashboard')
@section('heading','dashboard')
@section('content')
<div class="card-body">
        Halo {{ Auth::user()->name }},
        </div>
        <!-- /.card-body -->
@endsection
