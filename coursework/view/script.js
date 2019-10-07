function validate_register() {
   
	const username = document.forms["register"]["username"].value;
    const password = document.forms["register"]["password"].value;
    const confirm_password = document.forms["register"]["confirm_password"].value;
    const first_name = document.forms["register"]["first_name"].value;
    const surname = document.forms["register"]["surname"].value;
    const email = document.forms["register"]["email"].value;
    const contact_number = document.forms["register"]["contact_number"].value;
    


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
 	else if (first_name.length < 2){

 		alert("First name is to short!");
        return false;
     }
     else if (surname.length < 2){

       alert("Surname is to short!");
       return false;
    }
    else if (email.length > 60){

        alert("Please enter a shorter email.");
       return false;
    }
 	else if (contact_number.length < 11){

 		alert("Please enter a valid contact number.");
        return false;
     }
     else if(confirm_password != password){

        alert("Your passwords do not match!");
        return false;
     }
}


function validate_comment() {

    session_login = document.forms["add_comment"]["session_login"].value;

    if(session_login == 1){

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
    else{

        alert("Please login first to create a comment");
        return false;
    }
}


function toggle_password_visability($text_field_name){
    
    var feild_id = document.getElementById($text_field_name);

    if (feild_id.type === "password") {
        feild_id.type = "text";
    } else {
        feild_id.type = "password";
    }
}


$('.carousel').carousel({
	interval: 250
  })