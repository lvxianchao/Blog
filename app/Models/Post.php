<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @package App\Models
 */
class Post extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'slug', 'content'];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    /**
     * @param $value
     */
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = htmlentities($value);
    }
    
    /**
     * @param $value
     *
     * @return string
     */
    public function getContentAttribute($value)
    {
        return html_entity_decode($value);
    }
}
