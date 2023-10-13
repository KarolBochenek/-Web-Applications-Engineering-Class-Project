create table authors
(
    author_id integer default nextval('s_authors_id'::regclass) not null
        constraint authors_pk
            primary key,
    name      varchar(255)
);

alter table authors
    owner to postgres;

grant delete, insert, references, select, trigger, truncate, update on authors to anon;

grant delete, insert, references, select, trigger, truncate, update on authors to authenticated;

grant delete, insert, references, select, trigger, truncate, update on authors to service_role;

