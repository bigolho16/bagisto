<?php
namespace ACME\HelloWorld\DataGrid;

use Webkul\Ui\DataGrid\DataGrid; // Funcionalidade do Bagisto
use DB;

use ACME\HelloWorld\Models\SupExp;

class MeusEstabelecimentosDataGrid extends DataGrid
{
    protected $index = 'id'; // propriedade // índice da tabela

    protected $sortOrder = 'desc'; // ordenar em ascendente e descendente

    public function prepareQueryBuilder()
    { // método // vai montar a query p/ pegar os dados da tabela
        $queryBuilder = DB::table('sup_exps')
            ->select('id','nome', 'endereco');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'id',
            'label' => 'ID',
            'type' => 'number',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'nome',
            'label' => 'Nome da Loja',
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'endereco',
            'label' => 'Endereço da Loja',
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);
    }

    public function prepareActions()
    { // suponho que seja os elementos visuais
        $this->addAction([
            'type' => 'Edit',
            'method' => 'GET',
            'route' => 'meusupexp.admin.edit',
            'icon' => 'icon pencil-lg-icon'
        ]);

        $this->addAction([
            'type' => 'Delete',
            'method' => 'GET',
            'route' => 'meusupexp.admin.destroy',
            'icon' => 'icon trash-icon'
        ]);
    }


}