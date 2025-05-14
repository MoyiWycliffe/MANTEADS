
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Browse thousands of jobs and apply online easily on MANTEADS platform.">
  <meta name="author" content="MANTEADS">
  <meta name="keywords" content="jobs, career, apply online, job search,Fill Surveys,Complete microtasks and offerwalls.">
   <link rel="icon" type="image/png" href="favicon.png">
   <title>MANTEADS -HOMEPAGE</title>
    <link rel="stylesheet" href="index.css">
  </head>
 <body>
<div id="sidebar" class="sidebar">
  <div class="sidebar-header">
    <img src="Mylogo.jpg" id="logo" alt="Logo" class="sidebar-logo">
    <span class="sidebar-title" id="Manteads">MANTEADS</span>
    <button class="close-btn" onclick="toggleSidebar()">×</button>
  </div>
  <ul class="sidebar-nav">
    <li><a href="Earn.php">Earn</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="employer.php">Employer</a></li>
    <li><a href="jobSeeker.php">JobSeeker</a></li>
    <li><a href="About.html">About</a></li>
    <li><a href="FAQs.php">FAQs</a></li>
  </ul>
</div>

<button class="open-sidebar-btn" onclick="toggleSidebar()">☰</button>
<script>

  function toggleSidebar() {
    const sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("open");
  }
</script>
<p class="Manteads">Welcome To Manteads The trusted gateaway between employers and job seekers.</p>
<div class="search-filter">
  <input type="search" id="searchInput"placeholder="Search Job Title Or Company.....">
  <input type="submit" id="submit" name="submit" value="submit">
