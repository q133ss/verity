<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Volunteer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getSocials()
    {
        return json_decode($this->socials, true);
    }

    public function getSocial($value)
    {
        $socials = $this->getSocials();
        return $socials[$value];
    }

    /**
     * @return string
     */
    public function getFio() : string
    {
        return $this->lastname.' '.$this->name.' '.$this->patronymic;
    }

    public function scopeWithSearchFio($query, $request)
    {
        return $query->where('name', 'LIKE', '%'.$request.'%')
                    ->orWhere('lastname', 'LIKE', '%'.$request.'%')
                    ->orWhere('patronymic', 'LIKE', '%'.$request.'%');
    }

    public function scopeWithSearchCity($query, $city)
    {
        return $query->where('city', 'LIKE', '%'.$city.'%');
    }
}
