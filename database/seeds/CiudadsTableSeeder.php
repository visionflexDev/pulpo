<?php

use Illuminate\Database\Seeder;
use App\Ciudad;

class CiudadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        Ciudad::create([
        		'name'=>'Cochabamba',
        		'description'=>'Provincias',
        		
        	]);

        Ciudad::create([
                'name'=>'Potosi',
                'description'=>'Provincias',
                
            ]);

        Ciudad::create([
                'name'=>'Santa Cruz',
                'description'=>'Provincias',
                
            ]);

        Ciudad::create([
                'name'=>'Chuquisaca',
                'description'=>'Provincias',
                
            ]);

        Ciudad::create([
                'name'=>'La Paz',
                'description'=>'Provincias',
                
            ]);

        Ciudad::create([
                'name'=>'Oruro',
                'description'=>'Provincias',
                
            ]);

        Ciudad::create([
                'name'=>'Beni',
                'description'=>'Provincias',
                
            ]);

        Ciudad::create([
                'name'=>'Pando',
                'description'=>'Provincias',
                
            ]);

        Ciudad::create([
                'name'=>'Tarija',
                'description'=>'Provincias',
                
            ]);
    }
}
