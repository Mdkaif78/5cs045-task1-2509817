<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
 
    <?php include("nav.php");?>
 
    <?php include("list-games.php");?>
 
        <h1>Hello, world!</h1>
           <div class="row row-cols-1 row-cols-md-4 row-cols-xl-4 g-4">
		   <?php while($a_row = mysqli_fetch_assoc($results)):?>
        <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
	  
      <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
	  <?php echo $a_row['game_name']?>
	<?php echo $a_row['game_description']?>
	<?php echo $a_row['rating']?>
	<?php echo $a_row['released_date']?>

      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
	  
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
</div>
      <?php endwhile; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>