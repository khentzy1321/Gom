@extends('layouts.main')

@section('content')

<div class="container">
    <h2 class="text-white text-center mb-5"> CHURCH INFO </h2>
    @foreach ($church_info as $info)
    <div class="row mt-3">
        <div class="col-md-3">
            <h6 class="text-center text-white">{{ $info->pastors_name }}</h6>
            <figure class="mt-2">
                @foreach (json_decode($info->pastors_image, true) ?? [] as $imagePath)
                <img style=" box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6); border-radius: 50%; width:100%; height:200px" src="{{ asset('images/churchinfo/' . $imagePath) }}" alt="img">
            @endforeach

            </figure>
        </div>
        <div class="col-md-9" style="background-color: #eaeaea; border-radius: 10px;">
            <!-- Content for the right column (70%) -->
            <h6 class="text-end mt-3">{{ $info->church_name }}</h6>
            <h6 class="text-end">{{ $info->church_loc }} </h6>
                <p class="ellipsis1 mx-3 mt-5">
                    {{ $info->church_desc }}
                </p>
       
                    <figure>
                        @foreach (json_decode($info->church_image, true) ?? [] as $imagePath)
                        <img style=" box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6); border-radius: 2px; width:100%; height:200px" src="{{ asset('images/churchinfo/' . $imagePath) }}" alt="img">
                    @endforeach
        </div>
    </div>
    @endforeach
</div>
<style>
     .ellipsis1 {
            width: 98%;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;

        }
        .expanded {
        -webkit-line-clamp: initial;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


$(document).ready(function() {
    $('.ellipsis1').click(function() {
        $(this).toggleClass('expanded');
    });
    });
</script>

@endsection

