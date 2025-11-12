<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillSprint</title>
    <link rel="icon" href="images/logo1.png" type="image/png" style="width: auto;height: inherit;">
    <link rel="stylesheet" href="homedesign.css">
  

    
</head>
    <body>
        
         
        
<div class="firstbox">
          
           <ul>

                <li class="left"><a class="left" href="#"><img src="images/logo1.png" alt="Brand Logo" class="logo">SkillSprint</a></li>    
                <li class="right"><a class="right"   href="#contact-us">Contact</a></li>
                <li class="right"><a class="right" href="products.php">Courses</a></li>
                
                <li class="right"><a class="right" href="#about-us">About us</a></li>
                <li class="right"><a class="right" href="index.php">Home</a></li>
                <li class="right"><a class="right glass-button" href="logout.php">Log out</a></li>
                </ul>
                


        
        
       <hr style="height: 1px; background-color:#2f2729; border: #4b4345;">
        
       
        
            <section class="maintxt" id="home">
                <div class="sec-text">
                    <h1 >Skills That Shape Tomorrow, <br> Start Learning Today </h1>
                    <p>SkillSprint is a leading learning platform dedicated to empowering learners with in-demand tech skills and hands-on experience. We help you master the future through expert-led courses, real-world projects, and innovative learning experiences.</p>
                   <a href="products.php" class="btn">Explore Our Products </a>
                </div>
                <div class="main-image">
                    <img src="images/home-image1.jpeg" alt="futuristic cyber Digital Matrix Background">
                </div>
            </section>
</div>
<div class="secondbox">
                       
                            <div class="sec-box-m-text" >
                                    <h1 class="sec-box-h-text" > Unlock Your Potential Through Innovative Learning. </h1>
                                    <p class="sec-box-p-text">Discover the powerful features that drive success and efficiency in the modern tech landscape.</p>
                                        
                            </div>
                                
                    <div class="features-grid">
                    <div class="feature-box">
                        <div class="icon">⚙️</div>
                        <h3>Advanced AI Integration</h3>
                        <p>Discover how artificial intelligence is transforming the modern world. This course helps you master advanced AI concepts to automate tasks, predict trends, and optimize solutions with unmatched accuracy. Learn to apply AI tools and techniques that drive innovation and real-world impact.</p>
                    </div>    
                            <div class="feature-box">
                                        <div class="icon">🔄</div>
                                        <h3>Seamless Workflow Automation</h3>
                                        <p>Learn how to streamline operations using smart automation tools that save time and reduce effort. This course teaches you to design efficient digital workflows, eliminate repetitive tasks, and boost productivity through intelligent technology</p>
                                    </div>

                            <div class="feature-box">
                                        <div class="icon">🔒</div>
                                        <h3>Robust Security Protocols</h3>
                                        <p>Learn how to protect digital assets with advanced security measures. This course covers encryption, secure coding practices, and industry-standard protocols to ensure data privacy and safety in real-world applications.</p>
                                    </div>  
                            <div class="feature-box">
                                        <div class="icon">🌐</div>
                                        <h3>Global Connectivity</h3>
                                        <p>Learn how to leverage modern communication and collaboration tools to work seamlessly across borders. This course teaches strategies for connecting with teams and clients worldwide, ensuring projects run smoothly no matter where you are.</p>
                                    </div>  
                            <div class="feature-box">
                                        <div class="icon">👤</div>
                                        <h3>Intuitive User Experience</h3>
                                        <p>Learn how to design and navigate platforms that prioritize the user. This course focuses on creating clean, intuitive interfaces that make complex tasks easy to understand and execute, enhancing overall learning and productivity.</p>
                                    </div> 
                            <div class="feature-box">
                                        <div class="icon">💡</div>
                                        <h3>Innovative Solutions</h3>
                                        <p>Explore cutting-edge technologies and learn how to apply them in real-world scenarios. This course empowers you to develop innovative solutions that keep you ahead in the fast-paced tech landscape.</p>
                                    </div>
    

      </div>

      

