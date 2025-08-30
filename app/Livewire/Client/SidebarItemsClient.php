<?php

namespace App\Livewire\Client;

use Livewire\Component;

class SidebarItemsClient extends Component
{
    public function render()
    {

        $items = [
            [
                'label' => 'Dashboard',
                'icon' => 'o-presentation-chart-bar',
                'link' => route("client.home"),
            ],
            [
                'label' => 'Chamados',
                'icon' => 'o-phone',
            ],
            [
                'label' => 'Financeiro',
                'icon' => 'o-currency-dollar'
            ],

        ];

        return view('livewire.client.sidebar-items', ['items' => $items]);
    }
}
