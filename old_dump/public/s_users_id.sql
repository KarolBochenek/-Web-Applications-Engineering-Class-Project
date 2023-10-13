create sequence s_users_id
    as integer;

alter sequence s_users_id owner to postgres;

alter sequence s_users_id owned by users.user_id;

grant select, update, usage on sequence s_users_id to anon;

grant select, update, usage on sequence s_users_id to authenticated;

grant select, update, usage on sequence s_users_id to service_role;

