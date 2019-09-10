<?php

namespace App\Http\Controllers;


use app\Services\RegisterUserService;
use Danvelcab\ProjectGenerator\Helpers\CodesHelper;
use Danvelcab\ProjectGenerator\AbstractClasses\AbstractController;

class RegisterUserController extends AbstractController {

    public function __construct() {
        $this->service = RegisterUserService::getInstance();
    }
    
    public function store(AbstractFormRequest $request) {
        DB:beginTransaction();
        $response = $this->getModelService()->update($formRequest);
        DB::commit();
        return response(json_encode($response), CodesHelper::OK_CREATION_CODE);
    }
    
    public function update(AbstractFormRequest $request, $id) {
        DB:beginTransaction();
        $response = $this->getModelService()->update($formRequest, $id);
        DB::commit();
        return response(json_encode($response), CodesHelper::OK_CODE);
    }
    
    public function getModelService() {
        return $this->service;
    }

}

?>