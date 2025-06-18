<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;

class SchedulePdf extends Model
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'file_at_schedule'
    ];
}
