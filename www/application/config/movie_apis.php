<?php
	//Rotten Tomatoes API Key
	$config['rotten_tomatoes_api_key'] = "yytapgjcae7pu4j42dwmmmg5";
	$config['rotten_tomatoes_cache_seconds'] = 60 * 60 * 24;
	$config['rotten_tomatoes_search_url'] = 'http://api.rottentomatoes.com/api/public/v1.0/movies.json?apikey=%1$s&q=%2$s&page_limit=%3$d&page=%4$d';
	$config['rotten_tomatoes_movie_url'] = 'http://api.rottentomatoes.com/api/public/v1.0/movies/%1$s.json?apikey=%2$s';
	
	//The Movie DB API
	$config['tmdb_api_key'] = "1e0e9eb6323a33a3b940f6720a2915f1";
	$config['tmdb_cache_seconds'] = 60 * 60 * 24;	
	$config['tmdb_imdb_id_url'] = 'http://api.themoviedb.org/3/find/%1$s?api_key=%2$s';
	$config['tmdb_title_url'] = 'http://api.themoviedb.org/3/find/%1$s?api_key=%2$s&query=%3$s';
	$config['tmdb_title_year_url'] = 'http://api.themoviedb.org/3/find/%1$s?api_key=%2$s&query=%3$s&year=%4$s';

	//TMS API KEY
	$config['tms_api_key'] = "9a782k4scvuzsgye7xg9mfsh";	
	$config['tms_cache_seconds'] = 60 * 60 * 24;
	
	//OMDB
	$config['omdb_imdb_id_url'] = 'http://www.omdbapi.com/?i=%1$s';
	$config['omdb_title_url'] = 'http://www.omdbapi.com/?t=%1$s';
	$config['omdb_cache_seconds'] = 60 * 60 * 24;
?>