<form method="post" action="/register"  class="tab-pane fade   show" id="hotel" role="tabpanel" aria-labelledby="profile-tab">
@csrf
<h3 class="register-heading">Apply as Hotel Owner</h3>

<div class="row register-form">
    <div class="col-md-6">
        <div class="form-group">

            <input type="text" class="form-control" name="name" placeholder="Full Name *" value="{{old('name')}}" />
@error('name')
<span class=" text-red-800" role="alert">
   <strong>{{ $errors->first('name')}}</strong>
</span>
@enderror

        </div>


        <div class="form-group">
            <input type="text" name="hotel_name" class="form-control" placeholder="Name of the Hotel *" />
            @error('hotel_name')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('hotel_name')}}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password *" />
            @error('password')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('password')}}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <input name="password_confirmation" type="password" class="form-control"  placeholder="Confirm Password *" value="" />
        </div>


        <!-- <div class="form-group">
            <div class="maxl">
                <label class="radio inline">
                    <input type="radio" name="gender" value="male" {{old('gender')=='male'?"checked":''}}>
                    <span class="font-bold"> Male </span>
                </label>
                <label class="radio inline">
                    <input type="radio" name="gender" value="female" {{old('gender')=='female'?"checked":''}}>
                    <span class="font-bold">Female </span>
                </label>
            </div>
            @error('gender')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('gender')}}</strong>
            </span>
            @enderror
        </div> -->

    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Your Email *" value="{{old('email')}}" />
            @error('email')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('email')}}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group">
            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="{{old('phone')}}" />
            @error('phone')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('phone')}}</strong>
            </span>
            @enderror
        </div>


        <div class="form-group">
          <label>Where are you located</label>
            <select   name="location" class="form-control"  selected="{{old('location')}}" >
<option value="" selected >None selected</option>
<option>Nairobi</option>
<option>Meru</option>
<option>Makutano</option>
<option>Maua</option>
            </select>
            @error('phone')
            <span class=" text-red-800" role="alert">
                <strong>{{ $errors->first('location')}}</strong>
            </span>
            @enderror
        </div>

            <input type="hidden" name="user_type"  value="hotel"/>
            <input type="submit" class="btnRegister"  value="Sign Up"/>
        </div>
    </div>
</form>
