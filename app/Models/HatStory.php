<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HatStory extends Model
{
    use HasFactory;

    protected $fillable = [
        'hat_name',
        'hat_cover_title',
        'hat_pageone_title',
        'hat_pagetwo_title',
        'hat_contact_title',
        'hat_cover_text',
        'hat_pageone_text',
        'hat_pagetwo_text',
        'hat_contact_text',
        'hat_pageone_heading',
        'hat_pagetwo_heading',
        'hat_cover_image',
        'hat_pageone_image',
        'hat_pagetwo_image',
        'hat_contact_name',
        'hat_contact_phone',
        'hat_contact_email',
    ];
}