<select id="job-title" class="filter">
    <option value="">Job Title</option>
    <!-- Technology Jobs -->
    <optgroup value="Technology" label="Technology>>" class="technology" id="technology">
    <option value="Software Engineer">Software Engineer</option>
    <option value="Web Developer">Web Developer</option>
    <option value="Data Scientist">Data Scientist</option>
    <option value="System Administrator">System Administrator</option>
    <option value="Mobile App Developer">Mobile App Developer</option>
    <option value="Network Engineer">Network Engineer</option>
    <option value="UI/UX Designer">UI/UX Designer</option>
    <option value="Security Analyst">Security Analyst</option>
    <option value="Cloud Architect">Cloud Architect</option>
    <option value="Blockchain Developer">Blockchain Developer</option>
    <option value="DevOps Engineer">DevOps Engineer</option>
    <option value="Game Developer">Game Developer</option>
    <option value="IT Support Specialist">IT Support Specialist</option>
    <option value="Database Administrator">Database Administrator</option>
    <option value="Machine Learning Engineer">Machine Learning Engineer</option>
   </optgroup>
   <optgroup value="Healthcare-Jobs" label="Healthcare Jobs" class="Healthcare" id="Healthcare">
     <!-- Healthcare Jobs -->
    <option value="Doctor">Doctor</option>
    <option value="Nurse">Nurse</option>
    <option value="Surgeon">Surgeon</option>
    <option value="Medical Researcher">Medical Researcher</option>
    <option value="Pharmacist">Pharmacist</option>
    <option value="Physiotherapist">Physiotherapist</option>
    <option value="Radiologist">Radiologist</option>
    <option value="Anesthesiologist">Anesthesiologist</option>
    <option value="Psychiatrist">Psychiatrist</option>
    <option value="Veterinarian">Veterinarian</option>
    <option value="Midwife">Midwife</option>
    <option value="Nutritionist">Nutritionist</option>
    <option value="Emergency Medical Technician (EMT)">Emergency Medical Technician (EMT)</option>
   </optgroup>
    <optgroup value="Bussiness" label="Bussiness" class="Bussiness" id="Bussiness">

      <!-- Business Jobs -->
    <option value="Marketing Manager">Marketing Manager</option>
    <option value="Sales Executive">Sales Executive</option>
    <option value="Financial Analyst">Financial Analyst</option>
    <option value="Business Consultant">Business Consultant</option>
    <option value="Human Resources Manager">Human Resources Manager</option>
    <option value="Accountant">Accountant</option>
    <option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)</option>
    <option value="Operations Manager">Operations Manager</option>
    <option value="Supply Chain Manager">Supply Chain Manager</option>
    <option value="Product Manager">Product Manager</option>
    <option value="Brand Manager">Brand Manager</option>
    <option value="Business Analyst">Business Analyst</option>
    </optgroup>
   
    <optgroup class="Creative-Jobs" value="Creative-Jobs" label="Creative Jobs">
    <!-- Creative Jobs -->
    <option value="Graphic Designer">Graphic Designer</option>
    <option value="Photographer">Photographer</option>
    <option value="Film Director">Film Director</option>
    <option value="Content Writer">Content Writer</option>
    <option value="Animator">Animator</option>
    <option value="Copywriter">Copywriter</option>
    <option value="Art Director">Art Director</option>
    <option value="Video Editor">Video Editor</option>
    <option value="Fashion Designer">Fashion Designer</option>
    <option value="Illustrator">Illustrator</option>
    <option value="Interior Designer">Interior Designer</option>
    <option value="Web Designer">Web Designer</option>
    </optgroup>

    <optgroup class="Education-Jobs" value="Education-Jobs" label="Education Jobs">
    <!-- Education Jobs -->
    <option value="Teacher">Teacher</option>
    <option value="Principal">Principal</option>
    <option value="Professor">Professor</option>
    <option value="Special Education Teacher">Special Education Teacher</option>
    <option value="Education Consultant">Education Consultant</option>
    <option value="School Counselor">School Counselor</option>
    <option value="Curriculum Developer">Curriculum Developer</option>
    <option value="Education Administrator">Education Administrator</option>
    <option value="Academic Coordinator">Academic Coordinator</option>
   </optgroup>

   <optgroup class="Engineering" value="Engineering-Jobs" label="Engineering Jobs">
    <!-- Engineering Jobs -->
    <option value="Civil Engineer">Civil Engineer</option>
    <option value="Mechanical Engineer">Mechanical Engineer</option>
    <option value="Electrical Engineer">Electrical Engineer</option>
    <option value="Software Engineer">Software Engineer</option>
    <option value="Environmental Engineer">Environmental Engineer</option>
    <option value="Industrial Engineer">Industrial Engineer</option>
    <option value="Aerospace Engineer">Aerospace Engineer</option>
    <option value="Petroleum Engineer">Petroleum Engineer</option>
    <option value="Nuclear Engineer">Nuclear Engineer</option>
    <option value="Structural Engineer">Structural Engineer</option>
    </optgroup>

    <optgroup class="Art-And-Entertainment" value="Art-And-Entertainment" label="Art & Entertainment Jobs"> 
    <!-- Arts & Entertainment Jobs -->
    <option value="Actor/Actress">Actor/Actress</option>
    <option value="Musician">Musician</option>
    <option value="Artist">Artist</option>
    <option value="Fashion Designer">Fashion Designer</option>
    <option value="Writer">Writer</option>
    <option value="Producer">Producer</option>
    <option value="Choreographer">Choreographer</option>
    <option value="Stage Manager">Stage Manager</option>
    <option value="Set Designer">Set Designer</option>
    <option value="Sound Engineer">Sound Engineer</option>
    </optgroup>
    <optgroup class="GovernmentJobs" label="GovernmentJobs" value="GovernmentJobs">
    <option value="Police Officer">Police Officer</option>
    <option value="Firefighter">Firefighter</option>
    <option value="Diplomat">Diplomat</option>
    <option value="Military Officer">Military Officer</option>
    <option value="Public Administrator">Public Administrator</option>
    <option value="Tax Consultant">Tax Consultant</option>
    <option value="Customs Officer">Customs Officer</option>
    <option value="Social Worker">Social Worker</option>
   </optgroup>

    <optgroup value="SkilledTradesJobs" class="Skilled-Trades-Jobs" label="Skilled Trade Jobs">
    <option value="Plumber">Plumber</option>
    <option value="Electrician">Electrician</option>
    <option value="Carpenter">Carpenter</option>
    <option value="Mechanic">Mechanic</option>
    <option value="Welder">Welder</option>
    <option value="Glassblower">Glassblower</option>
    <option value="Roofer">Roofer</option>
    <option value="Landscaper">Landscaper</option>
    <option value="Painter">Painter</option>
   </optgroup>
   <optgroup class="HospitalityJobs" value="Hospitality" label="Hospitality Jobs">
    <!-- Hospitality Jobs -->
    <option value="Chef">Chef</option>
    <option value="Hotel Manager">Hotel Manager</option>
    <option value="Housekeeper">Housekeeper</option>
    <option value="Event Planner">Event Planner</option>
    <option value="Restaurant Manager">Restaurant Manager</option>
    <option value="Concierge">Concierge</option>
    <option value="Tour Guide">Tour Guide</option>
    <option value="Sommelier">Sommelier</option>
    <option value="Bartender">Bartender</option>
  </optgroup>
