<?php

namespace App\Http\Controllers;

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
        switch ($field){
            case 'lastname':
                $volunteers = Volunteer::orderBy('lastname')->get()
                    ->groupBy(function($item) {
                        return mb_substr($item->lastname, 0, 1);
                    });
                break;
            case 'patronymic':
                $volunteers = Volunteer::orderBy('patronymic')->get()
                    ->groupBy(function($item) {
                        return mb_substr($item->patronymic, 0, 1);
                    });
                break;
            default:
                $volunteers = Volunteer::orderBy('name')->get()
                    ->groupBy(function($item) {
                        return mb_substr($item->name, 0, 1);
                    });
                break;
        }
        return view('ajax.volunteers', compact('volunteers'))->render();
    }
}
