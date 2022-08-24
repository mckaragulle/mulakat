<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckBrackets extends Component
{
    public $counter;
    public $array = [];
    public $status = 0;
    public $result = "true";

    public function render()
    {
        return view('livewire.check-brackets');
    }

    public function updatedCounter()
    {
        $this->array = str_split($this->counter);
        $this->status = 0;
        foreach ($this->array as $key => $value) {
            if($value == "("){
                $this->status += 1; 
            }
            else if($value == ")"){
                $this->status -= 1; 
            }
            
            if($this->status < 0){
                $this->result = "false";
                break;
            }
            else {
                $this->result = "true";
            }            
        }
    }
}
