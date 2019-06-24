<?php

namespace App\Http\Controllers\Jisuan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class JisuanController extends Controller
{
	public function index(){
        return view("jisuan.jisuan");
    }

    public function result(){
        $baoe     = $_POST["baoe"];
        $nianlilu = $_POST["nianlilu"];
        $pal      = $_POST["pal"];
        $k  = (1+$pal) /(1+$nianlilu);
        $scrs = array(1000000,997091,995081,993618,992511,991646,990950,990376,989892,989475,989105,988763,988427,988075,987684,987233,986711,986117,985456,984742,983992,983226,982456,981689,980936,980199,979475,978762,978051,977337,976611,975856,975006,974232,973346,972396,971368,970255,969043,967719,966271,964676,962928,961009,958902,956592,954049,951251,948177,944804,941095,937028,932558,927650,922279,916407,909988,902949,895252,886849,877671,867685,856832,845026,832209,818335,803380,787226,769820,751102,731046,709630,686814,662566,636894,609848,581440,551742,520885,488988,456246,422898,389141,355211,321430,288113,255563,224117,194101,165834,139619,115661,94182,75255,58906,45095,33676,24504,17333,11879,7882,5060,3130,1861,1061,579);
        $sun = 0;
        for ($i=0;$i<18;$i++) { 
        	$l = ($scrs[$i]-$scrs[$i+1])/$scrs[0];
         	$sun +=$baoe*pow($k,$i+1)*$l;
        } //计算得出A1 == $sun
       	
       	$A2 = ($baoe/2 )*pow($k,18)*$scrs[18]/$scrs[0]; ////计算得出A2 
        
        $sum2 = 0;
        for ($i=0;$i<43;$i++) { 
        	$l = ($scrs[$i+18]-$scrs[$i+19])/$scrs[18];
         	$sum2 +=($baoe/2)*pow($k,$i+1)*$l;
        } //计算得出A3 == $sum2

        $A4 =  ($baoe/2)*pow($k,42)*$scrs[60]/$scrs[18];
        $all = $sun+$sum2+$A2+$A4;

       	$R= 0 ;
       	$pp=0 ; 
        for ($i=0; $i < 45 ; $i++) { 
        	$q60 = ($scrs[60+$i]-$scrs[61+$i])/$scrs[60];
        	$pp += ($i+1)*$q60;
        }
        $R = $baoe/(2*$pp);
        //return $R;
        $return_arr  = array('all' => $all,'R'=>$R );
        return json_encode($return_arr);//"保费为：".$all."万元"."<br>"."养老金为：".$R."万元";
    }
}