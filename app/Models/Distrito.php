<?php

namespace App\Models;

use CodeIgniter\Model;

class Distrito extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'distritos';
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

    function obtenerDistritos($codpro) {
        return $this->where('provincia_id', $codpro)
                ->get()
                ->getResult();
    }

    function jsonDistritos($codpro) {
        $dists = $this->obtenerDistritos($codpro);

        echo json_encode($dists);
    }
}
