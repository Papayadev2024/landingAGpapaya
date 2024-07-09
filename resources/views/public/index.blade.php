@extends('components.public.matrix')

@section('css_improtados')
    <style>
        @font-face {
            font-family: "helveticaBold";
            src: url("./fonts/helveticaneueltprobd-webfont.woff") format("woff");
        }

        @font-face {
            font-family: "helveticaLight";
            src: url("./fonts/helveticaneueltprolt-webfont.woff") format("woff");
        }

        @font-face {
            font-family: "helveticaMedium";
            src: url("./fonts/helveticaneueltpromd-webfont.woff") format("woff");
        }

        .custom-swiper-buttons .swiper-button-prev:after {
            background-image: url("./images/svg/image_35.svg");
            transition: background-image 0.2s ease-in-out;
        }

        .custom-swiper-buttons .swiper-button-prev:hover:after {
            background-image: url("./images/svg/image_37.svg");
        }

        .custom-swiper-buttons .swiper-button-next:after {
            background-image: url("./images/svg/image_36.svg");
            transition: background-image 0.2s ease-in-out;
        }

        .custom-swiper-buttons .swiper-button-next:hover:after {
            background-image: url("./images/svg/image_39.svg");
        }

        .fondobombas {
            background-image: url("./images/img/fondobombas.png");
            object-fit: contain;
        }

        .fondologos {
            background-image: url("./images/img/fondologos.png");
            object-fit: cover;
        }

        .modal-open {
            overflow: hidden;
            background-color: rgba(0, 0, 0, 1);
        }
    </style>

@stop

