<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'roteiros', 'img_roteiros', 'texto_viajar', 'texto_lazer',
        'img_viajar_1', 'img_viajar_2', 'img_viajar_3', 'img_viajar_4'
    ];
}
