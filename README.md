# smyl dashboard

A dashboard with auth to get you started

## Installation

You can install the package via composer:

`composer require smyl/dashboard`

You must publish and run the migrations to create the necessary tables:

`php artisan vendor:publish --provider="Smyl\Dashboard\DashboardServiceProvider"`

`php artisan migrate`

Content of published config file. These values are used for creating roles.

```php

return [
    'roles' => [
        'admin',  // Do not remove or reorder the admin or it will cause errors.
        'editor',
        'contributor',
        'viewer'
    ]
];
```

After publishing the config file you can customize the roles. To populate the `roles` table run `php artisan roles:create` command.

To create an admin user for loggin in run `php artisan admin:create` command. You can specify `--name`, `--email` and `--password` for the user or defults values will be used.

### Default admin:

Email: `admin@smyl.com`, Password: `password`
