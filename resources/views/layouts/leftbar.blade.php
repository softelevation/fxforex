<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}/admin" class="site_title"> <span>Ntatest Admin Panel</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <!--<img src="images/img.jpg" alt="..." class="img-circle profile_img">-->
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->first_name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br /> 

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    
                    @if(Auth::user()->userRole == '1')
                        <li><a><i class="fa fa-users"></i> User Management <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/users/create') }}">Add User</a></li>
                                <li><a href="{{ url('/admin/users') }}">List Users</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-tags"></i> Category Management <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/category/add') }}">Add Category</a></li>
                                <li><a href="{{ url('/admin/category/list') }}">List Category</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-question-circle"></i> Exams Management <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/exams/add') }}">Add Exam</a></li>
                                <li><a href="{{ url('/admin/exams/list') }}">List Exam</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-question-circle"></i> Question Management <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/questions/add') }}">Add Question</a></li>
                                <!--<li><a href="{{ url('/admin/import_excel') }}">Import Excel</a></li>-->
                                <li><a href="{{ url('/admin/questions/list') }}">List Question</a></li>
                                <li><a href="{{ url('/admin/questions/reports') }}">Report Question</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-inr"></i> Order Management <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/orders/list') }}">List Orders</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-newspaper-o"></i> Latest Articles/Exam <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/articles/add') }}">Add Articles</a></li>
                                <li><a href="{{ url('/admin/articles/list') }}">List Articles</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-phone"></i> Contact Info <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/contact/list') }}">List Contact</a></li>
                            </ul>
                        </li>

                        <li><a><i class="fa fa-inr"></i> Payment/Coupon <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/coupons/couponAdd') }}">Add Coupon</a></li>
                                <li><a href="{{ url('/admin/coupons/couponList') }}">Coupon Listing</a></li>

                            </ul>
                        </li>

                        <li><a><i class="fa fa-inr"></i> News <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ url('/admin/articles/addNews') }}">Add News</a></li>
                                <li><a href="{{ url('/admin/articles/listNews') }}">News Listing</a></li>

                            </ul>
                        </li>


                    @endif
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
    </div>
</div>
