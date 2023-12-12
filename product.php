<h1 class="text-white my-4 title">Products</h1>
      <div class="row">
        <?php
        $end = $last_item;
        if ($end > $total_records) {
          $end = $total_records;
        }
          for ($i = $first_item; $i < $end ; $i++) { 
            echo "<div class=\"col-lg-3 col-md-6 col-12 my-3\">
                    <div class=\"card border-0 card-bg p-2\">
                      <img
                        src=\"".$decode[$i]['image']."\"
                        class=\"card-img-top\"
                      />
                      <div class=\"card-body\">
                        <h5 class=\"card-title\">
                        ".$decode[$i]['title']."
                        </h5>
                        <p class=\"card-text title-font text-white\">".$decode[$i]['price']."$</p>
                        <p class=\"d-flex gap-1\">
                          <button
                            class=\"btn btn-bg mx-2 my-2 px-4\"
                            type=\"button\"
                            data-bs-toggle=\"collapse\"
                            data-bs-target=\"#collapseExample$i\"
                            aria-expanded=\"false\"
                            aria-controls=\"collapseExample\"
                          >
                            Product Details
                          </button>
                        </p>
                        <div class=\"collapse\" id=\"collapseExample$i\">
                          <div class=\"card-text text-white\">".$decode[$i]['description']."
                          </div>
                        </div>
                        <button class=\"btn btn-bg mx-2 my-2 px-4\">Add to cart</button>
                        <button class=\"btn btn-bg mx-1 my-2\">&#10084;</button>
                      </div>
                    </div>
                  </div>";
          }
        ?>
      </div>