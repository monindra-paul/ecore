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
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="white" color="#ffffff" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-airplay text-primary">
                                <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                </path>
                                <polygon points="12 15 17 21 7 21 12 15"></polygon>
                            </svg>
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


                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-file-text text-primary">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg>
                        </div>
                        <div class="menu-title">Bill</div>
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-chevron-right text-primary">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg> --}}
                    </a>
                    <ul>
                        <li> <a href="{{ route('bill.list') }}"><i class="bx bx-right-arrow-alt"></i>Show</a>
                        </li>
                        <li> <a href="{{ route('bill.create') }}"><i class="bx bx-right-arrow-alt"></i>Create</a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M3 12V6.75l6-1.32v6.48zm17-9v8.75l-10 .15V5.21zM3 13l6 .09v6.81l-6-1.15zm17 .25V22l-10-1.91V13.1z" />
                            </svg>
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
                    </ul>
                </li>



                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                height="1em" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M18 3H6v4h12m1 5a1 1 0 0 1-1-1a1 1 0 0 1 1-1a1 1 0 0 1 1 1a1 1 0 0 1-1 1m-3 7H8v-5h8m3-6H5a3 3 0 0 0-3 3v6h4v4h12v-4h4v-6a3 3 0 0 0-3-3" />
                            </svg>
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


                <li>
                    <a href="javascript:;" class="">
                        <div class="parent-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                height="1em" viewBox="0 0 48 48">
                                <g fill="none" stroke="white" stroke-width="4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M42 24V9C42 7.34315 40.6569 6 39 6H9C7.34315 6 6 7.34315 6 9V39C6 40.6569 7.34315 42 9 42H24" />
                                    <circle cx="32" cy="32" r="6" fill="#2f88ff" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M37 36L42 40" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 16H34" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 24L22 24" />
                                </g>
                            </svg>
                        </div>
                        <div class="menu-title">Query</div>
                    </a>

                </li>






            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
