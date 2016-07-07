/*drop database if exists lpw3;*/

create database lpw3;

use lpw3;

create table usuarios(
	Id integer primary key auto_increment,
    Nome varchar(50),
    Email varchar(50),
    Senha varchar(50)
);

create table receitas(
	Id integer primary key auto_increment,
    Id_usuario integer,
    Titulo varchar(50),
    Modo_preparo varchar(1000),
		FOREIGN KEY (Id_usuario)
		REFERENCES usuarios(Id)
);

create table ingrediente(
	Id integer primary key auto_increment,
    Id_usuario integer,
    Nome varchar(50),
    Peso double,
    Carboidratos double,
    Kcal double,
    Proteinas double,
    Gorduras double,
    Fibras double,
    Sodio double,
    	FOREIGN KEY (Id_usuario)
		REFERENCES usuarios(Id)
);

create table unidadesMedida(
	Id integer primary key auto_increment,
    Descricao varchar(50),
    Sigla varchar(50)
);

create table porcao(
	Id_medida integer,
    Id_ingrediente integer,
    Peso double,
    	FOREIGN KEY (Id_medida)
		REFERENCES unidadesMedida(Id),
		
        FOREIGN KEY (Id_ingrediente)
		REFERENCES ingrediente(Id)
);

create table item(
	Id integer primary key auto_increment,
    Id_receita integer,
    Id_medida integer,
    Id_ingrediente integer,
    Quantidade integer,
    	FOREIGN KEY (Id_receita)
		REFERENCES receitas(Id),
        
		FOREIGN KEY (Id_medida)
		REFERENCES unidadesMedida(Id),
        
		FOREIGN KEY (Id_ingrediente)
		REFERENCES ingrediente(Id)
); 





