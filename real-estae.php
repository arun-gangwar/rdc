<?php include 'header.php'; ?>


    <!-- Navbar -->
   
<!-- Navbar -->


 
<!-- Hero Section -->
<section class="hero py-5 text-center " style=" color:white"> 
  <div class="container">
    <p class="fs-5 fw-semibold ">BUY PLOTS/LAND</p>
    <h2 class="display-6 display-md-5 ">Residential & Commercial Plots/Land</h2>
    <p class="mt-3 ">
      Explore Residential, Agricultural, Industrial and Commercial Plots/Land<br>
      Browse beautiful properties tailored just for you.
    </p>
  </div>
</section>


  <!-- Featured Properties -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured Listings</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card property-card">
            <img src="images\bhargi.jpeg" class="card-img-top" alt="House"height="200px">
            <div class="card-body">
              <h5 class="card-title">6acres land 
Baragi Gundlupet Taluk</h5>
              <p class="card-text"> </p>
              <a href="#" class="btn btn-primary">Know More</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card property-card">
            <img src="images\nanjanagudu copy2.jpeg" class="card-img-top" alt="House" height="177px">
            <div class="card-body">
              <h5 class="card-title">2.32 Acre Sy. No.101/2 Hura Nanjangud Thaluk</h5>
              <p class="card-text"> </p>
              <a href="#" class="btn btn-primary">Know More</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-4">
          <div class="card property-card">
            <img src="images\nanjanagudu.jpeg" class="card-img-top" alt="Apartment" height="175px">
                         <img src="images/bhargi.jpeg" class="card-img-top" alt="Apartment" height="175px"> -->

            <!-- <div class="card-body">
              <h5 class="card-title">2.32 Acre

Sy. No.101/2 
Hura Nanjangud Thaluk</h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-primary">Know More</a>
            </div>
          </div>
        </div> -->

      
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">About Us</h2>
      <div class="text-center">
        <p class="text-justify " >
          DreamHomes is a trusted real estate agency offering premium residential and commercial properties. <br> 
          At DreamHomes, we offer a wide range of plots that suit every lifestyle and budget. Our plots are located in rapidly growing areas with excellent infrastructure, easy access to schools, hospitals, highways, and public transport. Each plot is legally verified with clear titles, proper drainage, road access, and ready for registration. Whether you want to construct a villa, duplex, or invest for future gains, our plots provide the ideal foundation.
      
          Invest in a space that grows in value — own land that you can build on, live on, and profit from.
        </p>
      </div>
    </div>
  </section>

  
  
   <!-- Form Section -->
    <div class="container">   
   <h2><b>Get In Touch with Us</b></h2>
   <div class="form-container" style="margin-top: 40px;">
       <form id="contactForm">
           <label for="name">Name:</label>
           <input type="text" class="form-control" id="name" name="name" required>

           <label for="address">Address:</label>
           <input type="text" id="address" class="form-control" name="address" required>

           <label for="phone">Phone Number:</label>
           <input type="tel" id="phone" class="form-control" name="phone" required>

           <label for="subject">Subject:</label>
           <select class="form-control" id="subject" name="subject" required="">
                            <option value="" disabled="" selected="">Select a subject</option>
                            <option value="Sales">Sales</option>
                            <option value="Services">Services</option>
                        </select>
                    
           <!-- <input type="text" id="subject" class="form-control" name="subject" required> -->

           <label for="details">Details:</label>
           <textarea id="details" name="details" class="form-control" rows="4" required></textarea>

           <button type="button" onclick="redirectToWhatsApp()">Submit</button>
       </form>
   </div>
    </div>


    <!-- Contact Section -->
    <section class="py-5 bg-light text-center fade-in">
      <div class="container">
          <h3 class="fw-bold">Contact Us</h3>
          <p>📍 <strong>Office:</strong>  RD Builders and Developer <br> Opposite of Police Station, Madahalli Road, Gundlupet <br> Chamaraja Nagara</p>
          <p>📧 <strong>Email:</strong> rdbuildersanddeveloper23@gmail.com</p>
          <p>📞 <strong>Phone:</strong>  +91 9482731510 | 78924 05504</p>
          
      </div>
  </section>
 <!-- Call to Action Section -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h2 class="mb-3">Looking for your dream home?</h2>
    <p class="lead">We have the best properties at unbeatable prices. Get in touch now and let us help you find your perfect home.</p>
    <a href="contact.html" class="btn btn-light btn-lg mt-3">Contact Us Now</a>
    <a 
      href="https://wa.me/9886523359" 
      target="_blank" 
      class="btn btn-success btn-lg mt-3 ms-3">
      <i class="bi bi-whatsapp"></i> Chat on WhatsApp
    </a>
  </div>
</section>


<?php include 'footer.php'; ?>

<!-- JavaScript Code -->
<script>
function redirectToWhatsApp() {
let name = document.getElementById('name').value;
let address = document.getElementById('address').value;
let phone = document.getElementById('phone').value;
let subject = document.getElementById('subject').value;
let details = document.getElementById('details').value;

if (!name || !address || !phone || !subject || !details) {
   alert('Please fill out all fields before submitting.');
   return;
}

let message = `Hello, my name is ${name}.\nAddress: ${address}\nPhone: ${phone}\nSubject: ${subject}\nDetails: ${details}`;
let encodedMessage = encodeURIComponent(message);
let whatsappURL = `https://wa.me/9482731510?text=${encodedMessage}`;

window.open(whatsappURL, '_blank');
}
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>