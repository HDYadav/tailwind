<!-- <!DOCTYPE html>
<html>
<link rel="stylesheet" href="../styles.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="../js/includehtml.js"></script>

<script src="../js/tailwindconfig.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">

<body> -->





<?php  include('head.php'); ?>

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />


<!-- <div rakesh-html="sidebar.php" class="w-14per fixed"></div>  -->

        <?php  include('navbar.php'); ?>

        <?php  include('sidebar.php'); ?>






<main class="p-4 sm:ml-64">
   <div class="p-4 mt-14">
   
   








            <div class="w-14per fixed">
                  <?php  include('sidebar.php'); ?>
            </div>
      <section class="">
            <div class="flex flex-row w-86per ml-auto p-4 bg-white border border-E5ECF0 font-poppins shadow-1 gap-2 ">
                  <div>
                        <div class=" text-slate-700 text-xl font-medium font-['Be Vietnam'] ">Client Name</div>
                        <div class=" text-cyan-600 text-sm font-normal text-right   ">Client</div>
                  </div>
                  <div>
                        <button class="rounded border border-slate-700 border-opacity-20 border" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                              fill="currentColor" class="w-6 h-6">
                              <path fill-rule="evenodd"
                                    d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                    clip-rule="evenodd" />
                        </svg>
                  </button>
                  </div>
            </div>
      </section>

      <section class=" ">
            <div class="flex flex-row w-[86%] ml-auto ">
                  <div class="basis-2/7">
                        <div class="justify-center items-center w-full md:inset-0 ">
                              <div class="px-5 py-3 max-w-sm max-h-full">
                                    <div class="relative bg-white border-solid shadow p-3">
                                          <div
                                                class="flex items-center justify-between p-4 md:px-4 py-3 border-b border-BECBD3">
                                                <h3 class="text-2xl text-2C495D">Client Info</h3>
                                                <button type="button"
                                                      class="text-454545 bg-transparent text-sm ms-auto inline-flex justify-center items-center"
                                                      data-modal-hide="default-modal">
                                                      <!-- <svg class="h-6 w-6 text-slate-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                      </svg> -->
                                                      <span class="font-medium"><i class="bi bi-pencil"></i></span>
                                                      <span class="sr-only">Edit</span>
                                                </button>
                                          </div>
                                          <div class="p-3 md:px-4">
                                                <p class="text-sm text-2C495D">FULL NAME</p>
                                                <p class="mb-2 font-medium text-sm text-2C495D">Ishan Verma</p>
                                                <p class="text-sm text-2C495D">WORK</p>
                                                <a href="#" class="text-2999BC">ishan.verma@gmail.com</a>
                                                <p class="mt-2 text-sm text-2C495D">MOBILE</p>
                                                <p class="mb-2 font-medium text-sm text-2C495D">0 123 456 7890</p>
                                                <p class="text-sm text-2C495D">PHYSICAL ADDRESS</p>
                                                <p class="font-medium text-sm text-2C495D">Ashok Nagar, Noida<br> Noida
                                                      001196<br> India</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="justify-center items-center w-full md:inset-0 ">
                              <div class="px-5 py-3 max-w-sm max-h-full">
                                    <div class="relative bg-white border-solid shadow p-3">
                                          <div
                                                class="flex items-center justify-between p-4 md:px-4 py-3 border-b border-BECBD3">
                                                <h3 class="text-2xl text-2C495D">About</h3>
                                                <button type="button"
                                                      class="text-454545 bg-transparent text-sm ms-auto inline-flex justify-center items-center"
                                                      data-modal-hide="default-modal">
                                                      <!-- <svg class="h-6 w-6 text-slate-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                      </svg> -->
                                                      <span class="font-medium"><i class="bi bi-pencil"></i></span>
                                                      <span class="sr-only">Edit</span>
                                                </button>
                                          </div>
                                          <div class="p-3 md:px-4">
                                                <p class="text-sm text-2C495D">DOB</p>
                                                <p class="mb-2 font-medium text-sm text-2C495D">3 Sept 1999 (24)</p>
                                                <p class="text-sm text-2C495D">OCCUPATION</p>
                                                <p class="mb-2 font-medium text-sm text-2C495D">Web Developer</p>
                                                <p class="mt-2 text-sm text-2C495D">FILING STATUS</p>
                                                <p class="mb-2 font-medium text-sm text-2C495D">Single</p>
                                                <p class="text-sm text-2C495D">CLIENT SINCE</p>
                                                <p class="mb-2 font-medium text-sm text-2C495D">21 Mar 2023</p>
                                                <p class="text-sm text-2C495D">CREATED ON</p>
                                                <p class="font-medium text-sm text-2C495D">21 Mar 2024</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="justify-center items-center w-full md:inset-0 ">
                              <div class="px-5 py-3 max-w-sm max-h-full">
                                    <div class="relative bg-white border-solid shadow">
                                          <div class="flex items-center justify-between p-4 md:p-4">
                                                <h3 class="text-2xl text-2C495D">Dependents</h3>
                                                <button type="button"
                                                      class="text-454545 bg-transparent text-sm ms-auto inline-flex justify-center items-center"
                                                      data-modal-hide="default-modal">
                                                      <span class="font-medium"><i class="bi bi-plus-lg"></i></i></span>
                                                      <span class="sr-only">Edit</span>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="justify-center items-center w-full md:inset-0 ">
                              <div class="px-5 py-3 max-w-sm max-h-full">
                                    <div class="relative bg-white border-solid shadow">
                                          <div class="flex items-center justify-between p-4 md:p-4">
                                                <h3 class="text-2xl text-2C495D">Dependents</h3>
                                                <button type="button"
                                                      class="text-454545 bg-transparent text-sm ms-auto inline-flex justify-center items-center"
                                                      data-modal-hide="default-modal">
                                                      <span class="font-medium"><i class="bi bi-plus-lg"></i></i></span>
                                                      <span class="sr-only">Edit</span>
                                                </button>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <div class="basis-5/7 w-full">
                        <!-- MAIN BODY -->
                        <section class="mt-5 ml-5 ">
                              <section>
                                    <ul class="flex">
                                          <li class="mr-6">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">Home</a>
                                          </li>
                                          <li class="mr-6">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">Communication</a>
                                          </li>
                                          <li class="mr-6">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">Notes</a>
                                          </li>
                                          <li class="mr-6">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">File</a>
                                          </li>
                                          <li class="mr-6">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">Task</a>
                                          </li>
                                          <li class="mr-6">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">Organizer</a>
                                          </li>
                                          <li class="mr-6">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">Billing</a>
                                          </li>
                                          <li class="">
                                                <a class="text-zinc-500  text-base font-normal hover:text-2C495D hover:border-b-2  hover:border-2C495D"
                                                      href="#">Time Entries</a>
                                          </li>


                                    </ul>
                              </section>
                              <section class="bg-white w-[97%]">
                                    <div class="flex justify-between my-5 px-5 items-center py-2 ">
                                          <div class="text-slate-700 text-xl font-semibold ">
                                                Tasks
                                          </div>
                                          <div class="gap-5 flex">
                                                <div><button class="text-cyan-600 text-sm font-normal  border px-2 py-1 rounded">View All task</button></div>
