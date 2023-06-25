<?php
include_once 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="dist/styles.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>My Portfolio</title>
    <style>
        .screenshot {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="py-4 bg-white shadow">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl md:text-4xl font-bold text-gray-800">My Portfolio</h1>

            <nav class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-800 hover:text-gray-600">Home</a></li>
                    <li><a href="./education" class="text-gray-800 hover:text-gray-600">Education</a></li>
                    <li><a href="./schedule" class="text-gray-800 hover:text-gray-600">Schedule</a></li>
                    <li><a href="./activities" class="text-gray-800 hover:text-gray-600">Activities</a></li>
                    <li><a href="./achievement" class="text-gray-800 hover:text-gray-600">Achievements</a></li>
                    <li><a href="./hobbies" class="text-gray-800 hover:text-gray-600">Hobbies</a></li>
                </ul>
            </nav>

            <div class="md:hidden">
                <button class="focus:outline-none">
                    <svg class="w-6 h-6 text-gray-800 hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main class="container mx-auto mt-10 px-4">
        <h2 class="text-2xl font-bold mb-5">Basic Information</h2>
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 flex justify-center">
                <div class="mb-8">
                    <p class="mb-2"><span class="font-semi-bold">Nama:</span> Ahmad Yazid Isnandar</p>
                    <p class="mb-2"><span class="font-semi-bold">Alamat:</span> Surabaya, Indonesia</p>
                    <p><span class="font-semi-bold">Email: </span><a href="mailto:admin@ahmadyaz.my.id">admin@ahmadyaz.my.id</a></p>
                </div>
            </div>
            <div class="w-full md:w-1/3 flex justify-center">
                <img src="./assets/images/me.jpeg" alt="Profile Image" class="max-w-xs mr-4 object-contain object-right-top">
            </div>
            <div class="w-full md:w-1/3 flex justify-center">
                <a href="https://drive.google.com/file/d/1JaTJIHCLySOPR0p9erzS7A_5Pz47dNuc/view?usp=sharing">
                    <img src="./assets/images/cv.jpg" alt="Curriculum Vitae" class="max-w-xs">
                </a>
            </div>
        </div>
        <h2 class="text-2xl font-semi-bold mb-4">My Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Add your subdomains here as cards -->
            <?php
            $sql = "SELECT * FROM subdomain order by id_subdomain desc";
            $result = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="bg-white rounded shadow p-6">
                    <h3 class="text-lg font-semi-bold mb-2"><?php echo $row['title'] ?></h3>

                    <div class="screenshot" style="background-image: url('./assets/images/<?php echo $row['subdomain'] ?>.png'); height: 200px;"></div>
                    <p><?php echo $row['description'] ?></p>
                    <a href="<?php echo $row['full_domain'] ?>" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Visit</a>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>