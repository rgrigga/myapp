<?php

// use Woodling\Woodling;
// use J20\Uuid;
// use Carbon\Carbon;

<<<<<<< HEAD
Woodling::seed('UserAdmin', array('class' => 'User', 'do' => function($blueprint)
{
    $blueprint->username = 'admin';
    $blueprint->email = 'admin@example.org';
    // $blueprint->confirmation_code = Uuid\Uuid::v4(false);
    $blueprint->confirmed = 1;
    $blueprint->created = Carbon::now();
    $blueprint->updated = Carbon::now()->addMonths(2);
//    $blueprint->role = Woodling::retrieve('RoleAdmin');
}));

Woodling::seed('UserUser', array('class' => 'User', 'do' => function($blueprint)
{
    $blueprint->username = 'user';
    $blueprint->email = 'user@example.org';
    // $blueprint->confirmation_code = Uuid\Uuid::v4(false);
    $blueprint->confirmed = 1;
    $blueprint->created = Carbon::now();
    $blueprint->updated = Carbon::now()->addMonths(2);
//    $blueprint->role = Woodling::retrieve('RoleComment');
}));
=======
// Woodling::seed('UserAdmin', array('class' => 'User', 'do' => function($blueprint)
// {
//     $blueprint->username = 'admin';
//     $blueprint->email = 'admin@example.org';
//     $blueprint->confirmation_code = Uuid\Uuid::v4(false);
//     $blueprint->confirmed = 1;
//     $blueprint->created = Carbon::now();
//     $blueprint->updated = Carbon::now()->addMonths(2);
// //    $blueprint->role = Woodling::retrieve('RoleAdmin');
// }));

// Woodling::seed('UserUser', array('class' => 'User', 'do' => function($blueprint)
// {
//     $blueprint->username = 'user';
//     $blueprint->email = 'user@example.org';
//     $blueprint->confirmation_code = Uuid\Uuid::v4(false);
//     $blueprint->confirmed = 1;
//     $blueprint->created = Carbon::now();
//     $blueprint->updated = Carbon::now()->addMonths(2);
// //    $blueprint->role = Woodling::retrieve('RoleComment');
// }));
>>>>>>> 0fb60f1021e1f0efddc9f11b7ed11f5781fc41a3
