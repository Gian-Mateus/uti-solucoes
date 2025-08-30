<div>
    <x-header title="Chamado" class="text-primary" separator>
        <x-slot:actions>
            <x-button label="Voltar" icon="o-arrow-left" link="" />
        </x-slot:actions>
    </x-header>

    <div class="flex flex-col">
        <x-card 
            title="Novo Chamado" 
            subtitle="Solicitação de suporte"
            class="mr-auto"
            shadow separator>
            <livewire:client.tickets-create-form />
        </x-card>
    </div>
</div>
