create table books_authors
(
    book_author_id integer not null
        constraint books_authors_pk
            primary key,
    book_id        integer not null
        constraint booksauthors_book_id_fk
            references items
            on update cascade on delete cascade,
    author_id      integer not null
        constraint booksauthors_author_id_fk
            references authors
            on update cascade on delete cascade

);

alter table books_authors
    owner to postgres;

create trigger trigger_prevent_null_book_author_id
    before insert
    on books_authors
    for each row
execute procedure prevent_null_book_author_id();

grant delete, insert, references, select, trigger, truncate, update on books_authors to anon;

grant delete, insert, references, select, trigger, truncate, update on books_authors to authenticated;

grant delete, insert, references, select, trigger, truncate, update on books_authors to service_role;

