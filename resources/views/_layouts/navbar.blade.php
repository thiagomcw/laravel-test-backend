<navbar inline-template>
    <header class="bg-gray-800 shadow-lg">
        <nav class="container flex items-center justify-between flex-wrap bg-gray-800 p-6 mx-auto">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <a href="/" class="font-semibold text-xl tracking-tight">
                    Accordous
                </a>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-gray-400 border-gray-400 hover:text-white hover:border-white"
                        @click="mobileToggle">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto" :class="optionsClass">
                <div class="text-sm lg:flex-grow">
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4"
                       href="{{ route('web.properties.index') }}">
                        Propriedades
                    </a>
                    <a class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4"
                       href="{{ route('web.contracts.index') }}">
                        Contratos
                    </a>
                </div>
            </div>
        </nav>
    </header>
</navbar>