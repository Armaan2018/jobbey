        <div class="sub-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                            <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="jobbey/assets/index.html"><img src="jobbey/assets/images/logo.svg" alt=""></a>
                            <button class="navbar-toggler align-self-start" type="button">
                                <i class="fas fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                                <ul class="navbar-nav align-self-stretch">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="jobbey/assets/index.html">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Jobs</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="jobbey/assets/browse_jobs.html">Browse Jobs</a>
                                            <a class="link-item" href="jobbey/assets/job_single_view.html">Single Job View</a>
                                            <a class="link-item" href="jobbey/assets/post_a_job.html">Post a Job</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Work</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="jobbey/assets/browse_projects.html">Browse Projects</a>
                                            <a class="link-item" href="jobbey/assets/project_single_view.html">Single Project View</a>
                                            <a class="link-item" href="jobbey/assets/post_a_project.html">Post a Project</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Companies</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="jobbey/assets/browse_companies.html">Browse Companies</a>
                                            <a class="link-item" href="jobbey/assets/other_company_profile.html">Company Profile</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Freelancers</a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="jobbey/assets/browse_freelancers.html">Browse Freelancers</a>
                                            <a class="link-item" href="jobbey/assets/other_freelancer_profile.html">Freelancer Profile</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown pages152">
                                        <a href="jobbey/assets/#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            Pages <i class="fas fa-caret-down p-crt"></i>
                                        </a>
                                        <div class="dropdown-menu pages-dropdown">
                                            <a class="link-item" href="jobbey/assets/about.html">About</a>
                                            <a class="link-item" href="jobbey/assets/our_blog.html">Our Blog</a>
                                            <a class="link-item" href="jobbey/assets/blog_single_view.html">Signle Blog View</a>
                                            <a class="link-item" href="jobbey/assets/pricing_plans.html">Pricing Plans</a>
                                            <a class="link-item" href="jobbey/assets/checkout.html">Checkout</a>
                                            <a class="link-item" href="jobbey/assets/plan_invoice.html">Invoice Slip</a>
                                            <a class="link-item" href="jobbey/assets/sign_in.html">Sign in</a>
                                            <a class="link-item" href="jobbey/assets/sign_up.html">Sign up</a>
                                            <a class="link-item" href="jobbey/assets/sign_up_select_profile.html">Sign up Select Profiles</a>
                                            <a class="link-item" href="jobbey/assets/sign_up_freelancer_profile.html">Create Freelancer Profile</a>
                                            <a class="link-item" href="jobbey/assets/sign_up_company_profile.html">Create Company Profile</a>
                                            <a class="link-item" href="jobbey/assets/contact_us.html">Contact</a>
                                            <a class="link-item" href="jobbey/assets/help_center.html">Help Center</a>
                                        </div>
                                    </li>
                                </ul>
                                <a href="jobbey/assets/#" class="search-link" role="button" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
                                 
                                 @if (Auth::check())

                                 @if (Auth::user()-> role == 'company')
                           
                              
                               
                                 
                                              <a href="jobbey/assets/post_a_job.html" class="add-post">Post a Job</a>
                                <a href="jobbey/assets/post_a_project.html" class="add-task">Post a Task</a>

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