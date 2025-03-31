<!DOCTYPE html>
<html>

<head>
    <?php include_once dirname(__DIR__, 3) . '/config.php'; ?>
    <!-- Link to fonts and icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;1,100&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Stylesheet css -->
    <style>
        <?php include ROOT . '/style.css'; ?>
    </style>
    <link rel="stylesheet" href="style.css" />
</head>

<!-- Date, thumbnail, preview here -->
<?php
$date = "3-14-25";
$thumbnail = "Images/First Post/selfie.jpg";
$preview = "Introduction to this website and me!";
$category = "General";
$subcategory = "";
?>

<div>
    <!-- Banner -->
    <?php include ROOT . '/Main/banner.php'; ?>
    <div class="center">
        <!-- Page starts here -->
        <h1>
            Hi!
        </h1>

        <body>
            I've been working on and off on this website for about three months, but I'm happy it's close to fully set
            up! My name is Brian Tan and
            I'm
            currently a third year electrical engineering major at UCLA. This is my first year here, being a transfer
            from a community college student at De Anza in Cupertino, California. Here is a picture of me
            when I
            was passing by Santa Barbara on the way to Los Angeles: <br> <br>

            <img src="Images/First Post/selfie.jpg" class='img'> <br> <br>

            Although I'm still a student, it's nice to be in a place like Los Angeles where there's a lot of great food
            spots and photgenic places. Since coming here, I've been to only Beverly Hills and Santa Monica as well as a
            few specific places such as the Griffith Observatory, but I've still yet to explore a lot of the main
            tourist locations, such as downtown LA, Long Beach, the Orange County area, etc.<br> <br>

            Although I'm eager to visit
            all these places, a part of me is telling me to wait until I can get a better phone or camera, but
            preferably camera, since I'm interested in trying photography. There was a person on facebook marketplace
            selling a Sony Cybershot DSC H5 including two lenses for a great deal of $25, but I couldn't get it because
            of how fast the
            seller wanted to get rid of it. Otherwise, I've been taking photos with my Iphone 11, which has been
            incredibly
            mid at taking pictures. Regardless, when walking around in Santa Monica, I took one of my favorite photos at
            the Venice Canals using the Iphone. <br> <br>

            <img src="Images/First Post/venice.jpg" class='img'> <br> <br>

            Another thing that I'm excited to post about is food! I really enjoy cooking and baking because I think that
            making food is really cathartic, and eating it even more so. This is a club sandwich that I ordered at a
            quaint but otherwise unassuming spot, if it weren't for the massive line of locals. This was at Bayside Cafe
            in Morro Bay, which had a nice view of the pier and classic diner-type atmosphere inside. The sandwich must
            have been
            one of the best sandwiches I've had - the bread was crisp but not dry, vegetables and meat were in the exact
            best
            ratio, and the light amount of mustard bonded everything perfectly. <br> <br>

            <img src="Images/First Post/sandwich.jpg" class='img'> <br> <br>

            One my favorite things is to work on project from the ground up, regardless of the countless hours of hassle
            they consume. That includes a lot of my projects, one of which was my stenography keyboard when I was
            learning how to basic PCB design in KiCad. My friend had just introduced me to his own hobby of making
            keyboards, to which I had very little opinion of but was decently interesting only because it seemed like a
            cool project to design a keyboard. I was also very lucky to choose this as an introductory project because
            QMK has a lot of tutorials on how to design and map your own keyboard. I ended up using an ATMega32
            microcontroller, which had a lot more documentation and was easier to solder than some of the QFN packages,
            which need a heat gun. From there, it was just assemble it, program it, and plug it in and the keyboard was
            done! <br> <br>

            <img src="Images/First Post/steno.jpg" class='img'> <br> <br>

            However, after doing a fair bit of research on the type of switches, modifications for the keyboard, and
            designing the keycaps, I really got into building keyboards. Currently, I'm working on two other keyboards
            which I'm hoping will turn out well, both powered by the RP2040 using QMK, with one board having Aurora Fog
            switches and some generic MOA keycaps from Amazon, and the other having BSUN Flower Shadow switches along
            with KAM Superuser keycaps. Although I'm spending a lot of money between switches and keycaps, especially
            just for the keycaps to be dye-sub instead of double shot, I think I'll still be happy with the outcome.<br>
            <br>

            This website is also a project! But it doesn't feel very original, despite it being ground up. I would say
            90% of this website is generated from the Github Copilot extension from VSCode, which I'm not ashamed of to
            use since I'm terrible at coding anyway. Either way, I've been able to implement a banner on every page,
            make a template with all the CSS and have functions that can update the website whenver I post a new file. A
            lot of this could and should have been implemented using a dynamic website, but in order to save money, I'm
            hosting this on ProFreeHost for free. Also, this is a static website. I think I'm going to regret everything
            if I ever have to port all of this to a dynamic website instead of using funny scripts and using .php, but
            for now, it's fine. A goal in the distant future would probably be to generate a dynamic website once I've
            learned more about web dev and host this using a Raspberry Pi Zero or something similar. <br> <br>

            If any of this is interesting, please reach out! Email or discord works!


        </body>

    </div>

</div>

</div>

</html>