<optgroup class="ScienceAndResearch" value="ScienceAndResearch" label="Science And Research">
    <!-- Science & Research Jobs -->
    <option value="Biologist">Biologist</option>
    <option value="Physicist">Physicist</option>
    <option value="Chemist">Chemist</option>
    <option value="Astronomer">Astronomer</option>
    <option value="Environmental Scientist">Environmental Scientist</option>
    <option value="Marine Biologist">Marine Biologist</option>
    <option value="Geologist">Geologist</option>
    <option value="Archaeologist">Archaeologist</option>
    <option value="Research Scientist">Research Scientist</option>
</optgroup>

<optgroup class="LegalJobs" value="LegalJobs" label="Legal Jobs">
    <!-- Legal Jobs -->
    <option value="Lawyer">Lawyer</option>
    <option value="Judge">Judge</option>
    <option value="Paralegal">Paralegal</option>
    <option value="Legal Assistant">Legal Assistant</option>
    <option value="Attorney">Attorney</option>
    <option value="Patent Attorney">Patent Attorney</option>
    <option value="Corporate Lawyer">Corporate Lawyer</option>
    <option value="Litigator">Litigator</option>
    </optgroup>
    <optgroup class="Finance" value="Finance" label="Finance">
    <!-- Finance Jobs -->
    <option value="Investment Banker">Investment Banker</option>
    <option value="Financial Advisor">Financial Advisor</option>
    <option value="Tax Consultant">Tax Consultant</option>
    <option value="Actuary">Actuary</option>
    <option value="Auditor">Auditor</option>
    <option value="Loan Officer">Loan Officer</option>
    <option value="Financial Planner">Financial Planner</option>
    <option value="Credit Analyst">Credit Analyst</option>
    </optgroup>

    <!-- Retail Jobs -->
    <optgroup class="Retail" value="Retail" label="Retail">
    <option value="Retail Manager">Retail Manager</option>
    <option value="Sales Associate">Sales Associate</option>
    <option value="Store Owner">Store Owner</option>
    <option value="Cashier">Cashier</option>
    <option value="Inventory Manager">Inventory Manager</option>
    <option value="Visual Merchandiser">Visual Merchandiser</option>
    <option value="Store Supervisor">Store Supervisor</option>
     </optgroup>
    
    <optgroup class="Transportation" value="Transportation" label="Transportation">
    <!-- Transportation Jobs -->
    <option value="Pilot">Pilot</option>
    <option value="Truck Driver">Truck Driver</option>
    <option value="Flight Attendant">Flight Attendant</option>
    <option value="Air Traffic Controller">Air Traffic Controller</option>
    </optgroup>
    <optgroup class="Telecommunications" value="Telecommunications" label="Telecommunications">
    <option value="Telecom Engineer">Telecom Engineer</option>
    <option value="Network Technician">Network Technician</option>
    <option value="Telecommunications Specialist">Telecommunications Specialist</option>
   </optgroup>
    <optgroup class="Other" label="Others" value="Others">
    <option value="Entrepreneur">Entrepreneur</option>
    <option value="Consultant">Consultant</option>
    <option value="Freelancer">Freelancer</option>
    </optgroup>
