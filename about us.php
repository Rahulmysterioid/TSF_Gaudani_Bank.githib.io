
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
    <style>
        .about{
            width: 100%;
            height: 200px;
        }
    </style>
  </head>
  <body>
      <!-- Importing Navbar -->
      <?php require_once './navbar.php' ?>
      <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About us</h2>
        </div>
        <!-- About Us Paragraph -->
        <div class="container-fluid" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    
                    <div class="container col my-5" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="100">
                        <p class="lead"> TSF Gaudani Bank is a leading financial institution with a strong reputation for providing exceptional 
                            banking services to individuals and businesses around the world. With a wide range of products and services, 
                            including savings and checking accounts, loans, credit cards, and investment options, TSF Global Bank is committed to 
                            helping its clients achieve their financial goals. Our team of experienced professionals is dedicated to delivering 
                            personalized, innovative, and reliable banking solutions that meet the unique needs of each customer. 
                            At TSF Global Bank, we are committed to providing exceptional customer service and maintaining the highest standards 
                            of integrity and professionalism. </p> 
                    </div>
                </div>
            
                <!-- About Us Image -->
                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="500" data-aos-offset="100">
                    <img src="./Image/about us.jpg" height="70%" width="90%">
                </div>
                
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php require_once './footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset:150,
      duration:1000,
      
    });
  </script>
  </body>
</html>