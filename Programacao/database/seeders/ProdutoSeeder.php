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
        DB::table('Produtos')->insert([
            'nome' => 'Celular', 
            'Valor' => 2500.00,
            'Marca' => 'Apple'
        ]);
    }
}
