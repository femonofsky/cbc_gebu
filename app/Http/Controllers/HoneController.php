<?php

namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Request;

class HoneController extends Controller
{


    /**
     * Get the Weather Details
     * @param Request $request
     * @return Weather Model
     */
    public function get_weather_details(){
        $curl = curl_init();
        $url = "api.openweathermap.org/data/2.5/weather";
        $lon=4.1309;
        $lat=6.4975;
        $app_id = "ce43437d7cf89179f233b9f72887f505";
        $details = "?lon=".$lon."&lat=".$lat."&appid=".$app_id;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . $details,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
            ],
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        $responseObj = json_decode($response, true);

        $weather = new Weather();
        $weather->description = $responseObj["weather"][0]["description"];
        $weather->temperature = $responseObj["main"]["temp"] ;
        $weather->pressure = $responseObj["main"]["pressure"] ;
        $weather->humidity = $responseObj["main"]["humidity"];
        $weather->temp_min = $responseObj["main"]["temp_min"];
        $weather->temp_max = $responseObj["main"]["temp_max"] ;
        $weather->sea_level = $responseObj["main"]["sea_level"];
        $weather->grnd_level = $responseObj["main"]["grnd_level"];
        $weather->wind_speed = $responseObj["wind"]["speed"];
        $weather->wind_deg = $responseObj["wind"]["deg"];
        $weather->save();
        return $weather;
    }

    /**
     * Get home
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(){
        $details = [];
        if (count(Weather::get()) <= 0) {
            $weather = $this->get_weather_details();
        }
        else{
            $weather = Weather::get()->first();
        }
        $details['weather'] = $weather;
        return  view('index',$details);
    }
}
