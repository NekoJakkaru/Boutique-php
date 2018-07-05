$(document).ready(function() {

    // Creation article
    for (var i = 0; i < 10; i++) {

        var div = $("<div class=\"col-md-3\">");
        var article = $("<article>");
        var figure = $("<figure>");
        var h2 = $("<h2>");
        var img = $("<img>");
        var h3 = $("<h3>");
        var h4 = $("<h4>");
        var p = $("<p>");
        var btnMore = $("<button>");

        $(article).text("Produit " + 1 + "");
        $(img).attr('src', 'img/cat6.jpg');
        $(p).text('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.')
        $(btnMore).text("View more...");

        $(".art-container").append(div);
        $(div).append(article);
        $(article).append(figure, h3, h4, p);
        $(figure).append(img);
        $(article).append(h2);
        $(article).append(btnMore);
    };
    // Fin creation article

});



// <div class="col-sm col-md-4 col-lg-2">
//     <article class="art1">
//       <figure>
//         <img src="https://picsum.photos/200/300/?random" alt="https://picsum.photos/200/300/?random">
//       </figure>
//       <h3>Titre de l'article</h3>
//       <h4> class="price">Prix: 10 000 000 000$</h4>
//       <h4> class="quantity">Quantity: 1</h4>
//       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
//         aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
//     </article>
// </div>
