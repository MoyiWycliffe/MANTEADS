<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Browse thousands of jobs and apply online easily on MANTEADS platform.">
    <meta name="author" content="MANTEADS">
     <meta name="keywords" content="jobs, career, apply online, job search,Fill Surveys,Complete microtasks and offerwalls.">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>MANTEADS</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    <section class="intro">
        <h2>We’re Here to Help!</h2>
        <p>At MANTEADS, we value open communication and customer satisfaction. Whether you have questions, suggestions, or need assistance with our platform, we’re here to help you every step of the way.</p>
    </section>

    <section class="contact-info">
        <h2>Our Contact Information</h2>
        <ul>
            <li><strong>Email:</strong> support123@gmail.com</li>
            <button><a href="https://wa.me/254113636557?text=Hello%20I%20Need%20HELP%20FROM%20MANTEADS." target="_blank">Whatsapp</a></button>
        </ul>
        <p>For inquiries related to job listings, account issues, technical support, or other questions, feel free to reach out to us through the following methods:</p>
    </section>

    <!--<section class="support-hours">
        <h2>Customer Support Hours:</h2>
        <ul>
            <li><strong>Monday - Friday:</strong> 6 AM - 7 PM (EST)</li>
            <li><strong>Saturday:</strong> 10 AM - 4 PM (EST)</li>
            <li><strong>Sunday:</strong> Closed</li>
        </ul>
        <p>We strive to respond to all queries within 24 hours on weekdays. If you need immediate assistance, please contact our customer support team via phone or email.</p>
    </section>-->

    <section class="contact-form">
        <h2>Get in Touch via Our Contact Form</h2>
        <p>Please fill out the form below, and we will get back to you as soon as possible:</p>
        <form action="mailto:manteads123@gmail.com" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
          <button type="submit">Submit</button>
        </form>
    </section>

    <footer class="footer">
        <p>&copy; <strong id="Year"></strong> MANTEADS. All rights reserved.</p>
    <script>
      let d=new Date();
      let year=d.getFullYear();
      let month=d.getMonth();
      let date=d.getDate();
      let day=d.getDay();
      let DaysInAWeek=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
      let MonthInAYear=["January","February","March","April","May","June","July","August","September","October","November","December"];
      let today=DaysInAWeek[day]+" "+date+" "+MonthInAYear[month]+" "+year;
      document.getElementById('Year').textContent=today;
    </script>
    </footer>
</body>
</html>
