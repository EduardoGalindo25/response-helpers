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

```php
<?php

use gabogalro\responseHelpers\Response;

return Response::success(
                'Member registered successfully',
                200
            );
```

## JSON de respuesta exitosa

```json
{
  "success": true,
  "message": "Member registered successfully"
}
```

## Ejemplo de uso para respuesta de error

```php
<?php

use gabogalro\responseHelpers\Response;

return Response::error(
                'An error occurred while registering the member',
                $e->getMessage(),
                500
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
                'Members retrieved successfully',
                $members,
                200
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

## Requisitos previos

- PHP 5.4 o superior
- Composer

## License

MIT © gabogalro. See [LICENSE](LICENSE) for details.
