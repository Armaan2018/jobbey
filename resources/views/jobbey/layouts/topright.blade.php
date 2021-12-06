@if (Auth::check())
    <div class="top-right-hd">


                                <ul>
                                    <li class="dropdown">
                                        <a href="jobbey/assets/#" class="icon14 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            <i class="fas fa-envelope"></i>
                                            <div class="circle-alrt"></div>
                                        </a>
                                        <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="jobbey/assets/#"><img src="jobbey/assets/images/user-dp-1.jpg" alt="">
                                                            <div class="user-title1">Jassica William </div>
                                                            <span>Hey How are you John Doe...</span>
                                                        </a>
                                                    </div>
                                                    <div class="time5">2 min ago</div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="jobbey/assets/#"><img src="jobbey/assets/images/user-dp-1.jpg" alt="">
                                                            <div class="user-title1">Rock Smith </div>
                                                            <span>Interesting Event! I will join this...</span>
                                                        </a>
                                                    </div>
                                                    <div class="time5">5 min ago</div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="jobbey/assets/#"><img src="jobbey/assets/images/user-dp-1.jpg" alt="">
                                                            <div class="user-title1">Joy Doe </div>
                                                            <span>Hey Sir! What about you...</span>
                                                        </a>
                                                    </div>
                                                    <div class="time5">10 min ago</div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <a href="jobbey/assets/my_freelancer_messages.html" class="view-all">View All Messages</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="jobbey/assets/#" class="icon14 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            <i class="fas fa-bell"></i>
                                            <div class="circle-alrt"></div>
                                        </a>
                                        <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="jobbey/assets/#">
                                                            <div class="noti-icon"><i class="fas fa-users"></i></div>
                                                            <div class="user-title1">Rock William </div>
                                                            <span>applied for a <ins class="noti-p-link">Php Developer</ins>.</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="jobbey/assets/#">
                                                            <div class="noti-icon"><i class="fas fa-bullseye"></i></div>
                                                            <div class="user-title1">Johnson Smith</div>
                                                            <span>placed a bid on your <ins class="noti-p-link">I Need a ...</ins></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="jobbey/assets/#">
                                                            <div class="noti-icon"><i class="fas fa-exclamation"></i></div>
                                                            <span class="pt-2">Your job listing <ins class="noti-p-link">Wordpress Developer</ins> is expiring.</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <a href="jobbey/assets/my_freelancer_notifications.html" class="view-all">View All Notifications</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="account order-1 dropdown">
                                            <a href="jobbey/assets/#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                <div class="user-dp"><img src="{{URL::to('')}}/public/media/work/{{Auth::user() -> profileimage}}" alt=""></div>
                                                <span>Hi! {{Auth::user() -> name}}</span>
                                                <i class="fas fa-sort-down"></i>
                                            </a>
                                            <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                                <a class="link-item" href="jobbey/assets/my_freelancer_dashboard.html">Dashboard</a>
                                                <a class="link-item" href="jobbey/assets/my_freelancer_setting.html">Setting</a>
                                                <a class="link-item" href="jobbey/assets/my_freelancer_messages.html">My Messages</a>
                                                <a class="link-item" href="jobbey/assets/my_freelancer_jobs.html">My Jobs</a>
                                                <a class="link-item" href="jobbey/assets/my_freelancer_bids.html">My Bids</a>
                                                <a class="link-item" href="jobbey/assets/my_freelancer_portfolio.html">My Portfolio</a>
                                                <a class="link-item" href="jobbey/assets/my_freelancer_bookmarks.html">My Bookmarks</a>
                                                <a class="link-item" href="jobbey/assets/my_freelancer_payments.html">Payments</a>
                                                <a class="link-item" href="#" id="logout_id">Logout</a>

                                                <form id="logout_form" method="POST" action="{{ route('user.logout') }}">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @else
                            <div class="top-right-hd">
<a href="{{ route('user.signin') }}" class="login_btn"><i class="fas fa-lock"></i> Login</a>
</div>


@endif
