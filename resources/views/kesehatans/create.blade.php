@extends('layouts.app')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                Create Kesehatan
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
                <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                    <div class="kt-portlet__head kt-portlet__head--lg" style="">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Create Kesehatan</h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        {!! Form::open(['route' => 'kesehatans.store']) !!}
                        <!-- No Induk Field -->
<div class="form-group col-sm-12">
    {!! Form::label('no_induk', 'Nama Siswa:') !!}
    <select name="no_induk" class="form-control select2">
        <option disabled selected>-Pilih Santri-</option>
        @foreach ($bio_siswa as $item)
    <option value="{{$item->no_induk}}">{{$item->nama_lengkap ." - ". $item->no_induk}}</option>
        @endforeach
    </select>
</div>

<!-- Tgl Mulai Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_mulai', 'Tgl Mulai:') !!}
    {!! Form::date('tgl_mulai', null, ['class' => 'form-control','id'=>'tgl_mulai']) !!}
</div>
<!-- Tgl Selesai Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tgl_selesai', 'Tgl Selesai:') !!}
    {!! Form::date('tgl_selesai', null, ['class' => 'form-control','id'=>'tgl_selesai']) !!}
</div>

@section('scripts')
    <script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select2.js')}}"
            type="text/javascript"></script>
    <script>
        $('.select2').select2();
    </script>
@endsection

<!-- Keluhan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keluhan', 'Keluhan:') !!}
    {!! Form::text('keluhan', null, ['class' => 'form-control']) !!}
</div>

<!-- Obat Field -->
<div class="form-group col-sm-12">
    {!! Form::label('obat', 'Obat:') !!}
    {!! Form::text('obat', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::textarea('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('kesehatans.index') }}" class="btn btn-default">Cancel</a>
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