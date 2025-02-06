<!DOCTYPE html>
<html lang="en" data-theme="nord">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Admin Dashboard</title>
</head>

<body class="bg-base-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    <x-admin-header></x-admin-header>

    <div class="drawer lg:drawer-open flex-grow">
        <!-- Drawer Toggle -->
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />

        <!-- Drawer Content -->
        <div class="drawer-content flex flex-col">
            <!-- Main Content -->
            <main class="p-6 flex-grow">
                {{ $slot }}
            </main>
        </div>

        <!-- Sidebar Content -->
        <div class="drawer-side" x-data="{ active: window.location.pathname }">
            <label for="my-drawer-3" class="drawer-overlay"></label>
            <ul class="menu bg-base-200 min-h-full w-64 p-4">
                <!-- Sidebar Menu -->
                <li :class="active === '/admin' ? 'bg-primary text-white' : ''">
                    <a href="/admin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" color="currentColor">
                                <path d="M13.5 13L17 9m-3 6a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-8-3a6 6 0 0 1 9-5.197" />
                                <path
                                    d="M2.5 12c0-4.478 0-6.718 1.391-8.109S7.521 2.5 12 2.5c4.478 0 6.718 0 8.109 1.391S21.5 7.521 21.5 12c0 4.478 0 6.718-1.391 8.109S16.479 21.5 12 21.5c-4.478 0-6.718 0-8.109-1.391S2.5 16.479 2.5 12" />
                            </g>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li :class="active === '/medicines' ? 'bg-primary text-white' : ''">
                    <a href="/medicines">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="m11.287 8l-6.605 6.605a3.32 3.32 0 0 0-.975 2.271c-.029 1.11-.043 1.665-.127 1.861s-.276.389-.66.773l-.595.594a1.11 1.11 0 0 0 1.571 1.57l.594-.593c.385-.385.577-.577.773-.66c.196-.085.751-.1 1.861-.128a3.32 3.32 0 0 0 2.27-.975l1.929-1.928m3.106-3.106L16 12.713m-1.57 1.57l-1.572-1.57m1.571 1.57l-3.106 3.107m0 0l-1.571-1.57m11.316-8.388L19.5 9a2.12 2.12 0 0 0 0 3L12 4.5a2.12 2.12 0 0 0 3 0l1.568-1.568a3.182 3.182 0 1 1 4.5 4.5" />
                        </svg>
                        Obat-Obat
                    </a>
                </li>
                <li :class="active === '/prescriptions' ? 'bg-primary text-white' : ''">
                    <a href="/prescriptions">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" color="currentColor">
                                <path
                                    d="M20.5 16.929V10c0-3.771 0-5.657-1.172-6.828S16.271 2 12.5 2h-1C7.729 2 5.843 2 4.672 3.172S3.5 6.229 3.5 10v9.5" />
                                <path d="M20.5 17H6a2.5 2.5 0 0 0 0 5h14.5" />
                                <path d="M20.5 22a2.5 2.5 0 0 1 0-5M15 7H9m3 4H9" />
                            </g>
                        </svg>
                        Resep
                    </a>
                </li>
                <li :class="active === '/sales_reports' ? 'bg-primary text-white' : ''">
                    <a href="/sales_reports">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" color="currentColor">
                                <path
                                    d="M3 11c0-3.75 0-5.625.955-6.939A5 5 0 0 1 5.06 2.955C6.375 2 8.251 2 12 2s5.625 0 6.939.955a5 5 0 0 1 1.106 1.106C21 5.375 21 7.251 21 11v2c0 3.75 0 5.625-.955 6.939a5 5 0 0 1-1.106 1.106C17.625 22 15.749 22 12 22s-5.625 0-6.939-.955a5 5 0 0 1-1.106-1.106C3 18.625 3 16.749 3 13z" />
                                <path
                                    d="m15 13l-.857-2M9 13l.857-2m0 0l1.55-3.618A.64.64 0 0 1 12 7c.26 0 .493.15.592.382L14.142 11m-4.285 0h4.286M8 17h8" />
                            </g>
                        </svg>
                        Laporan Penjualan
                    </a>
                </li>
                <br>
                <li :class="active === '/logout' ? 'bg-primary text-white' : ''">
                    <a href="/logout" class=" text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" color="currentColor">
                                <path
                                    d="M2.5 12c0-4.478 0-6.718 1.391-8.109S7.521 2.5 12 2.5c4.478 0 6.718 0 8.109 1.391S21.5 7.521 21.5 12c0 4.478 0 6.718-1.391 8.109S16.479 21.5 12 21.5c-4.478 0-6.718 0-8.109-1.391S2.5 16.479 2.5 12" />
                                <path
                                    d="M7.037 12.028h6.976m0 0c0 .57-2.155 2.487-2.155 2.487m2.155-2.487c0-.586-2.155-2.465-2.155-2.465m5.18-1.568v8" />
                            </g>
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <footer class="bg-base-300 p-4">
        <p class="text-center">© 2025 Admin Dashboard. All rights reserved.</p>
    </footer>
</body>

</html>
