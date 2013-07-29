<?php
// http://four.laravel.com/docs/configuration#environment-configuration

  // die("DEV MODE config/local/app");

return array(
	'debug' => true,

        /* Uncomment for use in development */
       // 'Way\Generators\GeneratorsServiceProvider', // Generators
       // 'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider', // IDE Helpers
       // 'Woodling\Woodling',
            'providers' => array(
        /* Laravel Base Providers */
		'Illuminate\Foundation\Providers\ArtisanServiceProvider',
		'Illuminate\Auth\AuthServiceProvider',
		'Illuminate\Cache\CacheServiceProvider',
		'Illuminate\Foundation\Providers\CommandCreatorServiceProvider',
		'Illuminate\Session\CommandsServiceProvider',
		'Illuminate\Foundation\Providers\ComposerServiceProvider',
		'Illuminate\Routing\ControllerServiceProvider',
		'Illuminate\Cookie\CookieServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
		'Illuminate\Encryption\EncryptionServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Hashing\HashServiceProvider',
		'Illuminate\Html\HtmlServiceProvider',
		'Illuminate\Foundation\Providers\KeyGeneratorServiceProvider',
		'Illuminate\Log\LogServiceProvider',
		'Illuminate\Mail\MailServiceProvider',
		'Illuminate\Foundation\Providers\MaintenanceServiceProvider',
		'Illuminate\Database\MigrationServiceProvider',
		'Illuminate\Foundation\Providers\OptimizeServiceProvider',
		'Illuminate\Pagination\PaginationServiceProvider',
		'Illuminate\Foundation\Providers\PublisherServiceProvider',
		'Illuminate\Queue\QueueServiceProvider',
		'Illuminate\Redis\RedisServiceProvider',
		'Illuminate\Auth\Reminders\ReminderServiceProvider',
		'Illuminate\Foundation\Providers\RouteListServiceProvider',
		'Illuminate\Database\SeedServiceProvider',
		'Illuminate\Foundation\Providers\ServerServiceProvider',
		'Illuminate\Session\SessionServiceProvider',
		'Illuminate\Foundation\Providers\TinkerServiceProvider',
		'Illuminate\Translation\TranslationServiceProvider',
		'Illuminate\Validation\ValidationServiceProvider',
		'Illuminate\View\ViewServiceProvider',
		'Illuminate\Workbench\WorkbenchServiceProvider',

        /* Additional Providers */
        'Zizaco\Confide\ConfideServiceProvider', // Confide Provider
        'Zizaco\Entrust\EntrustServiceProvider', // Entrust Provider for roles
        'Basset\BassetServiceProvider', // Better Asset Management
        'Greggilbert\Recaptcha\RecaptchaServiceProvider', // recaptcha
        'Robbo\Presenter\PresenterServiceProvider', // Presenter
   
    	// 'EnhancedRouter\EnhancedRouterServiceProvider',


        /* Uncomment for use in development */
       'Way\Generators\GeneratorsServiceProvider', // Generators
       'Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider', // IDE Helpers
       // 'Woodling\Woodling',


    ),
);