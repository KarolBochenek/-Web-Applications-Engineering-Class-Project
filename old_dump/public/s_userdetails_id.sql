create sequence s_userdetails_id
    as integer;

alter sequence s_userdetails_id owner to postgres;

alter sequence s_userdetails_id owned by user_details.user_id;

grant select, update, usage on sequence s_userdetails_id to anon;

grant select, update, usage on sequence s_userdetails_id to authenticated;

grant select, update, usage on sequence s_userdetails_id to service_role;

