<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan db:seed -> ejecutar el seeder
        DB::table('users')->insert([
        	'name'=> 'Eddy Valencia',
        	 'email'=> 'eddyvalencia8@gmail.com',
        	 'password'=>bcrypt('21417201'),
        	]);
    }
}
