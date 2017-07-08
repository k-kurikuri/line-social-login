<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

/**
 * Class LineLoginController
 * @package App\Http\Controllers
 */
class LineLoginController extends Controller
{
    /**
     * @var string
     */
    protected $driver = 'line';

    public function index()
    {
        return ['hello'];
    }
    public function redirectToProvider()
    {
        return Socialite::driver($this->driver)->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver($this->driver)->user();
    }
}