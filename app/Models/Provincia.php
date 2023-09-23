<?php

namespace App\Models;

use CodeIgniter\Model;

class Provincia extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'provincias';
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

    function obtenerProvincias($coddep) {
        return $this->where('departamento_id', $coddep)
                ->get()
                ->getResult();
    }

    function jsonProvincias($coddep) {
        $provs = $this->obtenerProvincias($coddep);

        echo json_encode($provs);
    }
}
