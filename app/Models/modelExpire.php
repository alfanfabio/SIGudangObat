<?php

namespace App\Models;

use CodeIgniter\Model;

class modelExpire extends Model
{
    protected $table = 'expire';
    protected $primarykey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
        'nama', 'tanggal_masuk', 'tanggal_expire'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    // protected $returnType = 'App\Entities\DataObat';
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}
