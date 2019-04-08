<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        //usuario 1
    	User::create([
    		'name' => 'Mike',
    		'email' => 'miguelguevara190@gmail.com',
    		'password' => bcrypt('123456')
    	]);
        //usuario 2
        User::create([
            'name' => 'Miguel',
            'email' => 'miguel.guevara.35@facebook.com',
            'password' => bcrypt('miguel.35')
        ]);
        //usuario 3
        User::create([
            'name' => 'Guevara',
            'email' => 'mikehernandez1111111111@gmail.com',
            'password' => bcrypt('miguel.2018')
        ]);
    }
}
