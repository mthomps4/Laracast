<?php
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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert(['username'=> 'Matt', 'email'=>'support@laracast.com', 'password'=>bcrypt('password')]);
    }
}
