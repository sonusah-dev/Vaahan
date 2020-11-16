create database vaahan_seva;

create table owner(
    id int not null auto_increment primary key,
    first_name varchar(100) not null,
    last_name varchar(100) not null,
    phone bigint not null,
    email varchar(100) unique key,
    id_proof blob NOT NULL,
    street varchar(100) not null,
    city varchar(100) not null, 
    pincode int not null,
    state varchar(100) not null,   
    temp_street varchar(100) not null,
    temp_city varchar(100) not null, 
    temp_pincode int not null,
    temp_state varchar(100) not null
);

create table driver(
    id int not null auto_increment primary key,
    first_name varchar(100) not null,
    last_name varchar(100) not null,
    phone bigint not null,
    emergency_number bigint not null,
    licence_number int not null,
    licence_expiry_date date not null,
    driving_experience bit not null,
    job_status bit not null,
    email varchar(100) unique key,
    id_proof blob not null,
    street varchar(100) not null,
    city varchar(100) not null, 
    pincode int not null,
    state varchar(100) not null,   
    temp_street varchar(100) not null,
    temp_city varchar(100) not null, 
    temp_pincode int not null,
    temp_state varchar(100) not null
);

create table vehicle(
    id int not null auto_increment primary key,
    vehicle_number varchar(100) not null,
    chasis_number varchar(100) not null,
    vehicle_model varchar(100) not null,
    operational_type tinyint not null,
    engine_type tinyint not null,
    tyres tinyint not null,
    driver tinyint not null,
    vehicle_capacity int not null,
    avg_load int not null,
    max_load int not null,
    owner_id int not null
);

create table document(
    id int not null auto_increment primary key,
    vehicle_id INT NOT NULL,
    name varchar(100) not null,
    document blob not null,
    renew_date date not null,
    expiry_date date not null,
    web_portal varchar(100),
    android_portal varchar(100),
    username varchar(100),
    password varchar(100)
);

CREATE TABLE vehicle_driver(
    id INT NOT NULL auto_increment PRIMARY KEY,
    vehicle_id INT NOT NULL,
    driver_id INT NOT NULL,
    joining_date DATE NOT NULL,
    left_date DATE NOT NULL,
    driver_status BIT NOT NULL,
    craeted_on DATE NOT NULL
);

CREATE TABLE user(
    id INT NOT NULL auto_increment PRIMARY KEY,
    first_name varchar(100) not null,
    last_name varchar(100) not null,
    phone bigint not null,
    email varchar(100) unique key,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);


