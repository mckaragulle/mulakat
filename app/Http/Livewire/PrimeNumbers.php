<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrimeNumbers extends Component
{

    public $target = 1;
    public $primes = [];
    public $current = 1;

    public function mount(){
        $this->updatedTarget();
    }

    public function render()
    {
        return view('livewire.prime-numbers');
    }

    public function updatedTarget()
    {
        $this->primes = [0 => 2];
        $this->current = 1;

        while(count($this->primes) < $this->target){
            for($i = 1; $i < $this->current; $i++){
                if($this->current % $i == 0 && $i != 1){
                    break;
                }
                
                if($this->current - 1 == $i && !in_array($this->current, $this->primes)){
                    $this->primes[] = $this->current;
                }
            }
            $this->current++;
        }
    }
}
