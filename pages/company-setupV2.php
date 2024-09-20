<!-- <!DOCTYPE html>
<html>
<link rel="stylesheet" href="../styles.css">
<script src="https://cdn.tailwindcss.com"></script>
<script src="../js/includehtml.js"></script>

<script src="../js/tailwindconfig.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<body> -->
    <!-- <div class="text-center mt-8">
    <h1>Chart of Account</h1>
</div> -->








<?php  include('head.php'); ?>

<link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />


<!-- <div rakesh-html="sidebar.php" class="w-14per fixed"></div>  -->

        <?php  include('navbar.php'); ?>

        <?php  include('sidebar.php'); ?>






<main class="p-4 sm:ml-64 font-poppins">
   <div class="p-4 mt-14">
   
   
<!-- 

    <div class="flex">
        <div class="w-14per">
            <?php // include('sidebar.php'); ?>
        </div> -->


        <?php //include('Add-Client.php'); ?>


        <div class="bg-F1F6F9 w-full font-poppins">

            <div class="flex flex-col bg-white p-4 ">
                <div class="flex justify-between items-center">
                    <h5 class=" text-203C50 font-['Be Vietnam'] text-32 font-medium ">New Customer</h5>
                    <div class="relative">
                        <div>
                            <label class="switch">
                                    <input type="checkbox" value="" class="sr-only peer" checked>
                                    <div class="relative w-11 h-6  rounded-full  peer-focus:ring-2 peer-focus:ring-none peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white  after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-green-600">   
                                    </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <section class="about bg-white mt-5 pt-5  py-20 ">
                <div class="flex gap-5 px-5 justify-between">
                    <div class="  justify-around font-poppins flex-wrap flex ">
                        <div class=" ">
                            <label for="customer_name" class="block mb-2 text-neutral-600 text-lg font-medium  ">Company Name</label>
                            <input type="text" id="customer_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter Name  . . . " />
                        </div>
                        <div class=" ">
                            <label for="Website" class="block mb-2 text-neutral-600 text-lg  font-medium  ">Cust. Display Name*</label>
                            <input type="text" id="Website" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                        </div> 
                    <div>
                </div>      

                <div class=" font-poppins pt-10 pr-16">
                    <div class="flex items-center justify-center ">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer    hover:bg-gray-100 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <p class="mb-2 text-sm text-gray-500 px-10 pt-5">Drop File</p>
                                <p class="text-xs text-gray-500 pb-5">Here To Upload</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                </div>
            </section>



<section class="links bg-white mt-5 pt-5  py-10">
<div class="text-slate-500 text-2xl font-normal font-['Be Vietnam'] capitalize pl-10 py-3">Links</div>

<div class="flex justify-between font-poppins px-10 py-3 pt-5">
    <div>
        
    <!-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Address Type</label> -->
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                            <option selected>None</option>
                            <option value="g2">Group 2</option>
                            <option value="g3">Group 3</option>
                            <option value="g4">Group 4</option>
                            <option value="g5">Group 5</option>
                        </select>
        

    </div>
    <div class="text-right text-red-500 text-lg font-medium flex align-items-center"> + Add Social Links</div>

</div>

