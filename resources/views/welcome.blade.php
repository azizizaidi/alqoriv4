<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center mb-2">i-ALQORI</h1>
    <h2 class="text-xl font-semibold text-center mb-6">Log masuk ke akaun anda</h2>

    <div class="mb-4">
        <label for="username" class="block text-sm font-medium mb-1">
            ID Pengguna<span class="text-red-500">*</span>
        </label>
        <input type="text" id="username" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="">
    </div>

    <div class="mb-4">
        <label for="password" class="block text-sm font-medium mb-1">
            Kata laluan<span class="text-red-500">*</span>
        </label>
        <div class="relative">
            <input type="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md" placeholder="">
            <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </button>
        </div>
    </div>

    <div class="flex items-center mb-4">
        <input type="checkbox" id="remember" class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
        <label for="remember" class="ml-2 block text-sm text-gray-900">Ingat saya</label>
    </div>

    <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-150 ease-in-out mb-6">
        Log masuk
    </button>

    <!-- Demo Login Credentials Box -->
    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 mb-4">
        <h3 class="text-lg font-semibold mb-3">Demo Login Credentials</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 text-sm">
            <!-- Admin Card -->
            <div class="bg-white p-3 rounded border-l-4 border-amber-500 shadow-sm">
                <div class="font-bold text-amber-800 flex items-center">
                    <span class="mr-1">👑</span> Admin
                </div>
                <div class="mt-1">
                    <div><span class="font-medium">ID:</span> <span class="font-mono text-xs">admin@alqori.com</span></div>
                    <div><span class="font-medium">Password:</span> <span class="font-mono text-xs">admin123</span></div>
                </div>
            </div>

            <!-- Teacher Card -->
            <div class="bg-white p-3 rounded border-l-4 border-green-500 shadow-sm">
                <div class="font-bold text-green-800 flex items-center">
                    <span class="mr-1">👨‍🏫</span> Guru
                </div>
                <div class="mt-1">
                    <div><span class="font-medium">ID:</span> <span class="font-mono text-xs">guru@alqori.com</span></div>
                    <div><span class="font-medium">Password:</span> <span class="font-mono text-xs">guru123</span></div>
                </div>
            </div>

            <!-- Student Card -->
            <div class="bg-white p-3 rounded border-l-4 border-blue-500 shadow-sm">
                <div class="font-bold text-blue-800 flex items-center">
                    <span class="mr-1">👨‍🎓</span> Pelajar
                </div>
                <div class="mt-1">
                    <div><span class="font-medium">ID:</span> <span class="font-mono text-xs">pelajar@alqori.com</span></div>
                    <div><span class="font-medium">Password:</span> <span class="font-mono text-xs">pelajar123</span></div>
                </div>
            </div>
        </div>

        <div class="mt-3 text-xs text-amber-700 flex items-center">
            <span class="mr-1">⚠️</span> Sila gunakan kredensial di atas untuk meneroka sistem i-ALQORI
        </div>
    </div>
</div>
