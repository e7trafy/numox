<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Client extends Model
{
    use HasTranslations, UploadTrait;

    const IMAGEPATH = 'pages';

    public $translatable = ['name', 'description'];

    protected $fillable = [
        'page_id', 'name', 'description', 'image', 'is_available', 'extra_data',
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

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id')->withTrashed();
    }

    protected function asJson($value, $flags = 0): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | $flags);
    }
}
