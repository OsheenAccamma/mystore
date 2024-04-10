@extends('layout')
@section('title') ErasRave About Us @endsection
@section('keywords')   @endsection
@section('description') @endsection
@section('content')

<div align="center" style="background:rgba(12,37,42,0.53);padding:20px;">
<h3  class="black-text" style="font-weight:bold;margin-top:15px;">
THE ErasRave STORY</h3>
<p class="white-text" style="font-weight:bold;">    JOURNEY OF ErasRave FROM IDEATION TO STARTUP</p>


</div>

<div class="container-fluid" style="background:rgba(7,6,6,0.44)!important;font-family: 'Balsamiq Sans', cursive;">
    <div class="row px-5" style="background-color: rgba(14,14,16,0)!important;">
        <div   class="col-md-12 ">
            <div align="center">
               <p class="col-md-4">
                    <img src="{{url('assets/img/Eras.png')}}" class="img-fluid">
                </p>
            </div>
              <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;  Introducing "ErasRave," my visionary streetwear brand that celebrates the essence of urban culture through a fusion of baggy styles, '90s aesthetics, early 2000s vibes, and Y2K flair. Our designs pay homage to the iconic fashion eras, seamlessly blending oversized silhouettes with nostalgic elements to create a bold and distinctive look. From retro graphic tees to baggy cargo pants, each piece exudes a sense of nostalgia while embracing contemporary streetwear trends. With a focus on quality craftsmanship and attention to detail, UrbanFlow offers a curated selection of apparel and accessories that resonate with the modern urbanite. Our brand ethos is rooted in individuality and self-expression, empowering our customers to embrace their unique style and stand out from the crowd. Join us on this journey as we redefine streetwear fashion, one trendsetting piece at a time. Welcome to the UrbanFlow family, where the spirit of the '90s and early 2000s meets the energy of today's urban landscape.
                   </p>
<p style="  text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Introducing "UrbanFlow," my visionary streetwear brand that celebrates the essence of urban culture through a fusion of baggy styles, '90s aesthetics, early 2000s vibes, and Y2K flair. Our designs pay homage to the iconic fashion eras, seamlessly blending oversized silhouettes with nostalgic elements to create a bold and distinctive look. From retro graphic tees to baggy cargo pants, each piece exudes a sense of nostalgia while embracing contemporary streetwear trends. With a focus on quality craftsmanship and attention to detail, UrbanFlow offers a curated selection of apparel and accessories that resonate with the modern urbanite
<h1 class="black-text" style="font-weight:bold;">ErasRave</h1>

    <div align="center">
               <p class="col-md-4">
                    <img src="{{url('Img/About/1.jpg')}}" class="img-fluid">
                </p>
    </div>


<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.


</p>

        </div>
        <div align="center" class="col-md-12">
        <div class="col-md-8  ">

<h1 align="center" class="black-text" style="font-weight:bold;">GALLARY</h1>

                                    <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                          <!--Indicators-->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                          </ol>
                          <!--/.Indicators-->
                          <!--Slides-->
                              <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/1.jpg')}}"
                                      alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"></h3>
                                    <p></p>
                                  </div>
                                </div>


                                  <div class="carousel-item">
                                  <!--Mask color-->
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/2.jpg')}}"
                                      alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                  </div>
                                </div>
                              </div>

                          <!--/.Slides -->
                          <!--Controls-->
                          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                          <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
        </div>
        </div>
        <div align="center" class="col-md-3"> </div>
         <div align="left"  class="col-md-6 mx-3">
              <br>    <br>
                <span class="black-text" style="font-weight:bold;font-size:25px;">Mission:</span> quality and comfortable products  <br>

            <span class="black-text" style="font-weight:bold;font-size:25px;">Vision:</span> Happy customers

        </div>
    </div>
 <br><br>

</div>


@endsection
