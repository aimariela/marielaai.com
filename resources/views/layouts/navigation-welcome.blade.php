<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mariela AI</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="icon" href="public/favicon-16x16.png" type="image/x-icon">

    @fluxAppearance

  </head>

	<body>

    <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">

    <flux:navbar class="-mb-px">

        @if (Route::has('login'))
                @auth
        <flux:navbar.item icon="home" href="{{ url('/dashboard') }}" current>Dashboard</flux:navbar.item>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif

        <flux:separator vertical variant="subtle" class="my-2"/>
        <flux:spacer />
        
        <flux:navbar class="me-4">
            <flux:navbar.item icon="magnifying-glass" href="#" label="Search" />
        </flux:navbar>

        <flux:dropdown class="max-lg:hidden">
            <flux:navbar.item icon:trailing="chevron-down">Favorites</flux:navbar.item>

            <flux:navmenu>
                <flux:navmenu.item href="https://shop.marielaai.com">SHOP</flux:navmenu.item>
                <flux:navmenu.item href="{{ route('assistant') }}">Assitant AI</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    </flux:navbar>

</flux:header>
<div class="container">
@yield('content')
</div>
@fluxScripts
	</body>
</html>
