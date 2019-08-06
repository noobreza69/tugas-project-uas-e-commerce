<?php

use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new\App\Login;
		$user->username='admin';
		$user->password=bcrypt('admin');
		$user->save();
    }
}
