<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $guared = array('id');
    public static $rules = array(
        'name' => 'required',
        'email' => 'required'
    );
    protected $fillable = ['name', 'email'];
}
