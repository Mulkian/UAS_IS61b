@extends('layouts.master')
@section('title','dashboard')
@section('heading','dashboard')
@section('content')
<div class="card-body">
        Halo {{ Auth::user()->name }}, <br> nanti akan ada tampilan dashboard, mohon sabar
        </div>
        <!-- /.card-body -->
@endsection
