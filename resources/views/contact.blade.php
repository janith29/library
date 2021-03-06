@extends('layouts.welcome')
@section('navigation')
<nav class="navbar navbar-inverse">
                
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand active" href="{{ url('/') }}">ARD book renting</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="{{ url('/') }}">{{ __('views.welcome.home') }}</a></li>
      <li  ><a href="{{ url('/aboutus') }}">About Us</a></li>
      <li > <a href="{{ url('/services') }}">Services</a></li>
      <li class="active">  <a href="{{ url('/contact') }}">Contact</a></li>
      
     
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
            @if (!Auth::check())
                @if(config('auth.users.registration'))
                    {{-- <a href="{{ url('/register') }}">{{ __('views.welcome.register') }}</a> --}}
                @endif
                <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @else
                @if(auth()->user()->usertype == 'administrator'){{--->hasRole('administrator')--}}
                <li> <a href="{{ url('/admin') }}">{{ __('views.welcome.admin') }}</a></li>
                @elseif(auth()->user()->usertype == 'Receptionist')
                <li> <a href="{{ url('/receptionist') }}">{{ __('views.welcome.admin') }}</a></li>
                @elseif(auth()->user()->usertype == 'PNO')
                <li>  <a href="{{ url('/pno') }}">{{ __('views.welcome.admin') }}</a></li>
                @elseif(auth()->user()->usertype == 'Director')
                <li>  <a href="{{ url('/director') }}">{{ __('views.welcome.admin') }}</a></li>
                @elseif(auth()->user()->usertype == 'Patient')
                <li>  <a href="{{ url('/patient') }}">{{ __('views.welcome.admin') }}</a></li>
                @elseif(auth()->user()->usertype == 'Doctor')
                <li>  <a href="{{ url('/doctor') }}">{{ __('views.welcome.admin') }}</a></li>
                @endif
                <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span>{{ __('views.welcome.logout') }}</a></li>
            @endif
        @endif
        
      </ul>
  </div>
</nav>
@endsection
@section('content')
   <div class="container">
            <div class="well" style="background-image: url(img/bg-img/rsz_1hero2.jpg);">
                    <!-- Title -->
                    <h2 class="breadcumb-title">Contact</h2>
                </div>
            </div>
            
        <div class="container">
            <div  align="center"  class=" col-xs-12 col-sm-12  col-lg-12" style="width:100%;height:400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126727.089288154!2d79.8617497071549!3d6.983162333845486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae257486ae32765%3A0x5f571d56e0a767bc!2sArtificial+limb+care+(Pvt)+Ltd.!5e0!3m2!1sen!2slk!4v1531708933391"   style="height:350px;width:350px" frameborder="1" style="border:1" allowfullscreen></iframe>
            </div>
        </div>
                
                <div class="container">
                        <div class="col-xs-12 col-sm-12  col-lg-4">
                            <div class="panel panel-info ">
                                <div class="panel-heading " >
                                    <h4>Friday close...</h4>
                              <h4>Other days 9am - 5am</h4>
                                </div>
                          </div>
                         </div> 
                         <div class="col-xs-12 col-sm-12  col-lg-4">
                            <div class="panel panel-info ">
                                <div class="panel-heading " >
                                    <h4>Email:-info@artificiallimbcare.lk</h4>
                                    <h4> Call Us:-<a href="tel:0713450257">071 345 0257</a> </h4>
                              
                                </div>
                          </div>
                         </div> 
                         <div class="col-xs-12 col-sm-12 col-lg-4">
                            <div class="panel panel-info ">
                                <div class="panel-heading " >
                                    <h4>No 4, Mithrananda Mawatha,</h4> 
                                    <h4>Kiribathgoda.<br></h4>
                                </div>
                          </div>
                         </div> 
                        </div>.
      <div class="container">
            <div class="panel panel-danger">

                {{-- <div class="panel-body"><p style="text-align:center;"><img src="img/core-img/artificial.png" class="center" width="800" height="420"></p></div> --}}
                <div class="panel-heading"> <div class="col-12 col-lg-5">|| Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by ARD book renting.<br></div>
                <div  align="right"> Web Design by<a href="https://www.facebook.com/team176sri/" target="_blank">Team 176</a></div>
            </div>
          </div></div>
@endsection