<!DOCTYPE html>
<html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pizza Yolo | <?php echo $title;?></title>
    <meta name="description" content="Page d'accueil de Pizza Yolo. Découvrez nos promotions et nos news" />
    <link rel="stylesheet" href="view/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="view/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="view/assets/css/styles.css">

    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="view/assets/img/pizza-slice-solid.ico" />

</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container"><a class="navbar-brand" href="?page=accueil">Pizza Yolo</a><button data-toggle="collapse"
                class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">

                <div class="collapse navbar-collapse d-flex justify-content-end" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=photos&n=1">Photos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=restaurant">Restaurant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=contact">Contact</a>
                        </li>
                    </ul>
                </div>
    </nav>


    <div class="chatbot">
        <button class="chatbotButtonClose cross">X</button>
        <iframe allow="microphone;" width="350" height="430"
            src="https://console.dialogflow.com/api-client/demo/embedded/4599f5d5-b10b-4ce1-8d40-60674a3e656e">
        </iframe>
    </div>


    <button class="chatbotButtonOpen"></button>