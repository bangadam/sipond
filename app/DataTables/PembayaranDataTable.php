<?php

namespace App\DataTables;

use App\Models\Pembayaran;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PembayaranDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'pembayarans.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Pembayaran $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pembayaran $model)
    {
        return $model->newQuery()->with(['bio_siswa', 'jenis_bayar', 'jenis_produk_bayar']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'nama_lengkap' => ['title' => 'Nama siswa', 'data' => 'bio_siswa.nama_lengkap', 'name' => 'bio_siswa.nama_lengkap'],
            'id_jenis_bayar' => ['title' => 'Jenis bayar', 'data' => 'jenis_bayar.jenis_bayar', 'name' => 'jenis_bayar.jenis_bayar'],
            'id_produk_bayar' => ['title' => 'Jenis produk', 'data' => 'jenis_produk_bayar.jenis_produk', 'name' => 'jenis_produk_bayar.jenis_produk'],
            'jumlah',
            'catatan',
            'tgl_pembayaran' => ['title' => 'Tanggal pembayaran']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pembayaransdatatable_' . time();
    }
}
