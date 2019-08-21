<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Space;
use App\Booking;
use App\Bookinglist;
use Validator;
use App\Http\Requests\BookingRequest;


class BookingController extends Controller
{
    public function sessionCheck($req){
        if($req->session()->has('username')){
            return true;
        }else{
            return false;
        }
    }

    public function index(Request $req){

        if($this->sessionCheck($req)){
            return view('booking.index');
        }else{
            return redirect()->route('login.index');
        }

    }

    public function add(Request $req, $bid){
        if($this->sessionCheck($req)){
            //$get = DB:table('bookinglist')->where('spaceId', $req->spaceId)->get();
            $b = Bookinglist::find($bid);
            $get = DB::table('bookinglists')->where('spaceId', $bid)->get();
            $req->session()->put('spaceId', $get[0]->spaceId);

            return view('booking.add', ['std'=> $b]);
        }else{
            return redirect()->route('login.index');
        }

    }
    
    public function create(BookingRequest $req, $bid){
        if($this->sessionCheck($req)){

            $spaceId = $req->session()->get('spaceId');
            $abc = DB::table('spaces')->where('spaceId', $spaceId)->get();
            

                $test = DB::table('bookinglists')->where('name', $req->name)->where('price', $req->price)->get();
                
                if (count($test) > 0) {

                    $req->session()->flash('msg', "You have already added the food");
                
                    return redirect()->route('booking.add', ['std'=> $spaceId]);
                }else{

                    $bookinglist = new Bookinglist();

                    $bookinglist->name = $req->name;
                    $bookinglist->details = $req->details;
                    $bookinglist->price = $req->price;
                    $bookinglist->spaceId = $abc[0]->spaceId;
                    $bookinglist->rname = $abc[0]->name;
                
                    
                    $bookinglist->save();

                    $result = DB::table('bookinglists')->where('name', $req->name)->get();
                    
                    $xyz = $abc[0]->name;
                    //echo "insert compleat";
                    
                    return redirect()->route('booking.details', $result[0]->id);                           
                

                }

            

        }else{
            return redirect()->route('login.index');
        }


    }

    public function details(Request $req, $bid){

        if($this->sessionCheck($req)){
            
            $b = Bookinglist::find($bid);
            return view('booking.details', ['std'=> $b]);
        }else{
            return redirect()->route('login.index');
        }
    }

    public function show(Request $req){
        if($this->sessionCheck($req)){

            $std = Bookinglist::all();
            return view('booking.show', ['bookinglist'=>$std]);

        }else{
            return redirect()->route('login.index');
        }

    }

    public function more(Request $req){
        if($this->sessionCheck($req)){

            $all = Booking::all();
            $c = Booking::all()->count();

            return view('booking.more', ['newlist'=> $all], ['count'=>$c]);

        }else{
            return redirect()->route('login.index');
        }


    }

    public function total(Request $req){

        if($this->sessionCheck($req)){
            
            $spaceId = $req->session()->get('spaceId');

            $b = DB::table('bookinglists')->where('spaceId', $spaceId)->get();
            $c = DB::table('bookinglists')->where('spaceId', $spaceId)->get()->count();
            //$c = DB::table('bookinglists')->where('spaceId', $spaceId)->get()->count();          
            //echo $b;
            $result = json_decode($b, true);

            return view('booking.total', ['newlist'=> $result], ['count'=>$c]);
        
        }else{
            return redirect()->route('login.index');
        }

    }

    public function edit(Request $req, $bid){
        if($this->sessionCheck($req)){

            $b = Booking::find($bid);
            return view('booking.edit', ['std'=> $b]);
        
        }else{
            return redirect()->route('login.index');
        }

    }

    public function update(BookingRequest $req, $bid){
        if($this->sessionCheck($req)){

            $id = DB::table('bookinglists')->where('name', $req->psname)->get();
            $sum = DB::table('spaces')->where('name', $req->psname)->get();

            $booking = new Booking();

            $booking = Booking::find($bid);

            $booking->name = $req->name;
            $booking->email = $req->email;
            $booking->number = $req->number;
            $booking->psname = $req->psname;
            $booking->bookinglistID = $id[0]->id;
            $booking->location = $id[0]->location;
            $booking->date = $req->date;
            $booking->time = $req->time;
            $booking->duration = $req->duration;
            $booking->vnumber = $req->vnumber;
            $booking->type = $req->type;
            
            $a = (int)$req->duration;
            $b = (int)$sum[0]->charge;
            $c = $a * $b;

            $booking->tc = $c;    
            $booking->save();

            $bookinglist = new Bookinglist();

            $bookinglist = Bookinglist::find($id[0]->id);
            $bookinglist->name = $id[0]->name;
            $bookinglist->location = $id[0]->location;
            $count = DB::table('bookings')->where('psname', $booking->psname)->get()->count();
            //$bookinglist->count = DB::table('bookings')->groupBy('psname')->count();

            $x = (int)$count;
            $y = $x * $b;

            $bookinglist->tc = $y;

            $bookinglist->save();
                
            return redirect()->route('booking.more', $bid);

        }else{
            return redirect()->route('login.index');
        }

        
    }

    public function delete(Request $req, $bid){
        
        if($this->sessionCheck($req)){
            //echo "test";
            $b = Booking::find($bid);
            return view('booking.delete', ['std'=> $b]);

        }else{
            return redirect()->route('login.index');
        }

    }

    public function destroy(Request $req, $bid){
        if($this->sessionCheck($req)){

                Booking::destroy($bid);

                return redirect()->route('booking.more');

        }else{
            return redirect()->route('login.index');
        }


    }

    
    
    


}