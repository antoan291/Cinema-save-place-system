<?php

namespace App\Http\Controllers;
use App\Models\SeatsSeventhMovie;
use Illuminate\Http\Request;

class SeatsSeventhMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(SeatsSeventhMovie $seats)
    {
     return view('seats.seatsSeventhMovie',compact('seats'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seats = new SeatsSeventhMovie;
        
        $seats->id = $request->get('id');
        $seats->row_seats = $request->get('row_seats');
        $seats->seat_id = $request->get('seat_id');
        $seats->save();
    
        return redirect('/seventhMovie/seventhMovie');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seats = SeatsSeventhMovie::find($id);
   

        if ($seats != null) {
            $seats->delete();
            return redirect('/seventhMovie/seventhMovie')->with('success', 'Post Removed Succesfully !');
        }
    
        return redirect('/seventhMovie/seventhMovie')->with('status','Something went wrong !');    
    }
}
