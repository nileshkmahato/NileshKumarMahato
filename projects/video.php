<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../mainStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">

    <!-- CSS for video player -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />


    <!-- end CSS for video player -->
    <!-- css for this file only -->
    <style>
        .header {
            text-align: center;
            color: #00b3ff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 500;
            font-size: 3em;
        }

        h2 {
            text-align: center;
            text-transform: capitalize;

        }


        .comp {
            /* margin: 30px 40px; */
            /* max-width: 500px; */
            /* width: 65%; */
            border: 3px solid #444;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .Tile {
            margin: 10px;
            text-align: center;
            text-transform: capitalize;
        }

        /* Css for detail video */

        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        /* ................................................ */

        /* end of first css */



        .container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            align-items: flex-start;
            padding: 10 px;
            gap: 15px;
        }

        .container .main-video {
            border-radius: 5px;
            padding: 10px;
        }

        .container .main-video video {
            width: 100%;
            border-radius: 5px;

        }

        .container .video-list {
            border-radius: 5px;
            overflow-y: scroll;
            height: 900px;
        }

        .container .video-list::-webkit-scrollbar {
            width: 7px;
        }

        .container .video-list::-webkit-scrollbar-track {
            background: #ccc;
            border-radius: 50px;
        }

        .container .video-list::-webkit-scrollbar-thumb {
            background: #666;
            border-radius: 50px;
        }

        .container .video-list .vid video {
            width: 150px;
            border-radius: 10px;

        }

        .container .video-list .vid {
            display: flex;
            align-items: center;
            gap: 15px;
            background-color: antiquewhite;
            margin: 2%;
            border: 1px solid black;
            border-radius: 10px;
        }

        .container .video-list .vid:hover {
            background: white;
        }

        .container .video-list .vid .active {
            background: blue;
        }

        .container .video-list .vid .active .title {
            color: #fff;
        }

        .container .video-list .vid .title {
            color: black;
            font-size: 17px;
            cursor: pointer;
        }

        @media (max-width:991px) {

            .container {
                grid-template-columns: 1.5fr 1fr;
                /* padding: 10px; */
            }
        }

        @media (max-width:768px) {

            .container {
                grid-template-columns: 1fr;

            }
        }
    </style>

</head>

