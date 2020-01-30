<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    <div class="form-group mt-4 w-1/2 mx-auto h-50">
    <select wire:model="query" class="form-control" selected="Nairobi">
   <option >Nairobi</option>
   <option>Nakuru</option>
   <option>Naivasha</option>
    </select>
  </div>
{{$query}}
  @foreach($hotels as $item)
<div class="btn btn-primary" wire:click="reset">{{$item['hotel_name']}}</div>

  @endforeach
</div>
