<?php include_once("header.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .image {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .image img {
            width: 100%;
            height: 80%;
        }

        .download {
            margin-top: 20px;
        }

        .download a {
            text-decoration: none;
            color: white;
            background-color: #158875;
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .download a:hover {
            background-color:rgb(15, 95, 82);
        }

    

    </style>

</head>
<body>
    
    <section>
        <div class="image">
            <img src="images/carte.svg" alt="carte mentale">
            <div class="download">
            <a href="./images/carte.svg" download="carte_mentale_methode_scrum.svg">Télécharger la carte</a>
        </div>
        </div>
        
    </section>
<?php include_once 'footer.html'; ?>
</body>
</html>
