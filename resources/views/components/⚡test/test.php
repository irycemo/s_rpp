<?php

use Livewire\Component;

new class extends Component
{

    public $field;

    public function updatedField(){

        $this->refresh();

    }


};