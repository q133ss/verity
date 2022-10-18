<?php

namespace App\Http\Controllers;

use App\Http\Services\VolunteerController\SortService;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index()
    {
        $volunteers = Volunteer::orderBy('lastname')->get()
            ->groupBy(function($item) {
            return mb_substr($item->lastname, 0, 1);
        });
        return view('volunteers', compact('volunteers'));
    }

    public function sort($field)
    {
        $volunteers = SortService::sort($field);
        return view('ajax.volunteers', compact('volunteers'))->render();
    }

    public function search($request)
    {
        $volunteers = Volunteer::withSearchFio($request)->orderBy('lastname')->get()
            ->groupBy(function($item) {
                return mb_substr($item->lastname, 0, 1);
            });
        return view('ajax.volunteers', compact('volunteers'))->render();
    }

    public function searchCity($city)
    {
        $volunteers = Volunteer::withSearchCity($city)->orderBy('lastname')->get()
            ->groupBy(function($item) {
                return mb_substr($item->lastname, 0, 1);
            });
        return view('ajax.volunteers', compact('volunteers'))->render();
    }
}
