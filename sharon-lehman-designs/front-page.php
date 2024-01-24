
<?php 
get_header();
?>

<div id="outerWrapper">  
    <div id="hero">
		<div id="heroTextHolder">
      <div id="heroText">
        <h1>Interior Design Like No Other </h1>
        <p class="heroParagraph">With a respect for various design styles, Sharon introduces elegant and comfortable ideas into new spaces while advocating for the clients’ 
          expectations throughout the design process. With an eye for detail, she is an analytical problem solver enhancing spaces with functional and innovative results. </p>
        <p><a href="#">Learn More</a></p>
      </div>
		</div>
     <div id="heroImage"></div>
    </div>
    
    <section>
      <h2>Services</h2>
      <div id="servicesBoxesHolder">
        <a href="services.html">
          <div class="serviceBoxes">
            <img src="images/icons/interior-architecture.svg" width="100" height="100" alt=""/>
            <h3 class="service-title">Interior<br> Architecture</h3> 
          </div>
        </a>
        
        <a  href="services.html">
          <div class="serviceBoxes">
          <img src="images/icons/space-planning.svg" width="100" height="100" alt=""/>
          <h3 class="service-title">Space <br> Planning</h3>
        </div></a>

       <a href="services.html"><div class="serviceBoxes">
          <img src="images/icons/furniture-design.svg" width="100" height="100" alt=""/>
          <h3 class="service-title">Furniture <br> Design</h3>
       </div></a>

        <a href="services.html"><div class="serviceBoxes">
          <img src="images/icons/construction-management.svg" width="100" height="100" alt=""/>
          <h3 class="service-title">Construction <br> Management</h3>
        </div></a>
	  </div>
  </section>

  <section>
    <h2>Client Testimonials</h2>
    <div id="quote-outer">
      <div id="quote-holder">
      <img  src="images/icons/quotation-mark.svg" width="49" height="50" alt=""/>
      <div id="quote-inner">
        <p id="quote-text">I was always impressed with Sharon's quick response time and good communications skills. I felt very comfortable knowing she was managing a team of vendors and contractors to meet and exceed our needs </p>
        <p id="quote-name">-Kristi Gunster</p>
      </div>
    </div>
    </div>
    <div class="circle-holder">
      <button class="prev-btn"><i class="fas fa-chevron-left"></i></button> 
      <button class="circle-empty"></button>
      <button class="circle-empty"></button>
      <button class="circle-empty"></button>
      <button class="circle-empty"></button>
      <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
    </div>
  </section>
	  
      <div id="projects">
        <h2>Projects</h2>
        <div class="flipimage"><a href="projects.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','images/Frame-blue_01.jpg',1)"><img src="images/projects1.jpg" alt="" width="640" height="480" id="Image10"></a></div>
        <div class="flipimage"><a href="projects.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','images/Frame-blue_02.jpg',1)"><img src="images/projects2.jpg" alt="" width="640" height="480" id="Image8"></a></div>
        <div class="flipimage"><a href="projects.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','images/Frame-blue_03.jpg',1)"><img src="images/projects3.jpg" alt="" width="640" height="480" id="Image9"></a></div>
      <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','images/Frame-blue_02.jpg',1)"></a>    </div>

</div>

<?php
get_footer();
?>
