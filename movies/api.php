<?php
// xu dung CURL de call data tu api
function getDataMovieFromApi($movieName = '') {
	$url = "https://api.themoviedb.org/3/search/movie?query={$movieName}&api_key=cfe422613b250f702980a3bbf9e90716&page=1";

	// khoi tao CURL
	$ch = curl_init();
	// set url - api (truy cap vao no)
	curl_setopt($ch, CURLOPT_URL, $url);
  //return the transfer as a string
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // co gang doi toi da 30s xu ly 
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  // thuc thi
  $output = curl_exec($ch);
  // ngat ket noi
  curl_close($ch);
  // $output : no se la chuoi json, can convert ve array cho de xu ly
  $movies = [];
  if(!empty($output)){
  	$movies = json_decode($output, true);
  }
  return $movies;
}

