<?php
namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    //
    public function index(Request $request): Response
    {

                $user = $request->user();
                // dd($user->hasRole('admin')); //will return true, if user has role
                // dd($user->givePermissionsTo('create-tasks'));// will return permission, if not null
                // dd($user->can('create-tasks')); // will return true, if user has permission


                if (auth()->user()->hasRole('admin')){

                    return Inertia::render('Admin/Dashboard');
                } else {
                    return Inertia::render('Dashboard');
                }



        

    }
}
