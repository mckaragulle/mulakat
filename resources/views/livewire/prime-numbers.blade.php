<li>
    <hr>
    <h4>ASAL SAYI</h4>
    <input type="text" wire:model="target">
    <hr>
    <p>Sonuç: {{($primes[(int)($target)-1])??'No prime found'}}</p>
    <hr>
    <p>{{print_r($primes??[])}}</p>
</li>