<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ["name", "full_text", "category_id", "image"];
    protected $appends = ["image_path"];


    // Get the path of image
    public function getImagePathAttribute(){
        return asset("uploads/articles/" . $this->image);
    }


    /**
     * The tags that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
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
