<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    use HasFactory;

    use Translatable;
    public $translatedAttributes = ['name', 'appointments'];

    protected $fillable = [
    'name',
    'email',
    'email_verified_at',
    'password',
    'phone',
    'price',
    'section_id',
    'appointments',
];

//protected $guared=[];


/**
     * Get the Doctor's image.
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }


    public function section(){
        return $this->belongsTo(Section::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

}
