<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class MysqlController extends BaseController
{

    protected $data;

    public function __construct()
    {
        $this->data = [
            "Hello World!!",
            "Hello World!!",
            "Hello World!!",
            "Hello World!!",
            "Hello World!!",
        ];
    }

    public function index()
    {
        return view('mysql', [
            'data' => $this->data
        ]);
    }

    public function select()
    {
        return $this->data;
    }

    public function insert()
    {
        array_push($this->data, "Hello World!!");
        return $this->data;
    }

    public function update()
    {
        $this->data = "Hello World!!";
        return $this->data;
    }

    public function delete()
    {
        array_pop($this->data);
        return $this->data;
    }

    public function migration()
    {
        $this->data = 1234567890;
        return $this->data;
    }

    public function truncate()
    {
        $this->data = "";
        return $this->data;
    }
}
