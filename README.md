# setup instructions

- create the sqlite file for database
`touch database/database.sqlite`

- configure .env file
```
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite
```

- create tables
`php artisan migrate`

- install breeze
```
composer require laravel/breeze --dev
php artisan breeze:install
```

- enter these during breeze installation:
`blade`
`no`
`1` (PHPUnit)

- install dependencies
```
npm install
npm run dev
```

- open another cmd in the project folder

- create admin account
`php artisan tinker`
- then
```
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@gmail.com',
    'password' => bcrypt('admin123'), // 
]);
```

- exit tinker
`exit`

`php artisan serve`