<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //if (App::isLocal()) {
        factory(Client::class, 25)->create();
        //}
    }
}
