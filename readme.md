# Simple UI for Spatie Laravel Missing Page Redirector

This composer package is a simple UI for saving page redirects to your database.


## Installation

Begin by pulling in the package through Composer.

```bash
composer require malcolmknott/redirector
```

Next, if using Laravel 5, include the service provider within your `config/app.php` file.

```php
'providers' => [
    Malcolmknott\Redirector\RedirectorServiceProvider::class,
];
```

If you have a new project, scaffold the basic login and registration views to pull in Boostrap.
Or publish the view files to use your own layout.

```bash
php artisan make:auth
```

Run the migration for the redirects table.

```bash
php artisan migrate
```


## Laravel Missing Page Redirector

Pull in the <a href="https://github.com/spatie/laravel-missing-page-redirector">Spatie Laravel Missing Page Redirector package</a>, follow the install and setup instructions.

Update the "laravel-missing-page-redirector.php" config file with the database redirector class.

```php
'redirector' => \Malcolmknott\Redirector\DatabaseRedirector::class,
```

## Usage

Add a route that points to the Redirector Controller, you'll probably want to add some middleware to restrict who can edit your redirects.

```php
Route::resource('redirects', '\Malcolmknott\Displaylog\DisplayLogController');
```

## Views

Publish the view files to change the format and add your own style.

```bash
php artisan vendor:publish --provider="Malcolmknott\Redirector\RedirectorServiceProvider" --tag="views"
```
