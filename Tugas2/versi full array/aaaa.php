
    <?php
        $quizHistoryQ = array(
            "q1" => array(
                "question"=>"HTML singkatan dari...",
                "options" => array(
                    "HyperText Markup Language",
                    "HyperTide Making Language",
                    "HidenText Markup Language",
                    "HyperText Making Language"),
                "answer" =>1
            ),

           "q2" => array(
                "question"=>"
                Kode-kode atau perintah dalam dokumen html disebut dengan <body>,<font>,…",
                "options" => array(
                    "Tag",
                    "Atribut",
                    "Command",
                    "Sign"),
                "answer" =>0
            ),

            "q3" =>array(
                "question"=>"Atribute untuk merubah bentuk huruf adalah …",
                "options" => array(
                    "Size",
                    "Font",
                    "Text",
                    "Face"),
                "answer" =>3
            ),

            "q4" =>array(
                "question"=>"Perintah tambahan dalam kode dalam HTML disebut dengan <….bgcolor=…><…size=”7” …>",
                "options" => array(
                    "Tag",
                    "Atribute",
                    "Command",
                    "Sign"),
                    "answer" =>1
            ),

            "q5" =>array(
                "question"=>"
                Atribute untuk merubah ukuran huruf menjadi lima adalah …",
                "options" => array(
                    "<..font size=50>",
                    "<..font size=5>",
                    "<..Text size=50>",
                    "<..text size=5>"),
                    "answer" =>1
            )

            
        );
        $index1 = array();
        echo "
        
    <form name='quiz' method='post'>";
        
        foreach( $quizHistoryQ as $index => $arr ){

            $question=$arr['question'];
            $options=$arr['options'];
            $answer=$arr['answer']; 

            echo '<h3>'.$question.'</h3>';
            echo '<ul>';
            foreach( $options as $i => $option ){
                echo "<input type='radio' name='{$index}[]' value='{$i}' />{$option} <br/>";
                $answer1 = $_POST[$index['q1']];
            }
            echo '</ul>';
            array_push($index1, $index);
        }
        
        // for($i = 0; $i <= count($index1); $i++){
        //     answer1 = $_POST[$index[$i]];
        // }
        // foreach( $quizHistoryQ as $index => $arr ){

        //     $question=$arr['question'];
        //     $options=$arr['options'];
        //     $answer=$arr['answer']; 

            
        //     foreach( $options as $i => $option ){
        //        if($_POST)
                
        //     }
            
        // }
        
        echo "
            <input type='submit' name='submit' value='Attempt'/>
        </form>";
        $answer1 = $_POST[$index[5]];
        echo $answer1;
        if(isset($_POST['submit'])){
        }
        ?>