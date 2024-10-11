<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use App\Http\Requests\PlanetRequest;

class PlanetController extends Controller
{
    // 詳細（show）ページへ移動
    public function show($id)
    {
        $planet = Planet::find($id);
        return view('planets.show', ['planet' => $planet]);
    }

    // 一覧（index）ページへ移動
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    // 新規投稿（create）ページへ移動
    public function create()
    {
        return view('planets.create');
    }

    // 新規投稿（store）データベースに保存処理
    public function store(PlanetRequest $request)
    {
        $planet = new Planet;

        $planet->name = $request->name;
        $planet->english_name = $request->english_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }

    // 編集画面（edit）ページ表示
    public function edit($id)
    {
        $planet = Planet::find($id);
        return view('planets.edit', ['planet' => $planet]);
    }

    // 編集を更新（update）
    public function update(PlanetRequest $request, $id)
    {
        $planet = Planet::find($id);

        $planet->name = $request->name;
        $planet->english_name = $request->english_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }

    // 削除（destroy）
    public function destroy($id)
    {
        $planet = Planet::find($id);
        $planet->delete();

        return redirect('/planets');
    }
}
