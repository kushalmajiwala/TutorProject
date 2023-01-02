<?php
    include("delReq.php");
    include("updateStatus.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Best Private Tutors For Science Stream in India | tutorfinder.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <script>
        function redirectLogin()
        {
            window.location.replace("login.php");
        }
        function display()
        {
            alert("Your Response Submitted Successfully");
        }
    </script>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/logo.jfif" alt="TutorFinder">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">About Us</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Tutor Finder</h1>
        <p>If you are a student or parent looking for a tutor, try searching our extensive database of tutors and teachers. </p>
        <p>If you enjoy teaching and helping students to learn, why not list your service with Tutor Finder. It takes only a few minutes to register online. </p>
        <button class="btn" onclick="redirectLogin()">Login Now</button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">About Us</h1>
        <div id="services">
            <div class="box">
                <img src="images/1.jpg" height="30px" width="200px" alt="">
                <h2 class="h-secondary center">Welcome to Tutor Finder</h2>
                <p class="center">We have tutors for Subjects of Science stream in most Regions around India.

Tutoring is a great way for students to get their questions answered and improve their grades. Tutors work at your pace and tailor their teaching to meet your learning needs.

Most tutors offer distance education.

Tutor Finder can put you in touch with English Language tutors, Maths tutors, Physics tutors, Chemistry tutors and Biology tutors

Access the one-on-one tuition you need to build confidence and be successful.</p>
            </div>
            <!-- <div class="box">
                <img src="img/2.png" alt="">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            <div class="box">
                <img src="img/3.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div> -->
        </div>
    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <center><button class="btn" onclick="display()">Submit</button></center>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.tutorfinder.com. All rights reserved!
        </div>
    </footer>
</body>

</html>