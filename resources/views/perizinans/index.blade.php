@extends('layouts.app')

@section('content')
<!-- begin:: Content Head -->
<div class="kt-subheader  kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">Perizinans</h3>
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
                    Perizinans
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
                            <h3 class="kt-portlet__head-title">Data Perizinans</h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="{{ route('perizinans.create') }}" class="btn btn-brand kt-margin-r-10">
                                <i class="la la-plus"></i>
                                <span class="kt-hidden-mobile">Add New</span>
                            </a>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        @include('perizinans.table')
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


<!-- Modal Konfirmasi -->
<div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi perizinan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('perizinans.konfirmasi') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_izin">
                    <div class="form-group">
                        <label for="">Pilih Tanggal kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control" value="{{ date('Y-m-d') }}">
                    </div>
                    <!-- <div class="form-group">
                        <label for="">Status Kembali</label>
                        <input type="text hidden" name="status_kembali" class="form-control" value=" 
                         @if ($dateTimestampA <= $dateTimestampB)
                         {{Kembali}}
                         @else
                         {{Kembali dan Terlambat}}
                         @endif">
                    </div> -->
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