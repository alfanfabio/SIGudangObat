<?php

namespace App\Controllers;

use App\Models\modelExpire;

class ObatExpire extends BaseController
{
    public function __construct()
    {
        $this->modelObatExpire = new modelExpire();
    }
    public function index()
    {
        $expire = $this->modelObatExpire->findAll();

        $data = [
            'title' => 'Daftar Obat',
            'expire' => $expire
        ];

        return view('layout/obatExpire', $data);
    }
}
