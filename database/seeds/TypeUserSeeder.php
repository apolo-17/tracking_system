<?php

use App\TypeUser;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::isLocal()) {
            TypeUser::create(['name' => 'Cliente', 'slug' => 'client', 'description' => 'Este usuario podra acceder a la plataforma para ver las unidades asignadas por la linea de transporte contratada']);
            TypeUser::create(['name' => 'Operador', 'slug' => 'operator', 'description' => 'Este usuario solo podra ser entrar a la plataforma movil']);
        }
    }
}
