<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('users')->insert([
    //     	'name' => 'Administrator',
    //     	'email' => 'admin@admin.com',
    //     	'password' => bcrypt('admin')
    // 	]);
    // }

    public function run()
    {
        factory(App\User::class, 10)->create();

        DB::table('users')->insert([
         'name' => 'Administrator',
         'email' => 'admin@admin.com',
         'password' => bcrypt('admin')
     ]);
        
    }

}
