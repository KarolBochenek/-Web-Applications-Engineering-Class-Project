create table users
(
    user_id  integer default nextval('s_users_id'::regclass) not null
        constraint users_pk
            primary key,
    email    varchar(255)                                    not null
        constraint users_email_uk
            unique,
    password varchar(255)                                    not null
);

alter table users
    owner to postgres;

grant delete, insert, references, select, trigger, truncate, update on users to anon;

grant delete, insert, references, select, trigger, truncate, update on users to authenticated;

grant delete, insert, references, select, trigger, truncate, update on users to service_role;

