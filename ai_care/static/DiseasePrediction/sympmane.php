<?php
    session_start();
    $arr=$_SESSION['opt'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Symp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Navbar</span>
</nav>
<div class="container-fluid offset-md-2 col-md-8 |container-fluid offset-sm-2 col-sm-8 | container-fluid  col-xs-6 justify-content-center">
<br/>
<form method="post" action="runpython.php">
<div id="myCarousel" class="carousel slide justify-content-center" data-interval="false" data-wrap="false" data-ride="carousel">
<div class="carousel-inner row w-100 mx-auto ">
  <div class="carousel-item col-md-12 active justify-content-center">
    <div class="card">
      <div class="card-body ">
        <h4 class="card-title text-center">Do you have <?php echo $arr[0];?> ?</h4>
        <p class="card-text">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[0];?>" id="" value=1 >
              Very Low
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[0];?>" id="" value=2 >
              Low
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[0];?>" id="" value=3 >
              Medium
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[0];?>" id="" value=4 >
              High
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[0];?>" id="" value=5 >
              Very high
            </label>
          </div>
        </p>
        
        <a class="carousel-control btn-primary-outline" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" ></span>
            <span class="">Previous</span>
        </a> 
        <a class="carousel-control float-right btn-primary-outline" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ></span>
            <span class="">Next</span>
        </a>  
      </div>
    </div>
  </div>
  <?php
  $i=0;
  $temp=0;
    for($i=1;$i<count($arr);$i++){
    $temp=$i;
    ?>
    
  <div class="carousel-item col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Do you have <?php echo $arr[$i];?> ?</h4>
        <p class="card-text">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[$i];?>" id="" value=1 >
              Very Low
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[$i];?>" id="" value=2 >
              Low
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[$i];?>" id="" value=3 >
              Medium
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[$i];?>" id="" value=4 >
              High
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="<?php echo $arr[$i];?>" id="" value=5>
              Very high
            </label>
          </div>
        </p>
        <a class="carousel-control btn-primary-outline" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" ></span>
            <span class="">Previous</span>
        </a> 
        <a class="float-right carousel-control btn-primary-outline" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ></span>
            <?php 
              if($i==count($arr)-1){
            ?>
            
            <?php 
              }else{
            ?>
            <span class="">Next</span>
            <?php
            }
            ?>
        </a> 
      </div>
    </div>
  </div>
  <?php    }?>
</div>
</div>

<div class="card-body ">
<input type="submit" class="btn btn-primary" name=sub>
<?php 
              if($temp==count($arr)-1){
            ?>
            <input class="btn btn-warning" type=submit name=next value=Next>
            <?php 
              }
            ?>
</div>
</form>
</div>
<?php
?>    
</body>
</html>