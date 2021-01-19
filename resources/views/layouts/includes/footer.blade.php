<footer class="px-10 bg-primary-900 h-full w-full mt-10">
             <div class="container mx-auto grid grid-cols-6 border-b border-primary-500 py-12">
                <div class="flex flex-col col-span-6 lg:col-span-2">
                    <img class="h-12 w-32" src="{{ Storage::url('img/logo-white.svg') }}" alt="">
                    <ul class="block text-gray-200 text-sm">
                        <li class="block py-2"><a class="hover:text-white" href=""><i class="fas fa-location-arrow mt-1 mr-2"></i>153 Williamson Plaza, Maggleberg</a></li>
                        <li class="block py-2"><a class="hover:text-white" href=""><i class="fas fa-phone-alt mt-1 mr-2"></i>+1 (062) 109-9222</a></li>
                    </ul>
                </div>
                <div class="flex flex-col col-span-6 md:col-span-3 lg:col-span-1">
                  <h2 class="text-white font-bold text-lg mt-3">Company</h2>
                  <ul class="block text-gray-200 text-sm mt-4">
                      <li class="block py-2"><a class="hover:text-white" href="">About</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Careers <span class="text-sm px-1 text-white bg-info-900 rounded-md ml-5">We`re hiring</span></a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Blog</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Customers</a></li>
                  </ul>
                </div>
                <div class="flex flex-col col-span-6 md:col-span-3 lg:col-span-1">
                  <h2 class="text-white font-bold text-lg mt-3">Features</h2>
                  <ul class="block text-gray-200 text-sm mt-4">
                      <li class="block py-2"><a class="hover:text-white" href="">Press</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Release notes</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Integrations</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Pricing</a></li>
                  </ul>
                </div>
                <div class="flex flex-col col-span-6 md:col-span-3 lg:col-span-1">
                  <h2 class="text-white font-bold text-lg mt-3">Documentation</h2>
                  <ul class="block text-gray-200 text-sm mt-4">
                      <li class="block py-2"><a class="hover:text-white" href="">Support</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Docs</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Status</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">API Reference</a></li>
                  </ul>
                </div>
                <div class="flex flex-col col-span-6 md:col-span-3 lg:col-span-1">
                  <h2 class="text-white font-bold text-lg mt-3">Resources</h2>
                  <ul class="block text-gray-200 text-sm mt-4">
                      <li class="block py-2"><a class="hover:text-white" href="">Help</a></li>
                      <li class="block py-2"><a class="hover:text-white" href="">Your Account</a></li>
                  </ul>
                </div>
             </div>
             <div class="container mx-auto py-6">  
                    <div class="flex ">
                    <nav class="flex text-gray-300 rounded font-sans w-full md:mt-3">
                        <ol class="list-reset flex">
                            <li><a href="#" class="font-base">Privacy & Policy</a></li>
                            <li><span class="mx-3">/</span></li>
                            <li><a href="#" class="font-base">Terms</a></li>
                            <li><span class="mx-3">/</span></li>
                            <li><a href="#" class="font-base">Site Map</a></li>
                        </ol>
                        </nav>
                        <ul class="flex items-center text-white space-x-2">
                            <li class="text-sm px-2 py-1 bg-primary-700 rounded-md"><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li class="text-sm px-2 py-1 bg-primary-700 rounded-md"><a href=""><i class="fab fa-google"></i></a></li>
                            <li class="text-sm px-2 py-1 bg-primary-700 rounded-md"><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li class="text-sm px-2 py-1 bg-primary-700 rounded-md"><a href=""><i class="fab fa-github"></i></a></li>
                            <li class="text-sm px-2 py-1 bg-primary-700 rounded-md">
                            <x-dropdown width="48" align="left">
                    <x-slot name="trigger">
                        <button class="flex w-36 text-sm font-medium text-white transition duration-150 ease-in-out">
                            <div class="flex"><img class="h-4 w-4 mr-2 ml-2" src="{{ Storage::url('img/us.svg') }}" alt=""> United States</div>
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
                </li>
                        </ul>
                    </div>
                    <div class="flex flex-col text-center text-gray-300 text-sm pt-12">
                         <h2 class="mb-4">© Front. 2020 Htmlstream. All rights reserved.</h2>
                         <p class="mx-4 md:mx-12 lg:mx-32 mb-6">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
                    </div>
              
             </div>
            </footer>