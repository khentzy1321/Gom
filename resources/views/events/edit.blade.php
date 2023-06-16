@extends('layouts.admindash')
@section('content')
    <div class="container">
        <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <div class="form-group">
                <label for="events_name">Event Name</label>
                <input id="events_name" type="text" class="form-control @error('events_name') is-invalid @enderror" name="events_name" value="{{ old('events_name', $event->events_name) }}" required autofocus>
                @error('events_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="events_desc">Event Description</label>
                <textarea id="events_desc" class="form-control @error('events_desc') is-invalid @enderror" name="events_desc" rows="5" required>{{ old('events_desc', $event->events_desc) }}</textarea>
                @error('events_desc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="events_img">Event Image</label>
                <input id="events_img" type="file" class="form-control-file @error('events_img') is-invalid @enderror" name="events_img">
                @error('events_img')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @if ($event->events_img)
                    <img src="{{ Storage::url($event->events_img) }}" alt="{{ $event->events_name }}" class="mt-3" style="max-width: 100%;">
                @endif
            </div>
        
            <div class="form-group">
                <label for="events_date">Event Date</label>
                <input id="events_date" type="date" class="form-control @error('events_date') is-invalid @enderror" name="events_date" value="{{ old('events_date', $event->events_date) }}" required>
                @error('events_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
        
    </div>
@endsection