<div>
    {{-- Be like water. --}}
    <form class="w-1/2 mx-auto p-4 my-5 shadow-sm" wire:submit.prevent="submit">
      <div class="card-header bg-orange-500 text-white text-md py-3">{{$service_name}}</div>
    <div class="spacer h-5"></div>
    <div class="form-group">
      <label>From:</label>
      <div class="d-flex">
        <span class="w-2/5">
      <input type="date" wire:model="fromdate" class="form-control " name="fromdate" >
  @error('totime')<span style="color:red">{{$message}}</span>  @enderror
    </span>
      <span class="mx-2 w-2/5">
      <input type="time" wire:model="fromtime" class="form-control" name="fromtime" >
        @error('totime')<span style="color:red">{{$message}}</span>  @enderror
    </span>
    </div>
    </div>

    <div class="form-group">
      <label>To:</label>
      <div class="d-flex">
          <span class="w-2/5">
      <input type="date"  wire:model="todate" class="form-control" name="todate" min="{{$fromdate}}">
        @error('totime')<span style="color:red">{{$message}}</span>  @enderror
      </span>
  <span class=" mx-2 w-2/5">
  <input type="time" value="{{old('totime') }}" wire:model="totime" class="form-control" name="totime" >
        @error('totime')<span style="color:red">{{$message}}</span>  @enderror
</span>
    </div>
    </div>
<h1 class="bold h1">Your Total:Kshs. {{$total}}<h1>
<div class="form-group">
  <div class="btn btn-danger " wire:click="total()">Total</div>
  <input type="submit" class="btn btn-primary" name="submit" value="Book Now !!">
</div>
    </form>
@if($submit=="true")
  <div>{{1+1}}</div>
@endif
</div>
