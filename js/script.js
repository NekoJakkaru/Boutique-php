$(document).ready(function() {

  var GET_PARAM = function(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
  };

  // Creation article
  for (var i = 0; i < catalog.length; i++) {

    var div = $("<div class=\"col-md-3\">");
    var article = $("<article class='prodArt'>");
    var figure = $("<figure>");
    var h2 = $("<h2>");
    var img = $("<img>");
    var h3 = $("<h3>");
    var h4 = $("<h4>");
    var p = $("<p>");
    var btnMore = $("<a class='viewMore' href='product.html?product_id=" + i + "'>");
    var buyB = $("<button class='btnBuy'>Acheter</button>");

    $(h2).text(catalog[i]['name']);
    $(h3).text('Price : ' + catalog[i]['price']);
    $(h4).text('Quantity : ' + catalog[i]['quantity']);
    $(img).attr('src', catalog[i]['pictures']);
    $(p).text(catalog[i]['description'])
    $(btnMore).text("View more...");

    $(".art-container").append(div);
    $(div).append(article);
    $(article).append(h2);
    $(article).append(figure, h3, h4, p);
    $(figure).append(img);
    $(article).append(btnMore);
    $(article).append(buyB);


  };
  // Fin creation article
  var i = GET_PARAM("product_id");
  var myProduct = catalog[i];

  var productP = $('.productP');
  var quant = $('.quantity');
  var cost = $('.price');

  (productP).text(myProduct['description']);
  (quant).text('Quantity: '+myProduct['quantity']+'');
  (cost).text('Price: '+myProduct['price']+' cents');


  console.log(myProduct);

});
