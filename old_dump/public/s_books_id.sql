create sequence s_books_id
    as integer;

alter sequence s_books_id owner to postgres;

alter sequence s_books_id owned by items.item_id;

grant select, update, usage on sequence s_books_id to anon;

grant select, update, usage on sequence s_books_id to authenticated;

grant select, update, usage on sequence s_books_id to service_role;

