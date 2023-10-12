create table users
(
    user_id  integer      not null
        constraint users_pk
            primary key,
    name     varchar(100) not null,
    surname  varchar(100) not null,
    email    varchar(255) not null,
    password varchar(255) not null
);

alter table users
    owner to postgres;


