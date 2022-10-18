<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecommendController\StoreRequest;
use App\Models\Recommender;

class RecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommends = Recommender::get();
        return view('admin.recommends.index', compact('recommends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recommends.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Recommender::create($request->validated());
        return to_route('admin.recommend.index')->withSuccess('Волонтер успешно добавлен');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recommender = Recommender::find($id);
        return view('admin.recommends.edit', compact('recommender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        Recommender::find($id)->update($request->validated());
        return to_route('admin.recommend.index')->withSuccess('Рекомендатель успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recommender::find($id)->delete();
        return to_route('admin.recommend.index')->withSuccess('Рекомендатель удален');
    }
}
