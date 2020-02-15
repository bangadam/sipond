<?php

namespace App\DataTables;

use App\Models\PelanggaranDetail;
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
    public function query(PelanggaranDetail $model)
    {
        return $model->newQuery()->with(['bio_siswa', 'tindakan', 'pelanggaran']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('table_pelanggaran_detail')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'rowGroup'  => [
                    'dataSrc' => 'nama_lengkap',
                ],
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
            'nama_lengkap' => ['title' => 'Nama Santri', 'data' => 'bio_siswa.nama_lengkap'],
            'id_pelanggaran' => ['title' => 'Jenis Pelanggaran', 'data' => 'pelanggaran.keterangan'],
            'id_tindakan' => ['title' => 'Tindakan', 'data' => 'tindakan.nama_tindakan'],
            'catatan',
            'poin',
            'tgl_pelanggaran',
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
