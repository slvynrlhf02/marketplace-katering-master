@extends('merchant.partials.app')

@section('title')
    Dashboard
@endsection


@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4>Selamat Datang!, {{ auth()->user()->name }} sebagai {{ auth()->user()->role }}</h4>
    </div>
    <!-- / Content -->
@endsection
