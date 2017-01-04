# Laracast
Diving into more Laravel - Laracast Video's and Playground

Dumping Notes to self along the way -- Ignore ReadMe for now. 

 - npm install buble buble-loader vue

### DB Info
 - check/setup .env files
 - php artisan make:migration ''
 - php migration
 - Use DB;
 - php artisan tinker
 - DB::table('cards')->insert(['title' => 'My New Card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
 - DB::table('cards')->get();
 - DB::table('cards')->where('title', 'My New Card')->first();
 - DB::table('cards')->where('title', 'My New Card')->delete();

### Starting Help
- composer install
- check/setup .env files for DB
- PHP Artisan Key:generate
- PHP artisan config:cache
- php artisan migrate:install
- php artisan migrate

if working on DB seed
- comoposer dump-autoload
- php artisan db:seed
or
- php artisan migrate:refresh --seed


Eloquent assumes between Card and Note Model
hasMany Note::class
Note class card_id
references and assumes when using `_id`
`'class'_id`
