@extends('layouts.front')

@section('page')
      <div class="container-fluid">
            <div class="row bg-border-color medium-padding120">
                  <div class="container">
                        <div class="row">

                        <div class="col-lg-12">
                            <div class="panel" id="login_register">
                            <h2>
                            Please login or signup to process to checkout
                            </h2>
                            <br>
                            <a href="{{route('user.register')}}" class="btn btn-medium btn--light-green btn-hover-shadow">
                                <span class="text">signup</span>
                                <span class="semicircle"></span>
                            </a> 
                            <a href="{{route('user.login')}}"" class="btn btn-medium btn--light-green btn-hover-shadow">
                                <span class="text">login</span>
                                <span class="semicircle"></span>
                            </a> 
                            </div>
                        </div>

                        </div>
                  </div>
            </div>
      </div>
@endsection