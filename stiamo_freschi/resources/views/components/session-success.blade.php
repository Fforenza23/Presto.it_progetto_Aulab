@if (session('message'))
    <div id="popSuccess" class="pop">
        <div class="alert alert-success trasp" style="width: 90%; display: flex;
    justify-content: center;"
            role="alert">
            {{ session('message') }}
            <div onclick="closeMessageSuccess()" class="btnCloseM"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" fill="black" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                </svg></div>
        </div>
    </div>
@endif

<script>
    // Funzione che nasconde il popup dopo un certo periodo di tempo
    function hidePopup() {
        document.getElementById('popSuccess').style.display = 'none';
    }

    // Codice per far partire setTimeout quando appare il popup
    document.addEventListener('DOMContentLoaded', function() {
        // Quando il popup viene mostrato, avvia setTimeout
        document.getElementById('popSuccess').addEventListener('transitionend', function() {
            // La transizione è completata, il popup è ora visibile
            setTimeout(hidePopup, 5000); // Nascondi il popup dopo 5 secondi (5000 millisecondi)
        });
    });

    function closeMessageSuccess() {
        document.getElementById('popSuccess').style.display = 'none';
    }
</script>
