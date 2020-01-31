<div>
    {{-- Be like water. --}}
    <form class="w-1/2 mx-auto p-4 my-5 shadow-sm" wire:submit.prevent="submit">
      <div class="card-header bg-orange-500 text-white text-md py-3">Room Booking</div>
    <div class="spacer h-5"></div>

        <div class="form-group">
            <label>Room/Suite Type</label>
            <select wire:model="room_type" name="room_type" class="form-control" id="room_type" >
                <option value="0" selected>Select Room/Suite </option>
                <option value="1"> Standard </option>
                <option value="2"> Deluxe </option>
                <option value="3"> Superior Deluxe </option>
                <option value="4"> Premier Deluxe  </option>
                <option value="5"> Executive Suite </option>
                <option value="6"> Junior Suite </option>
                <option value="7"> Honeymoon Suite </option>
            </select>
             @error('room_type') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Number of room/suite</label>
            <select wire:model="room_number" class="form-control" id="room_number" >
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
            </select>
            @error('room_number') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Number of persons</label>
            <select wire:model="person_number" class="form-control" id="person_number">
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
            </select>
             @error('person_number') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Number of children</label>
            <select wire:model="child_number" class="form-control" id="child_number" >
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
            </select>
             @error('child_number') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label>Restaurant facilities?</label>
            <select class="form-control" wire:model="res_facilities" id="res_facilities" >
                <option value="0" selected> Do you want restaurant facilities? </option>
                <option value="2"> Yes </option>
                <option value="0"> No </option>
            </select>
             @error('res_facilities') <span class="error text-red-500">{{ $message }}</span> @enderror
        </div><br>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="submit" value="Book Now !!">
        </div>
    </form>

</div>
