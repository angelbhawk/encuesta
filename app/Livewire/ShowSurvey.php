<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class ShowSurvey extends Component
{
    public $preguntas;
    public $secciones;
    public $numero;

    public function mount()
    {
        $this->consultar();
        //dump($this->preguntas);
    }

    public function render()
    {
        return view('livewire.show-survey');
    }

    public function consultar()
    {
        $this->preguntas = DB::table('preguntas')
        ->where('Encuesta', 4)
        ->get()
        ->toArray();

        $this->secciones = DB::table('preguntas')
        ->select('Clasificacion')
        ->where('encuesta', 4)
        ->distinct()
        ->get()
        ->toArray();

        $this->numero = count($this->preguntas);
    }
}
