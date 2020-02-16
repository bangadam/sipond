@extends('layouts.app')

@section('content')
<!-- begin:: Content Head -->
<div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">Pelanggaran Siswa</h3>
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
                Pelanggaran Siswa
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
                            <h3 class="kt-portlet__head-title">Data Pelanggaran Siswa</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="{{ route('pelanggaranDetails.create') }}" class="btn btn-brand kt-margin-r-10">
                                <i class="la la-plus"></i>
                                <span class="kt-hidden-mobile">Add New</span>
                            </a>
                            <a href="#!" class="btn btn-warning kt-margin-r-10" data-toggle="modal" data-target="#modalLaporanPelanggaran">
                                <i class="la la-file"></i>
                                <span class="kt-hidden-mobile">Laporan Pelanggaran</span>
                            </a>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        @include('pelanggaran_details.table')
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

<!-- Modal -->
<div class="modal fade" id="modalLaporanPelanggaran" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laporan Pelanggaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pelanggaranDetails.laporan')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Santri</label>
                        {!! Form::select('no_induk', $santri, null,['class' => 'form-control select2', 'style' => 'width:100% !important']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
