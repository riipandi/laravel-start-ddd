# Laravel Start DDD

Starter project Laravel with TailwindCSS and Vue.js preset. This is basic implementation of Domain-Driven
Design principle.

## Quick Start

### Create Project

```
composer create-project --prefer-dist riipandi/laravel-start-ddd myapp
```

### Install
Edit or create `.env` file and then execute:

```sh
# Composer dependencies
composer install --no-suggest
php artisan key:generate
php artisan migrate:fresh --seed

# Compiling resources
npm install --no-optional --no-audit
npm run development
```

> For detailed explanation on how things work, check out [Laravel docs](https://laravel.com/docs).

## Further Reading
- https://mattdoescode.com/articles/scaling-laravel-architecture-2018-11-09
- https://lorisleiva.com/conciliating-laravel-and-ddd/

## License

This project licensed under the terms of [MIT License][choosealicense].
Please see [license file](./license.txt) for more information.

[choosealicense]:https://choosealicense.com/licenses/mit/
