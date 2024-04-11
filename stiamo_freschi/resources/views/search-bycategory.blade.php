<x-layout>
    <x-navbar />



    <div class="img-container"
        style="display: flex; align-items:end;justify-content:center;color:white;padding-bottom:30px">
        <h1>{{ __('ui.textAdsByCategory') }} {{$thisCategory}}</h1>
    </div>
    <div class="back-by-cat" style="display: flex">
        <div class="banner2" style="margin-top: 40px">
            @foreach ($categories as $category)
                <div id="myButton" class="banner-cat"><a
                        href="{{ route('announcement.category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
        <div class="ContainerCard1">
            <div class="row">
                @foreach ($announcements as $announcement)
                    <div id="containerColCard" class="col-12 col-xl-3 col-lg-4 col-md-6 mt-5">
                        @if ($announcement->images->isEmpty())
                            <x-card-home :imagecard="asset('img/pexels-photo-4464487.jpeg')" :user="$announcement->user->name" :date="$announcement->updated_at->format('d/m/y H:i:s')" :title="$announcement->title"
                                :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :announcement="$announcement">
                            </x-card-home>
                        @else
                            <x-card-home :imagecard="$announcement->images->first()->getUrl(200, 300)" :user="$announcement->user->name" :date="$announcement->updated_at->format('d/m/y H:i:s')" :title="$announcement->title"
                                :price="$announcement->price" :description="$announcement->description" :category="$announcement->category->name" :announcement="$announcement">
                            </x-card-home>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

    </div>


















</x-layout>
