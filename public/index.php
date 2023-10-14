<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirBnB</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="fa_icons/css/all.min.css">    <!-- <link rel="stylesheet" href=""> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">    <link rel="stylesheet" href=""> -->

</head>
<body>
   <div  class="bg-cover  bg-no-repeat  bg-center bg-primary opacity-90" style="background-image: url('images/pic.png');">
   <?php 
        include_once "components/header.html";
        include_once "components/banner.html";
        
        ?>
        </div>

        <?php
        include_once "components/about.html";
        include_once "components/listing.html"; 
        include_once "components/blog.html"; 
        include_once "components/testimonial.html";
        include_once "components/footer.html";
        ?>


<script>
        let activeproperties = 'all';
        let setActiveproperties = (properties) => {
            activeproperties = properties;
            fetchproperties();
        }
        const fetchproperties = () => {
            fetch('../server/fetch_properties.php')
            .then((res) => res.json())
            .then((data) => {
                if (data.status == 'success') {
                    let list = `<button onclick="setActiveproperties('all')" class="hover:bg-primary hover:text-white ${(activeproperties == 'all') ? 'bg-primary text-white' : 'border-primary border'} text-primary py-1 px-3 text-xs rounded-md italic">
                                    All
                                </button>`; // Default All

                    // Loop throught the categories and accumulated the results into the list
                    data.categories.forEach((cat) => {
                        list += `<button onclick="setActiveproperties('${cat.categories}')" class="hover:bg-primary hover:text-white ${activeproperties == cat.properties? 'bg-primary text-white' : 'border-primary border'} text-primary py-1 px-3 text-xs rounded-md italic">
                                    ${cat.categories}
                                </button>`;
                    });

                    // asign the list into the ul element with the id "cat_list"
                    document.getElementById('div_cats').innerHTML = list;
                } else {
                    alert(data.message);
                }
            });
        }
        fetchproperties();

        // let fetchPost = () => {
        //     let formData = new FormData();
        //     formData.append('action', 'fetch_post')

        //     fetch('../server/manage_post.php', {
        //         method: 'POST', 
        //         body: formData,
        //     })
        //     .then((res) => res.json())
        //     .then((data) => {
        //         let postList =  '';
        //         data.posts.forEach((post) => {
        //             postList += `<aside class="rounded-lg shadow bg-white">
        //                             <div class="h-44 bg-slate-300 flex justify-center items-center rounded-t-lg" 100px="">
        //                                 <img src="images/blogs/${post.image}" alt="Image" class="h-full min-w-full flex justify-center items-center">
        //                             </div>
        //                             <!--  -->
        //                             <div class="py-3 px-4">
        //                                 <h1 class="mb-2 text-lg font-bold">${post.title}</h1>
        //                                 <p class="mb-2 text-small line-clamp-3 max-h-[200px] overflow-y-hidden">
        //                                     ${post.body}
        //                                 </p>
        //                                 <p class="mb-2">
        //                                     <a href="blogpost.php?post_id=${post.id}" class="hover:bg-primary border-primary border text-primary hover:text-white py-1 px-3 text-xs rounded-md italic">
        //                                         Read More
        //                                     </a>
        //                                 </p>
        //                                 <small class="flex justify-between">
        //                                     <div>
        //                                         Posted By: ${post.author.uname}
        //                                     </div>
        //                                     <div>
        //                                         Posted On:  ${(post.posted_on)}
        //                                     </div>
        //                                 </small>
        //                             </div>
        //                         </aside>`;
        //         });
        //         document.getElementById('featured_posts').innerHTML = postList;
        //     });
        // }
        // fetchPost();

        $token = 'Hello2Token4user';

        // let test = () => {
        //     fetch('../server/headers.php', {
        //         method: 'POST',
        //         body: 
        //         // headers : {
        //         //     'Content-Type' : 'application/json',
        //         //     'Authorization' : 'Bearer ' + $token,
        //         // }
        //     })
        //     .then((res) => res.json())
        //     .then((res) => {
        //         console.log(res);
        //     });
        // }
        // test();
    </script>
</body>
</html>

  
    
    
 




</body>
</html>