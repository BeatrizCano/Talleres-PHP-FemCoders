Parte 1:
Mostrar todos los libros disponibles en la tienda:
SELECT * FROM `libros` WHERE 1

Mostrar todos los clientes registrados en la base de datos:
SELECT * FROM `clientes` WHERE 1

Mostrar todas las ventas realizadas hasta el momento:
SELECT * FROM `ventas` WHERE 1


Parte 2:
Obtener el precio promedio de los libros de un género específico: 
SELECT AVG(precio) AS precio_promedio
FROM Libros
WHERE género = 'género_específico'

Mostrar los libros vendidos en un rango de fechas determinado:
SELECT Ventas.*, Libros.titulo
FROM Ventas
JOIN Libros ON Ventas.id_libro = Libros.id
WHERE Ventas.fecha BETWEEN 'fecha_inicio' AND 'fecha_fin'

Obtener el cliente que más compras ha realizado:
SELECT Clientes.*, COUNT(Ventas.id_venta) AS total_compras
FROM Clientes
JOIN Ventas ON Clientes.id_cliente = Ventas.id_cliente
GROUP BY Clientes.id_cliente
HAVING COUNT(Ventas.id_venta) = (
    SELECT MAX(compras)
    FROM (
        SELECT COUNT(id_venta) AS compras
        FROM Ventas
        GROUP BY id_cliente
    ) AS subquery
);


Parte 3:
Insertar un nuevo libro en la base de datos:
INSERT INTO libros (titulo, autor, genero, precio) 
VALUES ('Los Tres Mosqueteros', 'Alejandro Dumas', 'Aventuras', 10)

Actualizar el precio de un libro existente:
UPDATE libros
SET precio = 7
WHERE titulo = 'Los Tres Mosqueteros'

Registrar una nueva venta en la base de datos:
INSERT INTO Ventas (id_libro, id_cliente, fecha, cantidad)
VALUES (1, id_cliente, '2023-07-07', cantidad);


Parte 4:
Haz el modelo relacional de las entidades:

Entidad "Libros":
- Atributos: id (clave primaria), titulo, autor, genero, precio

Entidad "Clientes":
- Atributos: id_cliente (clave primaria), nombre, direccion, correo_electronico, telefono

Entidad "Ventas":
- Atributos: id_venta (clave primaria), id_libro (clave foránea referenciando a la tabla
"Libros"), id_cliente (clave foránea referenciando a la tabla "Clientes"), fecha, cantidad

Relaciones:
- La tabla "Ventas" tiene una relación con la tabla "Libros" mediante la clave foránea
id_libro, que referencia al atributo id en la tabla "Libros".
- La tabla "Ventas" tiene una relación con la tabla "Clientes" mediante la clave foránea
id_cliente, que referencia al atributo id_cliente en la tabla "Clientes".

El modelo relacional representa la estructura y las relaciones entre las entidades y sus
atributos en forma de tablas. Cada tabla representa una entidad y los atributos se 
convierten en columnas en las tablas. Las relaciones se establecen mediante claves primarias
y foráneas.


Parte 5 Desafio extra:
Mostrar los libros más vendidos en orden descendente.
SELECT Libros.titulo, COUNT(Ventas.id_venta) AS total_ventas
FROM Libros
JOIN Ventas ON Libros.id = Ventas.id_libro
GROUP BY Libros.id
ORDER BY total_ventas DESC

Calcular el total de ventas y el promedio de ventas diarias:
SELECT COUNT(*) AS total_ventas, AVG(ventas_diarias) AS promedio_ventas_diarias
FROM (
    SELECT DATE(fecha) AS fecha_venta, COUNT(*) AS ventas_diarias
    FROM Ventas
    GROUP BY DATE(fecha)
) AS subquery








