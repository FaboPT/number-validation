@extends('main')
@section('content')
    <div class="row m-4">
        <div class="col-md-12">
            <h1 style="text-align: center"> Phone Numbers</h1>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped datatables" style="width: 100%">
                        <thead>
                        <tr>
                            <th> Country</th>
                            <th> State</th>
                            <th> Country Code</th>
                            <th> Phone Number</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td> {{$item['country'] ? : ''}} </td>
                                <td> {{$item['state'] ? 'OK' : 'NOK'}} </td>
                                <td> {{$item['country_code'] ? : ''}} </td>
                                <td> {{$item['phone_number'] ? : ''}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th> Country</th>
                            <th> State</th>
                            <th> Country Code</th>
                            <th> Phone Number</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
