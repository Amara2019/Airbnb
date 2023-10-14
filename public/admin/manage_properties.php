<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./../css/app.css">
    <link rel="stylesheet" href="../fa_icons/css/all.css">
    <script>
        // Check if the user is logged in. If not, redirect to login page
        let activeUser = sessionStorage.getItem('active_user');

        if (activeUser == null || activeUser == '' || activeUser == undefined){
            location.href = 'login.html';
        }
    </script>
</head>
<body class="bg-slate-100">

    <section>
        <!-- Sidebar -->
        <aside class="h-full left-0 fixed w-56 bg-white shadow-md z-40">
            <?php
                include '../components/sidebar.html';
            ?>
        </aside>

        <!-- Main Content -->
        <main class="ml-56">
            <?php
                include '../components/admin_header.html';
            ?>

            <section class="my-10 w-full  px-8">
                <div class="max-w-6xl max-auto flex gap-4 justify-end items-center">
                    <button onclick="toggleModal('type_modal')" class="bg-primary text-white rounded-md py-2 px-4 text-sm font-semibold admin-only">
                        <i class="fas fa-plus"></i>
                        <span class="px-1">Add Type</span>
                    </button>
                    <button onclick="toggleModal('property_modal')" class="bg-primary text-white rounded-md py-2 px-4 text-sm font-semibold admin-only">
                        <i class="fas fa-plus"></i>
                        <span class="px-1">Add Property</span>
                    </button>
                </div>
            </section>

            <section class="py-4 px-8 mb-5">
                <div class=" w-full">
                    <!-- Taable of Posts -->
                    <aside class="md:col-span-4 bg-white rounded-md">
                        <div class="max-w-full overflow-x-auto">
                            <table class="w-full rounded-md overflow-hidden">
                                <thead class="bg-primary text-white w-full">
                                    <tr class="text-left">
                                        <th class="py-2 px-4">#</th>
                                        <th class="py-2 px-4">PROPERTY</th>
                                        <th class="py-2 px-4">RENT/LEASE</th>
                                        <th class="py-2 px-4">Action</th>
                                        <th class="py-2 px-4">STATUS</th>
                                        <th class="py-2 px-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="table_data">
                                    
                                </tbody>
                            </table>
                            
                        </div>
                    </aside>
                    <!-- List of Categories -->
                    <!-- <aside class="md:col-span-2">
                        <div>
                            <h1 class="bg-primary text-white py-1 px-4 font-bold text-lg rounded-t-md">
                                <i class="fa fa-layer-group"></i> Category List
                            </h1> -->
                            <!-- Un ordered list -->
                           
                        </div>
                        <ul id="cat_list" class="min-h-[400px] max-h-[500px] overflow-y-auto bg-white divide-y">
                                
                                </ul>
                    </aside>
                </div>
            </section>

        </main>
    </section>


    <script>
        
    </script>
    <!-- Include the modals file -->
    <?php include '../components/modals.html'; ?>

    <!-- Script -->
    <script>
        // Puttin Page Indicator title
        document.getElementById("page_indicator").innerHTML = `<i class="m"></i> Property List`;
    </script>
    <!-- <script src="../js/general_script.js"></script> -->
</body>
</html>



















<!-- <aside class="md:col-span-4 bg-white rounded-md">
                        <div class="max-w-full overflow-x-auto">
                            <table class="w-full rounded-md overflow-hidden">
                                <thead class="bg-primary text-white">
                                    <tr class="text-left"> -->