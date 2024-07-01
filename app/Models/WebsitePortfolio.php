<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsitePortfolio extends Model
{
    use HasFactory;


    public $table = "website_portfolios";

    protected $fillable = [
        'name',
        'link',
        'upload',
        'category',
        'status',
    ];
}
