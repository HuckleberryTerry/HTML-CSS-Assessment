<?php
    function get_news_cards($limiter){
        include("inc/connection.php");

        try{
            foreach ($conn->query("SELECT * FROM newscards LIMIT $limiter") as $row){
                echo "
                <div class='article-container'>
                    <div class='article-list-item " . $row['News_Cat'] . "'>
                        <a class='article-link' href='#'></a>
                        <div class='img-container'>
                        <a href='#' class='category btn-tooltip' title='View all: Business Development / Careers'>Careers</a>
                        <a class='img standard'>
                            <img src='" . $row['News_Image'] . "'>
                        </a>
                        </div>
                        <div class='block'>
                        <h3>
                            <a href='#'>" . $row['News_Title'] . "</a>
                        </h3>
                        <p>
                            " . $row['News_Para'] . "
                        </p>
                        <a class='btn btn-" . $row['News_Cat'] . "' href='#'>Read More</a>
                        <div class='user'>
                            <div class='avatar'>
                            <img src='" . $row['User_Image'] . "' alt='an Avatar image'>
                            </div>
                            <div class='details'>
                            <strong class='text-primary'>Posted by " . $row['User_Name'] . "</strong>
                            <br>
                            " . $row['News_Date'] . "
                            </div>
                        </div>
                        </div>
                    </div>
                </div>";
            }
        }
        catch(Exception $e){
            echo "Error in function: get_news_cards(): " . $e->getMessage();
        }
    }
?>