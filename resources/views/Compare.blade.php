@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <table class="table table-bordered col-6">
                <thead>
                <tr>
                    <th colspan="4" class="text-center bg-success text-white">
                     NCC
                    </th>
                </tr>
                <tr>

                    <th scope="col">Phone Number</th>
                    <th scope="col">Amount Ncc</th>
                    <th scope="col">Amount Unitel</th>
                    <th scope="col">View</th>
                </tr>
                </thead>
                <tbody>
               @foreach($Nccdatas as $data)

                <tr>
                    <th scope="row">{{$data->telN}} </th>
                    <th scope="row">{{number_format($data->sumNcc)}} </th>
{{--                    <th scope="row">{{number_format($data->sumUnitel)}} </th>--}}
                    <th> <a href="$" class="btn btn-success">View</a> </th>

                </tr>

               @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection
