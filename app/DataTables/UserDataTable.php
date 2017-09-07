<?php

namespace App\DataTables;

use App\User;
use Yajra\Datatables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('updated_at',  function ($user) {
                return $user-> created_at-> diffForHumans();
            })
            ->editColumn('created_at',  function ($user) {
                return $user-> created_at-> diffForHumans();
            })
            ->addColumn('action', function ($user) {
              return view('backend.common.buttons' ,compact('user'));
            } )
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = User::query();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->ajax('')
                    ->addAction(['width' => '160px', 'title' => 'Action'])
                    ->parameters($this->getBuilderParameters());
    }

    /**
     * @return Datatables
     */
    public function getBuilderParameters()
    {
          return [
          'dom' => 'Bfrtip',
          'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
                  ];
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['title' => 'Name', 'data' => 'name'],
            ['title' => 'E-Mail', 'data' => 'email'],
            ['title' => 'Created At', 'data' => 'created_at'],
            ['title' => 'Updated At', 'data' => 'updated_at'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'userdatatables_' . time();
    }
}
