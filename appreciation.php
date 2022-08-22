<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .all {
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            position: relative;
            height: 90vh;
        }

        .one {
            animation-delay: 10s;
            animation-name: appreciationone;
            /* animation-name: appreciation; */
            animation-duration: 80s;
            /* animation-delay: 2s; */
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-direction: initial;
            /* position: absolute; */
            /* transform: translate(-50% -50%); */
            /* left: 25%; */
            /* top: 50%; */
        }

        .twi {
            animation-delay: 10s;
            animation-name: appreciationtwo;
            /* animation-name: appreciation; */
            animation-duration: 80s;
            /* animation-delay: 2s; */
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-direction: initial;
            /* position: absolute;
            transform: translate(-50% -50%);
            left: 25%;
            top: 50%; */
        }

        .tri {
            animation-delay: 10s;
            /* animation-name: appreciation; */
            animation-name: appreciationthree;
            animation-duration: 80s;
            /* animation-delay: 2s; */
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-direction: initial;
            /* position: absolute;
            transform: translate(-50% -50%);
            left: 47%;
            bottom: 0px; */
        }

        .fo {
            animation-delay: 10s;
            /* animation-name: appreciation; */
            animation-name: appreciationfour;
            animation-duration: 80s;
            /* animation-delay: 12s; */
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-direction: initial;
            /* position: absolute;
            transform: translate(-50% -50%);
            left: 47%;
            bottom: 0px; */
        }

        .fi {
            animation-delay: 10s;
            /* animation-name: appreciation; */
            animation-name: appreciationfive;
            animation-duration: 80s;
            /* animation-delay: 16s; */
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-direction: initial;
            /* position: absolute;
            transform: translate(-50% -50%);
            left: 47%;
            bottom: 0px; */
        }

        .si {
            animation-delay: 10s;
            /* animation-name: appreciation; */
            animation-name: appreciationsix;
            animation-duration: 80s;
            /* animation-delay: 20s; */
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
            animation-direction: initial;
            /* position: absolute;
            transform: translate(-50% -50%);
            left: 47%;
            bottom: 0px; */
        }

        @keyframes appreciationone {
            0% {
                margin-top: 100vh;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
                /* margin-top: -500px; */
                margin-top: 0px;
            }
        }

        @keyframes appreciationtwo {
            0% {
                margin-top: 100vh;
            }

            70% {
                margin-top: 0px;
                opacity: 1;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
                margin-top: 0px;
                /* margin-top: -500px; */
            }
        }

        @keyframes appreciationthree {
            0% {
                margin-top: 100vh;
            }

            70% {
                margin-top: 0px;
                opacity: 1;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
                margin-top: 0px;
                /* margin-top: -500px; */
            }
        }

        @keyframes appreciationfour {
            0% {
                margin-top: 100vh;
            }

            70% {
                margin-top: 0px;
                opacity: 1;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
                margin-top: 0px;
                /* margin-top: -500px; */
            }
        }

        @keyframes appreciationfive {
            0% {
                margin-top: 100vh;
            }

            70% {
                margin-top: 0px;
                opacity: 1;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
                margin-top: 0px;
                /* margin-top: -500px; */
            }
        }

        @keyframes appreciationsix {
            0% {
                margin-top: 100vh;
            }

            70% {
                margin-top: 0px;
                opacity: 1;
            }

            90% {
                opacity: 0.2;
            }

            100% {
                opacity: 0;
                margin-top: 0px;
                /* margin-top: -500px; */
            }
        }
    </style>
</head>

<body>
    <?php include "header.php" ?>
    <div class="all">
        <div class="one">
            <h5 style="text-decoration: underline;">Appreciation</h5>
            <br>
        </div>
        <br>
        <div class="two">
            <p class="twi">We the members of group Three give GOD all Glory Honour and Adoration for bringing us this far.</p>
            <br>
            <p class="tri">These past seven weeks at Axia Hub have been a wild roller coaster of felicity and frustration( frustration due to the somewhat tough time we had, learning some complex Programming Languages), but mostly felicity and this can be attributed to the acute perspicacity we have accumulated over the said period.</p>
            <br>
            <p class="fo">This master class has afforded every one of us(group three members) the rare opportunity of meeting great minds both among our tutors and among our classmates who have inspired and spurred us to do great things.</p>
            <br>
            <p class="fi">
                To our unrivaled tutors, Mr Beloved (The front-end Prodigy) who made html, css and bootstrap a walkover for a lot of us, Miss Iby who made javascript enjoyable for us and Mr Godwin, the backend Bhadguy (He is a good person actually) who demystified the mechanism of the back-end (what a lot of us had erstwhile thought to be an unfathomable mystery). To Mr ... who has been a friend of the class, and has stepped in on may occassions, to provide clarity on some concepts we had a hard time figuring out on our own.
            </p>
            <br>
            <p class="si">
                Finally, to the entire Staff and Management of the Axia Community, we are profoundly greatfull for this opportunity you have afforded us to get our feets wet with the fundamental skill that drives the 21st century(The World Wide Web). Moving forward, we look forward to honing the skills we have acquired here at Axia Hub. With GOD on our side, we look forward to doing exploits in the field of web development.
            </p>
        </div>
    </div>

    <?php include "footer.php" ?>
</body>

</html>