PGDMP                     	    {           postgres    15.4    15.4 
    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    5    postgres    DATABASE     {   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Polish_Poland.1250';
    DROP DATABASE postgres;
                postgres    false            �           0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                   postgres    false    3323                        3079    16384 	   adminpack 	   EXTENSION     A   CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;
    DROP EXTENSION adminpack;
                   false            �           0    0    EXTENSION adminpack    COMMENT     M   COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';
                        false    2            �            1259    16398    users    TABLE     �   CREATE TABLE public.users (
    user_id integer NOT NULL,
    name character varying(100) NOT NULL,
    surname character varying(100) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL
);
    DROP TABLE public.users;
       public         heap    postgres    false            �          0    16398    users 
   TABLE DATA           H   COPY public.users (user_id, name, surname, email, password) FROM stdin;
    public          postgres    false    215   *	       f           2606    16404    users users_pk 
   CONSTRAINT     Q   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pk PRIMARY KEY (user_id);
 8   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pk;
       public            postgres    false    215            �   -   x�3��J����/O�)�΄3
��RSJ�
r8Sr3�b���� f?�     