</div>              

                 <div class="thirdbox">

                                    <div class="third-box-m-text" >

                                                    <h1 class="third-box-h-text" style="color:#171a1f;" > What our Client say </h1>
                                                    <h2 class="third-box-h2-text">What our Client say</h2>
                                                     <p class="third-box-p">Hear directly from the businesses thriving with SkillSprint solutions.</p>
                                     
                                              
                                                  
                                                </div>   <br><br> 
                                                  <div class="client-grid">

                                                        <div class="client-box">
                                                            <div class="icon"><img src="images/homeicon3.jpeg" alt="boy photo" class="icon"></div>
                                                            <h4 style="color: #636ae8;">David Lee</h3>
                                                            <p>"SkillSprint’s Web Development course exceeded my expectations. The combination of hands-on projects and clear explanations helped me confidently build websites from scratch."</p>
                                                        </div>    
                                                        
                                                        <div class="client-box">
                                                                    <div class="icon"><img src="images/homeicon2.jpeg" alt="girl photo" class="icon"></div>
                                                                    <h4 style="color:#636ae8  ;">Sarah Chen</h4>
                                                                    <p>"Cybersecurity training at SkillSprint helped me understand encryption, threat prevention, and secure system design, making me more prepared for professional work"</p>
                                                                </div>  
                                                        <div class="client-box">
                                                                    <div class="icon"><img src="images/homeicon1.jpeg" alt="girl photo" class="icon"></div>
                                                                    <h4 style="color:#636ae8  ;">Maria Rodriguez</h4>
                                                                    <p>"The UI/UX Design course enhanced my creativity and taught me to design user-friendly, professional interfaces that truly improve user experiences."</p>
                                                        
                                      </div>

                </div>

        <div class="fourthbox" >
                        <section class="maintxt">
                        <div class="sec-text">
                            <h1 >Igniting Tomorrow's Technology,<br>Today.</h1>
                            <p>At SkillSprint,we are pioneers crafting the next generation <br>of intelligent software.Our mission is to transform industries by <br>delivering cutting-edge, scalable solutions that drive efficency, <br>foster innovation, and secure the digital future for our partners <br> worldwide.</p>
                        <a href="#about-us" class="btn2">Learn More About Us </a>
                        </div>
                        <div class="main-image">
                            <img src="images/secmain.jpg" alt="futuristic cyber Digital Matrix Background">
                        </div>
                    </section>    
        
        </div>


 <section id="about-us">
<div class="fifthbox">
 <section class="maintxt">
                <div class="sec-text">
                    <h1 >About Us.... <br></h1>
                    <p>At SkillSprint, we are redefining the way people learn technology. Our mission is to make high- <br>quality, industry-relevant courses accessible to everyone — from beginners exploring coding for the first<br>time to professionals advancing their careers. We specialize in cutting-edge fields such as Artificial <br>Intelligence, Web Development, Data Science, and Cybersecurity, offering expertly designed learning paths<br> that combine real-world projects and personalized guidance. <br> Driven by innovation and a passion for education, we aim to bridge the gap between knowledge and <br> opportunity — helping learners build the skills that shape the future of technology. <br> </p>   
                </div>
                <div class="main-image">
                    <img src="images/aboutuslogo.jpg" alt="futuristic cyber Digital Matrix Background">
                </div>
            </section>


</div>
</section>



<section class="contact-section" id="contact-us">
    <div class="contact-left">
      <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Send us a message</h2>
      <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">We’re always eager to hear from you. Fill out the form below to get in touch with our team.</p>
      <form>
        <input type="text"placeholder="Your Name" required>
       <input type="text" placeholder="Your Email" required>
        <textarea placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>

    <div class="contact-right">
      <h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Contact Information</h2>
      <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Find us at our headquarters or connect with us through various channels.</p>
     
     
      <p style="color: whitesmoke;">info@SkillSprint.com</p>
      <p style="color: whitesmoke;">+94 762923742</p>
      <p style="color: whitesmoke;">SkillSprint tech<br>kandy, Suite 400<br> TX 78701<br>Sri Lanka</p>

      <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Connect With Us</h3>
      <div class="social-icons">
        <span>LinkedIn</span>
        <span>Twitter</span>
        <span>GitHub</span>
        
      </div>
    </div>
  </section>

  <p style="text-align: center;"><a href="#home" style="color: #636ae8;margin-bottom: 100px;padding: 100px;text-decoration: none;font-size: 20px
  ; border-radius: 20px;background-size: 10px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >Home</a></p>

              



    </body>
    
    
</html>