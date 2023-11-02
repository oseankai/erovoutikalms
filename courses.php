<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login_signup.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Training Courses</title>

<script>
const header = document.querySelector("");
    const menuToggler = document.querySelectorAll("#menu_toggle");

    menuToggler.forEach(toggler => {
        toggler.addEventListener("click", () => header.classList.toggle("showMenu"));
    });
</script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif; }
header {
    background-color: rgba(2, 5, 161, 0.91);
    border-radius: 0 0 50px 50px;
    width: 100%;
    height: 80vh;
    overflow: hidden; }
header nav {
    background-color: #4169e1;
    border-radius: 50px;
    position: fixed;
    left: 0;
    right: 0;
    top: 10px;
    margin: 0 auto;
    width: 90%; }
header nav img {
    margin: 5px 35px;
    float: left; }
header .nav-items {
    text-align: center;
    float: right;
    padding: 40px; }
header .nav-items ul {
    list-style: none;
    display: flex;
    flex-direction: row; }
header .nav-items ul li a {
    color: bisque;
    text-decoration: none;
    font-size: 20px;
    padding: 10px; 
    margin: 10px; }
header .nav-items ul li a i {
    font-style: normal; }
input[type="checkbox"] , label i{
    display: none; }

@media only screen and (max-width: 1000px) {
    .menu-btn {
        position: absolute;
        z-index: 2;
        right: 10%;
        top: 20px;
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        border-radius: 50%;
        font-size: 30px;
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease-in-out; }
    .menu-btn i  {
        color: white; }
    .nav-items {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        clip-path: circle(50px at calc(100% - 45px) 45px);
        transition: all 0.3s ease-in-out; }
    #active:checked ~ .nav-items {
        background-color: rgba(2, 5, 161, 0.91);
        clip-path: circle(100%); }
    .nav-items ul {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        list-style: none;
        text-align: center; }
    .nav-items ul li {
        margin: 15px 0; }
    .nav-items ul li a {
        color: none;
        text-decoration: none;
        font-size: 30px;
        font-weight: 500;
        padding: 5px 30px;
        color: #fff;
        position: relative;
        line-height: 50px;
        transition: all 0.3s ease; }
    .nav-items ul li a:after {
        position: absolute;
        content: "";
        background: #fff;
        width: 100%;
        height: 50px;
        left: 0;
        border-radius: 50px;
        transform: scaleY(0);
        z-index: -1;
        transition: transform 0.3s ease; }
    .nav-items ul li a:hover:after {
        transform: scaleY(1); }
    .nav-items ul li a:hover {
        color: #4158d0; }
    input[type="checkbox"] {
        display: none; }
}

header section .slider-frame {
    width: 65vmin;
    position: absolute;
    transform: translate(200%,45%);
    border-radius: 10px;
    overflow: hidden; }
header section .slide-images {
    width: 100%;
    display: flex;
    animation: slide 15s infinite; }
@keyframes slide {
    0% {transform: translateX(0);}
    10% {transform: translateX(-100%);}
    25% {transform: translateX(-200%);}
    35% {transform: translateX(-300%);}
    50% {transform: translateX(-400%);}
    60% {transform: translateX(-500%);}
    70% {transform: translateX(-600%);}
    80% {transform: translateX(-600%);}
    100% {transform: translateX(0);}
}
header section img {
    object-fit: fill;
    width: 450px;
    height: 350px; }

header article {
    position: absolute;
    text-align: center;
    color: white;
    width: 50%;
    margin: 50px 70px;
    top: 25%; }
header article h1 {
    font-size: 50px; }
header article .select {
    color: darkorange;
    font-size: 50px; }
header article span {
    font-size: 20px;
    font-style: italic; }

</style>
</head>
<body>
    <header>
        <nav> 
            <img src="eira_logo.png">
            <input type="checkbox" id="active">
                <label for="active" class="menu-btn"><i class="uil uil-bars"></i></label>
                <div class="nav-items">
                    <ul>
                        <li><a href="home.html"><i class="uil uil-estate">Home</i></a></li>
                        <li><a href="#"><i class="uil uil-file-check">Certifications</i></a></li>
                        <li><a href="userprofile.html"><i class="uil uil-user-circle">Profile</i></a></li> 
                        <li><a href="login_signup.php">Register</a></li> 
                    </ul>
                </div>
        </nav>
        <article>
            <h1> SELF PACED <div class="select">TRAINING PROGRAM</div></h1>
            <span> Learn a skill at your own pace</span>
        </article>
        <section>
            <div class="slider-frame"> 
                <div class="slide-images">
                        <img src="training1.png">
                        <img src="training2.png">
                        <img src="training3.png">
                        <img src="training4.png">
                        <img src="training5.png">
                        <img src="training6.png">
                        <img src="training7.png">
                    </div>
                </div>
            </div>
        </section>
    </header>
</body>
</html>