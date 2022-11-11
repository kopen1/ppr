<?php

namespace App\View\Components;

use Illuminate\View\Component;
class AppLayout extends Component
{
    public $title,$style;
    public function __construct($title = null,$style = null)
    {
        $this->title = $title?"$title | ROHMATILLAH":'ROHMATILLAH';
        $this->style = $style;
    }

    public function render()
    {   
        return view('components.app-layout');
    }
}
