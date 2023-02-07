<?php

namespace App\View\Components;
use App\Models\Service;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $navbar_services  = Service::where('status' , 1 )->get();
        return view('components.navbar' , compact('navbar_services'));
    }
}
