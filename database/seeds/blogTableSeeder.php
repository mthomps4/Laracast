<?php
use Illuminate\Database\Seeder;

class blogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('blogposts')->insert(['title' => 'My First Post', 'body'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'created_at' => new DateTime, 'updated_at' => new DateTime]);

        //Tags & Cats & Comments
        DB::table('tags')->insert(['name'=>'Tag1', 'tagCount'=>1]);
        DB::table('categories')->insert(['name'=>'Cat1', 'categoryCount'=>1]);
        DB::table('comments')->insert(['user_name'=>'Joe', 'body'=>'Hipster ipsum -- Joe Cool', 'blogpost_id'=> 1]);

        DB::table('blogpost_tag')->insert(['blogpost_id'=>1, 'tag_id'=>1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
        DB::table('blogpost_category')->insert(['blogpost_id'=>1, 'category_id'=>1, 'created_at' => new DateTime, 'updated_at' => new DateTime]);
    }
}
