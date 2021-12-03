
@extends("master")
@section("content")

<div class="container">
      <div>

        <div class="col-sm-6 ">
            <img  class="image_detail" src="{{$products['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back </a>
            <h3>Name : {{$products['name']}}<h3>
            <h3>Price : {{$products['price']}}<h3>
            <h4>Category : {{$products['category']}}<h4>
            <h4>Description : {{$products['description']}}<h4>
             <br>
             <br>
             <form action="/add_to_cart" method="POST">
                 {{-- <input type="text" name="product_id" value="{{$products['id']}}"> --}}
                 @csrf
                <button class="btn btn-success"> ADD to Cart </button>
             </form>
             <br><br>
             <button class="btn btn-primary">Buy Now </button>
             <br><br>

        </div>

    </div>

    {{-- <div class="trending-wrapper ">
        <h1>Trending PRODUCTS </h1>
      <div class="carousel-inner" >
          @foreach($products as $item)
          <div class="trending-item">

            <img class="trending-img" src="{{$item['gallery']}}" alt="" >
            <div class="">
              <h3>{{$item['name']}}</h3>
            </div>

          </div>
          @endforeach

      </div>
    </div>
    --}}
</div>


@endsection


