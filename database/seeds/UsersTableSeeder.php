<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //App\User::truncate();
        factory(App\User::class, 50)->create()->each(function ($users) {
            $users->favourites()->saveMany(factory(App\Favourite::class,4)->make());
        });

        //App\Admin::truncate();
        factory(App\Admin::class, 5)->create();
    }
}
