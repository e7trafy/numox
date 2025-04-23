<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Fqs extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'description', 'question', 'answer'];

    protected $fillable = [
        'page_id', 'name', 'description', 'image', 'question', 'answer', 'is_available', 'extra_data',
    ];

    protected $casts = [
        'extra_data' => 'json',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id')->withTrashed();
    }

    protected function asJson($value, $flags = 0): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE | $flags);
    }
}
