@extends('layouts.login')

@section('content')
      <!-- Hero -->
      <section class="dark-mode vh-100 bg-repeat-0 bg-position-center bg-size-cover overflow-hidden" style="background-image: url(assets/img/landing/intro/hero/bg.jpg);">
        <div class="container vh-100">
          <div class="row flex-nowrap vh-100 ">
            <div class="w-100 align-self-end pt-md-4 m-auto bg-dark p-5 rounded" style="max-width: 526px;">
                <h1 class="text-center text-xl-center text-warning my-3">Admin Login</h1>
                <form method="POST" action="{{ route('login.custom') }}">
                  @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                            autofocus>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-dark btn-block">Signin</button>
                    </div>
                  </form>
                
            </div>
            
          </div>
        </div>
      </section>
@endsection