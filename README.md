A Laravel Cart package for Ecommerce stores (BETA version).

Install the package via Composer:

composer require mario1515/laravel-eccomerce-cart

Laravel will automatically register the service provider and facade through package auto-discovery.

The package includes all necessary database migrations.
Publish them to your application:

php artisan vendor:publish --tag=laravel-cart-migrations

This will copy the migration files into:

database/migrations/

After publishing, run:

php artisan migrate