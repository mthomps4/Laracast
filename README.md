# Laracast
Diving into more Laravel - Laracast Video's and Playground

 - npm install buble buble-loader vue

# DB
 - check/setup database.php and .env files
 - php artisan make:migration ''
 - php migration
 - Use DB;
 - php artisan tinker
 - DB::table('cards')->insert(['title' => 'My New Card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
 - DB::table('cards')->get();
 - DB::table('cards')->where('title', 'My New Card')->first();
 - DB::table('cards')->where('title', 'My New Card')->delete();
