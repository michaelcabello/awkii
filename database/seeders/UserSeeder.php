<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Support\Str;

//importamos para asignar roles y permisos
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    public function run()
    {

        $adminRole = Role::create(['name'=>'Admin','display_name'=>'Administrador']);
        $sellerRole = Role::create(['name'=>'Seller','display_name'=>'Vendedor']);
        $grocerRole = Role::create(['name'=>'Grocer','display_name'=>'Alamacenero']);

        Permission::create(['name'=>'User View','display_name'=>'Ver Usuario'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'User Create','display_name'=>'Crear Usuario'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'User Update','display_name'=>'Actualizar Usuario'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'User Delete','display_name'=>'Eliminar Usuario'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Role View','display_name'=>'Ver Roles'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Role Create','display_name'=>'Crear Roles'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Role Update','display_name'=>'Actualizar Roles'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Role Delete','display_name'=>'Eliminar Roles'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Tienda View','display_name'=>'Ver Tiendas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tienda Create','display_name'=>'Crear Tiendas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tienda Update','display_name'=>'Actualizar Tiendas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tienda Delete','display_name'=>'Eliminar Tiendas'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Cliente View','display_name'=>'Ver Clientes'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Cliente Viewd','display_name'=>'Ver Clientesd'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Cliente Create','display_name'=>'Crear Clientes'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Cliente Update','display_name'=>'Actualizar Clientes'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Cliente Delete','display_name'=>'Eliminar Clientes'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Anio View','display_name'=>'Ver Año'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Anio Create','display_name'=>'Crear Año'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Anio Update','display_name'=>'Actualizar Año'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Anio Delete','display_name'=>'Eliminar Año'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Categoria View','display_name'=>'Ver Categoria'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Categoria Create','display_name'=>'Crear Categoria'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Categoria Update','display_name'=>'Actualizar Categoria'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Categoria Delete','display_name'=>'Eliminar Categoria'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Color View','display_name'=>'Ver Color'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Color Create','display_name'=>'Crear Color'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Color Update','display_name'=>'Actualizar Color'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Color Delete','display_name'=>'Eliminar Color'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Expediente View','display_name'=>'Ver Expedientes'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Expediente Create','display_name'=>'Crear Expedientes'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Expediente Update','display_name'=>'Actualizar Expedientes'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Expediente Delete','display_name'=>'Eliminar Expedientes'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Legalizacion View','display_name'=>'Ver Legalizacions'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Legalizacion Create','display_name'=>'Crear Legalizacions'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Legalizacion Update','display_name'=>'Actualizar Legalizacions'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Legalizacion Delete','display_name'=>'Eliminar Legalizacions'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Marca View','display_name'=>'Ver Marcas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Marca Create','display_name'=>'Crear Marcas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Marca Update','display_name'=>'Actualizar Marcas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Marca Delete','display_name'=>'Eliminar Marcas'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Modello View','display_name'=>'Ver Modelos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Modello Create','display_name'=>'Crear Modelos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Modello Update','display_name'=>'Actualizar Modelos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Modello Delete','display_name'=>'Eliminar Modelos'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Observacion View','display_name'=>'Ver Observación'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Observacion Create','display_name'=>'Crear Observación'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Observacion Update','display_name'=>'Actualizar Observación'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Observacion Delete','display_name'=>'Eliminar Observación'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Oficinaregistral View','display_name'=>'Ver Oficinaregistral'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Oficinaregistral Create','display_name'=>'Crear Oficinaregistral'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Oficinaregistral Update','display_name'=>'Actualizar Oficinaregistral'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Oficinaregistral Delete','display_name'=>'Eliminar Oficinaregistral'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Representada View','display_name'=>'Ver Clientes Awki'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Representada Create','display_name'=>'Crear Clientes Awki'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Representada Update','display_name'=>'Actualizar Clientes Awki'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Representada Delete','display_name'=>'Eliminar Clientes Awki'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Statusfinal View','display_name'=>'Ver Statusfinal'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Statusfinal Create','display_name'=>'Crear Statusfinal'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Statusfinal Update','display_name'=>'Actualizar Statusfinal'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Statusfinal Delete','display_name'=>'Eliminar Statusfinal'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Statussunarp View','display_name'=>'Ver Statussunarp'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Statussunarp Create','display_name'=>'Crear Statussunarp'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Statussunarp Update','display_name'=>'Actualizar Statussunarp'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Statussunarp Delete','display_name'=>'Eliminar Statussunarp'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Tipodedocumento View','display_name'=>'Ver Tipodedocumento'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tipodedocumento Create','display_name'=>'Crear Tipodedocumento'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tipodedocumento Update','display_name'=>'Actualizar Tipodedocumento'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tipodedocumento Delete','display_name'=>'Eliminar Tipodedocumento'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Tipodeventa View','display_name'=>'Ver Tipodeventa'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tipodeventa Create','display_name'=>'Crear Tipodeventa'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tipodeventa Update','display_name'=>'Actualizar Tipodeventa'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Tipodeventa Delete','display_name'=>'Eliminar Tipodeventa'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Zona View','display_name'=>'Ver Zonas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Zona Create','display_name'=>'Crear Zonas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Zona Update','display_name'=>'Actualizar Zonas'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Zona Delete','display_name'=>'Eliminar Zonas'])->SyncRoles([$adminRole]);

        Permission::create(['name'=>'Permission View','display_name'=>'Ver Permisos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Permission Update','display_name'=>'Actualizar Permisos'])->SyncRoles([$adminRole]);


        /* borrar */
        Permission::create(['name'=>'Category View','display_name'=>'Ver Categoria de productos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Category Create','display_name'=>'Crear Categoria de productos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Category Update','display_name'=>'Actualizar Categoria de productos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Category Delete','display_name'=>'Eliminar Categoria de productos'])->SyncRoles([$adminRole]);
        /* borrar */
        Permission::create(['name'=>'Brand View','display_name'=>'Ver Marca de productos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Brand Create','display_name'=>'Crear Marca de productos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Brand Update','display_name'=>'Actualizar Marca de productos'])->SyncRoles([$adminRole]);
        Permission::create(['name'=>'Brand Delete','display_name'=>'Eliminar Marca de productos'])->SyncRoles([$adminRole]);




        //creando posicion o profesion o cargo
        $positionadmin = Position::create([
            'name' => 'Administrador',
        ]);
        $positionseller = Position::create([
            'name' => 'Vendedor',
        ]);




        //creando usuario admin
        $admin = User::create([
            'name' => 'Michael',
            'email' => 'michael@ticomperu.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $admin->assignRole($adminRole);

        //creando empleado admin
        Employee::create([
            'address' => 'Av Jose galvez 1731',
            'movil' => '996929478',
            'dni' => '10133423',
            'gender' => 1,
            'user_id' => $admin->id,
            'local_id' => 1,
            'position_id' => $positionadmin->id,

        ]);



        //creando usuario vendor
        $seller = User::create([
            'name' => 'joffre',
            'email' => 'joffre@ticomperu.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        $seller->assignRole($sellerRole);


        //creando empleado vendedor seller
        Employee::create([
            'address' => 'Av lopez cadiz 1791',
            'movil' => '996559478',
            'dni' => '14533423',
            'gender' => 1,
            'user_id' => $seller->id,
            'local_id' => 1,
            'position_id' => $positionseller->id,

        ]);


        $admin = User::create([
            'name' => 'luis',
            'email' => 'luis@ticomperu.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        //creando empleado vendedor seller
        Employee::create([
            'address' => 'Av lopez cadiz 1791',
            'movil' => '996559478',
            'dni' => '14533423',
            'gender' => 1,
            'user_id' => $admin->id,
            'local_id' => 2,
            'position_id' => $positionseller->id,

        ]);






        $admin = User::create([
            'name' => 'leydy',
            'email' => 'leydy@ticomperu.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        //creando empleado vendedor seller
        Employee::create([
            'address' => 'Av lopez cadiz 1791',
            'movil' => '996559478',
            'dni' => '14533423',
            'gender' => 1,
            'user_id' => $admin->id,
            'local_id' => 2,
            'position_id' => $positionseller->id,

        ]);





        $admin = User::create([
            'name' => 'abc',
            'email' => 'abc@abc.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        //creando empleado vendedor seller
        Employee::create([
            'address' => 'Av lopez cadiz 1791',
            'movil' => '996559478',
            'dni' => '14533423',
            'gender' => 1,
            'user_id' => $admin->id,
            'local_id' => 3,
            'position_id' => $positionseller->id,

        ]);

        $admin = User::create([
            'name' => 'flor',
            'email' => 'flor@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $admin = User::create([
            'name' => 'diana',
            'email' => 'diana@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $admin = User::create([
            'name' => 'xyz',
            'email' => 'xyz@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $admin = User::create([
            'name' => 'volvo',
            'email' => 'volvo@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $admin = User::create([
            'name' => 'chevrolet',
            'email' => 'chevrolet@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $admin = User::create([
            'name' => 'toyota',
            'email' => 'toyota@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        //creando usuarioa sin employee, da error al mostrar datos por eso lo comente
/*         User::create([
            'name' => 'pepe',
            'email' => 'pepe@ticomperu.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'deyna',
            'email' => 'deyna@ticomperu.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]); */
    }
}
