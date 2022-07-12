<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\MyClass\ExchangeRate;

class ExchangeRateController extends Controller
{
    public function index(){
        return view('panel.main');
    }

    public function getExchangeRate(Request $request){
        $choice = $request->input('choice');
        $response = Http::get(asset('http://api.nbp.pl/api/exchangerates/rates/B/'.$choice));
       foreach ($response['rates'] as $rate){
           $exchangeRate=  new ExchangeRate((string) $rate["effectiveDate"], (string) $rate["mid"]);
       }
       echo $exchangeRate->getRate() . ' ' . $exchangeRate->getEffectiveDate();
    }
}
