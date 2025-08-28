<div>
    <x-form>
        <x-input 
            label="Título"
            placeholder="Ex.: Instalação de impressora"
        />
        <x-textarea 
            label="Descrição"
            placeholder="Ex.: Preciso instalar impressora Modelo XYZ no meu computador..."
        />

        <x-select
            label="Prioridade"
            wire:model="prioritySelected"
            :options="$priority"
            option-value="id"
            option-label="label" 
        />

        <x-image-library
            addFilesText="Adicionar imagens"
            label="Fotos"
            hint="Max 10Mb" 
        />

        <x-slot:actions>
            <x-button label="Cancelar" />
            <x-button label="Abrir" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
</div>
