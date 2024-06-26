<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome' => 'Bolacha',
            'quantidade' => 2,
            'preco' => 5.00
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Salgadinho',
            'quantidade' => 3,
            'preco' => 12.00
        ]);

        DB::table('produtos')->insert([
            'nome' => 'Sorvete',
            'quantidade' => 2,
            'preco' => 8.00
        ]);
    }
}
