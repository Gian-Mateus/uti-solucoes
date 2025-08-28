<div>
    <div class="text-primary">
        <x-header title="Dashboard" separator/>

        <x-button 
            label="Novo Chamado" 
            icon="o-plus" 
            link="{{ route('client.tickets.create') }}"
            class="btn btn-primary"
        />
    </div>

    <div class="grid md:grid-cols-4 gap-4 mb-8 mt-4">
        <x-stat
            title="Chamados Abertos"
            value="4"
            icon="o-ticket"
            class="bg-base-200"
            color="text-blue-500" />

        <x-stat
            title="Horas no Contrato"
            value="15 / 20h"
            description="3 novas horas este mês"
            icon="o-clock"
            class="bg-base-200"
            color="text-green-500" />

        <x-stat
            title="Horas Extras Utilizadas"
            value="2.5h"
            description="Custo: R$ 250,00"
            icon="o-exclamation-triangle"
            class="bg-base-200"
            color="text-orange-500" />

        <x-stat
            title="Faturas Pendentes"
            value="R$ 180,00"
            description="1 fatura vencida"
            icon="o-currency-dollar"
            class="bg-base-200"
            color="text-red-500" />
    </div>

    {{-- Conteúdo Principal --}}
    <div class="grid lg:grid-cols-3 gap-8">
        {{-- Tabela de Chamados Recentes (ocupa 2/3 do espaço) --}}
        <div class="lg:col-span-2">
            <x-card title="Chamados Recentes" shadow separator>
                @php
                    $headers = [
                        ['key' => 'id', 'label' => '#'],
                        ['key' => 'subject', 'label' => 'Assunto'],
                        ['key' => 'status', 'label' => 'Status', 'class' => 'text-center'],
                        ['key' => 'updated_at', 'label' => 'Última Atualização'],
                    ];

                    $tickets = [
                        ['id' => 819, 'subject' => 'Impressora Fiscal não emite cupom', 'status' => 'Aberto', 'updated_at' => 'Hoje, 14:30'],
                        ['id' => 812, 'subject' => 'Computador do financeiro está lento', 'status' => 'Em Andamento', 'updated_at' => 'Hoje, 09:15'],
                        ['id' => 804, 'subject' => 'Criar novo usuário no sistema ERP', 'status' => 'Fechado', 'updated_at' => 'Ontem, 17:55'],
                        ['id' => 799, 'subject' => 'Falha de acesso à pasta da rede', 'status' => 'Fechado', 'updated_at' => '2 dias atrás'],
                    ];
                @endphp

                <x-table :headers="$headers" :rows="$tickets" striped>
                    @scope('cell_status', $ticket)
                        <div class="flex justify-center">
                             @if($ticket['status'] == 'Aberto')
                                <x-badge value="Aberto" class="badge-info" />
                            @elseif($ticket['status'] == 'Em Andamento')
                                <x-badge value="Em Andamento" class="badge-warning" />
                            @else
                                <x-badge value="Fechado" class="badge-success" />
                            @endif
                        </div>
                    @endscope
                </x-table>
            </x-card>
        </div>

        {{-- Informações do Contrato (ocupa 1/3 do espaço) --}}
        <div>
            <x-card title="Detalhes do Contrato" shadow separator>
                <div class="flex justify-between items-baseline">
                    <h3 class="font-bold mb-2">Plano Essencial TI</h3>
                    <div class="text-sm text-gray-500">Renova em 15/09/2024</div>
                </div>

                <div class="mt-4">
                    <p class="font-bold">Uso de Horas Mensais</p>
                    <x-progress value="75" max="100" class="progress-primary mt-2" />
                    <div class="text-sm text-gray-500 mt-1 flex justify-between">
                        <span>15h de 20h utilizadas</span>
                        <span>5h restantes</span>
                    </div>
                </div>

                 <x-menu-separator />
                 
                <div class="mt-4">
                     <p class="font-bold">Horas Extras</p>
                     <p class="text-gray-500">2.5 horas utilizadas este mês.</p>
                     <a href="#" class="link-primary text-sm mt-2 inline-block">Ver extrato detalhado</a>
                </div>

                 <x-menu-separator />

                 <div class="mt-4">
                     <p class="font-bold">Financeiro</p>
                     <p class="text-gray-500">1 fatura em aberto.</p>
                     <x-button label="Ver Faturas" link="#" icon="o-credit-card" class="btn-sm btn-outline btn-primary mt-2" />
                 </div>
            </x-card>
        </div>
    </div>
</div>
