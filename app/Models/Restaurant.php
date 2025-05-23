<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    protected $fillable = ['name'];

    public function schedules(): HasMany
    {
        return $this->hasMany(RestaurantSchedule::class);
    }
}
