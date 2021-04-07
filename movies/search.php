<?php
require 'api.php';

$movieName = $_POST['name'] ?? '';
$movieName = strip_tags($movieName);

$dataMovies = getDataMovieFromApi($movieName);
$movies = $dataMovies['results'] ?? [];
require 'result_view.php';