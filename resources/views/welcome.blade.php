@extends('layouts.main')
@section('content')
<header class="header-main">
    <div class="container-fluid">
        <div class="container mt-5 text-center">
            <h1 class="text-white">GOD'S ORACLE MINISTRIES</h1>
            <h3 class="text-white mt-5">
                "If any man speak, let him speak as the oracles of God; if any man minister,
                let him do it as of the ability which God giveth: that God in all things may
                be glorified through Jesus Christ, to whom be praise and dominion for ever and ever."
            </h3>
            <p class="text-end text-white"><small>1 Peter 4:11 KJV</small></p>
        </div>
    </div>
</header>


<section>
    <div class="container mt-3">
        <h3 class="text-center text-white">Up comming Events</h3>
        @foreach ($events as $event)
        <div class="row mt-4"
        style="box-shadow: 2px 2px 3px #181818;
        background-color: rgb(255, 255, 255);
        border-radius: 3px;
        background: url(../images/backcard1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        ">
        <div class="col-md-7">
            <figure class="mt-3 main-image">
                @foreach (json_decode($event->events_img, true) as $imagePath)
                <img style="border-radius: 3px; box-shadow: 0 3px 3px rgba(0, 0, 1, 1);" src="{{ asset('images/events/' . $imagePath) }}" alt="img">
            @endforeach
            </figure>
        </div>
        <div class="col-md-5 text-white">
            <div class="container-fluid text-white">
                <h6 class="text-end text-black mt-3">{{ date('F, j Y', strtotime($event->events_date)) }}</h6>
                <h6 class="text-end text-black mt-1">{{ $event->events->church_loc }}</h6>
                <h6 class="text-end text-black mt-1">{{ $event->events->church_name }}</h6>
                <header>
                    <h3 class="text-center text-black mt-5">{{ $event->events_name }}</h3>
                </header>
                <div class="container mt-3" style=" border-radius: 3px; background-color: rgba(0, 128, 128, 0.767);">
                    <div class="mt-2">
                        <header class="text-center" style="font-size: 20px;">Theme</header>
                        <p style=" font-family: Andale Mono, monospace; font-size: 16px;" id="description" class="ellipsis ">{{ $event->events_desc }}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

        @endforeach
            <div class="d-flex justify-content-center ">
                <a href="/allevents" style="text-decoration: none">
                    <p>
                        <h4>
                            See more..
                        </h4>

                </p></a>
            </div>

    </div>
</section>
<hr>
<section  id="features">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="container">
                        <header>
                            <h5 class="text-center">Maps</h5>
                        </header>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4673.424982852568!2d123.99496122099099!3d9.945079282738142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa2598a757871b%3A0x1a6fa591604d4fd3!2sGOD&#39;S%20ORACLE%20MINISTRIES!5e0!3m2!1sen!2sph!4v1686578323049!5m2!1sen!2sph"
                            width="100%" height="400px" style="box-shadow: 2px 2px 5px #181818" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row mt-4">
    <div class="col-12 text-center">
        <div class="gray-bg">
            <div class="footer-content">
                <strong>
                    Contact : 09052965982 
                    <br>Visit Us <a href="https://www.facebook.com/people/Gods-Oracle-Ministries/100064849654034/">Facebook</a>
                </strong>
                <br>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b><button class="btn btn-sm btn-secondary">Web Developer</button></b>
                </div>
            </div>
        </div>
    </div>
</div>
<style>

.gray-bg {
        background-color: gray;
        height: 150px;
        padding: 20px;
        color: white;
    }

    .footer-content {
        padding-top: 20px;
    }
      .ellipsis {
        width: 100%;
        display: -webkit-box;
        -webkit-line-clamp: 12;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        cursor: pointer;

    }
    .expanded {
        -webkit-line-clamp: initial;
    }
    #features{
        height: 100vh;
    }

    .header-main {
        padding: 50px 0;
    }

    .header-main h1 {
        font-size: 40px;
        font-weight: bold;
    }

    .header-main h3 {
        font-size: 25px;
    }

    .header-main p {
        margin-top: 30px;
        font-size: 14px;
    }

    .text-white {
        color: #fff;
    }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


$(document).ready(function() {
    $('.ellipsis').click(function() {
        $(this).toggleClass('expanded');
    });
    });
</script>

@endsection