</select>

    <!--
        <select id="location">
            <option value="">Location</option>
            <option value="Remote">Remote</option>
            <option value="New York">New York</option>
            <option value="London">London</option>
        </select>
    -->
        <select id="category">
            <option value="">Category</option>
            <option value="Technology">Technology</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Business">Business</option>
            <option value="Creative-Jobs">Creative Jobs</option>
            <option value="Education-Jobs">Education Jobs</option>
            <option value="Engineering">Engineering</option>
            <option value="Art-And-Entertainment">Art And Entertainment</option>
            <option value="GovernmentJobs">Government Jobs</option>
            <option value="Skilled-Trades-Jobs">Skilled Trades Jobs</option>
            <option value="HospitalityJobs">Hospitality Jobs</option>
            <option value="ScienceAndResearch">Science And Research</option>
            <option value="Finance">Finace</option>
            <option value="Retail">Retail</option>
            <option value="Transportation">Transportation</option>
            <option value="Telecommunications">Telecommunications</option>
            <option value="Others">Others</option>
        </select>

        <select id="employment-type">
            <option value="">Employment Type</option>
            <option value="Full-Time">Full-Time</option>
            <option value="Part-Time">Part-Time</option>
            <option value="Contract">Contract</option>
        </select>
        <!--
        <input type="number" id="min-salary" placeholder="Min Salary" min="0" />

        <input type="number" id="max-salary" placeholder="Max Salary" min="0" />
        -->
        <select id="date-posted">
            <option value="">Date Posted</option>
            <option value="Last 24 hours">Last 24 hours</option>
            <option value="Last Week">Last Week</option>
            <option value="Last Month">Last Month</option>
        </select>

        <button onclick="filterJobs()" id="filterBtn">Apply Filters</button>
    
</section>
</div>
<!-- Job Listings Section -->
<section class="job-listings" id="job-listings">
    <!-- Dynamic job listings will appear here
    <div class="job-item">
        <h3>Software Engineer</h3>
        <p><span>Company:XYZ TECH|</span>
        <span>Category: Tech </span>| <span>Employment Type: Full-Time </span>| <span>Salary: $100,000 - $120,000</span></p>
        <button class="apply-btn">Apply Now</button>
    </div>
    <div class="job-item">
        <h3>Software Engineer</h3>
        <p><span>Company:XYZ TECH|</span>
        <span>Category: Tech </span>| <span>Employment Type: Full-Time </span>| <span>Salary: $100,000 - $120,000</span></p>
        <button class="apply-btn">Apply Now</button>
    </div>
    <div class="job-item">
        <h3>Software Engineer</h3>
        <p><span>Company:XYZ TECH|</span>
        <span>Category: Tech </span>| <span>Employment Type: Full-Time </span>| <span>Salary: $100,000 - $120,000</span></p>
        <button class="apply-btn">Apply Now</button>
    </div>
    <div class="job-item">
        <h3>Software Engineer</h3>
        <p><span>Company:XYZ TECH|</span>
        <span>Category: Tech </span>| <span>Employment Type: Full-Time </span>| <span>Salary: $100,000 - $120,000</span></p>
        <button class="apply-btn">Apply Now</button>
    </div>
    <div class="job-item">
        <h3>Software Engineer</h3>
        <p><span>Company:XYZ TECH|</span>
        <span>Category: Tech </span>| <span>Employment Type: Full-Time </span>| <span>Salary: $100,000 - $120,000</span></p>
        <button class="apply-btn">Apply Now</button>
    </div>
    <div class="job-item">
        <h3>Software Engineer</h3>
        <p><span>Company:XYZ TECH|</span>
        <span>Category: Tech </span>| <span>Employment Type: Full-Time </span>| <span>Salary: $100,000 - $120,000</span></p>
        <button class="apply-btn">Apply Now</button>
    </div> -->
    <?php include "php/jobs.php";?>
</section>
  <?php include('footer.html');?>
 </body>
</html>
