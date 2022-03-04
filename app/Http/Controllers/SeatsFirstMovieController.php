<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\SeatsFirstMovie;
use Illuminate\Http\Request;

class SeatsFirstMovieController extends Controller
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
    public function index(SeatsFirstMovie $seats)
    {     
        $request = new Request;
        $row_seats_4 = $seats;
        $row_seats_4 ->row_seats = 4;

        return view('seats.seatsFirstMovie',compact('seats','row_seats_4'));
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
         
        $seats = new SeatsFirstMovie;
        
        $seats->id = $request->get('id');
        $seats->row_seats = $request->get('row_seats');
        $seats->seat_id = $request->get('seat_id');
        $seats->save();
    
        return redirect('/seats/firstMovie');
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
    public function destroy($id,Request $request)
    {
    $seats = SeatsFirstMovie::find($id);
   

    if ($seats != null) {
        $seats->delete();
        return redirect('/seats/firstMovie')->with('success', 'Post Removed Succesfully !');
    }

    return redirect('/seats/firstMovie')->with('status','Something went wrong !');
       
    }

}