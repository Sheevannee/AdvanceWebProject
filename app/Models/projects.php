<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public $timestamps=false;

    protected $fillable = [
        'id',
        'name',
        'proj_type',
        'proj_title',
        'sdate',
        'edate',
        'duration',
        'progress',
        'status',
        'supervisors',
        'examiner_one',
        'examiner_two',
    ];

}
