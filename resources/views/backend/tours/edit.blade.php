@extends('layouts.index')

@section('Heading')
Edit Tour
@endsection

@section('contents')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content px-0">
            <form action="{{ route('tours.update', $tour->id) }}" method="POST" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-250px mb-7 me-lg-10">

                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Tour Image</h2>
                            </div>
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <style>
                                .image-input-placeholder {
                                    background-image: url('svg/avatars/blank.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('svg/avatars/blank-dark.svg');
                                }
                            </style>

                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{ asset($tour->image) }}')"></div>

                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                       data-kt-image-input-action="change"
                                       data-bs-toggle="tooltip"
                                       data-bs-dismiss="click"
                                       title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-6"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>

                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                      data-kt-image-input-action="cancel"
                                      data-bs-toggle="tooltip"
                                      data-bs-dismiss="click"
                                      title="Cancel avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>

                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                      data-kt-image-input-action="remove"
                                      data-bs-toggle="tooltip"
                                      data-bs-dismiss="click"
                                      title="Remove avatar">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                            </div>
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
                                <div class="mb-5 fv-row">
                                    <label class="required form-label">Tour Name</label>
                                    <input type="text" name="tour_name" class="form-control mb-2" placeholder="Enter tour name" value="{{ old('tour_name', $tour->name) }}" />
                                </div>

                                <div class="mb-5 fv-row">
                                    <label for="tourDuration" class="required form-label">Duration</label>
                                    <input type="text" id="tourDuration" name="tour_duration" class="form-control mb-2" placeholder="Enter tour duration" value="{{ old('tour_duration', $tour->duration) }}" />
                                </div>

                                <div class="mb-5 fv-row">
                                    <label class="required form-label">Number of Persons</label>
                                    <input type="number" name="parson_no" class="form-control mb-2" placeholder="Enter number of persons" value="{{ old('parson_no', $tour->parson_no) }}" />
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::General options-->

                        <!--begin::Additional options-->
                        <div class="card card-flush py-4 mt-5">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Additional Tour Information</h2>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="mb-5 fv-row">
                                    <label class="required form-label">Category</label>
                                    <select id="tourCategory" class="form-select mb-2" data-control="select2" name="category" data-placeholder="Select a category" data-allow-clear="true">
                                        <option></option>
                                        <option value="international" {{ (old('category', $tour->category) == 'international') ? 'selected' : '' }}>International</option>
                                        <option value="domestic" {{ (old('category', $tour->category) == 'domestic') ? 'selected' : '' }}>Domestic</option>
                                    </select>
                                </div>

                                <div class="mb-5 fv-row">
                                    <label class="required form-label">Price</label>
                                    <input type="number" name="price" class="form-control mb-2" placeholder="Enter price" value="{{ old('price', $tour->price) }}" step="0.01" />
                                </div>

                                <div class="mb-5 fv-row">
                                    <label class="form-label">Special Notes or Description</label>
                                    <textarea id="tourDescription" name="description" class="form-control" placeholder="Write a description of the tour">{{ old('description', $tour->dec) }}</textarea>
                                </div>
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

                <div class="d-flex justify-content-end">
                    <a href="{{ route('tours.index') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
