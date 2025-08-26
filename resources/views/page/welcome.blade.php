<x-layouts.page>
  <div class="flex w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
    <div class="flex w-full flex-col">
        @include('../components/page/hero')
        @include('../components/page/about')
        @include('../components/page/services')
        @include('../components/page/clients')
        @include('../components/page/why')
        @include('../components/page/ready')
        @include('../components/page/footer')
    </div>
  </div>
</x-layouts.page>
        
      