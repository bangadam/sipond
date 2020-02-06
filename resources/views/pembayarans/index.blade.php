@extends('layouts.app')

@section('content')
    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">Pembayaran</h3>
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
                        Pembayaran
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

                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile"
                         id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg" style="">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Data Pembayaran</h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <div class="kt-portlet__head-toolbar">
                                    <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab1_content"
                                               role="tab" aria-selected="false">
                                                Pengisian data
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content"
                                               role="tab" aria-selected="true">
                                                Laporan pembayaran
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                                    <div class="col-md-12">
                                        <a href="{{ route('pembayarans.create') }}" class="btn btn-brand float-right">
                                            <i class="la la-plus"></i>
                                            <span class="kt-hidden-mobile">Add New</span>
                                        </a>
                                    </div>
                                    <br>
                                    @include('pembayarans.table')
                                </div>
                                <div class="tab-pane" id="kt_widget5_tab2_content" aria-expanded="true">
                                    <div class="kt-widget4__item d-flex justify-content-center">
                                        <form action="{{route('pembayarans.report')}}" method="POST" class="form-inline d-flex justify-content-center">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group mx-6">
                                                    <label class="mx-2 font-weight-bold">Filter</label>
                                                    <select class="form-control" name="filter_pilihan" id="filter_pilihan">
                                                        <option selected disabled>-Pilih Filter-</option>
                                                        <option value="jenis_bayar">Jenis bayar</option>
                                                        <option value="jenis_produk">Jenis Produk</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mx-6">
                                                    <label class="mx-2 font-weight-bold">Pilihan</label>
                                                    <select class="form-control" name="filter_jenis" disabled>
                                                        <option selected disabled>-Pilih Filter-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group mx-6">
                                                    <label for="Kelas" class="mx-4 font-weight-bold">Tanggal
                                                        awal</label>
                                                    <input type="date" name="tgl_mulai" class="form-control"
                                                           placeholder="Tanggal awal">
                                                </div>
                                                <div class="form-group mx-6">
                                                    <label for="Kelas" class="mx-4 font-weight-bold">Tanggal
                                                        akhir</label>
                                                    <input type="date" name="tgl_akhir" class="form-control"
                                                           placeholder="Tanggal akhir">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12" style="margin-top: 10px;">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Cetak laporan
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end ::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>

@endsection
