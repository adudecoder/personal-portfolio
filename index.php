<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Personal Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.youtube.com/channel/UC7wmIy-HRhbLPulbh7pqIqg" class="fab fa-youtube"></a>
      <a href="https://www.instagram.com/adudecoder" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/victor-martins-667687232" class="fab fa-linkedin"></a>
      <a href="https://github.com/adudecoder" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="img/user-img.png" alt="portfolio owner">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am victor martins</h3>
      <span data-aos="fade-up">front-end developer</span>
      <p data-aos="fade-up">Front-End Jr developer, connected to 220v with knowledge in Back-End, always looking for a movie/adventure. I madly love technology</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">born in a humble family, grew up in São Paulo, southern Brazil from birth to 10 years old, currently living in the northeast of Brazil in the state of Pernambuco, passionate about information technology, with about 1 year and a half of experience in the field of technology as a freelance web developer using PHP and Laravel. Always having ethics and innovation as my main ideal.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> victor martins </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> victor.martiins74@outlook.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> pernambuco, brazil </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +55 (81) 98623-4433 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 24 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 1+ years </h3>
      </div>

      <a href="data/CV.pdf" class="btn" data-aos="fade-up" download="Victor CV">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML5</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS3 - Sass/Scss</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP + Laravel</span> <span>85%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>systems analysis and development technician</h3>
               <p>FullStack Web Software Development for Data Analysis.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2020 )</span>
               <h3>logistics technician</h3>
               <p>Planning the need for supplies, organizing stock and controlling the flow of goods in an establishment. Drafting transport contracts and monitoring vehicle fleet.</p>
            </div>

            <!-- <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div> -->

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>freelance web developer</h3>
               <p>Developing websites and web applications for clients.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - 2022 )</span>
               <h3>Desenvolvedor em Front-End Angular</h3>
               <p>Dashboard development generating covid-19 data from the regions of Brazil.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>administrative and logistical assistant</h3>
               <p>assisting in the organization of files, storage and dispatch of goods.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>web development</h3>
         <p>Performs system maintenance, making any necessary corrections, in order to meet the needs of users. Develops assembly, debugging and testing of programs, performing maintenance services on the programs already developed.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>graphic design</h3>
         <p>create the visual part of materials such as websites, flyers, billboards, banners, packaging, advertisements, campaigns and logos.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>bootstrap</h3>
         <p>Create web applications using bootstrap improving user experience in a friendly and responsive website.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>seo marketing</h3>
         <p>set of optimization strategies and techniques for websites, blogs and web pages with the aim of improving organic positioning in search engines such as Google by generating traffic and digital authority.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>digital marketing</h3>
         <p>creation of advertisements for the most diverse tools, such as Facebook and Google. The objectives can be several: direct sales of products, downloading an application, contracting the service, or simply registering interested people.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>digital consulting</h3>
         <p>help different types of businesses to use online tools and adapt the business to meet new consumer behavior, who use the internet to inform themselves and make their purchase decisions.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/adudecoder/atividade-covid19"><img src="img/project-1.png" alt="project owner"></a>
         <h3>dashboard covid-19 brasil</h3>
         <h4>web development</h4>
         <span>( 2021 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/adudecoder/petlover"><img src="img/project-2.png" alt="project owner"></a>
         <h3>pet lover</h3>
         <h4>web development</h4>
         <span>( 2021 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/adudecoder/anime-playlist"><img src="img/project-3.png" alt="project owner"></a>
         <h3>anime playlist video</h3>
         <h4>web development</h4>
         <span>( 2021 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/adudecoder/FitClub"><img src="img/project-4.png" alt="project owner"></a>
         <h3>FitClub</h3>
         <h4>web development</h4>
         <span>( 2021 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/adudecoder/Market-Curses"><img src="img/project-5.png" alt="project owner"></a>
         <h3>Market Courses</h3>
         <h4>web development</h4>
         <span>( 2021 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="https://github.com/adudecoder/coffee-square"><img src="img/project-6.png" alt="project owner"></a>
         <h3>coffee square</h3>
         <h4>web development</h4>
         <span>( 2021 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+55 (81) 98623-4433</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>victor.martiins74@outlook.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>pernambuco, brazil</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>victor martins</span> </div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>