<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite( 'resources/css/app.css' ,'resources/js/app.js' )
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
          <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
              <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                  <span class="sr-only">Open sidebar</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                  </svg>
               </button>
               <a href="http://127.0.0.1:8000/dashboard" class="flex items-center ms-2 md:me-24 text-indigo-600 hover:text-indigo-400 transition duration-300">
                <i class="fa-solid fa-car text-3xl bg-indigo-600 text-white p-2 rounded-full"></i>
                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white ms-2">AutoHub</span>
            </a>
              
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                  <div>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                      <span class="sr-only">Open user menu</span>
                      <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                    </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                    <div class="px-4 py-3" role="none">
                      <p class="text-sm text-gray-900 dark:text-white" role="none">
                        Neil Sims
                      </p>
                      <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                        neil.sims@flowbite.com
                      </p>
                    </div>
                    <ul class="py-1" role="none">
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </nav>
        
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
           <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
              <ul class="space-y-2 font-medium">
                 <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                       <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                          <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                          <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                       </svg>
                       <span class="ms-3">
                         Dashboard
                      </span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('clients.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                      <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                         <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                      </svg>
                       <span class="flex-1 ms-3 whitespace-nowrap">Clients</span>
                       <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('vehicule.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                      <i class="fa-solid fa-car-burst"></i>
                       <span class="flex-1 ms-3 whitespace-nowrap">Vehicules</span>
                       <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                 </li>
                 <li>
                    <a href="{{ route('rechange.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a2 2 0 0 1 2 2v4h-2V4h-4v4H6V4a2 2 0 0 1 2-2h4Zm6.707 4.707A1 1 0 0 1 20 7v3a1 1 0 0 1-1 1h-3V9h2V7h-2V6h2v1h1a1 1 0 0 1 1.707.707ZM6 14v4h4v2H6a2 2 0 0 1-2-2v-4H2v-2h2v-2h2v2h2v-2h2v2h-2v2H6Zm4-4h4v4h2v4h-2v2h-4v-2h2v-2h-2v-4ZM4 16v-2H2v2h2Zm14-2v-2h2v2h-2Zm0 4h2v-2h-2v2Zm-4 2v-2h2v2h-2ZM8 8V4h4v4H8Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Pieces de Rechange</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('reparations.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M2.24 2.24a3 3 0 0 1 4.24 0l3.536 3.536-1.414 1.414L5.05 5.05a1 1 0 0 0-1.414 1.414l3.536 3.536-1.414 1.414L2.24 6.464a3 3 0 0 1 0-4.224Zm11.314 5.657a1 1 0 0 0 0 1.414l3.535 3.535-1.415 1.415-3.535-3.535a1 1 0 0 0-1.414 0l-4.95 4.95a1 1 0 0 0 0 1.414L8.05 18H6v2h6v-6H9.95l1.415-1.414-3.536-3.536a1 1 0 0 0-1.414 0l-4.95 4.95a1 1 0 0 0 0 1.414L5.05 18H3v2h6v-6H7.05l3.535-3.535 4.95 4.95a3 3 0 0 0 4.242 0l3.536-3.536a3 3 0 0 0 0-4.242l-7.07-7.071a1 1 0 0 0-1.415 0Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Reparations</span>
                    </a>
                </li>
                
                 <li>
                    <a href="{{route('logout')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                       <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                          <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                          <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                          <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                       </svg>
                       <span class="flex-1 ms-3 whitespace-nowrap">Sign out</span>
                    </a>
                 </li>
              </ul>
           </div>
        </aside>
  <div class="p-4 sm:ml-64">
      <div class="p-4 border-dashed rounded-lg dark:border-gray-700 mt-14 bg-indigo-100">
<div class="p-4">
    <div class="p-4 border-dashed rounded-lg dark:border-gray-700 mt-14">
        @if ($errors->any())
            <div class="text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('reparations.update', $reparation->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="description" class="block text-gray-700 dark:text-white">Description:</label>
                <input type="text" id="description" name="description" class="w-full p-2 border rounded-lg" value="{{ old('description', $reparation->description) }}">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700 dark:text-white">Status:</label>
                <input type="text" id="status" name="status" class="w-full p-2 border rounded-lg" value="{{ old('status', $reparation->status) }}">
            </div>
            <div class="mb-4">
                <label for="startDate" class="block text-gray-700 dark:text-white">Start Date:</label>
                <input type="date" id="startDate" name="startDate" class="w-full p-2 border rounded-lg" value="{{ old('startDate', $reparation->startDate) }}">
            </div>
            <div class="mb-4">
                <label for="endDate" class="block text-gray-700 dark:text-white">End Date:</label>
                <input type="date" id="endDate" name="endDate" class="w-full p-2 border rounded-lg" value="{{ old('endDate', $reparation->endDate) }}">
            </div>
            <div class="mb-4">
                <label for="mechanicNotes" class="block text-gray-700 dark:text-white">Mechanic Notes:</label>
                <textarea id="mechanicNotes" name="mechanicNotes" class="w-full p-2 border rounded-lg">{{ old('mechanicNotes', $reparation->mechanicNotes) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="clientNotes" class="block text-gray-700 dark:text-white">Client Notes:</label>
                <textarea id="clientNotes" name="clientNotes" class="w-full p-2 border rounded-lg">{{ old('clientNotes', $reparation->clientNotes) }}</textarea>
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">Update</button>
            </div>
        </form>
    </div>
</div>

