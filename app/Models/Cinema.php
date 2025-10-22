<?php

namespace App\Models;

use App\Models\Hall;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $city
 * @property string|null $address
 * @property string|null $latitude
 * @property string|null $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Hall> $halls
 * @property-read int|null $halls_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cinema extends Model
{

    protected $fillable = [
        'name',
        'city',
        'address',
        'latitude',
        'longitude',
        'thumbnail',
    ];

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }
}
