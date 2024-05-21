<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body >
    
<div class=" bg-white dark:bg-gray-800 ">
            <nav class="2xl:container 2xl:mx-auto sm:py-2 sm:px-7 py-5 px-4">
                <!-- For large and Medium-sized Screen -->
                <div class="flex justify-between "> 
                    <div class="hidden sm:flex flex-row items-center space-x-6">
                        <img class="dark:bg-white  p-1 rounded  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg1.svg" alt="twitter" />                       
                       <img class="dark:bg-white  p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg2.svg" alt="facebook" />
                        <img class="dark:bg-white  p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg3.svg" alt="linkdin" />
                        <img class="dark:bg-white  p-1 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 cursor-pointer" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg4.svg" alt="instagram" />                                                             
                    </div>
                    <div class=" flex space-x-3 items-center">
                        <img class="p-1 dark:bg-white rounded-full" width="60px" src="resources/wnonbgLogo.png" alt="circle" />                 
                        <h1 class=" font-normal text-2xl leading-6 text-gray-800 dark:text-white " >Net Pixel</h1>
                    </div>
                    <div class="hidden sm:flex flex-row space-x-4">
                        <button class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-indigo-700 bg-white border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center" >Sign Up</button>
                        <button class="rounded-md flex space-x-2 w-24 h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center" >Sign In</button>
                    </div>
    
                    <!-- Burger Icon -->
                    <div id="bgIcon" onclick="toggleMenu()"  class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800  flex justify-center items-center sm:hidden cursor-pointer">
                        <img class="dark:bg-white" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg6.svg" alt="burger" />
                       <img class="dark:bg-white hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg7.svg" alt="cross" />                                                               
                    </div>
                </div>
    
                <!-- Mobile and small-screen devices (toggle Menu) -->
                <div id="MobileNavigation" class="hidden sm:hidden mt-4 mx-auto" >
                    <div class="flex flex-row items-center justify-center space-x-6">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg1.svg" alt="twitter" />                       
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg2.svg" alt="facebook" />
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg3.svg" alt="linkdin" />
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/header-3-svg4.svg" alt="instagram" />                                                             
                    </div>
                    <div class="flex flex-col gap-4 mt-4 w-80 mx-auto ">
                        <button class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-indigo-700 bg-indigo-600 bg-opacity-0 hover:opacity-100 duration-100 border border-indigo-700 focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center" >Sign Up</button>
                        <button class="rounded-md flex space-x-2 w-full h-10 font-normal text-sm leading-3 text-white bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center" >Sign In</button>
                    </div>
                </div>
            </nav>    
        </div>
      



        <div class="h-full w-full ">
            <!-- Code block starts --> 
            <nav class="w-full  bg-white hidden xl:block shadow">
                <div class="container px-6 h-16 flex justify-between items-center lg:items-stretch mx-auto">
                    <div class="flex items-center">
                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mr-10 flex items-center">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg1.svg" alt="logo" />
                            <h3 class="text-base text-gray-800 font-bold tracking-normal leading-tight mx-3 hidden lg:block">The North</h3>
                        </button>
                        <div class="hidden xl:flex items-center h-full">
                            <a href="javascript:void(0)" class="focus:outline-none border-b-2 border-transparent focus:border-indigo-700 cursor-pointer h-full flex items-center text-sm text-gray-700 hover:text-indigo-700 focus:text-indigo-700 tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="4" width="6" height="6" rx="1" />
                                        <rect x="14" y="4" width="6" height="6" rx="1" />
                                        <rect x="4" y="14" width="6" height="6" rx="1" />
                                        <rect x="14" y="14" width="6" height="6" rx="1" />
                                    </svg>
                                </span>
                                Home
                            </a>
                            <a href="javascript:void(0)" class="focus:outline-none border-b-2 border-transparent focus:border-indigo-700 focus:text-indigo-700 cursor-pointer h-full flex items-center text-sm hover:text-indigo-700 text-gray-800 mx-10 tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1" />
                                    </svg>
                                </span>
                                Categories
                            </a>
                            <a href="javascript:void(0)" class="focus:outline-none border-b-2 border-transparent focus:border-indigo-700 focus:text-indigo-700 cursor-pointer h-full flex items-center text-sm hover:text-indigo-700 text-gray-800 mr-10 tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="8 16 10 10 16 8 14 14 8 16" />
                                        <circle cx="12" cy="12" r="9" />
                                    </svg>
                                </span>
                                Performance
                            </a>
                            <a href="javascript:void(0)" class="focus:outline-none border-b-2 border-transparent focus:border-indigo-700 focus:text-indigo-700 cursor-pointer h-full flex items-center text-sm hover:text-indigo-700 text-gray-800 tracking-normal transition duration-150 ease-in-out">
                                <span class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="7 8 3 12 7 16" />
                                        <polyline points="17 8 21 12 17 16" />
                                        <line x1="14" y1="4" x2="10" y2="20" />
                                    </svg>
                                </span>
                                Deliverables
                            </a>
                        </div>
                    </div>
                    <div class="h-full hidden xl:flex items-center justify-end">
                        <div class="h-full flex">
                            <div  class=" h-full flex items-center justify-center border-l border-gray-300 px-6" >
                                <input type="text" class="bg-transparent focus:outline-none text-xs w-0 transition duration-150 ease-in-out" placeholder="Type something..." />
                                <button onclick="searchHandler(this)" aria-label="search" class="focus:outline-none focus:text-indigo-700 hover:text-indigo-700  h-full flex items-center justify-center text-gray-400 flex items-center">
                                    <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search cursor-pointer" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </button>

                            </div>
                            <button aria-label="open chats" class="focus:outline-none focus:text-indigo-700 hover:text-indigo-700 w-20 h-full flex items-center justify-center border-l border-r border-gray-300 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-messages cursor-pointer" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10" />
                                    <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2" />
                                </svg>
                            </button>
                            <button aria-label="open notifications" class="focus:outline-none focus:text-indigo-700 hover:text-indigo-700 w-20 h-full flex items-center justify-center border-r border-gray-300 cursor-pointer text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                            </button>
                            <button aria-label="dropdown" class="focus:outline-none text-gray-800 border-b-2 focus:text-indigo-700 border-transparent focus:border-indigo-700 flex items-center pl-8 relative cursor-pointer" onclick="dropdownHandler(this)">
                                <ul class="p-2 w-40 border-r bg-white absolute rounded left-0 shadow mt-16 top-0 hidden">
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                        <a href="javascript:void(0)" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <circle cx="12" cy="7" r="4" />
                                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            </svg>
                                            <span class="ml-2">My Profile</span>
                                        </a>
                                    </li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex items-center">
                                        <a href="javascript:void(0)" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="12" y1="17" x2="12" y2="17.01" />
                                            <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                                        </svg>
                                        <span class="ml-2">Help Center</span>
                                    </a>
                                    </li>
                                    <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                        <a href="javascript:void(0)" class="focus:outline-none focus:underline focus:text-indigo-700 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                        <span class="ml-2">Account Settings</span>
                                    </a>
                                    </li>
                                </ul>
                                <img class="rounded h-10 w-10 object-cover" src="https://tuk-cdn.s3.amazonaws.com/assets/components/horizontal_navigation/hn_1.png" alt="logo" />
                                <p class=" text-sm ml-2">Jane Doe</p>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center xl:hidden">
                        <ul class="p-2 border-r bg-white absolute rounded top-0 left-0 right-0 shadow mt-16 md:mt-16 hidden">
                            <li class="flex md:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                                        <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                                        <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                                        <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                                    </svg>
                                    <span class="ml-2 font-bold">Dashboard</span>
                                </div>
                            </li>
                            <li class="flex md:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center" onclick="dropdownHandler(this)">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                                    </svg>
                                    <span class="ml-2 font-bold">Products</span>
                                </div>
                                <ul class="ml-6 mt-1 hidden">
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-gray-800 px-3 font-normal">Landing Pages</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-gray-800 px-3 font-normal">Templates</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal pt-2 hover:bg-indigo-700 hover:text-gray-800 px-3 font-normal">Components</li>
                                </ul>
                            </li>
                            <li class="flex md:hidden cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                                    <circle cx="12" cy="12" r="9"></circle>
                                </svg>
                                <span class="ml-2 font-bold">Performance</span>
                            </li>
                            <li class="border-b border-gray-300 flex md:hidden flex-col cursor-pointer text-gray-600 text-sm leading-3 tracking-normal pt-2 pb-4 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none flex justify-center" onclick="dropdownHandler(this)">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <polyline points="7 8 3 12 7 16"></polyline>
                                        <polyline points="17 8 21 12 17 16"></polyline>
                                        <line x1="14" y1="4" x2="10" y2="20"></line>
                                    </svg>
                                    <span class="ml-2 font-bold">Deliverables</span>
                                </div>
                                <ul class="ml-6 mt-1 hidden">
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-gray-800 px-3 font-normal">Landing Pages</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal py-2 hover:bg-indigo-700 hover:text-gray-800 px-3 font-normal">Templates</li>
                                    <li class="cursor-pointer text-gray-600 text-xs leading-3 tracking-normal pt-2 hover:bg-indigo-700 hover:text-gray-800 px-3 font-normal">Components</li>
                                </ul>
                            </li>
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal mt-2 py-2 hover:text-indigo-700 flex items-center focus:text-indigo-700 focus:outline-none">
                                <div class="flex items-center">
                                    <div class="w-12 cursor-pointer flex text-sm border-2 border-transparent rounded focus:outline-none focus:border-white transition duration-150 ease-in-out">
                                        <img class="rounded h-10 w-10 object-cover" src="https://tuk-cdn.s3.amazonaws.com/assets/components/horizontal_navigation/hn_1.png" alt="logo" />
                                    </div>
                                    <p class="text-sm ml-2 cursor-pointer">Jane Doe</p>
                                    <div class="sm:ml-2 text-gray-800 relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down cursor-pointer" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <polyline points="6 9 12 15 18 9"></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </li>
                            <li class="cursor-pointer text-gray-600 text-sm leading-3 tracking-normal py-2 hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="7" r="4" />
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    </svg>
                                    <span class="ml-2">Profile</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->
            <nav>
                <div class="py-4 px-6 w-full flex xl:hidden justify-between items-center bg-white fixed top-0 z-40">
                    <div tabindex="0" class="focus:outline-none w-24">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg2.svg" alt="logo" />
                    </div>
                    <div>
                        <button id="menu" aria-label="open menu" class="focus:outline-none rounded-md focus:ring-2 focus:ring-gray-700 text-gray-800" onclick="sidebarHandler(true)">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg3.svg" alt="menu" />
                        </button>
                    </div>
                </div>
                <!--Mobile responsive sidebar-->
                <div uk-scrollspy="cls: uk-animation-slide-left; repeat: true" class="absolute w-full h-full transform -translate-x-full z-40 xl:hidden " id="mobile-nav">
                    
                    <div  class="  w-full h-full" onclick="sidebarHandler(false)"></div>
                    <div class=" w-64 z-40 fixed overflow-y-auto z-40 top-0 bg-white shadow h-full flex-col justify-between xl:hidden pb-4 transition duration-150 ease-in-out">
                        <div class="px-6 h-full">
                            <div class="flex flex-col justify-between h-full w-full">
                                <div>
                                    <div class="mt-6 flex w-full items-center justify-between">
                                        <div class="flex items-center justify-between w-full">
                                            <div class="flex items-center">
                                               <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg2.svg" alt="logo" />
                                                <p tabindex="0" class="focus:outline-none text-base md:text-2xl text-gray-800 ml-3">The North</p>
                                            </div>
                                            <button id="cross" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded-md text-gray-800" onclick="sidebarHandler(false)">
                                                <img class="icon icon-tabler icon-tabler-x" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg4.svg" alt="cross" />
                                            </button>
                                        </div>
                                    </div>
                                    <ul class="f-m-m">
                                        <li>
                                            <a class="cursor-pointer">
                                                <div class="text-gray-800 pt-8">
                                                    <div class="flex items-center">
                                                        <div class="w-6 h-6 md:w-8 md:h-8 text-indigo-700">
                                                           <img class="icon icon-tabler icon-tabler-grid" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg5.svg" alt="dashboard" />
                                                        </div>
                                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-indigo-700 xl:text-base text-base ml-3">Dashboard</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="cursor-pointer">
                                                <div class="text-gray-800 pt-8">
                                                    <div class="flex items-center justify-between">
                                                        <div class="flex items-center">
                                                            <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                                <img class="icon icon-tabler icon-tabler-puzzle" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg6.svg" alt="product" />
                                                            </div>
                                                            <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Products</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="cursor-pointer">
                                                <div class="text-gray-800 pt-8">
                                                    <div class="flex items-center">
                                                        <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                            <img class="icon icon-tabler icon-tabler-compass" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg7.svg" alt="performance" />
                                                        </div>
                                                        <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Performance</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-gray-800 pt-8 cursor-pointer">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <div class="w-6 h-6 md:w-8 md:h-8 text-gray-800">
                                                        <img class="icon icon-tabler icon-tabler-code" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg8.svg" alt="deliverables"/>
                                                    </div>
                                                    <p tabindex="0" class="focus:outline-none focus:text-indigo-600 text-gray-800 xl:text-base md:text-2xl text-base ml-3">Deliverables</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="w-full pt-4">
                                    <div class="flex justify-center mb-4 w-full">
                                        <div class="relative w-full">
                                            <div class="text-gray-500 absolute ml-4 inset-0 m-auto w-4 h-4">
                                                <img  class="icon icon-tabler icon-tabler-search" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg9.svg" alt="search" />
                                            </div>
                                            <input class="focus:ring-2 focus:ring-gray-700 bg-gray-100 focus:outline-none rounded w-full text-sm text-gray-500 pl-10 py-2" type="text" placeholder="Search" />
                                        </div>
                                    </div>
                                    <div class="border-t border-gray-300">
                                        <div class="w-full flex items-center justify-between pt-1">
                                            <div class="flex items-center">
                                                <img alt="profile-pic" src="https://tuk-cdn.s3.amazonaws.com/assets/components/boxed_layout/bl_1.png" tabindex="0" class="focus:outline-none w-8 h-8 rounded-md" />
                                                <p class="text-gray-800 text-base leading-4 ml-2">Jane Doe</p>
                                            </div>
                                            <ul class="flex">
                                                <li class="cursor-pointer text-gray-800 pt-5 pb-3">
                                                    <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                        <img  class="icon icon-tabler icon-tabler-messages" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg10.svg" alt="chat" />
                                                    </div>
                                                </li>
                                                <li class="cursor-pointer text-gray-800 pt-5 pb-3 pl-3">
                                                    <div tabindex="0" class="focus:outline-none focus:text-indigo-600 w-6 h-6 md:w-8 md:h-8">
                                                        <img class="icon icon-tabler icon-tabler-bell" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/left-aligned-with-icons-svg11.svg" alt="bell" />
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Sidebar ends -->

          
          
            <!-- Code block ends -->
        </div>
    
        
        <script src="./script.js"></script>
</body>
</html>