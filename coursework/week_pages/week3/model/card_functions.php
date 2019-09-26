
<?php

function get_card_details($teams_name, $what_to_get)
{

    //get details from config file to help us connect to the database
    include("connect.php");


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

        if ($what_to_get == "slide_show") {

            while ($row = $result->fetch_assoc()) {

                if ($row["teams_name"] == $teams_name) {

                    //dont display first image from table as this is the logo
                    if ($concatenate_num == 2) {

                        $carousel_images_code .= '<div class="card-img-top carousel-item active">' . '<img class="d-block w-100" src="'
                            . '../../' . $row["images_path"] . '" alt="' . $row["images_title"] . '">' . '</div>';
                        $first_concatenate = false;
                    } else if ($concatenate_num > 2) {

                        $carousel_images_code .= '<div class="card-img-top carousel-item">' . '<img class="d-block w-100" src="' . '../../' .
                            $row["images_path"] . '" alt="' . $row["images_title"] . '">' . '</div>';
                    }

                    $concatenate_num++;
                }
            }

            return json_encode($carousel_images_code);
        } else {

            while ($row = $result->fetch_assoc()) {

                if ($row["teams_name"] == $teams_name) {

                    return json_encode($row[$what_to_get]);
                    break;
                }
            }
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}


function get_card_article_buttons($teams_name)
{

    //get details from config file to help us connect to the database
    include("connect.php");


    $sql = "SELECT basketball_teams_website_items.teams_name, basketball_teams_website_articles.articles_title,
    basketball_teams_website_articles.articles_path, basketball_teams_website_sub_article_to_team.sub_teams_id,
    basketball_teams_website_sub_article_to_team.sub_articles_id
    FROM basketball_teams_website_items
    INNER JOIN basketball_teams_website_sub_article_to_team
    ON basketball_teams_website_items.teams_id = basketball_teams_website_sub_article_to_team.sub_teams_id
    INNER JOIN basketball_teams_website_articles
    ON basketball_teams_website_articles.articles_id = basketball_teams_website_sub_article_to_team.sub_articles_id ;";


    $result = $conn->query($sql);
    $article_buttons = "";

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            if ($row["teams_name"] == $teams_name) {

                $article_buttons .= '<div class="card-footer text-center">' . '<a href="' . $row["articles_path"] . '" class="btn btn-primary streched-link">' . $row["articles_title"] . '</a><br>' . '</div>';
            }
        }
    }

    $conn->close();

    return json_encode($article_buttons);
}


function get_all_items()
{

    //get details from config file to help us connect to the database
    include("connect.php");


    $sql = "SELECT * FROM basketball_teams_website_items";

    $teams_name = array();

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            array_push($teams_name, $row["teams_name"]);
        }
    }

    $conn->close();


    for ($i = 0; $i < sizeof($teams_name); $i++) {

        $cards_buttons_json = get_card_article_buttons($teams_name[$i]);
        $cards_slideshow_json = get_card_details($teams_name[$i], "slide_show");
        $cards_teams_description = get_card_details($teams_name[$i], "teams_description");

        $buttons = json_decode($cards_buttons_json);
        $slideshow = json_decode($cards_slideshow_json);
        $description = json_decode($cards_teams_description);



        //starting and ending rows 
        if ($i == 0) {

            echo '<div class="row">';
        } else if ($i == 3 || $i == 6 || $i == 9) {

            echo '</div">' . '</div>';
            echo '<div class="row">';
        }



        echo    '<div class="col-sm-4"  style="padding-bottom:50px;">' .
            '<div class="card border-dark" >' .

            '<div style="padding: 20px">' .

            '<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">' .

            '<div class="carousel-inner">' .

            $slideshow .
            '</div>' .
            '</div>' .
            '</div>' .


            '<div class="card-body text-center">' .

            '<h4 class="card-title">' . $teams_name[$i] . '</h4>' .
            '<p class="card-text">' . $description . '</p>' .
            '</div>' .


            $buttons .
            '</div>' .
            '</div>';

        //end final row
        if ($i == 11) {

            echo '</div">';
        }
    }
}
?>