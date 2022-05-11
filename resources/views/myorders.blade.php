@extends('master')
@section('content')
<div class="custom-order">
<div class="col-sm-6">
    <a href="#">Filter</a>
</div>
<div class="col-sm-6">
<div class="trending-wrapper">
    <h2>My Orders</h2>
   
    @foreach($orders as $item)
  <div class="row searched-item cart-list-devider">
      <div class="col-sm-3">
  <a href="detail/{{$item->id}}">
    <img class="trending-img" src="{{$item->gallery}}" alt="Los Angeles">
    </a>
</div>
    <div class="col-sm-4">
        <div class="">
        <h3>Name:{{$item->name}}</h3>
        <h5>Delivery Status:{{$item->status}}</h5>
        <h5>Address:{{$item->address}}</h5>
        <h5>Payment Status:{{$item->payment_status}}</h5>
        <h5>Payment:{{$item->payment_method}}</h5>
        </div>  
    </div>
    
  
 
  </div>
  @endforeach
</div>

</div>
</div>
@endsection