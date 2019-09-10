<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities\Http\Controllers;

use Danvelcab\ProjectGenerator\AbstractClasses\AbstractController;
use Danvelcab\ProjectGenerator\Helpers\CodesHelper;
use EBarriosBloonde\CitiesStatesAndNationalities\Http\Requests\City\CityStoreFormRequest;
use EBarriosBloonde\CitiesStatesAndNationalities\Services\CityService;
use Illuminate\Support\Facades\DB;

class CityController extends AbstractController
{
    protected $service;
    protected $configuration;

    public function __construct()
    {
        $this->service = CityService::getInstance();
    }

    public function store(CityStoreFormRequest $formRequest){
        DB::beginTransaction();
        $response = $this->getModelService()->update($formRequest);
        DB::commit();
        return response(json_encode($response), CodesHelper::OK_CREATION_CODE);
    }

    public function update(CityStoreFormRequest $formRequest, $id){
        DB::beginTransaction();
        $response = $this->getModelService()->update($formRequest, $id);
        DB::commit();
        return response(json_encode($response), CodesHelper::OK_CODE);
    }

    protected function getModelService(){
        return $this->service;
    }
}
