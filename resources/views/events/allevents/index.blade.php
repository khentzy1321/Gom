@extends('layouts.main')

@section('content')
<section class="events">
    <div class="container-fluid mt-2">
        <div class="card-header1 text-muted">
            <h1 class="text-light text-center">All EVENTS</h1>
        </div>

        @foreach ($events as $event)
            <div class="container-fluid bg-white mb-2" style="border-radius: 3px; box-shadow: 2px 2px 5px #222222;">
                <div class="row">
                    <div class="col-md-4" style="box-shadow: 2px 2px 5px #1b1b1b">
                        <div id="myCarousel-{{ $event->id }}" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <ol class="carousel-indicators">

                                    <li data-bs-target="#myCarousel-{{ $event->id }}" data-bs-slide-to="0" class="active"></li>
                                    <li data-bs-target="#myCarousel-{{ $event->id }}" data-bs-slide-to="1"></li>
                                    <li data-bs-target="#myCarousel-{{ $event->id }}" data-bs-slide-to="2"></li>
                                </ol>
                                @foreach (json_decode($event->events_img, true) as $index => $img)
                                    <div class="carousel-item @if($index == 0) active @endif">
                                        <figure>
                                            <img class="mt-3" src="{{ url('../images/events/' . $img) }}" alt="Image" style="height: 260px; width: 100%;">
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body">

                            <p class="card-title article-title mt-2">{{ $event->title }}</p>
                            <h6 class="text-start text-muted mt-4">{{ $event->events->church_loc }}</h6>
                            <h6 class="text-start text-muted mt-1">{{ $event->events->church_name }}</h6>

                            <p class="article-subtitle mt-2">{{ Carbon\Carbon::parse($event->events_date)->format('M d, Y') }}</p>
                            <br>
                            <div class="d-flex justify-content-start mt-3">
                                <p class="ellipsis">{{ $event->events_desc}}</p>
                            </div>
                            <tr>

                        </div>
                    </div>
                </div>
            </div>

        @endforeach


        @if (isset($event->id))
        <script>
            $('.carousel-indicators li').click(function () {
                var index = $(this).data('bs-slide-to');
                $('#myCarousel-{{ $event->id }}').carousel(index);
            });
        </script>
        @endif
    </div>

    </div>

    <style>
        .card-header1 {
            overflow: hidden;
            /* background-color: #f1f1f1; */
            padding: 20px 10px;
        }

        .card-header1 h1 {
            /* display: inline; */
            text-align: center;
            color: black;

        }

        .card-header2 a {
            float: right;
        }

        .hrr {
            margin-top: 6px;
            opacity: 0.2;
            color: gray;


        }

        .ellipsis {
            width: 100%;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;

        }
        .carousel-item {
    transition: transform 0.6s ease-in-out;
    transform: translateX(100%); /* Change to 100% for sliding left */
}

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            transform: translateX(0);
        }
        .carousel-item-next:not(.carousel-item-left),
        .active.carousel-item-right {
            transform: translateX(-100%); /* Change to -100% for sliding right */
        }
        .carousel-item-prev:not(.carousel-item-right),
        .active.carousel-item-left {
            transform: translateX(100%); /* Change to 100% for sliding left */
        }

    </style>

</section>
 
@endsection

