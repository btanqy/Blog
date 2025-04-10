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
$date = "";
$thumbnail = "Images/";
$preview = "Powered by an RP2040 using QMK, built with a 3D printed case";
$category = "Keyboards";
$subcategory = "";
?>

<body>
    <!-- Banner -->
    <?php include ROOT . '/Main/banner.php'; ?>
    <!-- Page starts here -->
    <div class="center">
        <h1>
            Budget Custom Keyboard
        </h1>

        <h3>
            <p><a href="https://github.com/btanqy/RPKB2040" target="_blank"> Project on Github</a>.</p>

        </h3>

        This is a 60% layout keyboard that was designed using a two layer board in KiCad, using an RP2040 for the
        microcontroller since its' supported by QMK. The case was 3D printed in two parts without any adhesive, and the
        components, including keycaps, were all hand soldered. The keycaps I've used are some generic MOA keycaps found
        from Amazon, and the switches were hand lubed with somme offbrand 205g grease. This is the final build and sound
        I've gotten with the Aurora Fog switches from Wuque Studios, along with a thin layer of polyurethane foam from
        McMaster. <br><br>



        This keyboard started with designing the PCB, utilizing Raspberry Pi's hardware design guidelines for the
        RP2040, with the only deviation from following the guide being the flash, which I chose to be the IS25LP080 over
        QMK's default W25Q080, which is out of stock on LCSC.On the RP2040 hardware design guidelines flash section, it
        does use a W25Q128JVS as an example. In hindsight, I think I could have used this instead, since it's cheaper
        and should work similarly since its' in the same family of products. <br><br>

        There are a couple mistakes in the PCB. The boards on the Github page are the corrected ones, though I don't
        have any intention of ordering the new ones and also testing if they work. For the time being though, I've been
        using my old boards to hard wire some odd bits, such as connecting the data lines of the USB past the TVS
        diodes, which makes me feel very on edge plugging it in every time. I also have some odd parts that I somehow
        missed giving power, and messed up the flash pins on one side which I ordered a replacement PCB that fixed the
        pin layout. <br><br>




        I decided to mount this board with M3 screws. The file is now corrected to give full clearance, but I used M3
        holes for self tapping, so they were something around 2.8mm diameter instead of the 3.4mm needed for clearance.
        In order to fix the board, I had to drill holes. <br><br>




        Part of the custom design was so that I could screw down the board more to prevent sag. I don't particularly
        like plate mounts, but having screws and a plate mount which in which it's literally screwed into the bottom
        instead of a small gap in most keyboards I think gives this keyboard a little more rigidity while still
        retaining some of the satisfcation of pressing down and having the board give a little from the polyurethane. In
        order to make this plate, I took a piece of plywood and laser cut it exactly how I needed it for a keyboard with
        plate mount stabilizers... before realizing I bought PCB mount stabilizers. So I dremeled out the parts that
        couldn't fit with the PCB mount stabilizers, hence the ugly plate. Additioanlly, I also had to make small divots
        for space in the front where the stabilizers jutted out from the PCB, since pressure on these parts of the
        stabilizers prevented the spacebar from pressing down properly. In order to fit the screws, the case I
        designed has little divots for the screws to mate with an M3 hex nut for a very necessary fancy factor. <br><br>




        Last but not least was assembling all of this together! I learned how to and took apart each of the Aurora Fog
        switches and lubed the bottom housing along with the stem rim and hole, the sides of the stem, and applied an
        even coating of lube across the springs the GPL 205g. Unlubed they had a great
        balance between thocky and light, but after lubing the switches, they sounded and felt incredibly smooth and
        creamy, so I believe lubing the switches were well worth the hours of work.


    </div>

</body>

</div>

</html>