<!--begin::Aside menu-->
<div class="aside-menu flex-column-fluid">
    <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
		<!--begin::Menu-->
        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item here show menu-accordion border-bottom border-gray-700 mb-2">
                <a class="menu-link {{ request()->routeIs('admin.user-management.users.index') ? 'active' : '' }}" href="{{ route('admin.user-management.users.index') }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Clients List</span>
                    </span>
                </a>
            </div>

           
                    <div class="aside-user d-flex align-items-sm-center justify-content-center px-5 py-1">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px">
                            <img src="{{ asset('assets/media/avatars/300-1.jpg')}}" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Wrapper-->
                        <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                            <!--begin::Section-->
                            <div class="d-flex">
                                <!--begin::Info-->
                                <div class="flex-grow-1 me-2">
                                    <!--begin::Username-->
                                    <a href="}" class="text-white text-hover-primary fs-6 fw-bold">aaaaa</a>
                                    <!--end::Username-->
                                    <div>
                                        
                                    <!--begin::Description-->
                                    <a href="">
                                        
                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Accepted</span>
                                        
                                    </a>
                                    <!--end::Description-->
                                    </div>
                                    <!--begin::Label-->
                                    <div class="d-flex align-items-center text-success fs-9">
                                        <span class="bullet bullet-dot bg-success me-1"></span>online
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
        </div>
        <!--end::Menu-->
    </div>
    </div>
<!--end::Aside Menu-->
