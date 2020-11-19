<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8334c2f869.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="containerfull">
        <nav id="leftNavBar">
            <div class="homeBtn">
                <a href="index.php">samalivre</a>
            </div>
            <div class="tabList">
                <a class="tabBtn" onclick="setActive(1)"><i class="fas fa-home"></i> <p>Accueil</p></a>
                <a class="tabBtn" onclick="setActive(2)"><i class="fas fa-book-open"></i><p>Ma collection</p></a>
                <a class="tabBtn" onclick="setActive(3)"><i class="fas fa-clipboard-list"></i><p>Whishlist</p></a>
                <a class="tabBtn" onclick="setActive(4)"><i class="fas fa-calendar-alt"></i><p>Mes Prets</p></a>
                <a class="tabBtn" onclick="setActive(5)"><i class="fas fa-box-open"></i><p>Archives</p></a>
            </div>
        </nav>
        <div class="main">
            <nav class="topBar">
                <div class="searchBar">
                    <input type="text" class="searchInput"  placeholder="Rechercher par nom, auteur, annee de publication"/>
                    <span class="material-icons">
                        search
                        </span>
                </div>
                <div class="profileGroup"> 
                    <span class="notifs">
                        <i class="fas fa-bell"></i>
                        <p>9</p>
                    </span>
                    <span>Abou Bakr Seck</span>
                    <span><img src="./img/Screenshot from 2020-10-08 17-11-08.png" class="avatar" alt=""></span>
                </div>
            </nav>
             <div class="mainBottom">
                <!--<div class="formLivre">
                     <form action="livres.php" name="form1" method="post">
                        <label for="titre">Titre : </label><input type="text" class="inputLivre" name="titre" value="" /><br>
                        <label for="auteur">Auteur : </label><input type="text" class="inputLivre" name="auteur" value="" /><br>
                        <label for="an_sortie">Année de sortie : </label> <input type="number" class="inputLivre" name="an_sortie" value="" /><br>
                        <label for="genre">Genre : </label><input type="text" class="inputLivre" name="genre" value="" /><br>
                        <label for="etat">Etat : </label><input type="radio" class="inputLivre" name="etat" value="Disponible" /> Disponible 
                                                        <input type="radio" class="inputLivre" name="etat" value="Prêté" /> Prêté         <br>
                        <label for="date_ajout">Date d'ajout : </label><input type="text" class="inputLivre" name="date_ajout" value="" /><br>
                        <label for="couv">Image de couverture</label><input type="file" class="inputLivre" name="couv" id="imgcouv"><br><br>
                        <input type="Submit" value="Submit Form" name="submitForm" /><br>
                    </form>
                </div> -->
                    <!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Ajouter un livre</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-md-5 pt-0">

        <!-- Form -->
        <form class="text-center"  action="livres.php" method="post"  enctype="multipart/form-data" style="color: #757575;"> 

            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" name="titre" class="form-control">
                        <label for="materialRegisterFormFirstName">Titre</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" name="auteur" class="form-control">
                        <label for="materialRegisterFormLastName">Auteur</label>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <div class="md-form">
                        <input type="number" id="materialRegisterFormFirstName" name="an_sortie" class="form-control">
                        <label for="materialRegisterFormFirstName">Année de sortie</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" name="genre" class="form-control">
                        <label for="materialRegisterFormLastName">Genre</label>
                    </div>
                </div>
            </div>

            <div class="md-form">
                <input type="date" id="materialRegisterFormPhone" name="date_ajout" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <label for="materialRegisterFormPhone">Date d'ajout</label>
            </div>
            
            <div class="form-check">
                <input type="radio" class="form-check-input" name="etat" id="materialRegisterFormNewsletter" value="Disponible">Disponible &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; 
                <input type="radio" class="form-check-input" name="etat" id="materialRegisterFormNewsletter" value="Prêté"> Prêté
                <br><label class="form-check-label" for="materialRegisterFormNewsletter">Etat</label><br>
            </div>

            <div class="md-form">
                <br><input type="file" id="ImageUpload" name="couv" id="couv" class="form-cntrol" aria-describedby="materialRegisterFormPhoneHelpBlock">
                <br><br><label for="materialRegisterFormPhone">Image de couverture</label>
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Ajouter</button>

            <hr>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->
            <!--    <div class="booksField">
                    <h1 class="fieldName">ajouts recents</h1>
                    <div class="BookList">
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>  
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>

                    </div>
                </div>
                <div class="booksField">
                    <h1 class="fieldName">Favoris</h1>
                    <div class="BookList">
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>  
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>

                    </div>
                </div>
                <div class="booksField">
                    <h1 class="fieldName">Non lus</h1>
                    <div class="BookList">
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>  
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>

                    </div> -->
</div>
                <!-- <div class="booksField">
                    <h1 class="fieldName">ajouts recents</h1>
                    <div class="BookList">
                        <div class="bookGroup">
                            <div class="hoverMenu">
                                <h1>hello there</h1>
                            </div>
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>  
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div>
                        <div class="bookGroup">
                            <div class="bookCover">
                                <img src="./img/richpoor.jpg" alt="loading">
                            </div>
                            <span class="bookTitle">Rich dad, Poor dad</span>
                            <span class="bookAuthor">Robert Kyosaki</span>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script src="index.js"></script>
</body>
</html>