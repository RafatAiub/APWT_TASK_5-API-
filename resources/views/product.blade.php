
@extends("master")
@section("content")

                    <div class="container custom-product">

                        {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" >
                              @foreach($products as $item)
                              <div class="item {{$item['id']==1?'active':''}}">
                                <img class="slider-img" src="{{$item['gallery']}}" alt="product pic" >
                                <div class="carousel-caption slider-text">
                                  <h3>{{$item['name']}}</h3>
                                    <p>{{$item['description']}}</p>
                              @endforeach
                            </div>


                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div> --}}

                          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner custom-product" >
                              <div class="item active">
                                <img class="slider-img" src="samsung.jpg" alt="samsung">
                              </div>
                                <div class="item">
                                <img class="slider-img" src="lg.jpg" alt="LG monitor">
                              </div>
                              <div class="item">
                                <img class="slider-img" src="oppo.png" alt="OPPO ">
                              </div>
                              <div class="item">
                                <img class="slider-img" src="oppo1.png" alt="OPPO ">
                              </div>
                            </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                          <div class="trending-wrapper ">
                              <h1>BUY NOW </h1>
                            <div class="carousel-inner" >
                                @foreach($products as $item)
                                <div class="trending-item">
                                    <a href={{"detail/".$item['id']}}>
                                  <img class="trending-img" src="{{$item['gallery']}}" alt="" >
                                  <div class="">

                                    <h3>{{$item['name']}}</h3>
                                  </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                          </div>
                     </div>



@endsection

