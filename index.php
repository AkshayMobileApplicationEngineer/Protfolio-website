<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Android Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
</head>

<body class="font-sans bg-gray-100">

    <!-- Navigation Menu -->
    <nav class="bg-blue-700 p-4 fixed w-full top-0 z-10 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
          <a href="#" class="flex items-center text-white">
             <img src="https://media.licdn.com/dms/image/v2/D5603AQGMzjPb5FeLSw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1707043531898?e=1741219200&v=beta&t=8WDY0Y893tK3-IWwEMW1qeDlf3j7oOszddKPqlSn5P0" alt="Profile Image" class="h-10 w-10 rounded-full mr-2" id="profileimage">
        
          </a>
            <script>
                var profileimage = document.getElementById("profileimage");
                profileimage.addEventListener("click", function() {
                    window.location.href = "admin/dashboard.php";
                });
            </script>
               
            
        <div class="hidden md:flex space-x-6">
            <a href="#HomeHeroSection" class="text-white hover:text-gray-200 transition-colors duration-300">Home</a>
            <a href="#AboutMe" class="text-white hover:text-gray-200 transition-colors duration-300">About Me</a>
            <a href="#Skills" class="text-white hover:text-gray-200 transition-colors duration-300">Skills</a>
            <a href="#Projects" class="text-white hover:text-gray-200 transition-colors duration-300">Projects</a>
            <a href="#Education" class="text-white hover:text-gray-200 transition-colors duration-300">Education</a>
            <a href="#Contact" class="text-white hover:text-gray-200 transition-colors duration-300">Contact</a>
             <a href="#HireMeSection" class="text-white hover:text-gray-200 transition-colors duration-300">Hire Me</a>
        </div>

        <!-- Hamburger Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>


        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full right-0 bg-blue-700 w-48 mt-2 rounded-md shadow-lg">
             <div class="px-4 py-2">
                 <a href="#HomeHeroSection" class="block py-2 text-white hover:bg-blue-600 rounded-md">Home</a>
                <a href="#AboutMe" class="block py-2 text-white hover:bg-blue-600 rounded-md">About Me</a>
                <a href="#Skills" class="block py-2 text-white hover:bg-blue-600 rounded-md">Skills</a>
                <a href="#Projects" class="block py-2 text-white hover:bg-blue-600 rounded-md">Projects</a>
                 <a href="#Education" class="block py-2 text-white hover:bg-blue-600 rounded-md">Education</a>
                 <a href="#Contact" class="block py-2 text-white hover:bg-blue-600 rounded-md">Contact</a>
                   <a href="#HireMeSection" class="block py-2 text-white hover:bg-blue-600 rounded-md">Hire Me</a>
            </div>
        </div>

    </div>
</nav>


<script>
 const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

 <!-- Home Hero Section -->
 <section id="HomeHeroSection" class="relative h-screen bg-cover bg-center pt-16">
    <div class="relative h-full">
        <!-- Slide Container -->
        <div id="heroSlides" class="slides-container relative h-full overflow-hidden">
            <!-- Slide 1 -->
            <div class="slide absolute w-full h-full bg-cover bg-center transition-opacity duration-700"
                style="background-image: url('https://images.unsplash.com/photo-1506748686217-051306f7220e');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-6">
                        <h1 class="text-6xl font-bold text-gradient mb-4">Welcome to My Portfolio</h1>
                        <p class="text-2xl font-medium mb-6">Passionate Android Developer</p>
                        <p class="text-lg">Building apps that simplify lives with seamless UX/UI</p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide absolute w-full h-full bg-cover bg-center transition-opacity duration-700 opacity-0"
                style="background-image: url('https://images.unsplash.com/photo-1593642634315-58b1e4d6c74f');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-6">
                        <h1 class="text-6xl font-bold text-gradient mb-4">Skills & Expertise</h1>
                        <p class="text-2xl mb-6">Expert in Android Development</p>
                        <ul class="list-disc list-inside text-lg space-y-2">
                            <li>Java & Kotlin</li>
                            <li>Android SDK</li>
                            <li>MVVM Architecture</li>
                            <li>Firebase Integration</li>
                            <li>UI/UX Design Principles</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide absolute w-full h-full bg-cover bg-center transition-opacity duration-700 opacity-0"
                style="background-image: url('https://images.unsplash.com/photo-1593642532843-d377e8ad9b2c');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-6">
                        <h1 class="text-6xl font-bold text-gradient mb-4">My Projects</h1>
                        <p class="text-2xl mb-6">Some of the apps I've developed</p>
                        <ul class="text-lg space-y-2">
                            <li><strong>Task Manager:</strong> MVVM, Room Database, Firebase</li>
                            <li><strong>E-Commerce App:</strong> Kotlin, Retrofit, Firebase Auth</li>
                            <li><strong>Travel Booking:</strong> Jetpack Compose, Google Maps API</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Slide 4: Contact -->
            <div class="slide absolute w-full h-full bg-cover bg-center transition-opacity duration-700 opacity-0"
                style="background-image: url('https://images.unsplash.com/photo-1557682224-5b8590cd9ec5');">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center text-white px-6">
                        <h1 class="text-6xl font-bold text-gradient mb-4">Contact Me</h1>
                        <p class="text-2xl mb-6">Let's Collaborate!</p>
                        <div class="flex justify-center space-x-6 bg-gradient-to-r from-blue-500 via-pink-500 to-red-500 rounded-xl p-4">
                            <a href="mailto:your-email@example.com" class="text-white text-lg font-bold hover:text-gray-200 transition-all duration-300">Email Me</a>
                            <a href="https://www.yourwebsite.com" class="text-white text-lg font-bold hover:text-gray-200 transition-all duration-300">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button role="button" aria-label="Previous Slide"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-transparent text-white p-4 rounded-full hover:bg-gray-800 focus:outline-none"
            onclick="previousSlide()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button role="button" aria-label="Next Slide"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-transparent text-white p-4 rounded-full hover:bg-gray-800 focus:outline-none"
            onclick="nextSlide()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Slide Indicators -->
        <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-3">
            <button class="h-3 w-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75 focus:outline-none" onclick="goToSlide(0)"></button>
            <button class="h-3 w-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75 focus:outline-none" onclick="goToSlide(1)"></button>
            <button class="h-3 w-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75 focus:outline-none" onclick="goToSlide(2)"></button>
            <button class="h-3 w-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75 focus:outline-none" onclick="goToSlide(3)"></button>
        </div>
    </div>
