<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanban - Task Management Made Simple</title>
    <meta name="description" content="A powerful Kanban board for effective task management and team collaboration">
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

        .card {
            background-color: var(--color-tertiary);
            border-radius: 0.75rem;
        }

        .feature-card {
            background-color: var(--color-secondary);
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
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
            <a href="#" class="btn-outline px-4 py-2 rounded-full text-sm font-medium">Sign In</a>
            <a href="#" class="btn-primary px-4 py-2 rounded-full text-sm font-medium">Sign Up</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="px-6 py-16 md:py-24">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">Visualize Your Workflow with <span class="text-accent text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-indigo-500">Kanban</span></h1>
                    <p class="text-gray-300 text-lg mb-8">Streamline your projects, boost productivity, and collaborate seamlessly with our intuitive Kanban board system.</p>
                    <div class="flex flex-wrap space-x-4">
                        <a href="#" class="btn-primary px-8 py-3 rounded-lg text-white font-medium mb-4">Create Board</a>
                        <a href="#" class="btn-outline px-8 py-3 rounded-lg font-medium mb-4">Upgrade</a>
                    </div>
                </div>
                <div class="card p-6">
                    <img src="{{ asset('images/kanban-illustration.svg') }}" alt="Kanban Board Illustration" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="px-6 py-16 bg-opacity-30" style="background-color: var(--color-secondary);">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Our Kanban Board?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card p-6">
                    <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center mb-6" style="background-color: var(--color-accent);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Intuitive Task Management</h3>
                    <p class="text-gray-300">Create, organize, and prioritize tasks with our drag-and-drop interface. Visualize your workflow at a glance.</p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card p-6">
                    <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center mb-6" style="background-color: var(--color-accent);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Team Collaboration</h3>
                    <p class="text-gray-300">Share boards with your team, assign tasks, leave comments, and track progress all in one place.</p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card p-6">
                    <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center mb-6" style="background-color: var(--color-accent);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Secure Sharing</h3>
                    <p class="text-gray-300">Control access to your boards with our premium sharing features. Collaborate with confidence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-6 py-16">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Streamline Your Workflow?</h2>
            <p class="text-gray-300 text-lg mb-8">Get started with our Kanban board today and take control of your projects.</p>
            <a href="#" class="btn-primary px-8 py-3 rounded-lg text-white font-medium inline-block">Create Your First Board</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="px-6 py-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col items-center justify-center">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/kanban-logo.svg') }}" alt="Kanban Logo" class="h-8 w-8 mr-2">
                    <h3 class="text-xl font-bold">Kanban</h3>
                </div>
                <p class="text-gray-400 text-sm">Task Management Made Simple</p>
            </div>
            <!-- <div class="mt-6 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} Kanban. A student project.</p>
            </div> -->
        </div>
    </footer>
</body>

</html>