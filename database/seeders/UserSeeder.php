<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=>'Patricio',
            'apellido'=>'Aguilar V',
            'codigo'=>'2617',
            'email'=>'patrickaguilar2403@gmail.com',
            'password'=>'12345678',
            'estado'=> 1,
            'sucursal_id'=>1,
            'tipo_usuario_id'=>1,
        ]);
        User::Create([
            'name'=>'Alejandro',
            'apellido'=>'Barja',
            'codigo'=>'5566',
            'email'=>'alejandrobarja@gmail.com',
            'password'=>'12345678',
            'estado'=> 1,
            'sucursal_id'=>1,
            'tipo_usuario_id'=>1,
        ]);

        User::Create([
            'name'=>'Wilson Jhonatan',
            'apellido'=>'Coyo Leon',
            'codigo'=>'7799',
            'email'=>'wilsonjhonatan@gmail.com',
            'password'=>'12345678',
            'estado'=> 1,
            'sucursal_id'=>1,
            'tipo_usuario_id'=>1,
        ]);
        User::Create([
            'name'=>'Miguel',
            'apellido'=>'Garron',
            'codigo'=>'1177',
            'email'=>'miguel@gmail.com',
            'password'=>'12345678',
            'estado'=> 1,
            'sucursal_id'=>1,
            'tipo_usuario_id'=>1,
        ]);

        
    }

}
