<?php  include("logout.php")  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Environmental Education Program</title>
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>

  <header>
    <nav>
      <h1>RUCOGOZABAHIZI Vital</h1>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#program">Program</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="logout">
        <p> <?php echo $_SESSION['email'] ?>  </p>
        <form action="" method="post">
                <button class="btn" type="submit" name="logout">Logout</button>
        </form>
      </div>
    </nav>
  </header>

  <!-- Home Section -->
      <section id="home">
        <div class="container home">
          <h1>Environmental Education <br /> Program</h1>
          <p>Empowering individuals and communities to create a sustainable future through innovative environmental education programs.</p>
          <div class="buttons">
            <button class="btn"> <a href="#program">Learn More</a> </button>
            <button class="btn xx"> <a href="#contact">Get In Touch</a> </button>
          </div>
        </div>
      </section>

<!-- Program Section -->

    <section id="program">
      <div class="container pro_wraper">
        <h1>About Our Program</h1>
        <div class="pro_container">
          <div class="pro_card">
            <h2>Comprehensive Curriculum</h2>
            <p>Our environmental education program covers a wide range of topics, from ecology and biodiversity to sustainable living and climate change. We provide a holistic learning experience that empowers participants to make informed decisions and take action to protect the planet.</p>
          </div>
          <div class="pro_card">
            <h2>Hands-On Approach</h2>
            <p>We believe in a hands-on, experiential approach to learning. Our programs incorporate interactive workshops, field trips, and real-world projects that allow participants to apply their knowledge and develop practical skills for environmental stewardship.</p>
          </div>
          <div class="pro_card">
            <h2>Community Engagement</h2>
            <p>At the heart of our program is a focus on community engagement. We work closely with local organizations, schools, and community groups to tailor our offerings and ensure they meet the unique needs and interests of the people we serve.</p>
          </div>

        </div>
      </div>
    </section>
<!-- Gallery Section -->

    <section id="gallery">
      <div class="container gallery_wraper">
        <h1>Our Galleries</h1>
        <div class="gallery_container">
            <img src="./images/bg.jpg" alt="">
            <img src="./images/bg1.jpg" alt="">
            <img src="./images/bg2.jpg" alt="">
            <img src="./images/bg3.jpg" alt="">
            <img src="./images/bg4.jpg" alt="">
            <img src="./images/bg5.jpg" alt="">
            <img src="./images/bg6.jpg" alt="">
            <img src="./images/bg7.jpg" alt="">
        </div>
      </div>
    </section>
    <div>
    
    <!-- Contact Section -->

    <section id="contact">
      <div class="container contact_wraper">
        <h2>Contact Us </h2>
        <div class="contact_FormWraper">
          <div class="contact_card">
          <h1>Table To display Data</h1>

<table border="1" cellspacing="0" cellpadding="0" width="80%">
    <tr>
      <th>No</th>
      <th>Names</th>
      <th>Email</th>
      <th>Message</th>
      <th colspan="2">Action</th>
    </tr>
    <?php
    $count = 1;
      include("connection.php");
      $sql = "SELECT * FROM contact ";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)){?>
    
    <tr>
      <td> <?php  echo $count++;  ?> </td>
      <td> <?php echo $row['name']  ?> </td>
      <td><?php echo $row['email']  ?> </td>
      <td><?php echo $row['message']  ?> </td>
      <td> <a href="delete.php?id=<?php echo $row['id'] ?>"> Delete </a> </td>
      <td> <a href="edit.php?id=<?php echo $row['id'] ?>"> Update </a> </td>
    </tr>
    <?php } ?>
</table>
          </div>
            <div class="contact_card">
                    
                    <form action="contact.php" method="post">
                      <div class="inpu-container">
                        <label for="">Your Names</label>
                        <input type="text" name="name" placeholder="Full Name" />
                      </div>
                      <div class="inpu-container">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="Email" />
                      </div>
                      <div class="inpu-container">
                        <label for="">Message</label>
                        <textarea name="message" id="" rows="15" cols="30"></textarea>
                      </div>
                      <input type="submit" value="Submit" name="contact">
                    </form>
                
            </div>
        </div>
       
      </div>
    </section>
    <footer>
      <div class="container footer">
        <p>&copy;All Right Reserved By RUCOGOZABAHIZI Vital 2024</p>
      </div>
    </footer>

  </body>
</html>
