<?php

$data = [
    'info'=> [
        'name'=> 'Rownok Zahan Rupa',
        'address'=> 'Nilphamari Sadar,Nilphamari',
        'email' => 'rownokzahan9@gmail.com',
        'phone' => '+880XXXXXXXXXX'
    ],
    'Career Objective' => "Seeking a challenging position in a reputed organization where I can learn new skills, expand my knowledge, and leverage my learnings. To get an opportunity where I can make the best of my potential and contribute to the organization's growth.",
    'Present Status' => 'lorem',
    'Education' => [
        'honurs' => [
            'board' => 'UGC',
            'year' => '2022',
            'institution' => 'City University',
            'marks' => '3.49',
        ],
        'hsc' => [
            'board' => 'Dinajpur',
            'year' => '2018',
            'institution' => 'City University',
            'marks' => '3.50',
        ],
        'ssc' => [
            'board' => 'Dinajpur',
            'year' => '2015',
            'institution' => 'City University',
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
    'Achievements' => 'None',
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

echo '<pre>';
print_r($data['References']);
echo '</pre>';