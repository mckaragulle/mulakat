<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckLetters extends Component
{
    
    public $counter;
    public $array = [];
    public $result;

    public function render()
    {
        return view('livewire.check-letters');
    }

    public function updatedCounter()
    {
        $this->array = str_split($this->counter);
        foreach($this->array as $k => $v){
            $key = $k-1<0?0:$k-1;
            if(count($this->array) == 1){
                $this->result = $v;
                break;
            }
            else if($this->array[$key] != $v){
                if(count($this->array) - 1 > $k && $this->array[$k+1] != $v){
                    $this->result = $v;
                    break;  
                }
            }
        }
    }
}
