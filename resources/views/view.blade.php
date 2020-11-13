@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Transactions <span class="float-right">{{number_format($nccData->count())}} of {{number_format($count)}}</span></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <livewire:view />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
