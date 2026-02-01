<?php

use Livewire\Component;

new class extends Component
{
    public $field;

    public function updatedField(){



    }
};
?>

<div>


    <input type="text" wire:model.live="field">

    {{  $field }}

</div>