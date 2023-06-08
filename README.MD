# Calculadora en PHP

Este proyecto es una calculadora simple implementada en PHP que permite realizar operaciones matemáticas básicas.

## Archivos

El proyecto consta de los siguientes archivos principales:

- `index.php`: Este archivo contiene el formulario y la interfaz de usuario de la calculadora. Permite al usuario ingresar los números y seleccionar la operación a realizar. También muestra el resultado de la operación.

- `api.php`: En este archivo se encuentra el código que recibe los datos del formulario en `index.php` y procesa la solicitud. Utiliza la clase `Calculadora` para realizar la operación matemática seleccionada y redirige al archivo `index.php` con el resultado.

- `calculadora.php`: Este archivo define la clase `Calculadora`, que contiene los métodos y propiedades necesarios para realizar las operaciones matemáticas. La clase `Calculadora` se utiliza en el archivo `api.php` para llevar a cabo los cálculos.

## Uso

1. Abre el archivo `index.php` en un navegador web.

2. En el formulario, ingresa los números que deseas operar y selecciona la operación que deseas realizar.

3. Haz clic en el botón "Enviar" para enviar la solicitud al servidor.

4. El resultado de la operación se mostrará en la página.