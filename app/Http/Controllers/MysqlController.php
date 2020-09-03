<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Faker\Provider\ko_KR\Address;
use Faker\Provider\Person;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

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

    public function select(Factory $factory)
    {
        $faker = $factory::create('ko_KR'); // create a French faker
        $data = [
            'user_id' => $faker->word,
            'password' => $faker->password,
            'name' => $faker->name,
            'address' => $faker->address,
            'compony' => $faker->company,
            'email' => $faker->email,
            'birth_day' => $faker->date(),
            'phone_number' => $faker->phoneNumber,
            'home_number' => $faker->phoneNumber,
        ];
        $this->insert($data);
        return $data;
    }

    public function insert($data)
    {
        DB::table('users')->insert($data);
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
