<?php
    function echoListThumb($rsrcRoot, $person, $num, $GENRE){
        $_num = max($num, 1) < 2 ? null : $num;
        $name = $person['namefamilyjp'].' '.$person['namefirstjp'];
        $genrelist = ' ';
        $thumb = $person['imgthumb'.$_num] ? $person['imgthumb'.$_num] : 'blank_sq.jpg';

        //data-属性用のジャンルデータ整形
        foreach(range(1, 4) as $i){
            if($person['genre'.$_num.$i]) $genrelist .= substr($person['genre'.$_num.$i], 3) == 'n_None' ? '' : $GENRE[substr($person['genre'.$_num.$i], 3)].' ';
        }
        echo '<div class="list-thumb-elem" data-semi="'.$person['seminar'].'" data-genre="'.$genrelist.'" data-name="'.$name.'"><a class="list-thumb-anchor2work" href="work.php?i='.$person['idhash'].'&w='.$num.'"><div class="list-thumb-elem-inside">';

            echo '<p><img src="'.$rsrcRoot.'img/work_thumb/'.$thumb.'" class="list-thumb-img"></p>';
            echo '<p class="list-thumb-title ">'.$person['title'.$_num].'</p>';
            #echo '<p class="list-thumb-subtitle">'.($person['subtitle'.$_num] != "false" ? $person['subtitle'.$_num] : "　").'</p>';
            echo '<p class="list-thumb-name">'.$person['namefamilyjp'].' '.$person['namefirstjp'].'</p>';
            /*
            echo '<p class="list-thumb-genre">';
            foreach(range(1, 4) as $i){
                if($person['genre'.$_num.$i] != ''){
                    $genre = substr($person['genre'.$_num.$i], 3);
                    if($genre != 'n_None') echo $GENRE[$genre].' ';
                }
            }
            echo '</p>';
            */
        echo '</div></a></div>';
    }

    function createList_fromDatabase($ASSOC, $rsrcRoot){
        //read data from Database
        $conn = connectDatabase('g23_exhi', null, null, 'g23_exhi', null);
    
        $tableStudents = readDataAssoc_All($conn, 'g23_data', 'student_data', 'id');

        echo '<div id="list-thumb-flexbox">';

        # generate html foreach repetition
        foreach($tableStudents as $keyrow => $id){
            $student = readDataAssoc_fromID($conn, 'g23_data', 'student_data', $id['id']);
            $workSet = readDataAssoc_fromID($conn, 'g23_data', 'workset_data', $id['id']);
            $workEntered = readDataAssoc_fromID($conn, 'g23_data', 'workenter_data', $id['id']);
            $images = readDataAssoc_fromID($conn, 'g23_data', 'img_data', $id['id']);

            $person = array_merge($student, $workEntered);
            $person = array_merge($person, $images);
            $person = array_merge($person, $workSet);
            foreach(range(1, $person['multipleworks']) as $i){
                echoListThumb($rsrcRoot, $person, $i, $ASSOC);
            }
        }
        echo '</div>';

        pg_close($conn);
    }
?>
