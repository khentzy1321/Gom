@extends('layouts.admindash')

@section('content')
    <div class="container">   
        <div class="row">
            <div class="col-md-4 mt-5 text-center">
                <h1>Church in</h1>
           <h4>{{ $church->church_location }}</h4>
            </div>
            <div class="col-md-8 mt-3 text-center">
                <h2>Information </h2>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>Pastor's Name</th>
                            <th>Pastor's Image</th>
                            <th>Church Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($churchInfo as $info)
                            <tr>
                                <td>{{ $church->church_location }}</td>
                                <td>{{ $info->pastors_name }}</td>
                                <td>{{ $info->pastors_image }}</td>
                                <td>{{ $info->church_image }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        
                <div>
                    <a href="{{ route('churchs.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>

       
    </div>
@endsection
