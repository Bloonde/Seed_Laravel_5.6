<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities\Services;

use Danvelcab\ProjectGenerator\AbstractClasses\AbstractService;
use EBarriosBloonde\CitiesStatesAndNationalities\Configurations\StateConfigurationImpl;
use EBarriosBloonde\CitiesStatesAndNationalities\Http\Resources\StateResource;
use EBarriosBloonde\CitiesStatesAndNationalities\Http\Resources\StateResourceCollection;
use EBarriosBloonde\CitiesStatesAndNationalities\Repositories\StateRepository;
use Illuminate\Support\Traits\Macroable;


class StateService extends AbstractService
{

    use Macroable;

    protected $repository;

    private static $__instance = null;

    public $configuration_impl;
    public $model;



    public function __construct()
    {
        
        $this->configuration_impl = new StateConfigurationImpl();
        $this->model = $this->configuration_impl->getModelName();
        $this->repository = StateRepository::getInstance(); //Remove  params if exist a specific repository for this resource
    }

    /** This function receive an id and return the venue with the id
     * @param $id
     * @return mixed
     */
    public function get($id, $resource = true){
        $model = $this->repository->get($id);
        if($resource) {
            return new StateResource($model, $this->configuration_impl);
        } else {
            return $model;
        }
    }

    /** This function receive an input array and return a venue array
     * @param $input - This parameter contains query params in order to filter and order the db query
     * @return mixed
     */
    public function list($input, $resource = true)
    {
        $paginate = isset($input['page']); //When the list is for a select, the params page isn't send
        $response = $this->repository->getList($input, $paginate);
        if($resource) {
            $response = new StateResourceCollection($response);
        }
        return $response;
    }

    public function getSelectorList($input){
        $response = $this->repository->getSelectorList($input);
        return $response;
    }
    public function getStatusSelectorList(){
        return config('status.state');
    }
    public function update($request, $id = null){
        $request->merge(['read' => 0]); // inicializamos a 0 el campo leido
        $model = $this->model::firstOrNew(['id' => $id]);
        $this->set($request, $model);
        return $this->get($model->id);
    }
    public function extraSet($request, $model, $extra, $prefix){
        return parent::extraSet($request, $model, $extra, $prefix);
    }
    public function delete($id){
        $this->repository->delete($id);
        return null;
    }

    public function getFields()
    {
        return $this->configuration_impl->getAutoSaveFields();
    }

    public static function getInstance(){
        if(self::$__instance === null){
            self::$__instance = new StateService();
        }
        return self::$__instance;
    }
    
}