<?php

namespace App;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * 关联文章模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
