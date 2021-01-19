<x-account-layout>
        <x-profile.card>
           <x-slot name="header">           
            <h1 class="py-3 px-5 font-bold">Basic info</h1>
           </x-slot>
           <div class="block  mx-5 mb-6 md:flex md:justify-start py-3">
         <div class="md:w-56 mb-4 ml-6">
               <label>Profile photo</label>
         </div>
         <div class="flex md:justify-center ml-6 items-center">
           <div class="h-24 w-24 mr-5">
            <img class="rounded-full h-full w-full" src="{{ Storage::url('img/img1.jpg') }}" alt="Profile Photo">
           </div>
           <div>
           <button class="rounded-md text-white py-2 px-3 boder boder-info-900 bg-info-900">Upload photo</button>
           <button class="rounded-md py-2 px-3 border border-gray-300">Remove</button></div>
         </div>
       </div>
        <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
            <label class="w-full md:w-56 ml-6">Full name</label>
            <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3" value="Natalie">
            <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3 mt-2 md:mt-0 md:ml-2" value="Curtis">
        </div>
        <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
            <label class="md:w-56 ml-6">E-Mail Address</label>
            <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3" value="natalie@example.com">
        </div>
        <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
            <label class="md:w-56 ml-6">Phone <span class="text-gray-500 text-sm">(Opcional)</span></label>
            <div class="w-full relative flex-1">
              <input type="text" class="w-full rounded-md border-gray-200 py-3" value="+1(605)561-89-29">
            <div class="absolute inset-y-0 right-0 flex items-center">
            <select id="currency" name="currency" class="focus:outline-none h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                <option>Mobile</option>
                <option>Home</option>
                <option>Work</option>
                <option>Fax</option>
                <option>Direct</option>
            </select>
            </div>
            </div>
        </div>
        <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
            <label class="md:w-56 ml-6">Genger</label>
           <label class="w-full flex-1 rounded-md border border-gray-200 px-3 py-3 cursor-pointer inline-flex items-center"><input type="radio" name="gender" class="form-radio mr-2" value="m"> <span class="inline-block">Male</span></label> 
           <label class="w-full flex-1 rounded-md border border-gray-200 px-3 py-3 cursor-pointer inline-flex items-center"><input type="radio" name="gender" class="form-radio mr-2" value="f" checked> <span class="inline-block">Female</span></label> 
           <label class="w-full flex-1 rounded-md border border-gray-200 px-3 py-3 cursor-pointer inline-flex items-center"><input type="radio" name="gender" class="form-radio mr-2" value="o"> <span class="inline-block">Other</span></label> 
        </div>
        <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
            <label class="md:w-56 ml-6">Disable ads <span class="bg-info-900 px-1 text-white rounded-md text-xs">PRO</span></label>
            <label class="w-full flex-1 px-3 py-3 cursor-pointer inline-flex items-center"><input type="checkbox" name="pro" class="form-checkbox mr-2" value="o"> <span class="inline-block">With your Pro account, you can disable ads across the site.</span></label> 
        </div>
            <x-slot name="footer">
            <button class="bg-info-900 text-white py-2 px-3 rounded-md">Save Changes</button>
           </x-slot>
       </x-profile.card>

       <x-profile.card>
           <x-slot name="header">
           <h1 class="py-3 px-5 font-bold">BIO</h1>
           </x-slot>
           <div class="block mb-6 px-5">
                <textarea class="block w-full flex-1 rounded-b-md border-gray-200 py-3" placeholder="BIO" name="description" id="description" rows="10"></textarea>
            </div>
            <x-slot name="footer">
            <button class="bg-info-900 text-white py-2 px-3 rounded-md">Save Changes</button>
           </x-slot>
       </x-profile.card>

       <x-profile.card>
           <x-slot name="header">
           <h1 class="py-3 px-5 font-bold">Address</h1>
           </x-slot>           
            <div class="block mb-6 mx-5 md:flex md:justify-start">
                <label class="md:w-56 md:ml-6 mt-5">Location</label>
                <div class="block w-full space-y-4">
                <x-select2 data="{ data: { au: 'Australia', be: 'Belgium', cn: 'China', fr: 'France', de: 'Germany', it: 'Italy', mx: 'Mexico', es: 'Spain', tr: 'Turkey', gb: 'United Kingdom', 'us': 'United States' }, emptyOptionsMessage: 'No countries match your search.', name: 'country', placeholder: 'Select a country' }" />
                <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3" value="London" placeholder="City">
                <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3" placeholder="State">
                </div>
            </div>
            <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
                <label class="md:w-56 md:ml-6">Address line 1</label>
                <div class="block w-full">
                  <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3" value="45 Roker Terrace, Latheronwheel" placeholder="Address line 1">
                </div>
            </div>
            <div class="block mb-6 mx-5 md:flex md:justify-start">
                <label class="md:w-56 md:ml-6">Address line 2 (Optional)</label>
                <div class="block w-full space-y-3">
                <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3" placeholder="Address line 2">
                </div>
            </div>
            <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
                <label class="md:w-56 md:ml-6">Zip code </label>
                <div class="block w-full">
                  <input type="text" class="w-full flex-1 rounded-md border-gray-200 py-3" value="KW5 8NW" placeholder="Zip code">
                </div>
            </div>
            <x-slot name="footer">
            <button class="bg-info-900 text-white py-2 px-3 rounded-md">Save Changes</button>
           </x-slot>
       </x-profile.card>

       
       <x-profile.card>
           <x-slot name="header">
           <h1 class="py-3 px-5 font-bold">Privacy</h1>
           </x-slot>
           <div class="block mb-6 mx-5 md:flex md:justify-start items-center">
                <label class="md:w-56 md:ml-6">Who can see your profile photo?</label>
                <div class="block w-full">
                    <select id="currency" name="currency" class="form-select w-full flex-1 rounded-md border-gray-200 py-3">
                        <option>
                            <span class="flex">
                            <i class="fas fa-globe-americas"></i>
                                <span class="flex flex-col">
                                    <small>Anyone</small> 
                                    <small>Visible to anyone who can view your content. Accessible by installed apps.</small>
                                </span>
                            </span>
                        </option>
                        <option>
                            <span class="block">
                            <i class="fas fa-user-lock"></i>
                                <span>
                                    <small>Only you</small> 
                                    <small>Only visible to you.</small>
                                </span>
                            </span>
                        </option>
                    </select>
                </div>
            </div>
            <x-slot name="footer">
            <button class="bg-info-900 text-white py-2 px-3 rounded-md">Save Changes</button>
           </x-slot>
       </x-profile.card>
       
       <x-profile.card>
           <x-slot name="header">
           <h1 class="py-3 px-5 font-bold">Delete your account</h1>
           </x-slot>
            <div class="block mb-6 mx-5 items-center">
                <p class="px-3">When you delete your account, you lose access to Front account services, and we permanently delete your personal data. You can cancel the deletion for 14 days.</p>
                <label class="w-full flex-1 px-3 py-3 cursor-pointer inline-flex items-center"><input type="checkbox" name="pro" class="form-checkbox mr-2" value="1"> <span class="inline-block">Confirm that I want to delete my account.</span></label> 
            </div>
            <x-slot name="footer">
            <button class="bg-danger-900 text-white py-2 px-3 rounded-md font-bold">Delete</button>
           </x-slot>
       </x-profile.card>
</x-account-layout>
