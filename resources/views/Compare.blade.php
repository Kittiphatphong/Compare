@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        <table class="table table-bordered col-12">
                <thead>
                <tr>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Total</th>
                    <th scope="col">View</th>
                </tr>
                </thead>
                <tbody>
               @foreach($datas as $data)
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
