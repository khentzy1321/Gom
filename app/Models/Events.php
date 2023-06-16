<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'events_name',
        'events_img',
        'events_desc',
        'events_date',
        'events_id'
    ];

    public function events()
    {
        return $this->belongsTo(ChurchInfo::class, 'events_id');
    }
}
