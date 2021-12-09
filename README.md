# dashboard-demo

Dashboard with custom admin authentication

## Installation

You can install the package via composer:

`composer require smyl/dashboard`

You must publish and run the migrations to create the necessary tables:

`php artisan vendor:publish --provider="Smyl\Dashboard\DashboardServiceProvider"

php artisan migrate`

Content of published config file

`return [ 'roles' => [ 'admin', 'editor', 'contributor', 'viewer' ] ];`

---

**NOTE**

These values are used for creating roles.

---

After publishing the config file you can customize the roles. To populate the `roles` table run `php artisan roles:create` command.

To create an admin user for loggin in run `php artisan admin:create` command. You can specify `--name`, `--email` and `--password` for the user or defults values will be used. The default password is `password`.
