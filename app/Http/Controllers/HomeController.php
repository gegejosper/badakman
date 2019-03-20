<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Runner;
use App\Mail\RunnersMail;
use App\Mail\RemindMail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runners = DB::table('runners')->orderBy('id', 'desc')->simplePaginate(50);
        $totalMale = DB::table('runners')
                    ->where('gender', "Male")
                    ->get()
                    ->count();
        $totalFemale = DB::table('runners')
                    ->where('gender', "Female")
                    ->get()
                    ->count();
        $total21k = DB::table('runners')
                    ->where('distance', "21 K")
                    ->get()
                    ->count();
        $total10k = DB::table('runners')
                    ->where('distance', "10 K")
                    ->get()
                    ->count();
        $total6k = DB::table('runners')
                    ->where('distance', "6 K")
                    ->get()
                    ->count();                        
        $totalNotPaid = DB::table('runners')
                    ->where('payment', "not paid")
                    ->get()
                    ->count();
        $totalPaid = DB::table('runners')
                    ->where('payment', "paid")
                    ->get()
                    ->count(); 
        $totalXL = DB::table('runners')
                    ->where('payment', "paid")
                    ->where('shirtsize', "XL")
                    ->get()
                    ->count();
        $totalL = DB::table('runners')
                    ->where('payment', "paid")
                    ->where('shirtsize', "L")
                    ->get()
                    ->count();
        $totalM = DB::table('runners')
                    ->where('payment', "paid")
                    ->where('shirtsize', "M")
                    ->get()
                    ->count(); 
        $totalS = DB::table('runners')
                    ->where('payment', "paid")
                    ->where('shirtsize', "S")
                    ->get()
                    ->count();
        $totalXS = DB::table('runners')
                    ->where('payment', "paid")
                    ->where('shirtsize', "XS")
                    ->get()
                    ->count();          
        $NumRegistrants = count($runners);
        return view('admin.home', compact('runners', 'NumRegistrants', 'totalMale', 'totalFemale', 'totalNotPaid', 'totalPaid', 'total21k', 'total10k','total6k','totalXL','totalL', 'totalM','totalS','totalXS'));
    }
    public function sendMail()
    {
    	$myEmail = 'gegejosper@gmail.com';
    	Mail::to($myEmail)->send(new RunnersMail());
    	dd("Mail Send Successfully");
    }
    public function remindMail($id)
    {
        $runner = Runner::findOrFail($id);
        
        $email = $runner ->email;
        $refNo = $runner ->refNo;
        //$myEmail = 'gegejosper@gmail.com';
    	Mail::to($email )->send(new RemindMail($refNo));
    	dd("Mail Send Successfully");
    }
}
