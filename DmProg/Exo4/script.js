document.addEventListener('DOMContentLoaded', function () {
    // Sélectionnez le formulaire
    var formulaire = document.querySelector('form');

    // Ajoutez un écouteur d'événements sur la soumission du formulaire
    formulaire.addEventListener('submit', function (event) {
        // Empêche l'envoi du formulaire par défaut
        event.preventDefault();

        // Appel à la fonction de validation
        if (validerFormulaire()) {
            // Si la validation réussit, vous pouvez soumettre le formulaire ici
            formulaire.submit();
        }
    });

    // Fonction de validation
    function validerFormulaire() {
        // Récupérez les valeurs des champs
        var identifiant = document.getElementById('identifiant').value;
        var password = document.getElementById('password').value;
        var email = document.getElementById('email').value;
        var emailConfirm = document.getElementById('email-confirm').value;

        // Vérification de l'identifiant
        if (identifiant.trim() === '') {
            alert('L\'identifiant est obligatoire.');
            return false;
        }

        // Vérification du mot de passe
        if (password.length < 6) {
            alert('Le mot de passe doit comporter au moins 6 caractères.');
            return false;
        }

        // Vérification de l'égalité des adresses e-mail
        if (email !== emailConfirm) {
            alert('Les adresses e-mail doivent être identiques.');
            return false;
        }

        // Si toutes les conditions sont respectées, retourne true
        return true;
    }
});