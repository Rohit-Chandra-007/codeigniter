<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workopia</title>
	
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-blue-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">Workopia</h1>
            <div>
                <a href="#" class="text-yellow-400 px-4 hover:text-yellow-300">Home</a>
                <a href="#" class="px-4 hover:text-gray-300">All Jobs</a>
                <a href="#" class="px-4 hover:text-gray-300">Login</a>
                <a href="#" class="px-4 hover:text-gray-300">Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-96">
        <!-- Background image div -->
        <div 
            class="absolute inset-0 bg-cover bg-center" 
            style="background-image: url('<?php echo base_url('assets/images/hero.jpg'); ?>');">
        </div>
        
        <!-- Opacity overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Content div with higher z-index -->
        <div class="relative z-10 container mx-auto text-center px-4 py-24">
            <h2 class="text-4xl font-bold mb-6 text-white">Find Your Dream Job</h2>
            <div class="flex justify-center items-center">
                <input type="text" 
                    placeholder="Search for jobs" 
                    class="w-1/4 px-4 py-2 mx-2 text-gray-900 rounded-l-md focus:outline-none form-control" />
                <input type="text" 
                    placeholder="Location" 
                    class="w-1/4 px-4 py-2 mx-2 text-gray-900 focus:outline-none" />
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-8 py-2 rounded-r-md focus:outline-none">
                    Search
                </button>
            </div>
        </div>
    </section>

    <!-- Unlock Potential Section -->
    <section class="bg-blue-900 text-white py-12">
        <div class="container mx-auto text-center px-4">
            <h3 class="text-2xl font-semibold mb-4">Unlock Your Career Potential</h3>
            <p class="text-lg">Discover the perfect job opportunity for you.</p>
        </div>
    </section>

    <!-- Job Categories Section -->
     <section>
        <div>
            <?= form_open();?>
            <?= form_input([
                'name' => 'search',
                'placeholder' => 'Search for jobs',
                'class' => 'w-1/4 px-4 py-2 mx-2 text-gray-900 rounded-l-md focus:outline-none'
            ]);?>
            <?= form_input([
                'name' => 'location',
                'placeholder' => 'Location',
                'class' => 'w-1/4 px-4 py-2 mx-2 text-gray-900 focus:outline-none'
            ]);?>
           
            <?= form_close();?>
            
        </div>
     </section>


</body>
</html>
