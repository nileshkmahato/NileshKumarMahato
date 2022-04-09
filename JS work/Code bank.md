    // code for finding sentence index no wihtout index of function 


        let sentence = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti dolores aperiam eius aut deleniti doloremque. Iste, eveniet numquam illo";

        for (i = 0; i < sentence.length; i++) {
            
            let counter =  i;
            let char = sentence.charAt(i);

            document.write(counter +" :  " + char 
            );
            document.write("<br>");
            
        }


    // program for printing number table using function
        // function MultipleTable(numBer){
        //     for (let i = 1; i <=10; i++) {
                
        //         document.write(`${numBer} x ${i} = ${numBer*i}` );
        //         document.write("<br>")
        //     }

        // }

        // let numBer = prompt("Enter your number to print ")
        // MultipleTable(numBer );



     // programm function to  add two number  
     function sum(a,b){
         add = a + b;
         document.write (`${a} + ${b} = ${add}`);
         // document.write (a + b);
     }
     
     let firstNumber = parseInt(prompt("Enter firsr number : "));
     let secondNumber = parseInt(prompt("Enter second number : "));

     sum(firstNumber,secondNumber);

     
    //object constrocter for adding object in New Sheet

        function Student(first,last,age,cls){

            this.fistName = first;
            this.lastName = last;
            this.age = age;
            this.class = cls;
        }

        let Student1 = new Student('nilesh','kumar','3','5');

        console.log(Student1);


__________________________

Project to convertion temp in C to F <br><br>
        C : <input class="input" id="cal" onClick="this.select();" type="number" padding: 10px;
        
        F : <input class="input" onClick="this.select();" id="fhar" type="number" value="32">
    

    <script>

        let cal = document.getElementById("cal");
        let fhar = document.getElementById("fhar");
    
        cal.addEventListener('input', function (){
            let c = this.value;
            let f = (c * 9/5) + 32;

            if (!Number.isInteger(f)){
                f = f.toFixed(4);
            }
            fhar.value = f;
        });


        fhar.addEventListener('input', function (){
            let f = this.value;
            let c = (f - 32) *5/9;
            if (!Number.isInteger(c)){
                c= c.toFixed(4);
            }
            cal.value = c;
        });

    </script>



    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  web page for counting word and charater
    <style>
        body{
            padding: 50px 100px;
        }

        h1{
            text-align: center;
            background-color: rgb(11, 34, 77);;
            color: white;
            padding: 10px;
            margin: 0px;
        }

        #textbox{
            width: 99.3%;
            border-color: rgb(11, 34, 77);
            font-size: 30px;
        }

        p{
            text-align: center;
            background-color: rgb(11, 34, 77);
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin: 0px;
        }
        

    </style>
</head>

<body>
    <h1 id="joke">Js test </h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti dolores aperiam eius aut deleniti doloremque.
        Iste, eveniet numquam illo neque mollitia sint ratione nisi blanditiis dolor unde nesciunt quas impedit
        assumenda odit non sequi, iure quasi quo, hic praesentium repellendus accusamus cumque explicabo? Illo
        voluptatibus tempore expedita ipsum atque molestias laborum sunt, suscipit, ratione est quibusdam error
        praesentium, debitis incidunt corporis accusantium veritatis.</p><br><br><br>


    <h1>Word and Character Counter</h1>

    <textarea id="textbox" cols="30" rows="10"></textarea>

    <p>
        <span id="word">0</span> Word
        <span id="char">0</span> Character
    </p>


    <script>
        let textbox = document.getElementById("textbox");

        textbox.addEventListener('input', function(){
            // for character
            var text = this.value;
            document.getElementById("char").innerHTML = text.length;

            // for word
            text =text.trim();
            let word = text.split(" ");

            let cleanList = word.filter(function(elm){
                return elm != "";
            })
            document.getElementById("word").innerHTML = cleanList.length ;

        });
    </script>

    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


