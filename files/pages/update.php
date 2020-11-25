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

function uploadImage()
{
    $target_dir = "../images/"; //"uploads/";
    $target_file = $target_dir . basename($_FILES["image-name"]["name"]);
    $uploadOk = 1;
    $alreadyExist = false;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image-name"]["tmp_name"]);
        if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        // $uploadOk = 0;
        $alreadyExist = true;
    }

    // Check file size
    // if ($_FILES["image-name"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    if (!$alreadyExist) {

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image-name"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["image-name"]["name"])) . " has been uploaded.";
                $fname = htmlspecialchars(basename($_FILES["image-name"]["name"]));
                // echo '<img src="../img/' . $fname . '">';

                unlink("../resources/image-name.php");
                $myfile = fopen("../resources/image-name.php", "w") or die("Unable to open file!");
                fwrite($myfile, $fname);
                fclose($myfile);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
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
        if ($i == 0) {
            uploadImage();
        }
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