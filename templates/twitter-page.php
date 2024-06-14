<?php 

/* Template Name: Twitter Page */

get_header(); ?>




<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'title' ); ?>

<article class="block" id="mainContent">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-11">
        <?php //the_content(); ?>



      </div>





    </div>


  </div>
</article>

<?php endwhile; ?>

<?php echo do_shortcode('[custom-twitter-feeds feed=1]'); ?>


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


<div class="container-fluid">
      <div class="row news_ticker">
        <div class="content_news">
          <div class="simple-marquee-container">
            <div class="marquee-sibling">
              LATEST
            </div>
            <div class="marquee">
              <!-- <ul id="tweets_feed" class="marquee-content-items"></ul> -->
              <div id="tweets_feed" class="marquee-content-items"></div>
            </div>
          </div>
      </div>
    </div>
</div>


<?php get_footer(); ?>