<!-- code for changing color in backgroung  -->


       <style>
        body {
            margin: 0px;
            padding: 20px 100px;
        }

        h1 {
            text-align: center;
            text-decoration: underline;
        }

        img {
            width: 100%;
            height: auto;
            margin: 0 auto;
        }

        p {
            font-size: 18px;
            text-align: justify;
        }

        #color-switcher {
            float: right;
        }

        .btn {
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            border: 2px solid gray;
            border-radius: 16px;


        }

        #white {
            background-color: white;
        }

        #aqua {
            background-color: aquamarine;
        }

        #violet {
            background-color: violet;
        }

        #black {
            background-color: rgb(32, 30, 30);

        }
    </style>
</head>

<body>
    <h1 id="joke">Js test </h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti dolores aperiam eius aut deleniti doloremque.
        Iste, eveniet numquam illo neque mollitia sint ratione nisi blanditiis dolor unde nesciunt quas impedit
        assumenda odit non sequi, iure quasi quo, hic praesentium repellendus accusamus cumque explicabo? Illo
        voluptatibus tempore expedita ipsum atque molestias laborum sunt, suscipit, ratione est quibusdam error
        praesentium, debitis incidunt corporis accusantium veritatis.
    </p><br><br><br>


    <div id="color-switcher">
        <span class="btn" id="white" onclick="changeBG('white')"></span>
        <span class="btn" id="aqua" onclick="changeBG('aqua')"></span>
        <span class="btn" id="violet" onclick="changeBG('violet')"></span>
        <span class="btn" id="black" onclick="changeBG('rgb(32, 30, 30)')"></span>
    </div>
    <h1 class="text">About Us</h1>

    <img src="im.jpg" alt="">

    <p class="text">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam doloremque blanditiis odit, vero quidem ipsum
        non enim ex quisquam atque? Tempora aliquam soluta ratione quia alias impedit numquam amet ea fugiat
        praesentium. Repellat, possimus. Eos reiciendis harum ipsa fugit adipisci necessitatibus, laborum, eum est
        beatae quis, ad vero nesciunt. Dolores qui perferendis ad minus aliquid nostrum, nihil, cupiditate neque velit
        sed quia praesentium perspiciatis fuga aspernatur! Ratione vero laboriosam quibusdam provident dolor iste
        voluptates corrupti accusamus sunt esse molestias maiores repellat maxime rerum enim, nihil corporis delectus.
        Distinctio repellat maiores debitis exercitationem, corrupti ea laudantium consequuntur dolorum fuga labore,
        amet nostrum, atque ad cumque expedita totam. Aperiam unde accusamus in iure voluptas amet tempora eligendi
        recusandae, a porro nemo at earum aliquam praesentium placeat vel dolorum facere distinctio, perspiciatis
        expedita error, sequi itaque temporibus. Totam pariatur vel itaque neque libero. Optio dignissimos ipsa possimus
        voluptate provident eos exercitationem fugiat, beatae consequuntur fuga nam vitae, laboriosam animi quidem!
        Quas, libero dolor. Possimus ratione exercitationem laborum voluptatum sint dolor incidunt! Temporibus ipsum est
        numquam quia fugiat nulla error nostrum. Recusandae animi doloremque error, perferendis delectus ad. Ipsa ipsum
        quod, earum voluptatibus voluptate repudiandae libero harum, commodi illo ad illum numquam quos fugiat quia
        alias, pariatur eveniet dolorem nostrum neque similique et doloribus officiis quis rem? Quas quia mollitia alias
        repellendus debitis soluta est doloremque consequatur magni unde facilis in animi accusantium voluptate ducimus
        cum quasi accusamus earum, nihil aliquam modi ipsum dignissimos ratione incidunt? Consequuntur quos modi rem
        ipsam quam voluptatem odit ratione eius iusto molestias cum corrupti veritatis, velit sunt a! Reiciendis id esse
        dolorem illum odio quas quae, consequatur fugiat officia repellendus velit quisquam non impedit deserunt quo.
        Maxime doloremque quo modi quaerat iusto vitae sit culpa ex beatae, animi, quia soluta nostrum. Soluta
        repellendus totam iure vel impedit iusto error iste est debitis delectus, dolor magnam accusantium nam numquam
        velit minus quos praesentium nulla vitae rem optio nostrum culpa nihil voluptatum. Nihil eligendi quaerat
        voluptas porro vero earum! Distinctio veritatis, mollitia repudiandae atque quibusdam illo et necessitatibus
        libero laboriosam nesciunt dolore fugit molestiae harum aut maiores dolores cum magnam odit a nemo fugiat neque
        autem id dolorem. Necessitatibus similique tempore a inventore ratione quam porro provident impedit assumenda?
        Error esse unde in repellat hic optio quidem consectetur, labore, facilis vel earum officiis, quia velit tempora
        sed! Maxime expedita harum deleniti pariatur totam? Debitis quaerat, quisquam laboriosam iure, magnam itaque nam
        repudiandae dolorem vel necessitatibus architecto optio ipsam? Corporis odio consectetur assumenda adipisci
        alias. Eius nihil veniam, aperiam tempora tempore, corporis mollitia ea magnam aliquid quos sed autem recusandae
        distinctio eaque molestiae nam voluptatem accusantium ipsam, illum omnis dolore. Mollitia quia a dolor
        aspernatur consequuntur laborum rem, ratione at rerum commodi dolorem similique provident blanditiis, placeat
        quae repudiandae qui ipsa. Debitis voluptate nisi minima incidunt inventore dolor accusantium quidem, dicta
        expedita, possimus illum unde nesciunt omnis! Nam vel labore fugit libero quis quo id consectetur dolore.
        Ratione et amet, incidunt molestiae doloribus quia culpa, minus ea repudiandae, deserunt quisquam deleniti?
    </p>


    <script>

        function changeBG(color) {
            document.body.style.backgroundColor = color;

            let txt = document.getElementsByClassName("text");
            if (color == "rgb(32, 30, 30)") {
                for (let elm of txt) {
                    elm.style.color = "white";
                }
            }
            else {
                for (elm of txt) {
                    elm.style.color = "black"
                }
            }
        }
    </script>


    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

