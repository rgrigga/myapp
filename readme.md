#Laravel 4 - Bootstrap Starter Site (RC 1)

This is a Laravel 4 Starter Site. It is a fork off of [brunogaspar/laravel4-starter-kit](https://github.com/brunogaspar/laravel4-starter-kit) taking the starter kit changing the included modules.
Again, big thanks goes to [brunogaspar](https://github.com/brunogaspar).

-----

##Included features

* Twitter Bootstrap 2.3.0
* Custom Error Pages
	* 403 for forbidden page accesses
	* 404 for not found pages
	* 500 for internal server errors
* [Confide](#confide) for Authentication and Authorization
* Back-end
	* User and Role management
	* Manage blog posts and comments
	* WYSIWYG editor for post creation and editing.
* Front-end
	* User login, registration, forgot password
	* User account area
	* Simple Blog functionality
* Packages included:
	* [Confide](#confide)
	* [Ardent](#ardent)
	* [PowerPack](#powerpack)
	* [Jason Lewis Expressive Date](#expressive-date)

-----

##Requirements

	PHP >= 5.4.0 (Entrust requires 5.4, this is an increase over Laravel's 5.3.7 requirement)
	MCrypt PHP Extension

##How to install
### Step 1: Get the code
#### Option 1: Git Clone

	git clone git://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site.git laravel
	cd laravel

#### Option 2: Download the repository

    https://github.com/andrew13/Laravel-4-Bootstrap-Starter-Site/archive/master.zip

-----

### Step 2: Use Composer to install dependencies
### Step 1: Get the code
#### Option 1: Composer is not installed globally

    cd laravel
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

#### Option 2: Composer is installed globally

    https://github.com/andrew13/Laravel-4-Bootstrap-Empowered/archive/develop.zip

If you haven't already, you might want to make [composer be installed globally](http://andrewelkins.com/programming/php/setting-up-composer-globally-for-laravel-4/) for future ease of use.

### Step 3: Configure Database

Now that you have the Laravel 4 installed, you need to create a database for it and update the file ***app/config/database.php***

### Step 4: Configure Mailer

Set the `address` and `name` from the `from` array in `config/mail.php`. Those will be used to send account confirmation and password reset emails to the users.
If you don't set that registration will fail because it cannot send the confirmation email.

### Step 5: Populate Database
Run these commands to create and populate Users table:

	php artisan migrate:install
	php artisan migrate
	php artisan db:seed


### Step 6: Make sure app/storage is writable by your web server.
If permissions are set correctly:

    chmod -R 775 app/storage

Should work, if not try

    chmod -R 777 app/storage

## Step 7: Start Page
### User login with commenting permission
Navigate to your Laravel 4 website and login at /user/login:

	username : user
	password : user

Create a new user at /user/create

### Admin login
Navigate to /admin

    username: admin
    password: admin

-----
## Included Package Information
<a name="confide"></a>
## Confide Authentication Solution

Used for the user auth and registration. In general for user controllers you'll want to use something like the following:

    <?php

    use Zizaco\Confide\ConfideUser;

    class User extends ConfideUser {

    }

For full usage see [Zizaco/Confide Documentation](https://github.com/zizaco/confide)

<a name="ardent"></a>
## Ardent - Used for handling repetitive validation tasks.

Self-validating, secure and smart models for Laravel 4's Eloquent ORM 

For full usage see [Ardent Documentation](https://github.com/laravelbook/ardent) 

<a name="powerpack"></a>
## Laravel 4 PowerPack

Adds string helper classes from Laravel 3 to Laravel 4.

**`laravel4-powerpack`** contains Laravel 4 ports of the following helper classes:

- [HTML](https://github.com/laravelbook/laravel4-powerpack#html_class)

- [Form](https://github.com/laravelbook/laravel4-powerpack#form_class)

- [Str](https://github.com/laravelbook/laravel4-powerpack#str_class)

For full usage see [PowerPack Documentation](https://github.com/laravelbook/laravel4-powerpack)

<a name="expressive-date"></a>
## Expressive Date

A fluent extension to PHPs DateTime class.

```php
<?php

$date = new ExpressiveDate;

$date->minusOneDay();

echo $date->getRelativeDate(); // 1 day ago

$date->addOneWeek();

echo $date->getShortDate(); // Jan 31, 2012
```

For full usage see [Using Expressive Date](http://jasonlewis.me/code/expressive-date)

-----

## Additional information

Inspired by and based on [laravel4-starter-kit](https://github.com/brunogaspar/laravel4-starter-kit)

Any questions, feel free to [contact me](http://twitter.com/andrewelkins).
