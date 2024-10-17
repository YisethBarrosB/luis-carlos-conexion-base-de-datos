create database restaurante_mvc;
use restaurante_mvc;
create table platos(
id int auto_increment primary key,
plato varchar(45) not null,
preparacion text not null,
imagen text default  './img/default.png',
estado boolean default true
);
insert into platos (plato, preparacion, imagen)
values ('Bucatini a la Amatriciana','En una olla grande con agua hirviendo y sal, cocina la pasta hasta que esté al dente según las indicaciones del paquete. Reserva 1/2 taza de agua de la pasta antes de escurrirla.',
'https://hips.hearstapps.com/hmg-prod/images/delish-bucatinipasta-045-ls-1662419866-65255142713fb.jpeg?crop=1xw:1xh;center,top&resize=980:*'
),
('Cacio e Pepe',
'En una olla grande de agua hirviendo con sal, cocina la pasta hasta que esté al dente según las instrucciones del paquete. Reserva 2/3 de taza de agua de la pasta antes de escurrirla.',
'https://hips.hearstapps.com/hmg-prod/images/delish-cacio-e-pepe-vertical-1662413601-6523d3530a508.jpg?crop=1xw:1xh;center,top&resize=980:*'
),
('Pasta Puttanesca',
'En una sartén grande a fuego medio, calienta el aceite. Agrega el ajo y cocina hasta que esté fragante, aproximadamente 1 minuto. Añade las anchoas y cocina hasta que estén fragantes, 1 minuto más. Agrega los tomates, las aceitunas, las alcaparras y los copos de pimienta roja. Lleva a ebullición, luego reduce el fuego y deja que hierva a fuego lento durante 15 minutos.',
'https://hips.hearstapps.com/hmg-prod/images/singleimagebug-pasta-puttanesca-pin-1549421288-6525505b88500.jpg?crop=1xw:1xh;center,top&resize=980:*'
),
('Crema de pollo Marsala',
'Seca el pollo y retira el filete de las pechugas. Abre cada pechuga en mariposa y separa las mitades abiertas para crear 4-6 piezas finas. Sazona ambos lados del pollo con pimienta, condimento italiano y 1 1/2 cucharaditas de sal.',
'https://hips.hearstapps.com/hmg-prod/images/del069923-chicken-marsala-004-secondary-6523d193d15a1.jpg?crop=1xw:1xh;center,top&resize=980:*'
);
ALTER TABLE platos CHANGE plato nombre_plato VARCHAR(45) NOT NULL;