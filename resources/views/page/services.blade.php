<section class="px-12 min-h-screen max-w-[80rem] place-items-center">
    <div class="mt-12">
        <h1 class="text-7xl font-bold text-primary mb-8">Nossos principais serviços</h1>
        <p class="py-6 text-2xl mb-8">
            Capacitando seu negócio com suporte e soluções de TI abrangentes.
        </p>
    </div>
    <div>
        @foreach ($cards as $card)      
        <x-page.card
         title="{{ $card['title'] }}"
         content="{{ $card['content'] }}"
        >
         <x-slot:svg>
             {{ $card['svg'] }}
         </x-slot>
        </x-page.card>
        @endforeach
    </div>
</section>
