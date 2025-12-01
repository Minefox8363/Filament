<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'url',
        'user_id',
    ];

    /**
     * Get the user who can access the site.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
