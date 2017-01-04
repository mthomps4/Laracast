<?php
use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('cards')->insert(['title' => 'My New Card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
    }
}
