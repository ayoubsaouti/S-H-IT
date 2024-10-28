<?php
include('HautDePage.php');
include('Nav.php');
?>
<div class="bg-image" style="background-image: url(img/background.jpg);"></div>
<div class="container d-flex justify-content-center mt-5">
    <div class="card p-4">
        <div class="o-wrapper--inner o-wrapper--center"></div>
        <style>
            .my-btn {
                background-color: #416186;
                color: #fff;
                border: none;
            }
        </style>
        <div class="container">
            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-lg" data-bs-toggle="collapse" data-bs-target="#message1" aria-expanded="false" aria-controls="message1" style="background-color:#416186;">
                    Comment passer commande ? <i class="bi bi-caret-down-fill"></i>
                </button>
            </div>
            <div class="collapse" id="message1">
                <div class="card card-body">
                <p>Si vous rencontrez des difficultés pour passer une commande, voici les étapes à suivre :</p>
        <ol>
            <li>Sélectionnez les produits que vous souhaitez acheter en les ajoutant à votre panier.</li>
            <li>Une fois que vous avez terminé vos achats, accédez à votre panier en cliquant sur l'icône du panier en haut à droite de la page.</li>
            <li>Vérifiez que les produits dans votre panier sont corrects et cliquez sur le bouton "Passer la commande".</li>
            <li>Remplissez le formulaire de commande avec vos coordonnées, votre adresse de livraison et les informations de paiement.</li>
            <li>Vérifiez les informations de votre commande et cliquez sur le bouton "Valider la commande".</li>
        </ol>
        <p>Si vous avez encore des difficultés, n'hésitez pas à nous contacter via notre formulaire de contact ou par téléphone. Nous serons heureux de vous aider à passer votre commande.</p>
                </div>
            </div>

            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-lg" data-bs-toggle="collapse" data-bs-target="#message2" aria-expanded="false" aria-controls="message2" style="background-color:#416186;">
                    Puis-je commander par e-mail ou par telephone ? <i class="bi bi-caret-down-fill"></i>
                </button>
            </div>
            <div class="collapse" id="message2">
                <div class="card card-body">
                    <p>Nous sommes ravis que vous souhaitiez commander chez nous. Cependant, nous ne prenons pas les commandes par téléphone ou par e-mail pour des raisons de sécurité et pour garantir la précision des informations de commande.</p>
                </div>
            </div>

            <div class="d-flex justify-content-center mb-3">
                <button class="btn btn-primary btn-lg" data-bs-toggle="collapse" data-bs-target="#message3" aria-expanded="false" aria-controls="message3" style="background-color:#416186;">
                    Ai-je besoin d'un compte pour commander en ligne ? <i class="bi bi-caret-down-fill"></i>
                </button>
            </div>
            <div class="collapse" id="message3">
                <div class="card card-body">
                    <p>Vous n'êtes pas obligé d'avoir un compte pour commander sur notre site de vente en ligne, mais c'est plus facile. Vos données sont stockés et vous n'avez pas besoins de les saisir de nouveaux </p>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary btn-lg" data-bs-toggle="collapse" data-bs-target="#message4" aria-expanded="false" aria-controls="message4" style="background-color:#416186;">
                    Que dois-je faire si le paiement en ligne de ma commande a échoué ou est refusé ? <i class="bi bi-caret-down-fill"></i>
                </button>
            </div>
            <div class="collapse" id="message4">
                <div class="card card-body">
                    <p>Contactez notre service clientèle au 02/789 55 02 ou rendez-vous dans notre magasin. Le service clientèle ainsi que le magasin sont ouverts du lundi au samedi de 08:00 à 18:00.</p>
                </div>
            </div>
            <script>
            // Sélectionne tous les boutons
            var buttons = document.querySelectorAll('button[data-bs-toggle="collapse"]');

            // Pour chaque bouton, ajoute un gestionnaire d'événements "click"
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
            // Ferme tous les messages
                    var messages = document.querySelectorAll('.collapse.show');
                        messages.forEach(function(message) {
                            if (message.id !== button.getAttribute('data-bs-target').substring(1)) {
                                message.classList.remove('show');
                            }
                        });
                });
            });
            </script>
        </div>
    </div>
</div>
<?php
include('Footer.html')
?>
