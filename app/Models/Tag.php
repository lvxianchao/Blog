<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * @package App\Models
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
