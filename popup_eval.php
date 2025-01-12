<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="popup.css">
    <title>Document</title>
</head>
<body>
    <!-- Pop-up -->
    <div id="popup_general" class="popup_general">
        <div class="popup-content">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <h2>Consignes</h2>
            <ul>
                <li>5 minutes maximum</li>
                <li>Pas de retour en arrière</li>
                <li>Une réponse possible uniquement</li>
                <li>20 questions</li>
                <li>Bonne chance !</li>
            </ul>
            <button class="start-button">
                <h3>
                    S'évaluer
                </h3>
            </button>
        </div>
    </div>

    <script>
    function showPopup() {
      document.getElementById("popup_general").style.display = "block";
      document.body.classList.add('popup-open');
    }

    function closePopup() {
      document.getElementById("popup_general").style.display = "none";
      document.body.classList.remove('popup-open');
    }

    // Fermer le pop-up en cliquant en dehors du contenu
    document.addEventListener('DOMContentLoaded', function () {
      const popup = document.getElementById("popup_general");
      popup.addEventListener('click', function (event) {
        if (event.target === popup) {
          closePopup();
        }
      });
    });
  </script>
</body>
</html>