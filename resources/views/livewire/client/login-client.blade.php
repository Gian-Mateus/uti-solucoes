<div>
    <div class="mx-auto mt-8 relative">
        <x-header 
            title="Login" 
            subtitle="Faça login para abrir chamados, visualizar históricos, acessar faturas e muito mais."
            separator
            class="text-primary"
        />
        <x-form class="mt-10" wire:submit="authenticate">
            <div class="px-10 grid grid-cols-1 gap-4">
                <x-input label="Usuário" type="text" icon="o-user" wire:model="login" placeholder="usuario.empresa"/>
                <x-input label="Senha" type="password" icon="o-key" wire:model="password" placeholder="*******"/>
                <x-menu-separator />
                <x-button type="submit" label="Entrar" class="btn btn-primary"/>
            </div>
        </x-form>
        <div class="mt-8 text-center">
            <a href="{{ route('client.forgot-password') }}" class="link-primary text-sm">
                Esqueceu sua senha? Clique aqui.
            </a>
        </div>
    </div>
</div>
