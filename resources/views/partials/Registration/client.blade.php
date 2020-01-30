<form method="post" action="/register"  class="tab-pane fade show active" id="client" role="tabpanel" aria-labelledby="home-tab">
@csrf
    <h3 class="register-heading">Apply as a Client</h3>

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



            <input type="hidden" name="user_type"  value="client"/>
            <input type="submit" class="btnRegister"  value="Register"/>
        </div>
    </div>
</form>
