<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="wrapper-footer">

	<div class="container foot_con">

		<img src="<?php echo get_template_directory_uri(); ?>/img/footer_stripe_line.jpg" alt="" class="stripe_footer">
		<div class="row">

			<div class="col-md-5 footer_left_div">
				<footer class="site-footer" id="colophon">
					<div class="site-footer__address">
						<img src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.svg" />
					</div>
					<div class="site-footer__nav">
						<?php
							wp_nav_menu(
								array(
									'menu'            => 'Mobile Menu',
									'theme_location'  => 'Primary Menu',
									'depth'           => 0,
									'menu_class'      => 'nav-lists',
									'link_after'	  => ''
								)
							);
						?>
					</div>
					<div class="site-footer__mini-nav">
						<?php
							wp_nav_menu(
								array(
									'menu'            => 'Desktop Menu',
									'theme_location'  => 'Primary Menu',
									'depth'           => 1,
									'menu_class'      => 'nav-list',
									'link_after'	  => ''
								)
							);
						?>
					</div>
				</footer><!-- #colophon -->

			</div><!--col end -->
			<div class="col-md-7 footer-right-side footer_right_div">
					<h1 class="governing_your_risk">GOVERNING YOUR <span>RISK</span></h1>
					<div class="site-footer__social">
						<?php get_template_part( 'global-templates/social-media-menu' ); ?>
					</div>
					<p class="address">
					<!-- Lombard House, 3 Bucknall New Road<br>
					City Centre, Stoke-on-Trent<br>
					Staffordshire ST1 2BB -->
					</p>
					<a class="footer_mail" href="mailto:">info@eosrisk.com</a>
					<a class="footer_tel" href="tel:+44020 3004 3137">+44 (0) 20 3004 3137</a>
					<h3 class="officesin">OFFICES IN</h3>
					<div class="clear"></div>
					<div class="countries_served spinner">
						<span class="location visible">UK</span>
						<span class="location">Australia</span>
						<span class="location">France</span>
						<span class="location">UAE</span>
					</div>
					<div class="clear"></div>
			</div><!--col end -->
		</div><!-- row end -->

	</div><!-- container end -->
	<div class="wrapper__sub-menu">
		<div class="container">
			<div class="col-md-9 footer_badge">
				<?php
					wp_nav_menu(
						array(
							'menu'            => 'Footer Menu',
							'theme_location'  => 'Primary Menu',
							'depth'           => 2,
							'menu_class'      => 'nav-list',
							'link_after'	  => ''
						)
					);
				?>
			</div>
			<div class="col-md-3">
				<p class="copy_r">© EOS RISK GROUP <?php //echo date("Y"); ?> </p>
			</div>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
// 	jQuery(document).ready(function () {
//     //Show then hide ddown menu on hover
//     jQuery('.menu-item-has-children').hover(function () {
//         jQuery(this).children('.sub-menu').slideDown(500);
// 		console.log("sagor");
//     }, function () {
//         jQuery(this).children('.sub-menu').slideUp(500);
//     });
// }); 



// $(function() {
//     var oTop = $('#counter').offset().top - window.innerHeight;
//     $(window).scroll(function(){

//         var pTop = $('body').scrollTop();
//         console.log( pTop + ' - ' + oTop );   //just for your debugging
//         if( pTop > oTop ){
//             start_count();
//         }
//     });
// });

// function start_count(){
//     alert('start_count');
//     //Add your code here
// }

