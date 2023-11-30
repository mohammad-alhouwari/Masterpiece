<section>
    @if (session('success'))
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire(
                    'Success!',
                    '{{ session('success') }}',
                    'success'
                );
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            window.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    html: `@foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach`,
                    footer: 'Fix the  issue and try again'
                });
            });
        </script>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li @yield('home')>
                    <a href="{{ route('dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>

                <li @yield('users')>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa-solid fa-users"></i>
                        <span>Users Information</span>
                    </a>
                    <ul class="ml-menu">
                        <li @yield('usersView')>
                            <a href="{{ route('dashboard.user.index') }}">View All Users</a>
                        </li>
                        <li @yield('usersAdd')>
                            <a href="{{ route('dashboard.user.create') }}">Add New User</a>
                        </li>
                    </ul>
                </li>






                <li @yield('categories')>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <span>Categories Information</span>
                    </a>
                    <ul class="ml-menu">
                        <li @yield('categoryView')>
                            <a href="{{ route('dashboard.category.index') }}">View All Categories</a>
                        </li>
                        <li @yield('categoryAdd')>
                            <a href="{{ route('dashboard.category.create') }}">Add New Category</a>
                        </li>
                    </ul>
                </li>







                <li @yield('products')>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa-solid fa-box"></i>
                        <span>Products Information</span>
                    </a>
                    <ul class="ml-menu">
                        <li @yield('productsView')>
                            <a href="{{ url('dashboard/product') }}">View All Products</a>
                        </li>
                        <li @yield('productsAdd')>
                            <a href="{{ url('dashboard/product/create') }}">Add New Product</a>
                        </li>
                    </ul>
                </li>

                <li @yield('orders')>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa-solid fa-truck"></i>
                        <span>Orders Information</span>
                    </a>
                    <ul class="ml-menu">
                        <li @yield('orderView')>
                            <a href="{{ route('orders') }}">View All Orders</a>
                        </li>
                    </ul>

                    @yield('singleOrderView')

                </li>

                {{-- <li @yield('about')>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa-regular fa-address-card"></i>
                        <span>About-US Information</span>
                    </a>
                    <ul class="ml-menu">
                        <li @yield('aboutView')>
                            <a href="{{ url('dashboard/about') }}">View All About-US</a>
                        </li>
                        <li @yield('aboutAdd')>
                            <a href="{{ url('dashboard/about/create') }}">Add New About-US</a>
                        </li>
                    </ul>
                </li> --}}
                <li @yield('general')>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>General Data</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle @yield('Index_Slider') ">
                                <span>Index_Slider Information</span>
                            </a>
                            <ul class="ml-menu">
                                <li @yield('Index_SliderView')>
                                    <a href="{{ route('Index_SliderView') }}">View All Index_Slider</a>
                                </li>
                                <li @yield('Index_SliderAdd')>
                                    <a href="{{ route('Index_SliderCreate') }}">Add New Index_Slider</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle @yield('about')">
                                <span>About-US Information</span>
                            </a>
                            <ul class="ml-menu">
                                <li @yield('aboutView')>
                                    <a href="{{ url('dashboard/about') }}">View All About-US</a>
                                </li>
                                <li @yield('aboutAdd')>
                                    <a href="{{ url('dashboard/about/create') }}">Add New About-US</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>



        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2023 <a href="javascript:void(0);">Alhouwari-</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
