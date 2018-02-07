<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['index']
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function pin(Request $request, $segment)
    {
        $pin =  $request->post('pin');
        $url = Url::where('segment', $segment)
            ->where('pin', $pin)
            ->firstOrFail();

        return redirect($url->target);
    }

    public function redirect($segment)
    {
        if(Auth::guest())
        {
            return view('home.redirect', ['segment' => $segment]);
        }
        else
        {
            $user_id = Auth::id();
            $url = Url::where('user_id', $user_id)
                ->where('segment', $segment)
                ->firstOrFail();

            return redirect($url->target);
        }
    }
}
