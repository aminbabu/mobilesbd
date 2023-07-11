<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'thumbnail',
        'phone',
        'street_1',
        'street_2',
        'city',
        'state',
        'country',
        'description',
        'brand_1_id',
        'brand_2_id',
        'brand_3_id',
        'brand_4_id',
        'social_platform_1',
        'social_platform_link_1',
        'social_platform_2',
        'social_platform_link_2',
        'social_platform_3',
        'social_platform_link_3',
        'social_platform_4',
        'social_platform_link_4',
        'social_platform_5',
        'social_platform_link_5',
        'services',
        'sat_start',
        'sat_end',
        'sun_start',
        'sun_end',
        'mon_start',
        'mon_end',
        'tue_start',
        'tue_end',
        'wed_start',
        'wed_end',
        'thur_start',
        'thur_end',
        'fri_start',
        'fri_end',
    ];
}