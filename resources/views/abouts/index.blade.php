@extends('layouts.main')
@section('content')
<section class="about">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-4 seal-logo text-center">
                    <div class="header"><h4 class="text-white text-center">OFFICIAL SEAL</h4></div>
                    <img src="{{ asset('../images/gomo.png') }}" alt="">
                </div>
                <div class="col-md-8">
                    <header><h2 class="text-center text-white">HISTORY</h2></header>
                    <div class="container">
                        <p class="text-white">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam omnis error eum, odit, adipisci minus, unde quaerat repellat minima quibusdam
                            nulla aliquam magni non molestiae aspernatur pariatur rerum iste consequatur!
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates minus impedit accusantium distinctio, consequatur veniam natus dolorem culpa
                            quis ducimus, atque amet non repellat doloremque. Sequi ullam aspernatur autem enim.
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex asperiores nam iusto amet molestias, dolorem corporis veniam, recusandae deleniti
                            aspernatur quo error blanditiis sequi deserunt ipsum, voluptatum nemo odit iste!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <h3 class="text-center text-white">ALL PASTORS</h3>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="pastor-chair  mt-4">
                    <img style="box-shadow: 3px 2px 4px #181818; border-radius: 2px;" src="{{ asset('./images/bh.jpg') }}" alt="">
                    <div class="container" style="background-color: rgba(255, 192, 203, 0.76); box-shadow: 3px 2px 4px #181818; border-radius: 2px;">
                        <header><h4 class="text-center">Chairman</h4></header>
                        <div class="text-name">
                            <td>
                                <p><strong>Name</strong>: Dommingo Castillo</p>
                                <p><strong>Age</strong>: 57</p>
                                <p><strong>Address</strong>: Kalilangan Bukidnon Mindanao</p>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row img-pastor">
                        <div class="col-md-3 mt-3">
                            <div class="image-container">
                                <img style="box-shadow: 3px 2px 4px #181818; border-radius: 2px;" src="{{ asset('images/persony.jpg') }}" alt="">
                                <div class="overlay">
                                  <p>Name: </p>
                                  <p>Age: </p>
                                  <p>Address: </p>
                                </div>
                              </div>
                        </div>
                         <div class="col-md-3 mt-3">
                            <div class="image-container">
                                <img style="box-shadow: 3px 2px 4px #181818; border-radius: 2px;" src="{{ asset('images/persony.jpg') }}" alt="">
                                <div class="overlay">
                                  <p>Text Here</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="image-container">
                                <img style="box-shadow: 3px 2px 4px #181818; border-radius: 2px;" src="{{ asset('images/persony.jpg') }}" alt="">
                                <div class="overlay">
                                  <p>Text Here</p>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-3 mt-3">
                            <div class="image-container">
                                <img style="box-shadow: 3px 2px 4px #181818; border-radius: 2px;" src="{{ asset('images/persony.jpg') }}" alt="">
                                <div class="overlay">
                                  <p>Text Here</p>
                                </div>
                              </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .image-container {
      position: relative;
    }
    .image-container img {
      display: block;
      transition: transform 0.3s ease;
    }
    .image-container:hover img {
      transform: scale(1.5);
    }
    .overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 5px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .image-container:hover .overlay {
      opacity: 1;
    }
  </style>

@endsection
