<x-layout>
    <x-navbar2 />
    <div style="display: flex;height:max-content">
        <div class="div-card1">
            <div class="div-card_dash">
                <a href="{{ route('revisor.index') }}" class="card_dash_p lf box">
                    <div class="li-aside2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-card-checklist" viewBox="0 0 16 16">
                            <path
                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                            <path
                                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                        </svg>
                        <span class="liMargin">Zona Revisore</span>
                    </div>
                    @if (Auth::check())
                        @if (Auth::user()->is_revisor)
                            <div
                                style="display:flex;flex-direction:column; justify-content:center; align-items:center; height:200px;padding-top:20px">
                                <div style="margin: 10px">
                                    <h5 style="color:#081F37">Articoli da revisionare</h5>
                                </div>
                                <div id="border_num" class="grafic-revisor">
                                    <span id="dash_num" class="dropdown-item dash_num">
                                        {{ App\Models\Announcement::toBeRevisionedCount() }}
                                    </span>
                                </div>
                            </div>
                        @endif
                    @endif
                    @if (!Auth::user()->is_revisor)
                        <div
                            style="display:flex;flex-direction:column; justify-content:center; align-items:center; height:200px;padding-top:20px">
                            <div style="margin: 10px">
                                <h5 style="color:#081F37">Diventa revisore</h5>
                            </div>
                        </div>
                    @endif
                </a>
                <div class="card_dash_p box">
                    <div class="li-aside2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-archive" viewBox="0 0 16 16">
                            <path
                                d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <li class="liMargin">Catalogs</li>
                    </div>
                </div>
                <div class="card_dash_p box">
                    <div class="li-aside2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                        <li class="liMargin">Profile</li>
                    </div>
                    <div style="display:flex; justify-content:center;align-items:center; height:70%">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        <h4 style="margin: 50px;color:#081F37">{{ auth()->user()->name }}</h4>

                    </div>
                </div>
            </div>
            <div class="div-card_dash">
                <div class="card_dash_p lf box">
                    <div class="li-aside2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                        <li class="liMargin">My favorites</li>
                    </div>
                </div>
                <div class="card_dash_p box">
                    <div class="li-aside2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-file-earmark-post" viewBox="0 0 16 16">
                            <path
                                d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                            <path
                                d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <li class="liMargin">My articles</li>
                    </div>
                </div>
                <div class="card_dash_p  box">
                    <div class="li-aside2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                            <path
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                        </svg>
                        <li class="liMargin">Basket</li>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {


            // Recupera l'elemento span con la classe num_ann
            var numAnnSpan = document.getElementById('dash_num');
            console.log('Contenuto di dash_num:', numAnnSpan.textContent);

            // Ottieni il conteggio dei annunci da revisionare
            var numAnnCount = parseInt(numAnnSpan.textContent);

            // Imposta il colore in base al conteggio
            if (numAnnCount === 0) {
                numAnnSpan.style.color = 'green';
                document.getElementById('border_num').style.borderColor = 'green';
            } else if (numAnnCount > 0 && numAnnCount < 10) {
                numAnnSpan.style.color = 'orange';
                document.getElementById('border_num').style.borderColor = 'orange';
            } else {
                numAnnSpan.style.color = 'red';
                document.getElementById('border_num').style.borderColor = 'red';
            }
        });
    </script>
</x-layout>
