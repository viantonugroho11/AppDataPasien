<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\User;
class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'password' => bcrypt(12345678),
            'email' => 'admin@multi-auth.test'
        ]);
    }
}
