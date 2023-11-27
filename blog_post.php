<?php
$conn = new mysqli('localhost','root',null,'blog');

if (isset($_GET['id'])) {
    $currentPost = $_GET['id'];
} else {
    $currentPost = getLatestPost();
}     
$result = $conn->query("SELECT title, date_added, content FROM posts WHERE id = $currentPost");

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>" . $row['title'] . "</h2>";
    echo "<p>" . $row['content'] . "</p>";
    echo "<p class='dateadded'>Wstawiono: " . $row['date_added'] . "</p>";
} else {
    echo "<p>Ten post nie istnieje, chyba że masz maszynę czasu :3</p>";
}

$conn->close();
function getLatestPost() {
    $conn = new mysqli('localhost','root',null,'blog');
    
    $sql = "SELECT MAX(id) AS max_id FROM posts";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $conn->close();

    return $row['max_id'];
}
?>
