<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * ユーザーをフォローするアクション。
     *
     * @param  $id  対象ポストのid
     * @return \Illuminate\Http\Response
     */
    public function store(string $id)
    {
        // 認証済みユーザー（閲覧者）が、 idのポストをお気に入りする
        \Auth::user()->favorite(intval($id));
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * 対象のポストをお気に入り解除するアクション。
     *
     * @param  $id  対象ポストのid
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        // 認証済みユーザー（閲覧者）が、 idのポストをお気に入り解除する
        \Auth::user()->unfavorite(intval($id));
        // 前のURLへリダイレクトさせる
        return back();
    }
}
