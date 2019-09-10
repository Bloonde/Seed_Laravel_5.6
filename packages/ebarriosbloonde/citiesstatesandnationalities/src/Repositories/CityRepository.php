<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities\Repositories;

use Danvelcab\ProjectGenerator\AbstractClasses\AbstractRepository;
use EBarriosBloonde\Chat\Configurations\ChatConfigurationImpl;
use EBarriosBloonde\CitiesStatesAndNationalities\Configurations\CityConfigurationImpl;
use Illuminate\Support\Traits\Macroable;

class CityRepository extends AbstractRepository
{

    use Macroable;

    public $configuration_impl;
    public $model;
    public $table_name;
    public $singular_table_name;

    function __construct()
    {
        $this->configuration_impl = new CityConfigurationImpl();
        $this->model = $this->configuration_impl->getModelName();
        $this->table_name = $this->configuration_impl->getTableName();
        $this->singular_table_name = $this->configuration_impl->getSingularTableName();
    }

    private static $__instance = null;

    public function extendedBasicQuery()
    {
        return $this->basicQuery();
    }

    public function basicQuery($input = null)
    {
        return parent::basicQuery($input)
            ->join('states', 'states.id', '=', $this->getTable() . '.state_id')
            ->join('countries', 'countries.id', '=', 'states.country_id');
    }

    public function get($id)
    {
        $query = $this->extendedBasicQuery()
            ->where($this->getTable() . '.id', '=', $id);
        $query = $this->detailsSelect($query);
        return $query->first(); // We use get because we expect severals result because the query has a join with 1 to n relationship
    }

    public function getList($input, $paginate = null)
    {
        $input = $this->transformInputFilters($input);
        $input = $this->transformInputOrders($input);
        $query = $this->basicQuery($input);
        $query = $this->filter($query, $input);
        $query = $this->order($query, $input);
//        $query = $this->listSelect($query);
        if ($paginate != null && $paginate) {
            $query = $this->pagination($query, $input);
            return $query; // return an array with 2 elements. The first the result of the query, the seconds the totals elements
        } else {
            $query = $query->get();
            return ['elements' => $query, 'total' => count($query)];
        }
    }

    public function getSelectorList($input)
    {
        $input = $this->transformInputFilters($input);
        $input = $this->transformInputOrders($input);
        $query = $this->basicQuery($input);
        $query = $this->filter($query, $input);
        $query = $this->order($query, $input);
        $query = $this->selectorSelect($query);
        $query = $query->get();
        return $query;

    }

    public function delete($id)
    {
        $this->model::where('id', '=', $id)->update(['open' => 0]);
    }

    protected function getFilters()
    {
        return $this->configuration_impl->getFilters();
    }

    protected function getSearchFilters()
    {
        return $this->configuration_impl->getSearchFilters();
    }

    protected function getOrders()
    {
        return $this->configuration_impl->getOrders();
    }

    protected function getTable()
    {
        return $this->configuration_impl->getTableName();
    }

    protected function getListSelect()
    {
        return $this->configuration_impl->getListSelect();
    }

    protected function getDetailsSelect()
    {
        return $this->configuration_impl->getDetailsSelect();
    }

    protected function getSelectorSelect()
    {
        return $this->configuration_impl->getSelectorSelect();
    }

    protected function getTransformSearchFilters()
    {
        return $this->configuration_impl->getTransformSearchFilters();
    }

    protected function getTransformSearchOrders()
    {
        return $this->configuration_impl->getTransformOrders();
    }

    public static function getInstance()
    {
        if (self::$__instance === null) {
            self::$__instance = new CityRepository();
        }
        return self::$__instance;
    }
}
