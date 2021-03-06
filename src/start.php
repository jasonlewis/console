<?php

/*
|--------------------------------------------------------------------------
| Create The Artisan Application
|--------------------------------------------------------------------------
|
| Now we're ready to create the Artisan console application, which will
| be responsible for running the appropriate command. The console is
| built on top of the robust, powerful Symfony console components.
|
*/

use Illuminate\Console\Application;

$artisan = new Application('Laravel Framework', LARAVEL_VERSION);

/*
|--------------------------------------------------------------------------
| Set The Laravel Application
|--------------------------------------------------------------------------
|
| When creating the Artisan application, we will set the Laravel app on
| the console so that we can easily access it from our commands when
| necessary, which allows us to quickly access other app services.
|
*/

$artisan->setLaravel($app);

/*
|--------------------------------------------------------------------------
| Register The Default Commands
|--------------------------------------------------------------------------
|
| Here we will register the default commands used by the framework which
| includes all of the migration related commands. After these we will
| be ready to run the start file so the developer can do their own.
|
*/

$artisan->resolveCommands(array(

	'command.seed',
	'command.migrate',
	'command.migrate.make',
	'command.migrate.install',
	'command.migrate.rollback',
	'command.migrate.reset',
	'command.controller.make',
	'command.package.publish',

));

/*
|--------------------------------------------------------------------------
| Register The Artisan Commands
|--------------------------------------------------------------------------
|
| Each available Artisan command must be registered with the console so
| that it is available to be called. We'll register every command so
| the console gets access to each of the command object instances.
|
*/

require $app['path'].'/start/artisan.php';

return $artisan;