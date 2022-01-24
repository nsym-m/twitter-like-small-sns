<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
     * @return
     */
    public function getPagingAllUserTimeline()
    {
        return DB::table('comments')
            ->select([
                'comments.id',
                'comments.image',
                'comments.created_at',
                'users.user_code',
                'users.user_name',
                'users.profile_image',
            ])
            ->leftJoin('users', 'comments.user_id', '=', 'users.id')
            ->orderBy('comments.created_at')
            ->paginate();
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
