<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Blog\BaseController as GuestBaseController;

    abstract class BaseController extends GuestBaseController
{
    //
    /**
     * BaseController constructor
     */
    public function __construct()
    {
        //Ініціалізація загальних елементів адмінки
    }
}
