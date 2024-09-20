    
<button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-1D4469">
      <a href="javascript:void(0);" class="flex items-center justify-between ps-2.5 my-5">
         <img src="../images/Fondostech-Logo.png" class="h-6 me-3 sm:h-7" alt="Logo" />
         <i class="bi bi-three-dots-vertical text-lg text-F8FAFB"></i>
      </a>

      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-CCE6FF rounded-lg hover:bg-sky-600 group">
               <i class="bi bi-speedometer2 text-xl text-CCE6FF"></i>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li class="menubottomborder pb-2">
            <a href="#" class="flex items-center p-2 text-CCE6FF rounded-lg hover:bg-sky-600 group">
               <i class="bi bi-ui-checks-grid text-xl text-CCE6FF"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Menu</span>
               <!-- <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span> -->
            </a>
         </li>
         <li class="menubottomborder pb-2">
            <button type="button" class="flex items-center w-full p-2 text-base text-CCE6FF transition duration-75 rounded-lg group hover:bg-sky-600" aria-controls="sales-menu" data-collapse-toggle="sales-menu">
                 <i class="bi bi-cash-coin text-xl text-CCE6FF"></i>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Sales & Payments</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="sales-menu" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Estimates</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Invoices</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Payments Setup</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Recurring Invoices</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Checkouts</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Customer Statements</a>
                  </li>
                  <li>
                     <a href="client-List.php" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Customers</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Products & Services</a>
                  </li>
                 
            </ul>
         </li>
         <li class="menubottomborder pb-2">
            <button type="button" class="flex items-center w-full p-2 text-base text-CCE6FF transition duration-75 rounded-lg group hover:bg-sky-600" aria-controls="purchanses-menu" data-collapse-toggle="purchanses-menu">
                  <i class="bi bi-cart4 text-xl text-CCE6FF"></i>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Purchases</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="purchanses-menu" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Bills</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Vendors</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Products & Services</a>
                  </li>
                
                 
            </ul>
         </li>
         <li class="menubottomborder pb-2">
            <a href="#" class="flex items-center p-2 text-CCE6FF rounded-lg hover:bg-sky-600 group">
               <i class="bi bi-receipt text-xl text-CCE6FF"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Receipts</span>
            </a>
         </li>
         <li class="menubottomborder pb-2">
            <button type="button" class="flex items-center w-full p-2 text-base text-CCE6FF transition duration-75 rounded-lg group hover:bg-sky-600" aria-controls="account-menu" data-collapse-toggle="account-menu">
                 <i class="bi bi-piggy-bank text-xl text-CCE6FF"></i>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Accounting</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="account-menu" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Transactions</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Reconciliation</a>
                  </li>
                  <li>
                     <a href="genearate.php" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Chart of Accounts</a>
                  </li>
                 
            </ul>
         </li>
         <li class="menubottomborder pb-2">
            <button type="button" class="flex items-center w-full p-2 text-base text-CCE6FF transition duration-75 rounded-lg group hover:bg-sky-600" aria-controls="banking-menu" data-collapse-toggle="banking-menu">
                 <i class="bi bi-bank2 text-xl text-CCE6FF"></i>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Banking</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="banking-menu" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Connected Accounts</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Payouts</a>
                  </li>
               
                 
            </ul>
         </li>
      
        
         
         <!-- <li class="menubottomborder pb-2">
            <button type="button" class="flex items-center w-full p-2 text-base text-CCE6FF transition duration-75 rounded-lg group hover:bg-sky-600" aria-controls="doubleentry-menu" data-collapse-toggle="doubleentry-menu">
                 <i class="bi bi-journals text-xl text-CCE6FF"></i>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Double Entry</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="doubleentry-menu" class="hidden py-2 space-y-2">
                  <li>
                     <a href="genearate.php" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Chart of Accounting</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Manual Journey</a>
                  </li>
                 
            </ul>
         </li> -->
        
         <li class="menubottomborder pb-2">
            <button type="button" class="flex items-center w-full p-2 text-base text-CCE6FF transition duration-75 rounded-lg group hover:bg-sky-600" aria-controls="payroll-menu" data-collapse-toggle="payroll-menu">
                 <i class="bi bi-currency-bitcoin text-xl text-CCE6FF"></i>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Payroll</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="payroll-menu" class="hidden py-2 space-y-2">
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Run Payroll</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Employees</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Timesheets</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Payroll Transactions</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Taxes</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">Tax Forms</a>
                  </li>
                  <li>
                     <a href="#" class="flex items-center w-full p-2 text-CCE6FF transition duration-75 rounded-lg pl-11 group hover:bg-sky-600">COVID-19</a>
                  </li>
                 
            </ul>
         </li>
        
       
       

         <li class="menubottomborder pb-2">
            <a href="#" class="flex items-center p-2 text-CCE6FF rounded-lg hover:bg-sky-600 group">
               <i class="bi-clipboard-data text-xl text-CCE6FF"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Reports</span>
            </a>
         </li>

         <li class="menubottomborder pb-2">
            <a href="#" class="flex items-center p-2 text-CCE6FF rounded-lg hover:bg-sky-600 group">
              <div class="relative">
                   <i class="bi bi-pc-display-horizontal text-xl text-CCE6FF"></i>
                   <i class="bi bi-rocket text-xl text-CCE6FF absolute bottom-2 left-0"></i>
              </div>
          
               <span class="flex-1 ms-3 whitespace-nowrap">App</span>
            </a>
         </li>

         <li class="menubottomborder pb-2">
            <a href="#" class="flex items-center p-2 text-CCE6FF rounded-lg hover:bg-sky-600 group">
               <i class="bi-tsunami text-xl text-CCE6FF"></i>
          
               <span class="flex-1 ms-3 whitespace-nowrap">Wave Advisors</span>
            </a>
         </li>
      </ul>
   </div>
</aside>


