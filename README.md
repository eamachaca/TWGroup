# Desafío 1

Todos los códigos explicados en esta sección se encuentran dentro de la clase **FirstChallengeService.php**

## Obtener precio total de la factura.

Para esta prueba realizé dos posibilidades, la primera es la siguiente linea de código:

    Product::where('invoice_id', **$invoiceId**)->sum(DB::raw('quantity * price'))

En este caso se obtiene el precio total de la factura yendo a recorrer a sus productos pero cómo vemos requiere un Id de
alguna factura.

Para la segunda posibilidad tenemos la siguiente línea de código:

    Invoice::withSum('products as total', DB::raw('"products"."quantity"*"products"."price"'))->get()->pluck('total', 'id')

Siendo la idea la misma que la anterior, simplemente cambiando en el sentido que lo realizamos para todas las facturas,
retornando un array donde la clave es el id de la factura y el valor es el total de la factura.

## Obtener todos id de las facturas que tengan productos con cantidad mayor a 100.

Para esta prueba realizé la siguiente linea de código:

    Invoice::with('products')->whereHas('products', function ($query) {
            $query->where('quantity', '>', '**100**')
        }, '>=', **1**)->pluck('id')

En este caso se obtiene las facturas que tenga al menos **1** producto que tenga una cantidad mayor a **100**, entiendo
que el 1 no era necesario ya que es como el por defecto, pero para darlo a entender lo escribí.

## Obtener todos los nombres de los productos cuyo valor final sea superior a $1.000.000 CLP.

Para esta prueba realizé la siguiente linea de código:

    Product::whereRaw('quantity * price > ?', [1000000])->get()->pluck('name')

En este caso se obtiene los productos que su valor final (cantidad multiplicado contra el precio) sea de 1M (asumí que
el precio estaba ya en la moneda)

# Desafío 2

## Indica paso a paso los comandos para una instalación básica de Laravel que me permita ver la página principal (recuerda describir qué hace cada comando).

Es un poco complicado responder a esto, ya que sería saber la definición de básica. Voy a asumir que se tiene todo el
entorno ya instalado (ej:xampp+composer+DBMS ó como en mi caso Homestead).

En tal caso se tendría que ir a la carpeta donde se tenga configurado un entorno virtual o la ruta por defecto de apache
o nginx y ejecutar:

    composer create-project laravel/laravel NameProject **7.***

Explicando el anterior código diríamos que este construye un proyecto laravel (por medio de su paquete **
laravel/laravel**) en este caso se crea con la última subversión de la 7 (si se desea la última versión released no es
necesario especificarlo, sólo es para versiones antiguas y betas)

Estando configurados el nginx o apache apuntando a la carpeta public que se encuentra dentro del proyecto, tendríamos
el "Hola Mundo" particular de Laravel.Suponiendo que no es todo el concepto de básica, se tiene que configurar bien
archivo .env con el DMBS que utilicemos,ya que vamos a habilitar la autenticación más básica con Laravel, ejecutamos el
siguiente comando dentro del proyecto

    composer require laravel/ui

Con este comando agregamos el paquete para descargar las dependencias para una Autentificación básica. Y para que se
muestre un template sencillo se utiliza cualquiera de los siguiente comandos:

php artisan ui bootstrap --auth ó php artisan ui vue --auth ó php artisan ui react --auth

Cualquiera de los 3 realiza una instalación para un login/registro/recuperar_contraseña simple, como es lógico dependerá
del gusto/requerimiento de cada desarrollador. Por último para ver todo esto funcionando se debería ejecutar el
siguiente comando

    php artisan migrate **--seed**

El cuál creará las tablas que se tienen cómo migraciones y en caso que existan **--seed** los rellenará con los seeds de
laravel

# Desafío 3

## Respecto a la estructura de datos del desafío 1, agrega a "Invoice" un campo "total" y escribe un Observador (Observer) en el que cada vez que se inserter un registro en la tabla "Product", aumente el valor de "total" de la tabla "Invoice".

He creado la migración **2021_07_30_225902_add_total_to_invoices_table.php** para lo del campo total, y he creado el
observador y lo he asignado en **EventServiceProvider.php** ejecutando los mismos seeds y migraciones de Laravel se
puede comprobar el funcionamiento ya que solito rellena la columan total.

# Desafío 4:

