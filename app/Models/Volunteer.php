<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function getFio()
    {
        return $this->name.' '.$this->lastname.' '.$this->patronymic;
    }
}
