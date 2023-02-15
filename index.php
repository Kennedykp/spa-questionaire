<?php
require './connection.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $overallAmbiance = $_POST["overall_ambiance"];
    $spaCleanliness = $_POST["spa_cleanliness"];
    $staffFriendly = $_POST["staff_friendly"];
    $spaQuality = $_POST["spa_quality"];
    $spaPeace = $_POST["spa_peace"];
    $spaMoneyValue = $_POST["spa_money_value"];
    $spaRecommend = $_POST["spa_recommend"];
    $spaStarRating = $_POST["spa_star_rating"];

    $time_app = date("h:i:s A");

    $query = "INSERT INTO tb_data(name, gender, phone, email, overall_ambiance, spa_cleanliness, staff_friendly, spa_quality, spa_peace, spa_money_value, spa_recommend, spa_star_rating, time_app)
    VALUES ('$name', '$gender', '$phone', '$email', '$overallAmbiance', '$spaCleanliness', '$staffFriendly', '$spaQuality', '$spaPeace', '$spaMoneyValue', '$spaRecommend', '$spaStarRating', NOW())";

    mysqli_query($conn, $query);

    header('Location: ./php/successModal.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa-Questionaire | Highbridge Homes</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<?php require_once("./php/nav.php"); ?>

<body> <br><br><br><br>
    <div class="welcome_high">
        <h1>Welcome to Highbridge Homes</h1>
    </div>
    <br><br>
    <center>
        <div class="container"> <br><br><br>
            <p>
            <h3 class="title_q">Spa-Questionaire Form</h3>
            </p>
            <br><br>
            <hr class="colored-hr">
            <br><br><br>
            <div class="form">
                <form action="" action="" method="post" autocomplete="off" id="questionnaire-form">

                    <div class="question" id="question-1">
                        <label for="">What is your name?</label>
                        <br><br><input type="text" name="name" required value="" placeholder="Enter your name">
                        <button type="button" id="next-1" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-2">
                        <label data-aos="fade-left" id="label" for="">Gender</label>
                        <br><br><select class="" name="gender" id="" required>
                            <option value="" selected hidden>Please Specify</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <button type="button" id="previous-2" class="btn">Previous</button>
                        <button type="button" id="next-2" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-3">
                        <label data-aos="fade-left" for="">Phone Number</label>
                        <br><br><input type="number" name="phone" id="" required value="" placeholder="Enter your phone number">
                        <button type="button" id="previous-3" class="btn">Previous</button>
                        <button type="button" id="next-3" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-4">
                        <label for="">E-mail</label>
                        <br><br><input type="email" name="email" id="" required value="" placeholder="Enter your email">
                        <button type="button" id="previous-4" class="btn">Previous</button>
                        <button type="button" id="next-4" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-5">
                        <label for="">How would you rate the overall ambiance and atmosphere of the spa</label>
                        <br><br> <select class="" name="overall_ambiance" id="" required>
                            <option value="" selected hidden>Please Specify</option>
                            <option value="poor">Poor⭐</option>
                            <option value="fair">Fair⭐⭐</option>
                            <option value="good">Good⭐⭐⭐</option>
                            <option value="very-good">Very Good⭐⭐⭐⭐</option>
                            <option value="excellent">Excellent⭐⭐⭐⭐⭐</option>
                        </select>
                        <button type="button" id="previous-5" class="btn">Previous</button>
                        <button type="button" id="next-5" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-6">
                        <label for="">How was the cleanliness of the spa facilities</label>
                        <br><br> <select name="spa_cleanliness" id="" required>
                            <option value="" selected hidden>Please Specify</option>
                            <option value="poor">Poor⭐</option>
                            <option value="fair">Fair⭐⭐</option>
                            <option value="good">Good⭐⭐⭐</option>
                            <option value="very-good">Very Good⭐⭐⭐⭐</option>
                            <option value="excellent">Excellent⭐⭐⭐⭐⭐</option>
                        </select>
                        <button type="button" id="previous-6" class="btn">Previous</button>
                        <button type="button" id="next-6" class="btn">Next</button>
                    </div>
                    <div class="question" id="question-7">
                        <label for=""> Were the staff members friendly and accommodating </label>
                        <br><br> <select name="staff_friendly" id="" required>
                            <option value="" selected hidden> Please Specify</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <button type="button" id="previous-7" class="btn">Previous</button>
                        <button type="button" id="next-7" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-8">
                        <label for="">How was the quality of the treatments you recieved?</label>
                        <br><br> <select name="spa_quality" id="" required>
                            <option value="" selected hidden>Please Specify</option>
                            <option value="poor">Poor⭐</option>
                            <option value="fair">Fair⭐⭐</option>
                            <option value="good">Good⭐⭐⭐</option>
                            <option value="very-good">Very Good⭐⭐⭐⭐</option>
                            <option value="excellent">Excellent⭐⭐⭐⭐⭐</option>
                        </select>
                        <button type="button" id="previous-8" class="btn">Previous</button>
                        <button type="button" id="next-8" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-9">
                        <label for="">Was the Spa Peaceful and relaxing ?</label>
                        <select name="spa_peace" id="" required>
                            <option value="" selected hidden> Please Specify</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <button type="button" id="previous-9" class="btn">Previous</button>
                        <button type="button" id="next-9" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-10">
                        <label for="">How was the value for the money of the spa services?</label>
                        <input type="text" name="spa_money_value" required value="" placeholder="Write a short note">
                        <button type="button" id="previous-10" class="btn">Previous</button>
                        <button type="button" id="next-10" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-11">
                        <label for="">Would you recommend this spa to others</label>
                        <select name="spa_recommend" id="" required>
                            <option value="" selected hidden> Please Specify</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <button type="button" id="previous-11" class="btn">Previous</button>
                        <button type="button" id="next-11" class="btn">Next</button>
                    </div>

                    <div class="question" id="question-12">
                        <label for="">Overall Rating</label>
                        <select name="spa_star_rating" id="" required>
                            <option value="" selected hidden> Please Specify</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <button type="button" id="previous-12" class="btn">Previous</button>
                    </div>

                    <br><br><br><br> <button type="submit" name="submit" class="submit_btn">Submit</button>
                </form>
            </div>
        </div>

    </center>
    <script src="./js/app.js"></script>
</body>

</html>
