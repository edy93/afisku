# Laravel 8 RESTful APIs Boilerplate
Boilerplate RESTful APIs menggunakan Laravel 8

## Fitur
- *Auth* (*register, verify, reset password, confirm password*)
-  API with`Laravel/Sanctum`

## *Requirements*
- PHP >= 7.3
- Git
- Composer

## *Installing*
- *Clone* repo:
```
git clone 
```
- Jalankan:
```
$ composer install
```
- *Setup* file `.env` (Jika tidak ada). Kemudian jalankan:
```
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
