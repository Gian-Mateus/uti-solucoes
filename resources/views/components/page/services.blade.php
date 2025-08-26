<section class="px-12 min-h-screen place-items-center bg-base-300" id="services">
    <div class="mt-12">
        <h1 class="text-4xl md:text-7xl font-bold text-primary mb-8">Nossos principais serviços</h1>
        <p class="py-6 text-2xl mb-8">
            Capacitando seu negócio com suporte e soluções de TI abrangentes.
        </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 w-full gap-4 md:px-10 mb-10 justify-items-center">
        @foreach ($cards as $card)      
        <x-page.card
         title="{{ $card['title'] }}"
         content="{{ $card['content'] }}"
         src="{{ $card['src'] }}"
        >
         <x-slot:svg>
             {!! $card['svg'] !!}
         </x-slot>
        </x-page.card>
        @endforeach
    </div>
</section>
