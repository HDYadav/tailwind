<?php  include('head.php'); ?>



<!-- <div rakesh-html="sidebar.php" class="w-14per fixed"></div>  -->

        <?php  include('navbar.php'); ?>

        <?php  include('sidebar.php'); ?>





<main class="p-4 sm:ml-64">
   <div class="p-4 mt-14">
   
   

        <div class="flex flex-col bg-white p-4">
            <div class="flex justify-between items-center">
                <h5 class="text-203C50 font-Vietnam text-32 font-medium " >Client List</h5>
                <div class="flex items-center">
                    <!-- <button class="bg-1D4469 rounded-sm text-white rounded p-2" data-modal-target="addclient-modal" data-modal-toggle="addclient-modal" type="button">
                        + Add Client
                    </button> -->
                    <a href="newCustomer.php" class="bg-1D4469 rounded-sm text-white rounded p-2"  type="button">
                       + Add Client
                    </a>
                    <!-- <button >
                    </button> -->

                    <i class="bi bi-three-dots-vertical text-2xl text-535252"></i>
                    <!-- <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 mr-12 text-sm font-medium text-center text-gray-900 bg-white rounded-lg " type="button">
                        <svg class="w-5 h-5 pt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                    </button> -->
                </div>
            </div>
        </div>

     




        



        <div class="mb-4 border-gray-200 ">
            <ul class="flex flex-wrap -mb-px text-md font-poppins text-base font-normal text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-2C495D hover:text-2C495D border-b" data-tabs-inactive-classes="border-transparent text-2C495D hover:text-gray-600 hover:border-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-2C495D rounded-t-lg hover:text-gray-600 hover:border-gray-300" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Active Client </button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-2C495D rounded-t-lg hover:text-gray-600 hover:border-gray-300 " id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Business</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-2C495D rounded-t-lg hover:text-gray-600 hover:border-gray-300 " id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Individual</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-2C495D rounded-t-lg hover:text-gray-600 hover:border-gray-300 " id="contacts-styled-tab" data-tabs-target="#styled-contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Prospect</button>
                </li>
            </ul>
        </div>
            <div id="default-styled-tab-content">
                <div class="hidden" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <table class="bg-white min-w-full border border-neutral-200 text-center text-sm  text-surface text-2C495D font-poppins  ">
                                        <thead class="border-neutral-200 border ">
                                            <tr >
                                                <th scope="col" class="font-normal px-6 py-3 text-left border">
                                                    <div class="flex justify-between">
                                                        customer name
                                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                                        </svg></a>
                                                </th>
                                                <th scope="col" class="font-normal px-6 py-3 text-left border">
                                                    <div class="flex justify-between">
                                                       customer display name
                                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                                        </svg></a>
                                                </th>
                                                <th scope="col" class="font-normal px-6 py-3 text-left border">
                                                    <div class="flex justify-between">
                                                        currency
                                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                                        </svg></a>
                                                </th>
                                                <th scope="col" class="font-normal px-6 py-3 text-left border">
                                                    <div class="flex justify-between">
                                                        status
                                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                                        </svg></a>
                                                </th>
                                                <th scope="col" class="font-normal px-6 py-3 text-left border">
                                                    <div class="flex justify-between">
                                                        industry
                                                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                                        </svg></a>
                                                </th>
                                           
                                               
                                              
                                            </tr>
                                        <tbody class="border">
                                            <tr class="border border-neutral-200 ">
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 text-2999BC px-6 py-2 font-medium text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                            </tr>
                                            <tr class="border border-neutral-200 ">
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                            </tr>
                                            <tr class="border border-neutral-200 ">
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                            </tr>
                                            <tr class="border border-neutral-200 ">
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                            </tr>
                                            <tr class="border border-neutral-200 ">
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                                <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                            </tr>
                                        </tbody>
                                    </table> 

                             
                                    
                </div>
                <div class="hidden p-4 rounded-lg" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                </div>
                <div class="hidden p-4 rounded-lg" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                </div>
                <div class="hidden p-4 rounded-lg" id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
                </div>
            </div>


   </div>
</main>


<?php  include('script.php'); ?>



<?php  include('footer.php'); ?>
