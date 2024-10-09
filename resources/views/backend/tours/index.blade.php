@extends('layouts.index')
@section('Heading')
List tours
@endsection
@section('contents')

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content px-0">
            <!--begin::Tours-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="TourSearch" class="form-control form-control-solid w-250px ps-12" placeholder="Search Tour" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <a href="{{ route('tours.create') }}" class="btn btn-primary">Add Tour</a>
                        <!--end::Add Tour-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_Tours_table">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_Tours_table .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th >Image</th>
                                <th class="min-w-200px">Tour Name</th>
                                <th class="text-end min-w-100px">Duration</th>
                                <th class="text-end min-w-100px">No. of Persons</th>
                                <th class="text-end min-w-100px">Category</th>
                                <th class="text-end min-w-100px">Price</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                        </thead>
                        {{-- Uncomment this section when tours data is available --}}
                        <tbody class="fw-semibold text-gray-600">
                            @if (isset($tours) && count($tours) > 0)
                            @foreach($tours as $tour)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <div class="ms-5">
                                           <img src="{{ url('storage/' . $tour->image) }}" class="w-80px ms-n1"> 
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Title-->
                                        <div class="ms-5">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-Tour-filter="Tour_name"> {{ $tour->name }}</a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->duration }}</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->parson_no }}</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->category }}</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->price }}</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                        <i class="ki-duotone ki-down fs-5 ms-1"></i>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('tours.edit', $tour->id) }}" class="menu-link px-3">
                                                <i class="ki-duotone ki-notepad-edit">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i> &nbsp; Edit
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-url="{{ route('tours.destroy', ['id' => $tour->id]) }}" data-kt-ecommerce-category-filter="delete_row">
                                                <i class="ki-duotone ki-trash">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i> &nbsp; Delete
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            @endforeach
                            @endif 
                        </tbody>
                    </table>
                    <!--end::Table-->
                    <div class="d-flex justify-content-center mt-4">
                        <ul class="pagination">
                            <!-- Pagination links can be added here -->
                        </ul>
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Tours-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end::Main-->



@endsection