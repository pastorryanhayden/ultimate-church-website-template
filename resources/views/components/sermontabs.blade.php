<div>
  <div class="block">
    <div class="border-b border-gray-200">
      <nav class="-mb-px flex justify-center space-x-8" aria-label="Tabs">
        <a href="/sermons" class="{{ $selected == "Sermons" ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700' }} flex whitespace-nowrap border-b-2 px-1 py-4 text-sm font-medium">
          Sermons
          @if(isset($sermonscount))
          <span class="{{ $selected == "Sermons" ? 'bg-indigo-100 text-indigo-600' : 'bg-gray-100 text-gray-900' }} ml-3 hidden rounded-full  px-2.5 py-0.5 text-xs font-medium md:inline-block">{{$sermonscount}}</span>
          @endif
        </a>
        <a href="/series" class="{{ $selected == "Series" ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700' }} flex whitespace-nowrap border-b-2 px-1 py-4 text-sm font-medium">
          Series
           @if(isset($seriescount))
          <span class="{{ $selected == "Series" ? 'bg-indigo-100 text-indigo-600' : 'bg-gray-100 text-gray-900' }} ml-3 hidden rounded-full  px-2.5 py-0.5 text-xs font-medium md:inline-block">{{$seriescount}}</span>
          @endif
        </a>
        <a href="/speakers" class="{{ $selected == "Speakers" ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:border-gray-200 hover:text-gray-700' }} flex whitespace-nowrap border-b-2 px-1 py-4 text-sm font-medium" aria-current="page">
          Speakers
           @if(isset($speakercount))
          <span class="{{ $selected == "Speakers" ? 'bg-indigo-100 text-indigo-600' : 'bg-gray-100 text-gray-900' }} ml-3 hidden rounded-full  px-2.5 py-0.5 text-xs font-medium md:inline-block">{{$speakercount}}</span>
          @endif
        </a>
      </nav>
    </div>
  </div>
</div>

