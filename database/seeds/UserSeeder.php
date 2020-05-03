<?php

use App\User;
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
        factory(User::class, 50)->create();
        User::create(['name' => 'Apolinar Morales', 'email' => 'apolinar.morales.a@gmail.com', 'password' => '123123']);
        /* if (App::isLocal()) {
            factory(User::class, 50)->create();
            User::create(['name' => 'Apolinar Morales', 'email' => 'apolinar.morales.a@gmail.com', 'password' => '123123']);
        } */
    }
}
