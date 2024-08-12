<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;

    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id',
        'name',
        'birthday',
        'biodata'
    ];

    public static function hasCreatedUserProfile(int $userId): bool
    {
        return self::where('user_id', '=', $userId)->exists();
    }

    public static function initializeIfNotExist(int $userId): void
    {
        if (self::hasCreatedUserProfile($userId)) {
            return;
        }

        self::create(['user_id' => $userId]);
    }

    public function userProfile()
    {
        return $this->belongsTo(User::class);
    }
}
