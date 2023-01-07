<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more features",
                "category"=>"mobile",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
               ],
    
               [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A smart Tv with much more features",
                "category"=>"tv",
                "gallery"=>"https://s.yimg.com/aah/yhst-39276693957820/panasonic-viera-th-l32s10s-full-hd-multisystem-lcd-tv-for-110-240-volts-30.gif"
               ],
    
               [
                'name'=>'Sony Tv',
                "price"=>"500",
                "description"=>"A tv with much more features",
                "category"=>"tv",
                "gallery"=>"https://www.cnet.com/a/img/resize/bc36984b696f67224fae2e9424e2fe1749974bf9/hub/2011/01/07/8c66fdac-f0f7-11e2-8c7c-d4ae52e62bcc/BRAVIA_XBR-HX920.jpg?auto=webp&width=1092"
               ],
    
               [
                'name'=>'LG Fridge',
                "price"=>"200",
                "description"=>"A fridge with much more features",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYP%20JA&usqp=CAU"
               ],
        ]);
    }
}
