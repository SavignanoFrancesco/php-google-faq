<?php

    $faqs = [

            [
            "question" => 'question1',
            "answers" => ['answer1','answer2','answer3','answer4','answer5']
            ],
            [
            "question" => 'question2',
            "answers" => ['answer1','answer2','answer3','answer4','answer5']
            ],
            [
            "question" => 'question3',
            "answers" => ['answer1','answer2','answer3','answer4','answer5']
            ],

        ];

    echo var_dump($faqs);
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-google-faq</title>
        <link rel="stylesheet" href="dist/app.css">
    </head>
    <body>
        <div class="container">

            <?php

            foreach ($faqs as $faq_key => $faq_value) {

                    ?>

                    <h1><?php echo $faq_value["question"]; ?></h1>

                    <?php

            }

            ?>

        </div>
    </body>
</html>
