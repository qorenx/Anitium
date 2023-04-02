<?php 
// Set API base URL and website base URL
$api_url = "$api"; 
$website_url = "";

// Fetch anime list from API
$anime_list = @file_get_contents("$api_url/animeList?page=" . rand(1,86));
if ($anime_list) {
    $anime_list = json_decode($anime_list, true);

    // Get random anime ID
    $anime_id = isset($anime_list[rand(0, count($anime_list) - 1)]['animeId']) ? $anime_list[rand(0, count($anime_list) - 1)]['animeId'] : '';

    // Redirect to new URL
    if (!empty($anime_id)) {
        header('Location: '.$website_url.'/anime/'.$anime_id);
        exit();
    } else {
        echo "No anime found.";
    }
} else {
    echo "Error fetching data from API";
}
