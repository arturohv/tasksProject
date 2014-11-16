Universidad Técnica Nacional
Ingeniería del Software
ISW-811, Aplicaciones Web utilizando Software Libre
Carlos Luis Rojas Aragonés <crojas@utn.ac.cr>
1ER PROYECTO 25%
Fecha de entrega: 10/12/2014
Objetivo:
Desarrollar habilidades en programación de aplicaciones comerciales con Software Libre,
mediante la creación de una aplicación Web y de Linea de Comandos, que se integre con
aplicaciones/librerías de terceros, para el reforzamiento de los conocimientos adquiridos en
clase.
Instrucciones generales:
• La realización del proyecto es en parejas.
• Es prohibido copiar trabajos, cualquier intento de fraude o plagio será castigado todo
    el peso del reglamento institucional.
• La defensa del proyecto tendrá lugar el día 10 de Diciembre del 2014, en la UTN, sede
     San Carlos (misma aula donde se recibe el curso regular, en el horario habitual).
• Deben distribuir el tiempo sabiamente, para que al final no se les acumule el trabajo y
   terminen dejando puntos importantes sin cumplir (ver la tabla de rubros por calificar).
Enunciado
La empresa “My Task” lo ha contratado a usted para que desarrolle una aplicación, que les
permita mantener las tareas de cada uno de los empleados en orden, es decir una aplicación
en la que los empleados puedan ingresar con un usuario y clave y puedan ver el estado de
las tareas en estado nuevo, en progreso, finalizado y verificado:
•
Interfaz Web:
Se debe construir una aplicación web, que servirá de interfaz de usuario, donde la
persona podrá crear nuevas tareas, asi como editar cada una de ellas.
•
Funcionalidades esperadas:
◦ Login
◦ Registro
◦ Dashboard
◦ Un usuario no podrá ver las tareas de los otros.
◦ Para poder entrar al dashboard es necesario loguearse.
◦ El usuario podrá arrastrar las tareas de una columna de estado a otra.
ISW-811, Aplicaciones Web utilizando Software Libre – Asignación: 2do Proyecto Programado
Página 1 de 2
•
Urls: La aplicación debe contener al menos los siguientes urls:
Metodo Http Url Descripción
GET /login Vista de login
POST /login Request con credenciales para
           loguearse
GET /register Vista de Registro
POST /register Envio de datos de registro
GET /tasks Vista del dashboard con todas
          las
         tareas
        del
       usuario
      logueado
GET /tasks/create Vista para crear nueva tarea
GET /tasks/{id}/edit Vista de edición de tarea
POST /tasks/{id}/edit Edita tarea con un request
POST /tasks Crea nueva tarea con un
           request
POST /tasks/{id}/delete Elimina la tarea
Agregue los demás urls que considere necesarios.
Rubros de Calificación
Esta asignación tiene un valor de 25% de la nota total del curso. El detalle de cada uno de
los rubros a evaluar se presenta a continuación.
2do Proyecto Programado
Puntos
Registro de nuevos usuarios. 10
Login. 10
Muestra dashboard con todas las tareas en sus respectivos estados. 10
Crear una tarea nueva. 10
Editar una tarea existente. 10
Eliminar tarea. 10
Cambio de estado con drag & drop. 10
Responde a TODAS las preguntas correctamente. 10
Mensaje de confirmación antes de eliminar una tarea. 5
Codigo se encuentra en algún sistema de control de versiones. 5
Explicación de una fracción del código que el profesor decida. 10
ISW-811, Aplicaciones Web utilizando Software Libre – Asignación: 2do Proyecto Programado
Página 2 de 2

