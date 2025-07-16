<?php

namespace App\Livewire;

use App\Models\lado;
use App\Models\papel;
use App\Models\sistema_impresion;
use App\Models\Tipodocumento;
use Livewire\Component;


class AdminComponent extends Component
{
    public $papeles_list, $lados_list, $sistemas_list, $tipos_list ; 

    public function render()
    {
        $this->papeles_list = json_decode(papel::all());
        $this->lados_list = json_decode(lado::all());
        $this->sistemas_list = json_decode(sistema_impresion::all());
        $this->tipos_list = json_decode(Tipodocumento::all());
        
        return view('livewire.admin-component')->extends('layouts.app');
    }
}
