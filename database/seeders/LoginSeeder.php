<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        user::create([
            'name'=>'admin',
            "email"=>'ana@gmail.com',
            'password'=> bcrypt('12345'),
        ]);
    

    }
    }

