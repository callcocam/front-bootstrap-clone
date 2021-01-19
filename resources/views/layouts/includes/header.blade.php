<header class="bg-white shadow">
                <div class="flex max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8 justify-between items-center">
                <div>
                <x-dropdown width="48" align="left">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>United States</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link href="#">
                            English
                        </x-dropdown-link>
                        <x-dropdown-link href="#">
                            Deutsch
                        </x-dropdown-link>
                        <x-dropdown-link href="#">
                            Español‎
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex  space-x-2 mr-10">
                        <x-nav-link href="#">Help</x-nav-link>
                        <x-nav-link href="#">Contacts</x-nav-link>
                    </div>
                    <div class="flex">
                    <ul class="flex  space-x-2">
                        <li><x-nav-link href="#"><i class="fas fa-search"></i></x-nav-link></li>
                        <li><x-nav-link href="#"><i class="fas fa-shopping-cart"></i></x-nav-link></li>
                        <li><x-nav-link href="#"><i class="fas fa-user-circle"></i></x-nav-link></li>
                    </ul>
                    </div>
                </div>
                </div>
            </header>