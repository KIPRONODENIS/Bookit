<form class="w-1/2 mx-auto p-4 my-5 shadow-sm">
  <div class="card-header bg-orange-500 text-white text-md py-3">Room Booking</div>
<div class="spacer h-5"></div>

    <div class="form-group">
        <label>Room/Suite Type</label>
        <select class="form-control" id="room_type" onchange="finalCost()">
            <option value="0" selected>Select Room/Suite </option>
            <option value="1"> Standard </option>
            <option value="2"> Deluxe </option>
            <option value="3"> Superior Deluxe </option>
            <option value="4"> Premier Deluxe  </option>
            <option value="5"> Executive Suite </option>
            <option value="6"> Junior Suite </option>
            <option value="7"> Honeymoon Suite </option>
        </select>
    </div>
    <div class="form-group">
        <label>Number of room/suite</label>
        <select class="form-control" id="room_number" onchange="finalCost()">
            <option value="0"> 0 </option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="5"> 5 </option>
            <option value="6"> 6 </option>
            <option value="7"> 7 </option>
        </select>
    </div>
    <div class="form-group">
        <label>Number of persons</label>
        <select class="form-control" id="person_number" onchange="finalCost()">
            <option value="0"> 0 </option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="5"> 5 </option>
            <option value="6"> 6 </option>
            <option value="7"> 7 </option>
        </select>
    </div>
    <div class="form-group">
        <label>Number of children</label>
        <select class="form-control" id="child_number" onchange="finalCost()">
            <option value="0"> 0 </option>
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="5"> 5 </option>
            <option value="6"> 6 </option>
            <option value="7"> 7 </option>
        </select>
    </div>
    <div class="form-group">
        <label>Restaurant facilities?</label>
        <select class="form-control" id="res_facilities" onchange="finalCost()">
            <option value="0" selected> Do you want restaurant facilities? </option>
            <option value="2"> Yes </option>
            <option value="0"> No </option>
        </select>
    </div><br>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" name="submit" value="Book Now !!">
    </div>
</form>
