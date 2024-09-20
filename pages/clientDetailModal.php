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

<div class=" w-86per ml-auto">
    
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

<button data-modal-target="default-modal" data-modal-toggle="default-modal" class="m-10 block  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
  Toggle modal
</button>

<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow ">
    
            <div class="flex jsutify-between w-full">
              <div>Note</div>
              <div>button</div>

              <div>
                <input>
              </div>
            </div>
        </div>
    </div>
</div>


<div class=" p-4 rounded-md shadow-md w-1/2 m-10 font-poppins bg-white">
  <div class="flex justify-between">
    <div class="text-1D5D9B text-base font-medium">Note</div>
    <button class="bg-grey"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 bg-grey" ">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
    </svg>
    </button>
  </div>

  <div class="flex border-black border justify-between m-0">
    <input type="text" class="w-full  px-3 py-2 focus:outline-none text-xs" placeholder="Note Title">
  </div>
  <div class="m-0">
  <textarea class="w-full h-32 border border-black border-t-0 px-3 m-0 py-2 focus:outline-none resize-none text-xs" placeholder="Add your notes..."></textarea></div>
  <div   class="flex justify-between border border-black m-0 pt-2 mb-2 align-center">
    <div class="m-0 border-r px-2">
      <button><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
      </svg>
      </button>
    </div>
    <div class="flex m-0 top-0 mb-2 gap-1">
      <button><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-type-h1 w-6 h-6 text-gray-500" viewBox="0 0 16 16">
        <path d="M7.648 13V3H6.3v4.234H1.348V3H0v10h1.348V8.421H6.3V13zM14 13V3h-1.333l-2.381 1.766V6.12L12.6 4.443h.066V13z"/>
      </svg></button>
      <button><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-type-h2 w-6 h-6 text-gray-500" viewBox="0 0 16 16">
        <path d="M7.495 13V3.201H6.174v4.15H1.32V3.2H0V13h1.32V8.513h4.854V13zm3.174-7.071v-.05c0-.934.66-1.752 1.801-1.752 1.005 0 1.76.639 1.76 1.651 0 .898-.582 1.58-1.12 2.19l-3.69 4.2V13h6.331v-1.149h-4.458v-.079L13.9 8.786c.919-1.048 1.666-1.874 1.666-3.101C15.565 4.149 14.35 3 12.499 3 10.46 3 9.384 4.393 9.384 5.879v.05z"/>
      </svg></button>
      <button><svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-type-h3 w-6 h-6 text-gray-500" viewBox="0 0 16 16">
        <path d="M11.07 8.4h1.049c1.174 0 1.99.69 2.004 1.724s-.802 1.786-2.068 1.779c-1.11-.007-1.905-.605-1.99-1.357h-1.21C8.926 11.91 10.116 13 12.028 13c1.99 0 3.439-1.188 3.404-2.87-.028-1.553-1.287-2.221-2.096-2.313v-.07c.724-.127 1.814-.935 1.772-2.293-.035-1.392-1.21-2.468-3.038-2.454-1.927.007-2.94 1.196-2.981 2.426h1.23c.064-.71.732-1.336 1.744-1.336 1.027 0 1.744.64 1.744 1.568.007.95-.738 1.639-1.744 1.639h-.991V8.4ZM7.495 13V3.201H6.174v4.15H1.32V3.2H0V13h1.32V8.513h4.854V13z"/>
      </svg></button>
      <button><svg class="h-6 w-6 text-gray-500"    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M7 5h6a3.5 3.5 0 0 1 0 7h-6z" />  <path d="M13 12h1a3.5 3.5 0 0 1 0 7h-7v-7" /></svg></button>
      <button><svg class="h-6 w-6 text-gray-500"    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="6" y1="20" x2="18" y2="20" />  <path d="M8 5v6a4 4 0 0 0 8 0v-6" /></svg></button>
      <button><svg class="h-6 w-6 text-gray-500"    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <line x1="11" y1="5" x2="17" y2="5" />  <line x1="7" y1="19" x2="13" y2="19" />  <line x1="14" y1="5" x2="10" y2="19" /></svg></button>
    </div>
  </div>
  <div class="flex justify-between">
  <div class="flex gap-2">
    <button class="px-6 py-2 text-base rounded font-semibold bg-1D4469 text-white focus:outline-none">SAVE</button>
    <button class="px-6 py-2 text-base rounded font-semibold bg-F4F4F4  focus:outline-none">CANCEL</button>
  </div>
  <div class="text-right text-sm text-gray-500 mt-2">Last edit 15 Mar 2024 by Shashi Raj</div>
</div>
</div>



</div>

<!-- <div rakesh-html=""></div>  -->

<script>
includeHTML();
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
