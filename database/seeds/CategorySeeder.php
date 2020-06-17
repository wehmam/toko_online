<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'nama' => 'Baju'
        ]);

        DB::table('categories')->insert([
            'nama' => 'Celana'
        ]);

        DB::table('categories')->insert([
            'nama' => 'Jaket'
        ]);

        DB::table('categories')->insert([
            'nama' => 'Topi'
        ]);

        DB::table('categories')->insert([
            'nama' => 'Sepatu'
        ]);
    }
}
