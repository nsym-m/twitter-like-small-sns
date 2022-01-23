<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'content',
        'image',
    ];

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getPagingAllUserTimeline()
    {

    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getPagingOnlyUserTimeline()
    {

    }
}
