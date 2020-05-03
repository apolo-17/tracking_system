<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $password = Hash::make('password');
        User::create(['name' => 'Apolinar Morales', 'email' => 'apolinar.morales.a@gmail.com', 'email_verified_at' => Carbon::now(), 'password' => $password,]);
        /* if (App::isLocal()) {
            factory(User::class, 50)->create();
            User::create(['name' => 'Apolinar Morales', 'email' => 'apolinar.morales.a@gmail.com', 'password' => '123123']);
        } */
    }
}
