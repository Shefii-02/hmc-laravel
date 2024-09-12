<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('v1/resource/banners', function () {
    $images = [
        "https://petapixel.com/assets/uploads/2022/12/what-is-unsplash-800x420.jpg",
        "https://via.placeholder.com/600x200",
        "https://petapixel.com/assets/uploads/2022/12/image13-1-800x536.jpg",
        "https://via.placeholder.com/600x200",
        "https://petapixel.com/assets/uploads/2022/12/image11-1-800x534.jpg",
        "https://via.placeholder.com/600x200",
    ];

    return response()->json([
        'data' => $images,
        'status' => 'success',
        'success' => true
    ], 200);
});


Route::get('v1/resource/departments', function () {
    $departments = [];

    for ($i = 1; $i <= 16; $i++) {
        $departments[] = [
            'image' => "https://via.placeholder.com/600x300?text=Department+Image+$i",
            'dept_title' => "Department Title $i",
            'description' => "This is a description for Department $i.",
            'doctor' => [
                [
                    'image' => "https://via.placeholder.com/150x150?text=Doctor+Image+$i",
                    'doctor_name' => "Doctor Name $i",
                    'departments' => "Department $i",
                    'qualifications' => "MBBS, MD",
                    'appointment_time' => "9:00 AM - 4:00 PM",
                    'availability_day' => "Monday to Friday",
                ],
                [
                    'image' => "https://via.placeholder.com/150x150?text=Doctor+Image+" . ($i + 1),
                    'doctor_name' => "Doctor Name " . ($i + 1),
                    'departments' => "Department $i",
                    'qualifications' => "MBBS, MD",
                    'appointment_time' => "10:00 AM - 6:00 PM",
                    'availability_day' => "Monday to Saturday",
                ],
            ],
        ];
    }

    return response()->json([
        'data' => $departments,
        'status' => 'success',
        'success' => true
    ], 200);
});




Route::get('v1/resource/services', function () {
    $services = [];

    for ($i = 1; $i <= 16; $i++) {
        $services[] = [
            'image' => "https://via.placeholder.com/600x300?text=Service+Image+$i",
            'service_title' => "Service Title $i",
            'description' => "This is a description for Service $i.",
        ];
    }

    return response()->json([
        'data' => $services,
        'status' => 'success',
        'success' => true
    ], 200);
});




Route::get('v1/resource/doctors', function () {
    $doctors = [];

    for ($i = 1; $i <= 16; $i++) {
        $doctors[] = 
                    [
                        'image' => "https://via.placeholder.com/300x350?text=Doctor+Image+$i",
                        'doctor_name' => "Doctor Name $i",
                        'departments' => "Department $i",
                        'qualifications' => "MBBS, MD",
                        'appointment_time' => "9:00 AM - 4:00 PM",
                        'availability_day' => "Monday to Friday",
                    ];
    }

    return response()->json([
        'data' => $doctors,
        'status' => 'success',
        'success' => true
    ], 200);
});


Route::get('v1/resource/news-events', function () {
    $newsEvents = [
        [
            'id' => 1,
            'image' => 'https://via.placeholder.com/600x300',
            'post_date' => '2024-09-01',
            'title' => 'Event 1: Tech Conference',
            'description' => 'Join us for an exciting tech conference with industry leaders.',
        ],
        [
            'id' => 2,
            'image' => 'https://via.placeholder.com/600x300',
            'post_date' => '2024-09-05',
            'title' => 'Event 2: Webinar on AI',
            'description' => 'A deep dive into AI advancements and future opportunities.',
        ],
        [
            'id' => 3,
            'image' => 'https://via.placeholder.com/600x300',
            'post_date' => '2024-09-10',
            'title' => 'Event 3: Coding Bootcamp',
            'description' => 'A hands-on coding bootcamp for beginners and professionals.',
        ],
        [
            'id' => 4,
            'image' => 'https://via.placeholder.com/600x300',
            'post_date' => '2024-09-15',
            'title' => 'Event 4: Startup Pitching Competition',
            'description' => 'Witness the next big ideas in this startup pitching event.',
        ],
        [
            'id' => 5,
            'image' => 'https://via.placeholder.com/600x300',
            'post_date' => '2024-09-20',
            'title' => 'Event 5: Open Hackathon',
            'description' => 'Collaborate and innovate in this open hackathon for tech enthusiasts.',
        ],
     
    ];

    return response()->json(['data' => $newsEvents, 
        'status' => 'success','success' => true], 200);
});



Route::get('v1/resource/youtube-videos', function () {
    $videos = [
        [
            'url' => 'https://youtu.be/-iAOridGcoo',
            'image_url' => 'https://img.youtube.com/vi/-iAOridGcoo/0.jpg',
        ],
        [
            'url' => 'https://youtu.be/kVMuAWV_Igk',
            'image_url' => 'https://img.youtube.com/vi/kVMuAWV_Igk/0.jpg',
        ],
        [
            'url' => 'https://youtu.be/tqyaQkZuGkM',
            'image_url' => 'https://img.youtube.com/vi/tqyaQkZuGkM/0.jpg',
        ],
        [
            'url' => 'https://youtu.be/NnCsAaL6qoA',
            'image_url' => 'https://img.youtube.com/vi/NnCsAaL6qoA/0.jpg',
        ],
        [
            'url' => 'https://youtu.be/HVh3WHa8e4o',
            'image_url' => 'https://img.youtube.com/vi/HVh3WHa8e4o/0.jpg',
        ],
        [
            'url' => 'https://youtu.be/3DCZZPJ0fNk',
            'image_url' => 'https://img.youtube.com/vi/3DCZZPJ0fNk/0.jpg',
        ],
        
    ];

    return response()->json(['data' => $videos,    'status' => 'success', 'success' => true], 200);
});

