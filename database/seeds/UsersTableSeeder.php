<?php

use Illuminate\Database\Seeder;
Use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class,5)->create();

        Role::create([
        		'name'=>'Admin',
        		'slug'=>'admin',
        		'special'=>'all-access'
        	]);
    }
}
