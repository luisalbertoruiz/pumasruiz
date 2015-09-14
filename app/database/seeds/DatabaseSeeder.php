<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metacatalogo')->delete();
        DB::table('metacatalogo')->insert(array(
            array(
            'nombre'      =>'Competiciones',
            'descripcion' =>'Tipo de competiciones de torneo',
            'created_at'  =>date('Y-m-d H:m:s'),
            'updated_at'  =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'      =>'Enfrentamientos',
            'descripcion' =>'Tipos de enfrentamiento de torneo',
            'created_at'  =>date('Y-m-d H:m:s'),
            'updated_at'  =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'      =>'Tipos de torneos',
            'descripcion' =>'Tipos de torneos',
            'created_at'  =>date('Y-m-d H:m:s'),
            'updated_at'  =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'      =>'Posiciones',
            'descripcion' =>'Posiciones de los jugadores',
            'created_at'  =>date('Y-m-d H:m:s'),
            'updated_at'  =>date('Y-m-d H:m:s')
            )
        ));
        DB::table('catalogo')->delete();
        DB::table('catalogo')->insert(array(
            array(
            'nombre'          =>'Fase regular y Fase final',
            'descripcion'     =>'torneo de fase regular y final',
            'metacatalogo_id' =>'1',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Liguilla',
            'descripcion'     =>'torneo de liguilla',
            'metacatalogo_id' =>'1',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Puntos',
            'descripcion'     =>'torneo por puntos',
            'metacatalogo_id' =>'1',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Ida y vuelta',
            'descripcion'     =>'Enfrentamiento de ida y vuelta',
            'metacatalogo_id' =>'2',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Simple',
            'descripcion'     =>'Enfrentamiento simple',
            'metacatalogo_id' =>'2',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Liga',
            'descripcion'     =>'Tipo de torneo liga',
            'metacatalogo_id' =>'3',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Copa',
            'descripcion'     =>'Tipo de torneo copa',
            'metacatalogo_id' =>'3',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Inter Liga',
            'descripcion'     =>'Tipo de torneo interliga',
            'metacatalogo_id' =>'3',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Amistoso',
            'descripcion'     =>'Tipo de torneo amistoso',
            'metacatalogo_id' =>'3',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Delantero',
            'descripcion'     =>'Posicion Delantero',
            'metacatalogo_id' =>'4',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Medio',
            'descripcion'     =>'Posicion Medio',
            'metacatalogo_id' =>'4',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Defensa',
            'descripcion'     =>'Posicion Defensa',
            'metacatalogo_id' =>'4',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            ),
            array(
            'nombre'          =>'Portero',
            'descripcion'     =>'Posicion Portero',
            'metacatalogo_id' =>'4',
            'created_at'      =>date('Y-m-d H:m:s'),
            'updated_at'      =>date('Y-m-d H:m:s')
            )
        ));
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            array(
            'email'      =>'admin@sga.com',
            'username'   =>'admin',
            'password'   =>'$2y$10$Qfniz9uhPdfKK2xeKFWAkermlWwkGvCsHTOtQbkIGukfoJs9GL2A.',
            'activated'  =>'1',
            'first_name' =>'Administrador',
            'last_name'  =>'General',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            ),
            array(
            'email'      =>'user@sga.com',
            'username'   =>'user',
            'password'   =>'$2y$10$jmKxZ7U4pKobP84v50V/4eTyj0yOK8tO4zbvuQ6rzXUcNE4FUOjGa',
            'activated'  =>'1',
            'first_name' =>'Usuario',
            'last_name'  =>'Estandar',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            )
        ));
        DB::table('groups')->delete();
        DB::table('groups')->insert(array(
            array(
            'name'  =>'administrador',
            'permissions' =>'{"admin":1,"users":1}',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            ),
            array(
            'name'  =>'usuario',
            'permissions' =>'{"users":1}',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            )
        ));
        DB::table('users_groups')->delete();
        DB::table('users_groups')->insert(array(
            array(
            'user_id'  =>'1',
            'group_id' =>'1'
            ),
            array(
            'user_id'  =>'2',
            'group_id' =>'2'
            )
        ));
        DB::table('sliders')->delete();
        DB::table('sliders')->insert(array(
            array(
            'imagen'  =>'1s',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            ),
            array(
            'imagen'  =>'2s',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            ),
            array(
            'imagen'  =>'3s',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            ),
            array(
            'imagen'  =>'4s',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            ),
            array(
            'imagen'  =>'5s',
            'created_at' =>date('Y-m-d H:m:s'),
            'updated_at' =>date('Y-m-d H:m:s')
            ),
        ));
    }
}
