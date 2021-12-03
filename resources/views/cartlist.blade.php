
@extends("master")
@section("content")

                    <div class="container custom-product col-sm-10">



                          <div class="trending-wrapper ">
                              <h2>Cart List</h2>
                            <div class="carousel-inner" >
                                @foreach($products as $item)
                                <div class="row search-item cart-list-devider">
                                    <div class="col-sm-3">
                                        <a href="detail/{{$item->id}}">
                                            <img class="trending-img" src="{{$item->gallery}}" alt="" >

                                         </a>
                                    </div>
                                    <div class="col-sm-3">

                                            <div class="">
                                              <h2>{{$item->name}}</h2>
                                              <h4>{{$item->description}}</h4>
                                            </div>
                                         </a>
                                    </div>
                                    <div class="col-sm-3">

                                        <button class="btn btn-warning">remove from cart </button>

                                         </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                          </div>
                     </div>



@endsection

