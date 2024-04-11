<x-layout>
    <x-navbar />


    {{-- <div class="banner">
        @foreach ($categories as $category)
            <div id="myButton" class="banner-cat"><a
                    href="{{ route('announcement.category', ['id' => $category->id]) }}">{{ $category->name }}</a></div>
        @endforeach
    </div> --}}
    <div class="DivPadreProfile">
        <div style="height:350px; background: transparent;">
            <div class="divInfoProfile">
                <div class="divInfoProfile1">
                    <div class="divfoto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </div>
                    <div class="divNome">
                        <div>
                            <h3>{{ auth()->user()->name }} </h3>
                        </div>
                        <div>
                            <p>Nessuna recensione</p>
                        </div>
                    </div>
                    <div class="divModifica">
                        <button class="btnModificaProfile btn-desk2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-pencil" viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                            </svg>
                            Modifica</button>
                    </div>
                </div>
                <div class="btnArt">
                    <button onclick="CambioPagina()" class=" btn-desk2 btn-prof">I miei articoli</button>
                    <button onclick="CambioPagina1()"class=" btn-desk2 btn-prof">I miei Preferiti</button>
                </div>
            </div>
        </div>
        <div id="MyArticle" style="background-color: bisque;padding-left:100px;padding-top:50px;padding-bottom:50px;">
            <div class="cardLayout box">
                <div class="imgCard">
                    <img src="{{-- $imagecard --}}" alt="">
                </div>
                <div class="userCard">
                    <div class="imageUser">
                        <img src="{{ asset('img/MainAfter.webp') }}" alt="">
                    </div>
                    <div class="nomeUser">
                        <p style="font-size: 15px;color:black">{{-- $user }}</p>
                        <p style="font-size: 11px">{{ __('ui.publicationDate') }} {{-- $date --}}</p>
                    </div>
                </div>
                <div class="prezzoCard">
                    <h4>{{-- $title --}}</h4>
                    <p>{{-- $price --}} €</p>
                    <h6>{{-- $category --}}</h6>
                </div>
                <div class="descrizioneCard"> mia card
                    <p>{{-- Str::limit($description, 100) --}}</p>
                </div>
                <div class="Areabutton">
                    <button class="btnCardLayout"><a style="color: white"
                            href="{{-- route('announcement.show', ['announcement' => $announcement]) --}}">{{ __('ui.buttonDetails') }}</a></button>
                </div>
            </div>
        </div>
        <div id="MyFavourite"
            style="background-color: bisque;padding-left:100px;padding-top:50px;padding-bottom:50px; display:none">
            <div class="cardLayout box">
                <div class="imgCard">
                    <img src="{{-- $imagecard --}}" alt="">
                </div>
                <div class="userCard">
                    <div class="imageUser">
                        <img src="{{ asset('img/MainAfter.webp') }}" alt="">
                    </div>
                    <div class="nomeUser">
                        <p style="font-size: 15px;color:black">{{-- $user }}</p>
                        <p style="font-size: 11px">{{ __('ui.publicationDate') }} {{-- $date --}}</p>
                    </div>
                </div>
                <div class="prezzoCard">
                    <h4>{{-- $title --}}</h4>
                    <p>{{-- $price --}} €</p>
                    <h6>{{-- $category --}}</h6>
                </div>
                <div class="descrizioneCard"> mi piace
                    <p>{{-- Str::limit($description, 100) --}}</p>
                </div>
                <div class="Areabutton">
                    <button class="btnCardLayout"><a style="color: white"
                            href="{{-- route('announcement.show', ['announcement' => $announcement]) --}}">{{ __('ui.buttonDetails') }}</a></button>
                </div>
            </div>
        </div>
    </div>


    <script>
        let apertura = false;

        let apertura2 = false;

        function CambioPagina() {


            if (apertura === false) {
                document.getElementById('MyArticle').style.display = "flex";
                document.getElementById('MyFavourite').style.display = "none";
            }
        }

        function CambioPagina1() {


            if (apertura2 === false) {
                document.getElementById('MyArticle').style.display = "none";
                document.getElementById('MyFavourite').style.display = "flex";
            }
        }
    </script>
</x-layout>
