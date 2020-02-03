<?php

namespace App\DataTables;

use App\Models\Pelanggaran;
use App\Models\PelanggaranDetail;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PelanggaranDetailDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'pelanggaran_details.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PelanggaranDetail $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pelanggaran $model)
    {
        return DB::table('pelanggaran')
            ->join('pelanggaran_detail', 'pelanggaran_detail.id_pelanggaran', '=', 'pelanggaran.id_pelanggaran')
            ->join('bio_siswa', 'pelanggaran_detail.no_induk', '=', 'bio_siswa.no_induk')
            ->get([
                'pelanggaran.keterangan AS keterangan',
                'pelanggaran.skor AS skor',
                'bio_siswa.nama_lengkap AS nama_lengkap',
            ]);
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
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'nama lengkap' => ['name' => 'nama_lengkap', 'data' => 'nama_lengkap'],
            'keterangan',
            'total score' => ['name' => 'skor', 'data' => 'skor'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pelanggaran_detailsdatatable_' . time();
    }
}
