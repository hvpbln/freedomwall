# setup instructions

1. create the sqlite file for database
```
touch database/database.sqlite
```
or just make a new file 'database.sqlite' inside the database folder in vsc

2. configure .env file
```
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite
```

3. install
```
composer install
```
   
3. create tables
```
php artisan migrate
```

4. install breeze
```
composer require laravel/breeze --dev
php artisan breeze:install
```

5. enter these during breeze installation:
```
blade
no
1
```

6. install dependencies
```
npm install
npm run dev
```

7. open another cmd in the project folder

8. create admin account
```
php artisan tinker
```

9. then
```
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@gmail.com',
    'password' => bcrypt('admin123'), // 
]);
```

10. exit tinker
```
exit
```
11. run
```
php artisan key:generate
php artisan serve
```

12. add route in web.php:
```
Route::get('/', function () {
    return view('index'); 
});
```
or kung ano name ng blade na gagamitin mo hahah
