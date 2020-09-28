<?php

use Illuminate\Database\Seeder;

class ItemTablrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
         ['name' => 'コカコーラ', 'price' => 110, 'url' => ''],
         ['name' => 'ポテトチップス', 'price' => 135, 'url' => ''],
         ['name' => 'チョコレート', 'price' => 120, 'url' => ''],
        ];
        DB::table('items')->insert($datas);
    }
}