<body>

    <div id="header">
        <a href="../index.html"><img src="../Js in 1 web.png" id="logo" alt=""></a>
        <h1 class="title">
            <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, Im Nick Js.", "I am Creat This Page for My JS project.", "I work it on all JavaScript.", "Sample Work of JavaScript Journey." ]'>
                <span class="wrap"></span>
            </a>
        </h1>
    </div>

    <!-- Sart header part -->
    <?php include('../menubar.php'); ?>

    <!-- end of  header part -->

    <!-- main project work -->
    <h1 class="header"> video grally</h1>

    <div class="container">

        <div class="main-video">
            <div class="video comp">
                <video class="vid1" playsinline controls>
                    <source src="https://vod-progressive.akamaized.net/exp=1635930527~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4699%2F22%2F573496156%2F2709808396.mp4~hmac=07e4b747ed4c8189e1c7c51b72a62b2354ba7220eb3f3dcd893bc3dcf03a888e/vimeo-prod-skyfire-std-us/01/4699/22/573496156/2709808396.mp4?filename=Skyscrapers+-+80724.mp4" type="video/mp4" />
                    <!-- Captions are optional -->
                    <!-- <track kind="captions" label="English captions" src="/path/to/captions.vtt" srclang="en" default /> -->
                </video>
                <h3 class="title Tile">01. video title</h3>
            </div>
            <div class="comp">
                <h2>Accordion</h2>

                <button class="accordion">Section 1</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.</p>
                </div>

                <button class="accordion">Section 3</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class="video-list">
            <div class="vid active">
                <video src="https://vod-progressive.akamaized.net/exp=1635930634~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F2120%2F23%2F585600454%2F2763984000.mp4~hmac=e48a97036ef635c5654c7d5f0b43200f8f2008414469a65297a1007135239fbd/vimeo-prod-skyfire-std-us/01/2120/23/585600454/2763984000.mp4?filename=Sunrise+-+83880.mp4"></video>
                <h3 class="title">01. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930666~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3782%2F21%2F543910236%2F2579406034.mp4~hmac=36f2867934ed9111db1f210013678dcc6c623f4f051429d157874e0ea2316635/vimeo-prod-skyfire-std-us/01/3782/21/543910236/2579406034.mp4?filename=Bike+-+72566.mp4"></video>
                <h3 class="title">02. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930690~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4009%2F22%2F570048572%2F2694683162.mp4~hmac=cd8fd93dba273053209279d978663a5d3da361986f1e35e48e8744b7f2565591/vimeo-prod-skyfire-std-us/01/4009/22/570048572/2694683162.mp4?filename=Eye+-+79545.mp4"></video>
                <h3 class="title">03. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930710~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F2529%2F23%2F587646755%2F2772557028.mp4~hmac=102da24cf58cadb88bf55a796b9b23c33198d5e02f41899f0007544ee14d9ae1/vimeo-prod-skyfire-std-us/01/2529/23/587646755/2772557028.mp4?filename=People+-+84973.mp4"></video>
                <h3 class="title">04. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930728~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F2827%2F20%2F514139029%2F2381409474.mp4~hmac=6f1b6e012d52bf8accbf9f3d85930db0397f709daa4b4f98e05acc73c8315e8a/vimeo-prod-skyfire-std-us/01/2827/20/514139029/2381409474.mp4?filename=Record+-+65390.mp4"></video>
                <h3 class="title">04. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930748~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4909%2F21%2F549547533%2F2605682013.mp4~hmac=f5d7579f8d6166e6694d921825b688668983879b543779874cd8fe338387b2bb/vimeo-prod-skyfire-std-us/01/4909/21/549547533/2605682013.mp4?filename=Sand+-+73847.mp4"></video>
                <h3 class="title">04. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930806~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3863%2F21%2F544315311%2F2581224692.mp4~hmac=86e5f506322db46b4719e7da241ec47e2e41485c3df2b5a40d9dd3dcf2327a40/vimeo-prod-skyfire-std-us/01/3863/21/544315311/2581224692.mp4?filename=Flowers+-+72763.mp4"></video>
                <h3 class="title">04. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930773~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F814%2F22%2F554074757%2F2621006309.mp4~hmac=1344ce2585be72f90851e19f1ccdb236135110c6ba55206a399af84d20042c22/vimeo-prod-skyfire-std-us/01/814/22/554074757/2621006309.mp4?filename=Water+Lilies+-+75008.mp4"></video>
                <h3 class="title">04. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930806~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F3863%2F21%2F544315311%2F2581224692.mp4~hmac=86e5f506322db46b4719e7da241ec47e2e41485c3df2b5a40d9dd3dcf2327a40/vimeo-prod-skyfire-std-us/01/3863/21/544315311/2581224692.mp4?filename=Flowers+-+72763.mp4"></video>
                <h3 class="title">04. video title</h3>
            </div>
            <div class="vid">
                <video src="https://vod-progressive.akamaized.net/exp=1635930748~acl=%2Fvimeo-prod-skyfire-std-us%2F01%2F4909%2F21%2F549547533%2F2605682013.mp4~hmac=f5d7579f8d6166e6694d921825b688668983879b543779874cd8fe338387b2bb/vimeo-prod-skyfire-std-us/01/4909/21/549547533/2605682013.mp4?filename=Sand+-+73847.mp4"></video>
                <h3 class="title">04. video title</h3>
            </div>
        </div>
    </div>



    <!-- end of main project work -->


    <!-- js code for head and main file -->
    <script src="../mainApp.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
    <!-- code for video gall -->
    <script src="demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.8/plyr.min.js"></script>
    <script>
        const player = new Plyr('.vid1');
    </script>

    <script>
        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let title = document.querySelector('.main-video .title');

        listVideo.forEach(video => {
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if (video.classList.contains('active')) {
                    let src = video.children[0].getAttribute('src');
                    mainVideo.src = src;
                    let text = video.children[1].innerHTML;
                    title.innerHTML = text;

                };
            };
        })
    </script>

    <!-- for topics details -->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>



</body>

</html>