<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\queue;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function barcode(){
        return view('barcode');
    }
    public function mainINDEX(){
        return view('main.index');
    }

    public function mainMC(){
        return view('main.mc');
    }

    public function postMC(Request $request){

        $mc = 'Motorcycle';
        $date1=queue::orderBy('id', 'desc')->first()->date;
        $qnum=queue::where('vehicleType',$mc)->orderBy('id', 'desc')->first()->number;
        $date2 = Carbon::today();

        if ($date1 == Carbon::today()->format('Y-m-d')) {
            $insert = new queue();
            $insert->number = $qnum + 1;
            // $insert->number = 1;
            if($request->flexRadioDefault == 'Regular'){
                $insert-> category = 'Regular';
            }
            elseif($request->flexRadioDefault == 'TODA'){
                $insert-> category = 'TODA';
            }
            elseif($request->flexRadioDefault == 'Club Rider Member'){
                $insert-> category = 'Club Rider Member';
            }
            elseif($request->flexRadioDefault == 'Company'){
                $insert-> category = 'Company';
            }
            elseif($request->flexRadioDefault == 'Government'){
                $insert-> category = 'Government';

            }
            $insert->coordinator = $request->input('coordinator');
            $insert->vehicleType = 'Motorcycle';
            $insert-> date = Carbon::today();

        }elseif ($date1 != Carbon::today()->format('Y-m-d')){
            $insert = new queue();
            $insert->number = 1;
            if($request->flexRadioDefault == 'Regular'){
                $insert-> category = 'Regular';
            }
            elseif($request->flexRadioDefault == 'TODA'){
                $insert-> category = 'TODA';
            }
            elseif($request->flexRadioDefault == 'Club Rider Member'){
                $insert-> category = 'Club Rider Member';
            }
            elseif($request->flexRadioDefault == 'Company'){
                $insert-> category = 'Company';
            }
            elseif($request->flexRadioDefault == 'Government'){
                $insert-> category = 'Government';
            }
            $insert->vehicleType = 'Motorcycle';
            $insert-> date = Carbon::today();

        }

        $insert->save();
        $insert -> id;
        $insert -> number;
        return view('barcode', ['id' => $insert->id], ['num' => $insert->number]);

    }

    public function postLV(Request $request){

        $mc = 'Light Vehicle';
        $date1=queue::orderBy('id', 'desc')->first()->date;
        $qnum=queue::where('vehicleType',$mc)->orderBy('id', 'desc')->first()->number;
        $date2 = Carbon::today();

        if ($date1 == Carbon::today()->format('Y-m-d')) {
            $insert = new queue();
            $insert->number = $qnum + 1;
            // $insert->number = 1;
            if($request->flexRadioDefault == 'Regular'){
                $insert-> category = 'Regular';
            }
            elseif($request->flexRadioDefault == 'For Hire'){
                $insert-> category = 'For Hire';
            }
            elseif($request->flexRadioDefault == 'Company'){
                $insert-> category = 'Company';
            }
            elseif($request->flexRadioDefault == 'Government'){
                $insert-> category = 'Government';

            }
            $insert->coordinator = $request->input('coordinator');
            $insert->vehicleType = 'Light Vehicle';
            $insert-> date = Carbon::today();

        }elseif ($date1 != Carbon::today()->format('Y-m-d')){
            $insert = new queue();
            $insert->number = 1;
            if($request->flexRadioDefault == 'Regular'){
                $insert-> category = 'Regular';
            }
            elseif($request->flexRadioDefault == 'For Hire'){
                $insert-> category = 'For Hire';
            }
            elseif($request->flexRadioDefault == 'Company'){
                $insert-> category = 'Company';
            }
            elseif($request->flexRadioDefault == 'Government'){
                $insert-> category = 'Government';
            }
            $insert->vehicleType = 'Light Vehicle';
            $insert-> date = Carbon::today();

        }
        $insert->save();
        return redirect('index');

    }

    public function mainLV(){
        return view('main.lv');
    }


}
