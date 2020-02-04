@extends('layouts.app')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Subheader -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        Create Pelanggaran Detail
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
                    @include('adminlte-templates::common.errors')
                    <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile"
                         id="kt_page_portlet">
                        <div class="kt-portlet__head kt-portlet__head--lg" style="">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Create Pelanggaran Detail</h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                        {!! Form::open(['route' => 'pelanggaran.store']) !!}
                        <!-- No Induk Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::label('no_induk', 'Nama Siswa:') !!}
                                {!! Form::select('no_induk', $bio_siswa, null, ['class' => 'form-control select2']) !!}
                            </div>

                            <!-- Tindakan Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::label('tindakan', 'Tindakan:') !!}
                                {!! Form::text('tindakan', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Catatan Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::label('catatan', 'Catatan:') !!}
                                {!! Form::text('catatan', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Poin Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::label('poin', 'Poin:') !!}
                                {!! Form::number('poin', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Tgl Pelanggaran Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::label('tgl_pelanggaran', 'Tanggal Pelanggaran:') !!}
                                {!! Form::date('tgl_pelanggaran', null, ['class' => 'form-control','id'=>'tgl_pelanggaran']) !!}
                            </div>

                            @section('scripts')
                                <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}"
                                        type="text/javascript"></script>
                                <script>
                                    $('.select2').select2();
                                </script>
                            @endsection

                            @section('scripts')
                                <script type="text/javascript">
                                    $('#tgl_pelanggaran').datetimepicker({
                                        format: 'YYYY-MM-DD',
                                        useCurrent: false
                                    })
                                </script>
                            @endsection


                        <!-- Submit Field -->
                            <div class="form-group">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('pelanggaran.index') }}" class="btn btn-default">Cancel</a>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content -->
    </div>
@endsection
