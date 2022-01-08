<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AgiLogController extends Controller
{

    public function show($id)
    {
        $agiLogs = DB::table('agi_log')
                        ->select( DB::raw('COUNT(vehicle_id) as count'), DB::raw('DATE_FORMAT(local_time, "%Y-%m") as year_mon'))
                        ->where('vehicle_id',$id)
                        ->orderBy(DB::raw('DATE_FORMAT(local_time, "%Y-%m")'),'desc')
                        ->groupBy(DB::raw('DATE_FORMAT(local_time, "%Y-%m")'))                        
                        ->get();

        $id      = $id;
        $vehicle = DB::table('vehicles')->select('name')->where('id',$id)->first();
        //dd($name);
        
        return view( 'agilog.listing',[
            'agiLogs'=>$agiLogs,
            'id'=>$id,
            'vehicle'=>$vehicle
        ]);
    }

    public function lastInfo($id)
    {
        $lastInfo = DB::table('agi_log')
                        ->join('vehicles', 'vehicles.id', '=', 'agi_log.vehicle_id')
                        ->select('vehicles.name', 'vehicles.id', 'agi_log.lat','agi_log.lng','agi_log.speed','agi_log.direction', 'agi_log.local_time')
                        ->where('vehicles.id',$id)
                        ->whereNotNull('agi_log.lng')
                        ->whereNotNull('agi_log.lat')
                        ->orderBy('agi_log.local_time')
                        ->first();

        if(!empty($lastInfo)){
            $location           = $this->location($lastInfo->lat,$lastInfo->lng);
            $lastInfo->location = $location;                
        }

        return view( 'agilog.lastInfo',[
            'lastInfo'=>$lastInfo
        ]);
    }

    protected function location($lat,$lng){
        $key      = 'AqrpK_b1lckZjNLrnOsEpLjuqsD0W43B9KnoHzITuX1U65qtzs6t_ermmJ38QnlK';
        $endpoint = 'https://dev.virtualearth.net/REST/v1/Locations/'.$lat.','.$lng;
        $client   = new \GuzzleHttp\Client();

        $response = $client->request('GET', $endpoint, ['query' => [
            'o'   => 'xml', 
            'key' => $key,
        ]]);
        
        $statusCode = $response->getStatusCode();

        if($statusCode == 200){
            $xml       = $response->getBody();
            $xmlObject = simplexml_load_string($xml);
                        
            $json    = json_encode($xmlObject);
            $array   = json_decode($json, true);
            $address = $array['ResourceSets']['ResourceSet']['Resources']['Location']['Address']['FormattedAddress'];    
        }else{
            $address = 'NA';
        }
        
        return $address;
    }

}