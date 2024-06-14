//   $(document).on('click', '#toggle-btn-one', function () {
//     let checkboxContent = $('#checkbox-4');
//     let toggleBtn = $(this);

//     if (checkboxContent.is(':visible')) {
//       toggleBtn.text('+');
//     } else {
//       toggleBtn.text('-');
//     }

//     checkboxContent.toggle();
//   });

//   $(document).on('click', '#toggle-btn', function () {
//     let checkboxContent2 = $('#checkbox-2');
//     let toggleBtn2 = $(this);

//     if (checkboxContent2.is(':visible')) {
//       toggleBtn2.text('+');
//     } else {
//       toggleBtn2.text('-');
//     }

//     checkboxContent2.toggle();
//   });


// $(document).ready(function() {
//     // Function to toggle button visibility
//     function toggleButtonVisibility() {
//         if ($("#textarea-2").hasClass("forminator-hidden") || !$(".forminator-button-back").hasClass("forminator-hidden")) {
//             $(".forminator-button-next").hide();
//         } else {
//             $(".forminator-button-next").show();
//         }
		
		
		
		
//     }
    
//     // Call toggleButtonVisibility on page load
//     toggleButtonVisibility();
    
//     // Define a function to observe DOM changes and other events
//     function observeChanges() {
//         toggleButtonVisibility(); // Check visibility on DOM changes
		
// 		// Test
// 			let isOptionSelected = false;

// 				$('.select2-selection__rendered').each(function() {
// 					var title = $(this).attr('title');

// 					if (title === 'NONE' || title === 'School' || title === 'GCSE') {
// 						isOptionSelected = true;
// 					}
// 				});

// 				// Use the isOptionSelected variable in another condition
// 				if (isOptionSelected) {
// 					//console.log('One of the options (NONE, School, GCSE) is selected.');
// 					// Perform your actions here
// 					$(".forminator-button-next").addClass("show_now_first"); // Show the button if file is selected
// 				} else {
// 					//console.log('None of the specified options are selected.');
// 					$(".forminator-button-next").removeClass("show_now_first");
// 				}

// 		// End Test
		
// 		if ($("#upload-3 input").val() !== "") {
// 				$(".forminator-button-next").addClass("show_now"); // Show the button if file is selected
// 			}
// 		if ($(".forminator-button-back").hasClass("forminator-hidden")) {
// 				$(".forminator-button-next").removeClass("show_now");
// 			}
// 		// Add change event listener to #forminator-field-upload-3_6646655a02821
// 		$("#upload-3 input").change(function() {
// 			// Check if any file is selected
// 			if ($(this).val() !== "") {
// 				$(".forminator-button-next").addClass("show_now"); // Show the button if file is selected
// 			}
			
// 		});
// 		$("#upload-3 .forminator-icon-close").click(function() {
// 			$(".forminator-button-next").removeClass("show_now");
			
// 		});
		
		
//     }

// 	function observeload() {
		
		
// 	}
	
//     // Configure the observer to watch for changes in the entire document's subtree
//     const observerConfig = { childList: true, subtree: true };

//     // Start observing the document
//     const observer = new MutationObserver(observeChanges);
//     observer.observe(document.documentElement, observerConfig);

//     // Check visibility on window load
//     $(window).on('load', function() {
//         observeChanges();
// 		observeload();
		
		
		
		
//     });

//     // Check visibility on click event
//     $(document).on('click', function() {
//         observeChanges();
		
				
		
//     });

//     // Check visibility on scroll event
//     $(window).on('scroll', function() {
//         observeChanges();
//     });

    
// });


