<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atricle extends Model
{
    use HasFactory;

    protected $fillable = ["title", "full_text", "tag_id"];
    protected $appends = ["image_path"];

    // Get the path of image
    public function getImagePathAttr(){
        return asset("uploads/articles/" . $this->image);
    }

    /**
     * Get all of the tags for the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    /**
     * Get the category associated with the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(Category::class);
    }

}
