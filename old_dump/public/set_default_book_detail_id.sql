create function set_default_book_detail_id() returns trigger
    language plpgsql
as
$$
BEGIN
    NEW.id = nextval('s_books_details_id');
    RETURN NEW;
END;
$$;

alter function set_default_book_detail_id() owner to postgres;

grant execute on function set_default_book_detail_id() to anon;

grant execute on function set_default_book_detail_id() to authenticated;

grant execute on function set_default_book_detail_id() to service_role;

