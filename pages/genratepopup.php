<!DOCTYPE html>
<html>    
<link rel="stylesheet" href="../styles.css">
<script src="https://cdn.tailwindcss.com"></script>
<script  src="../js/includehtml.js"></script>

<script src="../js/tailwindconfig.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body>
<!-- <div class="text-center mt-8">
    <h1>Chart of Account</h1>
</div> -->

    <div  class="w-14per fixed">
          <?php  include('sidebar.php'); ?>
    </div> 

<div class="maincontent w-[86%] ml-auto">

    
    <section class="pghead grow-0  py-5 row">
        <div class="flex justify-end divide-x-2 divide-opacity-50" flex-row divide-B9B9B9 ">
        
            <button type="button" title="settings" aria-label="Settings" alt="settings" href="#" class="px-2 py-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1D4469" class="w-6 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg></button>
        
              <button type="button" title="notifications" aria-label="notification" alt="notification" href="#" class="px-2 py-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1D4469" class="w-6 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
              </button>
              
        
              <button type="button" title="faq" aria-label="faq" alt="faq" href="#" class="px-2 py-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1D4469" class="w-6 h-5">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                  </svg>          
                </button>
        
        
                
        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex px-3 py-1 items-center text-sm pe-1 font-medium text-1D5D9B    md:me-0 " type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 me-2 " src="../images/profile.webp" alt="user photo">
            Hari Yadav
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="#1D4469" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>
            
            <!-- Dropdown menu -->
            <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                  <div class="font-medium ">Pro User</div>
                  <div class="truncate">name@flowbite.com</div>
                </div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                  </li>
                </ul>
                <div class="py-2">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
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


      


    <div data-dialog-backdrop="animated-dialog" data-dialog-backdrop-close="true"
    class="fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-0 transition-opacity duration-300">
                <div data-dialog="animated-dialog" data-dialog-mount="opacity-100 translate-y-0 scale-100"
                data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
                data-dialog-transition="transition-all duration-300"
                class="relative p-4 m-4 w-2/5 min-w-[40%] max-w-[40%] bg-white border border-E5ECF0 font-poppins leading-relaxed antialiased shadow-1">
                <!-- <div
                    class="flex items-center p-4 font-sans text-2xl antialiased font-semibold leading-snug shrink-0 text-blue-gray-900">
                    Its a simple dialog.
                </div> -->
            
                    <div class="py-2  px-8 mb-2 bg-EDF3F7">
                        <div class="flex justify-between">
                            <div class="font-500 text-2C495D">Import Chart of Account</div>

                            <div class="text-F16136 font-500 border-l-2 border-CFCFCF ">
                                <button class="ml-5">Set Default</button>
                            </div>
                        </div>
                    </div>

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
            
                <!-- <div
                    class="relative p-4 font-sans text-base antialiased font-light leading-relaxed border-t border-t-E6EFF3 text-blue-gray-500">
                    The key to more success is to have a lot of pillows. Put it this
                    way, it took me twenty five years to get these plants, twenty five
                    years of blood sweat and tears, and I&apos;m never giving up,
                    I&apos;m just getting started. I&apos;m up to something. Fan luv.
                </div> -->
            
                <div class="text-xl py-3 border-t border-t-E6EFF3">Select Industry </div>
            
                <div class="pb-4 flex flex-wrap gap-6 justify-center text-center text-xl text-1D4469">
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Real Estate</div>
                    <!-- ... -->
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Manufacturing</div>
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Restaurants</div>
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Construction</div>
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Healthcare and Medical</div>
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">E commerce</div>
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Legal and Law</div>
                    <div class="bg-E6ECF1 h-[74px] w-44 flex justify-center items-center">Non-Profit Organizations</div>
                
                
                
                </div>
                <!-- <div class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
                    <button data-ripple-dark="true" data-dialog-close="true"
                    class="px-6 py-3 mr-1 font-sans text-xs font-bold text-red-500 uppercase transition-all rounded-lg middle none center hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Cancel
                    </button>
                    <button data-ripple-light="true" data-dialog-close="true"
                    class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Confirm
                    </button>
                </div> -->
                </div>
    </div>


    
</div>

<!-- <button
class="select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
data-ripple-light="true" data-dialog-target="animated-dialog">
Open Dialog
</button> -->

  

<!-- <div rakesh-html=""></div>  -->

<script>
includeHTML();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>
