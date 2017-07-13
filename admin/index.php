
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="panel.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header class="left-side col-lg-2">
        <h2>Admin Panel</h2>
        <nav>
            <ul>
                <li id="li-acc" class="active"><a href="#accueil" id="btn-acc">Accueil</a></li>
                <li id="li-add"><a href="#add-article" id="btn-add">Ajouter un article</a></li>
                <li><a href="../index.php">Retour au blog</a></li>
            </ul>
        </nav>
    </header>
    <section id="accueil" class="">
       <div class="container-fluid">
           <div class="row">
              <div class="col-lg-8 col-lg-offset-1">
                   <header><h3>Panel Admin Blog v1</h3></header>
                   <p class="subtitle">An minimal admin panel for blog</p>
                  <h2>P.A.B</h2>
               </div>
           </div>
       </div> 
    </section>
    <section id="add-article" class="dontshow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-6">
                   <header><h3>Créer un article</h3></header>                    
                    <form name="sentMessage" id="contactForm" enctype="multipart/form-data" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Titre</label>
                            <input type="text" name="article_title" class="form-control" placeholder="Title" id="name" required data-validation-required-message="Please enter your title.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" name="article_message" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <p>Taille d'image : 1200px * 200px | Poids maximum 2mo</p>       
                            <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
                            <input type="file" name="article_photos" id="photo" accept="photos/*" >
                        </div>
                    </div>        
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Auteur</label>
                            <input type="text" name="article_author" class="form-control" placeholder="Author" id="email" required data-validation-required-message="Please enter your name or nickname.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-lg-offset-10 col-lg-2">
                            <button type="submit" class="btn btn-send btn-default">Envoyer</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <section id="articles" class="dontshow">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="panel.js"></script>
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
    
</body>
</html>