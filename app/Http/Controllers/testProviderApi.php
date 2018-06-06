<?php

namespace App\Http\Controllers;
use App\ServiceApi\Contracts\ApiBlogContract;

use Illuminate\Http\Request;

class testProviderApi extends Controller
{
    private $instanciaApi;

    public function __construct(ApiBlogContract $ApiBlog){
        $this->instanciaApi = $ApiBlog;
    }

    public function index(){
       return $this->instanciaApi->all();
    }
}
