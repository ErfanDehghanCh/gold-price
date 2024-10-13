<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use SimpleXMLElement; 

class GoldPriceController extends Controller
{

   
        public function index()  
        {  
            $apiKey = '6YA3V46Q768M2WFE'; // Replace with your Alpha Vantage key  
            $symbol = 'GOLD'; // You'll need to find the correct symbol for gold if available  
            $response = Http::get("https://www.alphavantage.co/query", [  
                'function' => 'TIME_SERIES_DAILY',  
                'symbol' => $symbol,  
                'apikey' => $apiKey  
            ]);  
        
            $data = $response->json();  
        
            if (isset($data['Time Series (Daily)'])) {  
                $latestDate = array_key_first($data['Time Series (Daily)']);  
                $latestData = $data['Time Series (Daily)'][$latestDate];  
                $goldPrice = $latestData['4. close']; // Close price  
                return view('goldprice.index', ['goldPrice' => $goldPrice]);  
            } elseif (isset($data['Error Message'])) {  
                return view('goldprice.index', ['error' => 'Error fetching data']);  
            } else {  
                return view('goldprice.index', ['error' => 'Unexpected response structure']);  
            }   
    }  
    }  

