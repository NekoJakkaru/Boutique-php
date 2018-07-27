<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Shrikhand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
  <title>Boutique</title>
</head>

<body>
    <?php

    $dbh = new PDO('mysql:host=localhost;dbname=boutique', "admin", "plop");
    $products = $dbh->query('SELECT * from Produit');
    ?>
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
                <ul id="shopList">


                </ul>
              </article>
            </div>
        </header>
        </div>
      </div>
    </div>


    <div class="row justify-content-center text-center">
      <main>
        <div class="col-sm-12">
          <section>
            <div class="row art-container">

                <?php



                  // $(h2).text(catalog[i]['name']);
                  // $(h3).text('Price : ' + catalog[i]['price']);
                  // $(h4).text('Quantity : ' + catalog[i]['quantity']);
                  // $(img).attr('src', catalog[i]['pictures']);
                  // $(p).text(catalog[i]['description'])
                  // $(btnMore).text("View more...");
                  //
                  // $(".art-container").append(div);
                  // $(div).append(article);
                  // $(article).append(h2);
                  // $(article).append(figure, h3, h4, p);
                  // $(figure).append(img);
                  // $(article).append(btnMore);
                  // $(article).append(buyB);





                $products->setFetchMode(PDO::FETCH_OBJ);
                    while( $product = $products->fetch() )
                        { ?>
                            <div class="col-md-3">
                            <article class='prodArt'>
                            <figure>
                            <h2><?php echo $product->nom ?></h2>
                            <img src="<?php echo $product->thumb ?>">
                            <h3></h3>
                            <h4><?php echo $product->price ?></h4>
                            <p><?php echo $product->description ?></p>
                            <a class="viewMore" href="product.html?product_id='.$result->id.'">View More</a>
                            <button class='btnBuy'>Acheter</button>
                            </figure>
                            </article>
                            </div>
                        <?php }
                        echo 'Article : '.$product->nom.'<br>';
                        echo 'Texte : '.$product->description.'<br>';
                        echo 'Prix : '.$product->price.'<br>';
                        echo 'Img : '.$product->thumb.'<br>';
                        $products->closeCursor(); ?>


            </div>

          </section>
        </div>
      </main>

    </div>

  </div>

  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<!--
  <script type="text/javascript" src="js/catalogue.js"></script>
  <script type="text/javascript" src="js/script.js"></script> -->

</body>

</html>
