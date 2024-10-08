@extends('layouts.index')
@section('Heading')
Create a new tours
@endsection
@section('contents')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content px-0">
            <form action="{{ route('tours.store') }}" method="POST" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                @csrf


                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-250px mb-7 me-lg-10">

                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2> Tours image</h2>
                            </div>

                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Image input placeholder-->
                            <style>
                                .image-input-placeholder {
                                    background-image: url('svg/avatars/blank.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('svg/avatars/blank-dark.svg');
                                }
                            </style>
                            <!--end::Image input placeholder-->

                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/assets/media/avatars/300-1.jpg)"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Cancel avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>
                            <!--end::Image input-->

                        </div>
                        <!--end::Card body-->
                    </div>
                </div>



                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

                    <div class="d-flex flex-column gap-7 gap-lg-10">

                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General Tour Information</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Tour Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="tour_name" class="form-control mb-2" placeholder="Enter tour name" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <label for="tourDuration" class="required form-label">Duration</label>
                                    <!--begin::Input-->
                                    <input type="text" id="tourDuration" name="tour_duration" class="form-control mb-2" placeholder="Enter tour duration" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <label class="required form-label">Number of Persons</label>
                                    <!--begin::Input-->
                                    <input type="number" name="parson_no" class="form-control mb-2" placeholder="Enter number of persons" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::General options-->

                        <!--begin::Additional options-->
                        <div class="card card-flush py-4 mt-5">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Additional Tour Information</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <label class="required form-label">Category</label>
                                    <!--begin::Select2-->
                                    <select id="tourCategory" class="form-select mb-2" data-control="select2" name="category" data-placeholder="Select a category" data-allow-clear="true">
                                        <option></option>
                                        <option value="international">International</option>
                                        <option value="domestic">Domestic</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <label class="required form-label">Price</label>
                                    <!--begin::Input-->
                                    <input type="number" name="price" class="form-control mb-2" placeholder="Enter price" value="" step="0.01" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-5 fv-row">
                                    <label class="form-label">Special Notes or Description</label>
                                    <textarea id="tourDescription" name="description" class="form-control" placeholder="Write a description of the tour"></textarea>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Additional options-->

                        <!-- CKEditor Script -->
                        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

                        <script>
                            ClassicEditor
                                .create(document.querySelector('#tourDescription'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>
                    </div>
                </div>
        </div>


        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a
                href="apps/ecommerce/catalog/products.html"
                id="kt_ecommerce_add_product_cancel"
                class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button
                type="submit"
                id="kt_ecommerce_add_product_submit"
                class="btn btn-primary">
                <span class="indicator-label">Save Changes</span>
                <span class="indicator-progress">Please wait...
                    <span
                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
    </div>

    </form>
</div>
@endsection