</section>

            <section class="address bg-white mt-5 pt-5 py-20">
                <div class="text-slate-500 text-2xl font-normal font-['Be Vietnam'] capitalize pl-10 py-3">Address</div>

                <div class="font-poppins grid grid-cols-3 px-10 py-3 pt-5 gap-5">
                
                    <div>
                        <label for="countries" class="block mb-1 text-neutral-600 text-lg font-normal  ">Address Type</label>
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Group 1</option>
                            <option value="g2">Group 2</option>
                            <option value="g3">Group 3</option>
                            <option value="g4">Group 4</option>
                            <option value="g5">Group 5</option>
                        </select>
                    </div>
                    <div>
                        <label for="countries" class="block mb-1 text-neutral-600 text-lg font-normal  ">City</label>
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option ></option>
                            <option value="">This</option>
                            <option value="">Delhi</option>
                            <option value="">12345</option>
                            <option value="">12345</option>
                        </select>
                    </div>
                    <div>
            <label for="phone" class="block mb-1 text-neutral-600 text-lg font-normal  ">Phone 1</label>
            <input type="tel" id="phone" class="border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
        </div>
                </div>







                <div class="font-poppins grid grid-cols-3 px-10 py-3 pt-5 gap-5 ">
                
                   <div>
                    <label for="customer_name" class="block mb-1 text-neutral-600 text-lg font-normal  ">Point of Contact</label>
                        <input type="text" id="customer_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" John" />

                    </div>
                    <div>
                        <label for="countries" class="block mb-1 text-neutral-600 text-lg font-normal ">State</label>
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option ></option>
                            <option value="">This</option>
                            <option value="">Delhi</option>
                            <option value="">12345</option>
                            <option value="">12345</option>
                        </select>
                    </div>
                    <div>
            <label for="phone" class="block mb-1 text-neutral-600 text-lg font-normal  ">Phone 2</label>
            <input type="tel" id="phone" class="border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
        </div>
                </div>


                <div class="font-poppins grid grid-cols-3 px-10 py-3 pt-5 gap-5 grid-flow-col ">
                
                   <div class="row-span-2">
                   <label for="message" class="block mb-1 text-neutral-600 text-lg font-normal">Your message</label>
    <textarea id="message"  class="h-2/3 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Your message..."></textarea>

                    </div>
                    <!-- <div>
                        <label for="countries" class="block mb-1 text-neutral-600 text-lg font-normal ">City</label>
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option ></option>
                            <option value="">This</option>
                            <option value="">Delhi</option>
                            <option value="">12345</option>
                            <option value="">12345</option>
                        </select>
                    </div> -->
                    <div>
                    <label for="customer_name" class="block mb-1 text-neutral-600 text-lg font-normal  "> Zipcode</label>
                        <input type="text" id="customer_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" " />

                    </div>
                    <div class="">
        <label for="email" class="block mb-1 text-neutral-600 text-lg font-normal ">Primary Email</label>
        <input type="email" id="email" class="border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required />
    </div> 


                    <div class="col-start-2">
                        <label for="countries" class="block mb-1 text-neutral-600 text-lg font-normal ">Country</label>
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option ></option>
                            <option value="">This</option>
                            <option value="">Delhi</option>
                            <option value="">12345</option>
                            <option value="">12345</option>
                        </select>
                    </div>
                    <div class="">
        <label for="email" class="block mb-1 text-neutral-600 text-lg font-normal ">Secondary Email </label>
        <input type="email" id="email" class="border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required />
    </div> 
                </div>







                <!-- <div class="font-poppins grid grid-cols-3 px-5 gap-5 ">
            
             </div> -->



                <!-- <div class="font-poppins grid grid-cols-3 px-5">
                
                <div>
                <div>
                    <label for="customer_name" class="block mb-2 text-neutral-600 text-lg font-medium  "> Point of Contact</label>
                        <input type="text" id="customer_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder=" " />

                    </div>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Tax Number</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                    </select>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Currency</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>USD $</option>
                        <option value="">INR ₹</option>
                        <option value="">AED</option>
                        <option value="">EURO €</option>
                    </select>
                </div>
            </div>


            <div class="flex justify-around font-poppins pt-5">
                
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Vendor Group</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>Group 1</option>
                        <option value="g2">Group 2</option>
                        <option value="g3">Group 3</option>
                        <option value="g4">Group 4</option>
                        <option value="g5">Group 5</option>
                    </select>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Tax Number</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                    </select>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Currency</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>USD $</option>
                        <option value="">INR ₹</option>
                        <option value="">AED</option>
                        <option value="">EURO €</option>
                    </select>
                </div>
            </div>

            <div class="flex justify-around font-poppins pt-5">
                
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Vendor Group</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>Group 1</option>
                        <option value="g2">Group 2</option>
                        <option value="g3">Group 3</option>
                        <option value="g4">Group 4</option>
                        <option value="g5">Group 5</option>
                    </select>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Tax Number</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                        <option value="">12345</option>
                    </select>
                </div>
                <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Currency</label>
                    <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-[396.23px] h-[45px] p-2.5 ">
                        <option selected>USD $</option>
                        <option value="">INR ₹</option>
                        <option value="">AED</option>
                        <option value="">EURO €</option>
                    </select>
                </div>
            </div> -->



