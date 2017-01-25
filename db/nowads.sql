create database nowads;

use nowads;

create table na_role(
	role_id int auto_increment not null,
	created timestamp not null default current_timestamp,
	updated timestamp not null,
	name varchar(60) not null,
	isactive char(1) not null default 'Y',
	constraint pk_role_id primary key (role_id)
)engine = InnoDB;

create table na_user(
	user_id int auto_increment not null,
	role_id int not null,
	created timestamp not null default current_timestamp,
	updated timestamp not null,
	first_name varchar(40) not null,
	last_name varchar(40) not null,
	username varchar(30) not null,
	email varchar(255) not null,
	phone varchar(30) not null,
	password varchar(100) not null,
	isactive char(1) not null default 'Y',
	constraint pk_user_id primary key (user_id),
	constraint fk_role_id foreign key (role_id) references na_role (role_id) on update cascade on delete restrict
)engine = InnoDB;

create table na_web(
	web_id int auto_increment not null,
	user_id int not null,
	created timestamp not null default current_timestamp,
	updated timestamp not null,
	name varchar(60) not null,
	url varchar(255) not null,
	blockdays int not null default 1,
	webkey varchar(100) not null,
	isactive char(1) not null default 'Y',
	constraint pk_web_id primary key (web_id),
	constraint fk_user_id foreign key (user_id) references na_user (user_id) on update cascade on delete restrict
)engine = InnoDB;

create table na_click(
	click_id int auto_increment not null,
	web_id int not null,
	created timestamp not null default current_timestamp,
	ip varchar(30) not null,
	country_code varchar(10) not null,
	country varchar(60) not null,
	city varchar(60) not null,
	lat varchar(30) not null,
	lon varchar(30) not null,
	constraint pk_click_id primary key (click_id),
	constraint fk_web_id foreign key (web_id) references na_web (web_id) on update cascade on delete restrict
)engine = InnoDB;