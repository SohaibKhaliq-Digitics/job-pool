<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'img', 'name', 'email', 'phone', 'cv', 'company_id',
    ];
    public function company()
{
    return $this->belongsTo('App\Models\Company', 'company_id');
}
}