jQuery(document).ready(function($) {
  let currentStep = 1;
  const totalSteps = 5;
  let recaptchaToken = null;

  function showStep(step) {
      $('.step').removeClass('active');
      $('#step-' + step).addClass('active');
      updateNavigation(step);
  }

  function updateNavigation(step) {
      if (step === 1 || step === totalSteps) {
          $('#back').hide();
      } else {
          $('#back').show();
      }
  }

  function validateFields(step) {
      let isValid = true;
      const today = new Date().toISOString().split('T')[0];

      // Validate regular required fields
      $('#step-' + step + ' [required]').each(function() {
          if (!this.checkValidity()) {
              $(this).addClass('invalid');
              isValid = false;
          } else {
              $(this).removeClass('invalid');
          }
      });

      // Validate "Languages Spoken" section
      if (step === 3) { // Assuming "Languages Spoken" is in step 3
          let languagesChecked = $('#step-3 input[name="languages[]"]:checked').length > 0;
          if (!languagesChecked) {
              $('#step-3 .languages-section').addClass('invalid');
              isValid = false;
          } else {
              $('#step-3 .languages-section').removeClass('invalid');
          }
      }

      // Validate DOB field
      let dobField = $('#dob');
      if (dobField.length && dobField.val() > today) {
          dobField.addClass('invalid');
          isValid = false;
      } else {
          dobField.removeClass('invalid');
      }

      return isValid;
  }

  function submitForm() {
      var education = $('#education').val();
      var experience = $('#experience').val();

      if ((education !== 'highschool' && education !== 'none' && education !== 'gcse') && experience !== 'less_than_5') {
          if (!recaptchaToken) {
              alert('Please complete the reCAPTCHA test.');
              return;
          }
      }

      var formData = new FormData($('#form')[0]);
      formData.append('action', 'submit_form');
      formData.append('security', $('#submit_form_nonce_field').val());
      if (recaptchaToken) {
          formData.append('g-recaptcha-response', recaptchaToken);
      }

      $.ajax({
          url: ajaxurl,
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
              $('.next').hide();
              $('#back').hide(); // Hide the back button on successful submission
              if (education === 'highschool' || education === 'none' || education === 'gcse' || experience === 'less_than_5') {
                  $('#form').append('<div class="step" id="step-6" style="text-align: center;"><h2>Thank you for your interest...</h2></div>');
                  $('#step-6').addClass('active');
              } else {
                  $('#step-4').removeClass('active');
                  $('#step-5').addClass('active');
                  $('#submit').hide();
              }
          }
      });
  }

  $('#education').change(function() {
      var education = $(this).val();
      if (education === 'highschool' || education === 'none' || education === 'gcse') {
        if ($('#surname').val() !== '' && $('#firstname').val() !== '' && $('#email').val() !== '') {
          // If none of them have the 'invalid' class, execute submitForm() function
          submitForm();
      }
      } else {
          $('.next').show();
          showStep(currentStep);
      }
  });

  $('#experience').change(function() {
      var experience = $(this).val();
      if (experience === 'less_than_5') {
        if ($('#surname').val() !== '' && $('#firstname').val() !== '' && $('#email').val() !== '') {
          // If none of them have the 'invalid' class, execute submitForm() function
          submitForm();
      }
      } else {
          $('.next').show();
          showStep(currentStep);
      }
  });

  $('#next-1').click(function() {
      if (validateFields(currentStep)) {
          var education = $('#education').val();
          if (education !== 'highschool' && education !== 'none' && education !== 'gcse') {
              currentStep++;
              showStep(currentStep);
          }
      }
  });

  $('#next-2').click(function() {
      if (validateFields(currentStep)) {
          var experience = $('#experience').val();
          if (experience !== 'less_than_5') {
              currentStep++;
              showStep(currentStep);
          }
      }
  });

  $('#next-3').click(function() {
      if (validateFields(currentStep)) {
          currentStep++;
          showStep(currentStep);
      }
  });

  $('#back').click(function() {
      if (currentStep > 1) {
          currentStep--;
          showStep(currentStep);
      }
  });

  $('#continent').change(function() {
      var continent = $(this).val();
      $('#country-selection').hide();
      $('.country').hide();
      if (continent) {
          $('#country-selection').show();
          $('.' + continent).show();
      }
  });

  $('#form').submit(function(e) {
      e.preventDefault();
      if (validateFields(currentStep)) {
          submitForm();
      }
  });

  // Callback function to set recaptchaToken after the user completes the reCAPTCHA test
  window.setRecaptchaToken = function(token) {
      recaptchaToken = token;
  };

  // Set max date for DOB field to today
  $('#dob').attr('max', new Date().toISOString().split('T')[0]);

  showStep(currentStep);
  
});
