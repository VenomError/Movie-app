<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property int $user_id
 * @property int $show_time_id
 * @property \Illuminate\Support\Carbon $booking_time
 * @property numeric $total_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Seat> $seats
 * @property-read int|null $seats_count
 * @property-read ShowTime $showTime
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereBookingTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereShowTimeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Booking whereUserId($value)
 * @mixin \Eloquent
 */
	class Booking extends \Eloquent {}
}

namespace App\Models{
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
 * @property string|null $thumbnail
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Cinema whereThumbnail($value)
 */
	class Cinema extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $cinema_id
 * @property string $name
 * @property int $total_seat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Cinema $cinema
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Seat> $seats
 * @property-read int|null $seats_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ShowTime> $showTimes
 * @property-read int|null $show_times_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereCinemaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereTotalSeat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hall whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Hall extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $duration
 * @property string $genre
 * @property int $rating
 * @property string|null $thumbnail
 * @property \Illuminate\Support\Carbon $release_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, MovieImage> $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, ShowTime> $showTimes
 * @property-read int|null $show_times_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereReleaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Movie getNowShowing()
 */
	class Movie extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $movie_id
 * @property \App\Models\Movie|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MovieImage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class MovieImage extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $hall_id
 * @property string $seat_code
 * @property string $seat_number
 * @property SeatType $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Booking> $bookings
 * @property-read int|null $bookings_count
 * @property-read Hall $hall
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereHallId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereSeatCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereSeatNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Seat whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Seat extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $movie_id
 * @property int $hall_id
 * @property \Illuminate\Support\Carbon $start_time
 * @property numeric $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Booking> $bookings
 * @property-read int|null $bookings_count
 * @property-read Hall $hall
 * @property-read Movie $movie
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime whereHallId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShowTime whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ShowTime extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $phone
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Booking> $bookings
 * @property-read int|null $bookings_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User admin()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User costumer()
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User withoutRole($roles, $guard = null)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

