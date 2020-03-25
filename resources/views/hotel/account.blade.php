@extends('hotel')

@section('contents')
<div class="container">
	<h1 class="h4 font-bold text-green-500">Account Details</h1>
	<hr>
	<div class="row flex justify-around my-6">
		<div class="col-3 shadow-sm p-2">
			<h4 class="h3">Total Earnings</h4>
			<h4 class="h2 text-gray-600">Kshs.{{Auth::user()->hotel->total()}}</h4>
		</div>
		<div class="col-3 shadow-sm p-2"><h4 class="h3">Withdarawals</h4>
			<h4 class="h2 text-gray-600">Kshs.{{Auth::user()->hotel->withdrawn()}}</h4></div>

					<div class="col-3 shadow-sm p-2"><h4 class="h3">Deductions</h4>
			<h4 class="h2 text-gray-600">Kshs.{{Auth::user()->deductions()}}</h4></div>

		<div class="col-3 shadow-sm p-2"><h4 class="h3">Balance</h4>
			<h4 class="h2 text-gray-600">Kshs.{{Auth::user()->hotel->total()-Auth::user()->hotel->withdrawn()}}</h4></div>

					<div class="col-3 shadow-sm p-2"><h4 class="h3"></h4>
			<h4 class="h2 text-gray-600">@php $balance=Auth::user()->hotel->total()-Auth::user()->hotel->withdrawn()-Auth::user()->deductions()@endphp 
 @if($balance>300)
<button class="btn btn-primary" data-toggle="modal" data-target="#WITHDRAW">Withdraw</button>


<!-- Modal -->
<form class="modal fade" id="WITHDRAW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" method="post" action="{{route('withdraw')}}">
	@csrf

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-green-500 text-white">
        <h5 class="modal-title" id="exampleModalLabel">Withdraw</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      	<label>Enter Amount</label>
      	<input type="number" class="form-control" name="amount" value="{{$balance-150}}">
      </div>
      </div>
      <div class="modal-footer">
   
        <button type="submit" class="btn btn-success shadow-sm">Withdraw</button>
      </div>
    </div>
  </div>
</div>

 @endif
			</h4></div>
	</div>
	<hr>
	<h1 class="h4 font-bold text-green-500">Withdawals History</h1>
	<table class="table table-responsive">
		<tr>
			<th>#</th>
			<th>Amount</th>
			<th>Date</th>
		</tr>

		@if($withdrawals->count()>0)
       @foreach($withdrawals as $item)
		<tr>
			<td>{{$loop->index+1}}</td>
			<td>{{$item->amount}}</td>
			<td>{{$item->created_at->diffForHumans()}}</td>
		</tr>
       @endforeach
		@endif
	</table>
</form>

@endsection