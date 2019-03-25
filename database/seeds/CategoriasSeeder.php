<?php

use Illuminate\Database\Seeder;
use App\Categorias;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = Categorias::insert([
            'nome' => 'Desenvolvimento',
        ]);
        $categoria = Categorias::insert([
            'nome' => 'Marketing',
        ]);
        $categoria = Categorias::insert([
            'nome' => 'Negócios',
        ]);
        $categoria = Categorias::insert([
            'nome' => 'TI e software',
        ]);
    }
}
