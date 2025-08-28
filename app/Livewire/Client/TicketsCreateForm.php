<?php

namespace App\Livewire\Client;

use Livewire\Component;

class TicketsCreateForm extends Component
{
    public $prioritySelected = "medium";
    public $priority = [
        ['id' => 'low', 'label' => 'Baixa'], 
        ['id' => 'medium', 'label' => 'Média'], 
        ['id' => 'high', 'label' => 'Alta'], 
        ['id' => 'urgent', 'label' => 'Urgente']
    ];

    public function render()
    {
        return view('livewire.client.tickets-create-form');
    }
}
