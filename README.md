Prisma Residences - Plataforma de Gestión Inmobiliaria de Lujo

Prisma Residences es una aplicación web para una agencia inmobiliaria de lujo enfocada en villas y mansiones de lujo y cuyo publico objetivo son tanto extranjeros como personas que viven en España, esta es la razón principal por la que la página web está en inglés. La plataforma conecta a propietarios y compradores con agentes exclusivos, permitiendo la visualización de propiedades premium y la gestión de clientes. 

CARACTERÍSTICAS PRINCIPALES: 

- Inicio: Catálogo con la lista de propiedades de lujo disponibles.
- Vende con nosotros: Formulario para que los propietarios solicitar un agente o contactar con la agencia con el objetivo de saber más información sobre el tema.
-Contacto: Canal directo para compradores interesados en adquirir una propiedad.
- Barra de navegación global: Acceso intuitivo a las secciones de Inicio, Ventas y Contacto.
- Panel de administración para los agentes: Los agentes de la agencia cuentan con un acceso exclusivo mediante una ruta privada del sistema:
   · Autenticación de empleados: Sistema de login seguro para verificar que el usuario es un agente autorizado de la firma.
   · Panel de control: Listado de todas las propiedades que el agente que ha iniciado sesión tiene bajo su gestión.
- Gestor de Publicaciones:
   · Crear: Formulario para añadir nuevas propiedades especificando detalles, precios y otras características.

TECNOLOGÍAS UTILIZADAS:

- Backend & lógica: PHP nativo para el procesamiento de formularios y control de sesiones de agentes.
- Frontend: HTML5 y JavaScript para la interactividad del lado del cliente.
- Base de Datos: MySQL.
- Control de Versiones: Git y GitHub para el seguimiento del código, ramas y flujo de trabajo.

ARQUITECTURA DE LA BASE DE DATOS: 

- Agentes: Datos del personal de la agencia (credenciales de acceso, nombre, contacto).
- Propiedades: Detalles técnicos del inmueble (dirección, metros cuadrados, precio, descripción, clave foránea al agente asignado).
- Fotos de las propiedades: Tabla independiente para gestionar múltiples imágenes por cada propiedad.

ESTADO DEL PROYECTO Y PRÓXIMOS PASOS:

Este proyecto se encuentra en desarrollo activo. Las siguientes características se implementarán próximamente:

- Finalización del CRUD de Administración: Activación de los botones de modificar y eliminar propiedades del panel de control.
- Creación de una tabla para los clientes: Tabla que específica los detalles que dan los clientes a los agentes y los clasifica como vendedores o compradores. 
- CRM de clientes: Listado de posibles clientes, clasificando a las personas que han contactado como compradores o vendedores.
- Diseño Visual: Implementación de la capa estética con CSS para reflejar la identidad visual de una marca de lujo.
