<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Changes
class PageController extends Controller
{
    private $name;
    private $age;
    private $imageLink;

    function __construct()
    {
        $this->name = 'Md.Tanvir Hossain Anik';
        $this->age = 'alive';
    }

    function home()
    {
        return view('Home')
            ->with("name", $this->name)
            ->with('age', $this->age)
            ->with('imageLink', $this->imageLink);
    }

    function setAge($age)
    {
        return view('Home')
            ->with("name", $this->name)
            ->with('age', $age)
            ->with('imageLink', $this->imageLink);
    }
}
