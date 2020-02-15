<?php

namespace App\Providers;
use App\Models\Tindakan;
use App\Models\BioSiswa;
use App\Models\Pelanggaran;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::composer(['pelanggaran_details.fields'], function ($view) {
            $tindakanItems = Tindakan::pluck('nama_tindakan','id')->toArray();
            $view->with('tindakanItems', $tindakanItems);
        });
        View::composer(['pelanggaran_details.fields'], function ($view) {
            $bio_siswaItems = BioSiswa::pluck('nama_lengkap','no_induk')->toArray();
            $view->with('bio_siswaItems', $bio_siswaItems);
        });
        View::composer(['pelanggaran_details.fields'], function ($view) {
            $pelanggaranItems = Pelanggaran::pluck('keterangan','id_pelanggaran')->toArray();
            $view->with('pelanggaranItems', $pelanggaranItems);
        });
        //
    }
}