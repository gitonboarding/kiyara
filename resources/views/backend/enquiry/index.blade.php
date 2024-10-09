@extends('layouts.index')
@section('Heading')
Total Enquiries
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
                            <input type="text" id="TourSearch" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
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
                                <th class="min-w-200px">Tour Name</th>
                                <th class="min-w-100px">Name</th>
                                <th class="min-w-100px">Email</th>
                                <th class="min-w-100px">Phone</th>
                                <th class="min-w-100px">No. of Persons</th>
                                <th class="min-w-200px">Message</th>
                            </tr>
                        </thead>
                        {{-- Uncomment this section when tours data is available --}}
                        @if (isset($tours) && count($tours) > 0)
                        <tbody class="fw-semibold text-gray-600">
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
                                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-Tour-filter="Tour_name"> {{ $tour->name }}</a>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->custname }}</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->email }}</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->phone }}</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->parson_no }}</span>
                                </td>
                                <td class="text-end pe-0">
                                    <span class="fw-bold">{{ $tour->message }}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @endif
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