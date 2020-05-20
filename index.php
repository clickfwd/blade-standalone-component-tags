<?php

require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

require 'BladeComponentViewTrait.php';
require 'app/components/inputs/Group.php';
require 'app/components/inputs/Text.php';

$blade = new Blade('views', 'cache');

$blade->compiler()->components([
	'inputs.group' => \App\View\Components\Inputs\Group::class,
  	'inputs.text' => \App\View\Components\Inputs\Text::class
]);

$app = \Illuminate\Container\Container::getInstance();

$app->bind('Illuminate\Contracts\View\Factory', 	
     function ($app) use ($blade) {
    	return $blade;
      }
);

echo $blade
  	->make('homepage', ['name' => 'John Smith'])
  	->render();