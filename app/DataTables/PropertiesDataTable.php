<?php

namespace App\DataTables;

use Modules\Admin\Entities\Property;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PropertiesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('image', function($model){
                return '<img src="'.asset('properties/images/'.$model->listing_numeric_key.'/0-'.$model->listing_numeric_key.'.jpeg').'" width="100" />';
            })
            ->editColumn('list_price', function($model){
                return number_format($model->list_price);
            })
            ->editColumn('created_at', function($model){
                return $model->created_at->format('d-m-Y');
            })
            ->addColumn('action', function($model){
                return view('admin::properties._actions',compact('model'));
            })
            ->editColumn('featured', function($model){
                return view('admin::properties.fav-diamond',compact('model'));
            })
            ->rawColumns(['action','image'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Property $model): QueryBuilder
    {
        return $model->with(['assigned_property','featured','diamond'])->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('properties-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle();
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('image'),
            Column::make('listing_id'),
            Column::make('unparsed_address'),
            Column::make('list_price'),
            Column::make('mls_status'),
            Column::make('created_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::computed('featured')
                ->exportable(false)
                ->printable(false)
                ->width(250)
                ->addClass('text-center')->title('Features/Diamond'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Properties_' . date('YmdHis');
    }
}
