<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Tailwind CSS (CDN version) -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4">
    <div class="max-w-6xl w-full">
        <!-- Header -->
        <div class="text-center mb-12">
            <div class="flex justify-center mb-6">
                <div class="bg-white p-4 rounded-full shadow-xl">
                    <svg class="w-20 h-20 text-purple-600" viewBox="0 0 48 48" fill="currentColor">
                        <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"/>
                        <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"/>
                    </svg>
                </div>
            </div>
            <h1 class="text-5xl font-bold text-white mb-4">Welcome to Our Platform</h1>
            <p class="text-xl text-white/80 max-w-2xl mx-auto">
                Build your next big idea with the most popular PHP framework. 
                We've got everything you need to get started.
            </p>
        </div>

        <!-- Main Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl card-hover">
                <div class="text-purple-600 mb-4">
                    <i class="fas fa-book text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Documentation</h3>
                <p class="text-gray-600 mb-6">
                    Laravel has wonderful documentation covering every aspect of the framework.
                </p>
                <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-800">
                    Read Documentation 
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl card-hover">
                <div class="text-purple-600 mb-4">
                    <i class="fas fa-video text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Laracasts</h3>
                <p class="text-gray-600 mb-6">
                    Laracasts offers thousands of video tutorials on Laravel development.
                </p>
                <a href="https://laracasts.com" target="_blank" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-800">
                    Watch Tutorials
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-xl card-hover">
                <div class="text-purple-600 mb-4">
                    <i class="fas fa-store text-4xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-3">Laravel News</h3>
                <p class="text-gray-600 mb-6">
                    Stay up to date with all the latest news in the Laravel ecosystem.
                </p>
                <a href="https://laravel-news.com" target="_blank" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-800">
                    Visit News
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="glass-effect rounded-2xl p-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Ready to Deploy?</h2>
            <p class="text-white/80 mb-8 max-w-2xl mx-auto">
                Deploy your Laravel application with zero configuration on Vapor, 
                Laravel's serverless deployment platform.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/login" 
                   class="bg-white text-purple-600 px-8 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition duration-300">
                   <i class="fas fa-rocket mr-2"></i> Deploy Now
                </a>
                <a href="/register" 
                   class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white/10 transition duration-300">
                   <i class="fas fa-user-plus mr-2"></i> Get Started Free
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">200K+</div>
                    <div class="text-white/60">Developers</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">50K+</div>
                    <div class="text-white/60">Projects</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">99.9%</div>
                    <div class="text-white/60">Uptime</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-white">24/7</div>
                    <div class="text-white/60">Support</div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-12">
            <p class="text-white/60">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </p>
        </div>
    </div>
</body>
</html>
