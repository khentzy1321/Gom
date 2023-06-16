@extends('layouts.admindash')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Church</div>

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

                <form action="{{ route('churchs.update', $church->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="church_name">Church Name</label>
                        <input type="text" class="form-control" id="church_name" name="church_name" value="{{ old('church_name', $church->church_name) }}">
                    </div>

                    <div class="form-group">
                        <label for="church_location">Church Location</label>
                        <input type="text" class="form-control" id="church_location" name="church_location" value="{{ old('church_location', $church->church_location) }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
