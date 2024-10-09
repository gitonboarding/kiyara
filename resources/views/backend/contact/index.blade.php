@extends('layouts.index')
@section('Heading')
Contact Us
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
                                <th class="min-w-100px">Name</th>
                                <th class="min-w-100px">Email</th>
                                <th class="min-w-100px">Phone</th>
                                <th style="width: 300px;">Subject</th>
                                <th style="width: 300px;">Message</th>
                            </tr>
                        </thead>
                        @if (isset($data) && count($data) > 0)
                        <tbody class="fw-semibold text-gray-600">
                            <?php
                            $count=0;
                            ?>
                            @foreach($data as $tour)
                            @php
                            $info = json_decode($tour->info, true); // Decode the JSON string to an array
                            @endphp
                            <tr>
                                <td>
                                    {{++$count}}
                                </td>
                                <td class=" pe-0">
                                    <span class="fw-bold">{{ ucwords($info['fname'] ?? 'N/A') }}</span> <!-- Capitalize 'fname' -->
                                </td>
                                <td class=" pe-0">
                                    <span class="fw-bold">{{ $info['email'] ?? 'N/A' }}</span> <!-- Accessing 'email' -->
                                </td>
                                <td class=" pe-0">
                                    <span class="fw-bold">{{ $info['phone'] ?? 'N/A' }}</span> <!-- Accessing 'phone' -->
                                </td>
                                <td class=" pe-0">
                                    <span class="fw-bold">{{ $info['subject'] ?? 'N/A' }}</span> <!-- Limit 'subject' to 30 characters -->
                                </td>
                                <td class=" pe-0">
                                    <span class="fw-bold">{{ $info['msg'] ?? 'N/A' }}</span> <!-- Accessing 'msg' -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center">No tours available.</td>
                            </tr>
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