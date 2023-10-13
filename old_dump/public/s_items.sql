create sequence s_items
    as integer
    maxvalue 25555;

alter sequence s_items owner to postgres;

grant select, update, usage on sequence s_items to anon;

grant select, update, usage on sequence s_items to authenticated;

grant select, update, usage on sequence s_items to service_role;

