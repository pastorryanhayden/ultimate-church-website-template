<div>
   <div class="bg-gray-900 px-6 py-12 sm:py-12 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-5xl">Sermon Speakers</h2>
      </div>
    </div>
    <div>
        <x-sermontabs selected="Speakers" />
    </div>
    <div class="max-w-5xl mx-auto py-24">
    {{ $this->table }}
    </div>
</div>
