<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $dates = ['created_at'];
    protected $table = "article";
    protected $fillable = [
          'title',
          'body',
          'published_at'
        ];


    public function scopeCreated($query){
        $query ->where('created_at', '<=', Carbon::now());
    }

    public function scopeUncreated($query){
        $query ->where('created_at', '>', Carbon::now());
    }


    public function setPublishedAtAttribute($date){
        $this->attributes['created_at'] = Carbon::parse($date);
    }


}
