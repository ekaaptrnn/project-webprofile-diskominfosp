<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.front.styles')

        <title>Trezo - Tailwind CSS Admin Dashboard Template</title>

        @vite('resources/css/app.css')

    </head>
    <body>
        @include('partials.dashboard.sidebar')
        @include('partials.dashboard.header')

        <div class="main-content transition-all flex flex-col overflow-hidden min-h-screen" id="main-content">

            <!-- Breadcrumb -->
            <div class="mb-[25px] md:flex items-center justify-between">
                <h5 class="!mb-0">
                    Connect Wallet
                </h5>
                <ol class="breadcrumb mt-[12px] md:mt-0">
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        <a href="/dashboard" class="inline-block relative ltr:pl-[22px] rtl:pr-[22px] transition-all hover:text-primary-500">
                            <i class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 !text-lg -mt-px text-primary-500 top-1/2 -translate-y-1/2">
                                home
                            </i>
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        NFT
                    </li>
                    <li class="breadcrumb-item inline-block relative text-sm mx-[11px] ltr:first:ml-0 rtl:first:mr-0 ltr:last:mr-0 rtl:last:ml-0">
                        Connect Wallet
                    </li>
                </ol>
            </div>

            <!-- Connect Wallet -->
            <div class="grid grid-cols-1 sm:grid-cols-2 2xl:grid-cols-3 gap-[25px] mb-[25px]">
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] text-center rounded-md">
                    <div class="trezo-card-content md:py-[13px]">
                        <img src="/assets/images/wallet/metamask.svg" class="inline-block" alt="metamask">
                        <h3 class="!text-lg !mb-[12px] mt-[18px]">
                            Metamask
                        </h3>
                        <p class="text-gray-400 mx-auto md:max-w-[285px] !leading-[1.6] !mb-[20px]">
                            MetaMask is a software cryptocurrency wallet used to interact with the Ethereum blockchain.
                        </p>
                        <button class="text-[15px] md:text-md rounded-[7px] bg-primary-500 text-white font-medium py-[6px] px-[40px] transition-all hover:bg-primary-400 inline-block" style="padding: 6px 40px;">
                            Connect
                        </button>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] text-center rounded-md">
                    <div class="trezo-card-content md:py-[13px]">
                        <img src="/assets/images/wallet/binance.svg" class="inline-block" alt="binance">
                        <h3 class="!text-lg !mb-[12px] mt-[18px]">
                            Binance
                        </h3>
                        <p class="text-gray-400 mx-auto md:max-w-[285px] !leading-[1.6] !mb-[20px]">
                            Binance offers a relatively secure, versatile way to invest in and trade cryptocurrencies.
                        </p>
                        <button class="text-[15px] md:text-md rounded-[7px] bg-primary-500 text-white font-medium py-[6px] px-[40px] transition-all hover:bg-primary-400 inline-block" style="padding: 6px 40px;">
                            Connect
                        </button>
                    </div>
                </div>
                <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] text-center rounded-md">
                    <div class="trezo-card-content md:py-[13px]">
                        <img src="/assets/images/wallet/coinbase.svg" class="inline-block" alt="coinbase">
                        <h3 class="!text-lg !mb-[12px] mt-[18px]">
                            Coinbase
                        </h3>
                        <p class="text-gray-400 mx-auto md:max-w-[285px] !leading-[1.6] !mb-[20px]">
                            Coinbase Wallet is a software product that gives you access to a wide spectrum.
                        </p>
                        <button class="text-[15px] md:text-md rounded-[7px] bg-primary-500 text-white font-medium py-[6px] px-[40px] transition-all hover:bg-primary-400 inline-block" style="padding: 6px 40px;">
                            Connect
                        </button>
                    </div>
                </div>
            </div>

            <div class="grow"></div>
            @include('partials.dashboard.footer')
        </div>

        @include('partials.front.scripts')
    </body>
</html>
