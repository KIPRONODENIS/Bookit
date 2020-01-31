<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="form-group mt-4 w-1/2 mx-auto h-50">
    <select wire:model="query" class=" shadow-sm form-control">
<option  selected disabled >Choose here</option>
   <option >Nairobi</option>
   <option>Nakuru</option>
   <option>Naivasha</option>
    </select>
  </div>
@if(count($hotels)>0)
  @foreach($hotels as $item)
@include('partials.Home.selectcard')
  @endforeach
  @endif
</div>
