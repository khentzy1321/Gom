@extends('layouts.admindash')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Church Information</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('churchsinfo.update', $churchInfo->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="pastors_name">Pastor's Name</label>
                                <input type="text" class="form-control" id="pastors_name" name="pastors_name" value="{{ old('pastors_name', $churchInfo->pastors_name) }}">
                            </div>
                            <div class="form-group">
                                <label for="pastors_name">Church Name</label>
                                <input type="text" class="form-control" id="church_name" name="church_name" value="{{ old('church_name', $churchInfo->church_name) }}">
                            </div>
                            <div class="form-group">
                                <label for="pastors_name">Church Location</label>
                                <input type="text" class="form-control" id="church_loc" name="church_loc" value="{{ old('church_loc', $churchInfo->church_loc) }}">
                            </div>

                            <div class="form-group">
                                <label for="church_image">Church Image</label>
                                <input type="file" class="form-control" id="church_image" name="church_image">
                                @if ($churchInfo->church_image)
                                    <img src="{{ asset('public/images/churchinfo/' . $churchInfo->church_image) }}" alt="Church Image" width="100">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="pastors_image">Pastor's Image</label>
                                <input type="file" class="form-control" id="pastors_image" name="pastors_image">
                                @if ($churchInfo->pastors_image)
                                    <img src="{{ asset('public/images/churchinfo/' . $churchInfo->pastors_image) }}" alt="Pastor's Image" width="100">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Church Description</label>
                                <textarea id="church_desc"
                                 class="form-control @error('church_desc') is-invalid @enderror" 
                                 name="church_desc" rows="5" required>
                                 {{ old('church_loc', $churchInfo->church_desc) }}
                                </textarea>
                                </div>

                            <div class="form-group">
                                <label for="churchs_id">Church</label>
                                @foreach ($churches as $church)
                                <input type="hidden" class="form-control" id="churchs_id" name="churchs_id" value="{{ $church->id }}">
                                @endforeach


                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
