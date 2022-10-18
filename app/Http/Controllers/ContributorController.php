<?php

namespace App\Http\Controllers;

use App\Models\Contributor;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function index()
    {
        $contributors = Contributor::orderBy('created_at', 'DESC')->get();
        return view('contributors', compact('contributors'));
    }

    public function sort($field)
    {
        $contributors = Contributor::withSort($field)->get();
        return view('ajax.contributors', compact('contributors'));
    }

    public function search($query)
    {
        $contributors = Contributor::withFilterFio($query)->get();
        return view('ajax.contributors', compact('contributors'));
    }

    public function searchCity($query)
    {
        $contributors = Contributor::withFilterCity($query)->get();
        return view('ajax.contributors', compact('contributors'));
    }
}
