create function prevent_null_book_author_id() returns trigger
    language plpgsql
as
$$
BEGIN
    NEW.book_author_id = nextval('s_books_authors_id');
    RETURN NEW;
END;
$$;

alter function prevent_null_book_author_id() owner to postgres;

grant execute on function prevent_null_book_author_id() to anon;

grant execute on function prevent_null_book_author_id() to authenticated;

grant execute on function prevent_null_book_author_id() to service_role;

