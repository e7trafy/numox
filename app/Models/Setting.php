<?php

namespace App\Models;

use App\Traits\UploadTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory, UploadTrait;

    const IMAGEPATH = 'settings';

    protected $fillable = ['key', 'value'];

    /** Start : casts */

    /** logo */
    public function logo($value)
    {
        $name = $this->uploadAllTypes($value, static::IMAGEPATH);
        return $name;
    }

    /** End : casts */

    /*** Start : Relations */

    /*** End : Relations */
}
