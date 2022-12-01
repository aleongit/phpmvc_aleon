/*borra db si existeix*/
DROP DATABASE IF EXISTS phpmvc;

CREATE DATABASE phpmvc;
use phpmvc;

/*users*/
DROP USER IF EXISTS 'phpmvc'@'localhost';
CREATE USER 'phpmvc'@'localhost' IDENTIFIED BY '1234';
/*GRANT type_of_permission ON database_name.table_name TO 'username'@'localhost';*/
GRANT ALL PRIVILEGES ON phpmvc.* TO 'phpmvc'@'localhost' with grant option;
FLUSH PRIVILEGES;
SHOW GRANTS FOR 'phpmvc'@'localhost';

CREATE TABLE usuaris(
id          int(255) auto_increment not null,
nom         varchar(100) not null,
cognoms     varchar(100) not null,
email       varchar(255) not null,
password    varchar(255) not null,
data        date not null,
CONSTRAINT pk_usuaris PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE notes(
id             int(255) auto_increment not null,
usuari_id      int(255) not null,
titol          varchar(255) not null,
descripcio     MEDIUMTEXT,
data           date not null,
CONSTRAINT pk_notes PRIMARY KEY(id),
CONSTRAINT fk_nota_usuari FOREIGN KEY(usuari_id) REFERENCES usuaris(id)
)ENGINE=InnoDb;

/*valors*/
/*users*/
insert into usuaris values (null, 'Pepeta','Riudecols Fontseca', 'pepeta@gmail.com', '1234', current_date() );
insert into usuaris values (null, 'Pepet','Botifler Caganous', 'pepet@gmail.com', '1234', current_date() );

/*notes*/
insert into notes values ( null, 1,
"El tomàquet es planta", 
"Està fins els 'pebrots' de ser vermell. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum placerat finibus. In est lectus, ornare sed bibendum finibus, commodo sit amet lacus. Ut hendrerit nisl massa, id volutpat mi viverra vehicula. Suspendisse sed urna id justo pellentesque sagittis. Cras sed luctus ligula. In ac quam quis turpis sodales interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum hendrerit elit risus, et consequat dui mattis in. Nam et tincidunt diam. Proin in varius neque. Sed mattis pellentesque sodales. Quisque sagittis laoreet dolor eu condimentum. Fusce finibus vulputate velit vitae pellentesque.",
 current_date() );
 
insert into notes values ( null, 2, 
"Llimones en vaga", 
"KAOS mundial per falta de llimonada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum placerat finibus. In est lectus, ornare sed bibendum finibus, commodo sit amet lacus. Ut hendrerit nisl massa, id volutpat mi viverra vehicula. Suspendisse sed urna id justo pellentesque sagittis. Cras sed luctus ligula. In ac quam quis turpis sodales interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum hendrerit elit risus, et consequat dui mattis in. Nam et tincidunt diam. Proin in varius neque. Sed mattis pellentesque sodales. Quisque sagittis laoreet dolor eu condimentum. Fusce finibus vulputate velit vitae pellentesque.",
 current_date() );

insert into notes values ( null, 1,  
"Tutorial Pastanagues", "Fes el teu manat de pastanagues des de 0. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque interdum placerat finibus. In est lectus, ornare sed bibendum finibus, commodo sit amet lacus. Ut hendrerit nisl massa, id volutpat mi viverra vehicula. Suspendisse sed urna id justo pellentesque sagittis. Cras sed luctus ligula. In ac quam quis turpis sodales interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum hendrerit elit risus, et consequat dui mattis in. Nam et tincidunt diam. Proin in varius neque. Sed mattis pellentesque sodales. Quisque sagittis laoreet dolor eu condimentum. Fusce finibus vulputate velit vitae pellentesque.",
current_date() );

insert into notes values ( null, 2,
"Nova Guerra Mundial de castanyes", "Les castanyes declaren la guerra a Rússia i a la Xina.
Avistades un exèrcit de castanyes a la frontera amb Kazajistán.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet turpis arcu. Morbi ullamcorper sollicitudin metus, ut vehicula neque. Proin convallis pulvinar orci. Nunc at velit sit amet nisi sollicitudin pellentesque. Nam non augue in magna suscipit aliquam. In ut dictum velit, id malesuada est. Sed pharetra tempus eros non pellentesque. Aliquam eu turpis porttitor, suscipit felis in, blandit libero. Donec bibendum sodales ex. Nam vehicula varius eros. Morbi egestas sollicitudin neque, at dignissim ipsum aliquam quis. Etiam hendrerit elit dolor, et consectetur tortor ullamcorper nec. In facilisis velit metus, pellentesque aliquet purus pretium et. Ut vulputate tortor orci, sit amet semper leo mollis eget.",
current_date() );