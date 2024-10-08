<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar align-items-center">
	<!--begin::Toolbar container-->
	<div id="kt_app_toolbar_container" class="app-container container-xxl">
		<!--begin::Toolbar container-->
		<div class="d-flex flex-stack flex-row-fluid">
			<!--begin::Toolbar container-->
			<div class="d-flex flex-column flex-row-fluid">
				<!--begin::Toolbar wrapper-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
						<a href="#" class="text-white text-hover-primary">
							<i class="ki-duotone ki-home fs-3 text-gray-500"></i>
						</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1 lh-0"></i>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Dashboard</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1 lh-0"></i>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-gray-700 fw-bold lh-1">Panel</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<i class="ki-duotone ki-right fs-7 text-gray-700 mx-n1 lh-0"></i>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-gray-700 fw-bold lh-1">@yield('Heading')</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
				<!--begin::Page title-->
				<div class="page-title d-flex align-items-center me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-gray-900 fw-bolder fs-1 flex-column justify-content-center my-0"> @yield('Heading')</h1>
					<!--end::Title-->
				</div>
				<!--end::Page title-->
			</div>
			<!--end::Toolbar container-->

		</div>
		<!--end::Toolbar container-->
	</div>
	<!--end::Toolbar container-->
</div>
<!--end::Toolbar-->