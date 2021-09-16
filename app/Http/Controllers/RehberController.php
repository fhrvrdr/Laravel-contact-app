<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rehber;
use App\Http\Requests\RehberCreateRequest;
use App\Http\Requests\RehberUpdateRequest;

use Illuminate\Support\Facades\Auth;


class RehberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kisiler = Rehber::where('user_id', Auth::id())->paginate(5);
        return view('rehber', compact('kisiler'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RehberCreateRequest $request)
    {

        $request['user_id'] = Auth::id();
        Rehber::create(
            $request->all()

        );

        return redirect()->route('rehber')->withSuccess('Kişi Başarıyla Eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rehber = Rehber::find($id) ?? abort(404, 'Kisi Bulunamadı');
        return view('edit', compact('rehber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RehberUpdateRequest $request, $id)
    {
        $rehber = Rehber::find($id) ?? abort(404, 'Kisi Bulunamadı');
        $rehber->update($request->validated());
        return redirect()->route('rehber')->withSuccess('Kişi Başarıyla Güncellendi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rehber = Rehber::find($id) ?? abort(404, 'Kisi Bulunamadı');
        $rehber->delete();
        return redirect()->route('rehber')->withSuccess('Kişi Başarıyla Silindi');
    }
}
