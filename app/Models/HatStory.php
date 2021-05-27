<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HatStory extends Model
{
    use HasFactory;

    protected $primaryKey = 'hat_id';

    protected $fillable = [
        'hat_id',
        'hat_name',
        'hat_text',
        'hat_image',
        'hat_size',
        'hat_color',
        'hat_material',
        'hat_pageone_text',
        'hat_pageone_image',
        'hat_pagetwo_text',
        'hat_pagetwo_imageone',
        'hat_pageone_imagetwo',
        'hat_hidden'
    ];
}
