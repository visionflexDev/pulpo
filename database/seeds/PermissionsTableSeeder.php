<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
        		'name'=> 'Navegar Usuario',
        		'slug'=> 'users.index',
        		'description'=>'Lista y navega todos lo usuarios del sistema',
        	]);
        Permission::create([
        		'name'=> 'Ver detalle de Usuario',
        		'slug'=> 'users.show',
        		'description'=>'Ver en detlle cada usuarios del sistema',
        	]);
        Permission::create([
        		'name'=> 'Crear Usuario',
        		'slug'=> 'users.create',
        		'description'=>'Crear a cada usuarios del sistema',
        	]);
        Permission::create([
                'name'=> 'Editar Usuario',
                'slug'=> 'users.edit',
                'description'=>'Modifica cada usuarios del sistema',
            ]);
        Permission::create([
        		'name'=> 'Navegar Usuario',
        		'slug'=> 'users.Destroy',
        		'description'=>'Elimina cualquier usuarios del sistema',
        	]);

        //Roles
        Permission::create([
        		'name'=> 'Mostrar Roles',
        		'slug'=> 'roles.index',
        		'description'=>'Lista y navega todos lo Roles del sistema',
        	]);
         
        Permission::create([
        		'name'=> 'Ver detalle de Roles',
        		'slug'=> 'roles.show',
        		'description'=>'Ver en detlle cada Roles del sistema',
        	]);
        Permission::create([
        		'name'=> 'Crear Roles',
        		'slug'=> 'roles.create',
        		'description'=>'Lista y navega todos lo Roles del sistema',
        	]);
        Permission::create([
        		'name'=> 'Editar Roles',
        		'slug'=> 'roles.edit',
        		'description'=>'Modifica cada Roles del sistema',
        	]);
        Permission::create([
        		'name'=> 'Eliminar Roles',
        		'slug'=> 'roles.Destroy',
        		'description'=>'Elimina cualquier Roles del sistema',
        	]);

         //Opticas
        Permission::create([
        		'name'=> 'Mostrar Opticas',
        		'slug'=> 'opticas.index',
        		'description'=>'Lista y navega todas las optica del sistema',
        	]);
         
        Permission::create([
        		'name'=> 'Ver detalle de Opticas',
        		'slug'=> 'opticas.show',
        		'description'=>'Ver en detlle cada optica del sistema',
        	]);
        Permission::create([
        		'name'=> 'Crear Opticas',
        		'slug'=> 'opticas.create',
        		'description'=>'Lista y navega todos lo optica del sistema',
        	]);
        Permission::create([
        		'name'=> 'Editar Opticas',
        		'slug'=> 'opticas.edit',
        		'description'=>'Modifica cada optica del sistema',
        	]);
        Permission::create([
        		'name'=> 'Eliminar Opticas',
        		'slug'=> 'opticas.Destroy',
        		'description'=>'Elimina cualquier optica del sistema',
        	]);

        //Regente
        Permission::create([
                'name'=> 'Mostrar Regentes',
                'slug'=> 'regentes.index',
                'description'=>'Lista y navega todas las Regente del sistema',
            ]);
         
        Permission::create([
                'name'=> 'Ver detalle de Regentes',
                'slug'=> 'regentes.show',
                'description'=>'Ver en detlle cada Regente del sistema',
            ]);
        Permission::create([
                'name'=> 'Crear Regentes',
                'slug'=> 'regentes.create',
                'description'=>'Lista y navega todos lo Regente del sistema',
            ]);
        Permission::create([
                'name'=> 'Crear Solo Regentes',
                'slug'=> 'regentes.createSolo',
                'description'=>'Lista y navega todos lo Regente del sistema',
            ]);
        Permission::create([
                'name'=> 'Editar Regentes',
                'slug'=> 'regentes.edit',
                'description'=>'Modifica cada Regente del sistema',
            ]);
        Permission::create([
                'name'=> 'Eliminar Regentes',
                'slug'=> 'regentes.Destroy',
                'description'=>'Elimina cualquier Regente del sistema',
            ]);

        //Persona
        Permission::create([
                'name'=> 'Mostrar Persona',
                'slug'=> 'personas.index',
                'description'=>'Lista y navega todas las Regente del sistema',
            ]);
         
        Permission::create([
                'name'=> 'Ver detalle de Persona',
                'slug'=> 'personas.show',
                'description'=>'Ver en detlle cada Regente del sistema',
            ]);
        Permission::create([
                'name'=> 'Crear Persona',
                'slug'=> 'personas.create',
                'description'=>'Lista y navega todos lo Regente del sistema',
            ]);
        Permission::create([
                'name'=> 'Editar Persona',
                'slug'=> 'personas.edit',
                'description'=>'Modifica cada Regente del sistema',
            ]);
        Permission::create([
                'name'=> 'Eliminar Persona',
                'slug'=> 'personas.Destroy',
                'description'=>'Elimina cualquier Regente del sistema',
            ]);

         //Propietario
        Permission::create([
                'name'=> 'Mostrar propietario',
                'slug'=> 'propietarios.index',
                'description'=>'Lista y navega todas los Propietario del sistema',
            ]);
         
        Permission::create([
                'name'=> 'Ver detalle de propietario',
                'slug'=> 'propietarios.show',
                'description'=>'Ver en detlle cada Propietario del sistema',
            ]);
        Permission::create([
                'name'=> 'Crear propietario',
                'slug'=> 'propietarios.create',
                'description'=>'Lista y navega todos lo Propietario del sistema',
            ]);
        Permission::create([
                'name'=> 'Editar propietario',
                'slug'=> 'propietarios.edit',
                'description'=>'Modifica cada Propietario del sistema',
            ]);
        Permission::create([
                'name'=> 'Eliminar propietario',
                'slug'=> 'propietarios.Destroy',
                'description'=>'Elimina cualquier Propietario del sistema',
            ]);

        //Distribuidora
        Permission::create([
                'name'=> 'Mostrar distribuidora',
                'slug'=> 'distribuidoras.index',
                'description'=>'Lista y navega todas los Distribuidora del sistema',
            ]);
         
        Permission::create([
                'name'=> 'Ver detalle de distribuidora',
                'slug'=> 'distribuidoras.show',
                'description'=>'Ver en detlle cada Distribuidora del sistema',
            ]);
        Permission::create([
                'name'=> 'Crear distribuidora',
                'slug'=> 'distribuidoras.create',
                'description'=>'Lista y navega todos lo Distribuidora del sistema',
            ]);
        Permission::create([
                'name'=> 'Editar distribuidora',
                'slug'=> 'distribuidoras.edit',
                'description'=>'Modifica cada Distribuidora del sistema',
            ]);
        Permission::create([
                'name'=> 'Eliminar distribuidora',
                'slug'=> 'distribuidoras.Destroy',
                'description'=>'Elimina cualquier Distribuidora del sistema',
            ]);

        //Biselador
        Permission::create([
                'name'=> 'Mostrar biselador',
                'slug'=> 'biseladors.index',
                'description'=>'Lista y navega todas los Biseladores del sistema',
            ]);
         
        Permission::create([
                'name'=> 'Ver detalle de biselador',
                'slug'=> 'biseladors.show',
                'description'=>'Ver en detlle cada Biseladores del sistema',
            ]);
        Permission::create([
                'name'=> 'Crear biselador',
                'slug'=> 'biseladors.create',
                'description'=>'Lista y navega todos lo Biseladores del sistema',
            ]);
        Permission::create([
                'name'=> 'Editar biselador',
                'slug'=> 'biseladors.edit',
                'description'=>'Modifica cada Biseladores del sistema',
            ]);
        Permission::create([
                'name'=> 'Eliminar biselador',
                'slug'=> 'biseladors.Destroy',
                'description'=>'Elimina cualquier Biseladores del sistema',
            ]);


    }
}
