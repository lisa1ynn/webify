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
            
            /* small animation for background img while scrolling */
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
            
            /* purple boxes */
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
            
            /* changes all images */
            .section-img {
                width: 40rem;
                height: 35rem;
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
            
            /* that one annoying black box */
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
            
            /* button design */
            .getstarted_button {
                background-color: #7D80FF;
                color: white;
                font-family: 'Courier New', Courier, monospace;
                font-weight: bold;
                border: solid 2px black;
                box-shadow: 0px 2px 4px #151515;
                padding: 15px 32px;
                text-align: center;
                display: inline-block;
                font-size: 2rem;
                margin: 0;
                position: absolute;
                top: 85%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%)
            }

            /* cursor, arrow animation on hover button */
            button{
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
            }

            button:after {
                content: '»';
                position: absolute;
                opacity: 0;  
                top: 14px;
                right: -20px;
                transition: 0.5s;
            }

            button:hover{
                padding-right: 24px;
                padding-left:8px;
            }

            button:hover:after {
                opacity: 1;
                right: 10px;
            }

        </style>
    </head>

        <!-- small delayed transitions while scrolling while scrolling -->
    <body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000 });
     </script>
        <img src="./pictures/abtbackground.png" class='background-img'/>
        <img src="./pictures/abtbackground.png" class='background-img'/>
        <img src="./pictures/abtbackground.png" class='background-img'/>
        <!-- the sections -->
        <div class="content">
            <div class="section-1" data-aos="fade-right">
                <img class="section-img" src="./pictures/abt-section-1.png" />
                <div class="text-section-1">
                    <h1>About...</h1>
                    <p>Welcome to Webify, a platform that connects talented web designers with users looking to create their own websites. <br></br>Our mission is to make it easy for anyone to bring their vision to life online, regardless of their technical expertise or design skills.<br></br>We offer a variety of resources, including tutorials, templates, and one-on-one support, to make the process as seamless and stress-free as possible..</p>
                </div>
            </div>
            <div class="section-2" data-aos="fade-left">
                <div class="text-section-2">
                    <h1>How to use?</h1>
                    <p>Sign up either as a user, or a freelancer on Webify. Signing up is quick and easy, and will allow you to access all of our services and resources.<br></br>
                </div>
                <img class="section-img" src="./pictures/abt-section-3.png" />
            </div>
            <div class="section-3" data-aos="fade-right">
                <img class="section-img" src="./pictures/abt-section-2.png" />
                <div class="text-section-1">
                    <h1>Hire.</h1>
                    <p>As a freelancer you will receieve requests in form of forms, visible on your profile tab. If you decide to accept or reject the offer, respond accordingly via email to the user.<br></br>As a user you can browse through our selection of web design services to find the option that best fits your needs. Collaborate with your designer to bring your vision to life. Our designers will work with you to understand your goals and needs, and will use their expertise to create a website that truly reflects your brand and message.</p>
                </div>
            </div>

            <!-- button to redirect to sign in page -->
            <div>
                <button id="startButton" class="getstarted_button"><span>Get Started!</span></button>
                <script type="text/javascript">
                    document.getElementById("startButton").onclick = function () {
                    location.href = "http://localhost/webify/public/sign-in.php";
                };
            </script>

            
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