## Explícanos ¿qué es "Laravel Jetstream"? y ¿qué permite "Livewire" a los programadores?

Ok, primero deseo aclarar que nunca utilicé JetStream (si bien realicé las últimas implementaciones en Laravel 6, en la
empresa no eran muy fanáticos de realizar el upgrade así nomás), lo único que sé, sin investigarlo con Google es que
este es junto con Brezze un paquete de autentificación más sofisticado que UI (creo que Brezze es más hardcore que
JetStream), si no me equivoco es cómo una mezcla totalmente implementada de UI con Laravel-Permission (o laratrust).

Respecto a LiveWire, he visto su directiva en Blade, tal vez lo confunda con @component, entiendo que es de
funcionamiento similar solo que reactivo ya que entiendo que utiliza esa funcionalidad

# Desafío 5

Todos los códigos backend están en **FifthChallengeService.php** y en **TaskController.php** para cosas más específicas
de esta sección podrían revisarla dentro de la rama **FIFTH-CHALLENGE**

## El sistema debe permitir que los usuarios se registren y puedan iniciar sesión, el software no debe permitir que el correo email@hack.net se pueda registrar.

Para esta punto el registro e inicio de sesión se realizó autómaticamente con Laravel/UI, para lo de excluir un correo
específico se utilizó una regla de las validaciones de laravel, específicamente la regla **prohibited_if**, se lo puede
revisar en la clase **RegisterController.php**

## Sólo los usuarios con sesión iniciada deberían poder ver el listado de tareas (tasks) de la plataforma en la primera pantalla luego de iniciar sesión.

Para validar lo de la sesión iniciada se utilizó un route group de Laravel, aplicando el middleware 'auth', para lo que
sea la primer pantalla luego de iniciar sesión cambié la constante HOME dentro del archivo **RouteServiceProvider** y en
la vista de welcome cambié la ruta manualmente.

## El sistema debería permitir que cualquier usuario cree una nueva tarea (tasks), esta debe contener como mínimo la descripción de la tarea, el usuario asignado, la fecha máxima de ejecución.

La ruta **/tasks/create** está preparada para eso, por debajo agregué un campo para el autor que lo obtengo del usuario
logueado. Esto para un futuro request solicitado.

## Cuando un usuario logueado entre a una tarea asignada a él, el sistema debe permitir que este agregue registros (logs) asociados a la tarea, los registros contienen como mínimo el comentario y la fecha de este. Los usuarios no asignados a la tarea, no pueden acceder a ella, solo verla en el listado.

Ok para revisar el hecho que la tarea asignada sea suya en la Lista de Tareas realicé el siguiente "control" (dentro
de **tasks.blade.php**):

    if($task->user_id == \Illuminate\Support\Facades\Auth::user()->id)

Con este control se le muestra un botón que redirige a la persona a los logs de las tareas para que pueda crear los Logs
que quiera, pero por si intentan ingresar por url (tanto el de la lista de logs como el de crear un log) en el método se
realizó un redirect, resumiendo el código sería más o menos así:

    if ($task->user_id != Auth::user()->id) return redirect()->route('task_list');

## Al momento de que se genere un nuevo registro (logs), es necesario que se envíe un correo electrónico al autor de la tarea (Puedes utilizar Mailtrap para Testing, aunque lo importante no es la evidencia del envío, sino el código).

Para revisar este tema realicé con el Mailer de Laravel, utilizando cómo "template" la vista **
mail_challenge.blade.php** que en realidad es una vista muy sencilla que lo llama al momento de crear a **
LogCreated.php**, lo pueden encontrar en la función **saveLog** dentro de la clase **FifthChallengeService.php**

## En el listado de tareas, el sistema debería mostrar en rojo las tareas cuya "fecha máxima de ejecución" haya expirado respecto a hoy.

Para este caso realicé la siguiente comprobación, la cual pinta de fondo rojo al tr de la tabla, en amarillo en caso de
que el día sea hoy. Y no pinta nada en cualquier otro caso, para que
Laravel automáticamente reconozca a max_date cómo Carbon, lo cree como mutator en el módelo (los
dates están por defecto en la protected $dates)

    @if($task->max_date->lt($now))
        class="table-danger"
    @elseif($task->max_date->eq($now))
        class="table-warning" 
    @endif
