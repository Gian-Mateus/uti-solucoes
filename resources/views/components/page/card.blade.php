<div class="card bg-base-100 max-w-96 shadow-xl">
    <div class="px-8 py-4 flex items-center text-primary fill-primary gap-4">
        {{ $svg }}
        <h2 class="card-title">{{ $title }}</h2>
    </div>
    <figure>
      <img
        src="{{ $src }}"
        alt="" />
    </figure>
    <div class="card-body">
      <p>{{ $content }}</p>
    </div>
</div>