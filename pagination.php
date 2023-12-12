<nav aria-label="Page navigation example" class="my-5">
        <ul class="pagination pagination-lg justify-content-center">
          <?php 
          if ($start == 1) {
            $disabled = "disabled";
            $back = "";
          }
          else{
            $disabled = "";
            $back = $start - 1;
          }
           ?>
          <li class="page-item <?php echo $disabled; ?>">
            <a class="page-link" href="?num=1" aria-label="Previous">
              <span aria-hidden="true">&lt;</span>
            </a>
          </li>
          <li class="page-item <?php echo $disabled; ?>">
            <a class="page-link" href="<?php echo "?num=$back"?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <?php 
          for ($i=1; $i <= $number_of_pages; $i++) { 
            if ($i == $start) {
              $active = "active";
            }
            else $active = "";
            echo "<li class=\"page-item $active\"><a class=\"page-link\" href=\"?num=$i\">$i</a></li>";
          }
          ?>
          <?php 
          if ($start == $number_of_pages) {
            $disabled = "disabled";
            $next = "";
          }
          else{
            $disabled = "";
            $next = $start + 1;
          }
           ?>
          <li class="page-item <?php echo $disabled; ?>">
            <a class="page-link" href="<?php echo "?num=$next"?>" aria-label="Previous">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
          <li class="page-item <?php echo $disabled; ?>">
            <a class="page-link" href="<?php echo "?num=$number_of_pages"?>" aria-label="Previous">
              <span aria-hidden="true">&gt;</span>
            </a>
          </li>
        </ul>
      </nav>