<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasTranslations, SoftDeletes, UploadTrait;

    const IMAGEPATH = 'documents';

    public const general = 1;

    public const home = 2;

    public const products = 3;

    public const partners = 8;

    public const contact = 4;

    public const aboutUs = 5;

    public const pricing = 6;

    public const faqs = 7;

    public const resources = 9;

    public const contactUs = 10;

    public $translatable = ['name', 'title', 'description', 'content'];

    protected $fillable = [
        'name', 'title', 'description', 'content', 'image', 'extra_data',
    ];

    protected $casts = [
        'extra_data' => 'json',
    ];

    public function getAvatarAttribute()
    {
        if ($this->attributes['image']) {
            $image = $this->getImage($this->attributes['image'], static::IMAGEPATH);
        } else {
            $image = $this->defaultPersonImage();
        }

        return $image;
    }

    public function setImageAttribute($value)
    {
        if (\request('image')) {
            if ($value != null && is_file($value)) {
                $this->attributes['image'] = $this->uploadAllTypes($value, static::IMAGEPATH);
            }
        } else {
            $this->attributes['image'] = $value;
        }
    }

    protected function asJson($value, $flags = 0): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | $flags);
    }
}
