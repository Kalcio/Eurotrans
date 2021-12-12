<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Reset cached roles and permissions
         app()[PermissionRegistrar::class]->forgetCachedPermissions();

         // create permissions
         Permission::create(['name' => 'edit info']);
         Permission::create(['name' => 'delete info']);
         Permission::create(['name' => 'crear info']);
         Permission::create(['name' => 'ver info']);
        //  Permission::create(['name' => 'unpublish info']);
 
         // create roles and assign existing permissions
         $role1 = Role::create(['name' => 'empleado']);
         $role1->givePermissionTo('edit info');
         $role1->givePermissionTo('crear info');
         $role1->givePermissionTo('ver info');
 
         $role2 = Role::create(['name' => 'consultor']);
         $role2->givePermissionTo('ver info');
 
         $role3 = Role::create(['name' => 'Super-Admin']);
         // gets all permissions via Gate::before rule; see AuthServiceProvider
 
         // create demo users
         $user = \App\Models\User::factory()->create([
             'rut'=>'196398593',
             'name' => 'Superadmin demo',
             'numero'=>'998788982',
             'email' => 'superadmin@example.com',
             'password'=>'admin123',
             'direccion' => 'utem macula',
            //  'id_sucursal' => '1',
         ]);
         $user->assignRole($role3);
 
         $user = \App\Models\User::factory()->create([
             'rut'=>'196398594',
             'name' => 'Empleado demo',
             'numero'=>'998788983',
             'email' => 'empleado@example.com',
             'password'=>'admin123',
             'direccion' => 'utem macul',
            //  'id_sucursal' => '1',
         ]);
         $user->assignRole($role1);
 
         $user = \App\Models\User::factory()->create([
             'rut'=>'196398591',
             'name' => 'Consultor demo',
             'numero'=>'99878891',
             'email' => 'consultor@example.com',
             'password'=>'admin1231',
             'direccion' => 'utem macule',
            //  'id_sucursal' => '1',
         ]);
         $user->assignRole($role2);
    }
}
