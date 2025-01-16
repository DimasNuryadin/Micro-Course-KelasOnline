<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageCourse extends Model
{
    protected $table = 'image_course';

    protected $fillable = [
        'course_id',
        'image'
    ];
}
