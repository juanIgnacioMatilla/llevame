<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DBl;



class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function showSortedTrips(Request $request){
       $posteos = \App\Trip::where('to', 'like',$request->input('to'))->orwhere('from', 'like',$request->input('from'))->orwhere('time', 'like',$request->input('time'))->orwhere('date', 'like',$request->input('date'))->get();

       foreach ($posteos as $key => $posteo) {
            $user = \App\User::find($posteo['user_creator_id']);

            $posteo['user'] = $user;
            $posteo['usersConfirmed'] = [];  
        }

       echo json_encode($posteos);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $test = new \App\Trip;

            $test->to = $request->input('to');
            $test->from = $request->input('from');
            $test->time = $request->input('time');
            $test->date = $request->input('date');
            $test->passengers = (int) $request->input('passengers');
            $test->price = (int) $request->input('price');
            $test->user_creator_id = (int) $request->input('userId');
            $test->save();
            echo json_encode($test);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showUser($id){
        $user = \App\User::where('id','=',$id)->get();
        echo json_encode($posteos);
    }

    public function showTrips(){

        



        $posteos = \App\Trip::all();
        //$posteos = array_reverse($posteos->toArray());

        //$posteos = collect($posteos);

        //dd($posteos->all());
        



        // foreach ($posteos as $key => $value) {
        //     $posteoPrevio = $posteos[$key];

        //     $posteos[$key] = $posteos[$posteos->count()-$key-1];

        //     $posteos[$posteos->count()-$key-1] = $posteoPrevio; 
        // }
    
        foreach ($posteos as $key => $posteo) {
            $user = \App\User::find($posteo['user_creator_id']);

            $posteo['user'] = $user;
            $posteo['usersConfirmed'] = [];  
        }
        echo json_encode($posteos);
    }

    public function confirmTrip(Request $request){
        $user = \App\User::find($request->input('userId'));
        $trip = \App\Trip::find($request->input('tripId'));
        $user->trips()->attach($request->input('tripId'));

        echo json_encode($user);
    }
    public function showUserTrips(Request $request){


        $posteosIds = \DB::table('trips-users')->where('user_id',$request->input('userId'))->get();
        $posteos = [];
        foreach ($posteosIds as $key => $id) {            
            $posteo = \App\Trip::find($id->trip_id);

            $user = \App\User::find($posteo['user_creator_id']);

            $posteo['user'] = $user;

            $posteo['usersConfirmed'] = [];  

            array_push($posteos, $posteo);
        }
        echo json_encode($posteos);
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
    public function updateProfile(Request $request)
    {
        $user = \App\User::find(Auth::user()->id);

        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->profile_pic = $request->input('profile_pic');
        $user->work = $request->input('work');
        $user->birthday = $request->input('birthday');
        $user->location = $request->input('location');
        $user->born_in = $request->input('born_in');
        $user->studies = $request->input('studies');
        $user->music = $request->input('music');
        $user->hobbies = $request->input('hobbies');
        $user->phone = $request->input('phone');

        $user->save();

        return json_encode($user);
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
