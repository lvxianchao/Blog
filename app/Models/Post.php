<?php

namespace App\Models;

use App\Category;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @package App\Models
 */
class Post extends Model
{
    /**
     * 可填充字段
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'content', 'category_id'];
    
    /**
     * 关联标签模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    
    /**
     * 写入数据时，去除 content 字段实体字符
     *
     * @param $value
     */
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = htmlentities($value);
    }
    
    /**
     * 读取数据时，转义 content 字段实体字符
     *
     * @param $value
     *
     * @return string
     */
    public function getContentAttribute($value)
    {
        return html_entity_decode($value);
    }
    
    /**
     * SEO URL
     *
     * @param array $params
     *
     * @return string
     */
    public function link(array $params = [])
    {
        return route('admin.posts.show', array_merge([$this->id, $this->slug], $params));
    }
    
    /**
     * 关联分类模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
