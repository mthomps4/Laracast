<?php
use Illuminate\Database\Seeder;
use database\seeds\ContactsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CardsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NotesSeeder::class);
        $this->call(blogTableSeeder::class);
    }
}
