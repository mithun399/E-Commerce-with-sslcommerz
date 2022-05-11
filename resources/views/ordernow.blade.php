@extends('master')
@section('content')
<div class="">
    <div class="col-sm-10">
    <table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>$ {{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>$ 0</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>$ 10</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>$ {{$total+10}}</td>
    </tr>
  </tbody>
</table>
<div>
<form action="/orderplace" method="POST">
@csrf
  <div class="form-group">
    <textarea name="address" class="form-control" placeholder="Enter Address"></textarea>
  </div>
  <div class="form-group">
    <label>Payment Method</label>
    <input type="radio" value="cash" name="payment" class="form-control"><span>Bkash</span><br><br>
    <input type="radio" value="cash" name="payment" class="form-control"><span>Card</span><br><br>
    <input type="radio" value="cash" name="payment" class="form-control"><span>Cash On Delivery</span><br><br>
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
<br>
</div>
 </div>
@endsection