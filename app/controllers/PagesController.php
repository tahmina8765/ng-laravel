<?php

class PagesController extends BaseController
{

    public function home()
    {
        $name = 'Tahmina';
        return View::make('Pages/home')->with('name', $name);
    }
    
    public function about()
    {
        return View::make('Pages/about');
    }

}
