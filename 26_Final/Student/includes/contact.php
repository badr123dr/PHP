<?php

        define("TITLE" ,"CONTACT US" || "FRANKIE");
        include("../includes/header.php");







?>


<div>
        <hr>
            <h1>   CHAT WITH US     </h1>

            <link href="./assets/styles.css" rel="stylesheet">

            <form id="contact-form" action="" method="post">

                    <label for="name">YOUR NAME</label>
                    <input type="text"  id="name" name="name">

                    <label for="email">YOUR EMAIL</label>
                        <input type="text" id="email" name="email">


                    <label for="message">MESSAGE</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>



                    <input type="checkbox" name="subscribe" id="subscribe" value="subscribe" >
                    <label for="subscribe">CHECK IF YOU WANNA SUBSCRIBE PLEASE</label>

                    <input type="submit" class="button next" name="contact_subscribe" value="send message">




            </form>

        
</div>
        </hr>


    <?php    include("../includes/footer.php");           ?>