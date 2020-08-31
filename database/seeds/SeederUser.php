<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class SeederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stores = [
            ['name'=>'Adam Surya','email'=>'fourline66@gmail.com','password'=>'asdasd'],
            ['name'=>'Faiz','email'=>'faizalvian97@gmail.com','password'=>'asdasd'],
            ['name'=>'Karyna Kirana','email'=>'karynakirana@gmail.com','password'=>'asdasd']
        ];

        foreach ($stores as $key => $store) {
            User::create($store);
        }
    }
}
