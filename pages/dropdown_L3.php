<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../styles.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="../js/includehtml.js"></script>

<script src="../js/tailwindconfig.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<body>
    <!-- <div class="text-center mt-8">
    <h1>Chart of Account</h1>
</div> -->

    <!-- <div class="flex bg-F1F6F9"> -->
<div class="flex">

        <div class="w-14per">
             <?php  include('sidebar.php'); ?>
         </div>


    <div class="maincontent w-full">


        <section class="pghead grow-0  py-5 row">
            <div class="flex justify-end divide-x-2 divide-opacity-50" flex-row divide-B9B9B9 ">
        
            <button type=" button" title="settings" aria-label="Settings" alt="settings" href="#" class="px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="#1D4469" class="w-6 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg></button>

                <button type="button" title="notifications" aria-label="notification" alt="notification" href="#"
                    class="px-2 py-1">
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



                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                    class="flex px-3 py-1 items-center text-sm pe-1 font-medium text-1D5D9B    md:me-0 " type="button">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 me-2 " src="../images/profile.webp" alt="user photo">
                    Hari Yadav
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="#1D4469" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
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
                <h5 class="bg-White  font-Vietnam text-32 font-medium  p-1 pl-20">Chart Of Account</h5>
                <!-- <div class="flex p-4 justify-between text-2C495D font-poppins text-base font-normal">

                    <div class="flex p-4 gap-x-20">
                        <p class="ps-20 ">Bank Transaction</p>
                        <p>App Transaction</p>
                        <p>Reciepts</p>
                        <p>Reconcil</p>
                        <p>Rules</p>
                        <p>Chart of Accountant</p>
                    </div>
               
                </div> -->

            
                

                <div class=" m-2 pl-16 ">
                    <ul class="flex flex-wrap -mb-px text-2C495D text-16 font-400 text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="" data-tabs-inactive-classes="" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block mt-4 ml-6 mb-2" id=">Bank-Transaction-styled-tab" data-tabs-target="#styled-Bank-Transaction" type="button" role="tab" aria-controls=">Bank-Transaction" aria-selected="false">Bank Transaction</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block mt-4 ml-6 mb-2" id="App-Transaction-styled-tab" data-tabs-target="#styled-App-Transaction" type="button" role="tab" aria-controls="App-Transaction" aria-selected="false">App Transaction</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block mt-4 ml-6 mb-2" id="Reciepts-styled-tab" data-tabs-target="#styled-Reciepts" type="button" role="tab" aria-controls="Reciepts" aria-selected="false">Reciepts</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block mt-4 ml-6 mb-2" id="Reconcil-styled-tab" data-tabs-target="#styled-Reconcil" type="button" role="tab" aria-controls="Reconcil" aria-selected="false">Reconcil</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block mt-4 ml-6 mb-2" id="Rules-styled-tab" data-tabs-target="#styled-Rules" type="button" role="tab" aria-controls="Rules" aria-selected="false">Rules</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block mt-4 ml-6 mb-2 border-b-2 border-b-solid border-2C495D " id="COA-styled-tab" data-tabs-target="#styled-COA" type="button" role="tab" aria-controls="COA" aria-selected="false">Chart of Accountant</button>
                        </li>
                    </ul>
                </div>
                <!-- <div id="default-styled-tab-content">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-Bank-Transaction" role="tabpanel" aria-labelledby="profile-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div> -->

            

                
            </div>
        </div>



                <div id="assets-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 m-4  bg-white border border-E5ECF0 font-poppins leading-relaxed antialiased">
                        
                        <div class="relative bg-white ">
                            
                        
                           
                                    <div class="relative bg-white font-poppins">
                                        <div class="p-4">
                                            <div class="flex items-center justify-between p-4 md:p-3 border-b border-BECBD3 rounded-t">
                                                <h3 class="text-2xl text-2C495D">New Account (L3)</h3>
                                                <button type="button" class="text-454545 bg-transparent hover:bg-F1F5F8 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="assets-modal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only" >Close modal</span>
                                                </button>
                                            </div>
                                            <div class="p-3 md:px-0">
                                                <form class="max-w-xl">
                                                    <label for="accno" class="block mb-2 text-sm text-434852">Save Account Under *</label>
                                                    <select id="accno" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5">
                                                        
                                                        <optgroup label="Asset" class="">
                                                            <option value="Cash and Bank">Cash and Bank</option>
                                                            <option value="Money in Tansite">Money in Tansite</option>
                                                            <option value="Expected Payment from Customer">Expected Payment from Customer</option>
                                                            <option value="Inventory">Inventory</option>
                                                            <option value="Property Plant and Equipment">Property Plant and Equipment</option>
                                                            <option value="Depreciation and Amortization">Depreciation and Amortization</option>
                                                            <option value="Vendor Prepayments and Vendor Credits">Vendor Prepayments and Vendor Credits</option>
                                                            <option value="Other Short-Term Asset">Other Short-Term Asset</option>
                                                            <option value="Other Long-Term Asset">Other Long-Term Asset</option>
                                                        </optgroup>
                                                        <optgroup label="Liabilities and Credit Card" class="">
                                                            <option value="">Credit Card</option>
                                                            <option>Loan and Line of Credit</option>
                                                            <option>Expected Payment to Vendor</option>
                                                            <option>Due fot Payroll</option>
                                                            <option>Due to You and Other Business Owners</option>
                                                            <option>Customer Prepayments and Customer Credits</option>
                                                            <option>Other Short-Term Liability</option>
                                                            <option>Other Long-Term Liability</option>
                                                        </optgroup>
                                                        <optgroup label="Income">
                                                            <option value="">Income</option>
                                                            <option>Discount</option>
                                                            <option>Other Income</option>
                                                        </optgroup>
                                                        <optgroup label="Expenses">
                                                            <option value="">Operating Expense</option>
                                                            <option>Cost of Goods Sold</option>
                                                            <option>Payment Processing Fee</option>
                                                            <option>Payroll Expense</option>
                                                        </optgroup>
                                                        <optgroup label="Equity">
                                                            <option value="">Business Owner Contribution and Drawing</option>
                                                            <option>Retained Earnings: Profit</option>
                                                        </optgroup>
                                                    </select>
                                               
                                            </div>
                                           
                                            <div class="flex flex-row px-0">
                                                <div class="basis-3/5 mb-3 pe-3">
                                                    <label for="base-input" class="block mb-2 text-sm text-434852">Account Name *</label>
                                                    <input type="text" id="base-input" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5">
                                                </div>
                                                <div class="basis-2/5 mb-3">
                                                    <label for="base-input" class="block mb-2 text-sm text-434852">Account Number *</label>
                                                    <input type="text" id="base-input" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5">
                                                </div>
                                            </div>
                                            <div class="grid px-0 pb-3">
                                                
                                                    <label for="message" class="block mb-2 text-sm text-434852">Description</label>
                                                    <textarea id="message" rows="4" class="bg-white border border-DFE2E5 text-gray-900 text-sm block w-full p-2.5"></textarea>
                                                </form>
                                            </div>

                                                <!-- This is for L3 level modal code. It will Active in L3 level -->
                                            <div class="flex flex-row w-full px-0">
                                                <div class="mb-3 pe-3 mr-2">
                                                    <label for="currency_input" class="block text-sm text-434852 mb-1 mt-2 ml-1">Currency</label>
                                                    <select name="" id="" class="bg-white border border-DFE2E5 text-gray-900 text-sm block p-2.5">
                                                        <option value="">USD ($)</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 pe-3 mr-2">
                                                    <label for="currency_input" class="block text-sm text-434852 mb-1 mt-2 ml-1">Balance as on Date</label>
                                                    <input type="date" id="currency" class="bg-white border border-DFE2E5 text-gray-900 text-sm block p-2.5">
                                                </div>
                                                <div class="mb-3 pe-3">
                                                    <label for="currency_input" class="block text-sm text-434852 mb-1 mt-2 ml-1">Amount</label>
                                                    <input type="number" id="currency" class="bg-white border border-DFE2E5 text-gray-900 text-sm block p-2.5">
                                                </div>
                                            </div>
                                                <!-- Here L3 level modal code End  -->


                                        </div>
                                        <div class="flex justify-end p-4 modal-footer text-md">
                                            <button data-modal-hide="assets-modal" type="button" class="w-28 text-535252 bg-F4F4F4 hover:bg-eeeeee cancel-btn focus:ring-4 focus:ring-blue-300 font-medium px-5 py-2.5 text-center">CANCEL</button>
                                            <button  type="button" class="w-28 text-white bg-1D4469 hover:bg-20486F save-btn font-medium text-gray-900 border border-gray-200 py-2.5 px-5 ms-3">SAVE</button>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>

        <section>

        <div class="flex">
            <div class="flex bg-white py-3 w-1/2  px-5 ms-20">
                <button type="button" class="px-5">All</button>
                <button type="button" class="px-5 text-F16136">Assets</button>
                <button type="button" class="px-5">Liabilities Credit Card</button>
                <button type="button" class="px-5">Income</button>
                <button type="button" class="px-5">Expenses</button>
                <button type="button" class="px-5">Equity</button>
                <button type="button" class="px-5">Archive</button>
            </div>
                    <div class="box-content flex flex-col justify-center w-14 h-[50px] border-1 border-solid bg-white border-BECBD3 ml-4">
                        <button data-modal-target="assets-modal" data-modal-toggle="assets-modal" class="text-center text-288FB2 text-32" type="button">+</button>
                    </div>
                    
                    
        </div>
        </section>

        

        <section>
            <div class="mx-20">
                <div class=" bg-white mt-6">
                    <div>
                        
                                <div id="accordion-collapse" data-accordion="collapse" data-active-classes="bg-F1F6F9 border border-DFE2E5 text-545F65" data-inactive-classes="border border-1 border-solid border-545F65">
                                <h2 id="accordion-collapse-heading-1">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-400 text-20  text-545F65 rtl:text-right border border-b-0  gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                                    <span>Assets</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">  
                                    <div class="p-5 border border-b-0 border-gray-200 ">
                                    <table class="min-w-full  border-neutral-200 text-center text-sm font-light text-surface">
                                            <thead class="border-neutral-200 font-medium">
                                                <tr class="">
                                                    <th scope="col" class=" py-4 "></th>
                                                    <th scope="col" class="bg-E6ECF1 px-6 py-4 text-2C495D text-left font-normal text-base">Code</th>
                                                    <th scope="col" class="bg-E6ECF1 px-6 py-4 text-2C495D text-left font-normal text-base">Name</th>
                                                    <th scope="col" class="bg-E6ECF1 px-6 py-4 text-2C495D text-left font-normal text-base">Detail Type </th>
                                                    <th scope="col" class="bg-E6ECF1 px-6 py-4 text-2C495D text-left font-normal text-base">Balance </th>
                                                    <th scope="col" class="px-6 bg-E6ECF1 py-4 text-2C495D text-center w-1/12 font-normal text-base">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal text-left border-0"></td>
                                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">02000</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-medium text-left">Cash and Bank </td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-b border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal text-left border-0"></td>
                                                    <td class="whitespace-nowrap border-s border-neutral-200 px-14 py-2 font-normal text-left">02000</td>
                                                    <td class="whitespace-nowrap border-neutral-200 px-14 py-2 text-2C495D font-medium text-left">Cash and Bank </td>
                                                    <td class="whitespace-nowrap border-neutral-200 px-14 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-neutral-200 px-14 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal text-left border-0"></td>
                                                    <td class="whitespace-nowrap border-s border-neutral-200 px-14 py-2 font-normal text-left">02000</td>
                                                    <td class="whitespace-nowrap border-neutral-200 px-14 py-2 text-2C495D font-medium text-left">Cash and Bank </td>
                                                    <td class="whitespace-nowrap border-neutral-200 px-14 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-neutral-200 px-14 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal text-left border-0"></td>
                                                    <td class="whitespace-nowrap border-b border-s border-neutral-200 px-14 py-2 font-normal text-left">02000</td>
                                                    <td class="whitespace-nowrap border-b border-neutral-200 px-14 py-2 text-2C495D font-medium text-left">Cash and Bank </td>
                                                    <td class="whitespace-nowrap border-b border-neutral-200 px-14 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-b border-neutral-200 px-14 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-b border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal text-left "></td>
                                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">02100</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-medium text-left">Money in Transit </td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-b border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal justify-end flex pe-1"></td>
                                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">02200</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-medium text-left">Expected Payments from Customers</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-b border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap  py-2 font-normal justify-end flex pe-1"></td>
                                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">02300 
                                                    </td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-medium text-left">Inventory</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-b border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal text-left"></td>
                                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">02400</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-medium text-left">Property, Plant, Equipment</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-b border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                                <tr class=" border-neutral-200 ">
                                                    <td class="whitespace-nowrap   py-2 font-normal text-left"></td>
                                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">02500</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-medium text-left">Depreciation and Amortization</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">Table Body</td>
                                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 font-normal text-left">$ 00.00</td>
                                                    <td class="whitespace-nowrap border-b border-e px-6 py-2 font-normal justify-between flex"><button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg>
                                                    </button>
                                                    <button>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F16136" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg>
                                                    </button>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-400 text-20  text-545F65 rtl:text-right  border border-b-0 b  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                    <span>Liabilities Credit Card</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <!-- <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p> -->
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-400 text-20  text-545F65 rtl:text-right  border border-b-0 b  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                    <span>Income</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <!-- <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p> -->
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-2">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-400 text-20  text-545F65 rtl:text-right  border border-b-0 b  gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                    <span>Expenses</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <!-- <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                                    <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p> -->
                                    </div>
                                </div>
                                <h2 id="accordion-collapse-heading-3">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-400 text-20  text-545F65 rtl:text-right  focus:ring-none focus:ring-none dark:focus:ring-none dark:border-none dark:text-none hover:bg-none dark:hover:bg-none gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                    <span>Equity</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                    </button>
                                </h2>
                                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                                    <!-- <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700"> -->
                                    <!-- <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p> -->
                                    
                                    </div>
                                </div>
                                </div>

                    </div>
                </div>
            </div>
        </section>

    </div>



</div>



    <!-- </div> -->

    <!-- <section>
        <div class="  bg-white">
            <div class="font-semibold text-3xl  shadow-2xl   ">Chart of Accountants</div>
        </div>
    </div>

</section> -->

    <!-- <div rakesh-html=""></div>  -->

    <script>
        includeHTML();
    </script>

    <script>
        function toggleTable() {
            var tableContainer = document.getElementById("tableContainer");
            tableContainer.classList.toggle("hidden");
        }
    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>