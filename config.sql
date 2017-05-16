use inventario_sena;
alter table `torre` add estado varchar(20) null after torre_teclado;
alter table `equipo_computo` add estado varchar(20) null  after ubicacion;
alter table `monitor` add estado varchar(20) null  after ubicacion;
alter table `mouse` add estado varchar(20) null  after ubicacion;
alter table `teclado` add estado varchar(20) null  after ubicacion;
/*este  documento agrega un campo  "estado" a las tablas  `torre`, `equipo_computo`,`mouse`, `monitor` y `teclado`
por favor importar a la  base de datos en el servidor */