<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Todos')]
class Todos extends Component
{

    public $todo = "";
    public $error ="";
    public $todos = [];


    //se utiliza mayormente para inicializar cosas
    public function mount(){
        $this->todos = [
            "Spiderman","Thor","wolverine"
        ];
    }

    public function updated($property, $value){

        $this->$property = strtoupper($value);

    }

    public function add(){

        if($this->todo != null){
            $this->error = "";
            $this->todos[] = $this->todo;
        }else{
            $this->error = "Ingrese un valor";
        }


        //$this->todo = "";
        $this->reset("todo");

    }

    public function render()
    {
        return view('livewire.todos');
    }
}
