<?php

namespace App\DataTables;

use App\Models\prestasi;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class prestasiDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'prestasis.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\prestasi $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(prestasi $model)
    {
        return $model->newQuery()->with(['bio_siswa', 'jenis_prestasi']);
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
                'rowGroup'  => [
                    'dataSrc' => 'nama_lengkap',
                ],
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
            'nama_lengkap' => ['data' => 'bio_siswa.nama_lengkap', 'name' => 'bio_siswa.nama_lengkap'],
            'tgl_prestasi',
            'jenis_prestasi_id' => ['data' => 'jenis_prestasi.nama', 'name' => 'jenis_prestasi.nama'],
            'catatan'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'prestasisdatatable_' . time();
    }
}
