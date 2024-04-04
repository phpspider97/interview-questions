<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Topic</th>
      <th scope="col">Explain</th> 
    </tr>
  </thead>
  <tbody>
    <?php $count = 1; foreach($array as $topic=>$value){ ?>
        <tr>
        <th scope="row"><?= $count++; ?></th>
        <td><b><?= $topic; ?></b></td>
        <td><?= $value; ?></td> 
        </tr>  
    <?php } ?>
</tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>