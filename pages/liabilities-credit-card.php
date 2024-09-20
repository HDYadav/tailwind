<!DOCTYPE html>
<html>    
<link rel="stylesheet" href="../styles.css">
<script src="https://cdn.tailwindcss.com"></script>
<script  src="../js/includehtml.js"></script>

<script src="../js/tailwindconfig.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body>
<!-- <div class="text-center mt-8">
    <h1>Chart of Account</h1>
</div> -->

<div class="flex">
        <div class="w-14per fixed">
             <?php  include('sidebar.php'); ?>
        </div> 



    <div class="maincontent w-full">
        <section class="pghead grow-0  py-5 row">
            <div class="flex justify-end divide-x-2 divide-opacity-50" flex-row divide-B9B9B9>
            <button type=" button" title="settings" aria-label="Settings" alt="settings" href="#" class="px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#1D4469" class="w-6 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </button>

            <button type="button" title="notifications" aria-label="notification" alt="notification" href="#" class="px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#1D4469" class="w-6 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
            </button>


            <button type="button" title="faq" aria-label="faq" alt="faq" href="#" class="px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#1D4469" class="w-6 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                </svg>
            </button>
            
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex px-3 py-1 items-center text-sm pe-1 font-medium text-1D5D9B    md:me-0 " type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 me-2 " src="../images/profile.webp" alt="user photo">
                Hari Yadav
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="#1D4469" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>

                <!-- Dropdown menu -->
            <div id="dropdownAvatarName"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div class="font-medium ">Pro User</div>
                    <div class="truncate">name@flowbite.com</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                    aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                        out</a>
                </div>
            </div>
                <!-- </div> -->
        </section>




    <div class="bg-F1F6F9 ">
        <div class="">
            <h5 class="bg-White  font-Vietnam text-2xl font-medium  p-4 pl-20">Chart Of Accountants</h5>
            <div class="flex p-4 justify-between text-2C495D font-poppins text-base font-normal">
                <div class="flex p-4 gap-x-20">
                    <p class="ps-20 ">Bank Transaction</p>
                    <p>App Transaction</p>
                    <p>Reciepts</p>
                    <p>Reconcil</p>
                    <p>Rules</p>
                    <p>Chart of Accountant</p>
                </div>
                <div class="box-content flex flex-col justify-center w-[150px] h-[50px] gap-[16px] border-[1.5px] mr-16 border-solid bg-white border-BECBD3 ">
                    <button class="text-center text-6C94A1 text-base">Generate</button>
                </div>
            </div>
        </div>
    </div>
        

    <section class="p-5 font-poppins">
        <div id="#default-modal" tabindex="-1" aria-hidden="true" class="overflow-y-auto overflow-x-hidden relative z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-xl max-h-full">
                <div class="relative bg-white rounded-lg shadow">
                    <div class="p-4">
                        <div class="flex items-center justify-between p-4 md:p-3 border-b border-BECBD3 rounded-t">
                            <h3 class="text-2xl text-2C495D">New Account</h3>
                            <button type="button" class="text-454545 bg-transparent hover:bg-F1F5F8 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-3 md:px-0">
                            <form class="max-w-xl">
                                <label for="accno" class="block mb-2 text-sm text-434852">Save Account Under *</label>
                                <select id="accno" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </form>
                        </div>
                        <div class="p-3 md:px-0">
                            <form class="max-w-xl">
                                <label for="tax" class="block mb-2 text-sm text-434852">Tax From Section *</label>
                                <select id="tax" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5">
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </form>
                        </div>
                        <div class="flex flex-row px-0">
                            <div class="basis-3/5 mb-3 pe-3">
                                <label for="base-input" class="block mb-2 text-sm text-434852">Account Name</label>
                                <input type="text" id="base-input" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5">
                            </div>
                            <div class="basis-2/5 mb-3">
                                <label for="base-input" class="block mb-2 text-sm text-434852">Account Number</label>
                                <input type="text" id="base-input" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5">
                            </div>
                        </div>
                        <div class="grid px-0 pb-3">
                            <form class="max-w-xl">
                                <label for="message" class="block mb-2 text-sm text-434852">Description</label>
                                <textarea id="message" rows="4" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5"></textarea>
                            </form>
                        </div>
                    </div>
                    <div class="flex justify-end p-4 modal-footer text-md">
                        <button data-modal-hide="default-modal" type="button" class="w-28 text-535252 bg-F4F4F4 hover:bg-eeeeee cancel-btn focus:ring-4 focus:ring-blue-300 font-medium px-5 py-2.5 text-center">CANCEL</button>
                        <button data-modal-hide="default-modal" type="button" class="w-28 text-white bg-1D4469 hover:bg-20486F save-btn font-medium text-gray-900 border border-gray-200 py-2.5 px-5 ms-3">SAVE</button>
                    </div>
                </div>
            </div>
        </div>
    </section>




        <!-- <div class="box-content flex flex-col justify-center w-[150px] h-[50px] gap-[16px] border-[1.5px] mr-16 border-solid bg-white border-BECBD3 ">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-center text-6C94A1 text-base">Generate</button>
        </div> -->
    <!-- <div class="bg-F1F6F9 w-86per">
        <div class=" pt-24">
            <h5 class="bg-White  font-Vietnam text-2xl font-medium  p-4 pl-20">Chart Of Accountants</h5>
            
            <div class="flex p-4 justify-between text-2C495D font-poppins text-base font-normal">
                <nav class="flex items-center justify-between px-4 py-2 flex p-4 gap-x-20 ps-20">
                    <a href="#" class="px-4  py-2 hover:bg-gray-300 rounded">Bank Transaction</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">App Transaction</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Receipts</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Reconcile</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Rules</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Chart of Accounts</a>
                </nav>                                   

                <div class="box-content  flex flex-col  w-[150px] h-[50px] gap-[16px] border-[1.5px] mr-16 border-solid bg-white border-BECBD3">
                    <button class="text-center text-6C94A1 text-base text-6C94A1  mt-1 p-2"><a href="/pages/genearate.html">Generate</a></button>
                </div>
            </div>
        </div>



    </div> -->


<!-- <div rakesh-html=""></div>  -->

<script>
includeHTML();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>
