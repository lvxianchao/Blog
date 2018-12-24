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
     * 可填充字段
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'content'];
    
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
}
