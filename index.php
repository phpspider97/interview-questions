<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topic</th> 
    </tr>
  </thead>
  <tbody>

<?php

if ($handle = opendir('.')){ 
    $count = 1;
    while (false !== ($entry = readdir($handle))){
        if ($entry != "." && $entry != "..") {
            ?>
                <tr>
                    <th scope="row"><?= $count++; ?></th>
                    <td><b><?= "<a href='$entry'>$entry</a>"; ?></b></td> 
                </tr>  
            <?php
        }
    }
    closedir($handle);
}
?>

</tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>