<?php

namespace App\Http\Controllers;

use App\Models\Memo;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memos = Memo::all();

        return view('memos.index', compact('memos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $id = request()->id;
        $subid = request()->subid;
        $validated = request()->validate([
    		'id' => ['required','unique:memos,id,NULL,id,subid,' . $subid],
    		'subid' => ['required','unique:memos,subid,NULL,id,id,' . $id],
    		'memo' => ['required','min:3']
    	]);

    	Memo::create($validated);


    	return redirect('/memos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 未実装
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($memoid, $memosubid)
    {
        $memo = Memo::query()->where('id', $memoid)->where('subid', $memosubid)->first();

        return view('memos.edit', compact('memo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Memo $memo)
    {
        $newmemo = Memo::query()->where('id', request()->id)->where('subid', request()->subid)->first();
        $newmemo->memo = request()->memo;

    	$newmemo->update();

    	return redirect('/memos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Memo $memo)
    {
        // 未実装
    }
}
