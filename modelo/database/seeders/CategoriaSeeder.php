<?php

namespace Database\Seeders;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert(['nome' => 'bebidas',
        'descricao' => 'refri, agua']);

        Categoria::insert(['nome' => 'padaria',
        'descricao' => 'pão, salgados']);

        Categoria::insert(['nome' => 'açougue',
        'descricao' => 'carnes']);
    }
}
