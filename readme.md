# SB Admin for Laravel 5.6
This project is based on SB Admin Bootstrap Theme. Every structure of SB Admin design is divided into components and slots.

## Requirements
This admin template uses the [Laravel](https://laravel.com/ "Laravel") framework.
Currently, [Laravel 5.6](https://laravel.com/docs/5.6 "Laravel 5.6") is being used.

If you are getting any error, it is most probably due to 
unfulfilled [requirements](https://laravel.com/docs/5.6#server-requirements "Server Requirements") 
of the framework itself.

###  Tools
- [Node.js and NPM](https://docs.npmjs.com/getting-started/installing-node)
- [Yarn](https://yarnpkg.com/en/docs/install)

## Getting Started
```
$ git clone git@github.com:cham11ng/sbadmin-laravel.git <application-name>

$ cd <application-name>

$ composer install --prefer-dist -vvv # Might take a while to complete

$ cp .env.example .env # Update database credentials

$ php artisan key:generate

$ php artisan serve
```

## Using laravel-mix
```
$ yarn production # For production

$ yarn watch or yarn dev # For development
```

Open the browser and go to http://localhost:8000

## References

- https://github.com/start-laravel/sb-admin-laravel-5

## Contributors
cham11ng | 2017-18
