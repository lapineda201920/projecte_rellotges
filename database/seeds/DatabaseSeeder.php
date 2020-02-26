<?php

use Illuminate\Database\Seeder;
use App\rellotges;
use App\User;

class DatabaseSeeder extends Seeder
{
	private $array_rellotges = array(
        array(
            'title' => 'Xiaomi Band 4',
            'year' => '2019', 
            'color' => 'Negro', 
            'imagen' => 'https://images-na.ssl-images-amazon.com/images/I/51kIRBGmYpL._AC_SL1015_.jpg', 
            'rented' => true, 
            'synopsis' => 'Xiaomi Band 4 Pulsera de Fitness Inteligente Monitor de Ritmo cardíaco 135 mAh Pantalla Color Bluetooth 5.0 más Reciente 2019 (Negro).'
        )
    );

    private $array_usuaris = array(
        array(
            'name' => 'Adrià',
            'email' => 'adria@gmail.com', 
            'password' => 'adria'
        ),
        array(
            'name' => 'Javier',
            'email' => 'javi@gmail.com', 
            'password' => 'javi'
        ),
        array(
            'name' => 'Cristian',
            'email' => 'cristian@gmail.com', 
            'password' => 'cristian'
        )
    );

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	self :: seedCatalog();
    	$this->command->info('Taula catàleg inicialitzem amb dades!');
        

        self :: seedUsers();
    	$this->command->info('Taula usuaris inicialitzada amb dades!');
    }

    public function seedCatalog(){

    	DB::table('rellotges')->delete();
    	foreach ($this->array_rellotges as $rellotge) {
    		# code...
    		$r=new rellotges;
    		$r->title=$rellotge['title'];
    		$r->year=$rellotge['year'];
    		$r->color=$rellotge['color'];
			$r->imagen=$rellotge['imagen'];
    		$r->rented=$rellotge['rented'];
    		$r->synopsis=$rellotge['synopsis'];
    		$r->save();
    	}
    }

    private function seedUsers(){

    	DB::table('users')->delete();
    	foreach ($this->array_usuaris as $usuari) {
    		# code...
    		$u=new User;
    		$u->name=$usuari['name'];
    		$u->email=$usuari['email'];
    		$u->password=Hash::make($usuari['password']);
    		$u->save();
    	}
    }
}
