<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities\Http\Controllers;

use Danvelcab\ProjectGenerator\AbstractClasses\AbstractController;
use Danvelcab\ProjectGenerator\Helpers\CodesHelper;
use EBarriosBloonde\CitiesStatesAndNationalities\Http\Requests\City\CityStoreFormRequest;
use EBarriosBloonde\CitiesStatesAndNationalities\Http\Requests\Country\CountryStoreFormRequest;
use EBarriosBloonde\CitiesStatesAndNationalities\Services\CityService;
use EBarriosBloonde\CitiesStatesAndNationalities\Services\CountryService;
use Illuminate\Support\Facades\DB;

class CountryController extends AbstractController
{
    protected $service;
    protected $configuration;

    public function __construct()
    {
        $this->service = CountryService::getInstance();
    }

    public function store(CountryStoreFormRequest $formRequest){
        DB::beginTransaction();
        $response = $this->getModelService()->update($formRequest);
        DB::commit();
        return response(json_encode($response), CodesHelper::OK_CREATION_CODE);
    }

    public function update(CountryStoreFormRequest $formRequest, $id){
        DB::beginTransaction();
        $response = $this->getModelService()->update($formRequest, $id);
        DB::commit();
        return response(json_encode($response), CodesHelper::OK_CODE);
    }

    protected function getModelService(){
        return $this->service;
    }
}
