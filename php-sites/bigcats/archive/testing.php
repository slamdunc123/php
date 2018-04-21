<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        
            //folder images v1.0 
            $imagesDirectory = "img/";

            if(is_dir($imagesDirectory))
            {
                $opendirectory = opendir($imagesDirectory);

                while (($image = readdir($opendirectory)) !== false)
                    {
                            if(($image == '.') || ($image == '..'))
                            {
                                    continue;
                            }

                            $imgFileType = pathinfo($image,PATHINFO_EXTENSION);

                            if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
                            {
                                    echo "<img src='img/".$image."' height='200' width='200'> ";
                            }
                }

                closedir($opendirectory);

            }
            /*
            //folder images v1.0 
            $search_dir = "img/";
            $images = glob("$search_dir/*.jpg");
            sort($images);
            //display images
            foreach ($images as $img) {
                echo "<img src='$img' height='150' width='150' /> ";
            }
            */
            
        ?> 