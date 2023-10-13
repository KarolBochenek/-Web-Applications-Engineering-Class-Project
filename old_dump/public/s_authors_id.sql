create sequence s_authors_id
    as integer;

alter sequence s_authors_id owner to postgres;

alter sequence s_authors_id owned by authors.author_id;

grant select, update, usage on sequence s_authors_id to anon;

grant select, update, usage on sequence s_authors_id to authenticated;

grant select, update, usage on sequence s_authors_id to service_role;

