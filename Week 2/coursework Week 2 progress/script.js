function validate_register() {
	const username = document.forms["register"]["username"].value;
	const password = document.forms["register"]["password"].value;
 	const name = document.forms["register"]["name"].value;
 	const contactNumber = document.forms["register"]["contact_number"].value;
    if (username.length < 5) {
        alert("Username is to short!");
        return false;
    }
	else if (username.length > 20) {
        alert("Username is to long!");
        return false;
    }
 	else if (password.length < 7){
 		alert("Check password!");
        return false;
 	}
 	else if (name.length == ""){
 		alert("Name is to short!");
        return false;
 	}
 	else if (contact_number < 5){
 		alert("Please enter a valid contact number.");
        return false;
 	}
}


function validate_comment() {

	const comments_title = document.forms["add_comment"]["comments_title"].value;
	const comments_text = document.forms["add_comment"]["comments_text"].value;

    if (comments_title.length < 5) {

        alert("Your comment's title is too short!");
        return false;
    }
	else if (comments_text.length < 10) {

        alert("Your comment's text is too short!");
        return false;
    }
}


$('.carousel').carousel({
	interval: 250
  })











refresh_normal = true;

$(document).ready(function(){
	$('#select_service').change(function(){

		var inputValue = $(this).val();

		$.post('submit.php', { serviceValue: inputValue }, function(data){
		});
	});


	$('#select_date').change(function(){

			var inputValue = $(this).val();

			$.post('submit.php', { dateValue: inputValue }, function(data){
			});
	});


	$(".hide_select_time_targets").hide();
	$(".confirm_deletion").hide();


	$("#select_service").click(function(){
		$(".hide_select_time_targets").hide();
	});


	$("#select_date").click(function(){
		$(".hide_select_time_targets").hide();
	});


	$("#show_available_times").click(function(){
		if(check_valid()){
			$(".hide_select_time_targets").show();
			
		}
	});

});

$first_click = true;
function confirm_delete_booking($booking){
	if($first_click == true){

		$first_click = false;
		if($booking = "booking1"){

			$("#confirm_deletion_booking1").show();
		}
		else{

			$("#confirm_deletion_booking2").show();
		}
		return false;
	}
	else{

		$first_click = true;
	}
}

function check_valid(){
	var Bookingservice = document.forms["book_appointment"]["select_service"].value;
	var Bookingdate = document.forms["book_appointment"]["select_date"].value;

	if (Bookingdate == "Fail" || Bookingservice == "Fail"){
		return false;
	}
	else{
		return true;
	}
	
}

function reload_booking_page(){

  location.reload();

}

function hide_unavailable_times(hide_first_time, hide_second_time, hide_third_time, hide_fourth_time, hide_fifth_time) {
	
	if(hide_first_time == "true"){
		document.getElementById("select_time").options[1].disabled = true;
	}
	if(hide_second_time == "true"){
		document.getElementById("select_time").options[2].disabled = true;
	}
	if(hide_third_time == "true"){
		document.getElementById("select_time").options[3].disabled = true;
	}
	if(hide_fourth_time == "true"){
		document.getElementById("select_time").options[4].disabled = true;
	}
	if(hide_fifth_time == "true"){
		document.getElementById("select_time").options[5].disabled = true;
	}
  
}



