create table books_authors
(
    book_id   integer not null
        constraint booksauthors_book_id_fk
            references items
            on update cascade on delete cascade,
    author_id integer not null
        constraint booksauthors_author_id_fk
            references authors
            on update cascade on delete cascade,
    constraint booksauthors_pk
        primary key (book_id, author_id)
);

alter table books_authors
    owner to postgres;

grant delete, insert, references, select, trigger, truncate, update on books_authors to anon;

grant delete, insert, references, select, trigger, truncate, update on books_authors to authenticated;

grant delete, insert, references, select, trigger, truncate, update on books_authors to service_role;

