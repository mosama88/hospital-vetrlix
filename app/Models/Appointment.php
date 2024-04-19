<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    use Translatable;
    public $translatedAttributes = ['name'];

    protected $fillable = ['name'];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

}
