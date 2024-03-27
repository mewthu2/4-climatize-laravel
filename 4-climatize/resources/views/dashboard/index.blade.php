<x-app-layout>
    <x-slot name="header">
        <h5 class="text-left font-semibold text-xs text-white leading-tight">
            <i class="fas fa-tachometer-alt"></i> {{ __('Painel Geral de Monitoramento') }}
        </h5>
    </x-slot>
    
    <div class="py-4 px-6 whitespace-normal grid lg:grid-cols-4 gap-1 sm:grid-cols-1">
        @foreach($employees as $employee)
            <div class="mb-2 mx-auto sm:px-2 lg:px-2">
                <div class="overflow-hidden shadow-xl sm:rounded-lg" style="background: #c7caeb;">
                    <div class="p-2">
                        <div class="max-w-sm">
                            <div class="text-center sm:rounded-lg" style="background: #36384f;">
                                <h5 class="mb-2 text-sm font-semibold tracking-tight text-gray-500 dark:text-white">{{ $employee->etiqueta_ident }} 
                                    <button type="button" class="me-2 text-sm text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                                        </svg>
                                    </button>
                                    
                                    @if($employee->estaEmDegelo)
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Em degelo</span>
                                    @endif
                                </h5>
                            </div>
                            <div class="grid grid-cols-3 gap-3">
                                <div class="text-xs text-center rounded-lg p-4 shadow-lg bg-white max-w-xs">
                                    <span class="text-blue-600">
                                        {{ $employee->nome_unidade }} 
                                    </span>
                                </div>

                                <div class="text-xs text-center rounded-lg p-4 shadow-lg bg-white max-w-xs">
                                    <span class="text-blue-600">
                                        {{ $employee->referencia }} 
                                    </span>
                                </div>
        
                                <div class="text-xs text-center rounded-lg p-4 shadow-lg bg-white max-w-xs">
                                    <span class="text-blue-600">
                                        {{ $employee->detalhe }} 
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 gap-1 mt-2 text-center">
                                <div class="text-x rounded-lg p-4 shadow-lg @if ($employee->atu < $employee->min || $employee->atu > $employee->max || $employee->estaEmDegelo = false) bg-red-800 @else bg-blue-200 @endif">
                                    <span class="font-normal text-gray-500 dark:text-gray-400">
                                        Temperatura atual: 
                                    </span>
                                    <span class="@if ($employee->atu < $employee->min || $employee->atu > $employee->max || $employee->estaEmDegelo = false) text-yellow-400 animate-pulse @else text-green-800 @endif text-x break-all">
                                        {{ $employee->atu }} C°
                                    </span>
                                </div>
                            </div>
                            <div class="grid grid-cols-3 gap-3 mt-2 text-center">
                                <div class="text-xs-1 rounded-lg p-4 shadow-lg bg-white">
                                    <span class="font-normal text-gray-500 dark:text-gray-400">
                                        
                                    </span>
                                    <span class="text-dark flex text-xs">
                                        <svg class="w-9 h-9 animate-pulse text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                        </svg>
                                        <span class="m-1">{{ $employee->setpoint }} C°</span>
                                    </span>
                                </div>
        
                                <div class="text-xs rounded-lg p-4 shadow-lg bg-white">
                                    <span class="font-normal text-gray-500 dark:text-gray-400">
                                        
                                    </span>
                                    <span class="text-dark flex text-xs">
                                        <svg class="w-9 h-9 animate-pulse text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                                        </svg>
                                        <span class="m-1">{{ $employee->min }} C°</span>
                                    </span>
                                </div>
        
                                <div class="text-xs rounded-lg p-4 shadow-lg bg-white">
                                    <span class="font-normal text-gray-500 dark:text-gray-400">
                                        
                                    </span>
                                    <span class="text-dark flex text-xs">
                                        <svg class="w-9 h-9 animate-pulse text-red-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
                                        </svg>
                                        <span class="m-1">{{ $employee->max }} C°</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
