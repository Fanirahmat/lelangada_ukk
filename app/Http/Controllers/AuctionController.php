<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function history()
    {
        return view('user.history');
    }

    public function payment()
    {
        return view('user.payment');
    }
    
    public function create()
    {
        return view('user.create');
    }

    public function own()
    {
        return view('user.own');
    }

    public function showOwn()
    {
        $auction = \App\Auction::where('auctioner_id', \Auth::user()->id)->get();
        echo json_encode($auction);
    }

    public function store(Request $req)
    {
        \Validator::make($req->all(),[
            "name" => "required",
            "description" => "required",
            "start_price" => "required",
            "image" => "required",
            "status" => "required"
        ])->validate();

        $new = new \App\Auction;
        $new->auctioner_id = \Auth::user()->id;
        $new->name = $req->get('name');
        $new->description = $req->get('description');
        $new->start_price = $req->get('start_price');
        $new->status = $req->get('status');
        $new->image = $req->file('image')->store('auction_image','public');
        $new->save();
        if ($req->get('status') == 'dibuka') {
            return redirect()->route('auction.create')->with('status','Auction successfully saved and opened');
        } else {
            return redirect()->route('auction.create')->with('status','Auction successfully saved as closed');
        }
    }

    
    public function show($id)
    {
        
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
        //
    }
}
