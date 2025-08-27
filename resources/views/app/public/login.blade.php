<x-layouts.app>
    <div class="mx-auto mt-8 flex-1">
        <x-header 
            title="Login" 
            subtitle="Login para acesso ao sistema, vendas e chamados"
            separator
            class="text-primary"
        />
        <x-form method="POST" class="mt-10" action="{{ route('system.auth') }}">
            @method('POST')
            @csrf
            <div class="px-10 grid grid-cols-1 gap-4">
                <x-input label="Usuário" type="text" icon="o-user" name="login" placeholder="Usuário"/>
                <x-input label="Senha" type="password" icon="o-key" name="password" placeholder="*******"/>
                <x-menu-separator />
                <x-button type="submit" label="Entrar" class="btn btn-primary"/>
            </div>
        </x-form>
        <div class="mt-8 text-center">
            <a href="{{ route('forgot-password') }}" class="link-primary text-sm">
                Esqueceu sua senha? Clique aqui.
            </a>
        </div>
    </div>
</x-layouts.app>