<div class="flex px-10 font-poppins pt-5 justify-between">
    <div>
<button><div class="text-center text-red-500 text-lg font-medium font-poppins"> + Add Address</div></button>
</div>

    
    <div class="flex gap-2">
        <button class="px-6 py-2 text-base rounded font-normal bg-F4F4F4  focus:outline-none">CANCEL</button>
        <button class="px-6 py-2 text-base rounded font-normal bg-1D4469 text-white focus:outline-none">SAVE</button>
  </div>

   

</div>


            </section>
            <section class="Contact-Person bg-white mt-5 pt-5  py-20">
            <div class="text-slate-500 text-2xl font-normal font-['Be Vietnam']capitalize pl-10 py-3">Contact Person</div>

<div class="relative overflow-x-auto px-10 py-3 pt-5">
    <table class="w-full  text-left rtl:text-right  font-poppins block mb-1 text-neutral-600 text-lg font-normal">
        <thead class="text-neutral-600  font-normal ">
            <tr class="bg-white ">
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal ">
                    Name
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal ">
                    Designation
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal ">
                    COntact No.
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal ">
                    Email Address*
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal ">Action</th>
            </tr>
            </thead>
            <tbody>
                <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
                <td class="px-6 py-4">
              
        <input type="email" id="email" class="border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required />

                </td>
                <td><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F84545" class="w-6 h-6 border-b9663">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</td>
            </tr>
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
                <td class="px-6 py-4">
                <input type="email" id="email" class="border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required />
                </td>
                <td><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F84545" class="w-6 h-6 border-b9663">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</td>
            </tr>
            
        </tbody>
    </table>
</div>



<div class="flex px-10 font-poppins pt-5 justify-between">
    <div>
<button><div class="text-center text-red-500 text-lg font-medium font-poppins"> + Add Address</div></button>
</div>

    
    <div class="flex gap-2">
        <button class="px-6 py-2 text-base rounded font-normal bg-F4F4F4  focus:outline-none">CANCEL</button>
        <button class="px-6 py-2 text-base rounded font-normal bg-1D4469 text-white focus:outline-none">SAVE</button>
  </div>

   

</div>


            </section>





            <section class="Services bg-white mt-5 pt-5  py-20">
            <div class="text-slate-500 text-2xl font-normal font-['Be Vietnam'] capitalize pl-10 py-3">Artifact</div>

<div class="relative overflow-x-auto px-10 py-3 pt-5">
    <table class="w-full text-sm text-left table-auto rtl:text-right text-gray-500 font-poppins">
        <thead class="text-neutral-600  font-normal ">
            <tr>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal">
                    DOC Type
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal">
                    File
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal">
                    Description
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal">
                Action
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>USD $</option>
                            <option value="">INR ₹</option>
                            <option value="">AED</option>
                            <option value="">EURO €</option>
                        </select>
                              </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
</td>
                <td><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F84545" class="w-6 h-6 border-b9663">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</td>
            </tr>
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>USD $</option>
                            <option value="">INR ₹</option>
                            <option value="">AED</option>
                            <option value="">EURO €</option>
                        </select>
                              </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
</td>
                <td><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F84545" class="w-6 h-6 border-b9663">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</td>
            </tr>
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>USD $</option>
                            <option value="">INR ₹</option>
                            <option value="">AED</option>
                            <option value="">EURO €</option>
                        </select>
                              </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
</td>
                <td><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#F84545" class="w-6 h-6 border-b9663">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</td>
            </tr>
          
        </tbody>
    </table>
</div>



<div class="flex px-10 font-poppins pt-5 justify-between">
    <div>
<button><div class="text-center text-red-500 text-lg font-medium font-poppins"> + Add Address</div></button>
</div>

    
    <div class="flex gap-2">
        <button class="px-6 py-2 text-base rounded font-normal bg-F4F4F4  focus:outline-none">CANCEL</button>
        <button class="px-6 py-2 text-base rounded font-normal bg-1D4469 text-white focus:outline-none">SAVE</button>
  </div>

   

