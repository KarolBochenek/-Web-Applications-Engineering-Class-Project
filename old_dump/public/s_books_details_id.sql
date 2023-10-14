create sequence s_books_details_id
    as integer
    start with 6
    minvalue 2
    maxvalue 999;

alter sequence s_books_details_id owner to postgres;

alter sequence s_books_details_id owned by books_details.id;

grant select, update, usage on sequence s_books_details_id to anon;

grant select, update, usage on sequence s_books_details_id to authenticated;

grant select, update, usage on sequence s_books_details_id to service_role;

