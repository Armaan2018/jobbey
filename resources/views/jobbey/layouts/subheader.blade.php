        <div class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                            <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="{{ route('job.alljob') }}"><img src="{{URL::to('')}}/jobbey/assets/images/logo.svg" alt=""></a>
                            <button class="navbar-toggler align-self-start" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                                <ul class="navbar-nav align-self-stretch">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ route('job.alljob') }}">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Jobs</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="{{ route('job.alljob') }}">Browse Jobs</a>

                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Work</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="#">Browse Projects</a>
                                            <a class="link-item" href="#">Single Project View</a>
                                            <a class="link-item" href="#">Post a Project</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Companies</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="#">Browse Companies</a>
                                            <a class="link-item" href="#">Company Profile</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Freelancers</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="#">Browse Freelancers</a>
                                            <a class="link-item" href="#">Freelancer Profile</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown pages152">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            Pages <i class="fas fa-caret-down p-crt"></i>
                                        </a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="#">About</a>
                                            <a class="link-item" href="#">Our Blog</a>
                                            <a class="link-item" href="#">Signle Blog View</a>
                                            <a class="link-item" href="#">Pricing Plans</a>
                                            <a class="link-item" href="#">Checkout</a>
                                            <a class="link-item" href="#">Invoice Slip</a>

                                            <a class="link-item" href="#">Contact</a>
                                            <a class="link-item" href="#">Help Center</a>
                                        </div>
                                    </li>
                                </ul>
                                <a href="jobbey/assets/#" class="search-link" role="button" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
                                 
                                 @if (Auth::check())

                                 @if (Auth::user()-> role == 'company')
                           
                              
                               
                                 
                                              <a href="{{ route('job.taskcreate') }}" class="add-post">Post a Job</a>
                                <a href="#" class="add-task">Post a Task</a>

                                   @endif
                                 
                              @endif
                       


                            </div>
                            <div class="responsive-search order-1">
                                <input type="text" class="rsp-search" placeholder="Search...">
                                <i class="fas fa-search r-sh1"></i>
                            </div>
                        </nav>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>