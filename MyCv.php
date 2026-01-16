<?php
// cv.php

// Basic Info
$name = "ALHAJI IBRAHIM<br>JALLOH";
$title = "BSc (Hons) Information<br>Systems Graduate (First Class)";
$phone = "+232 80003035";
$email = "alhajiibrahimjalloh55@gmail.com";
$location = "Freetown, Sierra Leone";
$profile_image = "My_Image.png";

// Education
$education = [
    [
        "degree" => "Bachelor of Science With<br>Honours in Information Systems",
        "school" => "IPAM - University of Sierra Leone",
        "years" => "2021 - 2025 (Graduated December 2025)"
    ],
    [
        "degree" => "BECE and WASSCE",
        "school" => "Holy Trinity Secondary School,<br>Kenema",
        "years" => "2015 - 2021"
    ]
];

// Skills
$skills = [
    "Web Development",
    "Database Management",
    "Problem-Solving and Critical Thinking",
    "Leadership & Team Coordination",
    "Microsoft Office Suite"
];

// Languages
$languages = [
    "Fula (Native)",
    "English (Fluent)",
    "Krio (Fluent)"
];

// Profile
$profile_paragraphs = [
    "A motivated and results-driven BSc (Hons) Information Systems (First Class)
    graduate from the Institute of Public Administration and Management (IPAM)–University
    of Sierra Leone, with a strong interest in technology, innovation, and continuous learning.
    As one of the youngest graduates in my cohort, I demonstrate adaptability, resilience,
    and a proactive approach to problem-solving.",
    "I have a solid academic foundation in web development, database management, and
    information systems, developed through university coursework, self-directed learning,
    and hands-on tutorials. I am highly organised, a strong team player, and proficient
    in the Microsoft Office Suite, enabling me to contribute effectively in both technical
    and professional environments."
];

// Experience
$experience = [
    [
        "organization" => "BHANTAL IPAM–USL (Student-led Non-profit Organisation)",
        "role" => "Education Secretary",
        "duration" => "July 2025 – Present",
        "responsibilities" => [
            "Leading academic programmes and promoting BHANTAL’s values through educational engagement."
        ]
    ],
    [
        "organization" => "BHANTAL IPAM–USL (Student-led Non-profit Organisation)",
        "role" => "Innovation Officer",
        "duration" => "August 2024 – July 2025",
        "responsibilities" => [
            "Drove technology-based initiatives to enhance student engagement and organisational impact."
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alhaji Ibrahim Jalloh - CV</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f9f9f9;
            color: #3b2f2f;
        }

        .cv-container {
            width: 900px;
            margin: 30px auto;
            position: relative;
        }

        /* Top grey circle */
        .top-circle {
            position: absolute;
            width: 320px;
            height: 320px;
            background: #d9d9d9;
            border-radius: 50%;
            top: -160px;
            right: -160px;
            z-index: 1;
        }

        /* Profile image */
        .profile-image {
            position: absolute;
            top: 40px;
            right: 60px;
            width: 170px;
            height: 170px;
            border-radius: 50%;
            overflow: hidden;
            background: #fff;
            z-index: 2;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Header */
        .header {
            margin-top: 70px;
            margin-bottom: 40px;
        }

        .name {
            font-size: 38px;
            letter-spacing: 2px;
            font-weight: 500;
        }

        .title {
            margin-top: 10px;
            font-size: 18px;
            font-weight: 600;
        }

        /* Main layout */
        .content {
            display: flex;
            margin-top: 50px;
        }

        .left-column {
            width: 50%;
            padding-right: 40px;
            box-sizing: border-box;
        }

        .right-column {
            width: 50%;
            padding-left: 40px;
            box-sizing: border-box;
            position: relative; 
        }
        
        .right-column::before {
            content: "";
            position: absolute;
            left: 0; 
            top: 30px;
            height: 85%;
            width: 2px;
            background-color: #6f625c;
        }

        h2 {
            font-size: 18px;
            letter-spacing: 2px;
            margin: 0 0 15px 0;
        }

        h3 {
            font-size: 17px;
            margin: 20px 0 5px 0;
        }

        p {
            font-size: 14.5px;
            line-height: 1.6;
            margin: 5px 0;
        }

        ul {
            margin: 10px 0 20px 18px;
            padding: 0;
        }

        ul li {
            font-size: 14.5px;
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .section {
            margin-bottom: 30px;
        }

        .subtle {
            font-size: 14px;
            color: #5a4f4a;
        }
    </style>
</head>
<body>

<div class="cv-container">

    <div class="top-circle"></div>

    <div class="profile-image">
        <img src="<?php echo $profile_image; ?>" alt="Profile Picture">
    </div>

    <div class="header">
        <div class="name"><?php echo $name; ?></div>
        <div class="title"><?php echo $title; ?></div>
    </div>

    <div class="content">

        <!-- LEFT COLUMN -->
        <div class="left-column" style="line-height: 1.15;">

            <div class="section">
                <h2>CONTACT</h2>
                <p><?php echo $phone; ?></p>
                <p><?php echo $email; ?></p>
                <p><?php echo $location; ?></p>
            </div>

            <div class="section">
                <h2>EDUCATION</h2>
                <?php foreach($education as $edu): ?>
                    <h3><?php echo $edu['degree']; ?></h3>
                    <p class="subtle"><?php echo $edu['school']; ?></p>
                    <p class="subtle"><?php echo $edu['years']; ?></p>
                <?php endforeach; ?>
            </div>

            <div class="section">
                <h2>SKILLS</h2>
                <ul>
                    <?php foreach($skills as $skill): ?>
                        <li><?php echo $skill; ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3>Languages</h3>
                <ul>
                    <?php foreach($languages as $lang): ?>
                        <li><?php echo $lang; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <!-- RIGHT COLUMN -->
        <div class="right-column">

            <div class="section">
                <h2>PROFILE</h2>
                <?php foreach($profile_paragraphs as $para): ?>
                    <p style=" font-size: 15.4px; "><?php echo $para; ?></p>
                <?php endforeach; ?>
            </div>

            <div class="section">
                <h2>EXPERIENCE</h2>
                <?php foreach($experience as $exp): ?>
                    <h3><?php echo $exp['organization']; ?></h3>
                    <p><strong><?php echo $exp['role']; ?></strong><br><?php echo $exp['duration']; ?></p>
                    <ul>
                        <?php foreach($exp['responsibilities'] as $res): ?>
                            <li><?php echo $res; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</div>

</body>
</html>
