<?php

namespace App\Models;

use App\Models\Church;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChurchInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'pastors_name',
        'pastors_image',
        'church_image',
        'church_desc',
        'church_loc',
        'churchs_id'
    ];

    public function church()
    {
        return $this->belongsTo(Church::class);
    }
    public function churchinfos()
    {
        return $this->hasMany(Events::class);
    }
}
