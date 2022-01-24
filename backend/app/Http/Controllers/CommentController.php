<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CommentStoreRequest;

class CommentController extends Controller
{
    private Comment $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * コメント登録
     *
     * @param CommentStoreRequest $request
     * @return json
     */
    public function post(CommentStoreRequest $request)
    {
        // TODO: 画像保存

        // TODO: 投稿登録
    }

    /**
     * 全ユーザーのタイムライン
     *
     * @return JsonResponse
     */
    public function allUserTimeline()
    {
        return response()->json([
            'data' => $this->comment->getPagingAllUserTimeline()
        ]);
    }

    /**
     * 自分だけのタイムライン
     *
     * @return JsonResponse
     */
    public function onlyUserTimeline()
    {
        return response()->json([
            'data' => $this->comment->getPagingAllUserTimeline()
        ]);
    }
}
