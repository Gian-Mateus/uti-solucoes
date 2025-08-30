<div>
    <x-form wire:submit="save" >
        <div class="grid grid-cols-2 gap-8 min-w-lg">
            <div class="cols-1 w-md">
                <x-input 
                    label="Título"
                    placeholder="Ex.: Instalação de impressora"
                    wire:model="form.title"
                    required
                />
                <x-textarea 
                    label="Descrição"
                    placeholder="Ex.: Preciso instalar impressora Modelo XYZ no meu computador..."
                    wire:model="form.description"
                    required
                />
        
                <x-select
                    label="Tipo"
                    wire:model="form.typeSelected"
                    :options="$form->type"
                    option-value="id"
                    option-label="label" 
                    required
                />
            </div>
    
            <div class="cols-1">
                <x-select
                    label="Prioridade"
                    wire:model="form.prioritySelected"
                    :options="$form->priority"
                    option-value="id"
                    option-label="label"
                    required
                />
        
                <x-image-library
                    wire:model="form.attachments"
                    addFilesText="Adicionar imagens e vídeos"
                    label="Arquivos"
                    hint="Max 10Mb" 
                />
            </div>
        </div>

        <x-slot:actions>
            <x-button label="Cancelar" />
            <x-button label="Abrir" class="btn-primary" type="submit" spinner="save" />
        </x-slot:actions>
    </x-form>
</div>
