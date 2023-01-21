<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);       
    }

    public function index()
    {
        return View('dashboard');
    }
}
