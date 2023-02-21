<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank; 

class BankController extends Controller
{
    public function bankguncel($id , Request $request)
    {

        $banka_ad=$request->banka_ad;
        $banka_iban=$request->banka_iban;
        $banka_hesapadsoyad=$request->banka_hesapadsoyad;
        
        Bank::whereId($id)->update([
            "banka_ad"=>$banka_ad,
            "banka_iban"=>$banka_iban,
            "banka_hesapadsoyad"=>$banka_hesapadsoyad,
            
        ]);


        return back()->with("status","Guncellenme basari ile bitmisdir");
       

    }  

    public function banksil($id)
    {

         $banka=Bank::find($id);
            
         $banka->delete();


        return back()->with("status","Silinme islemi basari ile bitmisdir");
       

    } 

    public function bankkaydet( Request $request)
    {

       $banka =new Bank();
       $banka ->banka_ad= $request->input('banka_ad');
       $banka ->banka_iban= $request->input('banka_iban');
       $banka ->banka_hesapadsoyad= $request->input('banka_hesapadsoyad');
       $banka->save();
       
        return back()->with("status","Kayt basari ile bitmisdir");
       

    }   

}
