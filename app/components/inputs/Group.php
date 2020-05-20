<?php

namespace App\View\Components\Inputs;

use BladeComponentViewTrait;
use Illuminate\View\Component;

class Group extends Component
{
    use BladeComponentViewTrait;

    public function render()
    {
        return $this->view('inputs.group');
    }
}