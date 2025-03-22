<?php
require "core.php";

if ($_POST) {
    if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['id'];
        $pet_id = $_POST['pet_id'];

        $res = $link->query("INSERT INTO `pet_owners`(`user_id`, `pet_id`) VALUES ('$user_id','$pet_id')");
        if ($res) {
            header("Location: adopt.php");
        } else {
?>
            <script>
                alert("Ошибка запроса");
            </script>
<?php
            header("Location: adopt.php");
        }
    } else {
        header("Location: details.html");
    }
} else {
    header("Location: adopt.php");
}
