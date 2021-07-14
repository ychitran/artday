<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contents = Content::all();
        return view('admin.contents.list', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $content = new Content();
        $content->tittle = $request->input('tittle');
        $content->content = $request->input('content');
        $content->save();

        //Thông báo tạo thành công
        Session::flash('success', 'Add Content Successfully');

        return redirect()->route('contents.index');
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

    public function about()
    {
        $contents = Content::all();
        return view('frontend.about.about', compact('contents'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $content = Content::findOrFail($id);
        return view('admin.contents.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $content = Content::findOrFail($id);
        $content->tittle = $request->input('tittle');
        $content->content = $request->input('content');
        $content->save();

        //Thông báo tạo thành công
        Session::flash('success', 'Update Content Successfully');

        return redirect()->route('contents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $content = content::findOrFail($id);
        $content->delete();

        //Thông báo tạo thành công
        Session::flash('success', 'Deleted Successfully');

        return redirect()->route('contents.index');
    }
}
