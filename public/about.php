<?php include'./components/Header.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Archivo:500|Open+Sans:300,700" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="./general.css?v=<?php echo time(); ?>"/>
        <title>About</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            body {
                background-color: #262626;
                margin: 0px;
            }

            .background-img {
                position: fixed;
                z-index: 0;
                transition: 0.3s;
                object-fit: none;
            }

            body .background-img:nth-child(1) {
                width: 200px;
                top: 30px;
            }

            body .background-img:nth-child(2) {
                width: 400px;
                left: 500px;
                top: 300px;
            }

            body .background-img:nth-child(3) {
                width: 100px;
                left: 60px;
                top: 600px;
            }

            .content {
                position: relative;
                z-index: 1;
            }

            .section-1 {
                font-family: 'Courier New', Courier, monospace;
                border-radius: 100px 100px 100px 0px;
                margin-left: 5%;
                margin-top: 200px;
                width: 75%;
                display: grid;
                grid-template-columns: 50% 50%;
                background-color: #7D80FF;
                border: solid 2px black;
                box-shadow: 0px 2px 4px #151515;
            }

            .section-img {
                width: 400px;
                height: 400px;
                margin: 0 auto;
                height: 100%;
                vertical-align: middle;
            }

            .text-section-1 {
                color: white;
                text-shadow: 0px 1px 1px black;
                padding: 100px 15%;
            }

            .text-section-1 > h1, .text-section-2 > h1, .text-section-3 > h1 {
                font-size: 3rem;
            }

            .text-section-1 > p, .text-section-2 > p, .text-section-3 > p {
                font-size: 1.2rem;
            }

            .section-2 {
                font-family: 'Courier New', Courier, monospace;
                border-radius: 100px 100px 0px 100px;
                margin-left: 20%;
                margin-top: 250px;
                width: 75%;
                display: grid;
                grid-template-columns: 50% 50%;
                background-color: #262626;
                border: solid 2px black;
                box-shadow: 0px 2px 4px #151515;
            }

            .text-section-2 {
                color: white;
                text-shadow: 0px 1px 1px black;
                padding: 100px 15%;
            }

            .section-3 {
                font-family: 'Courier New', Courier, monospace;
                border-radius: 100px 100px 100px 0px;
                margin-left: 5%;
                margin-top: 250px;
                margin-bottom: 500px;
                width: 75%;
                display: grid;
                grid-template-columns: 50% 50%;
                background-color: #7D80FF;
                border: solid 2px black;
                box-shadow: 0px 2px 4px #151515;
            }

            .text-section-3 {
                color: white;
                text-shadow: 0px 1px 1px black;
                padding: 100px 15%;
            }


        </style>
    </head>
    <body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000 });
     </script>
        <img src="./pictures/abtbackground.png" class='background-img'/>
        <img src="./pictures/abtbackground.png" class='background-img'/>
        <img src="./pictures/abtbackground.png" class='background-img'/>
        <div class="content">
            <div class="section-1" data-aos="fade-right">
                <img class="section-img" src="./pictures/abt-section-1.png" />
                <div class="text-section-1">
                    <h1>Connect.</h1>
                    <p>Webify is for connecting professionals with freelance projects of all sizes</p>
                </div>
            </div>
            <div class="section-2" data-aos="fade-left">
                <div class="text-section-2">
                    <h1>How to use?</h1>
                    <p>Sign up either as an user or a freelancer and get started on the magic.</p>
                </div>
                <img class="section-img" src="./pictures/abt-section-3.png" />
            </div>
            <div class="section-3" data-aos="fade-right">
                <img class="section-img" src="./pictures/abt-section-2.png" />
                <div class="text-section-1">
                    <h1>Hire.</h1>
                    <p>As a freelancer you will recieve requests in form of forms, visible on your profile tab. If you decide to accept or reject the offer, respond accordingly via email to the user.</p>
                </div>
            </div>

            
        </div>
        <script>
            const handleScroll = event => {
                const scrollPosition =
                    event
                        .target
                        .scrollingElement
                        .scrollTop;
                
                const images = 
                    document.querySelectorAll(".background-img");

                images.forEach((element) => {
                    element.style.transform =
                        `translate(0, ${scrollPosition / 50}px)`;
                });
            };
            window.addEventListener("scroll", handleScroll)
        </script>
        <?php include "./components/footer.php"?>
    </body>
</html>