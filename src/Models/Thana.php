<?php

namespace Sandofvega\Bdgeocode\Models;

use Illuminate\Database\Eloquent\Model;
use Znck\Eloquent\Traits\BelongsToThrough;

class Thana extends Model
{
    use BelongsToThrough;

    public function unions()
    {
        return $this->hasMany(Union::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function division()
    {
        return $this->belongsToThrough(Division::class, District::class);
    }
}