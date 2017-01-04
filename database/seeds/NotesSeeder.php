<?php
use Illuminate\Database\Seeder;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('notes')->insert(['card_id' => '2', 'body'=> 'Some notes on a card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        DB::table('notes')->insert(['card_id' => '1', 'body'=> 'Im Attatched to a Card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);

    }
}
