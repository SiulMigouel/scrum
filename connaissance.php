<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="connaissance.css">
  <title>Liste des cours</title>
</head>
<style>
   /* Pop-up */
   .popup_co {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
  }
  
  .popup_co .popupco-content {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    width: 80%;
    max-width: 600px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    margin: 10% auto;
  }
  
  .popup_co .popupco-content h2 {
    text-align: center;
  }
  
  .popup_co .close-button {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 20px;
    color: #333;
    cursor: pointer;
  }

   .popup_co-open {
    overflow: hidden;
  }
  
</style>
  
<body>

  <!-- Pop-up -->
  <div id="popup_co" class="popup_co">
    <div class="popupco-content">
      <span class="close-button" onclick="closePopupCo()">&times;</span>
      <h2>Liste des entrainements</h2>
      <ul class="course-list">
        <li>
          <span class="course-title">Les bases</span>
          <a href="qcm_entrainement1.php" class="test-link">Lancer le test</a>
          <a href="cours1.php" class="course-link">Voir le cours associé</a>
        </li>
        <li>
          <span class="course-title">Artefacts et Évènements</span>
          <a href="qcm_entrainement2.php" class="test-link">Lancer le test</a>
          <a href="cours3.php" class="course-link">Voir le cours associé</a>
        </li>
        <li>
          <span class="course-title">Planification & Bonnes pratiques</span>
          <a href="qcm_entrainement3.php" class="test-link">Lancer le test</a>
          <a href="cours5.php" class="course-link">Voir le cours associé</a>
        </li>
        <li>
          <span class="course-title">Conclusion</span>
          <a href="qcm_entrainement4.php" class="test-link">Lancer le test</a>
          <a href="cours7.php" class="course-link">Voir le cours associé</a>
        </li>
      </ul>
    </div>
  </div>

  <script>
    function showPopupCo() {
      document.getElementById("popup_co").style.display = "block";
      document.body.classList.add('popup_co-open');
    }

    function closePopupCo() {
      document.getElementById("popup_co").style.display = "none";
      document.body.classList.remove('popup_co-open');
    }

    // Fermer le pop-up en cliquant en dehors du contenu
    document.addEventListener('DOMContentLoaded', function () {
      const popup = document.getElementById("popup_co");
      popup.addEventListener('click', function (event) {
        if (event.target === popup) {
          closePopupCo();
        }
      });
    });
  </script>
</body>
</html>
