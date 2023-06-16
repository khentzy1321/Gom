<?php

namespace App\Models;

use App\Models\Baranggay;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Church extends Model
{
    use HasFactory;

    protected $table = 'churches';
    
    protected $fillable = [
        'church_location',
    ];


    public function churchinfo()
    {
        return $this->hasMany(ChurchInfo::class);
    }
}
