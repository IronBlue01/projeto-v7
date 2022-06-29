@extends('layouts.dashboard.main-layout')

@section('content')

<style>

  #alert-topo{
    background-color: rgb(185 28 28);
    color:white;
  }

</style>
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Fotos e Pagamentos
            </h2>
            <!-- CTA -->
            
            <a
              id="alert-topo"
              class="flex items-center justify-between p-4 mb-8 text-sm font-semibold  bg-red-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
              href="{{$cliente->link_drive}}" 
            >
              <div class="flex items-center ">

               

                <svg xmlns="http://www.w3.org/2000/svg" 
                    class="h-6 w-5 h-5 mr-2" 
                    fill="none" 
                    viewBox="0 0 20 20"
                    stroke="currentColor" 
                    stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>baixe suas fotos digitais clicando aqui</span>
              </div>
              <span>Ver fotos &RightArrow;</span>
            </a>

            <!-- With avatar -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300 {{$display}}"
            >
              Seus boletos
            </h4>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs {{$display}}">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap ">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Tipo</th>
                      <th class="px-4 py-3 hidden">Valor</th>
                      <th class="px-4 py-3">Baixar</th>
                      <th class="px-4 py-3">Data</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full hidden"
                              src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">Boleto</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              ...
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 hidden py-3 text-sm">
                        R$ 50,00
                      </td>
                      <td class="px-4 py-3 text-xs text-center">
                        <span
                          class="px-2 hidden py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Approved
                        </span>


                        <svg xmlns="http://www.w3.org/2000/svg" 
                             class="h-6 w-6 text-center ml-3 fa-download" 
                             fill="none" 
                             style="cursor:pointer;"
                             data-file="{{$arquivo}}"
                             data-name-file="{{$nome_arquivo}}"
                             viewBox="0 0 24 24" 
                             stroke="currentColor" 
                             stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                        </svg>

                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$vencimento}}
                      </td>
                    </tr>

             
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
              
              
                <!-- Pagination -->
               
              </div>
            </div>

            
          </div>
        </main>

       <script src="{{asset('dashboard//js/page_cliente.js')}}"></script>
@endsection('content')
