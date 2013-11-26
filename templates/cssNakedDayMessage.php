<?php
  // if they want to participate AND it's actually April 5th
  if($bwd3_css_naked_day == "true" && is_naked_day()) { ?>
  <?php
    if($bwd3_css_naked_day_message) {
      echo $bwd3_css_naked_day_message;
    }
    else {
      echo "<p><strong>What happened to the design?</strong></p><p>To know more about why styles are disabled on this website visit the <a href='http://naked.dustindiaz.com'>  Annual CSS Naked Day</a> website for more information.</p>";
    }
  ?>
<?php } ?>