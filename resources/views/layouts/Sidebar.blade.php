<style>
	.menu-icon-gray-500 .menu-item .menu-link .menu-icon,
	.menu-icon-gray-500 .menu-item .menu-link .menu-icon .svg-icon,
	.menu-icon-gray-500 .menu-item .menu-link .menu-icon i {
		font-size: 22px;
	}
</style>

<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar align-self-start" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_sidebar_toggle">
	<!--begin::Sidebar secondary menu-->
	<div class="card flex-grow-1 py-5" data-kt-sticky="true" data-kt-sticky-name="app-sidebar-menu-sticky" data-kt-sticky-offset="{default: false, xl: '400px'}" data-kt-sticky-width="260px" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
		<div class="hover-scroll-y mx-3 px-2 px-lg-2" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_app_toolbar, #kt_app_footer" data-kt-scroll-wrappers1="#kt_app_content" data-kt-scroll-offset="5px">
			<div id="kt_app_sidebar_menu" data-kt-menu="true" class="menu menu-sub-indention menu-rounded menu-column menu-active-bg menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-arrow-gray-500 fw-semibold fs-6">

				<!--begin:Menu item-->
				<div data-kt-menu-trigger="click" class="menu-item menu-accordion show">
					<!--begin:Menu link-->
					<span class="menu-link">
						<span class="menu-icon">
							<i class="ki-outline ki-shop"></i>
						</span>
						<span class="menu-title">Tours</span>
						<span class="menu-arrow"></span>
					</span>
					<!--end:Menu link-->
					<!--begin:Menu sub-->
					<div class="menu-sub menu-sub-accordion">
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-bullet">
									<span class="bullet bullet-dot"></span>
								</span>
								<span class="menu-title">Tours</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="{{route('tours.create')}}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Create Tours</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="{{route('tours.index')}}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Tours list</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->

						
					</div>
					<!--end:Menu sub-->
				</div>
				<!--end:Menu item-->

			</div>
		</div>
	</div>
	<!--end::Sidebar secondary menu-->
</div>
<!--end::Sidebar-->