<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrayItems = [
            'item1',
            'item2',
            'item3',
            'item4',
            'item5',
            'item6',
            'item7',
            'item8',
            'item9',
            'item10',
        ];

        for ($i = 0; $i < count($arrayItems) - 1; $i++ ) {
            DB::table('items')->insert([
                'item' => $arrayItems[$i],
                'quantity' => rand(1, 350),
                'price' => rand(1, 100000),
            ]);
        }

    }


}
