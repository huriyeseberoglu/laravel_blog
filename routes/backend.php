<?php
/**
 * Created by PhpStorm.
 * User: BanuPC
 * Date: 28.08.2017
 * Time: 13:57
 */

Route:: get('/dashboard', 'Backend\DashboardController');
Route:: resources([
        'users'  => 'Backend\UserController'
    ]);