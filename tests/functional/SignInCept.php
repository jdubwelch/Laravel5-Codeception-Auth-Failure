<?php 

use Laracasts\TestDummy\Factory as TestDummy;

$I = new FunctionalTester($scenario);
$I->am('a admin');
$I->wantTo('sign into the dashboard');

$email = 'admin@example.com';
$password = '12345';

TestDummy::create('App\User', compact('email','password'));

$I->amOnPage('/auth/login');
$I->fillField('email', $email);
$I->fillField('password', $password);
$I->click('Log In');

$I->seeInCurrentUrl('/dashboard');
$I->see('Dashboard');