sticky menu bar 


        <style>
        body{
            margin: 0px;

        }

        #header{
            text-align: center;
        }

        #logo{
            width: 250px;
            height: auto;
        }
        #menu-bar{
            text-align: center;
            background-color: aquamarine;
        }
        #menu-bar li{
            display: inline-block;
            padding: 15px 10px;
            font-size: 18px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        #container{
            text-align: center;
            padding: 50px 100px;
        }

        #about-img{
            width: 100%;
        }

        .sticky{
            position: fixed;
            top: 0;
            width: 100%;

        }



    </style>
</head>

<body>
   

    <div id="header">
        <img src="pngtree-modern-abstract-3d-logo-png-image_771012.jpg" id="logo" alt="">
    </div>

    <nav id="menu-bar" >

        <li>Home</li>
        <li>About Us</li>
        <li>Our Team</li>
        <li>clinet</li>
        <li>Contact Us</li>
    </nav>

    <div id="container">
        <h1>Ahout Us</h1>
        <img src="im.jpg"  id="about-img" alt="">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nam asperiores quos. Numquam atque beatae rem consequatur quae dolor unde suscipit id cum hic animi vel cupiditate, nobis eaque temporibus, ipsa, dolorum non possimus delectus. Tenetur minus sed fuga molestiae doloremque odio labore error nam recusandae aperiam accusamus, facilis, reprehenderit explicabo eligendi illo eos ad necessitatibus magnam id impedit reiciendis. Repudiandae debitis qui sed minus error! Eum excepturi voluptates nam a enim officiis nesciunt tempora exercitationem, repudiandae eveniet sed ipsa aut fuga distinctio architecto nihil quae inventore et qui assumenda. Sed expedita incidunt corrupti deleniti cupiditate harum officiis, deserunt sapiente placeat ipsam eius fugit explicabo illo asperiores fugiat impedit quis quia voluptatum laborum cumque nemo molestias. Maiores reiciendis iste rerum voluptates rem, aperiam laborum veritatis, repellat in dolores eaque commodi quos cumque nemo. Consequatur ad provident nam exercitationem vitae facilis odit accusantium ducimus pariatur minima. Sunt natus accusantium, consequatur velit nihil error illo fuga repellendus deleniti dolore officia inventore cumque debitis fugiat quisquam tenetur corrupti, consectetur eaque tempora ipsa! Et totam temporibus porro, pariatur voluptas deleniti corporis incidunt sequi itaque? Ad tempore optio corporis amet quae nobis culpa atque. Quo doloremque placeat dolor laborum facere ipsum, porro laboriosam eligendi iusto incidunt doloribus voluptatum neque mollitia repudiandae pariatur aperiam dolorum unde itaque labore debitis. Ea a earum distinctio aspernatur dolorem sapiente cum sunt, quas animi beatae aperiam doloremque nam dolor praesentium blanditiis quisquam eveniet, aliquid alias, fugit sequi ducimus. Voluptate impedit voluptatum vel autem recusandae, laudantium obcaecati? Expedita ipsa, architecto facilis nobis a pariatur doloremque necessitatibus ad, omnis aliquid odit, error cumque provident quis numquam illo cum quod blanditiis ea officia nemo! Exercitationem voluptatum eveniet repellendus harum a temporibus nam, id tempore perferendis necessitatibus dolor eligendi adipisci repellat ab tenetur excepturi tempora nostrum beatae officia deleniti. Enim nam corrupti placeat minima a! Iure quas iusto sequi, velit doloremque itaque nam temporibus ipsam dolor sit porro, harum molestiae omnis provident expedita, sed molestias reiciendis nihil ducimus quae dignissimos voluptatum perferendis? Exercitationem, eaque. Illum dicta sequi quos laboriosam corporis mollitia eum unde quae quisquam rem. Accusantium, nisi sequi eos dicta, distinctio temporibus provident autem commodi reprehenderit, sunt quod id delectus maiores sapiente et nemo! Distinctio illo doloremque modi repellat doloribus, cum aliquam blanditiis sed in ea laudantium, magnam porro et quisquam. Culpa perferendis rem, consequuntur sunt illum sequi ad labore atque voluptates perspiciatis aliquid autem vel minus sed iusto a. Atque, magni. Corrupti sit laboriosam deleniti? Debitis expedita voluptates dignissimos aperiam magnam fugiat tenetur fugit facilis eligendi, esse ipsum quisquam minima vel excepturi odit voluptas sed! Maxime nesciunt cum harum doloribus, ullam id numquam assumenda fuga optio laborum esse eius nostrum. Ea est dolores eius! Repellendus similique reprehenderit necessitatibus in voluptatum quidem quia dolore perferendis, minima reiciendis voluptatibus, corrupti aliquam sit deleniti nam non mollitia porro! Blanditiis, quod suscipit ipsum corrupti velit ipsa modi vero, repudiandae vel harum illo aliquam culpa? Itaque impedit tenetur ipsa esse laborum repudiandae ipsam fugiat! Ullam praesentium voluptatibus, quod obcaecati, fugiat facilis, ratione omnis ipsa magni tenetur placeat.
        </p>
    </div>


    <script>
        window.addEventListener('scroll',function(){
            let navbar = document.getElementById("menu-bar");

            if (window.pageYOffset >= 250) {

                navbar.classList.add('sticky');
            }else{
                navbar.classList.remove('sticky');
            }
        })

    </script>


>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

