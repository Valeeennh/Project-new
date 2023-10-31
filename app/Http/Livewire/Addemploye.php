<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;



class Addemploye extends Component
{
    public function render()
    {

            // Get semua data
    $provinces = Province::all();
    $regencies = Regency::all();
    $districts = District::all();
    $villages = Village::all();
        return view('livewire.addemploye',compact('provinces','regencies','districts','villages'));
    }




}
