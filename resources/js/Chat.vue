
<template>
    <app-layout>
        <template #header>
            <div>
                <div class="upperHead">
                    <div>
                        <p>
                            <a href="principal.html">Lumière</a>
                        </p>
                    </div>
                    <form action="#" method="post">
                        <input type="text" placeholder="Pesquisar">
                    </form>
                    <div class="logosHeader">
                        <x-app-layout>
                            <x-slot name="header">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                    {{ __('Dashboard') }}
                                </h2>
                            </x-slot>
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                        <x-jet-welcome />
                                    </div>
                                </div>
                            </div>
                        </x-app-layout>
                    </div>
                </div>
                <div class="tags">
                    <ul>
                        <li>
                            <a href="Acao.html">Ação</a>
                        </li>
                        <li>
                            <a href="Comedia.html">Comedia</a>
                        </li>
                        <li>
                            <a href="Sliceoflife.html">Slice of life</a>
                        </li>
                        <li>
                            <a href="Terror.html">Terror</a>
                        </li>
                        <li>
                            <a href="Scifi.html">Sci - fi</a>
                        </li>
                        <li>
                            <a href="">Mais</a>
                        </li>
                        <li>
                            <a href="{{ route('comunidade') }}">comunidade</a>
                        </li>
                    </ul>
                </div>
            </div>
        </template>

        <div class="py-12 bg-gray-900">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex"
                    style="min-height: 400px; max-height: 400px; ">

                    <!-- lista de usuarios-->
                    <div class="w-3/12 bg-fundo-200 bg-opacity-25 border-r border-gray-200 overflow-y-scroll">
                        <ul>
                            <li
                                class="p-6 text-lg text-gray-600 leading-7 front-semibold border-b border-gray-200 hover:bg-gray-50 hover:bg-opacity-200 hover:cursor-pointer">
                                <p> comunidade Harry potter</p>
                                <span class="ml-2 w-2 h-2 bg-third-500 rounded-full"></span>
                            </li>
                            <li
                                class="p-6 text-lg text-gray-600 leading-7 front-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p> comunidade One Piece</p>
                                <span class="ml-2 w-2 h-2 bg-third-500 rounded-full"></span>
                            </li>
                        </ul>
                    </div>
                    <!-- box mensagens-->
                    <div class="w-9/12 flex flex-col justify-between">

                        <!-- box mensagens-->

                        <div class="w-full p-6 flex flex-col overflow-y-scroll">
                            <div class="w-full mb-3 text-right">
                                <p class="inline-block p-2 rounded-mb messageFromMe" style="max-width: 75%;">
                                    N VAI O ESTILO
                                </p>
                                <span class="block mt-1 text-xxs text-gray-500"> 2022/09/28 17:19 </span>
                            </div>
                            <div class="w-full mb-3">
                                <p class="inline-block p-2 rounded-mb messageToMe " style="max-width: 75%;">
                                    AFF
                                </p>
                                <span class="block mt-1 text-xxs text-gray-500"> 2022/09/28 17:19 </span>
                            </div>
                        </div>
                        <div class="w-full bg-gray-200 bg-opacity-25 p-6 border-t border-gray-200 ">
                            <form>
                                <div class="flew rounded-md overflow-hidden border-gay-300">

                                </div>
                                <input type="text" class="flex-1 px-4 py-2 text-sm focus:outline-none ">
                                <button type="submit" class="bg-teal-900 hover:bg-teal-600  px-4 py-2"> Enviar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>

</template>

<script>

//import AppLayout from "@/Layouts/AppLayout"

import axios from 'axios';

export default {
    /*
    components: {
        AppLayout,
    }
    */
    data() {
        return {
            users: []
        }
    },
    mounted() {
        axios.get('api/users').then(response => {
            console.log(response)
        })
    }
}
</script>
<!--
   
<style>
.messageFromMe {
    @apply bg-gray-900 bg-opacity-25;
}

.messageToMe {
    @apply bg-gray-800 bg-opacity-25;
}
</style> 
-->