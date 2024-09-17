<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['Name_Section'];

    protected $fillable = [
        'Name_Section',
        'Status',
        'Grade_id',
        'Class_id',
    ];

    public function classRooms()
    {
        return $this->belongsTo(ClassRoom::class, 'Class_id');
    }

    public function grades()
    {
        return $this->belongsTo(Grade::class, 'Grade_id');
    }
}
