
@extends("master")
@section("content")

                    <div class="container custom-product">



                          <div class="trending-wrapper ">
                              <h1>Result of your search</h1>
                            <div class="carousel-inner" >
                                @foreach($products as $item)
                                <div class="searched-item">
                                    <a href={{"detail/".$item['id']}}>
                                  <img class="trending-img" src="{{$item['gallery']}}" alt="" >
                                  <div class="">

                                    <h2>{{$item['name']}}</h2>
                                    <h4>{{$item['description']}}</h4>
                                  </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                          </div>
                     </div>



@endsection

