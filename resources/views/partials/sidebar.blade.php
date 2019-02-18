<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="../"><img class="main-logo" src="{{asset('custom/img/logo/movetechs.png')}}" style="border-radius:10px;"  alt="" /></a>
                <strong> <i class="fa fa-home"><span aria-expanded="false"></span></i></strong>
            </div>
            <div class="nalika-profile">
                    <div class="profile-dtl">
                        <a href="#"><img src="{{asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7nzbTwGi6zuz6L6wOqA5BULnoCyhlUHmkDiOkao3o8QVOXX-P')}}" alt="" /></a>
                        <h2>Admin <span class="min-dtn">User</span></h2>
                        <h2>Petty <span class="min-dtn">Cash Management</span></h2>
                    </div>
                </div>
                <div class="nav-active nalika-profile">
                        <a style="font-size:18px" href="../">
                            <i style="font-size:29px"class="fa fa-home" aria-hidden="true"></i>
                            <span>Home</span>
                        </a>
                    </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Accounts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="{{route('account.create')}}"><span class="mini-sub-pro">Create Account</span></a></li>
                                <li><a title="View Mail" href="{{route('account.show')}}"><span class="mini-sub-pro">View Accounts</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-pie-chart icon-wrap"></i> <span class="mini-click-non">Top Up</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="top up" href="{{route('account.topup')}}"><span class="mini-sub-pro">Make Top Up</span></a></li>
                                <li><a title="Data Maps" href="{{route('topup.view')}}"><span class="mini-sub-pro">View</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Spendings</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Peity Charts" href="{{route('spendings.create')}}"><span class="mini-sub-pro">Add Daily Expense</span></a></li>
                                <li><a title="Data Table" href="{{route('spendings.view')}}"><span class="mini-sub-pro">View Expenditure</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="Reports" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Reports</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Daily Reports" href="{{route('reports.create')}}"><span class="mini-sub-pro">Daily Reports</span></a></li>
                                <li><a title="analytics" href="{{route('charts.display')}}"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Area Charts" href=""><span class="mini-sub-pro">Monthly Reports</span></a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
