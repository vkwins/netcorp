<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AgiLog;

class AgiLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AgiLog::truncate();
        $data = [
            [
                'year_mon'    => '2021-12-24 22:41:32',
                'count'       => '8036',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-33.920404',
                'lng'         =>'150.963785',
                'speed'       =>'60',
                'direction'   =>'120'
            ],            
            [
                'year_mon'    => '2021-11-24 22:41:32',
                'count'       => '698536',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-34.920404',
                'lng'         =>'151.963785',
                'speed'       =>'80',
                'direction'   =>'190'
            ],            
            [
                'year_mon'    => '2021-10-24 22:41:32',
                'count'       => '112036',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-31.920404',
                'lng'         =>'149.963785',
                'speed'       =>'55',
                'direction'   =>'160'
            ],            
            [
                'year_mon'    => '2021-09-24 22:41:32',
                'count'       => '3636',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-29.920404',
                'lng'         =>'130.963785',
                'speed'       =>'40',
                'direction'   =>'110'
            ],            
            [
                'year_mon'    => '2021-08-24 22:41:32',
                'count'       => '989036',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-29.920404',
                'lng'         =>'130.963785',
                'speed'       =>'40',
                'direction'   =>'110'
            ],            
            [
                'year_mon'    => '2021-07-24 22:41:32',
                'count'       => '3667',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-29.920404',
                'lng'         =>'130.963785',
                'speed'       =>'40',
                'direction'   =>'110'
            ],            
            [
                'year_mon'    => '2021-06-24 22:41:32',
                'count'       => '88036',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-29.920404',
                'lng'         =>'130.963785',
                'speed'       =>'40',
                'direction'   =>'110'
            ],            
            [
                'year_mon'    => '2021-05-24 22:41:32',
                'count'       => '56036',
                'vehicle_id'  => 1,
                'local_time'  => '2021-12-24 22:41:32',
                'lat'         => '-29.920404',
                'lng'         =>'130.963785',
                'speed'       =>'40',
                'direction'   =>'110'
            ]            
            ];

        AgiLog::insert($data);
    }
}
