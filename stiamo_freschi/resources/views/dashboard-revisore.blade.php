<x-layout-revisore>
    <x-navbar />
    <div style="display: flex;height:max-content">
        <div class="aside-left">
            <ul class="ul-aside">
                <a class="li-aside" href="{{ route('dashboard') }}" style="color:black">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-columns-gap" viewBox="0 0 16 16">
                        <path
                            d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z" />
                    </svg>
                    <li class="liMargin">Dashboard</li>
                </a>
                <div class="li-aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-archive" viewBox="0 0 16 16">
                        <path
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                    </svg>
                    <li class="liMargin">Catalogs</li>
                </div>
                <div class="li-aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-heart" viewBox="0 0 16 16">
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                    </svg>
                    <li class="liMargin">My favorites</li>
                </div>
                <div class="li-aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-file-earmark-post" viewBox="0 0 16 16">
                        <path
                            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                        <path
                            d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5" />
                    </svg>
                    <li class="liMargin">My articles</li>
                </div>
                <div class="li-aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                    </svg>
                    <li class="liMargin">Profile</li>
                </div>
                <div class="li-aside">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                        <path
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                    </svg>
                    <li class="liMargin">Basket</li>
                </div>
            </ul>
        </div>

        <div class="div-card"
            style="@if ($announcement_to_check) justify-content: center;@else justify-content: start;padding-top:100px @endif">
            <div>
                <h1 style="text-align:center;margin-top:30px">{{ __('ui.welcomeBackRevisor') }}
                    {{ Auth::user()->name }}
                </h1>
                <h3 style="text-align:center">{{ __('ui.youHave') }} <span class="num_ann"
                        id="num_ann">{{ App\Models\Announcement::toBeRevisionedCount() }}</span>
                    {{ __('ui.adsReview') }}</h3>

            </div>



            @if ($announcement_to_check)
                <div class="card-dash">
                    <div style="display: flex; justify-content:center;align-items:center;margin-left:100px">
                        <x-session-success />
                    </div>

                    <div class="inserzione">
                        <div
                            style="display: flex;  width: 80%;padding:5px;justify-content: center;align-items: center;">
                            <div id="div_container_btn" style="display:flex; flex:0.5">
                                <form
                                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="post">
                                    @csrf
                                    @method ('PATCH')
                                    <button class="btn4 true" style="flex:0.5; margin:10px" onclick="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            fill="green" class="bi bi-check2" viewBox="0 0 16 16">
                                            <path
                                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                        </svg>
                                    </button>
                                </form>
                                <form
                                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="post">
                                    @csrf
                                    @method ('PATCH')
                                    <button class="btn4 false" style="flex:0.5;margin:10px" onclick="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25"
                                            fill="red" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <div style="flex:1;margin:10px; border-right:1px solid black;">
                                <h3 style="padding: 0px;font-size:25px">{{ __('ui.asd') }}
                                    {{ $announcement_to_check->title }}
                                </h3>
                            </div>
                            <div style="flex:1;margin:10px; margin-right:50px;">
                                <div style="margin-left: 20px">
                                    <h3 style="font-size:25px;">{{ $announcement_to_check->category->name }}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="div-btn">
                            <button class="btn4" onclick="apriBox()">
                                <div id="btn" style="display:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                </div>
                                <div id="btn2" style="display:  none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                    </svg>
                                </div>
                            </button>
                        </div>

                    </div>
                    <div id="box-card" style="display: none; ">
                        <div class="card-dash2">
                            <div id="carouselExample" class="carousel slide" style="width: 100%;height:100%">
                                <div class="carousel-inner" style="width: 100%;height:100%">
                                    {{--                                 @if ($announcement_to_check->images)
                                    @foreach ($announcement_to_check->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{ Storage::url($image->path) }}" class="d-block w-100"
                                                alt="...">
                                        </div>
                                    @endforeach
                                @else --}}
                                    @if ($announcement_to_check->images->isEmpty())
                                        <div class="carousel-item active">
                                            <img src="https://images1.vinted.net/t/01_00c4d_ibKrDo5AVXpgGHcrrAVUxZwh/f800/1711030911.jpeg?s=162684a97acb85e57eac3596398af8bbcb25c46e"
                                                class=" img-size d-block " alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://images1.vinted.net/t/01_00c4d_ibKrDo5AVXpgGHcrrAVUxZwh/f800/1711030911.jpeg?s=162684a97acb85e57eac3596398af8bbcb25c46e"
                                                class="img-size d-block  " alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://images1.vinted.net/t/01_00c4d_ibKrDo5AVXpgGHcrrAVUxZwh/f800/1711030911.jpeg?s=162684a97acb85e57eac3596398af8bbcb25c46e"
                                                class="img-size d-block " alt="...">
                                        </div>
                                    @else
                                        @foreach ($announcement_to_check->images as $announcement)
                                            <div class="carousel-item @if ($loop->first) active @endif">
                                                <img src="{{ $announcement->getUrl(200, 300) }}"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div style="flex:3; background-color: #dbd8e388;">
                            <div class="div-descr">
                                <h6>{{ __('ui.userRevisor') }} {{ $announcement_to_check->user->name }}</h6>
                                <h1>{{ $announcement_to_check->title }}</h1>
                                <h2>{{ __('ui.priceAsdReview') }} {{ $announcement_to_check->price }}</h2>
                                <h6>{{ __('ui.descriptionAsdReview') }} {{ $announcement_to_check->description }}</p>
                            </div>
                            <div class="div_container_btn">
                                <form
                                    action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="post">
                                    @csrf
                                    @method ('PATCH')
                                    <button class="btn_btn true trueBorder">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green"
                                    class="bi bi-check2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                </svg> --}}
                                        <h4>{{ __('ui.buttonAccept') }}</h4>
                                    </button>
                                </form>
                                <form
                                    action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                                    method="post">
                                    @csrf
                                    @method ('PATCH')
                                    <button class="btn_btn false falseBorder">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="red"
                                    class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path
                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                </svg> --}}
                                        <h4>{{ __('ui.buttonrefuse') }}</h4>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            @else
                <button class="btn"><a href="/" style="color: white;font-weight:500">Torna alla
                        homepage</a></button>

            @endif

        </div>
    </div>
    <script>
        let apertura = false;

        function apriBox() {


            if (apertura === false) {
                document.getElementById('box-card').style.display = "flex";
                document.getElementById('btn').style.display = "none";
                document.getElementById('btn2').style.display = "block";
                document.getElementById('div_container_btn').style.display = "none";

                apertura = true;
            } else {
                document.getElementById('box-card').style.display = "none";
                document.getElementById('btn').style.display = "block";
                document.getElementById('btn2').style.display = "none";
                document.getElementById('div_container_btn').style.display = "flex";
                apertura = false;
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            // Recupera l'elemento span con la classe num_ann
            var numAnnSpan = document.getElementById('num_ann');

            // Ottieni il conteggio dei annunci da revisionare
            var numAnnCount = parseInt(numAnnSpan.textContent);

            // Imposta il colore in base al conteggio
            if (numAnnCount === 0) {
                numAnnSpan.style.color = 'green';
            } else if (numAnnCount > 0 && numAnnCount < 10) {
                numAnnSpan.style.color = 'orange';
            } else {
                numAnnSpan.style.color = 'red';
            }
        });
    </script>

</x-layout-revisore>
