<?php
include __DIR__ . "./dataset.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <header>
        <section class="profile">
            <h2><?php isset($data['info']['name'] )? $data['info']['name'] : "NA" ;?></h2>
            <p>
                <?= $data['info']['address'];?> <br>
                Email: <?php if( array_key_exists("email",$data['info'])){
                    echo $data['info']['email'];
                } else{
                    echo "NA";
                }
                ?><br>
                Tel: <?= $data['info']['phone'] ?? "NA";?><br>
            </p>
        </section>
        <section class="profile-pic">
            <img src="<?= $data['info']['image'];?>">
        </section>
    </header>
    <main>
        <section>
            <h4>Career Objective</h4>
            <p><?= $data['Career Objective'];?></p>
        </section>
        <section>
            <h4>Present Status</h4>
            <p><?= $data['Present Status'];?></p>
        </section>

        <section class="education">
            <h4>Education</h4>
            <table>
                <tr>
                    <th>Exam</th>
                    <th>Board/University</th>
                    <th>Year</th>
                    <th>Name of Institution</th>
                    <th>Marks</th>
                </tr>

                <?php
                    foreach ($data['Education'] as $key => $value) :

                        if(is_array($value)){
                            if($key=="HSC"):
                                break;
                            endif;
                            echo '<tr>';
                            echo "<td>{$key}</td>" ;
                            foreach ($value as $value){
                                echo '<td>' . $value . '</td>';
                            }
                            echo '</tr>';
                        }else{
                            continue;
                        }
                        
                    endforeach;
                ?>
            </table>
        </section>

        <section>
            <h4>Computer Skills</h4>
            <table class="skill">
                <?php
                    foreach ($data['Computer skills'] as $key => $value) {
                        echo '<tr>';
                        echo "<td>{$key}</td>" ;
                        echo  '<td>:</td>';
                        echo '<td>' . implode(', ', $value) . '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </section>
        <section>
            <h4>Professional Experience</h4>
            <p><?= $data['Professional Experience'];?></p>
        </section>
        <section>
            <h4>Projects</h4>
            <?php
                foreach ($data['Projects'] as $key => $value){
                    echo '<ul>';
                    echo '<li>'.$key.'</li>';
                        echo '<ul style="list-style-type: circle">';
                            echo '<li>'.$value.'</li>';
                        echo '</ul>';
                    echo '</ul>';
                }
            ?>
        </section>
        <section>
            <h4>Achievements</h4>
            <ul class="dashed">
                <?php
                    foreach ($data['Achievements'] as $item) {
                        echo '<li>' . $item . '</li>';
                    }
                ?>
            </ul>
        </section>
        <se/section>
            <h4>Language</h4>
            <ul class="dashed">
                <?php
                    foreach ($data['Language'] as $item) {
                        echo '<li>' . $item . '</li>';
                    }
                ?>
            </ul>
        </section>
        <section class="personal-info">
            <h4>Personal Information</h4>
            <table>
                <?php
                    foreach ($data['Personal Information'] as $key => $value) {
                        echo '<tr>';
                        echo "<td>{$key}</td>" ;
                        echo  '<td>:</td>';
                        echo '<td>' . $value . '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </section>
        <section class="hobbies">
            <h4>Hobbies</h4>
            <ul class="dashed">
                <?php
                    foreach ($data['Hobbies'] as $item) {
                        echo '<li>' . $item . '</li>';
                    }
                ?>
            </ul>
        </section>
        <section class="games">
            <h4>Games</h4>
            <ul class="dashed">
                <?php
                    foreach ($data['Games'] as $item) {
                        echo '<li>' . $item . '</li>';
                    }
                ?>
            </ul>
        </section>
        <section class="reference">
            <h4>References</h4>
            <?php
                foreach ($data['References'] as $reference) {
                    $is_first = true;
                    echo "<p>";
                    foreach ($reference as $key => $value){
                        if ($is_first) {
                            echo '<strong>' . $value . '</strong> <br>';
                            $is_first = false;
                        } else {
                            echo  $value . '<br>';
                        } 
                    }
                    echo "</p>";
                }
            ?>
        </section>
    </main>
    <footer>
        <p>Copyright © Rownok Zahan Rupa, 2022</p>
    </footer>
</body>
</html>