<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis</title>
    
</head>

<body>
    <?php
        $soal = [
            "q1" => [
                "question"=>"HTML singkatan dari...",
                "options" => [
                    0 => "HyperText Markup Language",
                    1 => "HyperTide Making Language",
                    2 => "HidenText Markup Language",
                    3 => "HyperText Making Language"],
                "answer" => 1
                ],

           "q2" => [
                "question"=>"
                Kode-kode atau perintah dalam dokumen html disebut dengan body,font,…",
                "options" => [
                    0 =>"Tag",
                    1 =>"Atribut",
                    2 =>"Command",
                    3 =>"Sign"],
                "answer" =>0
                ],

            "q3" =>[
                "question"=>"Atribute untuk merubah bentuk huruf adalah …",
                "options" => [
                    0 =>"Size",
                    1 =>"Font",
                    2 =>"Text",
                    3 =>"Face"],
                "answer" =>3
            ],

            "q4" =>[
                "question"=>"Perintah tambahan dalam kode dalam HTML disebut dengan <….bgcolor=…><…size=”7” …>",
                "options" => [
                    0 =>"Tag",
                    1 =>"Atribute",
                    2 =>"Command",
                    3 =>"Sign"],
                "answer" =>1
                ],

            "q5" =>[
                "question"=>"
                Atribute untuk merubah ukuran huruf menjadi lima adalah …",
                "options" => [
                    0 =>"<..font size=50>",
                    1 =>"<..font size=5>",
                    2 =>"<..Text size=50>",
                    3 =>"<..text size=5>"],
                "answer" =>1
            ]    
        ];

    $page = ! empty( $_GET['page'] ) ? (int) $_GET['page'] : 1;
    $total = count( $soal );  
    $batas = 1; //per page    
    $totalPages = ceil( $total/ $batas ); 
    $page = max($page, 1); 
    $page = min($page, $totalPages); 

    $offset = ($page - 1) * $batas;
    if( $offset < 0 ) $offset = 0;
    $soal = array_slice( $soal, $offset, $batas );
    ?>

    <!-- print soal -->
    <?php 
        echo "
        <form name='quiz' method='post'>";

        foreach( $soal as $index => $arr ){

            $question=$arr['question'];
            $options=$arr['options'];
            $answer=$arr['answer']; 

            echo '<h3>'.$question.'</h3>';
            echo '<ul>';
            foreach( $options as $i => $option ){
                echo "<input type='radio' name='txt' value='{$i}'/>{$option}<br/>";
    
            }echo '</ul>';
        }
        $arr = array();
        for($i=0; $i<5; $i++){
            $arr[$i] = $_POST['txt'];
        }
    ?>

    <!-- navigasi
    <div class="navigasi">
    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
       <a  href="?page=<?= $i; ?>"><?= $i;?></a>
    <?php 
        };
    ?>
    </div>   -->


    <!-- navigasi -->

    <?php if($page > 1) { ?>
       <a  href="?page=<? $page - 1; ?>">&laquo;</a>
    <?php 
        };
    ?>    

    <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
        <?php if($i == $page) { ?>
            <a href="?page=<?= $i; ?>" style="font-weight: bold ;color :brown" ><?= $i;?>  </a>
        <?php 
        }else { ?>
            <a  href="?page=<?= $i; ?>"><?= $i;?></a>
        <?php 
             };
         ?>
    <?php 
         };
    ?>

    <?php if($page < $totalPages) { ?>
       <a  href="?page=<? $page + 1; ?>">&raquo;</a>
    <?php 
        };
    ?>  
 

    <!-- submit -->
    <?php
        echo "
        <br>.<input type='submit' name='sub' value='Submit'/></form>";
    ?>
    </div>
    
</body>
</html>
