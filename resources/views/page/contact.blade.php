<x-layouts.page>
  <div class="flex w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    <main class="flex w-full flex-col items-center">
      <div class="w-md mt-10">
        <x-header title="Já cliente?" subtitle="Caso seja, faça login para abrir um chamado ->" separator class="text-primary">
          <x-slot:actions>
              <x-button label="Login" class="btn-primary" link="{{ route('login') }}"/>
          </x-slot:actions>
        </x-header>
      </div>

      {{-- Formulário de envio --}}
      <x-form class="w-lg">
        <x-input 
          label="Nome" 
          placeholder="Ex.: João da Silva ou Empresa Ltada"
          name="name"
        />

        <x-input 
          label="Assunto" 
          placeholder="Ex.: Computador não liga"
          name="title"
        />

        <x-input 
          label="E-mail" 
          placeholder="exemplo@mail.com.br"
          name="email"
        />
        
        <x-input 
          label="E-mail" 
          placeholder="exemplo@mail.com.br"
          name="email"
        />

        <x-textarea 
          label="Mensagem"  
          placeholder="Descreva o seu problema ou dúvida aqui..." 
          hint="Máximo 1000 caracteres" 
          rows="5" 
          name="description"
        />

        <x-slot:actions>
            <x-button label="Enviar" class="btn-primary" type="submit"/>
        </x-slot:actions>
      </x-form>
    </main>
</div>
</x-layouts.page>