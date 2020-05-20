<?php

namespace App\View\Components\Inputs;

use BladeComponentViewTrait;
use Illuminate\View\Component;

class Text extends Component
{
    use BladeComponentViewTrait;

    public $label;

    private $blade;

    public function __construct($label)
    {
        $this->label = $label;
    }

    public function render()
    {
        return $this->view('inputs.text');
    }
}