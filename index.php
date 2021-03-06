<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8334c2f869.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav id="leftNavBar">
            <div class="homeBtn">
                <a href="/index.html">samalivre</a>
            </div>
            <div class="tabList">
                <Button class="tabBtn" onclick="setActive(1)"><i class="fas fa-home"></i> <p>Accueil</p></Button>
                <a class="tabBtn" onclick="setActive(2)"><i class="fas fa-book-open"></i><p>Ma collection</p></a>
                <Button class="tabBtn" onclick="setActive(3)"><i class="fas fa-clipboard-list"></i><p>Whishlist</p></Button>
                <Button class="tabBtn" onclick="setActive(4)"><i class="fas fa-calendar-alt"></i><p>Mes Prets</p></Button>
                <Button class="tabBtn" onclick="setActive(5)"><i class="fas fa-box-open"></i><p>Archives</p></Button>
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
                    <span>Mon profil</span>
                    <span><img src="./img/Screenshot from 2020-10-08 17-11-08.png" class="avatar" alt=""></span>
                </div>
            </nav>
            <div class="mainBottom">
                <div class="booksField">
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
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </div>
    <script src="index.js"></script>
</body>
</html>