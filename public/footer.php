<footer>
		<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="company-name">
					<h5><b>BE ARC</b></h5>
					<p>&copy; BE ART All Rights reserved</p>
					<p>888 Brannan Street/ San Francisco, California</p>
				</div>
			</div>
			<div class="col-md-3">
				<h6><b>Terms & Conditions</b></h6>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
		</div>
		<div class="col-md-3">
			<ul>
				<li><a href="#"><b>About</b></a></li>
				<li><a href="#">Service</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3">
			<div id="google_translate_element"></div>
			<div class="footer-icons">
					<a href="https://www.facebook.com"><i class="fab fa-facebook-f" style="padding: 0px 40px 0px 0px"></i></a>
					<a href="https://www.google.com"><i class="fab fa-google-plus-g" style="padding: 0px 40px 0px 0px"></i></a>
					<a href="https://www.twitter.com"><i class="fab fa-twitter" style="padding: 0px 40px 0px 0px"></i></a>
					<a href="https://www.behance.com"><i class="fab fa-behance" ></i></a>
				</div>
		</div>
	</div>
	</footer>
	 <a id="back-top" href="#top" style="display: block;">
    <i class="fa fa-angle-up"></i></a>



<script src="https://kit.fontawesome.com/a3ce11c1fa.js"></script>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="js/owl.carousel.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>


    <script>
// function openNav() {
//   document.getElementById("mySidenav").style.width = "330px";
// }

// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
// }

function openMenu()
{
  document.getElementById('nav').style.visibility = 'visible';
  document.getElementById('nav').style.opacity = 1;
  document.getElementById('menu_open').style.display = 'none';
  document.getElementById('menu_close').style.display = 'block';
}

function closeMenu()
{
  
  document.getElementById('nav').style.visibility = 'hidden';
  document.getElementById('nav').style.opacity = 0;
  document.getElementById('menu_open').style.display = 'block';
  document.getElementById('menu_close').style.display = 'none';
}

$('.slider-blog').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    dots:false,
    autoplay:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

</script>

</body>
</html>
