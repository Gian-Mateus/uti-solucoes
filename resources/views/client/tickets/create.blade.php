<x-layouts.client>
    <x-header title="Chamado" class="text-primary" separator>
        <x-slot:actions>
            <x-button label="Voltar" icon="o-arrow-left" link="" />
        </x-slot:actions>
    </x-header>

    <div>
        <x-card 
            title="Novo Chamado" 
            subtitle="Solicitação de suporte" 
            class="max-w-md"
            shadow separator>
            <livewire:client.tickets-create-form />
        </x-card>
    </div>
</x-layouts.client>
