<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getContributor()
    {
        return $this->hasOne(Contributor::class, 'id','contributor_id');
    }
}
