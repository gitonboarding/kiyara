@extends('auth.layout')
@section('contents')

<!--begin::Body-->
<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
    
    <!--begin::Card-->
    <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
        <!--begin::Wrapper-->
        <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
            <!--begin::Form-->
            <form class="form w-100" novalidate="novalidate" id="" method="POST" action="{{ route('register') }}">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-11">
                    <!--begin::Title-->
                    <h1 class="text-gray-900 fw-bolder mb-3">Sign Up</h1>
                    <!--end::Title-->
                    <!--begin::Subtitle-->
                    <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                    <!--end::Subtitle=-->
                </div>
                <!--begin::Heading-->
                <!--begin::Login options-->
                <div class="row g-3 mb-9">
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Google link-->
                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                            <img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/google-icon.svg') }}" class="h-15px me-3" />Sign in with Google</a>
                        <!--end::Google link-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-6">
                        <!--begin::Apple link-->
                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                            <img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/apple-black.svg') }}" class="theme-light-show h-15px me-3" />
                            <img alt="Logo" src="{{ asset('backend/assets/media/svg/brand-logos/apple-black-dark.svg') }}" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
                        <!--end::Apple link-->
                    </div>
                    <!--end::Col-->
                </div>

                <!--end::Login options-->
                <!--begin::Separator-->
                <div class="separator separator-content my-14">
                    <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                </div>
                <!--end::Separator-->
                <!--begin::Input group=-->
                <div class="fv-row mb-8">
                    <!--begin::Name-->
                    <input
                        type="text"
                        placeholder="Name"
                        name="name"
                        value="{{ old('name') }}"
                        autocomplete="off"
                        class="form-control bg-transparent {{ $errors->has('name') ? 'is-invalid' : '' }}" />
                    <!--end::Name-->

                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                </div>

                <!--begin::Input group-->

                <!--begin::Input group=-->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input
                        type="email"
                        placeholder="Email"
                        name="email"
                        value="{{ old('email') }}"
                        autocomplete="off"
                        class="form-control bg-transparent {{ $errors->has('email') ? 'is-invalid' : '' }}"
                        required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    <!--end::Email-->
                </div>

                <!--begin::Input group-->
                <div class="fv-row mb-8" data-kt-password-meter="true">
                    <!--begin::Wrapper-->
                    <div class="mb-1">
                        <!--begin::Input wrapper-->
                        <div class="position-relative mb-3">
                            <input
                                class="form-control bg-transparent {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                type="password"
                                placeholder="Password"
                                name="password"
                                autocomplete="off"
                                id="password" />
                            <span
                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                onclick="togglePasswordVisibility()"
                                id="password-toggle-icon">
                                <i class="ki-duotone ki-eye-slash fs-2" id="eye-slash"></i>
                                <i class="ki-duotone ki-eye fs-2 d-none" id="eye"></i>
                            </span>
                        </div>
                        <!--end::Input wrapper-->

                        <!--begin::Meter-->
                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                        </div>
                        <!--end::Meter-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Hint-->
                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                    <!--end::Hint-->

                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                </div>
                <!--end::Input group-->

                <!--end::Input group=-->
                <div class="fv-row mb-8">
                    <!--begin::Repeat Password-->
                    <input
                        placeholder="Repeat Password"
                        name="password_confirmation"
                        type="password"
                        autocomplete="off"
                        class="form-control bg-transparent {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" />
                    <!--end::Repeat Password-->

                    <!-- Display error message for confirmation password -->
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                </div>
                <!--end::Input group-->

                <!--begin::Accept-->
                <div class="fv-row mb-8">
                    <label class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="toc" value="1" />
                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
                            <a href="#" class="ms-1 link-primary">Terms</a></span>
                    </label>
                </div>
                <!--end::Accept-->
                <!--begin::Submit button-->
                <div class="d-grid mb-10">
                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Sign up</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                </div>
                <!--end::Submit button-->
                <!--begin::Sign up-->
                <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                    <a href="{{ route('login') }}" class="link-primary fw-semibold">Sign in</a>
                </div>
                <!--end::Sign up-->
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

@endsection