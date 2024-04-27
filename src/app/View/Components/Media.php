<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Media extends Component
{
    public string $file;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render(): string|View
    {
        return view('extensions.media');
    }
}
