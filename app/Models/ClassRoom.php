<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ClassRoom extends Model
{
    use HasFactory , HasTranslations;
    public $translatable = ['Name_Class'];
    protected $fillable = [
        'Name_Class',
        'grade_id',
    ];
    public function Grades()
    {
        return $this->belongsTo(Grade::class , 'grade_id');
    }
}
