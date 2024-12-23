<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class="bg-gradient-to-r from-blue-500 to-purple-600">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>

  
      
    <!-- Local CSS -->
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
	
</head>
<body>

<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white m-4">
	<?php foreach ($listings as $listing): ?>
		<!-- Job Listing 1 -->
                <div class="rounded-lg shadow-md bg-white p-4">
                    <div class="flex items-center space-between gap-4">
                        <img
                            src="/images/logos/logo-algorix.png"
                            alt=""
                            class="w-14"
                        />
                        <div>
                            <h2 class="text-xl font-semibold">
                                Software Engineer
                            </h2>
                            <p class="text-sm text-gray-500">Full-Time</p>
                        </div>
                    </div>
                    <p class="text-gray-700 text-lg mt-2">
                        Design and develop high-quality software applications,
                        collaborating with teams and ensuring efficient
                        solutions.
                    </p>
                    <ul class="my-4 bg-gray-100 p-4 rounded">
                        <li class="mb-2"><strong>Salary:</strong> $90,000</li>
                        <li class="mb-2">
                            <strong>Location:</strong> Albany, NY
                            <span
                                class="text-xs bg-red-500 text-white rounded-full px-2 py-1 ml-2"
                                >On-site</span
                            >
                        </li>
                        <li class="mb-2">
                            <strong>Tags:</strong> <span>Development</span>,
                            <span>Coding</span>, <span>Java</span>,
                            <span>Python</span>
                        </li>
                    </ul>
                    <a
                        href="job-details.html"
                        class="block w-full text-center px-5 py-2.5 shadow-sm rounded border text-base font-medium text-indigo-700 bg-indigo-100 hover:bg-indigo-200"
                    >
                        Details
                    </a>
                </div>
	<?php endforeach; ?>
</div>

</body>
</html>
