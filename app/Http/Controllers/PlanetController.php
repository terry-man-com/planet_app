<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $planet = new Planet;

        $planet->name = $request->name;
        $planet->english_name = $request->english_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect('/planets');
    }
}
