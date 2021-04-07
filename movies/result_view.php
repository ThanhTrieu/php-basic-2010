<div class="row">
	<?php foreach($movies as $key => $item): ?>
	<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 my-2">
		<div class="card">
		  <img src="https://image.tmdb.org/t/p/w300/<?= $item['poster_path']; ?>" class="card-img-top" alt="<?= $item['title']; ?>">
		  <div class="card-body">
		    <p class="card-text"><?= $item['title']; ?></p>
		  </div>
		</div>
	</div>
	<?php endforeach; ?>
</div>