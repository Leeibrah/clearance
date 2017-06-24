<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;

class FrontendController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {   

        return view('auth.login');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {   

        return view('frontend.about');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function services()
    {   

        return view('frontend.services');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function contacts()
    {   

        return view('frontend.contacts');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function loanLending()
    {   

        return view('frontend.services.loan-lending');
    }


    /**
     * @return \Illuminate\View\View
     */
    public function salaryAdvance()
    {   

        return view('frontend.services.salary-advance');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function invoiceDiscounting()
    {   

        return view('frontend.services.invoice-discounting');
    }


    public function carbon(){

        printf("<br/>");
        $dt = Carbon::now();
        // var_dump($dt->toDateTimeString() == $dt);          // bool(true) => uses __toString()
        echo $dt->toDateString();
        printf("<br/>");
        // echo $dt->setDate(08,26,2016)->toDateString();

        // Laravel will know how to handle this
        $dateTime = Carbon::now();

        // Specify the format you want to save to the database
        $date = Carbon::now()->format('Y-m-d');
        dd($date);
    }
}
