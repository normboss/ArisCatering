<?php
if (!session_id())
    session_start();
$_SESSION['pagename'] = "update";
function generateFormToken($form)
{
    // generate a token from an unique value
    $token = md5(uniqid(microtime(), true));
    // Write the generated token to the session variable to check it against the hidden field when the form is sent
    $_SESSION[$form . '_token'] = $token;
    return $token;
}

$content1 = "";
$content2 = "";


$menuArray = array(
    array("image-name", ""),
    array("monday-date", ""),
    array("monday-heading", ""),
    array("monday-content", ""),
    array("tuesday-date", ""),
    array("tuesday-heading", ""),
    array("tuesday-content", ""),
    array("wednesday-date", ""),
    array("wednesday-heading", ""),
    array("wednesday-content", ""),
    array("thursday-date", ""),
    array("thursday-heading", ""),
    array("thursday-content", ""),
    array("friday-date", ""),
    array("friday-heading", ""),
    array("friday-content", ""),
);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $numEvents = $_POST["number-of-events"];
    // if (is_numeric($numEvents)) {
    //     $fname = "../resources/number-of-events.php";
    //     unlink($fname);
    //     $myfile = fopen($fname, "w") or die("Unable to open file!");
    //     fwrite($myfile, $numEvents);
    //     fclose($myfile);
    // } else {
    //     die("Number of events value is not a number!");
    // }

    for ($i = 0; $i < count($menuArray); $i++) {
        $entry = $menuArray[$i];
        if (!empty($_POST[$entry[0]])) {
            $menuArray[$i][1] = $_POST[$entry[0]];
        } else {
            $menuArray[$i][1] = "";
        }
    }
}


foreach ($menuArray as $entry) {
    if ($entry[1] != "") {
        $fname = "../resources/" . $entry[0] . ".php";
        unlink($fname);
        $myfile = fopen($fname, "w") or die("Unable to open file!");
        fwrite($myfile, $entry[1]);
        fclose($myfile);
    }
}


// if ($content1 != "") {
//     unlink("../includes/exhibit-content1.php");
//     $myfile = fopen("../includes/exhibit-content1.php", "w") or die("Unable to open file!");
//     fwrite($myfile, $content1);
//     fclose($myfile);
//     echo "<meta http-equiv='refresh' content='0'>";
// }


// header("Refresh:0; url=exhibits.php");
// echo "<meta http-equiv='refresh' content='0'>";

echo '<script>';
echo 'window.location.href = "menu.php"';
echo '</script>';
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function pretty() {
        $("#contact-form").attr("action", "misc.php");
    }
</script>


</body>

</html>