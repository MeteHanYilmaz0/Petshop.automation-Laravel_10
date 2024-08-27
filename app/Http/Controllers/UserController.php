<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bakim;
use App\Models\Besin;
use App\Models\Hayvan;
use App\Models\Personel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getbakim()
    {
        $bakimss = Bakim::all();
        return view('userPanel.bakim', compact('bakimss'));
    }

    public function  getPersonel(){
        $personels=Personel::all();

        return view("userPanel.personel",compact("personels"));
    }
    public function getBesin(){
        $besins=Besin::all();
        return view("userPanel.besin",compact("besins"));
    }

    public function getHayvan(){
        $hayvans=Hayvan::all();

        return view("userPanel.hayvan",compact("hayvans"));
    }

}