function validateForm() {
	var Bookingservice = document.forms["book_appointment"]["select_service"].value;
	var Bookingdate = document.forms["book_appointment"]["select_date"].value;
	var Bookingtime = document.forms["book_appointment"]["select_time"].value;
	if (Bookingservice == "Fail" || Bookingdate == "Fail" || Bookingtime == "Fail" ) {
	  alert("Please select a Service, Date and Time");
	  return false;
	}
}

	function textCounter(field,field2,maxlimit)
	{
		var countfield = document.getElementById(field2);
		if ( field.value.length > maxlimit ) {
			field.value = field.value.substring( 0, maxlimit );
			return false;
		} else {
			countfield.value = maxlimit - field.value.length;
		}
	}


	
	var pauseStatus = "";
	const StudentAdvisoryAudio = new Audio('Audio/StudentAdvisoryAudio.mp3');
	const FinancialAdvisoryAudio = new Audio('Audio/FinancialAdvisoryAudio.mp3');
	const DisabilitySupportAudio = new Audio('Audio/DisabilitySupportAudio.mp3');
	const LearningSupportAudio = new Audio('Audio/LearningSupportAudio.mp3');
	const MentalHealthAndWelfareSupportAudio = new Audio('Audio/MentalHealthAndWelfareSupportAudio.mp3');

	function HomeAudioFunction(audio) {
		switch (audio){
			case 'StudentAdvisory':
				if(pauseStatus != "StudentAdvisory"){
					StudentAdvisoryAudio.play();
					pauseStatus = "StudentAdvisory";
					break;
				}
				else{
					StudentAdvisoryAudio.pause();
					StudentAdvisoryAudio.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'FinancialAdvisory':
				if(pauseStatus != "FinancialAdvisory"){
					FinancialAdvisoryAudio.play();
					pauseStatus = "FinancialAdvisory";
					break;
				}
				else{
					FinancialAdvisoryAudio.pause();
					FinancialAdvisoryAudio.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'DisabilitySupport':
				if(pauseStatus != "DisabilitySupport"){
					DisabilitySupportAudio.play();
					pauseStatus = "DisabilitySupport";
					break;
				}
				else{
					DisabilitySupportAudio.pause();
					DisabilitySupportAudio.currentTime = 0;
					pauseStatus = "";
					break;
				}

			case 'LearningSupport':
				if(pauseStatus != "LearningSupport"){
					LearningSupportAudio.play();
					pauseStatus = "LearningSupport";
					break;
				}
				else{
					LearningSupportAudio.pause();
					LearningSupportAudio.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'MentalHealthAndWelfareSupport':
				if(pauseStatus != "MentalHealthAndWelfareSupport"){
					MentalHealthAndWelfareSupportAudio.play();
					pauseStatus = "MentalHealthAndWelfareSupport";
					break;
				}
				else{
					MentalHealthAndWelfareSupportAudio.pause();
					MentalHealthAndWelfareSupportAudio.currentTime = 0;
					pauseStatus = "";
					break;
				}
		}
	}


	function play_booking_step_audio(audio_file_name){
		pauseStatus = audio_file_name;

		audio_file = "../../Audio/" + audio_file_name + ".mp3";
		audio_file = new Audio(audio_file);
		
		if(pauseStatus != audio_file_name){
			audio_file.play();
		}
	}


	function stopSound(){
		
				audio_file = "../../Audio/" + pauseStatus + ".mp3";
				audio_file = new Audio(audio_file);

				audio_file.pause();
				audio_file.currentTime = 0;
				pauseStatus = "";
	}




	var DisabilityPageContent1 = new Audio('../../Audio/DisabilitySupportPage1.mp3');
	var DisabilityPageContent2 = new Audio('../../Audio/DisabilitySupportPage2.mp3');
	var DisabilityPageContent3 = new Audio('../../Audio/DisabilitySupportPage3.mp3');
	var DisabilityPageContent4 = new Audio('../../Audio/DisabilitySupportPage4.mp3');
	var DisabilityPageContent5 = new Audio('../../Audio/DisabilitySupportPage5.mp3');

function DisabilityPageAudioFunction(audio) {

	switch (audio){
		case 'DisabilitySupportPage1':
			if(pauseStatus != "DisabilitySupportPage1"){
				DisabilityPageContent1.play();
				pauseStatus = "DisabilitySupportPage1";
				break;
			}
			else{
				DisabilityPageContent1.pause();
				DisabilityPageContent1.currentTime = 0;
				pauseStatus = "";
				break;
			}

		case 'DisabilitySupportPage2':
			if(pauseStatus != "DisabilitySupportPage2"){
				DisabilityPageContent2.play();
				pauseStatus = "DisabilitySupportPage2";
				break;
			}
			else{
				DisabilityPageContent2.pause();
				DisabilityPageContent2.currentTime = 0;
				pauseStatus = "";
				break;
			}

		case 'DisabilitySupportPage3':
			if(pauseStatus != "DisabilitySupportPage3"){
				DisabilityPageContent3.play();
				pauseStatus = "DisabilitySupportPage3";
				break;
			}
			else{
				DisabilityPageContent3.pause();
				DisabilityPageContent3.currentTime = 0;
				pauseStatus = "";
				break;
			}

		case 'DisabilitySupportPage4':
			if(pauseStatus != "DisabilitySupportPage4"){
				DisabilityPageContent4.play();
				pauseStatus = "DisabilitySupportPage4";
				break;
			}
			else{
				DisabilityPageContent4.pause();
				DisabilityPageContent4.currentTime = 0;
				pauseStatus = "";
				break;
			}

		case 'DisabilitySupportPage5':
			if(pauseStatus != "DisabilitySupportPage5"){
				DisabilityPageContent5.play();
					pauseStatus = "DisabilitySupportPage5";
				break;
			}
			else{
				DisabilityPageContent5.pause();
				DisabilityPageContent5.currentTime = 0;
				pauseStatus = "";
				break;
			}
	}
}

var FinancialPageContent1 = new Audio('../../Audio/FinancialAdvisoryPage1.mp3');
var FinancialPageContent2 = new Audio('../../Audio/FinancialAdvisoryPage2.mp3');
var FinancialPageContent3 = new Audio('../../Audio/FinancialAdvisoryPage3.mp3');
var FinancialPageContent4 = new Audio('../../Audio/FinancialAdvisoryPage4.mp3');
var FinancialPageContent5 = new Audio('../../Audio/FinancialAdvisoryPage5.mp3');

	function FinancialPageAudioFunction(audio) {

		switch (audio){
			case 'FinancialAdvisoryPage1':
				if(pauseStatus != "FinancialAdvisoryPage1"){
					FinancialPageContent1.play();
					pauseStatus = "FinancialAdvisoryPage1";
					break;
				}
				else{
					FinancialPageContent1.pause();
					FinancialPageContent1.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'FinancialAdvisoryPage2':
				if(pauseStatus != "FinancialAdvisoryPage2"){
					FinancialPageContent2.play();
					pauseStatus = "FinancialAdvisoryPage2";
					break;
				}
				else{
					FinancialPageContent2.pause();
					FinancialPageContent2.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'FinancialAdvisoryPage3':
				if(pauseStatus != "FinancialAdvisoryPage3"){
					FinancialPageContent3.play();
					pauseStatus = "FinancialAdvisoryPage3";
					break;
				}
				else{
					FinancialPageContent3.pause();
					FinancialPageContent3.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'FinancialAdvisoryPage4':
				if(pauseStatus != "FinancialAdvisoryPage4"){
					FinancialPageContent4.play();
					pauseStatus = "FinancialAdvisoryPage4";
					break;
				}
				else{
					FinancialPageContent4.pause();
					FinancialPageContent4.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'FinancialAdvisoryPage5':
				if(pauseStatus != "FinancialAdvisoryPage5"){
					FinancialPageContent5.play();
					pauseStatus = "FinancialAdvisoryPage5";
					break;
				}
				else{
					FinancialPageContent5.pause();
					FinancialPageContent5.currentTime = 0;
					pauseStatus = "";
					break;
				}
		}
	}
	

	var LearningPageContent1 = new Audio('../../Audio/LearningSupportPage1.mp3');
	var LearningPageContent2 = new Audio('../../Audio/LearningSupportPage2.mp3');
	var LearningPageContent3 = new Audio('../../Audio/LearningSupportPage3.mp3');
	var LearningPageContent4 = new Audio('../../Audio/LearningSupportPage4.mp3');
	var LearningPageContent5 = new Audio('../../Audio/LearningSupportPage5.mp3');

	function LearningPageAudioFunction(audio) {


		switch (audio){
			case 'LearningSupportPage1':
				if(pauseStatus != "LearningSupportPage1"){
					LearningPageContent1.play();
					pauseStatus = "LearningSupportPage1";
					break;
				}
				else{
					LearningPageContent1.pause();
					LearningPageContent1.currentTime = 0;
					pauseStatus = "";
					break;
				}

				
			case 'LearningSupportPage2':
				if(pauseStatus != "LearningSupportPage2"){
					LearningPageContent2.play();
					pauseStatus = "LearningSupportPage2";
					break;
				}
				else{
					LearningPageContent2.pause();
					LearningPageContent2.currentTime = 0;
					pauseStatus = "";
					break;
				}

			
			case 'LearningSupportPage3':
				if(pauseStatus != "LearningSupportPage3"){
					LearningPageContent3.play();
					pauseStatus = "LearningSupportPage3";
					break;
				}
				else{
					LearningPageContent3.pause();
					LearningPageContent3.currentTime = 0;
					pauseStatus = "";
					break;
				}

				
			case 'LearningSupportPage4':
				if(pauseStatus != "LearningSupportPage4"){
					LearningPageContent4.play();
					pauseStatus = "LearningSupportPage4";
					break;
				}
				else{
					LearningPageContent4.pause();
					LearningPageContent4.currentTime = 0;
					pauseStatus = "";
					break;
				}

			
			case 'LearningSupportPage5':
				if(pauseStatus != "LearningSupportPage5"){
					LearningPageContent5.play();
					pauseStatus = "LearningSupportPage5";
					break;
				}
				else{
					LearningPageContent5.pause();
					LearningPageContent5.currentTime = 0;
					pauseStatus = "";
					break;
				}
		}
	}


	var MentalHealthPageContent1 = new Audio('../../Audio/MentalHealthAndWelFareSupportPage1.mp3');
	var MentalHealthPageContent2 = new Audio('../../Audio/MentalHealthAndWelFareSupportPage2.mp3');
	var MentalHealthPageContent3 = new Audio('../../Audio/MentalHealthAndWelFareSupportPage3.mp3');
	var MentalHealthPageContent4 = new Audio('../../Audio/MentalHealthAndWelFareSupportPage4.mp3');
	var MentalHealthPageContent5 = new Audio('../../Audio/MentalHealthAndWelFareSupportPage5.mp3');

	function MentalHealthPageAudioFunction(audio) {


		switch (audio){
			case 'MentalHealthAndWelFareSupportPage1':
			if(pauseStatus != "MentalHealthAndWelFareSupportPage1"){
				MentalHealthPageContent1.play();
				pauseStatus = "MentalHealthAndWelFareSupportPage1";
				break;
			}
			else{
				MentalHealthPageContent1.pause();
				MentalHealthPageContent1.currentTime = 0;
				pauseStatus = "";
				break;
			}

			
			case 'MentalHealthAndWelFareSupportPage2':
				if(pauseStatus != "MentalHealthAndWelFareSupportPage2"){
					MentalHealthPageContent2.play();
					pauseStatus = "MentalHealthAndWelFareSupportPage2";
					break;
				}
				else{
					MentalHealthPageContent2.pause();
					MentalHealthPageContent2.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'MentalHealthAndWelFareSupportPage3':
				if(pauseStatus != "MentalHealthAndWelFareSupportPage3"){
					MentalHealthPageContent3.play();
					pauseStatus = "MentalHealthAndWelFareSupportPage3";
					break;
				}
				else{
					MentalHealthPageContent3.pause();
					MentalHealthPageContent3.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'MentalHealthAndWelFareSupportPage4':
				if(pauseStatus != "MentalHealthAndWelFareSupportPage4"){
					MentalHealthPageContent4.play();
					pauseStatus = "MentalHealthAndWelFareSupportPage4";
					break;
				}
				else{
					MentalHealthPageContent4.pause();
					MentalHealthPageContent4.currentTime = 0;
					pauseStatus = "";
					break;
				}


			case 'MentalHealthAndWelFareSupportPage5':
				if(pauseStatus != "MentalHealthAndWelFareSupportPage5"){
					MentalHealthPageContent5.play();
					pauseStatus = "MentalHealthAndWelFareSupportPage5";
					break;
				}
				else{
					MentalHealthPageContent5.pause();
					MentalHealthPageContent5.currentTime = 0;
					pauseStatus = "";
					break;
				}
		}
	}


	var StudentPageContent1 = new Audio('../../Audio/StudentAdvisoryPage1.mp3');
	var StudentPageContent2 = new Audio('../../Audio/StudentAdvisoryPage2.mp3');
	var StudentPageContent3 = new Audio('../../Audio/StudentAdvisoryPage3.mp3');
	var StudentPageContent4 = new Audio('../../Audio/StudentAdvisoryPage4.mp3');
	var StudentPageContent5 = new Audio('../../Audio/StudentAdvisoryPage5.mp3');
function StudentPageAudioFunction(audio) {

	switch (audio){
		case 'StudentAdvisoryPage1':
			if(pauseStatus != "StudentAdvisoryPage1"){
				StudentPageContent1.play();
				pauseStatus = "StudentAdvisoryPage1";
				break;
			}
			else{
				StudentPageContent1.pause();
				StudentPageContent1.currentTime = 0;
				pauseStatus = "";
				break;
			}
			

		case 'StudentAdvisoryPage2':
			if(pauseStatus != "StudentAdvisoryPage2"){
				StudentPageContent2.play();
				pauseStatus = "StudentAdvisoryPage2";
				break;
			}
			else{
				StudentPageContent2.pause();
				StudentPageContent2.currentTime = 0;
				pauseStatus = "";
				break;
			}


		case 'StudentAdvisoryPage3':
			if(pauseStatus != "StudentAdvisoryPage3"){
				StudentPageContent3.play();
				pauseStatus = "StudentAdvisoryPage3";
				break;
			}
			else{
				StudentPageContent3.pause();
				StudentPageContent3.currentTime = 0;
				pauseStatus = "";
				break;
			}


		case 'StudentAdvisoryPage4':
			if(pauseStatus != "StudentAdvisoryPage4"){
				StudentPageContent4.play();
				pauseStatus = "StudentAdvisoryPage4";
				break;
			}
			else{
				StudentPageContent4.pause();
				StudentPageContent4.currentTime = 0;
				pauseStatus = "";
				break;
			}


		case 'StudentAdvisoryPage5':
			if(pauseStatus != "StudentAdvisoryPage5"){
				StudentPageContent5.play();
				pauseStatus = "StudentAdvisoryPage5";
				break;
			}
			else{
				StudentPageContent5.pause();
				StudentPageContent5.currentTime = 0;
				pauseStatus = "";
				break;
			}
	}
	
}
	
	

	
$(document).ready(function(){
      setColor();
      $('select.select_service').change(function(){
            setColor();       
		 });
		 $('select.select_date').change(function(){
            setColor();       
		 });
		 $('select.select_time').change(function(){
			setColor();       
	});
});

function setColor()
{
		var serviceValue =  $('select.select_service').find('option:selected').attr('value');
		if (serviceValue == "Fail"){
			$('select.select_service').css('background', "#FF6666"); 
		}
		else{
			$('select.select_service').css('background', "white"); 
		}



		var dateValue =  $('select.select_date').find('option:selected').attr('value');
		if (dateValue == "Fail"){
			$('select.select_date').css('background', "#FF6666"); 
		}
		else{
			$('select.select_date').css('background', "white"); 
		}



		var timeValue =  $('select.select_time').find('option:selected').attr('value');
		if (timeValue == "Fail"){
			$('select.select_time').css('background', "#FF6666"); 
		}
		else{
			$('select.select_time').css('background', "white"); 
		}
   
}
    
