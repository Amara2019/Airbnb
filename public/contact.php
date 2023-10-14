<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="./css/app.css">
    <link rel="stylesheet" href="fa_icons/css/all.css">
</head>
<body>
<div class="bg-primary">
<?php
        include "components/header.html";
    ?>
</div>

<div class="bg-cover bg-no-repeat bg-center h-full w-full text-white" style="background-image: url('images/framebg.png');">
            <aside>hello</aside>
            <div>
                <!-- <ul class="flex justify-center items-center ">
                    <li>hello world</li>
                    
                </ul> -->
            </div>
        </div>

    
<section class="max-w-md mx-auto my-6" >

    <div class="">
    <h2 class="py-3  text-dark font-normal text-2xl">contact us</h2>
    <h1 class="py-3 text-[#214539] text-3xl font-black">GET In TOUCH</h1>
    <P class=" py-3">Your email address will not be published. Required fields are marked*</P>

    </div>

    <form method="post"  id="frm_contact">

    <div class="col-span-full mb-4 py-3 ">
                <label for="fname" class="block text-sm font-medium leading-6 text-gray-900 "></label>
                <div class="mt-2">
                    <input type="text"  placeholder=" Your Name*" required name="fname" id="fname" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-2 bg-[#F2F1EC] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>


        <div class="col-span-full mb-4 py-3">
                <label for="Gmail" class="block text-sm font-medium leading-6 text-gray-900 px-5"></label>
                <div class="mt-2">
                    <input type="text"  placeholder=" Your Email*" required name="gmail" id="gmail" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-2 bg-[#F2F1EC] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

        <div class="col-span-full mb-4 py-3 ">
       
                <div class="mt-2">
                    <textarea id="message"  placeholder=" Questions*" required name="message" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 px-2 bg-[#F2F1EC] shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>

        <div class=" py-3 ">
            <button class="  py-3 px-2  gap-3 rounded-md rounded-bl-sm rounded-tl-xl rounded-br-xl text-black  shadow-md shadow-[#2a3d2a] flex justify-center absolute md:static right-7 top-0">
                Send Message
            </button>

          
        </div>


        



            
    </form>
</section>


<script src="">
    let form = document.getElementbyTd("frm_contact");

    let form = document.getElementById("frm_contact");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    // Get all the data from the form
    let fullname = document.getElementById("fname").value;
    let email = document.getElementById("gmail").value;
    let message = document.getElementById("message").value;

});


// <!-- Javascript for submitting form data -->
   
            Make HTTP request to the save_contact endpoint on the server
            fetch(`../server/save_contact.php?fullname=${fullname}&message=${message}&email=${email}`)
            .then((res) => res.json())
            .then((data) => {
                if(data.status == "success"){
                    alert(data.message);
                    form.reset();
                }else{
                    alert(data.message);
                }
            })
            .catch((err) => {
                console.log("errr", err);
            });
    </script>
</body>
</html>

<!-- 
bg-cover bg-no-repeat bg-center text-white" style="background-image: url('images/framebg.png'); -->