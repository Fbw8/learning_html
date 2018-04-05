<?php
          function runMyFunction()
          {
            echo '<ul><li>Hamid</li></ul>';
          }

          if (isset($_GET['the_hash']))
          {
            runMyFunction();
          }
?>