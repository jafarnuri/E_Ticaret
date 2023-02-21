<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Haqqimizda;
use Illuminate\Support\Facades\File;

class HaqqimizdaController extends Controller
{

    public function haqqimizdaguncel(Request $request)
    {
        $haqqimizda=Haqqimizda::find('1');
        $haqqimizda->haqqimizda_baslik= $request->input('haqqimizda_baslik');
        $haqqimizda->haqqimizda_icerik= $request->input('haqqimizda_icerik');
        $haqqimizda->haqqimizda_vidio= $request->input('haqqimizda_vidio');
        $haqqimizda->update();
       return back()->with("status","Guncellenme basari ile bitmisdir");
    }

    public function logoguncel(Request $request)
    {
 
        $haqqimizda=Haqqimizda::find('1');
            if($request->hasfile('haqqimizda_logo'))
            {
               $deleteOldImage='dimg/haqqimizda/'.$haqqimizda->haqqimizda_logo;
               if(File::exists($deleteOldImage))
              {
                File::delete($deleteOldImage);
              }
              $image=$request->file('haqqimizda_logo');
              $imagename=time().'_'.uniqid().'.'.$image->getClientOriginalExtension();
              $image->move('dimg/haqqimizda',$imagename);
              $haqqimizda ->haqqimizda_logo = $imagename;
    
            }
            
            $haqqimizda->update();
            
        return back()->with("status","Guncellenme basari ile bitmisdir");
       

    }
}
