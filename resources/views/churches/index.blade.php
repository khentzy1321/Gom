@extends('layouts.admindash')

@section('content')
    <div class="container">
        <h2>Churches Town</h2>
        <a href="{{ route('churchs.create') }}" class="btn btn-primary">Add Town</a>
        <table class="table table-striped table-bordered">
            <thead class="text-center">
                <tr>
                    <th>Church Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($churches as $church)
                    <tr>
                        <td>{{ $church->church_location }}</td>
                        <td>
                            <a href="{{ route('churchs.show', $church->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('churchs.edit', $church->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
