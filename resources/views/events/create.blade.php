@extends('layouts.admindash')
@section('content')

<div class="container">
    <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="events_id">Where</label>
            <select class="form-control" id="events_id" name="events_id" required>
                <option value="">Select Church ID</option>
                @foreach ($churchinfos as $churchinf)
                    <option value="{{ $churchinf->id }}">{{ $churchinf->church_loc }}, {{ $churchinf->church_name }} </option>
                @endforeach
            </select>
        </div>
         <div class="form-group">
            <label for="events_name">Event Name</label>
            <input id="events_name" type="text" class="form-control @error('events_name') is-invalid @enderror" name="events_name" value="{{ old('events_name') }}" required autofocus>
            @error('events_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="events_desc">Event Description</label>
            <textarea id="events_desc" class="form-control @error('events_desc') is-invalid @enderror" name="events_desc" rows="5" required>{{ old('events_desc') }}</textarea>
            @error('events_desc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="events_img">Event Image</label>
            <input id="events_img" type="file" class="form-control-file @error('events_img') is-invalid @enderror" name="events_img[]" multiple>
            @error('events_img')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="events_date">Event Date</label>
            <input id="events_date" type="date" class="form-control @error('events_date') is-invalid @enderror" name="events_date" value="{{ old('events_date') }}" required>
            @error('events_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>

</div>

@endsection
