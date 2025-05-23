<?php
session_start();
require_once('../class/class.php');
include '../includes/conn.php';


if (isset($_GET['id_del'])) {

    $ArtWorkDelete_id = $_GET['id_del'];

    $ArtDelete = Visitor::RemoveFromFavorites($ArtWorkDelete_id);

    $_SESSION['error'] = "The Art Deleted From Favorites";
    header("Location:../pages/favorites.php");
    exit();
}




$artworkId = $_GET['id_fav'];
$userId = $_SESSION['user_id'];

$query = "SELECT * FROM favorites WHERE artwork_id = $artworkId AND user_id = $userId";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 0) {
    $insertQuery = "INSERT INTO favorites (user_id, artwork_id) VALUES ($userId, $artworkId)";
    mysqli_query($conn, $insertQuery);
    $_SESSION['msg'] = "The Artwork Added To Favorites";
    header('Location:../pages/explore.php');
    exit();

} else {
    $deleteQuery = "DELETE FROM favorites WHERE artwork_id = $artworkId AND user_id = $userId";
    mysqli_query($conn, $deleteQuery);
    $_SESSION['error'] = "The Artwork Removed From Favorites";
    header('Location:../pages/explore.php');
    exit();

}


