<?php
$favoriteColor = 'red';

// Ternary operator
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

// Null coalescing operator
$color = $favoriteColor ?? 'blue';
echo $color;

$secondFavoriteColor = null;

// Ternary operator
$color2 = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'blue';
echo $color2;