$(function () {
    function isScrolledIntoView($elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function count($this) {
        var current = parseInt($this.html(), 10);
        if (isScrolledIntoView($this) && !$this.data("isCounting") && current < $this.data('count')) {
            $this.html(++current);
            $this.data("isCounting", true);
            setTimeout(function () {
                $this.data("isCounting", false);
                count($this);
            }, 50);
        }
    }

    $(".c-section-new-4").each(function () {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        $(this).data("isCounting", false);
    });
    function startCount() {
        $(".c-section-new-4").each(function () {
            count($(this));
        });
    };
    $(window).scroll(function () {
        startCount();
    });

    startCount();
});


$(function () {
    function isScrolledIntoViewCounter2($elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function countCounter2($this) {
        var current = parseInt($this.html(), 10);
        if (isScrolledIntoViewCounter2($this) && !$this.data("isCounting") && current > $this.data('count')) {
            $this.html(--current);
            $this.data("isCounting", true);
            setTimeout(function () {
                $this.data("isCounting", false);
                countCounter2($this);
            }, 130); // Increase the timeout duration for slower counting (100 milliseconds)
        }
    }

    $(".c-section-new-4-counter2").each(function () {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('2024'); // Set the starting count to 2024
        $(this).data("isCounting", false);
    });

    function startCountCounter2() {
        $(".c-section-new-4-counter2").each(function () {
            countCounter2($(this));
        });
    };

    $(window).scroll(function () {
        startCountCounter2();
    });

    startCountCounter2();
});

$(function () {
    function isScrolledIntoViewCounter3($elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $elem.offset().top;
        var elemBottom = elemTop + $elem.height();
        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    function countCounter3($this) {
        var current = parseInt($this.html(), 10);
        if (isScrolledIntoViewCounter3($this) && !$this.data("isCounting") && current > $this.data('count')) {
            $this.html(--current);
            $this.data("isCounting", true);
            setTimeout(function () {
                $this.data("isCounting", false);
                countCounter3($this);
            }, 300); // Increase the timeout duration for slower counting (100 milliseconds)
        }
    }

    $(".c-section-new-4-counter3").each(function () {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('9'); // Set the starting count to 2024
        $(this).data("isCounting", false);
    });

    function startCountCounter3() {
        $(".c-section-new-4-counter3").each(function () {
            countCounter3($(this));
        });
    };

    $(window).scroll(function () {
        startCountCounter3();
    });

    startCountCounter3();
});




</script>
<script>
    var tweetArray = []; // Declare tweetArray as a global variable

    document.addEventListener('DOMContentLoaded', function() {
        // Add a delay of 2 seconds (2000 milliseconds) before running the code
        setTimeout(function() {
            // Select all <p> tags with the .ctf-tweet-text class
            var tweetTextElements = document.querySelectorAll('p.ctf-tweet-text');
            
            tweetTextElements.forEach(function(tweetTextElement) {
                // Remove <img>, <br>, <path>, and <svg> elements and process the content
                var content = tweetTextElement.cloneNode(true);
                Array.from(content.querySelectorAll('img, br, path, svg')).forEach(function(el) {
                    el.remove();
                });

                // Wrap each <a> tag in a <span>
                Array.from(content.querySelectorAll('a')).forEach(function(aTag) {
                    var span = document.createElement('span');
                    aTag.parentNode.insertBefore(span, aTag);
                    span.appendChild(aTag);
                });

                // Wrap the content in an <li> and push it to the array with "@EosRisk"
                var tweetContent = '<li>@EosRisk – ' + content.innerHTML + '</li>';
                tweetArray.push(tweetContent);
            });

            // Now, tweetArray contains the content with <li> and <span> tags

            // Output tweetArray as HTML inside the #tweets_feed div
            var tweetsFeed = document.getElementById('tweets_feed');
            tweetsFeed.innerHTML = tweetArray.join('');
        }, 10); // 2000 milliseconds = 2 seconds
    });
</script>
<script>
	setTimeout(function() {
			$(function (){

				
				
					let options = {
						autostart: true,
						property: 'value',
						onComplete: null,
						duration: 20000,
						padding: 10,
						marquee_class: '.marquee',
						container_class: '.simple-marquee-container',
						sibling_class: 0,
						hover: true,
						velocity: 0.1,
						direction: 'left'
					}

					$('.simple-marquee-container').SimpleMarquee(options);
					
				

				$('.simple-marquee-container').SimpleMarquee();
				
			});
		}, 1000); // 2000 milliseconds = 2 seconds
			

		</script>
<script type="text/javascript">
    $(document).ready(function() {
        $ ('div.services_container div.side_by_side:even:last-child').addClass ('odd_full_width');

		var width = $("body").width();
		if (width > 768) {
		$('.page-template-goverence-page .right_image,.page-template-goverence-page .egs_heading').hover(function() {
			$('.page-template-goverence-page .egs_heading').css('transform', 'translateX(80px)');
			$('.page-template-goverence-page .right_image').css('transform', 'scale(1.03)');
		}, function() {
			$('.page-template-goverence-page .egs_heading').css('transform', 'translateX(0)');
			$('.page-template-goverence-page .right_image').css('transform', 'scale(1)');
		});
	}
	$('#breadcrumbs a').each(function() {
		var text = $(this).text().toLowerCase().replace(/(^|\s)\S/g, function(firstLetter) {
			return firstLetter.toUpperCase();
		});
		$(this).text(text);
		});

//document.getElementById('forminator-field-upload-3').onchange = function () {
  //var src = URL.createObjectURL(this.forminator-field-upload-3[0])
  //document.getElementById('image').src = src
//}
		
    });


// Select the link and the checkbox
const checkbox = $('.toggle-desktop-nav');

// Attach a change event listener to the checkbox
checkbox.on('change', function() {
  if ($(this).is(':checked')) {
    $('.header-desktop__burger--white, .site .header-desktop.sticky .header-desktop__burger--white').css('opacity','0');
	$('.header-desktop__burger--gold, .site .header-desktop.sticky .header-desktop__burger--gold').css('opacity','1');
  } else {
    $('.header-desktop__burger--white, .site .header-desktop.sticky .header-desktop__burger--white').css('opacity','1');
	$('.header-desktop__burger--gold, .site .header-desktop.sticky .header-desktop__burger--gold').css('opacity','0');
  }
});


// Function to change background color of the body
function changeBackgroundColor() {
  $(".site").css("background-color", "#E9EBEC");
}

   // Assuming you have some AJAX process
    function simulateAjaxProcess() {
      // Simulating an AJAX call with setTimeout
      setTimeout(function() {
        // Check if the success element exists
        if ($(".forminator-success").length > 0) {
          changeBackgroundColor();
		  
        }
      }, 1000); // Simulating a 2-second AJAX process
    }

  // Call the function to simulate AJAX process
  simulateAjaxProcess();
	

	
</script>
<script>
const locations = document.querySelectorAll('.location');
let index = 0;

function slideUp() {
  locations.forEach(location => {
    location.classList.remove('visible');
  });

  locations[index].classList.add('visible');
  index = (index + 1) % locations.length;
}

// Trigger the slideUp function, for example, on a button click or after a certain event
// For instance, calling slideUp every 3 seconds:
setInterval(slideUp, 2000);

</script>

<script>
// Add a class to the body if it's iOS Chrome
if (navigator.userAgent.indexOf('Mac OS X') !== -1 && navigator.userAgent.indexOf('Chrome') !== -1) {
  $("body").addClass("mac-chrome");
} else if (navigator.userAgent.indexOf('Mac OS X') !== -1) {
  $("body").addClass("mac");
} else {
  $("body").addClass("pc");
}

</script>








<?php wp_footer(); ?>



</body>

</html>

