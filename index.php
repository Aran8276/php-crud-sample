<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
</head>

<body>
    <div class="flex justify-center items-center h-screen bg-gradient-to-r from-slate-900 to-slate-700 background-animate">
        <section class="bg-[#1d232a] shadow-2xl w-screen">
            <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">
                <h2 class="max-w-2xl mx-auto text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
                    Tugas PHP CRUD <span class="text-blue-500">Next Level.</span>
                </h2>

                <p class="max-w-4xl mt-6 text-center text-gray-500 flex flex-col dark:text-gray-300">
                    <span>Made by Aran8276 / Zahran, SMKN6 Malang.</span>
                    <span>Specially Crafted with Tailwind CSS, MerakiUI, DaisyUI, Flowbite.</span>
                </p>

                <div class="inline-flex w-full mt-6 sm:w-auto">
                    <a href="main.php" class="inline-flex items-center justify-center w-full px-6 py-2 text-white duration-300 bg-blue-600 rounded-lg hover:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Mulai
                    </a>
                </div>
            </div>
        </section>
    </div>


</body>

<style>
    body {
        font-family: "Inter", sans-serif;
    }

    .background-animate {
        background-size: 400%;

        -webkit-animation: AnimationName 3s ease infinite;
        -moz-animation: AnimationName 3s ease infinite;
        animation: AnimationName 3s ease infinite;
    }

    @keyframes AnimationName {

        0%,
        100% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }
    }
</style>

</html>