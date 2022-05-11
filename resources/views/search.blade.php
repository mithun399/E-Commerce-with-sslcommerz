@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-6">
    <a href="#">Filter</a>
</div>
<div class="col-sm-6">
<div class="trending-wrapper">
    <h2>Result For Products</h2>
    @foreach($products as $item)
  <div class="searched-item">
  <a href="detail/{{$item['id']}}">
    <img class="trending-img" src="{{$item['gallery']}}" alt="Los Angeles">
    <div class="">
        <h3>{{$item['name']}}</h3>
        <h5>{{$item['description']}}</h5>
        
    </div>
    </a>
  </div>

  @endforeach
</div>

</div>
</div>
@endsection