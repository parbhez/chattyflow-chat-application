<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use GuzzleHttp\Client;
class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->hasRole('admin')){

            return Inertia::render('Admin/Offers/Index');
        } else {


            return Inertia::render('User/Numbers/Index');
        }
    }


/**
     * planSelection.
     */
    public function searchNumber()
    {
        if (auth()->user()->hasRole('admin')){

            return Inertia::render('Admin/Offers/Index');
        } else {


            return Inertia::render('User/Numbers/SearchNumber');
        }
    }










    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Number $number)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Number $number)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Number $number)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Number $number)
    {
        //
    }

    public function phonenumber()
    {
        if (auth()->user()->hasRole('admin')){

            return Inertia::render('Admin/Offers/Index');
        } else {

            

            return Inertia::render('User/Numbers/Selection');
        }
    }



   





 // Step ================







}
