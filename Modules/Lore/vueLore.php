<?php

    class VueLore{


        function __construct(){


        }

        function affichageLore($recupPages){
            echo "<div id='bestiaire'>";
                $page=0;
                echo"<div id='page".$page."'>";
                echo $recupPages['page1'];


                echo "</div>";
                $page++;
                echo"<div id='page".$page."'>";
                echo $recupPages['page2'];


                echo "</div>";



            echo "</div>";



        }
    }



?>