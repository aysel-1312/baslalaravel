<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Aysel Altun',
            'email'=>'aysel.27altun@gmail.com',
            'password'=>bcrypt(1312),

        ]);
    }
}
