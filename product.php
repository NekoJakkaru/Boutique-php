<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Shrikhand" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Shrikhand" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Boutique</title>
</head>

<body>

  <div class="container-fluid">

    <div class="row justify-content-center text-center">
      <div class="col-sm-12">
        <header>
          <div class="row">
            <div class="col-sm-12 col-md-1">
              <figure>
                <img src="img/logo.jpg" alt="">
              </figure>
            </div>
            <div class="col-sm-12 col-md-1">
              <h1>Titre</h1>
            </div>
            <div class="col-sm-9 mx-auto">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="catalogue.html">Catalogue <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="formulaire.html">Contact</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>
            </div>
            <div class="col-sm-12 col-md-1">
              <article class="shop">
                <a><i class="fas fa-cart-arrow-down"></i></a>
                <ul class="shopList">

                </ul>
              </article>
            </div>
        </header>
        </div>
      </div>
    </div>

    <div class="row justify-content-center text-center">
      <div class="col-sm-12">
        <section>

          <article class="art1">
            <figure>
              <img src="https://picsum.photos/200/300/?random" alt="https://picsum.photos/200/300/?random">
            </figure>
            <h3>Titre de l'article</h3>
            <p class="price">Prix: 10 000 000 000$</p>
            <p class="quantity">Quantity: 1</p>
            <p class="description">Description</p>
            <p class="productP">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
              irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <button type="button" name="button" class="btnBuy">Acheter</button>
              <form class="com" action="index.html" method="post">
                <textarea name="name"></textarea>
                <input type="submit" name="" value="Envoyer">
              </form>
          </article>
        </section>
      </div>
    </div>



  </div>

  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  <script type="text/javascript" src="js/catalogue.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
