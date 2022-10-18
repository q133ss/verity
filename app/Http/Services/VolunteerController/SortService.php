<?php
namespace App\Http\Services\VolunteerController;

use App\Models\Volunteer;

class SortService{
    /**
     * @param $field
     * @return mixed
     */
    static function sort($field) {
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
        return $volunteers;
    }
}
