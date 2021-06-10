<!DOCTYPE html>
<html lang="en">
    
  <meta charset="UTF-8">
  <meta name="description" content="randomize">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="Satinder Satsangi">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
<head>
    
</head>
<body>






 

<?php
    
 // Randomize the Titles, Description, Keywords to check that the main page remains randomizing the matter.
    
$word1 = array("Hi", "Hello", "Hola", "Hello Visitor");
$word2 = array("Thank you", "Thanks", "Thank you very much");
$word3 = array("Visiting", "Opening", "Browsing");
$word4 = array("my website", "this website", "this blog");

$word5 = array("Website Designer in Ghaziabad", "Website Designer in Noida", "Website Designer in Delhi", "Website Designer in Meerut");
$word6 = array("SEO Agency in Ghaziabad", "SEO Agency in Noida", "SEO Agency in Delhi");
$word7 = array("Digital Marketing", "Pay Per Click Adwords", "Facebook Ads");
$word8 = array("Web Optimisation", "Content Writing", "Web Redesigning");

$word9= array("Sondiva Technologies is one of the  Top Web Designing and Digital Marketing Company  based in Ghaziabad Delhi NCR. We offer our web services in Creative and Responsive Website Designing, Search Engine Optimisation - SEO & Digital Marketing for the last 11 Years.","Our core strength has been our own SSD Hosting Servers and our team monitors our own web servers regularly for best-optimized services, speed, and scalability with best deliverability.","Since last decade we as a Web Designing Company had an exemplary experience in working with some renowned brands from diverse industry sectors","Our web designing team is creative and professional , well skilled to design and execute with innovative concepts. We also offer a Customised Web Designing Service that lets you stand unique from others. Our team shares a passion for translating your vision into a great idea with a good user UI/UX experience.");

 


$word10=array("When it comes to Internet and Web Designing Services ,we are proud to boast that we have quite an expertise and with two decades of experience in E-Commerce, News Portals, Informational sites to fit client needs. We understand requirements while selecting a web server to support different types of websites or portals that require different Hosting Resources. Not all plans fit all so we can customised your requirements with right budget based solutions. Since Ecommerce websites needs high resourced servers whereas informational websites don't need much of the resources until they have large amount of traffic coming in.",

"Understandably, Some web applications need more server resource CPU and RAM; for example, a gaming site should be able to handle advanced graphics, whereas an E-Commerce site would need a payment-processing application and CPU's to balance the load and take on the visitors traffic. We also specialize in optimizing servers from the backend and use the latest technologies for the best outputs in term of speed and deliverability." );

$word11=array(

"All Business needs Website.At Sondiva Technologies We help you to establish Business Credibility by having a website which explains your services and Products.",

"A website is a die hard necessity for Business Corporates, Small Businesses, Home based businesses and anybody who is in process selling products or services . Regardless of any marketing methods, enabling potential customers to either find you through a Google search without investing a fortune."
, 

"Having a business website Increases Sales multifold, Your business will gain credibility by having a website and Professional Email Id, A good responsive website is a backbone of your business, supporting all of your SEO and Digital Marketing efforts.",

"Did you know that ,on website you can interact with clients live and convert visitors into sales. We have ultra blazing fast Linux SSD Servers maintained by our own team 24 x 7.We provide Shared, VPS and Dedicated Hosting Servers within your budget");


$word12 = array(


"The reason, why we have a good retention of our customers is our policy of being there for you with a  personal approach, availability at odd timings in case of any issue or support. 11 years back when  Sondiva Technologies  was incepted Web Designing Market  was onto its peak and it was a time of .com Boom whilst there were too many providers and the customers were not happy with the tumults service approach of various agencies towards them.",

"Our team entered the market using that opportunity and a decision of being in 24x7 Availability mode was taken for our clients. Now, We are readily available and approachable in Delhi – NCR areas available 24 x 7 online for any issue and inquiry and requirement. We believe in is “Simple and easy, budget friendly approach.",

"We listen to our client needs and provide them with best viable solutions. Remember , not all solutions are cheap but are needed for specific requirement of website ( Traffic based or E Commerce Based Websites).Not forgetting that our core strength always has been our own Managed SSD Hosting Servers and our team actively monitors our own web servers regularly for best-optimized services, speed, and scalability with best deliverability.We have over 10 Servers up and running (Windows and Linux) with respective Control panels for daily Website Management. We control and manage our own servers and our technical team looks after each website time to time, updating and optimising each website for optimum performance.",

"We have some Top Corporates, Security Agencies, Government Organisations and Financial institutions using and relying on our secure services. Our company may be 11 Years old, but our team holds decades of expereince in Software Technology, Computer Hardware , Networking & Servers Configurations, Multimedia – TV, Radio, Ad-Films, Content Writing, Newspapers. Our Associations with various service providers gives us a gamut of Economical offerings which are not readily available in market and we offer the same to our clients at best prices. Our team comprises of Young and experienced Software Developers, UI-UX Designers, Android and IOS Developers, Search Engine Executives to SEO Experts, Google Certified PPC and AdWords Experts, Content Writers, Visual Artists for various Commercial Designs (Print and Online.).");




 
function randomize($word){
    return $word[rand(0, count($word)-1)];
}
 
echo "<title>".randomize($word1) . ", " . randomize($word2) . " for " . randomize($word3) . " " . randomize($word4) . "."."</title>";

echo  "<center>".randomize($word1) . ", " . randomize($word2) . " for " . randomize($word3) . " " . randomize($word4) . "."."</center>";

echo "<br>";

echo  "<center>".randomize($word5) . ", " . randomize($word6) . " for " . randomize($word7) . " " . randomize($word8) . "."."</center>";

echo "<center>"."<h1>"."Mission Happiness"."</h1>" . "."."</center>";


echo  "<p>".randomize($word9)."</p>";

echo  "<p>".randomize($word10)."</p>";
echo  "<p>".randomize($word11)."</p>";
echo  "<p>".randomize($word12)."</p>";
 
 

 
?>

<a href="https://www.sondivatech.com">Sondiva Technologies</a>

<style>
    
    
p
{ padding : 1%;
 
  line-height:22px;
  font-size:18px;
  text-align:justify;
  background:lightgrey;
  margin-left:150px;
   margin-right:150px;
  
}




    
    
</style>


 

 
    
