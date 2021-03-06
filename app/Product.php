<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
  protected $fillable = ['title', 'model_number', 'top_image', 'explain', 'is_accepted', 'thumbnail_id', 'brand_id'];


  protected $hidden = array('pivot');

  public function product_images()
  {
    return $this->hasMany('App\ProductImage');
  }

  public function project_images()
  {
    return $this->belongsToMany('App\ProjectImage');
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }

  public function brands()
  {
    return $this->belongsTo('App\Brand', 'brand_id', 'id');
  }
}
