@extends('jobbey.layouts.app')

@section('main-content')
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="lg_form">
                        <div class="main-heading">
                            <h2>Sign in to Jobby</h2>
                            <div class="line-shape1">
                                <img src="{{URL::to('')}}/jobbey/assets/images/line.svg" alt="">
                            </div>
                        </div>

                        <form action="{{ route('user.login') }}" method="POST">
                            @csrf
                        
                        <div class="form-group">
                            <label class="label15">Email Address*</label>
                            <input type="email" name="email" class="job-input" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label class="label15">Password*</label>
                            <input type="password" name="password" class="job-input" placeholder="Enter Password">
                        </div>
                        <button class="lr_btn" type="submit">Sign in Now</button>
                        <div class="done145">
                            <div class="done146">
                                Need an account?<a href="sign_up.html">Join us Now<i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="done147">
                                <a href="forgot_password.html">Forgot Password?</a>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
@endsection