<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">

    <link href="
    https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css
    " rel="stylesheet">
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    {{-- <link rel="stylesheet" href="{{ asset('css/theme.css') }}"> --}}
    <title>{{ $title ?? 'Page Title' }}</title>
    @livewireStyles
</head>

<body class="bg-neutral-100 dark:bg-neutral-800 ">
    <main>
        {{ $slot }}
    </main>
    @livewireScripts
    @stack('scripts')
    <script src="{{ asset('js/darkMode.js') }}"></script>
    <script data-navigate-once defer>
        document.addEventListener('livewire:navigated', function() {
            window.HSStaticMethods.autoInit();
        });
    </script>
</body>

</html>
