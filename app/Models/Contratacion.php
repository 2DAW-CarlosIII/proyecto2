<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratacion extends Model
{
    use HasFactory;
    protected $table = 'contratacion';
    protected $primaryKey = array('idtutor','dia','mes','anyo');
    public $timestamps = false;
}
