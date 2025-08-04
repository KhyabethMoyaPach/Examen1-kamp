<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('productos')->insert([
            'nombre' => 'Nike Air Jordan 5 Retro',
            'precio' => 216.00,
            'id_marca' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Supreme Hand Tied Beanie',
            'precio' => 49.99,
            'id_marca' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pantalones de lino de talle alto',
            'precio' => 111.00,
            'id_marca' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
