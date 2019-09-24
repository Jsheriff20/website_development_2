
<?php 

function get_card_details($teams_name, $what_to_get){

    //get details from config file to help us connect to the database
    include("../config.php");


    $sql = "SELECT basketball_teams_website_items.teams_name, basketball_teams_website_items.teams_description,
        basketball_teams_website_images.images_path, basketball_teams_website_images.images_title
        FROM basketball_teams_website_items
        INNER JOIN basketball_teams_website_images
        ON basketball_teams_website_items.teams_id = basketball_teams_website_images.teams_id
        ;";



    $result = $conn->query($sql);

    $carousel_images_code = "";
    $concatenate_num = 1;
        
    if ($result->num_rows > 0) {
                            
        if($what_to_get == "slide_show"){

            while($row = $result->fetch_assoc()) {
    
                if($row["teams_name"] == $teams_name){
                    
                    //dont display first image from table as this is the logo
                    if($concatenate_num == 2){

                        $carousel_images_code .= '<div class="card-img-top carousel-item active">' . '<img class="d-block w-100" src="'
                            . $row["images_path"] . '" alt="' . $row["images_title"] .'">' . '</div>';
                        $first_concatenate = false;
                    }else if($concatenate_num > 2){

                    $carousel_images_code .= '<div class="card-img-top carousel-item">' . '<img class="d-block w-100" src="' . $row["images_path"]
                        . '" alt="' . $row["images_title"] .'">' . '</div>';
                    }

                    $concatenate_num++;						
                }
            }

            echo $carousel_images_code;
        }
        else{

            while($row = $result->fetch_assoc()) {
    
                if($row["teams_name"] == $teams_name){
            
                    echo $row[$what_to_get];	
                    break;
                }
            }
        }
    }
    else {

        echo "0 results";
    }

    $conn->close();

    
}


function get_card_article_buttons($teams_name){

    //used to display errors when testing remove once ready to be published.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    
    //get details from config file to help us connect to the database
    include("../config.php");


    $sql = "SELECT basketball_teams_website_items.teams_name, basketball_teams_website_articles.articles_title,
    basketball_teams_website_articles.articles_path, basketball_teams_website_sub_article_to_team.sub_teams_id,
    basketball_teams_website_sub_article_to_team.sub_articles_id
    FROM basketball_teams_website_items
    INNER JOIN basketball_teams_website_sub_article_to_team
    ON basketball_teams_website_items.teams_id = basketball_teams_website_sub_article_to_team.sub_teams_id
    INNER JOIN basketball_teams_website_articles
    ON basketball_teams_website_articles.articles_id = basketball_teams_website_sub_article_to_team.sub_articles_id ;";


    $result = $conn->query($sql);
        
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
    
            if($row["teams_name"] == $teams_name){
                    
                echo '<div class="card-footer text-center">' . '<a href="' . $row["articles_path"] . '" class="btn btn-primary streched-link">' . $row["articles_title"] . '</a><br>' . '</div>';
            }
        }
    }

    $conn->close();
}


function get_all_items(){
		
}
?>