-- BUSINESS CARD-- Tarjeta Digital Inolab Especialistas 2024-- SCHEMACREATE SCHEMA IF NOT EXISTS business_card;USE business_card;CREATE TABLE IF NOT EXISTS division(    id          int auto_increment primary key not null,    description varchar(200)                   not null,    icon        varchar(200)                   default null,    registeredAt date default null,    status      int default 1)CREATE TABLE IF NOT EXISTS area(    id           int auto_increment primary key not null,    description  varchar(200)                   not null,    registeredAt date default null,    status       int  default 1)CREATE TABLE IF NOT EXISTS user(    id           int auto_increment primary key not null,    uuid         text default null,    token        text default null,    name         varchar(200)                   not null,    phone        varchar(20)                    not null,    email        varchar(200)                   not null,    photo        varchar(200)                   not null,    divisionId   int                            default 0,    areaId       int                            default 0,    registeredAt date default null,    status       int  default 1,    FOREIGN KEY (divisionId) REFERENCES division (id),    FOREIGN KEY (areaId) REFERENCES area (id))-- STORED PROCEDURES