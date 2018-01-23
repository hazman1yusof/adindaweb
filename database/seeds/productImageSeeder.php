<?php

use Illuminate\Database\Seeder;

class productImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\productImage::class, 50)->create();
    }
}