<div>                                                <button class="rounded-full border border-slate-700 border-opacity-20 border" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
                                                            <path fill-rule="evenodd"
                                                                  d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                                                  clip-rule="evenodd" />
                                                      </svg>
                                                </button>
                                          </div>
                                          </div>
                                          
                                    </div>
                                    <hr class="h-px my-3 w-[97%] justify-center flex m-auto bg-cyan-900 border border-opacity-[20%]">

                                    <div class="flex justify-between py-2 pb-32 px-5 ">
                                    <div>
                                          <button class="text-slate-700 text-sm font-normal py-1 border mx-2 rounded  px-3 ">
                                                <div class="jsutify-between flex gap-3 align-middle">
                                                      <div class="w-[11px] mt-1  h-[11px] bg-zinc-300 rounded-full"></div>
                                                <div class="pr-3">No Status</div>
                                          
                                          </div></button>
                                          <button class="text-cyan-600 text-sm font-normal mx-2">Design</button>
                                    </div>
                                    <div class="text-right text-slate-700 text-sm font-normal font-['Poppins'] capitalize">03\12\2023</div>
                              </div>
                              </section>
                              <section class="bg-white w-[97%]">
                                    <div class="flex justify-between my-5 px-5 items-center py-2 ">
                                          <div class="text-slate-700 text-xl font-semibold ">
                                                Notes
                                          </div>
                                          <div class="gap-5 flex">
                                                <div>
                                                <button class="text-cyan-600 text-sm font-normal  border px-2 py-1 rounded">+ Add Notes
                                                </button></div>
                                                <div>
                                                <button class="rounded-full border border-slate-700 border-opacity-20 border"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
                                                            <path fill-rule="evenodd"
                                                                  d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                                                  clip-rule="evenodd" />
                                                      </svg>
                                                </button>
                                          </div>
                                          </div>
                                          
                                    </div>
                                    <hr class="h-px my-5 w-[97%] justify-center flex m-auto bg-cyan-900 border border-opacity-[20%]">

                                    <div class=" justify-between py-2 pb-32 px-5 ">
                                         
                                          <div class="text-slate-700 text-sm font-semibold font-['Poppins'] capitalize">Hello World </div>
                                          <div class="text-slate-700 text-sm font-normal font-['Poppins'] capitalize">Hello World - Description test</div>
                                          <div class="text-right text-zinc-500 text-xs font-normal font-['Poppins'] capitalize">Last edit 15 Mar 2024 by Shashi Raj</div>

                                       
                              </div>
                              </section>
                        </section>

                  </div>
            </div>
      </section>







      </div>
</main>


<?php  include('script.php'); ?>

<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script>
	$(document).ready(function() {
    $('#example').dataTable();
} );
	</script>

<?php  include('footer.php'); ?>

<!-- 


      
      <script>
            includeHTML();
      </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html> -->