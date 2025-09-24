# Response Helpers

## Descripción

`response-helpers` es una librería PHP que proporciona funciones útiles para manejar respuestas HTTP de manera más sencilla y eficiente.

# Instalación

Para instalar `response-helpers`, puedes usar Composer. Ejecuta el siguiente comando en tu terminal:

```bash
composer require gabogalro/response-helpers
```

# Usos

## Ejemplo de uso para respuesta exitosa

## para

```php
<?php

use gabogalro\responseHelpers\Response;

return Response::success(
                'Member registered successfully', // -> mensaje personalizado
                null, // -> campo data es necesario enviar algo, enviar null si solo es mensaje de exito sin datos
                200 // -> codigo de respuesta siguiendo normas
            );
```

## JSON de respuesta exitosa

```json
{
  "success": true,
  "data": null,
  "message": "Member registered successfully"
}
```

## Ejemplo de uso para respuesta de error

```php
<?php

use gabogalro\responseHelpers\Response;

return Response::error(
                'An error occurred while registering the member', // -> mensaje personalizado
                $e->getMessage(), // -> campo de errores, puede ser personalizado o generico
                500 // ->codigo de respuesta siguiendo normas
            );
```

## JSON de respuesta de error

```json
{
  "success": false,
  "message": "An error occurred while registering the member",
  "errors": "Error message"
}
```

## Ejemplo de uso para respuesta que retorna datos

```php
<?php

use gabogalro\responseHelpers\Response;

return Response::success(
                'Members retrieved successfully', // -> mensaje personalizado
                $members, // -> datos que se desean retornar
                200 // -> codigo de respuesta siguiendo normas
            );
```

## JSON de respuesta con datos

```json
{
  "success": true,
  "message": "Members retrieved successfully",
  "data": {
    "MemberFullName": "Gabriel Galindo Romero",
    "MemberAge": 25,
    "MemberPhone": "3125943527",
    "IsMinor": 0,
    "GuardianFullName": null,
    "GuardianPhone": null,
    "JoinDate": "2025-11-26"
  }
}
```

## Ejemplo completo usando try y catch

```php
<?php

use gabogalro\responseHelpers\Response;
use Exception;

//ejemplo de insercion de datos
public function registrarMiembro(){

  try{

    //proceso de registro...

    return Response::success(
                'Member registered successfully',
                null,
                201 // -> codigo de creacion exitosa
            );
  }catch(Exception $e){
    return Response::error(
                'An error occurred while registering the member',
                $e->getMessage(), //
                500 // ->codigo de error de servidor
            );
  }
}

//ejemplo de consulta de datos

public function getMiembro(){

  try{

    //proceso de consulta... guarda datos en variable $member...

    return Response::success(
                'Member retrieved successfully',
                $member,
                200
            );
  }catch(Exception $e){
    return Response::error(
                'An error occurred while consulting the member',
                $e->getMessage(),
                404 // ->codigo de not found
            );
  }
}

## Requisitos previos

- PHP 7.4 o superior
- Composer

## License

MIT © gabogalro. See [LICENSE](LICENSE) for details.
```
