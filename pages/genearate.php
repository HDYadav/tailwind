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

<?php  include('navbar.php'); ?>

<div class="flex">
    <div class="w-14per">
             <?php  include('sidebar.php'); ?>
    </div> 

    <div class="bg-F1F6F9 w-full">

    

<!-- Modal toggle -->



<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 m-4 w-2/5 min-w-[40%] max-w-[40%] bg-white border border-E5ECF0 font-poppins leading-relaxed antialiased">
        <!-- Modal content -->
        <div class="relative bg-white ">
            <!-- Modal header -->
            <form class="py-4 space-x-6">
                
                <div class="flex justify-between">
                
                    <label class="block">
                        <input type="file" class="block w-full text-md text-slate-500 border border-BFBFBF
                        file:mr-4 file:py-2 file:px-4
                        file:border-0
                        file:text-sm 
                        file:bg-EFEFEF file:text-535252
                        hover:file:bg-violet-100
                        "/>
                    </label>
                    <!-- hover:bg-blue-700 -->
                    <button class="bg-F4F4F4 hover:bg-1D4469 hover:text-white text-1D4469 border-2 border-DCDCDC text-xl py-1 px-8">
                        Import
                    </button>
                </div>
            
            

            </form>


               
            <div class="text-xl py-3 border-t border-t-E6EFF3">Select Industry </div>
            
            <div class="pb-4 flex flex-wrap gap-6 justify-center text-center text-xl text-1D4469">
                <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Real Estate</div></a>
                <!-- ... -->
                 <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Manufacturing</div></a>
                 <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Restaurants</div></a>
                 <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Construction</div></a>
                 <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Healthcare and Medical</div></a>
                 <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">E commerce</div></a>
                 <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Legal and Law</div></a>
                 <a href="tableDropdown.php"><div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Non-Profit Organizations</div></a>
            
            
            
            </div>
        </div>
    </div>
</div>



<!-- Modal toggle -->
<!-- <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button> -->
<!-- <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">

    </div>
</div> -->



        <div class=" pt-24">
            <h5 class="bg-White  font-Vietnam text-2xl font-medium  p-4  pl-20">Chart Of Accountants</h5>
            <div class="flex p-4 pb-0 justify-between text-2C495D font-poppins text-base font-normal">

                <nav class="flex items-center justify-between px-4 py-2 flex p-4 gap-x-20 ps-20">
                    <a href="#" class="px-4  py-2 hover:bg-gray-300 rounded">Bank Transaction</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">App Transaction</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Receipts</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Reconcile</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Rules</a>
                    <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Chart of Accounts</a>
                </nav>                                   
                

                <div class="box-content  flex flex-col  w-[150px] h-[50px] gap-[16px] border-[1.5px] mr-16 border-solid bg-white border-BECBD3">
                    <button class="text-center text-6C94A1 text-base text-6C94A1  mt-1 p-2" id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"  type="button">Generate</button>
                    <div class="hidden divide-y divide-gray-100  bg-white border border-solid border-C8D3DC" id="dropdownDivider">
                      <div class="">
                        <a href="#" class="text-535252 block px-4 py-2 font-Vietnam hover:bg-gray-300 rounded" id="menu-item-1">Set Default</a>
                      </div>
                      <div class="">
                        <!-- <a href="#" class="text-535252 block px-4 py-2 font-Vietnam hover:bg-gray-300 rounded" id="menu-item-3">Import</a> -->
                        <a  data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-535252 block px-4 py-2 font-Vietnam hover:bg-gray-300 rounded" type="button">
                        Import
                        </a>
<!-- class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"  -->
                      </div>
                      <!-- data-modal-backdrop="static"  -->


                      <div class="">
                        <a href="#" class="text-535252 block px-4 py-2 font-Vietnam hover:bg-gray-300 rounded" id="menu-item-6">Export</a>
                      </div>
                    </div> 
                </div>

            </div>
            
        </div>

                <section class="ms-24 mt-0">
                    <div class="flex">
                        <button type="button" data-modal-target="newAcntModal" data-modal-toggle="newAcntModal" class="border border-1 border-solid border-E5ECF0 bg-white  text-center  h-16 w-36 text-434852">
                            <div class="flex justify-between px-8">
                                <div class="text-434852">Add </div>
                               <div class="mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                                    </svg>
                                </div>
                            </div>   
                        </button>
                              
                    </div>
                </section>

                <!-- <div class="" id="newAcntModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 m-4  bg-white border border-E5ECF0 font-poppins leading-relaxed antialiased">
                        <div class="relative bg-white">
                        <div class="relative bg-white font-poppins">
                                        <div class="p-4">
                                            <div class="flex items-center justify-between p-4 md:p-3 border-b border-BECBD3 rounded-t">
                                                <h3 class="text-2xl text-2C495D">Add Chart of Account</h3>
                                                <button type="button" class="text-454545 bg-transparent hover:bg-F1F5F8 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="newAcntModal">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only" >Close modal</span>
                                                </button>
                                            </div>
                                            <div class="p-3 md:px-0">


                                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-B8B8B8 bg-white border border-1 borer-solid boder-838C95 italic	font-medium text-sm px-3 py-2.5 h-12 w-[200px] text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 w-[30rem]" type="button">
                                                <div class="flex">
                                                    <div class="text-434852">Select... </div>
                                                        <div class="mt-2">
                                                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                                            </svg>
                                                        </div>
                                                </div>   
                                            </button>


                                                
                                            <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" 
                                            class="text-B8B8B8 bg-white border border-1 borer-solid boder-838C95 italic	font-medium text-sm px-3 py-2.5 h-12 w-[200px] text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Select... 
                                            <div class="ml-10">
                                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                                </svg>
                                            </div>    
                                            </button>

                                            
                                            <div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                                <li>
                                                    <div class="flex items-center">
                                                    <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asset</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center">
                                                        <input checked id="checkbox-item-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                        <label for="checkbox-item-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Liabilities and Credit Card</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center">
                                                    <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">income</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center">
                                                    <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expense</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="flex items-center">
                                                    <input id="checkbox-item-3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="checkbox-item-3" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Equity</label>
                                                    </div>
                                                </li>
                                                </ul>
                                            </div>

                                            </div>  
                                        </div>
                                        <div class="flex justify-end p-4 modal-footer text-md">
                                            <button data-modal-hide="newAcntModal" type="button" class="w-28 text-535252 bg-F4F4F4 hover:bg-eeeeee cancel-btn focus:ring-4 focus:ring-blue-300 font-medium px-5 py-2.5 text-center">CANCEL</button>
                                            <button  type="button" class="w-28 text-white bg-1D4469 hover:bg-20486F save-btn font-medium text-gray-900 border border-gray-200 py-2.5 px-5 ms-3">SAVE</button>
                                        </div>
                                    </div>

                        </div>

                    </div>

                </div> -->
    </div>
</div>


<!-- <div rakesh-html=""></div>  -->

<script>
includeHTML();
</script>

<script src="../js/jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>
