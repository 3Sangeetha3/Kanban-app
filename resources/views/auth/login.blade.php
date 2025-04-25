<!-- resources/views/auth/signin.blade.php -->
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Kanban</title>
    <meta name="description" content="Sign in to Kanban - Your powerful task management solution">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --color-primary: #1A191E;
            --color-secondary: #3E3D44;
            --color-tertiary: #2C2C31;
            --color-accent: #6565E0;
        }
        body {
            background-color: var(--color-primary);
            color: #fff;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .btn-primary {
            background-color: var(--color-accent);
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #5252c5;
            transform: translateY(-1px);
        }
        .btn-outline {
            border: 1px solid var(--color-accent);
            color: var(--color-accent);
            transition: all 0.3s ease;
        }
        .btn-outline:hover {
            background-color: rgba(101, 101, 224, 0.1);
        }
        .form-input {
            background-color: var(--color-tertiary);
            border: 1px solid var(--color-secondary);
            color: white;
            transition: all 0.3s ease;
        }
        .form-input:focus {
            border-color: var(--color-accent);
            box-shadow: 0 0 0 3px rgba(101, 101, 224, 0.3);
            outline: none;
        }
        .card {
            background-color: var(--color-tertiary);
            border-radius: 0.75rem;
        }
        .main-content {
            flex: 1;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="px-6 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{ asset('images/kanban-logo.svg') }}" alt="Kanban Logo" class="h-8 w-8 mr-2">
            <h1 class="text-2xl font-bold text-white">Kanban</h1>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('login') }}" class="btn-outline px-4 py-2 rounded-full text-sm font-medium">Sign In</a>
            <a href="{{ route('signup') }}" class="btn-primary px-4 py-2 rounded-full text-sm font-medium">Sign Up</a>
        </div>
    </nav>

    <div class="main-content flex items-center justify-center p-4">
        <div class="card w-full max-w-5xl overflow-hidden">
            <div class="flex flex-col md:flex-row min-h-[500px]">
                <!-- Left side with illustration -->
                <div class="w-full md:w-1/2 p-8 flex items-center justify-center" style="background-color: var(--color-tertiary);">
                    <div>
                        <div class="flex items-center mb-8">
                            <div class="flex items-center text-accent font-bold text-xl" style="color: var(--color-accent);">
                                <img src="{{ asset('images/kanban-logo.svg') }}" alt="Kanban Logo" class="h-8 w-8 mr-2">
                                Kanban Board
                            </div>
                        </div>
                        <img src="{{ asset('images/login-bg.png') }}" alt="Kanban Illustration" class="w-full max-w-md h-auto">
                        <p class="text-gray-300 mt-6 text-center">Welcome back to your projects dashboard</p>
                    </div>
                </div>
                
                <!-- Right side with form -->
                <div class="w-full md:w-1/2 p-8" style="background-color: var(--color-secondary);">
                    <div class="mb-8">
                        <h2 class="text-2xl font-bold text-white mb-2">Welcome Back</h2>
                        <p class="text-gray-300">Sign in to continue to your dashboard</p>
                    </div>
                    
                    <!-- Sign In Form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-input w-full px-3 py-2 rounded-md"
                                placeholder="you@example.com"
                                required
                            >
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-input w-full px-3 py-2 rounded-md"
                                placeholder="Enter your password"
                                required
                            >
                        </div>
                        
                        <!-- Remember Me -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <input 
                                    type="checkbox" 
                                    id="remember_me" 
                                    name="remember" 
                                    class="h-4 w-4 text-accent border-gray-600 rounded focus:ring-accent" 
                                    style="accent-color: var(--color-accent);"
                                >
                                <label for="remember_me" class="ml-2 block text-sm text-gray-300">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="mb-6">
                            <button type="submit" class="w-full btn-primary py-2 px-4 rounded-md font-medium text-white">
                                Sign In
                            </button>
                        </div>
                        
                        <!-- Sign up link -->
                        <div class="text-center text-sm text-gray-300">
                            Don't have an account? 
                            <a href="{{ route('signup') }}" class="text-accent hover:underline" style="color: var(--color-accent);">Sign Up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="px-6 py-8 border-t border-gray-800 mt-auto">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col items-center justify-center">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/kanban-logo.svg') }}" alt="Kanban Logo" class="h-8 w-8 mr-2">
                    <h3 class="text-xl font-bold">Kanban</h3>
                </div>
                <p class="text-gray-400 text-sm">Task Management Made Simple</p>
            </div>
        </div>
    </footer>
</body>
</html>