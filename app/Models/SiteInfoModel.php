<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfoModel extends Model
{
    use HasFactory;
    public $table = 'site_info';
    public $primaryKey = 'site_id';
    public $incrementing = false;
    public $keyType = 'string';
    public $timestamps = false;
}
