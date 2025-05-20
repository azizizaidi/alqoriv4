<div>
    <div class="bg-pink-50 border border-pink-300 text-pink-800 px-6 py-4 rounded-lg shadow-md relative" role="alert">
        <h2 class="font-bold text-xl mb-3 border-b border-pink-200 pb-2">Demo Login Credentials</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Admin Login -->
            <div class="bg-white p-4 rounded-md shadow hover:shadow-lg transition-all duration-200 transform hover:-translate-y-1 border-l-4 border-blue-600">
                <h3 class="text-blue-800 font-bold text-lg mb-2">👑 Admin</h3>
                <div class="space-y-2">
                    <p><span class="font-medium">ID:</span> <code class="bg-gray-100 px-2 py-1 rounded select-all font-mono">admin@alqori.com</code></p>
                    <p><span class="font-medium">Password:</span> <code class="bg-gray-100 px-2 py-1 rounded select-all font-mono">admin123</code></p>
                </div>
            </div>

            <!-- Teacher Login -->
            <div class="bg-white p-4 rounded-md shadow hover:shadow-lg transition-all duration-200 transform hover:-translate-y-1 border-l-4 border-green-600">
                <h3 class="text-green-800 font-bold text-lg mb-2">🧑‍🏫 Guru</h3>
                <div class="space-y-2">
                    <p><span class="font-medium">ID:</span> <code class="bg-gray-100 px-2 py-1 rounded select-all font-mono">guru@alqori.com</code></p>
                    <p><span class="font-medium">Password:</span> <code class="bg-gray-100 px-2 py-1 rounded select-all font-mono">guru123</code></p>
                </div>
            </div>

            <!-- Student Login -->
            <div class="bg-white p-4 rounded-md shadow hover:shadow-lg transition-all duration-200 transform hover:-translate-y-1 border-l-4 border-yellow-600">
                <h3 class="text-yellow-800 font-bold text-lg mb-2">👨‍🎓 Pelajar</h3>
                <div class="space-y-2">
                    <p><span class="font-medium">ID:</span> <code class="bg-gray-100 px-2 py-1 rounded select-all font-mono">pelajar@alqori.com</code></p>
                    <p><span class="font-medium">Password:</span> <code class="bg-gray-100 px-2 py-1 rounded select-all font-mono">pelajar123</code></p>
                </div>
            </div>
        </div>

        <div class="mt-4 pt-2 border-t border-pink-200 text-sm text-pink-700">
            <p class="flex items-center"><span class="mr-2">⚠️</span> Sila gunakan kredensial di atas untuk meneroka sistem i-ALQORI</p>
        </div>
    </div>

    <style>
        @media screen and (min-width: 1024px) {
            main {
                position: relative;
            }

            main:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: darkred;
                border-radius: 0.75rem;
                z-index: -9;
                transform: rotate(7deg);
            }

            .fi-logo {
                font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
                font-size: 2rem;
                font-weight: bold;
            }
        }

        /* Animation for cards - can't be done with standard Tailwind */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(0.625rem); }
            to { opacity: 1; transform: translateY(0); }
        }

        .grid > div:nth-child(1) { animation: fadeIn 0.5s ease-out forwards; animation-delay: 0.1s; }
        .grid > div:nth-child(2) { animation: fadeIn 0.5s ease-out forwards; animation-delay: 0.3s; }
        .grid > div:nth-child(3) { animation: fadeIn 0.5s ease-out forwards; animation-delay: 0.5s; }
    </style>
</div>
