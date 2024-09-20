<div id="addclient-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
   <div class="relative p-4 m-4 w-2/5 min-w-[40%] max-w-[40%] bg-white border border-E5ECF0 font-poppins leading-relaxed antialiased">
      <!-- Modal content -->
      <div class="relative bg-white ">



         <div class="w-full lg:w-8/12 mt-0">
            <div class="relative flex flex-col min-w-0  w-full mb-6 shadow-lg rounded-lg bg-white border-0">
               <div class="rounded-t bg-white mb-0 px-6 py-6">
                  <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold ml-4">
                           Add Client
                        </h6>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addclient-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
            
            
            


                              <div class="mb-4 border-gray-200 dark:border-gray-700">              
                                 <ul class="flex justify-center flex-wrap -mb-px text-sm font-medium text-center" id="add-client-tab" data-tabs-toggle="#add-client-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 dark:text-gray-400 border-D2DAE1 hover:border-gray-300" role="tablist">             
                                    <li role="presentation">               
                                          <button class="inline-block p-4 border rounded-lg" id="individual-tab" data-tabs-target="#individual-profile" type="button" role="tab" aria-controls="individual" aria-selected="false">Individual</button>             
                                    </li>              
                                    <li role="presentation">               
                                          <button class="inline-block p-4 border rounded-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="business-tab" data-tabs-target="#business-profile" type="button" role="tab" aria-controls="business" aria-selected="false">Business</button>             
                                    </li>              
                                         
                                 </ul>               
                              </div>               
                              <div id="add-client-tab-content">              
                                 <div class="hidden p-4 rounded-lg " id="individual-profile" role="tabpanel" aria-labelledby="individual-tab">              
                                 
                                          <div class="flex-auto px-2 lg:px-2 py-10 pt-0 bg-white border-D2DAE1 box-border border-solid rounded-lg border-2 mt-4 mb-0">
                                             <form>
                                                <h6 class="text-1D3545 font-600 text-16 font-poppins mt-5 mb-6 ">
                                                   General Info
                                                </h6>
                                                <div class="flex flex-wrap">
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor=" ">
                                                            Name*
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white text-sm focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                            Display Name
                                                         </label>
                                                         <input type="email" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm  focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                            Website*
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                            LinkedIn*
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                            Twitter*
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                            Type
                                                         </label>
                                                         <div class=" gap-x-4 ">
                                                            <button class="bg-white hover:border-2C495D text-2C495D text-14 font-poppins py-2 px-4 border border-border-D2DAE1 rounded shadow ">
                                                               Client
                                                            </button>
                                                            <button class="bg-white hover:border-2C495D text-2C495D text-14 font-poppins py-2 px-4 border border-border-D2DAE1 rounded shadow">
                                                               Other
                                                            </button>
                                                            <button class="bg-white hover:border-2C495D text-2C495D text-14 font-poppins py-2 px-4 border border-border-D2DAE1 rounded shadow">
                                                               Prospect
                                                            </button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="flex flex-wrap">
                                                   <div class="w-full lg:w-12/12 px-4">
                                                      <div class="relative  ">
                                                         <div class="">
                                                            <div class="box-border h-32 w-32 p-4 border-2 px-3 py-3 text-D2DAE1 border-solid bg-white rounded-lg text-sm focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mt-4">
                                                               <h6 class="p-2 text-1D4469 poppins font-14">Active</h6>
                                                               <div class="flex justify-between">
                                                               <div class="text-neutral-600 text-xs font-normal font-['Poppins'] capitalize">When turned off, client functionality is reduced to client record information, notes, and email sync. Client portal access will be deactivated. Only active clients count towards your client billing tier.

                                                               </div>

                                                               <div><label class="switch">
                                                                  <input type="checkbox" value="" class="sr-only peer" checked>
                                                                  <div class="relative w-11 h-6  rounded-full  peer-focus:ring-2 peer-focus:ring-none peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white  after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-green-600"></div>
                                                               </label></div></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="flex-auto px-4 lg:px-10 py-3 pt-0 bg-white border-D2DAE1 box-border border-solid rounded-lg border-2 m-8 mt-3 mb-0">
                                             <form>
                                                <h6 class="text-1D3545 font-600 text-16 font-poppins mt-5 mb-6 ">
                                                   Other Detail
                                                </h6>
                                                <div class="flex flex-wrap">
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor=" ">
                                                            Customer Group
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" fdprocessedid="3rg4g7">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-6/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                            Currency
                                                         </label>
                                                         <input type="email" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" fdprocessedid="hyuso">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 px-4">
                                                   <div class="relative w-full mb-3">
                                                      <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                         Tax Number
                                                      </label>
                                                      <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="" fdprocessedid="dy00h8">
                                                   </div>
                                                </div>
                                                <div class=" px-4">
                                                   <div class="relative mb-3 ">
                                                      <div class="flex items-center  ">
                                                         <button class="mt-3 flex items-center bg-white border-D2DAE1 border-2 border-solid text-1D4469 font-poppins text-14 font-medium mr-10 h-11 w-[235px] justify-between p-[14px] rounded dropbtn" fdprocessedid="1dw0bi">
                                                            Personal Email
                                                            <svg class="w-6 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                         </button>
                                                         <input type="text" class="mt-3 w-[70%] h-11 border-1 border-D2DAE1 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring  ease-linear transition-all duration-150" placeholder="Email" fdprocessedid="pmngx">
                                                      </div>
                                                      <div class="flex justify-end font-poppins text-14 text-F16136 font-medium">
                                                         <button class="mt-3" fdprocessedid="k85j4"> <span> + </span>Add Email</button>
                                                      </div>
                                                   </div>
                                                   <div class="relative mb-3">
                                                      <div class="flex items-center  ">
                                                         <button class="mt-3 flex items-center bg-white border-D2DAE1 border-2 border-solid text-1D4469 font-poppins text-14 font-medium mr-10 h-11 w-[235px] justify-between p-[14px] rounded dropbtn" fdprocessedid="o48yq8">
                                                            Work Phone
                                                            <svg class="w-6 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                         </button>
                                                         <input type="text" class="mt-3 w-[70%] h-11 border-1 border-D2DAE1 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring  ease-linear transition-all duration-150" placeholder="Mobile Number" fdprocessedid="a2kud5">
                                                      </div>
                                                      <div class="flex justify-end font-poppins text-14 text-F16136 font-medium">
                                                         <button class="mt-3" fdprocessedid="34pem"> <span> + </span>Add Phone number</button>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr class="mt-4 mb-4 border-b-1 border-blueGray-300">
                                                <div class="">
                                                   <h6 class="text-1D3545 font-600 text-16 font-poppins mt-8 mb-6 ">
                                                      Other Detail
                                                   </h6>
                                                   <div class="relative  mb-3 ">
                                                      <div class="flex gap-48">
                                                         <label class="flex-col text-2C495D font-poppins text-14 font-medium mb-1" for="">
                                                            Address Type
                                                         </label>
                                                         <label class="flex-col text-2C495D font-poppins text-14 font-medium mb-1" for="">
                                                            Address
                                                         </label>
                                                      </div>
                                                      <div class="flex mb-3">
                                                         <button class="mt-2 flex items-center bg-white border-D2DAE1 border-2 border-solid text-A2B3C3 italic font-poppins text-14 font-medium mr-10 h-11 w-[235px] justify-between p-[14px] rounded dropbtn" fdprocessedid="i3bhi">
                                                            Group-1
                                                            <svg class="w-6 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                         </button>
                                                         <input type="text" class="mt-2 w-[70%] h-11 border-1 border-D2DAE1 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring  ease-linear transition-all duration-150" placeholder="" fdprocessedid="ixq8ym">
                                                      </div>
                                                      <div class="flex">
                                                         <div class="w-[31.3333%]">
                                                            <div class=" mb-3">
                                                               <label class=" text-2C495D font-poppins text-14 font-medium mb-2" htmlfor="grid-password">
                                                                  City
                                                               </label>
                                                               <button class="mt-2 flex items-center bg-white border-D2DAE1 border-2 border-solid text-A2B3C3 italic font-poppins text-14 font-medium  h-11 w-[235px] justify-end  rounded dropbtn" fdprocessedid="4idk5">
                                                                  <svg class="w-6 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                  </svg>
                                                               </button>
                                                            </div>
                                                         </div>
                                                         <div class="">
                                                            <div class="mb-3 ">
                                                               <label class="ml-1 text-2C495D font-poppins text-14 font-medium mb-2" htmlfor="grid-password">
                                                                  Zip/Code
                                                               </label>
                                                               <input type="text" class="mt-2 flex items-center bg-white border-D2DAE1 border-2 border-solid text-A2B3C3 italic font-poppins text-14 font-medium  h-11 w-[275px] justify-center  rounded dropbtn" fdprocessedid="r6cjfj">
                                                            </div>
                                                         </div>
                                                         <div class="ml-5 ">
                                                            <div class="relative mb-3">
                                                               <label class="ml-1 text-2C495D font-poppins text-14 font-medium mb-2" htmlfor="grid-password">
                                                                  Country
                                                               </label>
                                                               <button class="mt-2 flex items-center bg-white border-D2DAE1 border-2 border-solid text-A2B3C3 italic font-poppins text-14 font-medium  h-11 w-[300px] justify-end  rounded dropbtn" fdprocessedid="yud41r">
                                                                  <svg class="w-6 h-5 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                                  </svg>
                                                               </button>
                                                            </div>
                                                            <div class="flex justify-end font-poppins text-14 text-F16136 font-medium mt-6 mb-0">
                                                               <button class="" fdprocessedid="wnt2nf"> <span> + </span>Add Address</button>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <hr class="mt-4 mb-4 border-b-1 border-blueGray-300 mb-0">
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="flex-auto px-4 lg:px-10 py-3 pt-0 bg-white border-D2DAE1 box-border border-solid rounded-lg border-2 m-8 mb-0 mt-3">
                                             <form>
                                                <h6 class="text-1D3545 font-600 text-16 font-poppins mt-5 mb-6 ">
                                                   Contact Person
                                                </h6>
                                                <div class="flex flex-wrap">
                                                   <div class="w-full lg:w-4/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor=" ">
                                                            Name
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-4/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor=" ">
                                                            Designation
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-4/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor=" ">
                                                            Contact Number
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-4/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor="">
                                                            Email
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="flex justify-end font-poppins text-14 text-F16136 font-medium mb-0">
                                                   <button class="mt-3" fdprocessedid="k85j4"> <span> + </span> Add Contact Person</button>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-white border-D2DAE1 box-border border-solid rounded-lg border-2 m-8 mb-0 mt-3">
                                             <form>
                                                <h6 class="text-1D3545 font-600 text-16 font-poppins mt-5 mb-6 ">
                                                   Artifact
                                                </h6>
                                                <div class="flex flex-wrap">
                                                   <div class="w-full lg:w-4/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <label class="block  text-2C495D font-poppins text-14 font-medium mb-2 " htmlfor=" ">
                                                            Doc Type
                                                         </label>
                                                         <input type="text" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                                                      </div>
                                                   </div>
                                                   <div class="w-full lg:w-4/12 px-4">
                                                      <div class="relative w-full mb-3">
                                                         <form action="">
                                                            <input type="file" name="" value="fileupload" id="fileupload" class="py-1 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                         </form>

                                                      </div>
                                                   </div>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="flex-auto px-4 lg:px-10 py-3 pt-0 bg-white border-D2DAE1 box-border border-solid rounded-lg border-2 m-8  mt-3">
                                             <form>
                                                <h6 class="text-1D3545 font-600 text-16 font-poppins mt-5 mb-6 ">
                                                   Services
                                                </h6>
                                                <div class="flex gap-48">
                                                   <label class="flex-col text-2C495D font-poppins text-14 font-medium mb-1" for="">
                                                      S. Type
                                                   </label>
                                                   <label class="flex-col text-2C495D font-poppins text-14 font-medium mb-1 mx-8" for="">
                                                      Description
                                                   </label>
                                                </div>
                                                <div class="flex mb-3">
                                                   <button class="mt-2 flex items-center bg-white border-D2DAE1 border-2 border-solid text-1D4469  font-poppins text-14 font-medium mr-10 h-11 w-[235px] justify-between p-[14px] rounded dropbtn" fdprocessedid="i3bhi">
                                                      Personal
                                                      <svg class="w-6 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                      </svg>
                                                   </button>
                                                   <input type="text" class="mt-2 w-[70%] h-11 border-1 border-D2DAE1 py-2 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring  ease-linear transition-all duration-150 italic " placeholder="Email" fdprocessedid="ixq8ym">
                                                </div>
                                                <div class="flex justify-end font-poppins text-14 text-F16136 font-medium">
                                                   <button class="mt-3" fdprocessedid="k85j4"> <span> + </span>Add Services</button>
                                                </div>
                                             </form>
                                          </div>
                                          <button class="block border border-1 border-solid ml-8  mb-16 w-[150px] h-[50px] bg-1D4469 text-white text-16 font-poppins font-600">Create</button>


                                 </div>              
                                 <div class="hidden p-4 rounded-lg " id="business-profile" role="tabpanel" aria-labelledby="business-tab">             
                                               
                                 </div>              
                                            
                              </div>               







            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="addclient-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="addclient-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </div>
   </div>
</div>