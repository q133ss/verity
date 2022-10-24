<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContributorController\PaymentRequest;
use App\Models\Contributor;
use App\Models\Country;


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

    public function payment(PaymentRequest $request)
    {
        //payment
        //if success
        $contributor = Contributor::create($request->validated());
        //Print cerificate
        return to_route('certificate.make', $contributor);
    }

    public function donate()
    {
        $countries = Country::get();
        return view('donate', compact('countries'));
    }
}
