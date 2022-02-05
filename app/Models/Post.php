<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

/**
 * @property-read string $render_body
 * @property string $body
 * @property string $title
 **/
class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'title',
      'body'
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->whereNull('comment_id');
    }

    public function getRenderBodyAttribute(): Stringable
    {
        return Str::of($this->body)->limit(1000);
    }
}
