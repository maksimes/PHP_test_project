<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Banner extends Model
{
    //
    protected $fillable = ['title', 'slug', 'added', 'text', 'created_by', 'modified_by'];

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }

    public function banners() {
        $this->hasOne('App/Link', 'banner_id', 'id');
    }
}
