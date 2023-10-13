create table user_details
(
    user_id integer default nextval('s_userdetails_id'::regclass) not null
        constraint userdetails_py
            primary key
        constraint userdetails_user_id_fk
            references users
            on update cascade on delete cascade,
    name    varchar(255)                                          not null,
    surname varchar(255)                                          not null
);

alter table user_details
    owner to postgres;

grant delete, insert, references, select, trigger, truncate, update on user_details to anon;

grant delete, insert, references, select, trigger, truncate, update on user_details to authenticated;

grant delete, insert, references, select, trigger, truncate, update on user_details to service_role;

