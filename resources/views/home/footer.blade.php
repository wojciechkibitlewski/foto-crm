<footer>
    <div class="w-full bg-gray-200">
        <div class="flex text-left max-w-6xl mx-auto mt-6 p-4 pb-[160px] sm:px-6 sm:pb-4">
            <div class="basic-5/6">
                <div class="m-0 p-0 border-b border-gray-400 w-full">&copy 2023 App.io </div>
                <div class="m-0 p-0"><b>{{ __('home.language_version') }} </b>
                    <ul class="inline m-0 p-0">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="inline">
                            <a rel="alternate" 
                            hreflang="{{ $localeCode }}" 
                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a> | 
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
            <div class="basic-1/6">

            </div>
        </div>
    </div>
</footer>