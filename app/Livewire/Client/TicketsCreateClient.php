<?php

namespace App\Livewire\Client;

use App\Models\Ticket;
use Mary\Traits\Toast;
use Livewire\Component;
use App\Models\ClientUser;
use App\Livewire\Forms\client\TicketsCreateForm;

class TicketsCreateClient extends Component
{
    use Toast;

    public TicketsCreateForm $form;

    public function save()
    {
        // All validation logic is now neatly contained within the Form Object.
        $ticketData = $this->form->validate();

        // Here you would typically handle the file uploads and add the paths to $ticketData
        // For example:
        if ($this->form->attachments) {
            $ticketData['attachments'] = collect($this->form->attachments)->map(function($file) {
                return $file->store('attachments');
            })->all();
        }

        $finalData = [
            ...$ticketData,
            'ticketable_id' => auth()->id(),
            'ticketable_type' => ClientUser::class,
        ];

        Ticket::create($finalData);

        $this->success('Ticket criado com sucesso!', redirectTo: route('client.tickets'));

        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.client.tickets-create');
    }
}
