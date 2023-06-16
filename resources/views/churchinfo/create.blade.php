@extends('layouts.admindash')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Church Information</div>

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

                        <form action="{{ route('churchsinfo.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="pastors_name">Pastor's Name</label>
                                <input type="text" class="form-control" id="pastors_name" name="pastors_name" value="{{ old('pastors_name') }}" required>
                            </div> 
                            <div class="form-group">
                                <label for="pastors_name">Church's Name</label>
                                <input type="text" class="form-control" id="church_name" name="church_name" value="{{ old('church_name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="">Church Location</label>
                                <input type="text" class="form-control" id="church" name="church_loc" value="{{ old('church_loc') }}" required>
                            </div>
               

                            <div class="form-group">
                                <label for="church_image">Church Image</label>
                                <input type="file" class="form-control-file" id="church_image" name="church_image[]" multiple required>
                            </div>

                            <div class="form-group">
                                <label for="pastors_image">Pastor's Image</label>
                                <input type="file" class="form-control-file" id="pastors_image" name="pastors_image[]" multiple required>
                            </div>

                            <div class="form-group">
                                <label for="churchs_id">Church ID</label>
                                <select class="form-control" id="churchs_id" name="churchs_id" required>
                                    <option value="">Select Church ID</option>
                                    @foreach ($churches as $church)
                                        <option value="{{ $church->id }}">{{ $church->church_location }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Church Description</label>
                                <textarea type="text" class="form-control" id="church_desc" name="church_desc" value="{{ old('church_desc') }}" required>
                                </textarea>
                                </div>

                            <button type="submit" class="btn btn-primary">Add Church Information</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
