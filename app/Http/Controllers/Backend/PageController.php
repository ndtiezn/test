<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationMailer;

class PageController extends Controller
{
    public function dashboard(): Factory|View|Application
    {
        return view('backend.pages.dashboard');
    }

    public function testMail() {
        // hotro.nentangtoituonglai@gmail.com  => phucuong@ctu.edu.vn
        Mail::to('nguyentien25702@gmail.com')
            ->send(new ActivationMailer([]));
    }
}
