<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    public $table = 'applicant';
    public $primaryKey = 'applicant_id';
    public $incrementing = false;
    public $keyType = 'string';
    public $timestamps = false;
}
