<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User;
        $user->name = "Volmário";
        $user->email = "admin@visaodeaguia.com";
        $user->password = Hash::make("volmariovisao");
        $user->save();
    }
}
