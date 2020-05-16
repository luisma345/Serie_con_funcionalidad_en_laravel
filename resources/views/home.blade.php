@extends('layouts.app')

@section('content')
            <div style="background-image: url('img/bg.jpg');" class="h-screen bg-fixed bg-top bg-cover bg-no-repeat flex items-end px-6 mt-0">
                <div class="block">
                    <h1 class="block text-red-800  w-full text-4xl sm:text-5xl md:text-6xl font-bold " style="-webkit-text-stroke: 1px white;">
                        ¿ERES PARTE DE LA RESISTENCIA?
                    </h1>
                    <p class="block text-white text-xl md:text-2xl lg:text-3xl font-semibold">
                        Una banda organizada de ladrones tiene el objetivo de cometer el atraco del siglo en la Fábrica Nacional de Moneda y Timbre. Cinco meses de preparación quedarán reducidos a once días para poder llevar a cabo con éxito el gran golpe.
                    </p>
                </div>
            </div>

            <div class="block bg-black pb-8" id="trailer">
                    <h1 class="block text-red-800  w-full text-6xl  md:text-6xl font-bold text-center">
                            TRAILERS
                    </h1>
                    <div class="w-full md:flex md:justify-center md:items-center">
                        <div class=" md:w-9/12">
                            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/rLTD_AD91uE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

            </div>

            <div class="block sm:flex sm:items-center sm:justify-center sm:flex-shrink-0" id="ver">
                    <h1 class="block text-red-800  w-full text-4xl  md:text-6xl font-bold text-center">
                            ¡MIRA LA SERIE!
                        </h1>
                    <div class="w-full">
                        <div class="flex justify-center">
                            <img src="img/netflix.png" class="w-2/4 md:w-1/4">
                        </div>
                        <a href="https://www.netflix.com/title/80192098" target="_blank" class="text-red-800 font-bold flex justify-center hover:underline my-4">Ver la casa de papel en Netflix</a>
                    </div>

            </div>
            
            <div class="block bg-black" id="meet">
                    <h1 class="block text-red-800  w-full text-4xl  md:text-6xl font-bold text-center">
                            MEET & GREET
                        </h1>
                    <p class="text-white text-center">Sorteo de entradas para conocer tus actores favoritos llenando los siguientes datos:</p>
                    <div class="block">
                        <form class="w-full p-4">
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block md:text-right mb-1 md:mb-0 pr-4 text-white">Nombre:</label>
                                </div>
                                <div class="md:w-1/3">
                                    <input type="text" name="nombre" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800" required>
                                </div>
                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block md:text-right mb-1 md:mb-0 pr-4 text-white">Apellido:</label>
                                </div>
                                <div class="md:w-1/3">
                                    <input type="text" name="apellido" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800" required>
                                </div>
                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block md:text-right mb-1 md:mb-0 pr-4 text-white">Correo:</label>
                                </div>
                                <div class="md:w-1/3">
                                    <input type="email" name="correo" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800" required>
                                </div>
                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block md:text-right mb-1 md:mb-0 pr-4 text-white">Edad:</label>
                                </div>
                                <div class="md:w-1/3">
                                    <input type="number" name="Edad" class="appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800" required>
                                </div>
                            </div>
                            <div class="md:flex md:items-center">
                                <div class="md:w-1/3"></div>
                                <div class="md:w-2/3">
                                  <button class="shadow bg-red-800 hover:bg-white hover:text-red-800 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    Enviar
                                  </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>

            </div>
@endsection
