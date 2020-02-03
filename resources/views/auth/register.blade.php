@extends('layouts.app')

@section('body')




<div class="container register h-screen" style="background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%); margin:0px !important;">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="images/control.svg" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#client" role="tab" aria-controls="home" aria-selected="true">Client</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="profile" aria-selected="false">Hotel</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                        @include('partials.Registration.client')
                        @include('partials.Registration.hotel')

                      </div>
                    </div>
                </div>

            </div>

            <script>
@if(session()->has('hotel'))
            $('#hotel').toggleClass("active");
            $('#client').toggleClass("active");
            $("#home-tab").toggleClass("active");
            $("#profile-tab").toggleClass("active");

@endif
            </script>

@endsection
