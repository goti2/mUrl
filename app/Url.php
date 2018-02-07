<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = true;

    protected $fillable = ['target', 'segment', 'pin'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
