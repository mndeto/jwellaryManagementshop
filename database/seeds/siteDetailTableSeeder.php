<?php

use Illuminate\Database\Seeder;

use App\siteDetail;

class siteDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        siteDetail::truncate();
        $siteDetail=new siteDetail();
        $siteDetail->Address="bhartpur13 ,rambag chitwan";
        $siteDetail->email="jonasahtserhs@gmail";
        $siteDetail->phone="9845419812";
        $siteDetail->save();
    }
}
