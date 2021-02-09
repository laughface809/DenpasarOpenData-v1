<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
      return $this->belongsTo(User::class);
    }

    public static function findBySlug($slug)
    {
      return static::where('slug', $slug)->first();
    }

    public static function findByCategory($category_id)
    {
      return static::where('category_id', '2')->first();
    }

    public function visits()
    {
    return visits($this);
    }

}
