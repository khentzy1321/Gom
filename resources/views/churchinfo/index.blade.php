@extends('layouts.admindash')

@section('content')
    <div class="container">
                <div class="container">
                    <div class="card-header">Church Information</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif


                        <div class="mb-3">
                            <a href="{{ route('churchsinfo.create') }}" class="btn btn-primary">Create Church Information</a>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Pastor's Name</th>
                                    <th>Church's Name</th>
                                    <th>Church Location</th>
                                    <th>Church Image</th>
                                    <th>Pastor's Image</th>
                                    <th>Description</th>
                                    <th>Actions</th> <!-- Added this line -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($churchInfos as $churchInfo)
                                    <tr>
                                        <td>{{ $churchInfo->pastors_name }}</td>
                                        <td>{{ $churchInfo->church_name }}</td>
                                        <td>{{ $churchInfo->church_loc }}</td>
                                        <td>
                                            <img src="{{ asset('public/images/churchinfo/' . $churchInfo->church_image) }}" alt="Church Image" width="100">
                                        </td>
                                        <td>
                                            <img src="{{ asset('public/images/churchinfo/' . $churchInfo->pastors_image) }}" alt="Pastor's Image" width="100">
                                        </td>
                                      
                                        <td class="ellipsis" 
                                        style="
                                        max-width: 150px; 
                                        
                                        display: -webkit-box;
                                        -webkit-box-orient: vertical;
                                        -webkit-line-clamp: 3;
                                        overflow: hidden;
                                        text-overflow: ellipsis;
                                        "
                                        >{{ $churchInfo->church_desc }}</td>
                                        <td> <!-- Added this section -->
                                            <a href="{{ route('churchsinfo.edit', $churchInfo->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('churchsinfo.destroy', $churchInfo->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
   
       
    </div>
@endsection
