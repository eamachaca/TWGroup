<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="relative flex items-top bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/tasks') }}" class="text-sm text-gray-700 underline">{{__('challenge.tasks.list')}}</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                    <path
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Desaf??o 1</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    Todos los c??digos explicados en esta secci??n se encuentran dentro de la clase <strong>FirstChallengeService.php</strong>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Obtener precio total
                        de la factura.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para esta prueba realiz?? dos posibilidades, la primera es la siguiente linea de c??digo:
                        <pre>   Product::where('invoice_id', <strong>$invoiceId</strong>)->sum(DB::raw('quantity * price'))</pre>
                        En este caso se obtiene el precio total de la factura yendo a recorrer a sus productos pero c??mo
                        vemos requiere un Id de alguna factura.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para la segunda posibilidad tenemos la siguiente l??nea de c??digo:
                        <pre>   Invoice::withSum('products as total', DB::raw('"products"."quantity"*"products"."price"'))->get()->pluck('total', 'id')</pre>
                        Siendo la idea la misma que la anterior, simplemente cambiando en el sentido que lo realizamos
                        para todas las facturas, retornando un array
                        donde la clave es el id de la factura y el valor es el total de la factura.
                    </div>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Obtener todos id de
                        las facturas que tengan productos con cantidad mayor a 100.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para esta prueba realiz?? la siguiente linea de c??digo:
                        <pre>   Invoice::with('products')->whereHas('products', function ($query) {
        $query->where('quantity', '>', '<strong>100</strong>')
    }, '>=', <strong>1</strong>)->pluck('id')</pre>
                        En este caso se obtiene las facturas que tenga al menos <strong>1</strong> producto que tenga
                        una cantidad mayor a <strong>100</strong>,
                        entiendo que el 1 no era necesario ya que es como el por defecto, pero para darlo a entender lo
                        escrib??.
                    </div>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Obtener todos los
                        nombres
                        de los productos cuyo valor final sea superior a $1.000.000 CLP.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para esta prueba realiz?? la siguiente linea de c??digo:
                        <pre>   Product::whereRaw('quantity * price > ?', [1000000])->get()->pluck('name')</pre>
                        En este caso se obtiene los productos que su valor final (cantidad multiplicado contra el
                        precio)
                        sea de 1M (asum?? que el precio estaba ya en la moneda)
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                    <path
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Desaf??o 2:</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Indica paso a paso
                        los comandos para una instalaci??n b??sica de Laravel que me permita ver la p??gina principal
                        (recuerda describir qu?? hace cada comando).
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Es un poco complicado responder a esto, ya que ser??a saber la definici??n de b??sica. Voy a asumir
                        que se tiene todo el entorno ya instalado (ej:xampp+composer+DBMS ?? como en mi caso Homestead).
                        <hr>
                        En tal caso se tendr??a que ir a la carpeta donde se tenga configurado un entorno virtual o la
                        ruta por defecto de apache o nginx y ejecutar:
                        <pre>   composer create-project laravel/laravel NameProject <strong>7.*</strong></pre>
                        Explicando el anterior c??digo dir??amos que este construye un proyecto laravel (por medio de su
                        paquete <strong>laravel/laravel</strong>) en este caso se crea con la ??ltima subversi??n de la 7
                        (si se desea la ??ltima versi??n released no es necesario especificarlo, s??lo es para versiones
                        antiguas y betas)
                        <hr>
                        Estando configurados el nginx o apache apuntando a la carpeta public que se encuentra dentro del
                        proyecto, tendr??amos el "Hola Mundo" particular de Laravel.Suponiendo que no es todo el concepto
                        de b??sica, se tiene que configurar bien archivo .env con el DMBS que utilicemos,ya que vamos a
                        habilitar la autenticaci??n m??s b??sica con Laravel, ejecutamos el siguiente comando dentro del
                        proyecto
                        <pre>   composer require laravel/ui</pre>
                        Con este comando agregamos el paquete para descargar las dependencias para una Autentificaci??n
                        b??sica. Y para que se muestre un template sencillo se utiliza cualquiera de los siguiente
                        comandos:
                        <pre>   php artisan ui bootstrap --auth</pre>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp??
                        <pre>   php artisan ui vue --auth</pre>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp??
                        <pre>   php artisan ui react --auth</pre>
                        Cualquiera de los 3 realiza una instalaci??n para un login/registro/recuperar_contrase??a simple,
                        como es l??gico depender?? del gusto/requerimiento de cada desarrollador. Por ??ltimo para ver todo
                        esto funcionando se deber??a ejecutar el siguiente comando
                        <pre>   php artisan migrate <strong>--seed</strong></pre>
                        El cu??l crear?? las tablas que se tienen c??mo migraciones y en caso que existan
                        <strong>--seed</strong> los rellenar?? con los seeds de laravel
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                    <path
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Desaf??o 3:</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Respecto a la
                        estructura de datos del desaf??o 1, agrega a "Invoice" un campo "total" y escribe un Observador
                        (Observer) en el que cada vez que se inserter un registro en la tabla "Product", aumente el
                        valor de "total" de la tabla "Invoice".
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        He creado la migraci??n <strong>2021_07_30_225902_add_total_to_invoices_table.php</strong> para
                        lo del campo total, y he creado el observador y lo he asignado en <strong>EventServiceProvider.php</strong>
                        ejecutando los mismos seeds y migraciones de Laravel se puede comprobar el funcionamiento ya que
                        solito rellena la columan total.
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                    <path
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Desaf??o 4:</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Expl??canos ??qu?? es
                        "Laravel Jetstream"? y ??qu?? permite "Livewire" a los programadores?
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Ok, primero deseo aclarar que nunca utilic?? JetStream (si bien realic?? las ??ltimas
                        implementaciones en Laravel 6, en la empresa no eran muy fan??ticos de realizar el upgrade as??
                        nom??s), lo ??nico que s??, sin investigarlo con Google es que este es junto con Brezze un paquete
                        de autentificaci??n m??s sofisticado que UI (creo que Brezze es m??s hardcore que JetStream), si no
                        me equivoco es c??mo una mezcla totalmente implementada de UI con Laravel-Permission (o
                        laratrust).
                        <hr>
                        Respecto a LiveWire, he visto su directiva en Blade, tal vez lo confunda con @ component
                        (separado por que esto es blade jejeje), entiendo que es de funcionamiento similar solo que
                        reactivo ya que entiendo que utiliza esa funcionalidad
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                    <path
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Desaf??o 5</div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    Todos los c??digos backend est??n en <strong>FifthChallengeService.php</strong> y en <strong>TaskController.php</strong>
                    para cosas m??s espec??ficas de esta secci??n podr??an revisarla dentro de la rama <strong>FIFTH-CHALLENGE</strong>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">El sistema debe
                        permitir que los usuarios se registren y puedan iniciar sesi??n, el software no debe permitir que
                        el correo email@hack.net se pueda registrar.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para esta punto el registro e inicio de sesi??n se realiz?? aut??maticamente con Laravel/UI, para
                        lo de excluir un correo espec??fico se utiliz?? una regla de las validaciones de laravel,
                        espec??ficamente la regla <strong>prohibited_if</strong>, se lo puede revisar en la clase
                        <strong>RegisterController.php</strong>
                    </div>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">S??lo los usuarios
                        con sesi??n iniciada deber??an poder ver el listado de tareas (tasks) de la plataforma en la
                        primera pantalla luego de iniciar sesi??n.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para validar lo de la sesi??n iniciada se utiliz?? un route group de Laravel, aplicando el
                        middleware 'auth', para lo que sea la primer pantalla luego de iniciar sesi??n cambi?? la
                        constante HOME dentro del archivo <strong>RouteServiceProvider</strong> y en la vista de welcome
                        cambi?? la ruta manualmente.
                    </div>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">El sistema deber??a
                        permitir que cualquier usuario cree una nueva tarea (tasks), esta debe contener como m??nimo la
                        descripci??n de la tarea, el usuario asignado, la fecha m??xima de ejecuci??n.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        La ruta <strong>/tasks/create</strong> est?? preparada para eso, por debajo agregu?? un campo para
                        el autor que lo obtengo del usuario logueado. Esto para un futuro request solicitado.
                    </div>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Cuando un usuario
                        logueado entre a una tarea asignada a ??l, el sistema debe permitir que este agregue registros
                        (logs) asociados a la tarea, los registros contienen como m??nimo el comentario y la fecha de
                        este. Los usuarios no asignados a la tarea, no pueden acceder a ella, solo verla en el listado.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Ok para revisar el hecho que la tarea asignada sea suya en la Lista de Tareas realic?? el
                        siguiente "control" (dentro de <strong>tasks.blade.php</strong>):
                        <pre>   if($task->user_id == \Illuminate\Support\Facades\Auth::user()->id)</pre>
                        Con este control se le muestra un bot??n que redirige a la persona a los logs de las tareas para
                        que pueda crear los Logs que quiera, pero por si intentan ingresar por url (tanto el de la lista
                        de logs como el de crear un log) en el m??todo se realiz?? un redirect, resumiendo el c??digo ser??a
                        m??s o menos as??:
                        <pre>   if ($task->user_id != Auth::user()->id) return redirect()->route('task_list');</pre>
                    </div>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Al momento de que se
                        genere un nuevo registro (logs), es necesario que se env??e un correo electr??nico al autor de la
                        tarea (Puedes utilizar Mailtrap para Testing, aunque lo importante no es la evidencia del env??o,
                        sino el c??digo).
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para revisar este tema realic?? con el Mailer de Laravel, utilizando c??mo "template" la vista
                        <strong>mail_challenge.blade.php</strong> que en realidad es una vista muy sencilla que lo llama
                        al momento de crear a <strong>LogCreated.php</strong>, lo pueden encontrar en la funci??n
                        <strong>saveLog</strong> dentro de la clase <strong>FifthChallengeService.php</strong>
                    </div>
                </div>
                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">En el listado de
                        tareas, el sistema deber??a mostrar en rojo las tareas cuya "fecha m??xima de ejecuci??n" haya
                        expirado respecto a hoy.
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Para este caso realic?? la siguiente comprobaci??n, la cual pinta de fondo rojo al tr de la tabla,
                        en amarillo en caso de que el d??a sea hoy. Y no pinta nada en cualquier otro caso, para que
                        Laravel autom??ticamente reconozca a max_date c??mo Carbon, lo cree como mutator en el m??delo (los
                        dates est??n por defecto en la protected $dates)
                        <pre>   if($task->max_date->lt($now))
        class="table-danger"
    elseif($task->max_date->eq($now))
        class="table-warning"
    endif
                        </pre>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>
