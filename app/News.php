<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   	protected $table="news";
   	protected $fillable=[
   		"title_vi",
   		"title_en",
   		"title_jp",
   		"img",
   		"content_vi",
   		"content_en",
   		"content_jp",
   	];
}
