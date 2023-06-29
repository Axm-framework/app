<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class SiteController extends BaseController
{
    public $msg = 'Welcome to Axm Framework';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        view('pages.welcome', ['msg' => $this->msg]);
    }
}
