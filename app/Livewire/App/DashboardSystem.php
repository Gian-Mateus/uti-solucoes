<?php

namespace App\Livewire\App;

use Livewire\Component;
use Livewire\Attributes\Layout;

class DashboardSystem extends Component
{
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.app.dashboard-system');
    }
}
