<?php


namespace App\Http\Controllers;


use App\link;
use Illuminate\Http\Request;


class linkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = link::latest()->paginate(5);


        return view('links.index',compact('links'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('links.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'url' => 'required',
			'description' => 'required',
        ]);


        link::create($request->all());


        return redirect()->route('links.index')
                        ->with('success','link created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(link $link)
    {
        return view('links.show',compact('link'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit(link $link)
    {
        return view('links.edit',compact('link'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, link $link)
    {
         request()->validate([
            'title' => 'required',
            'url' => 'required',
			'description' => 'required',
        ]);


        $link->update($request->all());


        return redirect()->route('links.index')
                        ->with('success','link updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(link $link)
    {
        $link->delete();


        return redirect()->route('links.index')
                        ->with('success','link deleted successfully');
    }
}