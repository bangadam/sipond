@extends('layouts.app')

@section('content')
<!-- begin:: Content Head -->
<div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">Prestasis</h3>
        </div>
    </div>
</div>
<!-- end:: Content Head -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                Prestasis
                </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                @include('flash::message')

                <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                    <div class="kt-portlet__head kt-portlet__head--lg" style="">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Data Prestasis</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="{{ route('prestasis.create') }}" class="btn btn-brand kt-margin-r-10">
                                <i class="la la-plus"></i>
                                <span class="kt-hidden-mobile">Add New</span>
                            </a>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        @include('prestasis.table')
                    </div>
                </div>
                <div class="text-center">
                    
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
    <!-- end:: Content -->
</div>
@endsection

