<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    use HasFactory;

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
}
