<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    public function links() {
        $this->belongsTo('Apps\Banner', 'id', 'banner_id');
    }
}