</section>

<style>
    .text-gradient {
        background: linear-gradient(45deg, #ff6b6b, #f06595, #ffb6b6);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
</style>

<script>
    let slideIndex = 0;

    function showSlides() {
        const slides = document.querySelectorAll('.slide');
        slides.forEach((slide, index) => {
            slide.classList.add('opacity-0');
            slide.classList.remove('opacity-100');
            if (index === slideIndex) {
                slide.classList.add('opacity-100');
                slide.classList.remove('opacity-0');
            }
        });
    }

    function nextSlide() {
        slideIndex = (slideIndex + 1) % 4;
        showSlides();
    }

    function previousSlide() {
        slideIndex = (slideIndex - 1 + 4) % 4;
        showSlides();
    }

    function goToSlide(index) {
        slideIndex = index;
        showSlides();
    }

    showSlides();
    setInterval(nextSlide, 5000); // Auto slide change every 5 seconds
</script>

   <!-- About Me Section -->
<section id="AboutMe" class=" py-16 bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-500 text-white relative">
    <div class="container mx-auto text-center">
        <!-- Floating Decorative Elements -->
        <div class="absolute top-0 left-0 w-20 h-20 bg-pink-500 opacity-20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-40 h-40 bg-purple-500 opacity-20 rounded-full blur-3xl"></div>
        
        <!-- Profile Image -->
        <div class="relative z-10 mb-8">
            <img src="https://media.licdn.com/dms/image/v2/D5603AQGMzjPb5FeLSw/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1707043531898?e=1741219200&v=beta&t=8WDY0Y893tK3-IWwEMW1qeDlf3j7oOszddKPqlSn5P0" alt="Profile Image"
                class="w-32 h-32 rounded-full mx-auto border-4 border-white shadow-xl transition-transform transform hover:scale-110">
        </div>

        <!-- Heading -->
        <h2 class="text-5xl font-extrabold mb-4 leading-tight relative z-10">
            Hey, I'm <span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-pink-500">Akshay</span>
        </h2>

        <!-- Description -->
        <p class="text-lg mb-4 max-w-2xl mx-auto font-light tracking-wide">
            I’m a creative Android developer with a flair for crafting high-performance mobile applications.
            My expertise lies in Java, Kotlin, and implementing modern MVVM architecture to deliver scalable, feature-rich solutions.
        </p>
        <p class="text-lg mb-8 max-w-2xl mx-auto font-light tracking-wide">
            I’m passionate about learning new technologies, staying ahead of trends, and solving real-world problems through intuitive apps.
            Let’s collaborate to create something extraordinary!
        </p>

        <!-- Call to Action -->
        <a href="#Contact"
            class="inline-block px-8 py-4 mt-6 text-lg font-semibold text-indigo-500 bg-white hover:bg-yellow-400 hover:text-white rounded-full shadow-lg transform transition-transform hover:-translate-y-1">
            Get in Touch
        </a>
    </div>
</section>

<section id="Skills" class="py-16 bg-gradient-to-br from-purple-100 via-blue-50 to-blue-200">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6">Skills</h2>
        <p class="text-lg text-gray-700 mb-10">My technical proficiencies</p>

        <!-- Skills Container -->
        <div class="relative">
            <div class="flex flex-wrap justify-center gap-6" id="skillsContainer">
                <!-- Skill 1 Card -->
                <div class="bg-white rounded-lg p-6 shadow-lg w-72">
                    <div class="flex items-center mb-4">
                        <i class="fab fa-java text-3xl text-blue-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">Java</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Experienced in building scalable and reliable backend systems.</p>
                </div>

                <!-- Skill 2 Card -->
                <div class="bg-white rounded-lg p-6 shadow-lg w-72">
                    <div class="flex items-center mb-4">
                        <i class="fab fa-android text-3xl text-yellow-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">Kotlin</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Proficient in modern Android development with Kotlin.</p>
                </div>

                <!-- Skill 3 Card -->
                <div class="bg-white rounded-lg p-6 shadow-lg w-72">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-database text-3xl text-red-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">Firebase</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Experienced in integrating Firebase services for mobile applications.</p>
                </div>

                <!-- Skill 4 Card -->
                <div class="bg-white rounded-lg p-6 shadow-lg w-72">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-pencil-alt text-3xl text-purple-600 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">Jetpack Compose</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Skilled in building modern UIs with Jetpack Compose.</p>
                </div>

                <!-- Skill 5 Card -->
                <div class="bg-white rounded-lg p-6 shadow-lg w-72">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-code text-3xl text-green-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">MVVM Architecture</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Expert in implementing clean MVVM architecture patterns.</p>
                </div>

                 <!-- Skill 6 Card -->
                <div class="bg-white rounded-lg p-6 shadow-lg w-72">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-mobile-alt text-3xl text-blue-500 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800">UI/UX Design</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Creating intuitive and beautiful mobile interfaces.</p>
                </div>

                <!-- Additional Skill Cards... -->
            </div>
        </div>
    </div>
</section>
  



    <!-- Projects Section -->
    <section id="Projects" class="py-10 pt-20 bg-gradient-to-b from-pink-50 to-pink-100">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-pink-600 mb-6">My Projects</h2>
        <p class="text-lg text-gray-700 mb-8">Discover some of my finest work.</p>

        <!-- Project Container -->
        <div class="relative">
            <div class="flex flex-wrap justify-center gap-6 px-4 pb-8 pt-10" id="projectContainer">
                <!-- Project 1 -->
                <div
                    class="project-card w-80 h-96 bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <img src="https://quizparlour.in/assets/img/logo.png" alt="Quiz Parlour"
                        class="w-full h-40 object-contain rounded-t-2xl">
                    <div class="p-4">
                        <h3 class="text-2xl font-semibold text-pink-500 mb-2">Quiz Parlour</h3>
                        <p class="text-gray-600 mb-4">A quiz app built with Android Studio and Firebase Realtime Database RoomDatabase for efficient data management.</p>
                        <a href="https://quizparlour.in"
                            class="text-pink-500 hover:text-pink-700 font-semibold underline underline-offset-4">View
                            Details</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div
                    class="project-card w-80 h-96 bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <img src="https://via.placeholder.com/320x180?text=Project+2" alt="Project 2"
                        class="w-full h-40 object-contain rounded-t-2xl">
                    <div class="p-4">
                        <h3 class="text-2xl font-semibold text-pink-500 mb-2">Aamdani App</h3>
                        <p class="text-gray-600 mb-4">Aamdani app built with Android Studio and Firebase Realtime Database
                        Ads for real-time advertising.</p>
                        <a href="#"
                            class="text-pink-500 hover:text-pink-700 font-semibold underline underline-offset-4">View
                            Details</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="project-card w-80 h-96 bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <img src="asset/cdn/csm.png" alt="Project 3 - CSM RITP Overview" class="w-full h-40 object-contain rounded-t-2xl">
                        <div class="p-4">
                            <h3 class="text-2xl font-semibold text-pink-500 mb-2">CSM RITP</h3>
                                <p class="text-gray-600 mb-4">A college management system built with Android Studio and Firebase Realtime Database for efficient data management.</p>
                            <a href="#" class="text-pink-500 hover:text-pink-700 font-semibold underline underline-offset-4">View Details</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="Education" class="py-16 bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
    <div class="container mx-auto text-center">
        <!-- Heading -->
        <h2 class="text-4xl font-extrabold mb-8 text-white">Education</h2>

        <!-- Education Items -->
        <div class="max-w-3xl mx-auto space-y-8">
            <!-- Education Item 1 -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <h3 class="text-2xl font-semibold mb-2 text-indigo-600">Bachelor of Science in Computer Science</h3>
                <p class="text-lg text-gray-700">University of XYZ</p>
                <p class="text-lg text-gray-500">Graduated: May 2020</p>
                <p class="mt-2 text-gray-600">Focused on software development, data structures, algorithms, and mobile application development. Developed a deep understanding of object-oriented programming, databases, and problem-solving techniques.</p>
            </div>

            <!-- Education Item 2 -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <h3 class="text-2xl font-semibold mb-2 text-indigo-600">Master of Science in Software Engineering</h3>
                <p class="text-lg text-gray-700">University of ABC</p>
                <p class="text-lg text-gray-500">Expected Graduation: December 2024</p>
                <p class="mt-2 text-gray-600">Pursuing a deep dive into advanced software engineering principles, including software architecture, project management, and machine learning. Currently working on a thesis focused on mobile app optimization.</p>
            </div>

            <!-- Education Item 3 -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <h3 class="text-2xl font-semibold mb-2 text-indigo-600">Certification in Android Development</h3>
                <p class="text-lg text-gray-700">Online Platform - Udemy</p>
                <p class="text-lg text-gray-500">Completed: January 2022</p>
                <p class="mt-2 text-gray-600">A comprehensive course covering Android development using Java and Kotlin, including working with APIs, databases, and user interface design. Gained hands-on experience building and publishing Android apps.</p>
            </div>
        </div>
    </div>
</section>

    <!-- Hire Me Section -->
    <section id="HireMeSection" class="py-16 bg-gradient-to-r from-blue-600 to-teal-500 text-white">
        <div class="container mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-4xl font-extrabold mb-8">Hire Me</h2>

            <!-- Description -->
            <p class="text-lg mb-6 max-w-3xl mx-auto">
                I am a passionate Android developer with extensive experience building high-performance mobile apps. Whether
                you need help with a freelance project or looking to hire for a full-time position, I’m eager to collaborate
                on creating innovative solutions. Let's build something amazing together!
            </p>

            <!-- Call to Action Section -->
            <div class="mb-8">
                <p class="text-lg mb-4">Ready to work with me? I’m excited to hear about your project and how I can
                    contribute. Feel free to reach out through email or download my resume for more details.</p>

                <!-- Contact Button -->
                <a href="mailto:developer@example.com"
                    class="bg-yellow-500 text-xl text-black py-3 px-8 rounded-full inline-block mb-4 hover:bg-yellow-400 transition-all">
                    Contact Me
                </a>

                <!-- Download Resume Button -->
                <a href="path/to/your/resume.pdf" download="Developer_Resume"
                    class="bg-gray-800 text-xl text-white py-3 px-8 rounded-full inline-block hover:bg-gray-700 transition-all">
                    Download Resume
                </a>
            </div>
        </div>
    </section>



<!-- Contact Section -->
<section id="Contact" class="relative py-16 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1517430816045-df4b7de11dff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1600&q=80');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Column -->
            <div class="text-center lg:text-left">
                <img src="https://images.unsplash.com/photo-1581567904807-433ff01e4f34?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" 
                    alt="Contact Illustration" 
                    class="rounded-lg shadow-2xl max-w-full h-auto w-96 mx-auto lg:mx-0">
            </div>

            <!-- Contact Form Column -->
            <div>
                <h2 class="text-4xl font-bold mb-4 text-white text-center lg:text-left">
                    Stay Connected
                </h2>
                <p class="text-lg mb-8 text-gray-300 text-center lg:text-left">
                    Have questions or proposals? Let’s collaborate and create something amazing!
                </p>

                <div class="p-8 bg-white rounded-xl shadow-lg border border-gray-300">
                    <form action="admin/contact_form.php" method="POST" class="space-y-6">
                        <!-- Name Field -->
                        <div class="relative">
                            <input type="text" name="name" id="name" 
                                   class="w-full p-4 border rounded-lg focus:ring-4 focus:ring-blue-300 focus:border-blue-500 shadow-md placeholder-transparent peer" 
                                   placeholder="Your Name" required />
                            <label for="name" 
                                   class="absolute left-4 -top-3.5 bg-white px-1 text-blue-600 text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 transition-all duration-300">
                                Your Name
                            </label>
                        </div>

                        <!-- Email Field -->
                        <div class="relative">
                            <input type="email" name="email" id="email" 
                                   class="w-full p-4 border rounded-lg focus:ring-4 focus:ring-blue-300 focus:border-blue-500 shadow-md placeholder-transparent peer" 
                                   placeholder="Your Email" required />
                            <label for="email" 
                                   class="absolute left-4 -top-3.5 bg-white px-1 text-blue-600 text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 transition-all duration-300">
                                Your Email
                            </label>
                        </div>

                        <!-- Message Field -->
                        <div class="relative">
                            <textarea name="message" id="message" rows="4" 
                                      class="w-full p-4 border rounded-lg focus:ring-4 focus:ring-blue-300 focus:border-blue-500 shadow-md placeholder-transparent peer" 
                                      placeholder="Your Message" required></textarea>
                            <label for="message" 
                                   class="absolute left-4 -top-3.5 bg-white px-1 text-blue-600 text-sm peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-4 transition-all duration-300">
                                Your Message
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-indigo-500 text-white py-3 px-10 rounded-full text-lg font-semibold hover:from-blue-400 hover:to-indigo-400 transition-all duration-300 shadow-md">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Your message has been sent successfully!');
    });
