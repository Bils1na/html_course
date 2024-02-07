<?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["os"])) {
                echo $_POST["os"];
            }
        } else {
            echo "Browser not selected.";
        }
?>