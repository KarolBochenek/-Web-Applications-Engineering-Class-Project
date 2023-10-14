create table books_details
(
    book_id   integer
        constraint books_details_items_item_id_fk
            references items,
    pages     integer,
    publisher varchar(100),
    isbn      varchar(100),
    condition varchar(100),
    id        integer not null
        constraint books_details_pk
            primary key
);

alter table books_details
    owner to postgres;

create trigger trigger_set_default_book_detail_id
    before insert
    on books_details
    for each row
execute procedure set_default_book_detail_id();

grant delete, insert, references, select, trigger, truncate, update on books_details to anon;

grant delete, insert, references, select, trigger, truncate, update on books_details to authenticated;

grant delete, insert, references, select, trigger, truncate, update on books_details to service_role;

