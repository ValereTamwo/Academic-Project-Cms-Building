<?php session_start();
    echo $_SESSION['dbname'];
$_SESSION['login'] = $_POST['login'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['id'];
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config | Zone</title>
    <link rel="stylesheet" href="../css/configCss/conf.css">
</head>

<body>
    <div class="labelT">
        <center>
            <h1>Welcome to your Town Hall CMS > Content Generator </h1>
        </center>
        <span>Noticed : <i>You are connected to mairieCms database</i> </span>
    </div>
    <div class="main container">
        <div class="divider pannel">
            <div class="title">
                <ul>
                    <li> <img src="" alt="pannel"></li>
                    <li>
                        <h3>Configuration Pannel</h3>
                    </li>
                </ul>
            </div>

            <div class="function">
                <ul>
                    <li><button class="btn" id="pres" onclick="getContent(`site.txt`)">Presentation</button>
                    </li>
                    <li><button id="proj" onclick="getContent('project.txt')"> Project</button></li>
                    <li><button id="act" onclick="getContent('activite.txt')">Activites</button> </li>
                    <li><button id="sit" onclick="getContent('site.txt')">Sites Touristiques</button> </li>
                    <li><button id="Annon" onclick="getContent('annonces.txt')"> Annonces</button></li>
                    <li><button id="pub" onclick="getContent('publicite.txt')">Publicites</button> </li>
                </ul>
            </div>

        </div>
        <div class="layout">
            <div class="entetes">
                <ul>
                    <li>
                        <label for="titre" class="lab">Fill in your Site's Title</label>
                        <input type="text" class="titre" name="titre">
                    </li>
                    <li>
                        <button id="btn"><a class='view' href="../../public/template/cms/index.html">Visualiser le
                                Modele</a></button>
                    </li>
                </ul>
            </div>
            <div class="data pub" id="publ" onmouseout="pubRv()">
                <p>publicites</p>
                <div class="save">
                    <button id="btn">Enregistrer </button>
                </div>
            </div>
            <div class="data annonce" id="annonce" onmouseout="annonceRv()">

                <p>Annonce</p>
                <div class="save">
                    <button id="btn">Enregistrer </button>
                </div>
            </div>
            <div class="data site" id="site" onmouseout="SiteRv()">
                <p>site</p>
                <div class="save ">
                    <button id="btn">Enregistrer </button>
                </div>
            </div>
            <div class="data activ" id="activ" onmouseout="activiteRv()">
                <p>activite</p>
                <div class="save ">
                    <button id="btn">Enregistrer </button>
                </div>
            </div>
            <div class="data project" id="project" onmouseout="ProjectRv()">
                <p>project</p>
                <div class="save ">
                    <button id="btn">Enregistrer </button>
                </div>
            </div>
            <div class="data present" id="present" onmouseout="presentRv()">
                <p>Get Informations to build up our site</p>
                <div class="save ">
                    <button id="btn">Enregistrer </button>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="../src/js/navigation.js"></script> -->
    <script src="../../ajax.js"></script>
    <script src="../js/navigation.js"></script>
</body>

</html>
//
