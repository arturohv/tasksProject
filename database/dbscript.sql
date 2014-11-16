CREATE TABLE users
(
  id serial NOT NULL,
  email character varying(100) NOT NULL,
  password character varying(100) NOT NULL,
  remember_token character varying(100),
  CONSTRAINT users_pkey PRIMARY KEY (id)
);

create table tasks(
	id serial NOT NULL PRIMARY KEY,
	userid int not null,
	statusid int NOT NULL,
	description varchar(255) NOT NULL	
);

create table status(
	id serial NOT NULL PRIMARY KEY,
	name varchar(50) NOT NULL
);

alter table tasks
  add constraint fk_tasks_users
  foreign key (userid)
  references users (id);

alter table tasks
  add constraint fk_tasks_status
  foreign key (statusid)
  references status (id);

/*Insert*/
Insert into status (name) values ('Nuevo');
Insert into status (name) values ('En Progreso');
Insert into status (name) values ('Finalizado');
Insert into status (name) values ('Verificado');