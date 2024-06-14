<?php 
/* Template Name: Application Page */

get_header(); 


?>
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'titlesubsector' ); ?>

<div class="clear"></div>

<div id="EOSLoader">
	<img src="<?php echo home_url(); ?>/wp-content/uploads/2023/12/Eclipse-1s-200px-1.gif" />
</div>


<div class="blue_background main_contain_container_sectors_page service_landing_page_content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="content_stripe_css"><div class="content_stripe_box"></div></div>
      </div>
    </div>
  </div>

  <div class="container">
      <?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>
  </div>
</div>

<div id="our-team" class="container our_team service_landing_page">
    <!--<div class="row">-->
    <!--  <div class="col-md-12">-->
    <!--    <h2 class="content_title team_title blue_color">EOS RISK <span>APPLICATION PROCESS</span></h2>-->
    <!--    <p class="content_description our_team_heading_para">Thank you for your interest in joining EOS Risk Group.Please complete the following application form which will be followed by a request to submit your CV.</p>-->
    <!--  </div>-->
    <!--</div>-->
    <div class="row">
      <div class="col-md-12">
        <?php //echo do_shortcode( '[forminator_form id="626"]' ); ?>
        
        
        <h2 class="content_title team_title blue_color">EOS RISK <span>APPLICATION PROCESS</span></h2>
        <p class="content_description our_team_heading_para">Thank you for your interest in joining EOS Risk Group. Please complete the following application form which will be followed by a request to submit your CV.</p>

        <div class="gray_color_strip"></div>

        <!-- Multistep Form Begin -->

        <script>
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>

        
<div id="multiStepForm">
  <form id="form" method="post" enctype="multipart/form-data">
    <button type="button" id="back" style="display:none;">Back</button>
    <?php wp_nonce_field('submit_form_nonce', 'submit_form_nonce_field'); ?>

    <!-- Step 1 -->
    <div class="step" id="step-1">
      <div class="application_form_sec">
        <h2 class="content_title team_title blue_color">APPLICATION FORM <span>STEP 1</span></h2>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="surname">Surname/Family Name:</label>
          <input type="text" id="surname" name="surname" placeholder="E.g. Smith" required>
        </div>
        <div class="form-group">
          <label for="firstname">First Name:</label>
          <input type="text" id="firstname" name="firstname" placeholder="E.g. Doe" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" placeholder="E.g. john@doe.com" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="education">Highest Level of Education:</label>
          <select id="education" name="education" required>
            <option value="">Select</option>
            <option value="phd">PHD</option>
            <option value="masters">Masters</option>
            <option value="bachelors">Bachelor's Degree</option>
            <option value="college">College</option>
            <option value="gcse">GCSE</option>
            <option value="highschool">High School</option>
            <option value="none">None</option>
          </select>
        </div>
      </div>
      <button type="button" id="next-1" class="next">Next</button>
      <div class="extra_next_button_text">This form collects your details so that we can contact you and assist you with your enquiry. Please read our privacy policy to learn more on how we protect and manage your submitted data.</div>
    </div>

    <!-- Step 2 -->
    <div class="step" id="step-2">
      <div class="application_form_sec">
        <h2 class="content_title team_title blue_color">APPLICATION FORM <span>STEP 2</span></h2>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="dob">Date of Birth:</label>
          <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
          <label for="experience">Years Of Experience:</label>
          <select id="experience" name="experience" required>
            <option value="">Select</option>
            <option value="10+">10 Years+</option>
            <option value="5-10">5 - 10 Years</option>
            <option value="less_than_5">Less than 5 Years</option>
          </select>
        </div>
      </div>
      <button type="button" id="next-2" class="next">Next</button>
      <div class="extra_next_button_text">This form collects your details so that we can contact you and assist you with your enquiry. Please read our privacy policy to learn more on how we protect and manage your submitted data.</div>
    </div>

    <!-- Step 3 -->
    <div class="step" id="step-3">
      <div class="application_form_sec">
        <h2 class="content_title team_title blue_color">APPLICATION FORM <span>STEP 3</span></h2>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="continent">Countries Worked In:</label>
          <select id="continent" name="continent" required>
            <option value="">First choose a continent</option>
            <option value="asia">Asia</option>
            <option value="america">America</option>
            <option value="europe">Europe</option>
          </select>
        </div>
      </div>
      <div id="country-selection" class="form-row country-selection" style="display:none;">
        <div class="form-group">
          <label class="country asia"><input type="checkbox" name="countries[]" value="India"> India</label>
          <label class="country america"><input type="checkbox" name="countries[]" value="Canada"> Canada</label>
          <label class="country europe"><input type="checkbox" name="countries[]" value="France"> France</label>
          <label class="country america"><input type="checkbox" name="countries[]" value="Brazil"> Brazil</label>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="additional_countries">Are there any countries not listed that are relevant to your application?</label>
          <input type="text" id="additional_countries" name="additional_countries" placeholder="E.g. China,South Africa">
        </div>
      </div>
      <label for="languages" style="width: 100%">Languages Spoken:</label>
      <div id="languages" class="languages-section form-row">
        <div class="form-group">
          
          <label><input type="checkbox" name="languages[]" value="English"> English</label>
          <label><input type="checkbox" name="languages[]" value="French"> French</label>
          <label><input type="checkbox" name="languages[]" value="Spanish"> Spanish</label>
          <label><input type="checkbox" name="languages[]" value="Arabic"> Arabic</label>
          <label><input type="checkbox" name="languages[]" value="German"> German</label>
          <label><input type="checkbox" name="languages[]" value="Russian"> Russian</label>
          <label><input type="checkbox" name="languages[]" value="Portuguese"> Portuguese</label>
          <label><input type="checkbox" name="languages[]" value="Japanese"> Japanese</label>
          <label><input type="checkbox" name="languages[]" value="Italian"> Italian</label>
          <label><input type="checkbox" name="languages[]" value="Hindi"> Hindi</label>
          <label><input type="checkbox" name="languages[]" value="Korean"> Korean</label>
          <label><input type="checkbox" name="languages[]" value="Bengali"> Bengali</label>
          <label><input type="checkbox" name="languages[]" value="Chinese"> Chinese</label>
          <label><input type="checkbox" name="languages[]" value="Turkish"> Turkish</label>
          <label><input type="checkbox" name="languages[]" value="Mandarin"> Mandarin</label>
          <label><input type="checkbox" name="languages[]" value="Indonesian"> Indonesian</label>
          <label><input type="checkbox" name="languages[]" value="Dutch"> Dutch</label>
          <label><input type="checkbox" name="languages[]" value="Hungarian"> Hungarian</label>
          <label><input type="checkbox" name="languages[]" value="Vietnamese"> Vietnamese</label>
          <label><input type="checkbox" name="languages[]" value="Polish"> Polish</label>
          <label><input type="checkbox" name="languages[]" value="Urdu"> Urdu</label>
          <label><input type="checkbox" name="languages[]" value="Czech"> Czech</label>
          <label><input type="checkbox" name="languages[]" value="Greek"> Greek</label>
          <label><input type="checkbox" name="languages[]" value="Thai"> Thai</label>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="cover_letter">Cover Letter:</label>
          <textarea id="cover_letter" name="cover_letter" rows="4" cols="50" placeholder="E.g. text placeholder You can add new line"></textarea>
        </div>
      </div>
      <button type="button" id="next-3" class="next">Next</button>
      <div class="extra_next_button_text">This form collects your details so that we can contact you and assist you with your enquiry. Please read our privacy policy to learn more on how we protect and manage your submitted data.</div>
    </div>

    <!-- Step 4 -->
    <div class="step" id="step-4">
      <div class="application_form_sec">
        <h2 class="content_title team_title blue_color">APPLICATION FORM <span>STEP 4</span></h2>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="pdf_upload">Upload Your CV:</label>
          <input type="file" id="pdf_upload" name="pdf_upload" accept=".pdf,.doc,.docx" required>
          <span class="extra-description">file Accepted: .pdf .doc .docx</span>
        </div>
        <div class="form-group">
          <label for="image_upload">Upload Your Image:</label>
          <input type="file" id="image_upload" name="image_upload" accept=".png,.jpeg,.tif" required>
          <span class="extra-description">file Accepted: .png .jpeg .tif</span>
        </div>
      </div>
      <div class="g-recaptcha" data-sitekey="6Le1dVopAAAAALD0K6zSUvXKuc4NY6Z6VIqqFBQy" data-callback="setRecaptchaToken"></div>
      <button type="submit" id="submit">Submit</button>
      <div class="extra_next_button_text">This form collects your details so that we can contact you and assist you with your enquiry. Please read our privacy policy to learn more on how we protect and manage your submitted data.</div>
    </div>

    <div class="step" id="step-5">
      <h2>Onboarding Finished your application is being processed...</h2>
    </div>
  </form>
</div>







      <!-- Multistep Form End -->

        
        
      </div>
    </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
	
