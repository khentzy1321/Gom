@extends('layouts.admindash')
@section('content')
<div class="container">
    <h1>Events</h1><div>
        <a class="btn btn-outline-primary" href="{{ route('events.create') }}"><i class="fas fa-plus"></i></a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <td>{{ $event->events_name }}</td>
                <td>{{ $event->events_desc }}</td>
                <td>{{ $event->events_img }}</td>
                <td>{{ $event->events_date }}</td>
                <td>
                    <a class="d-inline" href="{{ route('events.edit', $event->id) }}"><i class="fas fa-edit"></i></a>
                        <form method="POST" action="{{ route('events.destroy', $event->id) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection