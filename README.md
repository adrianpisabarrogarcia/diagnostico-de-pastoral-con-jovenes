# Herramienta de diagnóstico para la Pastoral Juvenil
## ¿De qué trata este repo y qué tecnolodías utiliza?
Es básicamente una serie de formularios realizados en PHP, donde los datos son guardados en una base de datos relacional de tipo MySQL y después de rellenar el formulario, obtenemos unos gráficos realizados en JS. Para el proyecto también se utilizar Bootstrap.
## TodoList
- [✅] Formularios
- [✅] Meta para posición de Google
- [] Ocultar los .php
- [✅] Página de resultados
- [✅] Explicación del README.md
- [✅] Exportación de la base de datos

## Proceso para poner en producción
1. Poner este repositio en la carpeta correspondiente del servidor. Recomendable usar un subdominio como https://diagnostico.rpj.es.
2. Ir al archivo `./nav/header.php` y cambiar la línea 8 por:  
- Si la url es https://diagnostico.rpj.es/, poner:
```php
define("BASEURL", "/");
```
- Si la url es https://rpj.es/diagnostico/, poner:
```php
define("BASEURL", "/diagnostico");
```
3. Montar una base datos MySQL/MariaDB, puede ser con el nombre `diagnosticopastoral`, con su usuario y password correspondientes.
4. Cargar el script `./DiagnosticoPastoral.sql` en la base de datos.
5. Configurar la base de datos en el archivo `./conexionBBDD.php` en las líneas 6, 7, 8, y 9, con sus respectivos datos:
```php
function parametrosConexion(){
    return [
        "host" => "192.168.64.2:3306",
        "database" => "diagnosticopastoral",
        "username" => "username",
        "password" => "password"
    ];
}
```
6. Borrar los siguientes archivos de la carpeta del servidor:
- `DiagnosticoPastoral.sql`
- `grafico.xlsx`
- `HerramientaRedPJ.xlsm`
- `.gitignore`
- `.git` (si la hay)

