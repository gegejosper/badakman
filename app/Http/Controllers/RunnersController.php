<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Runner;
use DB;
use Mail;
use App\Mail\RunnersMail;
class RunnersController extends Controller
{
   
    public function index()
    {
        //

        //$runners = Runner::paginate();
        //$runners = DB::table('runners')->where('payment', 'not paid')->simplePaginate(50);
        $runners = DB::table('runners')->simplePaginate(50);
        return view('registrants', compact('runners'));
    }

    public function registrants()
    {
        $runners = DB::table('runners')->orderBy('id', 'desc')->simplePaginate(50);
        $NumRegistrants = count($runners);
        return view('admin.registrants', compact('runners', 'NumRegistrants'));
    }
    public function adminRegistrant($id)
    {
        $runner = Runner::find($id);
         return view('admin.registrant', compact('runner'));
    }


    public function create()
    {
        //
        return view('index');
    }


    public function store(Request $request)
    {
        //
        //return $request->all();
        //get Racebib ID

        $racebib = DB::table('racebib')
            ->where('id', 1)
            ->first();
        $racebib->twentyk;    
        $runner = new Runner;
        $runner->fname = $request->fname;
        $runner->lname = $request->lname;
        $runner->gender = $request->gender;
        $runner->address = $request->address;
        $runner->dob = $request->dob;
        $runner->age = $request->age;
        $runner->distance = $request->distance;
        //$runner->type = $request->type;
        $runner->shirtsize = $request->shirtsize;
        $runner->team = $request->team;
        $runner->phone = $request->phone;
        $runner->contactperson = $request->contactperson;
        $runner->contactnumberperson = $request->contactnumberperson;
        $runnersemail = $request->email;
        $runner->email = $runnersemail;
        $runner->agree = $request->agree;
        $refNo = $this->generateRefNo();
        $runner->refNo = $refNo;
        
        $distance = $request->distance;
        switch ( $distance) {
                case '21 K':
                    # code...
                    $lastRaceBibNum = $racebib->twentyk + 1;
                    $runner->racebib = $lastRaceBibNum;
                    DB::table('racebib')
                    ->where('id', 1)
                    ->update(['twentyk' =>  $lastRaceBibNum]);
                    break;
                case '10 K':
                    $racebib->tenk;
                    $lastRaceBibNum = $racebib->tenk + 1;
                    $runner->racebib = $lastRaceBibNum;
                    DB::table('racebib')
                    ->where('id', 1)
                    ->update(['tenk' =>  $lastRaceBibNum]);
                    break;
                case '6 K':
                    $racebib->sixk;
                    $lastRaceBibNum = $racebib->sixk + 1;
                    $runner->racebib = $lastRaceBibNum;
                    DB::table('racebib')
                    ->where('id', 1)
                    ->update(['sixk' =>  $lastRaceBibNum]);
                    break;
                default:
                    break;
        }
        
        $runner->payment = "not paid";
        $runner->save();
        Mail::to($runnersemail)->send(new RunnersMail($refNo));
        return redirect('thankyou?refNo='.$refNo);


        //Runner::create($request->all());
    }

    //$voucher->code = $this->generateRandomString(6);// it should be dynamic and unique 

    public  function generateRefNo($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= ucwords($characters[rand(0, $charactersLength - 1)]);
            }
            return $randomString;
    }

    public function show($id)
    {
        //
        
        $runner = Runner::find($id);
         return view('registrant', compact('runner'));
    }

    public function genderShow($gender)
    {
        //
        
        $runners = DB::table('runners')
                    ->where('gender', $gender)
                    ->simplePaginate(50);
        $NumRegistrants = count($runners);
         return view('admin.registrants', compact('runners', 'NumRegistrants'));
    }
    public function distanceShow($distance)
    {
        //
        
        $runners = DB::table('runners')
                    ->where('distance', $distance)
                    ->simplePaginate(50);
        $NumRegistrants = count($runners);
         return view('admin.registrants', compact('runners', 'NumRegistrants'));
    }
    public function paymentShow($payment)
    {
        //
        
        $runners = DB::table('runners')
                    ->where('payment', $payment)
                    ->simplePaginate(50);
        $NumRegistrants = count($runners);
         return view('admin.registrants', compact('runners', 'NumRegistrants'));
    }


    public function edit($id)
    {
         $runner = Runner::findOrFail($id);
         return view('runners.edit', compact('runner'));
    }


    public function update(Request $request, $id)
    {
        $runner = Runner::find($id);
        $runner->update($request->all());
        return redirect('admin/runners/'.$id);
        //return "succeed";
    }

    public function destroy($id)
    {
        $runner = Runner::find($id);
        $runner->delete();
        return redirect('admin/registrants');
    }
    public function updatePayment($id)
    {
        //
       // $runner = Runner::find($id);
        //$runner->update($runner->payment = "paid");
        

        DB::table('runners')
            ->where('id', $id)
            ->update(['payment' => 'paid']);
           //return redirect()->action('RunnersController@index');
           return redirect('admin/registrants');
    }

    public function nameSearch(Request $request){
        $q = $request->input('q');

        $runners = Runner::latest()
            ->search($q)
            ->paginate(50);
        $NumRegistrants = count($runners);
         return view('admin.registrants', compact('runners', 'NumRegistrants'));
        
        //return $query->where('name', 'LIKE', %search%);
    }
}
