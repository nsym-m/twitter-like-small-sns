<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Models\User;
use App\Models\Comment;
use App\Http\Requests\UserEditRequest;

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
     * @return json
     */
    public function allUserTimeline()
    {
        return $this->comment->getPagingAllUserTimeline();
    }

    /**
     * 自分だけのタイムライン
     *
     * @return json
     */
    public function onlyUserTimeline()
    {
        return $this->comment->getPagingAllUserTimeline();
    }


}
