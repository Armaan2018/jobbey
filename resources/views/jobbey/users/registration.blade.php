@extends('jobbey.layouts.app')

@section('main-content')

          <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="lg_form">
                        <div class="main-heading">
                            <h2>Sign Up to Jobby</h2>
                            <div class="line-shape1">
                                <img src="images/line.svg" alt="">
                            </div>
                        </div>

                        <form action="{{ route('user.register') }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <label class="label15">Your Name*</label>
                            <input type="text" name="name" class="job-input" placeholder="Enter Your Name">
                        </div>                 
      
           <div class="form-group">
             <label class="label15">Sign Up As</label>
             <select class="form-control form-control-lg" name="role">
                <option value="freelancer">Freelancer</option>
                <option value="company">Company</option>
                  </select>  

                  </div>                  
                        <div class="form-group">
                            <label class="label15">Email Address*</label>
                            <input type="email" name="email" class="job-input" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label class="label15">Password*</label>
                            <input type="password" name="password" class="job-input" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label class="label15">Confirm Password*</label>
                            <input type="password" name="password_confirmation" class="job-input" placeholder="Enter Confirm Password">
                        </div>
                        <div class="ui checkbox apply_check check_out checked">
                            <input type="checkbox" tabindex="0" class="hidden">
                            <label style="color:#242424 !important;">I accept the Terms of Services</label>
                        </div>
                      
                        <button type="submit" class="lr_btn">Submit</button>
                        <div class="done140">
                            Already have an account?<a href="sign_in.html">Sign in Now<i class="fas fa-angle-double-right"></i></a>
                        </div>

                        </form>



                    </div>
                </div>
            </div>
@endsection