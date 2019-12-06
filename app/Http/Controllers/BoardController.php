<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Board;

class BoardController extends Controller
{
    public function index()
    {
        // latest() = orderBy('created_at', 'desc')
        /*
           Boardレコードが10個あったとすると、Board全体を取得するのに1回、
           それから10個のBoardそれぞれに関連するPersonを取得するのに10回、
           合計11回もデータベースに問い合わせてしまう。
           これを「N+1問題」という。

           withメソッドで、N+1問題に対応する。
           これにより、
           ① まず、Boardだけを取得
           ② 得られたBoardのperson_idの値をまとめ、それらのIDのPersonを取得
           といったように、2回の問い合わせに減らすことができる。
        */
        $boards = Board::with('person')->latest()->get();

        return view('board.index', ['boards' => $boards]);
    }

    public function addGet(Request $request)
    {
        return view('board.add');
    }

    public function addPost(Request $request)
    {
        $board = new Board;
        $board->person_id = $request->person_id;
        $board->title = $request->title;
        $board->body = $request->body;
        $board->save();

        return redirect('/board');
    }

    public function show($id)
    {
        // findOrFail → 該当するレコードが見つからない場合に404ページを表示してくれる。
        // find → 該当するレコードが見つからない場合はエラー画面が表示される。
        $board = Board::findOrFail($id);

        return view('board.show', ['board' => $board]);
    }
}
