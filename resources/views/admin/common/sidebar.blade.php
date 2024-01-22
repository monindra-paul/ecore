<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('assets/images/ecore/logo_main.png') }}" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">ECore</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ url('/admin/login') }}" class="">
                        <div class="parent-icon"><i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>

                </li>
                <li class="menu-label">Portfolio</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Portfolio</div>
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Website
                                Development</a>
                            <ul>
                                <li> <a class="" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="javascript:;"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Website
                                Development</a>
                            <ul>
                                <li> <a class="" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="javascript:;"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Work Category</li>
                <li>
                    <a class="" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Category</div>
                    </a>
                </li>

                <li class="menu-label">Quotations</li>
                <li>
                    <a href="javascript:;" class="">
                        <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                        </div>
                        <div class="menu-title">Quotations</div>
                    </a>
                    <ul>
                        <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>All Quotations</a>
                        </li>
                        <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Create
                                Quotations</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-label">Services Status</li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                        </div>
                        <div class="menu-title">Bill</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('bill.list') }}"><i class="bx bx-right-arrow-alt"></i>Show</a>
                        </li>
                        <li> <a href="{{ route('bill.create') }}"><i class="bx bx-right-arrow-alt"></i>Create</a>
                        </li>
                    </ul>
                </li>



                <li class="menu-label">Softwares & Drivers</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Microsoft</div>
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>
                                Windows Operating System (OS)</a>
                            <ul>
                                <li> <a class="" href="{{ route('support.os.list') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="{{ route('support.os.create') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Office</a>
                            <ul>
                                <li> <a class="" href="{{ route('support.office.list') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="{{ route('support.office.create') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Activator</a>
                            <ul>
                                <li> <a class="" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="javascript:;"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>



                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Printers</div>
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>
                                Printers</a>
                            <ul>
                                <li> <a class="" href="{{ route('support.printers.list') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="{{ route('support.printers.create') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a></li>
                            </ul>
                        </li>
                    </ul>
                    {{-- <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Office</a>
                            <ul>
                                <li> <a class="" href="{{ route('support.office.list') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="{{ route('support.office.create') }}"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i
                                    class="bx bx-right-arrow-alt"></i>Activator</a>
                            <ul>
                                <li> <a class="" href="javascript:;"><i
                                            class="bx bx-right-arrow-alt"></i>Show</a>
                                </li>
                                <li> <a class="" href="javascript:;"><i
                                            class="bx bx-right-arrow-alt"></i>Create</a>
                                </li>
                            </ul>
                        </li>
                    </ul> --}}
                </li>


                <li class="menu-label">Query</li>
                <li>
                    <a href="javascript:;" class="">
                        <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                        </div>
                        <div class="menu-title">Query</div>
                    </a>

                </li>






            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
