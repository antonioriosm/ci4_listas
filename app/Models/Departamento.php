<?php

namespace App\Models;

use CodeIgniter\Model;

class Departamento extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'departamentos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function obtenerDepartamentos() {
        return $this->orderBy('desdep')
            ->get()
            ->getResult();
    }

    function dd_departamentos() {
        $dptos = $this->obtenerDepartamentos();

        // $data = [['01' => ''],['02' => '']];
        // $data = ['01' => '','02' => ''];
        $data = [];

        foreach ($dptos as $dpto) {
            $data[$dpto->id] = $dpto->desdep;
        }

        return $data;
    }
}
