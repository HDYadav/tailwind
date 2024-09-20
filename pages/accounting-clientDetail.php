<!DOCTYPE html>
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

<body>
            <div class="w-14per fixed">
                  <?php  include('sidebar.php'); ?>
            </div>
      <section class="">
            <div class="flex flex-row w-86per ml-auto p-4 bg-white border border-E5ECF0 font-Vietnam gap-3 ">
                  <div>
                        <div class=" text-203C50 text-xl font-medium font-['Be Vietnam'] ">Client Name</div>
                        <div class=" text-2999BC text-sm font-normal italic font-poppins text-right">Client</div>
                  </div>
                  <div>
                        <button class="rounded border border-slate-700 border-opacity-20 border mt-1 ml-2"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 font-535252">
                                    <path fill-rule="evenodd"
                                          d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                          clip-rule="evenodd" />
                              </svg>
                        </button>
                  </div>
            </div>
      </section>


      <!-- MAIN BODY -->
      <section class="mt-5 ml-5 ml-auto w-[86%]">

            <section class="bg-white ml-20 w-[90%]">
                  <div class="flex items-center pt-4 pl-8">
                        <div class="text-2C495D text-xl font-semibold ">
                              Invoice
                        </div>
                        <div> <button class="pt-4 pl-2 pb-0 text-535252"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                          fill="currentColor" class="w-6 h-6 pb-0">
                                          <path fill-rule="evenodd"
                                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                                clip-rule="evenodd" />
                                    </svg>
                              </button>
                        </div>

                  </div>
                  <hr class="h-px my-1 w-[96%] pt-0 justify-center flex m-auto text-D2DAE1 border border-opacity-[20%]">

                  <div class="flex py-2 pb-5 pl-6 m-3 gap-x-5">
                        <form class=" ">
                              <label for="Client Name" class="block mb-2 text-14 font-normal text-535252">Client Name *
                              </label>
                              <select id="Client Name"
                                    class="form-select text-383838 text-16  border border-solid border-1 border-BFBFBF  block w-[220px] px-2">
                                    <option selected>Client Name</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                              </select>

                              
                        </form>

                        <div>
                              <label for="first_name" class="block mb-2 text-sm font-normal text-535252">Invoice #
                                    *</label>
                              <input type="text" id="first_name"
                                    class="placeholder-383838 text-16  border border-solid border-1 border-BFBFBF block w-[220px] p-2.5"
                                    placeholder="Partnership" required />
                        </div>
                        <div>
                              <label for="first_name" class="block mb-2 text-sm font-normal text-535252">Invoice Date
                                    *</label>
                              <input type="text" id="first_name"
                                    class=" placeholder-383838 text-16  border border-solid border-1 border-BFBFBF block w-[220px] p-2.5"
                                    placeholder="Partnership" required />
                        </div>
                        <div>
                              <label for="first_name" class="block mb-2 text-sm font-normal text-535252">Terms</label>
                              <input type="text" id="first_name"
                                    class="placeholder-383838 text-16  border border-solid border-1 border-BFBFBF block w-[220px] p-2.5"
                                    placeholder="Partnership" required />
                        </div>
                        <div>
                              <label for="first_name" class="block mb-2 text-sm font-normal text-535252">Due Date
                                    *</label>
                              <input type="text" id="first_name"
                                    class="placeholder-383838 text-16  border border-solid border-1 border-BFBFBF block w-[220px] p-2.5"
                                    placeholder="Partnership" required />
                        </div>

                  </div>

                  <!-- <hr class="h-px my-3  justify-center flex m-auto bg-cyan-900 border border-opacity-[20%]"> -->





                  <div class="relative overflow-x-auto">
                        <table class="w-full text-left rtl:text-right border">
                              <thead class="bg-white">
                                    <tr>
                                          <th scope="col" class="px-6 py-3 font-medium text-2C495D">
                                                Service
                                          </th>
                                          <th scope="col" class="px-6 py-3 font-medium text-2C495D">
                                                Description
                                          </th>
                                          <th scope="col" class="px-6 py-3  font-medium text-2C495D">
                                                Quality
                                          </th>
                                          <th scope="col" class="px-6 py-3 font-medium text-2C495D">
                                                Rate Type
                                          </th>
                                          <th scope="col" class="px-6 py-3 font-medium text-2C495D">
                                                Rate
                                          </th>
                                          <th scope="col" class="px-6 py-3 font-medium text-2C495D">
                                                Amount
                                          </th>
                                          <th scope="col" class="px-6 py-3 font-medium text-2C495D">
                                                WUWD
                                          </th>
                                          <th scope="col" class="px-6 py-3 font-medium text-2C495D">
                                                Total
                                          </th>
                                    </tr>
                              </thead>
                              <tbody class="border">
                                    <tr class="bg-white border">
                                          <th scope="row" class="px-6 py-0.5 font-medium text-gray-900 whitespace-nowrap border-r">
                                                <input type="text" id="" class="  text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block  " required />
                                          </th>
                                          <td class="px-6 py-0.5 border-r">
                                                <input type="text" id="" class="  text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block  " placeholder ="Type here . . ." required />
                                          </td>

                                          <td class="px-6 py-0.5 border-r">
                                                <div class="text-neutral-700 text-base text-center mr-10 font-normal font-['Poppins'] capitalize">01</div>
                                          </td>
                                          <td class="px-6 py-0.5 border-r">
                                                <select id="RateType border-none"
                                                      class="text-gray-900 text-sm border-none block w-full  ">
                                                      <option selected>Others</option>
                                                      <option value=""></option>
                                                      <option value=""></option>
                                                      <option value=""></option>
                                                      <option value=""></option>
                                                </select>
                                          </td>

                                          <td class="px-4 py-0 border-r p-0 m-0">
                                                <div class="flex">
                                                      <div class="text-16 border border-2C495D border-1 border-solid h-6 w-6 text-center">$</div>
                                                      <div class="text-16 ml-2 text-ACACAC">00.00</div>
                                                </div>
                                          </td>
                                          <td class="px-4 py-0 border-r p-0 m-0">
                                                <div class="flex">
                                                      <div class="text-16  h-6 w-6 text-center text-ACACAC">$</div>
                                                      <div class="text-16 ml-2 text-ACACAC">00.00</div>
                                                </div>
                                          </td>
                                          <td class="px-4 py-0 border-r p-0 m-0">
                                                <div class="flex">
                                                      <div class="text-16 border border-2C495D border-1 border-solid h-6 w-6 text-center">$</div>
                                                      <div class="text-16 ml-2 text-ACACAC">00.00</div>
                                                </div>
                                          </td>
                                          <td class="px-4 py-0 border-r p-0 m-0">
                                                <div class="flex">
                                                      <div class="text-16 text-ACACAC h-6 w-6 text-center">$</div>
                                                      <div class="text-16 ml-2 text-ACACAC">00.00</div>
                                                </div>
                                          </td>
                                    </tr>
                              </tbody>
                              <tfoot>
                                    <tr>
                                          <td colspan="12">
                                              <hr class="mt-16 mb-4 mx-4">
                                           
 
                                          </td>
                                 
                                          <!-- <td class="pt-12">
                                                <div class="mt-8 mb-0">
                                                      <hr class="w-full m-4">
                                                </div>
                                          </td> -->
                                    </tr>

                                    <tr>
                                          <td colspan="6" class="ps-4 text-14 font-poppins text-2999BC pb-4">
                                                +  Add Line Item
                                          </td>

                                          <td colspan="6" class="text-end pe-4 text-14 font-poppins text-2999BC pb-4">
                                                +  Add time and expenses
                                          </td>
                                    </tr>
                                   
                              </tfoot>
                        </table>
                        
                  </div>

                  <div>

                  </div>


                              <!-- <div class="flex justify-between py-2 pb-32 px-5 ">
                                    <div>
                                          <button class="text-slate-700 text-sm font-normal py-1 border mx-2 rounded  px-3 ">
                                                <div class="jsutify-between flex gap-3 align-middle">
                                                      <div class="w-[11px] mt-1  h-[11px] bg-zinc-300 rounded-full"></div>
                                                <div class="pr-3">No Status</div>
                                          
                                          </div></button>
                                          <button class="text-cyan-600 text-sm font-normal mx-2">Design</button>
                                    </div>
                                    <div class="text-right text-slate-700 text-sm font-normal font-['Poppins'] capitalize">03\12\2023</div>
                              </div> -->
            </section>

            <section class="mt-3 ml-20  w-[30%] bg-white">
                        <div class="flex mt-4 px-0 py-3 borderColor">
                              <div class="ml-4 text-383838">Single Line Invoice</div>

                              <label class=" items-end cursor-pointer ml-[280px]">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-1 peer-focus:ring-CDCDCD dark:peer-focus:ring-green-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600"></div>
                                    <!-- <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Green</span> -->
                              </label>
                        </div>
            </section>
       
      </section>












      <script>
            includeHTML();
      </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>