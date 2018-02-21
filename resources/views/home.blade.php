@extends('layouts.app')

@section('page-title') Dashboard @endsection

@section('title') Dashboard @endsection

@section('activeHome') active-sub @endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                            <strong>Well done!</strong>{{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script src="{{asset('js/pages/home.js')}}"></script>
@endsection
