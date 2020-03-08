<?php

namespace App\DataTables;

use App\Models\Perizinan;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PerizinanDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'perizinans.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Perizinan $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Perizinan $model)
    {
        return $model->newQuery()->with(['bio_siswa', 'perizinanKembali']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('table-perizinan')
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
            'tgl_izin',
            'tgl_kembali',
            'tgl_konfirmasi' => ['data' => 'perizinanKembali.updated_at', 'name' => 'perizinanKembali.updated_at', 'title' => 'Tanggal Konfirmasi'],
            'penjemput',
            'catatan',
            'status_izin'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'perizinansdatatable_' . time();
    }
}
