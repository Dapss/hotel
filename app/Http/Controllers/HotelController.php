<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $hotel = Hotel::all();
        return view('listhotel', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create_hotel');
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // $post = new Post;
        // $post->name=$request->name;
        // $post->address=$request->address;
        // $post->price=$request->price;
        // $post->image=$request->image;
        // $post->facilities=$request->facilities;
        // $post->about=$request->about;
        // $post->save();
        //  return redirect('/listhotel');
        // $this->authorize('create_hotel');
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'price' => 'required',
            'image' => 'required',
            'facilities' => 'required',
            'about' => 'required'
        ]);
        $input = $request->all();
        $hotel = Hotel::create($input);
        return redirect('/listhotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        $hotels = Hotel::all();
        return view('hoteldetails', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit',[
            'hotel'=> Hotel::findorfail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $hotel = Hotel::findorfail($id);
        $hotel->update($request->all());
        $hotel->save();
        return redirect('/listhotel');


        // $this->authorize('create_hotel');
        $request->validate([
            'name',
            'address',
            'price',
            'image',
            'facilities',
            'about'
        ]);
        $music = Music::find($id)->update($request->all());
        return redirect("todo")->with('success','Data telah di perbaharui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();

        return redirect()->route('hotel.index')->with('success', 'Hotel Is Deleted!');
    }
}
