<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Suggested Treatment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="res.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function () {
    $('#dtHorizontalVerticalExample').DataTable({
    "scrollX": true,
    "scrollY": 200,
    });
    $('.dataTables_length').addClass('bs-select');
    });
    </script>

</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Suggested Treatment</span>
</nav>
<br/>
<div class="container" style="width:90%">
<table id="dtHorizontalVerticalExample" style="max-width:100%" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
 <?php
 $f = fopen("res.csv", "r");?>
  <thead>
    <tr>
    <?php
    $head = fgetcsv($f);
    foreach ($head as $cell) {
    ?>
      <th class="th-sm"><?php echo  htmlspecialchars($cell);?>
      </th>
    <?php }?>
    </tr>
  </thead>
  <tbody>
  <?php
  while (($line = fgetcsv($f)) !== false) {?>
    <tr>
        <?php 
        foreach ($line as $cell) { ?>
            <td>
            <?php echo htmlspecialchars($cell); ?>
            </td>
        <?php } ?>
        </tr>
    <?php } ?>
    </tr>
  </tbody>
  <tfoot>
    <tr>
    
    <?php 
    fclose($f);
    
    ?>
    </tr>
  </tfoot>
</table>
</div>
    
</body>
</html>