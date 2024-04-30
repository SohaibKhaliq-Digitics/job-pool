<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'type', 'company_id', 'category','logo',
    ];

    public function company()
{
    return $this->belongsTo('App\Models\Company');
}


}
