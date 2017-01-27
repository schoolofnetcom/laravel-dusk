<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    use CrudControllerTrait;

    protected $model;
    protected $path = 'pages';
    protected $redirectPath = '/pages';

    public function __construct(\App\Page $model)
    {
      $this->model = $model;
    }
}
