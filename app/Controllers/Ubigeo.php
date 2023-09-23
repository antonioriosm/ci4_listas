<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Departamento;
use App\Models\Provincia;
use App\Models\Distrito;

class Ubigeo extends BaseController
{
    private $dpto, $prov, $dist;
    public function index()
    {
        $this->dpto = new Departamento();

        $data['titulo'] = "Listas desplegables con CodeIgniter 4";
        $data['dptos'] =  $this->dpto->dd_departamentos();

        return view('ubigeo_v', $data);
    }

    function jsonProvincias($coddep) {
        $this->prov = new Provincia();

        $this->prov->jsonProvincias($coddep);
    }

    function jsonDistritos($codpro)
    {
        $this->dist = new Distrito();

        $this->dist->jsonDistritos($codpro);
    }
}
