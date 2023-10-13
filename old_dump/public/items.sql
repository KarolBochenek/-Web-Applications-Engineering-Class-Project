create table items
(
    item_id     integer default nextval('s_books_id'::regclass) not null
        constraint books_pk
            primary key,
    title       varchar(255),
    description varchar(255),
    genre       varchar(100),
    image       varchar(255)
);

alter table items
    owner to postgres;

grant delete, insert, references, select, trigger, truncate, update on items to anon;

grant delete, insert, references, select, trigger, truncate, update on items to authenticated;

grant delete, insert, references, select, trigger, truncate, update on items to service_role;

