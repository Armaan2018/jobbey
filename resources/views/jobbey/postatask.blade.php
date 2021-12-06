@extends('jobbey.layouts.app')

@section('main-content')
@if (Auth::check())
    @if (Auth::user()-> role == 'company')
            <div class="row">
                <div class="col-md-8">
                    <div class="main-heading bids_heading">
                        <h2>Post a Project</h2>
                        <div class="line-shape1">
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                    <div class="post501">
                        <form action="{{ route('job.task.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label15">Project Name*</label>
                                        <input type="text" name="title" class="job-input" placeholder="Project Name Here" value="{{old('title')}}">

                                        <input type="hidden" name="get_user_id" value="{{Auth::user() -> id}}">


                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="label15">Project Description*</label>
                                        <textarea class="textarea_input" name="description" placeholder="Type Description" value="{{old('description')}}"></textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="requires">
                                        What are the Project requirements
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label15">Project Category*</label>
                                        <br>
                                        @error('test_cat')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="ui fluid search selection dropdown skills-search">
                                            <input name="test_cat" type="hidden" value="{{old('test_cat')}}">
                                            <i class="dropdown icon"></i>
                                            <input class="search" autocomplete="off" tabindex="0">
                                            <span class="sizer" style=""></span>
                                            <div class="default text">Select Category</div>
                                            <div class="menu transition hidden" tabindex="-1">
                                                <div class="item selected" data-value="Job1">Category 01</div>
                                                <div class="item" data-value="SoftwereDevelopment">Softwere Development</div>
                                                <div class="item" data-value="WebApplication">Web Application</div>
                                                <div class="item" data-value="MobileAppDevelopment">MobileAppDevelopment</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="label15">Experience Level*</label>
                                        <br>
                                        @error('experience')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="ui fluid search selection dropdown skills-search">
                                            <input name="experience" type="hidden" value="{{old('experience')}}">
                                            <i class="dropdown icon"></i>
                                            <input class="search" autocomplete="off" tabindex="0">
                                            <span class="sizer" style=""></span>
                                            <div class="default text">Select Experience Level</div>
                                            <div class="menu transition hidden" tabindex="-1">
                                                <div class="item" data-value="level1">level 01</div>
                                                <div class="item" data-value="level2">level 02</div>
                                                <div class="item" data-value="level3">level 03</div>
                                                <div class="item" data-value="level4">level 04</div>
                                                <div class="item" data-value="level5">level 05</div>
                                                <div class="item" data-value="level6">level 06</div>
                                                <div class="item" data-value="level7">level 07</div>
                                                <div class="item" data-value="level8">level 08</div>
                                                <div class="item" data-value="level9">level 09</div>
                                                <div class="item" data-value="level10">level 10</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label15">Budget*</label>
                                         <br>
                                        @error('budget')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="ui fluid search selection dropdown skills-search">
                                            <input name="budget" type="hidden" value="">
                                            <i class="dropdown icon"></i>
                                            <input class="search" autocomplete="off" tabindex="0">
                                            <span class="sizer" style=""></span>
                                            <div class="default text">Hourly Price</div>
                                            <div class="menu transition hidden" tabindex="-1">
                                                <div class="item" data-value="hp1">Hourly Price</div>
                                                <div class="item" data-value="fp2">Fixed Price</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        @error('budget')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="smm_input">
                                            <input type="text" name="min_budget" class="job-input" placeholder="Min" value="{{old('min_budget')}}">
                                            <div class="mix_max">Usd</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        @error('budget')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="smm_input">
                                            <input type="text" name="max_budget" class="job-input" placeholder="Max" value="{{old('max_budget')}}">
                                            <div class="mix_max">Usd</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <br>
                                        <label class="label15">Location*</label>
                                        <div class="smm_input">
                                            <input type="text" name="location" class="job-input" placeholder="Type Address" value="{{old('location')}}">
                                            <div class="loc_icon"><i class="fas fa-map-marker-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <br>
                                        @error('test_skill')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <label class="label15">Skills*</label>
                                        <div class="ui fluid multiple search selection dropdown skills-search">
                                            <input name="test_skill[]" type="hidden" value="">
                                            <i class="dropdown icon"></i>
                                            <input class="search" autocomplete="off" tabindex="0"><span class="sizer" style=""></span>
                                            <div class="default text">Skills</div>
                                            <div class="menu transition hidden" tabindex="-1">
                                                <div class="item selected" data-value="angular">Angular</div>
                                                <div class="item" data-value="css">CSS</div>
                                                <div class="item" data-value="design">Graphic Design</div>
                                                <div class="item" data-value="ember">Ember</div>
                                                <div class="item" data-value="html">HTML</div>
                                                <div class="item" data-value="ia">Information Architecture</div>
                                                <div class="item" data-value="javascript">Javascript</div>
                                                <div class="item" data-value="mech">Mechanical Engineering</div>
                                                <div class="item" data-value="meteor">Meteor</div>
                                                <div class="item" data-value="node">NodeJS</div>
                                                <div class="item" data-value="plumbing">Plumbing</div>
                                                <div class="item" data-value="python">Python</div>
                                                <div class="item" data-value="rails">Rails</div>
                                                <div class="item" data-value="react">React</div>
                                                <div class="item" data-value="repair">Kitchen Repair</div>
                                                <div class="item" data-value="ruby">Ruby</div>
                                                <div class="item" data-value="ui">UI Design</div>
                                                <div class="item" data-value="ux">User Experience</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="label15">Upload Files*</label>
                                        <div class="image-upload-wrap1">
                                            <input name="cv_files" class="file-upload-input1" id="file2" type="file" onchange="readURL(this);" accept="image/*">
                                            <div class="drag-text1">
                                                Upload Files
                                            </div>
                                        </div>
                                        <p class="upload_dt">Images, Pdf and MS Word Filess</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="post_jp_btn" type="submit">Post a Project</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-heading bids_heading pjfaq80">
                        <h2>FAQ</h2>
                    </div>
                    <div class="jp_faq">
                        <div class="jp_faq_item">
                            <h4>01. Is there a fee to post a project?</h4>
                            <p>There are pricing plans monthly and yearly for project on Jobby. It is a paid service that we offer bith for the employer and the freelancer.</p>
                        </div>
                        <div class="jp_faq_item">
                            <h4>02. How do I find freelancers for my project?</h4>
                            <p>Posting a project on Jobby will get your project in front of the most qualified freelancers and agencies by bids. You will then get bids for the project with the applicant’s details and reasons why they are the best fit for the projects. You can also search for freelancers and invite them to apply.</p>
                        </div>
                        <div class="jp_faq_item">
                            <h4>03. How do I pay freelancers & agencies?</h4>
                            <p>You’re free to pay your freelancer and agencies. you can pay automatically for their work through Paypal, Payoneer, or (which allows you to pay via credit card, debit card).</p>
                        </div>
                    </div>
                </div>
            </div>
    @endif
@endif
@endsection