</div>


            </section>





            <section class="Services bg-white mt-5 pt-5  py-20">
            <div class="text-slate-500 text-2xl font-normal font-['Be Vietnam']capitalize pl-10 py-3">Services</div>

<div class="relative overflow-x-auto px-10 py-3 pt-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 font-poppins ">
        <thead class="text-neutral-600  font-normal ">
            <tr>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal">
                    Services
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal">
                    Description
                </th>
                <th scope="col" class="px-6 py-4   mb-1 text-neutral-600 text-lg font-normal">
                Enable/Disable
                </th>
                
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>USD $</option>
                            <option value="">INR ₹</option>
                            <option value="">AED</option>
                            <option value="">EURO €</option>
                        </select>
                              </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
               
                <td class="billcodecheckbox"><button id="colorButton"class="border-0 bg-transparent chk-color" onclick="changeTextColor(this)"><i class="bi bi-check2-square text-2xl"></i></button>

            </tr>
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>USD $</option>
                            <option value="">INR ₹</option>
                            <option value="">AED</option>
                            <option value="">EURO €</option>
                        </select>
                              </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
               
                <td class="billcodecheckbox"><button id="colorButton"class="border-0 bg-transparent chk-color" onclick="changeTextColor(this)"><i class="bi bi-check2-square text-2xl"></i></button>

            </tr>
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                
                        <select id="countries" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>USD $</option>
                            <option value="">INR ₹</option>
                            <option value="">AED</option>
                            <option value="">EURO €</option>
                        </select>
                              </th>
                <td class="px-6 py-4">
                <input type="text" id="vendor_name" class=" border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" />
                </td>
               
                <td class="billcodecheckbox"><button id="colorButton"class="border-0 bg-transparent chk-color" onclick="changeTextColor(this)"><i class="bi bi-check2-square text-2xl"></i></button>
 
            </tr>
          
        </tbody>
    </table>
</div>



<div class="flex px-10 font-poppins pt-5 justify-between">
    <div>
<button><div class="text-center text-red-500 text-lg font-medium font-poppins"> + Add Address</div></button>
</div>

    
    <div class="flex gap-2">
        <button class="px-6 py-2 text-base rounded font-normal bg-F4F4F4  focus:outline-none">CANCEL</button>
        <button class="px-6 py-2 text-base rounded font-normal bg-1D4469 text-white focus:outline-none">SAVE</button>
  </div>

   

</div>


            </section>


            <div id="default-styled-tab-content">
                <div class="hidden p-4 rounded-lg bg-gray-50" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="bg-white p-5 h-screen m-10 overflow-x-scroll">
                        <table class="min-w-full border border-neutral-200 text-center text-sm  text-surface text-2C495D font-poppins  ">
                            <thead class="border-neutral-200 border ">
                                <tr>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Client Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Display Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            First Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Last Name
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Phone Number
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Email
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                                                </svg></a>
                                    </th>
                                    <th scope="col" class="font-normal px-6 py-3 text-left border">
                                        <div class="flex justify-between">
                                            Tax Number
                                            <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                    <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
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
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                </div>
                <div class="hidden p-4 rounded-lg bg-gray-50" id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
                </div>
            </div>


        </div>
    </div>




    </div>
</main>


<?php  include('script.php'); ?>

<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script>
	$(document).ready(function() {
    $('#example').dataTable();
} );
	</script>












<script>



function changeTextColor(button) {
  button.classList.toggle('grey');
}
  </script>
<script>
    const buttons = document.querySelectorAll('.option');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    buttons.forEach(otherButton => {
      otherButton.classList.remove('border-slate-700', 'text-slate-700'); // Remove blue styles from others
      otherButton.classList.add('text-neutral-400'); // Add gray background to others
      otherButton.classList.add('border-neutral-400'); // Add gray background to others
    });
    button.classList.toggle( 'text-slate-700'); // Toggle blue styles for clicked button
    button.classList.toggle('border-slate-700' ); // Toggle blue styles for clicked button
  });
});

</script>












  
<?php  include('footer.php'); ?>


    <!-- <div rakesh-html=""></div>  -->

    <!-- <script>
        includeHTML();
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html> -->