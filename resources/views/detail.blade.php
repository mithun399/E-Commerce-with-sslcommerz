@extends('master')
@section('content')
<div class="container custom-detail">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$products['gallery']}}" alt="">


        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$products['name']}}</h2>
            <h3>Price:{{$products['price']}}</h3>
            <h4>Details:{{$products['description']}}</h3>
            <h5>Category:{{$products['category']}}</h5>
            <br>
            <button class="btn btn-success">Buy Now</button><br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$products['id']}}">
            <button class="btn btn-primary">Add To Cart</button>
            </form>
            <br>

    </div>

</div>
    
</div>

@endsection