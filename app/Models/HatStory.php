<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HatStory extends Model
{
    use HasFactory;

    protected $primaryKey = 'hat_id';

    protected $fillable = [
        'hat_cover_title',
        'hat_cover_text',
        'hat_cover_image',
        'hat_cover_hover',
        'hat_cover_opacity',
        'hat_pageone_title',
        'hat_pageone_heading',
        'hat_pageone_text',
        'hat_pageone_image',
        'hat_pageone_hover',
        'hat_pageone_opacity',
        'hat_pagetwo_title',
        'hat_pagetwo_heading',
        'hat_pagetwo_text',
        'hat_pagetwo_image',
        'hat_pagetwo_hover',
        'hat_pagetwo_opacity'
    ];
}
