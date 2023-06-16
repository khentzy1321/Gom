@extends('layouts.admindash')

@section('content')
    <div class="container">
        <h1>Add Church Town</h1>
        <form method="POST" action="{{ route('churchs.store') }}">
            @csrf
            <div class="form-group">
                <label for="church_name">Church Town</label>
                <input type="text" class="form-control @error('church_location') is-invalid @enderror" id="church_name" name="church_location" value="{{ old('church_location') }}">
                @error('church_location')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Add Church</button>
        </form>
    </div>
@endsection

