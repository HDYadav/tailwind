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


        <div class="w-14per fixed">
             <?php  include('sidebar.php'); ?>
        </div> 

    <div class="bg-F1F6F9 w-86per ml-auto">

        <div class="flex flex-col bg-white p-4">
            <div class="flex justify-between items-center">
                <h5 class="pl-20 text-203C50 font-Vietnam text-32 font-medium ">Client List</h5>
                <div class="relative">
                    <button class="bg-1D4469 rounded-sm gap-x-2.5 h-[40px] w-[100px] text-white rounded">
                        + Add Client
                    </button>
                    <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" class="inline-flex items-center p-2 mr-12 text-sm font-medium text-center text-gray-900 bg-white rounded-lg " type="button">
                        <svg class="w-5 h-5 pt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex justify-between text-2C495D font-poppins text-base font-normal">
            <nav class="flex items-center justify-between px-4 py-2 flex p-4 gap-x-2 ps-20">
                <a href="#" class="px-4  py-2 hover:bg-gray-300 rounded">Active Client</a>
                <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Business</a>
                <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Individual</a>
                <a href="#" class="px-4 py-2 hover:bg-gray-300 rounded">Prospect</a>
            </nav>                                   

        </div>
   
                    <div class="bg-white p-5 h-screen m-10 overflow-x-scroll">
                          <table class="min-w-full border border-neutral-200 text-center text-sm  text-surface text-2C495D font-poppins  ">
                            <thead class="border-neutral-200 border ">
                                <tr >
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Client Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                            </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Display Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                            </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            First Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                            </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Last Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                            </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Phone Number
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                            </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Email
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/>
                                            </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Tax Number
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
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">shashi.r@gmail.com</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">5486548225</td>
                                   </tr>
                                   <tr class="border border-neutral-200 ">
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">shashi.r@gmail.com</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">5486548225</td>
                                   </tr>
                                   <tr class="border border-neutral-200 ">
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">shashi.r@gmail.com</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">5486548225</td>
                                   </tr>
                                   <tr class="border border-neutral-200 ">
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">shashi.r@gmail.com</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">5486548225</td>
                                   </tr>
                                   <tr class="border border-neutral-200 ">
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 text-2999BC font-medium text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-s border-neutral-200 px-6 py-2 font-normal text-left">Shashi</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">Raj </td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">0 123 456 7890</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">shashi.r@gmail.com</td>
                                    <td class="whitespace-nowrap border-b border-e border-neutral-200 px-6 py-2 text-2C495D font-normal text-left">5486548225</td>
                                   </tr>
                            </tbody>
                        </table> 
                    </div>
                <!-- </div>
            </div>
        </div> -->
    </div>





    





<!-- <div rakesh-html=""></div>  -->

<script>
includeHTML();
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>
