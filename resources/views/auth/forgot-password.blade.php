@extends('auth.layout')
@section('contents')

<!--begin::Body-->
<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
    <!--begin::Card-->
    <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
       
        <!--begin::Wrapper-->
        <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
        
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="kt_password_reset_form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <!--begin::Heading-->

                <div class="text-center mb-10">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder mb-3">Forgot Password ?</h1>
                    <!--end::Title-->
                    <!--begin::Link-->
                    <div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->
                <!--begin::Input group=-->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input
                        type="email"
                        placeholder="Email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        autocomplete="off"
                        class="form-control bg-transparent {{ $errors->has('email') ? 'is-invalid' : '' }}" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    <!--end::Email-->
                </div>

                <!--begin::Actions-->
                <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                    <button type="submit" id="" class="btn btn-primary me-4">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Submit</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
                </div>
                <div class="fv-row mt-8">
                    <div class="text-gray-500 fw-semibold fs-6">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</div>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Footer-->
        <div class="d-flex flex-stack px-lg-10">
            <!--begin::Languages-->
            <div class="me-0">
                <!--begin::Toggle-->
                <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                    <img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="{{ asset('backend/assets/media/flags/united-states.svg') }}" alt="" />
                    <span data-kt-element="current-lang-name" class="me-1">English</span>
                    <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
                </button>
                <!--end::Toggle-->
                <!--begin::Menu-->
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                            <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="{{ asset('backend/assets/media/flags/united-states.svg') }}" alt="" />
                            </span>
                            <span data-kt-element="lang-name">English</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Languages-->
            <!--begin::Links-->
            <div class="d-flex fw-semibold text-primary fs-base gap-5">
                <a href="#" target="_blank">Terms</a>
                <a href="#" target="_blank">Plans</a>
                <a href="#" target="_blank">Contact Us</a>
            </div>
            <!--end::Links-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Card-->
</div>
<!--end::Body-->
<script src="assets/js/custom/authentication/reset-password/reset-password.js"></script>

@endsection