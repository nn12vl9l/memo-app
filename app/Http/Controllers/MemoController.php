<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    //indexページへ移動
    public function index()
    {
        // モデル名::テーブル全件取得
        $memos = Memo::all();
        // memosディレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view ('memos.index', ['memos' => $memos]);
    }

    //showページへ移動
    public function show($id)
    {
        $memo = Memo::find($id);
        return view('memos.show', ['memo' => $memo]);
    }

        public function create()
    {
        return view('memos.create');
    }

    public function store(Request $request)
    {
        //インスタンスの生成
        $memo = new Memo;

        //値の用意
        $memo->title = $request->title;
        $memo->body = $request->body;

        //インスタンスに値を設定して保存
        $memo->save();

        //登録したらindexに戻る
        return redirect('/memos');
    }

    public function edit($id)
    {
        $memo = Memo::find($id);
        return view('memos.edit', ['memo' => $memo]);
    }

    public function update(Request $request, $id)
    {
        $memo = Memo::find($id);

        $memo->title = $request->title;
        $memo->body = $request->body;

        $memo->save();

        return redirect('/memos');
    }

    public function destroy($id)
    {
        $memo = Memo::find($id);
        $memo->delete();

        return redirect('/memos');
    }
}
