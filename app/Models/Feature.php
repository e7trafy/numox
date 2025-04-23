<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Feature extends Model
{
    use HasTranslations, UploadTrait;

    const IMAGEPATH = 'pages';

    public $translatable = ['title', 'description', 'content'];

    protected $fillable = [
        'resourceable_id', 'resourceable_type', 'title', 'description', 'content', 'image', 'extra_data',
    ];

    protected $casts = [
        'extra_data' => 'json',
    ];

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

    public function resourceable()
    {
        return $this->morphTo();
    }

    protected function asJson($value, $flags = 0): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | $flags);
    }
}
