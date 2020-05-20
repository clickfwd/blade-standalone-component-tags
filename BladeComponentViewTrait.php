<?php

use Illuminate\Support\Facades\Facade;

trait BladeComponentViewTrait {

    public function view($name)
    {
        $app = Facade::getFacadeApplication();

        $view = $app->get('view');

        $props = $this->extractPublicProperties();

        return $view->make("components.$name",$props);
    }
}