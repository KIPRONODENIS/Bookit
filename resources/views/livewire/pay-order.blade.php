<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class=" p-5 mt-5 w-1/2 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
      <div class="flex">
        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
        <div>
          <p class="font-bold py-3">WOW!! You have successfully Booked Room service</p>
          <p class="text-sm py-3">Make your PAYMENT to COMPLETE the Transaction</p>

          <form wire:submit.prevent="submit">
      <input type="text" name="phone" wire:model="phone" style="line-height:4em;font-size:22px;z-index:1;" class="my-4 form-control w-full shadow" placeholder="0799012907" required pattern='^07\d{8}'>
        @error('phone')
        <p class="text-red-500">{{$message}}</p>

        @enderror
      <button type="submit" class=" my-3 btn btn-success">Pay Now!!</button>
          </form>

        </div>
      </div>
    </div>


</div>
