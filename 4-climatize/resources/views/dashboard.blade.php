<x-app-layout>
    <x-slot name="header">
        <h2 class="text-center font-semibold text-xl text-white leading-tight">
            <i class="fas fa-tachometer-alt"></i> {{ __('Painel Geral de Monitoramento') }}
        </h2>
    </x-slot>
    <div class="py-6 px-4 whitespace-normal grid grid-cols-4">
        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-6 whitespace-normal grid grid-cols-4">
        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-500 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <div class="max-w-sm">
                        <div class="text-center">
                            <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-gray-400">{{ $employees->id_equipamento }}</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Mac Sensor: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->mac_sensor }} 
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Nome Unidade: 
                                </span>
                                <span class="text-blue-600">
                                    {{ $employees->nome_unidade }} 
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                            <div class="text-xl rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    Temperatura atual: 
                                </span>
                                <span class="text-dark text-xl">
                                    {{ $employees->atu }} C°
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                   
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->atu }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->min }} C°</span>
                                </span>
                            </div>

                            <div class="text-xs rounded-lg p-4 shadow-lg">
                                <span class="font-normal text-gray-500 dark:text-gray-400">
                                    
                                </span>
                                <span class="text-dark flex text-xs">
                                    <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                    </svg>
                                    <span class="m-1">{{ $employees->max }} C°</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
