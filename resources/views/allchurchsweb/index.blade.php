@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <h1 class="text-white text-center">All Churches</h1>
        <hr>
        <div class="container-fluid">
            <div class="row">
                @foreach($churches as $church)
                    <div class="col-md-4 mb-3">
                        <a style="text-decoration: none;" class="text-black" href="{{ route('allchurchs.show', $church->id) }}" >
                       
                            <div class="content1">
    
                            <div class="content-body">
                                <h1><i class="fas fa-home"></i></h1>
                                <h2 class="text-center h2">{{ $church->church_location }}</h2>
                            </div>
                            <div class="card-footer text-center mt-5">
    
                                    <p>See more...</p>
    
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
  
    </div>
    <style>
       .content1 {
            background-color: white;
            border-radius: 3px;
            width: 430px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: height 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .content1:hover {
            transform: scale(1.1);
        }

        .content-body {
            text-align: center;
            margin-top: 30px;
        }

    </style>
@endsection


