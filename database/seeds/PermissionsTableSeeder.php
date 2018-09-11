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
        //usuarios
        Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description'  => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de Usuarios',
            'slug' => 'users.show',
            'description'  => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de Usuarios',
            'slug' => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.destroy',
            'description'  => 'Eliminar cualquier dato de un usuario del sistema',

        ]);
        //usuarios

        //roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description'  => 'Lista y navega todos los roles del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de roles',
            'slug' => 'roles.show',
            'description'  => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([
            'name' => 'Crear un nuevo Rol',
            'slug' => 'roles.create',
            'description'  => 'Crear un nuevo rol del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description'  => 'Editar cualquier dato de un rol del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Rol',
            'slug' => 'roles.destroy',
            'description'  => 'Eliminar cualquier dato de un rol del sistema',

        ]);
        //roles

        //Products
        Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description'  => 'Lista y navega todos los products del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de products',
            'slug' => 'products.show',
            'description'  => 'Ver en detalle cada producto del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Producto',
            'slug' => 'products.create',
            'description'  => 'Crear un nuevo producto del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de products',
            'slug' => 'products.edit',
            'description'  => 'Editar cualquier dato de un producto del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar producto',
            'slug' => 'products.destroy',
            'description'  => 'Eliminar cualquier dato de un producto del sistema',

        ]);
        //Products

         //Profesores
         Permission::create([
            'name' => 'Navegar profesores',
            'slug' => 'profesors.index',
            'description'  => 'Lista y navega todos los profesores del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de profesors',
            'slug' => 'profesors.show',
            'description'  => 'Ver en detalle cada profesores del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Profesor',
            'slug' => 'profesors.create',
            'description'  => 'Crear un nuevo profesor del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de profesores',
            'slug' => 'profesors.edit',
            'description'  => 'Editar cualquier dato de un profesor del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar profesor',
            'slug' => 'profesors.destroy',
            'description'  => 'Eliminar cualquier dato de un profesor del sistema',

        ]);
        //Profesores


         //Alumnos
         Permission::create([
            'name' => 'Navegar Alumnos',
            'slug' => 'alumnos.index',
            'description'  => 'Lista y navega todos los Alumnos del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de alumnos',
            'slug' => 'alumnos.show',
            'description'  => 'Ver en detalle cada Alumnos del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Alumno',
            'slug' => 'alumnos.create',
            'description'  => 'Crear un nuevo profesor del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de Alumnos',
            'slug' => 'alumnos.edit',
            'description'  => 'Editar cualquier dato de un Alumno del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Alumno',
            'slug' => 'alumnos.destroy',
            'description'  => 'Eliminar cualquier dato de un Alumno del sistema',

        ]);
        //Alumnos


         //cursos
         Permission::create([
            'name' => 'Navegar Cursos',
            'slug' => 'cursos.index',
            'description'  => 'Lista y navega todos los cursos del sistema',

        ]);

        Permission::create([
            'name' => 'Ver detalle de cursos',
            'slug' => 'cursos.show',
            'description'  => 'Ver en detalle cada curso del sistema',

        ]);

        Permission::create([
            'name' => 'Crea un nuevo Curso',
            'slug' => 'cursos.create',
            'description'  => 'Crear un nuevo Curso del sistema',

        ]);

        Permission::create([
            'name' => 'Edicion de cursos',
            'slug' => 'cursos.edit',
            'description'  => 'Editar cualquier dato de un Curso del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Curso',
            'slug' => 'cursos.destroy',
            'description'  => 'Eliminar cualquier dato de un Curso del sistema',

        ]);
        //cursos


    }
}
