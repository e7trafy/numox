<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Source extends Model
{
    use HasTranslations;

    public const IMAGEPATH = 'pages';

    public $translatable = ['name', 'description', 'title'];

    protected $fillable = [
        'page_id', 'name', 'title', 'description', 'image', 'is_available', 'extra_data',
    ];

    protected $casts = [
        'extra_data' => 'json',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id')->withTrashed();
    }

    public function getImageAttribute()
    {
        if ($this->attributes['image']) {
            $image = $this->getImage($this->attributes['image'], static::IMAGEPATH);
        } else {
            $image = $this->defaultPersonImage();
        }

        return $image;
    }

    public function setImageAttribute($value): void
    {
        if (\request('image')) {
            if ($value != null && is_file($value)) {
                $this->attributes['image'] = $this->uploadAllTypes($value, static::IMAGEPATH);
            }
        } else {
            $this->attributes['image'] = $value;
        }
    }

    public function features(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Feature::class, 'resourceable');
    }

    protected function asJson($value, $flags = 0): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | $flags);
    }
}