@section('content')

    <main class="bg-[#F9FAFB]">
        <section class="relative">
            <img src="{{ asset('images/img/image_16.png') }}" alt="hidromec agricola"
                class="w-full h-[800px] object-cover hidden md:block" />

            <img src="{{ asset('images/img/image_16.png') }}" alt="hidromec agricola"
                class="w-full h-[1000px] object-cover block md:hidden" />

            <div
                class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-11/12 mx-auto pt-[350px] sm:pt-[250px] md:pt-[500px] lg:pt-0">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-24">
                    <div class="flex flex-col justify-center items-start gap-2 w-full lg:max-w-[700px]">
                        <div class="flex justify-start items-center gap-2 bg-[#232b52] rounded-full py-2 px-3">
                            <img src="{{ asset('images/svg/image_9.svg') }}" alt="experiencia" />
                            <p class="text-white font-helveticaMedium text-text12 md:text-text16">
                                Más de 17 años en el mercado nos respaldan
                            </p>
                        </div>

                        <div class="flex flex-col gap-5 items-start">
                            <h1 class="font-helveticaBold text-text46 md:text-text64 leading-none text-white">
                                La gama más completa de bombas para el Sector Agrícola
                            </h1>
                            <p class="text-white font-helveticaLight text-text20">
                                Electrobombas, Calefacción, Iluminación, Filtros, Temperado, limpieza y mantenimiento

                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-center items-center">
                            <div class="bg-[#222A51] bg-opacity-80 rounded-xl p-10 backdrop-blur-sm">
                                <div class="w-full md:max-w-[600px] lg:max-w-[442px] mx-auto flex flex-col gap-5">
                                    <h2 class="text-white font-helveticaBold text-text32 leading-tight">
                                        Solicita nuestro servicio llenando este formulario
                                    </h2>

                                    <form action="" id="formContactos">
                                        @csrf
                                        <div class="flex flex-col gap-5">
                                            <div class="relative w-full">
                                                <input id="" name="name" placeholder="Nombre de contacto"
                                                    type="text"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-helveticaMedium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="" name="document" placeholder="RUC | DNI" type="text"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-helveticaMedium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="telefono" name="cellphone" placeholder="Teléfono" type="tel"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                                <p
                                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer font-helveticaMedium text-white text-text10">
                                                    Obligatorio
                                                </p>
                                            </div>

                                            <div class="relative w-full">
                                                <input id="email" name="email" placeholder="E-mail" type="tel"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 text-[#FFFFFF] focus:ring-0 placeholder:text-[#FFFFFF] placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent" />
                                            </div>

                                            <div>
                                                <textarea name="address" id="mensaje" rows="2" cols="30"
                                                    class="w-full py-3 px-4 focus:outline-none font-helveticaLight text-text16 placeholder:text-white text-white focus:ring-0 placeholder:text-opacity-55 border-white border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-helveticaMedium bg-transparent"
                                                    placeholder="Mensaje"></textarea>

                                            </div>

                                            <div class="flex justify-center items-center py-5">
                                                <button type="submit"
                                                    class="text-text18 font-helveticaBold text-white bg-[#007FC8] py-4 px-6 w-full text-center rounded-lg">Quiero
                                                    una cotización</button>
                                            </div>
                                            <div class="flex flex-col gap-1">
                                                <div class="flex justify-start items-center gap-2">
                                                    <input required id="aceptar" type="checkbox"
                                                        class="w-4 h-4 cursor-pointer" />
                                                    <label for="aceptar"
                                                        class="font-helveticaLight text-text16 text-white cursor-pointer">Acepto
                                                        recibir comunicaciones</label>
                                                </div>
                                                <div class="flex justify-start items-center gap-1">
                                                    <p class="font-helveticaLight text-text16 text-white">
                                                        Al facilitar mis datos acepto la
                                                        <a target="_blank" id="open-modal" 
                                                            class="font-helveticaLight text-text16 text-white underline cursor-pointer">Política de privacidad y Tratamiento de datos</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- --- -->
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#F8F8F8] pt-[310px] md:pt-[450px] py-12 lg:py-20">
            <div class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto gap-5">
                <div class="flex flex-col gap-10 max-w-[665px]">
                    <h2 class="text-[#007FC8] font-helveticaBold text-text44 md:text-text48 leading-tight">
                        Donde hay agua, hay
                        <span class="text-[#161A32]">PENTAX</span>
                    </h2>

                    <div class="flex justify-start items-center w-full md:w-auto">
                        <a href="#"
                            class="text-white bg-[#007FC8] py-4 px-6 font-helveticaBold text-text18 rounded-xl w-full md:w-auto text-center">
                            Quiero una cotización
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-4">
                        <p class="text-[#007FC8] font-helveticaBold text-text40 leading-none">
                            Bombas Centrífugas
                        </p>
                        <div class="flex flex-col gap-2">

                            <p class="text-[#808080] font-helveticaLight text-text16 md:text-text18">
                                Ideal para equipos de presurización, sistemas de presión constante y de riego tecnificado
                                que requieran caudales consistentes con presiones medias o altas. Fabricadas según la norma
                                EN 733.
                                Uso en aplicaciones agrícolas e industriales.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#"
                            class="font-helveticaMedium text-text16 text-[#007FC8] flex justify-start items-center gap-2">
                            <span>Más Información</span>
                            <div>
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                        stroke="#007FC8" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-4">
                        <p class="text-[#007FC8] font-helveticaBold text-text40 leading-none">
                            Bombas de Caudal
                        </p>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#808080] font-helveticaLight text-text16 md:text-text18">
                                Ideales para traspasar o reciclar agua limpia en sistemas agrícolas donde se requieren altos
                                caudales con presiones relativamente bajas
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#"
                            class="font-helveticaMedium text-text16 text-[#007FC8] flex justify-start items-center gap-2">
                            <span>Más Información</span>
                            <div>
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                        stroke="#007FC8" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300">
                    <div class="flex flex-col gap-4">
                        <p class="text-[#007FC8] font-helveticaBold text-text40 leading-none">
                            Bombas Multietápicas
                        </p>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#808080] font-helveticaLight text-text16 md:text-text18">
                                Ideal para el bombeo líquido químicamente y mecánicamente no agresivos. Amplio uso en
                                equipos de presión constante,
                                sistemas de riego tecnificado y aplicaciones industriales. Extremadamente silenciosas.
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#"
                            class="font-helveticaMedium text-text16 text-[#007FC8] flex justify-start items-center gap-2">
                            <span>Más Información</span>
                            <div>
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.88628 1.33334L12.3307 6.00001M12.3307 6.00001L7.88628 10.6667M12.3307 6.00001L1.66406 6.00001"
                                        stroke="#007FC8" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white fondologos  bg-right bg-cover">
            <div class="flex flex-col md:flex-row w-11/12 mx-auto gap-10 justify-between py-10 lg:py-20">
                <div class="flex flex-col gap-3 w-full md:max-w-[450px] justify-center items-start">
                    <h3 class="text-white font-helveticaBold text-text44 md:text-text72 leading-none">
                        Representación
                        <span>Exclusiva</span>
                    </h3>

                    <div class="flex justify-start items-center py-5">
                        <a href="#"
                            class="text-text18 font-helveticaBold text-white bg-[#222A51] py-4 px-6 text-center rounded-lg">Quiero
                            una cotización</a>
                    </div>
                </div>

                <div
                    class="grid grid-cols-1 gap-10  md:flex md:flex-col md:flex-wrap md:gap-2 justify-center xl:justify-between w-full md:max-w-[768px]">



                    <div class="flex flex-row gap-2 lg:gap-2 justify-center lg:justify-end items-start">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/image_20.png') }}" alt="ISO" class="w-24" />
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/image_21.png') }}" alt="ISO" class="w-24" />
                        </div>
                    </div>

                    <div class="flex flex-row justify-center lg:justify-end items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/pentaxlargeblack.png') }}" alt="pentax" class="w-[600px]" />
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="w-11/12 mx-auto py-20 ">
            <div class="grid grid-cols-1  w-full md:max-w-[1300px] mx-auto gap-10 ">
                <div
                    class="flex flex-col gap-4 group bg-white p-6 rounded-xl hover:shadow-lg md:duration-300 fondobombas bg-cover object-cover">
                    <div class="flex flex-col gap-5 h-[300px] justify-center pl-[5%]">
                        <p class="text-white font-helveticaBold text-text40 leading-none">
                            Bombas de <br>uso agrícola
                        </p>

                        <div class="flex justify-start items-center py-5">
                            <a href="#"
                                class="text-text18 font-helveticaBold text-white bg-[#007fc8] py-4 px-6 text-center rounded-lg">Quiero
                                una cotización</a>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <section class="bg-[#007FC8]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-11/12 mx-auto gap-10 py-20">
                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_31.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Calidad
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Somos representantes y distribuidores de marcas reconocidas y
                        certificadas.
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_32.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Experiencia
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Contamos con más de 17 años de experiencia trabajando con
                        ingeniería acuática.
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_33.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Profesionalismo
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Nuestro equipo de especialistas es constantemente capacitado para
                        estar siempre a la vanguardia.
                    </p>
                </div>

                <div class="flex flex-col gap-3 items-center">
                    <div class="flex flex-col gap-2 items-center">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/svg/image_34.svg') }}" alt="Calidad" />
                        </div>
                        <h2 class="font-helveticaBold text-text32 text-white text-center">
                            Compromiso
                        </h2>
                    </div>
                    <p class="text-white font-helveticaLight text-text16 text-center">
                        Contamos con 6 locales en todo el Perú y más de 200 distribuidores
                        oficiales.
                    </p>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="flex flex-col gap-10 py-20 w-11/12 mx-auto">
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-[#161A32] text-text48 font-helveticaBold leading-tight text-center">
                        Distribuidores <span class="text-[#007FC8]">Autorizados</span>
                    </h3>
                    <p class="text-[#808080] font-helveticaLight text-text18 text-center">
                        De las siguientes marcas
                    </p>
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 md:gap-10">

                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_27.png') }}" alt="pentair" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_30.png') }}" alt="pentair" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/image_31.png') }}" alt="pentair" />
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('images/img/pentax.png') }}" alt="pentair" />
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-20 pt-10 md:pt-20">
            <h3
                class="text-[#161A32] font-helveticaBold text-text32 md:text-text48 text-center w-[300px] md:w-[500px] mx-auto leading-tight pb-10">
                Reconocimiento de
                <span class="text-[#007FC8]">nuestros clientes</span>
            </h3>

            <div class="w-11/12 md:w-9/12 mx-auto relative">
                <div class="swiper testimonios rounded-2xl">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 md:p-8 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    La eficiencia y confiabilidad de estas bombas son incomparables, y el equipo de servicio
                                    al cliente fue excepcional
                                    en ayudarnos a encontrar la solución perfecta para nuestras necesidades específicas.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    Era escéptico de los productos químicos para piscinas, pero
                                    ahora estoy muy contento con los resultados. Mi piscina está
                                    siempre limpia y cristalina, y los recomiendo a cualquiera
                                    que tenga una piscina.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    Era escéptico de los productos químicos para piscinas, pero
                                    ahora estoy muy contento con los resultados. Mi piscina está
                                    siempre limpia y cristalina, y los recomiendo a cualquiera
                                    que tenga una piscina.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-8 bg-white rounded-lg p-6 items-center">
                                <p class="text-[#808080] font-helveticaLight text-text18 text-center max-w-[600px]">
                                    Era escéptico de los productos químicos para piscinas, pero
                                    ahora estoy muy contento con los resultados. Mi piscina está
                                    siempre limpia y cristalina, y los recomiendo a cualquiera
                                    que tenga una piscina.
                                </p>

                                <div class="flex flex-col gap-3 max-w-[600px]">
                                    <p class="font-helveticaBold text-text20 text-[#161A32]">
                                        Carmén Arámbulo
                                    </p>
                                    <div class="flex justify-center items-center gap-2">
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                        <img src="{{ asset('images/svg/image_29.svg') }}" alt="start" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-swiper-buttons xl:flex xl:absolute hidden">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination !-bottom-[56px] block xl:hidden mb-[6px] xl:mb-0"></div>
            </div>
        </section>
    </main>

    <div id="default-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Política de privacidad y Tratamiento de datos
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Cerrar modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4 h-[500px] overflow-y-auto">
                    <p dir="ltr"><strong>1. Introducci&oacute;n</strong></p>
                    <p dir="ltr">En Hidromec Ingenieros, nos comprometemos a proteger la privacidad de nuestros usuarios y a cumplir con la Ley de Protecci&oacute;n de Datos Personales (Ley N&deg; 29733) y su Reglamento. Estas pol&iacute;ticas de tratamiento de datos personales describen c&oacute;mo recopilamos, usamos, almacenamos y protegemos la informaci&oacute;n personal que nos proporciona a trav&eacute;s de nuestro formulario en nuestra landing page.</p>
                    <p dir="ltr"><strong>2. Responsable del Tratamiento de Datos Personales</strong></p>
                    <p dir="ltr">El responsable del tratamiento de sus datos personales es Hidromec Ingenieros, con domicilio en Av. Aviaci&oacute;n N&ordm; 3985. Puede contactarnos al correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
                    <p dir="ltr"><strong>3. Datos Personales Recopilados</strong></p>
                    <p dir="ltr">Recopilamos los siguientes datos personales a trav&eacute;s de nuestro formulario:</p>
                    <ul>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Nombre completo</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">RUC o DNI</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Direcci&oacute;n de correo electr&oacute;nico</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">N&uacute;mero de tel&eacute;fono</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Mensaje del usuario</p>
                    </li>
                    </ul>
                    <p dir="ltr"><strong>4. Finalidades del Tratamiento de Datos</strong></p>
                    <p dir="ltr">Los datos personales que nos proporciona ser&aacute;n utilizados para las siguientes finalidades:</p>
                    <ul>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Gestionar su solicitud o consulta.</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Enviar informaci&oacute;n comercial y promociones de nuestros productos y servicios.</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Realizar encuestas de satisfacci&oacute;n y estudios de mercado.</p>
                    </li>
                    </ul>
                    <p dir="ltr"><strong>5. Base Legal para el Tratamiento de Datos</strong></p>
                    <p dir="ltr">El tratamiento de sus datos personales se basa en el consentimiento que usted nos otorga al completar y enviar el formulario. Usted tiene derecho a retirar su consentimiento en cualquier momento, sin afectar la legalidad del tratamiento basado en el consentimiento previo a su retirada.</p>
                    <p dir="ltr"><strong>6. Almacenamiento y Seguridad de los Datos</strong></p>
                    <p dir="ltr">Sus datos personales ser&aacute;n almacenados en en servidores de alta seguridad ubicados f&iacute;sicamente en Canad&aacute; y ser&aacute;n tratados de manera confidencial y segura. Implementamos medidas de seguridad t&eacute;cnicas y organizativas para proteger sus datos contra el acceso no autorizado, la p&eacute;rdida o destrucci&oacute;n nuestros datacenter cumplen las normas de Arco.</p>
                    <p dir="ltr"><strong>7. Transferencia de Datos Personales</strong></p>
                    <p dir="ltr">No compartiremos sus datos personales con terceros, salvo que sea necesario para cumplir con las finalidades descritas en esta pol&iacute;tica o en caso de que exista una obligaci&oacute;n legal.</p>
                    <p dir="ltr"><strong>8. Derechos del Titular de los Datos</strong></p>
                    <p dir="ltr">Usted tiene derecho a acceder, rectificar, suprimir, oponerse, y limitar el tratamiento de sus datos personales. Para ejercer estos derechos, puede contactarnos a trav&eacute;s del correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
                    <p dir="ltr"><strong>9. Consentimiento para el Env&iacute;o de Publicidad</strong></p>
                    <p dir="ltr">Al completar y enviar el formulario, usted consiente expresamente que Hidromec Ingenieros pueda enviarle comunicaciones publicitarias y comerciales a trav&eacute;s de correo electr&oacute;nico, mensajes de texto (SMS), llamadas telef&oacute;nicas, y cualquier otro medio de comunicaci&oacute;n electr&oacute;nica o f&iacute;sica.</p>
                    <p dir="ltr"><strong>10. Duraci&oacute;n del Consentimiento</strong></p>
                    <p dir="ltr">El consentimiento otorgado tendr&aacute; una duraci&oacute;n indefinida, salvo que usted decida revocar. Usted puede retirar su consentimiento en cualquier momento, comunic&aacute;ndose con nosotros a trav&eacute;s del correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
                    <p dir="ltr"><strong>11. Procedimiento para Retirar el Consentimiento</strong></p>
                    <p dir="ltr">Si en alg&uacute;n momento no desea seguir recibiendo nuestras comunicaciones publicitarias, puede optar por:</p>
                    <ul>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Enviar un correo electr&oacute;nico a info@hidromecingenieros.com con el asunto "Cancelar Suscripci&oacute;n".</p>
                    </li>
                    <li dir="ltr" aria-level="1">
                    <p dir="ltr">Llamar al n&uacute;mero 448 5540 y solicitar la cancelaci&oacute;n de la suscripci&oacute;n.</p>
                    </li>
                    </ul>
                    <p dir="ltr"><strong>12. Seguridad de sus Datos Personales</strong></p>
                    <p dir="ltr">Implementamos medidas de seguridad t&eacute;cnicas y organizativas adecuadas para proteger sus datos personales contra el acceso no autorizado, la p&eacute;rdida o destrucci&oacute;n.</p>
                    <p dir="ltr"><strong>13. Cambios en la Pol&iacute;tica de Tratamiento de Datos</strong></p>
                    <p dir="ltr">Nos reservamos el derecho de modificar estas pol&iacute;ticas de tratamiento de datos en cualquier momento. Cualquier cambio ser&aacute; publicado en nuestra landing page y, si corresponde, le notificaremos a trav&eacute;s del correo electr&oacute;nico que nos haya proporcionado.</p>
                    <p dir="ltr"><strong>14. Contacto</strong></p>
                    <p dir="ltr">Si tiene alguna pregunta o inquietud sobre nuestras pol&iacute;ticas de tratamiento de datos personales, puede contactarnos a trav&eacute;s del correo electr&oacute;nico info@hidromecingenieros.com o al tel&eacute;fono 448 5540.</p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="default-modal" type="button"
                        class="text-white bg-terciario p-3 rounded-lg">Aceptar</button>
                </div>
            </div>
        </div>
    </div>



@section('scripts_improtados')
    <script>
        /*  */
        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 1,
                },
            },
        });
        /*  */
        var swiper = new Swiper(".logos", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 4,
                    centeredSlides: false,
                    autoplay: false,
                },
            },
        });
    </script>

    <script>
        let modal = document.getElementById("default-modal");
        let btn = document.getElementById("open-modal");
        let btn2 = document.getElementById("open-modal2");
        let closeButtons = document.querySelectorAll("[data-modal-hide='default-modal']");
        let body = document.body;

        btn.onclick = function() {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            body.classList.add("modal-open");
        }

        btn2.onclick = function() {
            modal.classList.remove("hidden");
            modal.classList.add("flex");
            body.classList.add("modal-open");
        }

        closeButtons.forEach(button => {
            button.onclick = function() {
                modal.classList.remove("flex");
                modal.classList.add("hidden");
                body.classList.remove("modal-open");
            }
        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.remove("flex");
                modal.classList.add("hidden");
                body.classList.remove("modal-open");
            }
        }
    </script>

@stop

@stop
