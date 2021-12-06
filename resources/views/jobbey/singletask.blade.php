@extends('jobbey.layouts.app')

@section('main-content')
@if (Auth::check())
    @foreach ($single as $element)
    @php
       $ele_bud = json_decode($element -> budget);
       $skill   = json_decode($element -> test_skill);
       $get_bud = $ele_bud -> type_of;
       $get_bud_min = $ele_bud -> min;
       $get_bud_max = $ele_bud -> max;

     if ($get_bud == 'fp2'){
            $get_bud = 'Fixed';
      }else{
       $get_bud = 'Hourly';

      }
    @endphp
@foreach ($element -> users as $user)
    {{-- expr --}}

                <div class="col-lg-9 col-md-8">
                    <div class="view_details">
                        <ul>
                            <li>
                                <div class="vw_items">
                                    <i class="fas fa-eye"></i>
                                    <div class="vw_item_text">
                                        <h6>Views</h6>
                                        <span>135</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="vw_items">
                                    <i class="fas fa-shield-alt"></i>
                                    <div class="vw_item_text">
                                        <h6>Verify</h6>
                                        <span>Yes</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="vw_items">
                                    <i class="far fa-money-bill-alt"></i>
                                    <div class="vw_item_text">
                                        <h6>{{$get_bud}}</h6>
                                        <span>${{$get_bud_min}} - ${{$get_bud_max}}</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="vw_items">
                                    <i class="far fa-clock"></i>
                                    <div class="vw_item_text">
                                        <h6>Posted Date</h6>
                                        <span>{{$element -> created_at ->diffForHumans()}}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="job-item ptrl_2 mt-20">
                        <div class="job-top-dt">
                            <div class="job-left-dt">
                                <img src="{{URL::to('')}}/public/media/work/{{$user -> profileimage}}" alt="">
                                <div class="job-ut-dts">
                                    <a href="#">
                                        <h4>{{ $user -> name}}</h4>
                                    </a>
                                    <span><i class="fas fa-map-marker-alt"></i> {{ $element -> location}}</span>
                                </div>
                            </div>
                            <div class="job-right-dt">
                                <div class="job-price">${{ $get_bud_min }} - ${{ $get_bud_min }}</div>
                            </div>
                        </div>
                        <div class="job-des-dt">
                            <h4>{{ $element -> title }}</h4>
                            <p>{{ $element -> description }}</p>
                            <div class="job-skills">
                                @foreach ($skill as $skills)
                                    <a href="#">{{ $skills }}</a>
                                @endforeach
                               

                            </div>
                        </div>
                        <div class="job_dts">
                            <h4>Attachments</h4>
                            <ul class="download_files">
                                <li>
                                    <div class="dwn_fls">
                                        <div class="dwn-header">
                                            <h6>Project Briefing Details</h6>
                                        </div>
                                        <div class="dwn-footer">
                                            <span>PDF</span>
                                            <button class="download_button"><i class="fas fa-download"></i></button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dwn_fls">
                                        <div class="dwn-header">
                                            <h6>Images</h6>
                                        </div>
                                        <div class="dwn-footer">
                                            <span>Zip</span>
                                            <button class="download_button"><i class="fas fa-download"></i></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="find-lts-jobs">
                        <div class="main-heading bids_heading">
                            <h2>Freelancers Bidding</h2>
                            <div class="line-shape1">
                                <img src="images/line.svg" alt="">
                            </div>
                        </div>
                        <div class="freelancers_bidings">

                            @foreach ($element -> applieds as $appl)
                            @foreach ($appl -> users as $getuser)


                            @php
                                $js_user = json_decode($getuser -> profile)
                            @endphp
                                       <div class="job-item mt-30" id="applicants">
                                <div class="job-top-dt">
                                    <div class="job-left-dt">
                                        <img src="{{URL::to('')}}/public/media/work/{{$getuser -> profileimage}}" alt="">
                                        <div class="job-ut-dts">
                                            <a href="#">

                                                
                                                       <h4>{{$getuser -> name}}</h4>
                                              
                                           
                                            </a>

                                            <span><i class="fas fa-map-marker-alt"></i> {{$js_user -> location}}</span>
                                            <div class="star mt-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.9</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-right-dt job-right-dt78">


                                        @php
                                           $get_bud = $appl -> bid_budget;
                                           $damn = Str::replace(',','-$',$get_bud);
                                        @endphp



 
                                        <div class="job-price job-price78">${{$damn}}</div>
                                        <div class="job-fp dy_cl">in {{$appl -> delivary_days}} Days</div>
                                        <br>

                              
                                          
                                      
                                          @if (Auth::user()-> id == $user -> id)

                                          @foreach ($appl -> tasks as $usertask)
                                              
                                         


                                          <a href="" id="hire_req_id" hire_id_attr="{{$usertask -> id}}"><span  class="badge badge-success">Hire</span></a>
                                          <a href="" id="del_req_id" del_appli_attr="{{$appl -> id}}"><span  class="badge badge-warning">Cancel</span></a>


                                           @endforeach
                                            
                                          @endif
                                   
                                            
                                  
                                      
                                    </div>
                                </div>
                            </div>
                              @endforeach
                            @endforeach


                     

                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 mainpage">
                    <div class="total_days mtp_30">4 days 5 hours left</div>

@if (Auth::user() -> role == 'freelancer')


                    <h4 class="bid_title">Bid Now This Job</h4>

                    <form method="POST" id="bidding_form" action="{{ route('job.confirm') }}">
                        @csrf
                        <input type="hidden" name="get_freelancer" value="{{Auth::user() -> id}}">
                        <input type="hidden" name="get_task" value="{{$element -> id}}">
                    <div class="bid_amount">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Set Your Minimal Rate <span>($)</span></h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="filter-dd">
                            <div class="rg-slider">
                                <input class="rn-slider slider-input" type="hidden" name="bid_budget" value="5,500" />
                            </div>
                        </div>
                    </div>
                    <div class="dlvry_days">
                        <div class="fltr-items-heading">
                            <div class="fltr-item-left">
                                <h6>Set Your Delivery Time</h6>
                            </div>
                            <div class="fltr-item-right">
                                <a href="#">Clear</a>
                            </div>
                        </div>
                        <div class="ui fluid search selection dropdown skills-search">
                            <input name="delivary_days" type="hidden" value="">
                            <i class="dropdown icon"></i>
                            <input class="search" autocomplete="off" tabindex="0">
                            <span class="sizer" style=""></span>
                            <div class="default text">Select Days</div>
                            <div class="menu transition hidden" tabindex="-1">
                                <div class="item selected" data-value="Job1">5 Days</div>
                                <div class="item" data-value="10">10 Days</div>
                                <div class="item" data-value="15">15 Days</div>
                                <div class="item" data-value="20">20 Days</div>
                                <div class="item" data-value="25">25 Days</div>
                                <div class="item" data-value="30">30 Days</div>
                                <div class="item" data-value="50">50 Days</div>
                                <div class="item" data-value="70">70 Days</div>
                                <div class="item" data-value="120">120 Days</div>
                            </div>
                        </div>
                    </div>
                    <button class="apply_job_rt" type="submit">PLACE A BID</button>
                    </form>



                    <div class="bookmark_rt"><button class="bookmark1 mr-3" title="bookmark"><i class="fas fa-heart"></i></button>BOOKMARK</div>
                    <ul class="social-links">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
                @endif
@endforeach                
@endforeach

@else

<a class="lr_btn" href="{{ route('user.signin') }}">Sign in Now</a>

@endif


@endsection