<div>
    <div class="row col-12">
        <span class="btn btn-info btn-sm">{{$data_nccs->count()}}</span>
    <input wire:model="searchTel" class="form-control col-3" type="text" placeholder="Search by Phone number">
    <input wire:model="searchAmount" class="form-control col-3 ml-2" type="number" placeholder="Search by Amount">
    <select class="form-control col-3 ml-2">
        <option disabled selected>Draw</option>
        <option>82</option>
    </select>
    </div>



    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">Phone number</th>
            <th scope="col">Amount</th>
            <th scope="col">Date</th>
            <th scope="col">Draw</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data_nccs as $data)
            <tr>
                <th scope="row">{{$data->tel}}</th>
                <td>{{number_format($data->amount)}}</td>
                <td>{{$data->date}}</td>
                <td>82</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
