<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //criando user admin, mude o username/password em .env
        $data = [
            'name' => 'admin',
            'email' => env('ADMIN_LOGIN'),
            'password' => bcrypt(env('ADMIN_PASSWORD'))
        ];
        User::create($data);
    }
}