</script>


<!-- Footer Section -->

</section>
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 lg:px-12">


            <!-- Footer Content - Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Contact Details Column -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Contact Details</h3>
                    <div class="space-y-2">
                        <p class="text-lg">📧 Email: <a href="mailto:akshaykumarprajapati@hotmail.com"
                                class="text-yellow-400">akshaykumarprajapati@hotmail.com</a></p>
                        <p class="text-lg">📞 Phone: +91 8987918309</p>
                    </div>
                </div>

                <!-- Social Media Links Column -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Social Media</h3>
                    <div class="flex flex-col space-y-2">
                        <a href="https://www.linkedin.com/in/akshay-mobile-application-developer/" class="text-white hover:text-yellow-400"
                            target="_blank">LinkedIn</a>
                        <a href="https://github.com/AkshayMobileApplicationEngineer" class="text-white hover:text-yellow-400" target="_blank">GitHub</a>
                        <a href="https://x.com/AkshayCompSci?t=2gYn2vqdztIBsQLzF7t3qQ&s=08&mx=2" class="text-white hover:text-yellow-400"
                            target="_blank">Twitter</a>
                        <a href="https://www.instagram.com/meliveakshay/" class="text-white hover:text-yellow-400"
                            target="_blank">Instagram</a>
                    </div>
                </div>

                <!-- Additional Links and Call to Action Column -->
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Quick Links</h3>
                    <div class="space-y-2">
                        <a href="#HomeHeroSection" class="text-white hover:text-yellow-400">Home</a>
                        <a href="#AboutMe" class="text-white hover:text-yellow-400">About Me</a>
                        <a href="#Projects" class="text-white hover:text-yellow-400">Projects</a>
                         <a href="#Education" class="text-white hover:text-yellow-400">Education</a>
                        <a href="#Contact" class="text-white hover:text-yellow-400">Contact</a>
                    </div>

                    <!-- Call to Action -->
                    <p class="text-lg mt-6">Looking to hire an Android Developer? <a
                            href="mailto:developer@example.com" class="text-yellow-400">Contact me today!</a></p>
                </div>
            </div>

            <!-- Footer Header -->
            <div class="text-center mt-6">
                <p class="text-xl font-semibold">© 2024 PanLogic Solutions Team </p>
            </div>
        </div>
    </footer>

<!-- JavaScript for Hero Section -->
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll(".slide");

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.opacity = i === index ? "1" : "0";
        });
        currentSlide = index;
    }

    function nextSlide() {
        const nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    function previousSlide() {
        const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    }

    function goToSlide(index) {
        showSlide(index);
    }

    // Auto Slide
    setInterval(() => {
        nextSlide();
    }, 5000);

    // Initial Display
    showSlide(currentSlide);
</script>

<script>
         // Project Slider
        let projectSlideIndex = 0;
        const projects = document.querySelectorAll('.project-card');

         function showProject(index) {
             const offset = -index * (projects[0].offsetWidth + 20); // 20 is the margin
             document.getElementById('projectSlider').style.transform = `translateX(${offset}px)`;
         }

        function nextProjectSlide() {
            projectSlideIndex = (projectSlideIndex + 1) % projects.length;
            showProject(projectSlideIndex);
        }

        function previousProjectSlide() {
            projectSlideIndex = (projectSlideIndex - 1 + projects.length) % projects.length;
            showProject(projectSlideIndex);
        }

        showProject(0);
    </script>

</body>

</html>