<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function scopeWithSort($query, $field)
    {
        switch ($field){
            case 'old':
                return $query->orderBy('created_at', 'ASC');
            case 'sum-high':
                return $query->orderBy('sum', 'DESC');
            case 'sum-low':
                return $query->orderBy('sum', 'ASC');
            default:
                return $query->orderBy('created_at', 'DESC');
        }
    }

    public function scopeWithFilterFio($query, $request)
    {
        return $query->where('name', 'LIKE', '%'.$request.'%');
    }

    public function scopeWithFilterCity($query, $request)
    {
        return $query->where('city', 'LIKE', '%'.$request.'%');
    }

    public function Certificate()
    {
        return $this->hasOne(Certificate::class, 'contributor_id', 'id');
    }

    public function getFio()
    {
        return $this->lastname.' '.$this->name.' '.$this->patronymic;
    }
}
