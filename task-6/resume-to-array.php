<?php
    $data = [
        'info'=> [
            'name'=> 'Rownok Zahan Rupa',
            'address'=> 'Nilphamari Sadar,Nilphamari',
            'email' => 'rownokzahan9@gmail.com',
            'phone' => '+880XXXXXXXXXX',
            'image' => 'image/profilePic.jpg',
        ],
        'Career Objective' => "Seeking a challenging position in a reputed organization where I can learn new skills, expand my knowledge, and leverage my learnings. To get an opportunity where I can make the best of my potential and contribute to the organization's growth.",
        'Present Status' => 'Put your current status here',
        'Education' => [
            'Honurs' => [
                'board' => 'UGC',
                'year' => '2022',
                'institution' => 'City University',
                'marks' => '3.49',
            ],
            'HSC' => [
                'board' => 'Dinajpur',
                'year' => '2018',
                'institution' => "Nilphamari Govt. Women's College",
                'marks' => '3.50',
            ],
            'SSC' => [
                'board' => 'Dinajpur',
                'year' => '2015',
                'institution' => "Nilphamari Govt. Girls' High School",
                'marks' => '4.89',
            ],
        ],
        'Computer skills'=> [
            'Programming Languages'=> ['Javascirpt', 'PHP'],
            'Web based skills'=> ['HTML', 'CSS', 'Bootsrap', 'Github(Basic)'],
            'Database skills' => ['Mysql'],
            'Scripting skills' => ['Javascirpt', 'PHP'],
            'Development Tools' => ['VS Code'],
            'Others' => ['MS Word', 'MS Powerpoint'],
        ],
        'Professional Experience' => 'None',
        'Projects' => [
            'Perfect Fit' => "A website that let's customer to customize their dress which has been build using HTML,CSS,Bootsrap,Javascirpt,PHP",
        ],
        'Achievements' => ['None'],
        'Language'=> ['Bangla', 'English'],
        'Personal Information'=> [
            'Full Name'=> 'Rownok Zahan Rupa',
            "Father's Name"=> 'Abdur Rauf Sarker',
            "Mother's Name" => 'Nasima Begum',
            'Date of Birth' => '13-08-1999',
            'Sex' => 'Female',
            'Marital Status' => 'Unmarried',
            'Nationality' => 'Bangladeshi',
            'Religion' => 'Islam',
            'Blood Group' => 'A+',
            'Present Address' => 'Kalitola,Nilphamari Sadar,Nilphamari',
            'Permanent Address' => 'Kalitola,Nilphamari Sadar,Nilphamari',
        ],
        'Hobbies' => [''],
        'Games' => [''],
        'References' => [
            [
                'name'=> 'Mr. XYZ',
                'address'=> 'fake address',
                'email' => 'fake@gmail.com',
                'phone' => '+880XXXXXXXXXX'
            ],
            [
                'name'=> 'Mr. ABC',
                'address'=> 'fake address',
                'email' => 'fake@gmail.com',
                'phone' => '+880XXXXXXXXXX'
            ],
        ],
    ];
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
            <h2><?= $data['info']['name'];?></h2>
            <p>
                <?= $data['info']['address'];?> <br>
                Email: <?= $data['info']['email'];?><br>
                Tel: <?= $data['info']['phone'];?><br>
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
                    foreach ($data['Education'] as $key => $value) {
                        echo '<tr>';
                        echo "<td>{$key}</td>" ;
                        foreach ($value as $value){
                            echo '<td>' . $value . '</td>';
                        }
                        echo '</tr>';
                    }
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