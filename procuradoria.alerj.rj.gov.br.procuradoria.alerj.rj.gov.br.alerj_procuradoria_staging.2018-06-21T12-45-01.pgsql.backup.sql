--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.12
-- Dumped by pg_dump version 9.5.12

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

ALTER TABLE ONLY public.taggables DROP CONSTRAINT taggables_tag_id_foreign;
DROP INDEX public.revisions_revisionable_id_revisionable_type_index;
DROP INDEX public.password_resets_email_index;
ALTER TABLE ONLY public.users DROP CONSTRAINT users_username_unique;
ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
ALTER TABLE ONLY public.tribunais DROP CONSTRAINT tribunais_pkey;
ALTER TABLE ONLY public.tribunais DROP CONSTRAINT tribunais_abreviacao_unique;
ALTER TABLE ONLY public.tipos_usuarios DROP CONSTRAINT tipos_usuarios_pkey;
ALTER TABLE ONLY public.tipos_prazos DROP CONSTRAINT tipos_prazos_pkey;
ALTER TABLE ONLY public.tipos_juizes DROP CONSTRAINT tipos_juizes_pkey;
ALTER TABLE ONLY public.tipos_entradas DROP CONSTRAINT tipos_entradas_pkey;
ALTER TABLE ONLY public.tipos_andamentos DROP CONSTRAINT tipos_andamentos_pkey;
ALTER TABLE ONLY public.tags DROP CONSTRAINT tags_pkey;
ALTER TABLE ONLY public.revisions DROP CONSTRAINT revisions_pkey;
ALTER TABLE ONLY public.processos DROP CONSTRAINT processos_pkey;
ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
ALTER TABLE ONLY public.meios DROP CONSTRAINT meios_pkey;
ALTER TABLE ONLY public.leis DROP CONSTRAINT leis_pkey;
ALTER TABLE ONLY public.juizes DROP CONSTRAINT juizes_pkey;
ALTER TABLE ONLY public.apensos DROP CONSTRAINT apensos_pkey;
ALTER TABLE ONLY public.andamentos DROP CONSTRAINT andamentos_pkey;
ALTER TABLE ONLY public.acoes DROP CONSTRAINT acoes_pkey;
ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.tribunais ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.tipos_usuarios ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.tipos_prazos ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.tipos_juizes ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.tipos_entradas ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.tipos_andamentos ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.tags ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.revisions ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.processos ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.meios ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.leis ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.juizes ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.apensos ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.andamentos ALTER COLUMN id DROP DEFAULT;
ALTER TABLE public.acoes ALTER COLUMN id DROP DEFAULT;
DROP SEQUENCE public.users_id_seq;
DROP TABLE public.users;
DROP SEQUENCE public.tribunais_id_seq;
DROP TABLE public.tribunais;
DROP SEQUENCE public.tipos_usuarios_id_seq;
DROP TABLE public.tipos_usuarios;
DROP SEQUENCE public.tipos_prazos_id_seq;
DROP TABLE public.tipos_prazos;
DROP SEQUENCE public.tipos_juizes_id_seq;
DROP TABLE public.tipos_juizes;
DROP SEQUENCE public.tipos_entradas_id_seq;
DROP TABLE public.tipos_entradas;
DROP SEQUENCE public.tipos_andamentos_id_seq;
DROP TABLE public.tipos_andamentos;
DROP SEQUENCE public.tags_id_seq;
DROP TABLE public.tags;
DROP TABLE public.taggables;
DROP SEQUENCE public.revisions_id_seq;
DROP TABLE public.revisions;
DROP SEQUENCE public.processos_id_seq;
DROP TABLE public.processos;
DROP TABLE public.password_resets;
DROP SEQUENCE public.migrations_id_seq;
DROP TABLE public.migrations;
DROP SEQUENCE public.meios_id_seq;
DROP TABLE public.meios;
DROP SEQUENCE public.leis_id_seq;
DROP TABLE public.leis;
DROP SEQUENCE public.juizes_id_seq;
DROP TABLE public.juizes;
DROP SEQUENCE public.apensos_id_seq;
DROP TABLE public.apensos;
DROP SEQUENCE public.andamentos_id_seq;
DROP TABLE public.andamentos;
DROP SEQUENCE public.acoes_id_seq;
DROP TABLE public.acoes;
DROP EXTENSION plpgsql;
DROP SCHEMA public;
--
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: acoes; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.acoes (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    abreviacao character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.acoes OWNER TO forge;

--
-- Name: acoes_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.acoes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.acoes_id_seq OWNER TO forge;

--
-- Name: acoes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.acoes_id_seq OWNED BY public.acoes.id;


--
-- Name: andamentos; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.andamentos (
    id integer NOT NULL,
    processo_id integer NOT NULL,
    tipo_andamento_id integer NOT NULL,
    tipo_entrada_id integer NOT NULL,
    tipo_prazo_id integer,
    data_prazo timestamp(0) without time zone,
    data_entrega timestamp(0) without time zone,
    observacoes text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.andamentos OWNER TO forge;

--
-- Name: andamentos_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.andamentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.andamentos_id_seq OWNER TO forge;

--
-- Name: andamentos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.andamentos_id_seq OWNED BY public.andamentos.id;


--
-- Name: apensos; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.apensos (
    processo_id integer NOT NULL,
    apensado_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id integer NOT NULL
);


ALTER TABLE public.apensos OWNER TO forge;

--
-- Name: apensos_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.apensos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.apensos_id_seq OWNER TO forge;

--
-- Name: apensos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.apensos_id_seq OWNED BY public.apensos.id;


--
-- Name: juizes; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.juizes (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    lotacao_id integer NOT NULL,
    tipo_juiz_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.juizes OWNER TO forge;

--
-- Name: juizes_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.juizes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.juizes_id_seq OWNER TO forge;

--
-- Name: juizes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.juizes_id_seq OWNED BY public.juizes.id;


--
-- Name: leis; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.leis (
    id integer NOT NULL,
    numero_lei character varying(255),
    autor character varying(255),
    assunto character varying(255),
    link character varying(255),
    processo_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.leis OWNER TO forge;

--
-- Name: leis_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.leis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.leis_id_seq OWNER TO forge;

--
-- Name: leis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.leis_id_seq OWNED BY public.leis.id;


--
-- Name: meios; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.meios (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.meios OWNER TO forge;

--
-- Name: meios_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.meios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.meios_id_seq OWNER TO forge;

--
-- Name: meios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.meios_id_seq OWNED BY public.meios.id;


--
-- Name: migrations; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO forge;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO forge;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_resets; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO forge;

--
-- Name: processos; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.processos (
    id integer NOT NULL,
    numero_judicial text,
    numero_alerj text,
    tribunal_id integer,
    vara character varying(255),
    data_distribuicao timestamp(0) without time zone,
    acao_id integer NOT NULL,
    relator_id integer,
    apensos_obs text,
    juiz_id integer,
    autor character varying(255),
    reu character varying(255),
    objeto text,
    merito text,
    liminar text,
    recurso text,
    procurador_id integer,
    estagiario_id integer,
    assessor_id integer,
    tipo_meio_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    observacao character varying(255),
    data_arquivamento date,
    observacao_arquivamento character varying(255),
    link character varying(2048)
);


ALTER TABLE public.processos OWNER TO forge;

--
-- Name: processos_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.processos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.processos_id_seq OWNER TO forge;

--
-- Name: processos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.processos_id_seq OWNED BY public.processos.id;


--
-- Name: revisions; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.revisions (
    id integer NOT NULL,
    revisionable_type character varying(255) NOT NULL,
    revisionable_id integer NOT NULL,
    user_id integer,
    key character varying(255) NOT NULL,
    old_value text,
    new_value text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.revisions OWNER TO forge;

--
-- Name: revisions_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.revisions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.revisions_id_seq OWNER TO forge;

--
-- Name: revisions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.revisions_id_seq OWNED BY public.revisions.id;


--
-- Name: taggables; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.taggables (
    tag_id integer NOT NULL,
    taggable_id integer NOT NULL,
    taggable_type character varying(255) NOT NULL
);


ALTER TABLE public.taggables OWNER TO forge;

--
-- Name: tags; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.tags (
    id integer NOT NULL,
    name json NOT NULL,
    slug json NOT NULL,
    type character varying(255),
    order_column integer,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tags OWNER TO forge;

--
-- Name: tags_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.tags_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tags_id_seq OWNER TO forge;

--
-- Name: tags_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.tags_id_seq OWNED BY public.tags.id;


--
-- Name: tipos_andamentos; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.tipos_andamentos (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tipos_andamentos OWNER TO forge;

--
-- Name: tipos_andamentos_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.tipos_andamentos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_andamentos_id_seq OWNER TO forge;

--
-- Name: tipos_andamentos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.tipos_andamentos_id_seq OWNED BY public.tipos_andamentos.id;


--
-- Name: tipos_entradas; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.tipos_entradas (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tipos_entradas OWNER TO forge;

--
-- Name: tipos_entradas_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.tipos_entradas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_entradas_id_seq OWNER TO forge;

--
-- Name: tipos_entradas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.tipos_entradas_id_seq OWNED BY public.tipos_entradas.id;


--
-- Name: tipos_juizes; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.tipos_juizes (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tipos_juizes OWNER TO forge;

--
-- Name: tipos_juizes_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.tipos_juizes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_juizes_id_seq OWNER TO forge;

--
-- Name: tipos_juizes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.tipos_juizes_id_seq OWNED BY public.tipos_juizes.id;


--
-- Name: tipos_prazos; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.tipos_prazos (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tipos_prazos OWNER TO forge;

--
-- Name: tipos_prazos_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.tipos_prazos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_prazos_id_seq OWNER TO forge;

--
-- Name: tipos_prazos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.tipos_prazos_id_seq OWNED BY public.tipos_prazos.id;


--
-- Name: tipos_usuarios; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.tipos_usuarios (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.tipos_usuarios OWNER TO forge;

--
-- Name: tipos_usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.tipos_usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_usuarios_id_seq OWNER TO forge;

--
-- Name: tipos_usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.tipos_usuarios_id_seq OWNED BY public.tipos_usuarios.id;


--
-- Name: tribunais; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.tribunais (
    id integer NOT NULL,
    nome character varying(255) NOT NULL,
    url_api character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    abreviacao character varying(255) NOT NULL
);


ALTER TABLE public.tribunais OWNER TO forge;

--
-- Name: tribunais_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.tribunais_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tribunais_id_seq OWNER TO forge;

--
-- Name: tribunais_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.tribunais_id_seq OWNED BY public.tribunais.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: forge
--

CREATE TABLE public.users (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    username character varying(255) NOT NULL,
    user_type_id integer NOT NULL,
    disabled_by_id character varying(255),
    disabled_at character varying(255)
);


ALTER TABLE public.users OWNER TO forge;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: forge
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO forge;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: forge
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.acoes ALTER COLUMN id SET DEFAULT nextval('public.acoes_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.andamentos ALTER COLUMN id SET DEFAULT nextval('public.andamentos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.apensos ALTER COLUMN id SET DEFAULT nextval('public.apensos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.juizes ALTER COLUMN id SET DEFAULT nextval('public.juizes_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.leis ALTER COLUMN id SET DEFAULT nextval('public.leis_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.meios ALTER COLUMN id SET DEFAULT nextval('public.meios_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.processos ALTER COLUMN id SET DEFAULT nextval('public.processos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.revisions ALTER COLUMN id SET DEFAULT nextval('public.revisions_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tags ALTER COLUMN id SET DEFAULT nextval('public.tags_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_andamentos ALTER COLUMN id SET DEFAULT nextval('public.tipos_andamentos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_entradas ALTER COLUMN id SET DEFAULT nextval('public.tipos_entradas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_juizes ALTER COLUMN id SET DEFAULT nextval('public.tipos_juizes_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_prazos ALTER COLUMN id SET DEFAULT nextval('public.tipos_prazos_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_usuarios ALTER COLUMN id SET DEFAULT nextval('public.tipos_usuarios_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tribunais ALTER COLUMN id SET DEFAULT nextval('public.tribunais_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: acoes; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.acoes (id, nome, abreviacao, created_at, updated_at) FROM stdin;
1	AÇÃO DIRETA DE INCONSTITUCIONALIDADE POR OMISSÃO	ADO	2018-03-01 17:56:38	2018-03-01 17:56:38
2	AÇÃO DIRETA DE INCONSTITUCIONALIDADE	ADI	2018-03-01 17:56:38	2018-03-01 17:56:38
3	ARGUIÇÃO DE DESCUMPRIMENTO DE PRECEITO FUNDAMENTAL	ADPF	2018-03-01 17:56:38	2018-03-01 17:56:38
4	AÇÃO CÍVEL ORIGINÁRIA	ACO	2018-03-01 17:56:38	2018-03-01 17:56:38
5	SUSPENSÃO DE LIMINAR	SL	2018-03-01 17:56:38	2018-03-01 17:56:38
6	SUSPENSÃO DE SEGURANÇA	SS	2018-03-01 17:56:40	2018-03-01 17:56:40
7	MANDADO DE SEGURANÇA	MS	2018-03-01 17:56:41	2018-03-01 17:56:41
8	AÇÃO CIVIL PÚBLICA	ACP	2018-03-01 17:56:41	2018-03-01 17:56:41
9	RECLAMAÇÃO TRABALHISTA	RT	2018-03-01 17:56:41	2018-03-01 17:56:41
10	REPRESENTAÇÃO DE INCONSTITUCIONALIDADE	RI	2018-03-01 17:56:41	2018-03-01 17:56:41
11	AÇÃO POPULAR	AP	2018-03-01 17:56:41	2018-03-01 17:56:41
12	N/C	PROCEDIMENTO DO JUIZADO ESPECIAL CÍVEL/FAZENDÁRIO	2018-03-01 17:56:41	2018-03-01 17:56:41
13	PROCEDIMENTO COMUM	PC	2018-03-01 17:56:41	2018-03-01 17:56:41
14	MANDADO DE INJUNÇÃO	MI	2018-03-01 17:56:42	2018-03-01 17:56:42
15	AGRAVO DE INSTRUMENTO	AI	2018-03-01 17:56:42	2018-03-01 17:56:42
16	ALVARÁ JUDICIAL	AJ	2018-03-01 17:56:45	2018-03-01 17:56:45
17	HABEAS CORPUS	HC	2018-03-01 17:56:47	2018-03-01 17:56:47
18	MEDIDA CAUTELAR INOMINADA	MCI	2018-03-01 17:56:47	2018-03-01 17:56:47
19	BUSCA E APREENSÃO	BA	2018-03-01 17:56:48	2018-03-01 17:56:48
20	CARTA PRECATÓRIA	CP	2018-03-01 17:56:48	2018-03-01 17:56:48
21	AÇÃO CIVIL DE IMPROBIDADE ADMINISTRATIVA	ACIA	2018-03-01 17:56:48	2018-03-01 17:56:48
22	AÇÃO POPULAR	AC	2018-03-01 17:56:48	2018-03-01 17:56:48
23	EXECUÇÃO DE TÍTULO EXTRAJUDICIAL	ETE	2018-03-01 17:56:48	2018-03-01 17:56:48
24	RECLAMAÇÃO	RCL STF	2018-03-01 17:56:48	2018-03-01 17:56:48
25	RECLAMAÇÃO	RCL STJ	2018-03-01 17:56:50	2018-03-01 17:56:50
26	MEDIDA CAUTELAR	MC	2018-04-11 14:54:10	2018-04-11 14:54:10
\.


--
-- Name: acoes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.acoes_id_seq', 26, true);


--
-- Data for Name: andamentos; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.andamentos (id, processo_id, tipo_andamento_id, tipo_entrada_id, tipo_prazo_id, data_prazo, data_entrega, observacoes, created_at, updated_at) FROM stdin;
1	389	1	1	1	2018-04-04 00:00:00	2018-03-26 00:00:00	Mandado de Notificação 73/2018: ...notifique-se o Presidente da Alerj para pronunciar-se no prazo de 5 dias, nos termos do artigo 105  do Regimento Interno.	2018-03-27 14:37:29	2018-03-27 14:37:29
2	384	1	1	1	2018-04-11 00:00:00	2018-03-27 00:00:00	27/03/2018 - Recebido ofício 650/R para prestar informações na forma do art. 12 da Lei 9868/1999.	2018-03-27 14:43:06	2018-03-27 14:43:06
\.


--
-- Name: andamentos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.andamentos_id_seq', 2, true);


--
-- Data for Name: apensos; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.apensos (processo_id, apensado_id, created_at, updated_at, id) FROM stdin;
377	392	2018-04-11 15:07:59	2018-04-11 15:07:59	1
377	392	2018-04-11 15:08:22	2018-04-11 15:08:22	2
133	268	2018-06-05 11:23:28	2018-06-05 11:23:28	3
133	268	2018-06-05 11:23:59	2018-06-05 11:23:59	4
\.


--
-- Name: apensos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.apensos_id_seq', 4, true);


--
-- Data for Name: juizes; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.juizes (id, nome, lotacao_id, tipo_juiz_id, created_at, updated_at) FROM stdin;
1	RICARDO LEWANDOWSKI	1	4	2018-03-01 17:56:38	2018-03-01 17:56:38
2	ROSA WEBER	1	4	2018-03-01 17:56:38	2018-03-01 17:56:38
3	EDSON FACHIN	1	4	2018-03-01 17:56:38	2018-03-01 17:56:38
4	CARMEN LUCIA	1	4	2018-03-01 17:56:38	2018-03-01 17:56:38
5	TEORI ZAVASCKI	1	4	2018-03-01 17:56:38	2018-03-01 17:56:38
6	GILMAR MENDES	1	4	2018-03-01 17:56:38	2018-03-01 17:56:38
7	LUIZ FUX	1	4	2018-03-01 17:56:38	2018-03-01 17:56:38
8	CELSO DE MELLO	1	4	2018-03-01 17:56:39	2018-03-01 17:56:39
9	MARCO AURELIO	1	4	2018-03-01 17:56:39	2018-03-01 17:56:39
10	AYRES BRITTO	1	4	2018-03-01 17:56:39	2018-03-01 17:56:39
11	ROBERTO BARROSO	1	4	2018-03-01 17:56:39	2018-03-01 17:56:39
12	DIAS TOFFOLI	1	4	2018-03-01 17:56:39	2018-03-01 17:56:39
13	JOAQUIM BARBOSA	1	4	2018-03-01 17:56:39	2018-03-01 17:56:39
14	ALEXANDRE DE MORAES	1	2	2018-03-01 17:56:40	2018-03-01 17:56:40
15	ALEXANDRE DE MORAES	1	4	2018-03-01 17:56:40	2018-03-01 17:56:40
16	ADOLPHINO RIBEIRO	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
17	SERGIO DE SOUZA VERANI	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
18	MABEL CHRISTINA CASTRIOTO MEIRA DE VASCONCELLOS	2	1	2018-03-01 17:56:41	2018-03-01 17:56:41
19	MONICA DE ALMEIDA RODRIGUES	3	1	2018-03-01 17:56:41	2018-03-01 17:56:41
20	ANA MARIA PEREIRA DE OLIVEIRA	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
21	ANTONIO EDUARDO FERREIRA DUARTE	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
22	ODETE KNAACK DE SOUZA	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
23	JULIO EMILIO ABRANCHES MANSUR	4	1	2018-03-01 17:56:41	2018-03-01 17:56:41
24	LUIZ EDUARDO CAVALCANTI CANABARRO	2	1	2018-03-01 17:56:41	2018-03-01 17:56:41
25	CLAUDIO DE MELLO TAVARES	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
26	MARCUS TULLIUS ALVES	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
27	ANA CECILIA ARGUESO GOMES DE ALMEIDA	2	1	2018-03-01 17:56:41	2018-03-01 17:56:41
28	MAURICIO CALDAS LOPES	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
29	WLADIMIR HUNGRIA	2	1	2018-03-01 17:56:41	2018-03-01 17:56:41
30	JULIANA PINHEIRO DE TOLEDO PIZA	3	1	2018-03-01 17:56:41	2018-03-01 17:56:41
31	REINALDO PINTO ALBERTO FILHO	2	2	2018-03-01 17:56:41	2018-03-01 17:56:41
32	MARIA AMELIA ALMEIDA SENOS DE CARVALHO	4	1	2018-03-01 17:56:42	2018-03-01 17:56:42
33	EDUARDO ANTONIO KLAUSNER	2	1	2018-03-01 17:56:42	2018-03-01 17:56:42
34	TACIELA CORDEIRO CYLLENO	4	1	2018-03-01 17:56:42	2018-03-01 17:56:42
35	ADRIANO CELSO GUIMARAES	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
36	GABRIEL DE OLIVEIRA ZEFIRO	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
37	FABIO DUTRA	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
38	FELLIPPE BASTOS SILVA ALVES	2	1	2018-03-01 17:56:42	2018-03-01 17:56:42
39	LUCIANA LOSADA ALBUQUERQUE LOPES	2	1	2018-03-01 17:56:42	2018-03-01 17:56:42
40	GUILHERME DIEFENTHAELER	5	2	2018-03-01 17:56:42	2018-03-01 17:56:42
41	MAURO PEREIRA MARTINS	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
42	HELENO RIBEIRO PEREIRA NUNES	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
43	CLAUDIO BRANDAO DE OLIVEIRA	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
44	HELDA LIMA MEIRELES	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
45	ALEXANDRE RODRIGUES DE OLIVEIRA	2	1	2018-03-01 17:56:42	2018-03-01 17:56:42
46	JOSE ROBERTO LAGRANHA TAVORA	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
47	LUIZ OTAVIO BARION	2	1	2018-03-01 17:56:42	2018-03-01 17:56:42
48	TERESA ANDE	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
49	ANTONIO CARLOS NASCIMENTO AMADO	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
50	MARCOS ALCINO DE AZEVEDO TORRES	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
51	MARCELO MARTINS EVARISTO DA SILVA	2	1	2018-03-01 17:56:42	2018-03-01 17:56:42
52	JOSE CARLOS MALDONADO DE CARVALHO	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
53	MICHELE VARGAS	2	1	2018-03-01 17:56:42	2018-03-01 17:56:42
54	MARIA AUGUSTA VAZ MONTEIRO DE FIGUEIREDO	2	2	2018-03-01 17:56:42	2018-03-01 17:56:42
55	DANIELA VALLE DA ROCHA MULLER	3	1	2018-03-01 17:56:42	2018-03-01 17:56:42
56	NILDSON ARAUJO DA CRUZ	2	2	2018-03-01 17:56:43	2018-03-01 17:56:43
57	CARLOS SANTOS DE OLIVEIRA	2	2	2018-03-01 17:56:43	2018-03-01 17:56:43
58	OTAVIO RODRIGUES	2	2	2018-03-01 17:56:43	2018-03-01 17:56:43
59	FABIO TENENBLAT	5	1	2018-03-01 17:56:43	2018-03-01 17:56:43
60	MIRELA ERBISTI	2	1	2018-03-01 17:56:43	2018-03-01 17:56:43
61	CAETANO ERNESTO DA FONSECA COSTA	2	2	2018-03-01 17:56:43	2018-03-01 17:56:43
62	FABIO TENENBLAT	4	1	2018-03-01 17:56:43	2018-03-01 17:56:43
63	LUIZ FELIPE DA SILVA HADDAD	2	2	2018-03-01 17:56:43	2018-03-01 17:56:43
64	FERNANDO FOCH DE LEMOS ARIGONY DA SILVA	2	2	2018-03-01 17:56:43	2018-03-01 17:56:43
65	LUIZ FERNANDO RIBEIRO DE CARVALHO	2	2	2018-03-01 17:56:43	2018-03-01 17:56:43
66	MARLAN DE MORAES MARINHO	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
67	NILZA BITAR	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
68	ALVARO JOSE FERREIRA MAYRINK DA COSTA	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
69	JORGE LUIZ HABIB	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
70	JESSE TORRES PEREIRA JUNIOR	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
71	MARCO ANTONIO IBRAHIM	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
72	MARILIA DE CASTRO NEVES VIEIRA	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
73	KATYA MARIA DE PAULA MENEZES MONNERAT	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
74	MAURO DICKSTEIN	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
75	CHERUBIN HELCIAS SCHWARTZ JUNIOR	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
76	NAGIB SLAIBI FILHO	2	2	2018-03-01 17:56:44	2018-03-01 17:56:44
77	ROBERTO WIDER	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
78	FRANCISCO JOSE DE ASEVEDO	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
79	SIDNEY HARTUNG BUARQUE	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
80	LEILA MARIANO	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
81	SANDRO PITTHAN ESPINDOLA	2	1	2018-03-01 17:56:45	2018-03-01 17:56:45
82	ANTONIO JOSE FERREIRA CARVALHO	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
83	LUIZ ZVEITER	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
84	JOSE CARLOS DE FIGUEIREDO	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
85	FERDINALDO DO NASCIMENTO	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
86	MARIO ROBERT MANNHEIMER	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
87	LUIZ FERNANDO RIBEIRO DE CARVALHO	2	4	2018-03-01 17:56:45	2018-03-01 17:56:45
88	NAMETALA MACHADO JORGE	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
89	CARLOS EDUARDO DA ROSA DA FONSECA PASSOS	2	2	2018-03-01 17:56:45	2018-03-01 17:56:45
90	MARCELLO ALVARENGA LEITE	2	1	2018-03-01 17:56:45	2018-03-01 17:56:45
91	CLAUDIO BRANDAO DE OLIVEIRA	2	4	2018-03-01 17:56:46	2018-03-01 17:56:46
92	BERNARDO MOREIRA GARCEZ NETO	2	2	2018-03-01 17:56:46	2018-03-01 17:56:46
93	MANOEL ALBERTO REBELO DOS SANTOS	2	2	2018-03-01 17:56:46	2018-03-01 17:56:46
94	GIZELDA LEITAO TEIXEIRA	2	2	2018-03-01 17:56:46	2018-03-01 17:56:46
95	MILTON FERNANDE SOUZA	2	2	2018-03-01 17:56:46	2018-03-01 17:56:46
96	ELIZABETE FILIZZOLA	2	2	2018-03-01 17:56:46	2018-03-01 17:56:46
97	JOAO LUIZ AMORIM FRANCO	2	1	2018-03-01 17:56:46	2018-03-01 17:56:46
98	CUSTODIO DE BARROS TOSTES	2	2	2018-03-01 17:56:46	2018-03-01 17:56:46
99	KATIA MARIA AMARAL JANGUTTA	2	2	2018-03-01 17:56:46	2018-03-01 17:56:46
100	MARIA INES DA PENHA GASPAR	2	2	2018-03-01 17:56:47	2018-03-01 17:56:47
101	CAMILO RIBEIRO RULIERE	2	2	2018-03-01 17:56:47	2018-03-01 17:56:47
102	CRISTIANA APARECIDA DE SOUZA SANTOS	2	1	2018-03-01 17:56:47	2018-03-01 17:56:47
103	NEUSA REGINA LARSEN DE ALVARENGA LEITE	2	1	2018-03-01 17:56:47	2018-03-01 17:56:47
104	FIRLY NASCIMENTO FILHO	4	1	2018-03-01 17:56:47	2018-03-01 17:56:47
105	MONICA RIBEIRO TEIXEIRA	2	1	2018-03-01 17:56:47	2018-03-01 17:56:47
106	NATASCHA MACULAN	2	1	2018-03-01 17:56:47	2018-03-01 17:56:47
107	ANDRE LUIZ AMORIM FRANCO	3	1	2018-03-01 17:56:47	2018-03-01 17:56:47
108	MARIA GABRIELA NUTI	3	1	2018-03-01 17:56:47	2018-03-01 17:56:47
109	JOSE GERALDO DA FONSECA	3	2	2018-03-01 17:56:47	2018-03-01 17:56:47
110	ALBA VALERIA GUEFERNANDA SILVA	3	1	2018-03-01 17:56:47	2018-03-01 17:56:47
111	DANIELLE SOARES ABEIJON	3	1	2018-03-01 17:56:47	2018-03-01 17:56:47
112	JOSE SABA FILHO	3	1	2018-03-01 17:56:48	2018-03-01 17:56:48
113	ALESSANDRO OLIVEIRA FELIX	2	1	2018-03-01 17:56:48	2018-03-01 17:56:48
114	FELIPE PINELLI PEDALINO COSTA	2	1	2018-03-01 17:56:48	2018-03-01 17:56:48
115	MARIA PAULA GOUVEA GALHARDO	2	1	2018-03-01 17:56:48	2018-03-01 17:56:48
116	ROSELI NALIN	2	1	2018-03-01 17:56:48	2018-03-01 17:56:48
117	ADRIANA MARQUES DOS SANTOS LAIA FRANCO	2	1	2018-03-01 17:56:48	2018-03-01 17:56:48
118	MARIA TERESA PONTES GANIZEU	2	1	2018-03-01 17:56:48	2018-03-01 17:56:48
119	JULIANA BENEVIDE BARROS ARAUJO	2	1	2018-03-01 17:56:48	2018-03-01 17:56:48
120	WILSON JOSE WITZEL	4	1	2018-03-01 17:56:48	2018-03-01 17:56:48
121	CELSO FERREIRA FILHO	2	2	2018-03-01 17:56:49	2018-03-01 17:56:49
122	HUMBERTO DE MENDONCA MANES	2	2	2018-03-01 17:56:49	2018-03-01 17:56:49
123	ANDRE FONTES	4	2	2018-03-01 17:56:49	2018-03-01 17:56:49
124	SERGIO CAVALIERI FILHO	2	2	2018-03-01 17:56:49	2018-03-01 17:56:49
125	MARCUS ANTONIO DE SOUZA FAVER	2	2	2018-03-01 17:56:49	2018-03-01 17:56:49
126	OG FERNANDES	6	4	2018-03-01 17:56:50	2018-03-01 17:56:50
127	SERGIO LUCIO DE OLIVEIRA E CRUZ	2	2	2018-03-01 17:56:50	2018-03-01 17:56:50
128	MIRELLA LETIZIA GUIMARAES VIZZINI	2	1	2018-03-01 17:56:50	2018-03-01 17:56:50
129	LETICIA DE FARIA SARDAS	2	2	2018-03-01 17:56:51	2018-03-01 17:56:51
130	LUIZ FELIPE DA SILVA HADDAD	2	4	2018-03-01 17:56:51	2018-03-01 17:56:51
131	JOSE PIMENTEL MARQUES	2	2	2018-03-01 17:56:51	2018-03-01 17:56:51
\.


--
-- Name: juizes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.juizes_id_seq', 131, true);


--
-- Data for Name: leis; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.leis (id, numero_lei, autor, assunto, link, processo_id, created_at, updated_at) FROM stdin;
1	7898/2018	Luis Fernando Souza (Pezão)	INSTITUI PISOS SALARIAIS NO ÂMBITO DO ESTADO DO RIO DE JANEIRO PARA AS CATEGORIAS PROFISSIONAIS QUE MENCIONA E ESTABELECE OUTRAS PROVIDÊNCIAS.	http://www2.alerj.rj.gov.br/lotus_notes/default.asp?id=53&url=L2NvbnRsZWkubnNmL2IyNGEyZGE1YTA3Nzg0N2MwMzI1NjRmNDAwNWQ0YmYyL2IwZDdmODRjNTZkNDI5Yjc4MzI1ODI0NDAwNzAyYjIzP09wZW5Eb2N1bWVudA==	382	2018-03-20 17:43:27	2018-03-20 17:43:27
2	7898/2018	Luis Fernando Souza (Pezão)	INSTITUI PISOS SALARIAIS NO ÂMBITO DO ESTADO DO RIO DE JANEIRO PARA AS CATEGORIAS PROFISSIONAIS QUE MENCIONA E ESTABELECE OUTRAS PROVIDÊNCIAS.	http://www2.alerj.rj.gov.br/lotus_notes/default.asp?id=53&url=L2NvbnRsZWkubnNmL2IyNGEyZGE1YTA3Nzg0N2MwMzI1NjRmNDAwNWQ0YmYyL2IwZDdmODRjNTZkNDI5Yjc4MzI1ODI0NDAwNzAyYjIzP09wZW5Eb2N1bWVudA==	385	2018-03-20 17:50:19	2018-03-20 17:50:19
3	7898/2018	PODER EXECUTIVO	INSTITUI PISOS SALARIAIS NO ÂMBITO DO ESTADO DO RIO DE JANEIRO PARA AS CATEGORIAS PROFISSIONAIS QUE MENCIONA E ESTABELECE OUTRAS PROVIDÊNCIAS.	http://www2.alerj.rj.gov.br/lotus_notes/default.asp?id=53&url=L2NvbnRsZWkubnNmL2IyNGEyZGE1YTA3Nzg0N2MwMzI1NjRmNDAwNWQ0YmYyL2IwZDdmODRjNTZkNDI5Yjc4MzI1ODI0NDAwNzAyYjIzP09wZW5Eb2N1bWVudA==	383	2018-03-20 17:54:12	2018-03-20 17:54:12
4	7880/2018	Paulo Ramos	ALTERA A LEI Nº 2498, DE 28 DE DEZEMBRO DE 1995, ESTABELECENDO NOVA LINHA DIVISÓRIA ENTRE OS MUNICÍPIOS DE CABO FRIO E ARMAÇÕES DOS BÚZIOS.	http://alerjln1.alerj.rj.gov.br/contlei.nsf/bc008ecb13dcfc6e03256827006dbbf5/be1bf61d54ba7f1c832582480058aed9?OpenDocument#_Section1	389	2018-03-21 16:46:41	2018-03-21 16:46:41
5	7340/2016	PEDRO AUGUSTO	DISPÕE SOBRE A CONCESSÃO, PELO DEPARTAMENTO DE TRÂNSITO DO ESTADO DO RIO DE JANEIRO (DETRAN), DE ADESIVO ESPECIAL PARA TRÂNSITO EM FAIXAS SELETIVAS, NAS VIAS, PARA PESSOAS COM DEFICIÊNCIA PROPRIETÁRIAS DE VEÍCULOS E DÁ OUTRAS PROVIDENCIAS.	http://alerjln1.alerj.rj.gov.br/contlei.nsf/f25571cac4a61011032564fe0052c89c/46c0708dad4f382383257ff1005dd7cc?OpenDocument	387	2018-03-21 16:50:01	2018-03-21 16:50:01
6	7380/2016	Paulo Ramos	RECONHECE O PASTOR EVANGÉLICO E PADRES COMO JUIZES ECLESIÁSTICOS DE PAZ E ALTERA A LEI Nº 5.645/2010, INCLUINDO NO CALENDÁRIO OFICIAL DO ESTADO DO RIO DE JANEIRO, O DIA ESTADUAL DO JUIZ ECLESIÁSTICO DE PAZ, A SER COMEMORADO NO DIA 10 (DEZ) DE JANEIRO.	http://alerjln1.alerj.rj.gov.br/CONTLEI.NSF/c8aa0900025feef6032564ec0060dfff/0fe1b08bb90f3b0283257ff1006aac07?OpenDocument	386	2018-03-21 16:53:01	2018-03-21 16:53:01
7	7917/2018	PAULO RAMOS	DISPÕE SOBRE A PERMANÊNCIA DE PRESO PROVISÓRIO NAS UNIDADES DO SISTEMA PENITENCIÁRIO ESTADUAL E DÁ OUTRAS PROVIDÊNCIAS	http://www2.alerj.rj.gov.br/lotus_notes/default.asp?id=53&url=L2NvbnRsZWkubnNmL2IyNGEyZGE1YTA3Nzg0N2MwMzI1NjRmNDAwNWQ0YmYyL2U3YjljODNlODlmNzJlMzk4MzI1ODI1MTAwNjI2NTNhP09wZW5Eb2N1bWVudA==	390	2018-03-23 16:09:41	2018-03-23 16:10:16
8	7818/2017	ENFERMEIRA REJANE	DISPÕE SOBRE ADVERTÊNCIA QUANTO À VIOLÊNCIA CONTRA A MULHER NO ESTADO DO RIO DE JANEIRO	http://alerjln1.alerj.rj.gov.br/CONTLEI.NSF/c8aa0900025feef6032564ec0060dfff/e93e5cc7b26a2356832581fd0061fba6?OpenDocument	391	2018-03-27 14:30:46	2018-03-27 14:30:46
\.


--
-- Name: leis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.leis_id_seq', 8, true);


--
-- Data for Name: meios; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.meios (id, nome, created_at, updated_at) FROM stdin;
1	N/C	2018-02-28 17:47:00	2018-02-28 17:47:00
2	Eletrônico	2018-02-28 17:47:00	2018-02-28 17:47:00
3	Físico	2018-02-28 17:47:00	2018-02-28 17:47:00
\.


--
-- Name: meios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.meios_id_seq', 3, true);


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2013_04_09_062329_create_revisions_table	1
2	2014_10_12_000000_create_users_table	1
3	2014_10_12_100000_create_password_resets_table	1
4	2018_01_10_162326_create_table_processos	1
5	2018_01_11_174323_create_table_acoes	1
6	2018_01_11_174334_create_table_tipos_juizes	1
7	2018_01_11_174345_create_table_juizes	1
8	2018_01_11_174735_create_table_tribunais	1
9	2018_01_12_120952_create_table_tipos_usuarios	1
10	2018_01_12_130156_create_table_andamentos	1
11	2018_01_12_180152_create_table_tipos_prazos	1
12	2018_01_12_182335_create_table_apensos	1
13	2018_01_15_182336_add_username_to_users	1
14	2018_01_16_182337_create_table_tipos_andamentos	1
15	2018_01_16_182338_create_table_tipos_entradas	1
16	2018_01_16_182339_create_table_meios	1
17	2018_01_23_000040_allow_nullable_processos	1
18	2018_01_24_000041_add_tipos_juizes_e_meios	1
19	2018_01_25_194919_alter_table_apensos	1
20	2018_01_30_000020_add_abreviacao_to_tribunais	1
21	2018_01_30_000021_add_observacao_to_processos	1
22	2018_01_30_160820_add_user_types	1
23	2018_01_31_000023_add_arquivamento_to_processos	1
24	2018_01_31_000024_create_table_leis	1
25	2018_02_01_174909_create_tag_tables	1
26	2018_02_21_000000_truncate_tipos_juizes_e_meios	2
27	2018_02_27_000000_Disabled_Users	2
28	2018_02_28_000001_add_process_link	3
\.


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.migrations_id_seq', 28, true);


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: processos; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.processos (id, numero_judicial, numero_alerj, tribunal_id, vara, data_distribuicao, acao_id, relator_id, apensos_obs, juiz_id, autor, reu, objeto, merito, liminar, recurso, procurador_id, estagiario_id, assessor_id, tipo_meio_id, created_at, updated_at, observacao, data_arquivamento, observacao_arquivamento, link) FROM stdin;
1	40	7878/2017	1	N/C	\N	1	1	N/C	\N	PROCURADOR GERAL DA REPÚBLICA	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Visando declarar a inconstitucionalidade da omissão da União e dos Estados, por meio dos órgãos indicados no preâmbulo, na regulamentação do art. 98, II da CRFB, com estipulação de prazo razoável. (Criação da Justiça de Paz).	N/C	N/C	N/C	2	15	\N	2	2018-03-01 17:56:38	2018-03-01 17:56:38	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5168601
2	238	2028/1990	1	N/C	\N	2	2	_	\N	GOVERNADOR DO ERJ	ALERJ	Promovida em face dos Arts. 42 e 215 da Constituição do ERJ, que versam sobre Composição dos Conselhos de Administração e Fiscal das Empresas Públicas e sociedades de economia mista e Composição da direção executiva das empresas públicas, sociedades de economia mista e fundações. O texto do Art. 215 foi renumerado para corresponder ao Art. 218. / Manifestação AGU pela improcedência. (Em 12/08/94 às fls. 68/74) Manifestação PGR pela procedência parcial do pedido para declarar a inconstitucionalidade do art. 42 e julgar prejudicado o pedido no que se refere ao art. 215. Sucessivamente, pela procedência. (Em 01/02/02 às fls. 77/79)	Procedente em parte por maioria (Inconstitucionalidade do art. 42 e das expressões "empresas públicas, das sociedades de economia mista e" do art. 218, ambos da CERJ. (Publicada em 08/03/10 às fls. 101)	_	Embargos de Declaração (Governador ERJ) / Manifestação PGR pelo acolhimento dos embargos (Em 23/06/10 às fls. 161/165).	2	15	\N	2	2018-03-01 17:56:38	2018-03-01 17:56:38	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1496756
7	750	4255/1992 ( Unificado ao Alerj 9572/2013)	1	N/C	\N	2	6	_	\N	PROCURADOR GERAL DA REPÚBLICA	ALERJ	Promovida em face da Lei n° 5243,de 14 de maio de 2008, que institui no âmbito do Estado do Rio de Janeiro, a terça feira de carnaval como feriado Estadual. Autoria:	N/C	DEFERIDA PARCIALMENTE, POR UNANIMIDADE: Incisos II, III e IV do Art. 2 da Lei 1.939 de 1991	_	4	12	\N	3	2018-03-01 17:56:38	2018-03-01 17:56:38	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1540191
8	1083	755/2017 (ANDA COM O 16174/2016 E 43/2017)	1	N/C	\N	5	4	0064958-34.2016.8.19.0000	\N	ESTADO DO RIO DE JANEIRO	PRESIDENTE DO TJRJ	(peças eletrônicas de SL não disponibilizadas no site do STF)	N/C	N/C	N/C	3	9	\N	2	2018-03-01 17:56:38	2018-03-01 17:56:38	N/C	\N	\N	\N
9	1825	8917/1998	1	N/C	\N	2	7	N/C	\N	PROCURADORIA GERAL DA REPÚBLICA	ALERJ	Promovida em face da Lei do Estado do Rio de Janeiro nº 2900, de 23/03/1998. A lei altera dispositivo da lei nº 2446 , de 12 de outubro de 1995, que cria o município de Seropédica, a ser desmembrado do município de Itaguaí. Projeto de Lei nº: 1364/97 Autoria: Paulo Melo Relator: Min. Luiz Fuz Pedido de medida cautelar deferido, para, até final julgamento da ação direta, suspender a execução e a aplicabilidade da lei.	N/C	N/C	N/C	5	16	\N	3	2018-03-01 17:56:38	2018-03-01 17:56:38	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1707247
10	1826	3815/1998	1	N/C	\N	2	7	ADI 1842	\N	PARTIDO DOS TRABALHADORES	GOVERNADOR DO ERJ E ALERJ	Trata-se de uma Ação Direta de Inconstitucionalidade em face da Lei Complementar nº 87, de 18/12/1997, do Estado do Rio de Janeiro que altera a Lei Complementar n° 87, 16/12/97, que dispõe sobre a Região Metropolitana do Rio de Janeiro , sua composição , organização e gestão , e sobre a Microrregião dos Lagos , define as funções públicas e serviços de interesse comum.Des. Relator: Min. Luiz Fux	N/C	NÃO APRECIADA	_	5	12	\N	3	2018-03-01 17:56:38	2018-03-01 17:56:38	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1708131
4	553	7773/1991	1	N/C	\N	2	4	N/C	\N	GOVERNADOR DO ERJ	ALERJ	O objeto da ação questiona a validade constitucional do art. 226, § 1º  da Constituição do Estado do Rio de Janeiro e do art. 56 do Ato das Disposições Constitucionais Transitórias\r\ndessa Constituição, ao argumento de que estariam em desconformidade com os arts. 158, 159, 165, § 8º  e  167, IV, e 212 da Constituição da República.	N/C	_	N/C	5	12	\N	3	2018-03-01 17:56:38	2018-04-24 17:53:09	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1522373
12	1843	4939/1998	1	N/C	\N	2	7	N/C	\N	PARTIDO DA FRENTE LIBERAL - PFL	GOVERNADOR DO ERJ E ALERJ	Lei complementar nº 087 , de 16 de dezembro de 1997 , do Estado do Rio de janeiro ( arts. 001 º; 002 º; 003 º , caput ; 004 º; 005 º , 0II (infine) e parágrafo único , 006 º , 0II a 0VI e 007 º .	N/C	N/C	N/C	5	35	\N	3	2018-03-01 17:56:38	2018-06-11 10:31:49	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1715664
6	622	9273/2001 (Apenso ao 18978)	1	N/C	\N	4	5	N/C	\N	MILNER AMAZONAS COELHO	PRESIDENTE DA ALERJ	CPI para apurar as causas de acidente com a plataforma P36 da Petrobrás. ACO 622	N/C	N/C	N/C	2	35	\N	3	2018-03-01 17:56:38	2018-06-11 11:01:06	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1975260
13	1862	5893/1998	1	N/C	\N	2	2	_	\N	CONFEDERAÇÃO NACIONAL DA INDÚSTRIA	GOVERNADOR DO ERJ E ALERJ	Promovida em face da Lei Estadual nº 2586/96, que dispõe sobre a prevenção das doenças e critérios de defesa da saúde dos trabalhadores.	N/C	DEFERIDA PARCIALMENTE: Alínea b do Inciso III, do Art. 3º da Lei 2.586 de 1996 do ERJ	_	5	35	\N	2	2018-03-01 17:56:38	2018-06-11 11:04:53	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1720540
11	1842	4940/1998	1	N/C	\N	2	6	N/C	\N	PARTIDO DEMOCRÁTICO TRABALHISTA	GOVERNADOR DO ERJ E ALERJ	Arts. 1º, 2º parte final, 3º e incisos , 4º, 5º, 6º, 7º, 8º, 9º, 10 e 11 da Lei Complementar 087 /97, bem como dos arts. 8º, 9º, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21 da Lei Orgânica 2869 /97	N/C	N/C	N/C	5	35	\N	3	2018-03-01 17:56:38	2018-06-11 11:06:32	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1714588
14	2080	12064/1999	1	N/C	\N	2	6	_	\N	CONFEDERAÇÃO NACIONAL DO TRANSPORTE	ALERJ	Promovida em face do parágrafo 5º do Artigo 194 da Constituição do Estado do Rio de Janeiro, que dispõe sobre a competência tributária Estadual e Municipal sobre a área dos respectivos territórios, tanto marítima quanto continental; e do Parágrafo 4º do Artigo 31 da Lei 2657, de 26/12/96, que dispõe sobre o imposto sobre a circulação de mercadorias e serviços. Autoria: Poder Executivo	N/C	INDEFERIDA	_	2	12	\N	2	2018-03-01 17:56:38	2018-03-01 17:56:38	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1781685
15	2163	3238/2000	1	N/C	\N	2	7	N/C	\N	CONFEDERAÇÃO NACIONAL DO COMÉRCIO	GOVERNADOR DO ERJ E ALERJ	Promovida em face do artigo 1º da Lei 3364, de 07/01/2000 que institui a meia entrada para jovens de até 21 (vinte e um) anos de idade em estabelecimentos de lazer e entreterimento. Relator: Min Luiz Fux.	N/C	N/C	N/C	5	14	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1809915
16	2435	5021/2001 ( Junto ao 10720)	1	N/C	\N	2	4	N/C	\N	CONFEDERAÇÃO NACIONAL DO COMÉRCIO	GOVERNADOR DO ERJ E ALERJ	Trata-se de Ação Direta de Inconstitucionalidade em face dos artigos 1º e 4º da Lei Estadual nº 3542, de 16/03/2001, que dispõe sobre desconto em medicamentos para consumidores com mais de 60 anos. Des. Relator: Min. Carmen Lúcia	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1924959
17	2681	9212/2002	1	N/C	\N	2	8	_	\N	GOVERNADORA DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos Arts. 5º e 11, da Lei Estadual nº 3741/2001, que versa sobre o plano de cargos e salários dos servidores da Fundação Teatro Municipal do Rio de Janeiro. Autoria: Poder Executivo	N/C	DEFERIDA: A expressão " e daqueles do Teatro Municipal do Rio de Janeiro, aposentados antes da vigência da Lei 1242 de 1987", constante do Art 5º da Lei 3741 de 2001 do ERJ; E também do Art. 11 da mesma Lei	_	3	8	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2027344
18	2700	10550/2002	1	N/C	\N	2	6	N/C	\N	PROCURADOR GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Emenda Constitucional nº 28/2002, de 26 de junho de 2002, do Estado do Rio de Janeiro, a qual "modifica a redação do artigo 156 da Constituição do Estado do Rio de Janeiro." EMENDA CONSTITUCIONAL Nº 028, DE 2002 "MODIFICA A REDAÇÃO DO ARTIGO 156 DA CONSTITUIÇÃO DO ESTADO DO RIO DE JANEIRO" Art. 1º - Fica modificado o artigo 156 da Constituição do Estado do Rio de Janeiro, que passa a vigorar com a seguinte redação: “Art.156 - (...) II - (...) d) - na apuração da antiguidade, o Tribunal de Justiça somente poderá recusar o juiz mais antigo pelo voto nominal, aberto e motivado de dois terços dos membros efetivos de seu Órgão Especial, conforme procedimento próprio, repetindo-se a votação até fixar-se a indicação, vedados o escrutínio secreto e o voto não declarado; e) - a recusa de promoção de juízes por antiguidade será; tomada pelo voto nominal de dois terços de todos os membros efetivos do Órgão Especial do Tribunal, tal como previsto no artigo 93, II, “d”, da Constituição Federal, motivando-se cada voto, e pressupõe a prévia aplicação de penalidade após o regular processo administrativo disciplinar, ou a notícia de fato grave, que dê ensejo a instauração do referido processo, nos termos da legislação própria; f) - concretizada a recusa de promoção, deverá ser instaurado processo administrativo disciplinar no prazo de quinze dias, sob pena de nulidade da deliberação e responsabilidade do órgão coletivo. ............................................................................... X – todas as decisões administrativas dos tribunais serão motivadas, aquelas sobre a promoção de magistrados serão públicas mediante votação aberta e as disciplinares serão tomadas pelo voto da maioria absoluta dos membros efetivos dos órgãos competentes, observado o seguinte: a) - a motivação das decisões administrativas pressupõe que cada magistrado que participe de órgão de deliberação coletiva apresente de forma clara, objetiva e fundamentada as razões de seu voto individual; b) - a decisão administrativa final, que represente a vontade do órgão de deliberação coletiva como um todo, também deverá ser apresentada e redigida de forma clara, objetiva e fundamentada, apresentando as razões da decisão que represente a vontade dos seus membros, conforme o quorum exigido para a votação; c) - a decisão administrativa final, bem como os votos individuais dos membros do órgão de deliberação coletiva, serão devidamente publicados no órgão oficial de comunicação, assegurando-se a não identificação do magistrado, que, pessoalmente ou através de seu procurador, será intimado e poderá requerer, previamente, que a decisão seja tomada apenas na presença das partes e seus procuradores, em se tratando de deliberação sobre infração disciplinar. Autoria: CHICO ALENCAR, EDMILSON VALENTIM, MANUEL ROSA - NECA, PAULO MELO, PAULO RAMOS Relator: Gilmar Mendes Procurador: Juliette Stohler	N/C	N/C	N/C	5	15	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2040351
19	2831	1338/2003	1	N/C	\N	2	9	_	\N	ASS. DOS MAGISTRADOS BRASILEIROS - AMB	Governador ERJ e ALERJ	Artigo 002º, caput; artigo 082, incisos 00I, 00V, alinea "d" e 00X; artigo 086 e § único e o inciso 00V do artigo 091; artigo 163 e § único da Lei Complementar nº 106 de 03 de janeiro de 2003 do Estado do Rio de Janeiro.	_	DEFERIDA por maioria: Art. 86 Caput, Paragrafo Único, Art. 163 Caput, Parágrafo ùnico e Alínea D, Inciso V do art 82 e do Inciso V do Art.91 da Lei Complementar Nº 105 ERJ . Alínea D, Inciso V do art 82 e do Inciso V do Art.91 Ciência Sec. Mesa: Revogação:	_	5	15	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2088312
21	2921	14299/2003	1	N/C	\N	2	10	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de uma Ação Direta de Inconstitucionalidade, com pedido cautelar, a fim de ver declarada a ilegitimidade constitucional da Lei nº 3.196, de 15 de março de 1999, do Estado do Rio de Janeiro, a qual "estabelece que novos limites territoriais dos Municípios de Cantagalo e Macuco", sem que, para tanto, fosse realizada prévia consulta, mediante plebiscito, às populações dos Municípios envolvidos, como preconiza o art. 18, § 4º, da Constituição da República Federativa do Brasil, bem assim a cediça jurisprudência do Excelso Pretório. Autoria: Aparecida Gama Projeto de Lei nº 1987/97	Não apreciada	N/C	N/C	2	14	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2141064
22	2952	16196/2003	1	N/C	\N	2	6	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 1.856/91, por contrariar o artigo 93, caput, da Constituição Federal. A Lei instituiu o “benefício de permanência em atividade” aos magistrados estaduais, que deverá incidir no percentual anual de 5% por ano que exceder os trinta anos de serviço.	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2147816
23	2956	15966/2003	1	N/C	\N	2	9	N/C	\N	ASSOCIAÇÃO. NACIONAL DO MEMBROS DO MP - CONAMP	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Art. 115, inciso 00V e do art. 110, da Lei Complementar nº 069, de 19 de novembro de 1990, do Estado do Rio de Janeiro, com a redação dada pela Lei Complementar nº 107, de 07 de fevereiro de 2003, e retificada no Diário Oficial do Estado do Rio de Janeiro, de 14 de fevereiro de 2003.	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	N/C	3	12	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2148781
24	3034	20741/2003	1	N/C	\N	2	9	N/C	\N	CONFED.BRASILEIRA DE TRABALHADORES POL.CIVIS-COBRAPOL	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Complementar nº 106, de 03/01/2003, art. 35, Inciso XI, que conferiu competência para o Parquet realizar iinvestigações criminais.Relator: MIN. MARCO AURÉLIO	N/C	N/C	N/C	5	12	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2180314
25	3081	13012/2004	1	N/C	\N	2	8	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	AÇÃO DIRETA DE INCONSTITUCIONALIDADE em face da Lei Estadual nº 3477, de 17/10/2000, que dispõe sobre a proibição de implantação de caixas postais comunitárias, no Estado do Rio de Janeiro. AUTORIA: SOLANGE AMARAL, HENRY CHARLES, PAULO RAMOS, CHICO ALENCAR, CIDA DIOGO, EDMILSON VALENTIM, NILTON SALOMÃO	Não tem	N/C	N/C	2	14	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2189953
26	3087	2772/2005	1	N/C	\N	2	11	_	\N	PARTIDO DA SOCIAL DEMOCRACIA BRASILEIRA - PSDB	ASSEMBLÉIA LEGISLATIVA DOESTADO DO RIO DE JANEIRO	Suspensão do Art. 5º da Lei 4.179/2003 do ERJ, de 29 de setembro de 2003, e, ao final, declarada sua inconstitucionalidade. Trata-se a lei "sobre a instituição do Programa Estadual de Acesso à Alimentação - PEAA e dá outras providências". Autoria: Poder Executivo	N/C	_	_	4	9	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2190070
27	3093	3515/2004	1	N/C	\N	2	8	N/C	\N	PROCURADOR GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	AÇÃO DIRETA DE INCONSTITUCIONALIDADE EM FACE DA LEI ESTADUAL N° 1888/91, QUE DISPÕE SOBRE BOLSAS DE INICIAÇÃO AO TRABALHO AO MENOR QUE FREQUENTE O ENSINO REGULAR OU SUPLETIVO NO ESTADO DO RIO DE JANEIRO, CONTRARIANDO O disposto no art. 22, inciso I, da Constituição Federal. AUTORIA: APARECIDA BOAVENTURA PROCURADOR: HARIMAN A. DIAS DE ARAÚJO	Não tem	N/C	N/C	4	14	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2191737
28	3268	13469/2004	1	N/C	\N	2	8	N/C	\N	CONFEDERAÇÃO NACIONAL DOS TRABALHADORES EM EDUCAÇÃO	GOVERNADOR DO EST. DO R. DE JANEIRO E ALERJ	Promovida em face dos Arts. 1º, 2º e 3º, da Lei 3459, de 14/09/2000, que institui o ensino religioso confessional nas escolas integrantes da rede pública do Estado do Rio de Janeiro. RELATOR MIN. CELSO DE MELLO	N/C	N/C	N/C	3	8	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2234409
29	3336	14226/2004	1	N/C	\N	2	12	N/C	\N	CONFEDERAÇÃO NACIONAL DA INDÚSTRIA	GOVERNADOR DO RJ E ALERJ	Promovida em face da Lei nº 4.247, de 16/12/2003 que dispõe sobre a cobrança pela utilização dos recursos hídricos de domínio do Estado do Rio de Janeiro. Autor: PODER EXECUTIVO	N/C	N/C	N/C	2	8	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2253438
30	3355	15387/2004	1	N/C	\N	2	3	N/C	\N	CONFEDERAÇÃO NACIONAL DOS TRABALHADORES NA INDÚSTRIA	GOVERNADOR DO ESTADO, ALERJ e INSTITUTO BRASILEIRO DE CRISOTILA	Promovida ADI, com pedido de medida cautelar, em face da LEI 4341/04, QUE DISPÕE SOBRE AS OBRIGAÇÕES DAS EMPRESAS DE FIBRO-CIMENTO PELOS DANOS CAUSADOS À SAÚDE DOS TRABALHADORES, NO ÂMBITO DO ESTADO DO RIO DE JANEIRO. AUTORIA: CARLOS MINC	Não apreciada	N/C	N/C	3	14	\N	2	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2258865
31	3364	15823/2004	1	N/C	\N	2	13	N/C	\N	PARTIDO DEMOCRÁTICO TRABALHISTA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do Art. 5º, § 1º, inciso II, da Lei 3893, de 19/06/2002, que DISPÕE SOBRE A UNIFICAÇÃO E A REESTRUTURAÇÃO DOS QUADROS DE PESSOAL E INSTITUI A CARREIRA DE SERVENTUÁRIO DO PODER JUDICIÁRIO DO ESTADO DO RIO DE JANEIRO. AUTORIA: PODER JUDICIÁRIO	N/C	N/C	N/C	2	15	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2260381
32	3406	2721/2005	1	N/C	\N	2	2	(Apensada à ADI 3470)	\N	CONFEDERAÇÃO NACIONAL DOS TRABALHADORES NA INDÚSTRIA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Estadual nº 3.579, de 07 de junho de 2001, que dispõe sobre a substituição progressiva da produção e da comercialização de produtos que contenham asbesto e dá outras providências.	N/C	N/C	N/C	2	15	\N	2	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2272225
33	3413	3173/2005	1	N/C	\N	2	9	_	\N	ASS.BRASILEIRA DA INDÚSTRIA DE MÁQUINAS E EQUIPAMENTOS ABIMAQ	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 4.163, de 29 de setembro de 2003, que dispõe sobre a concessão de incentivos fiscais para a importação de equipamentos esportivos de caráter olímpico nos casos que especifica e dá outras providências. Autoria: Poder Executivo	N/C	_	_	2	\N	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	Estagiário: Luan Moreira, 	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2273658
34	3470	2721/2005	1	N/C	\N	2	2	Apensada à ADI 3406	\N	CONFEDERAÇÃO NACIONAL DOS TRABALHADORES NA INDÚSTRIA - CNTI	GOV ERJ / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 3579, de 2001, do ERJ, que dispõe sobre a substituição progressiva da produção e da comercialização de produtos que contenham asbesto e dá outras providências. AUTORIA: CARLOS MINC	N/C	N/C	N/C	\N	15	\N	2	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	\N
36	3550	9590/2005	1	N/C	\N	2	12	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	GOVERNADOR DO RJ E ALERJ	Ação Direta de Inconstitucionalidade, com pedido de liminar, em face do art. 12, da Lei nº 4546, de 15 de abril de 2005, do Estado do Rio de Janeiro.	Não apreciada	N/C	N/C	3	14	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2314577
37	3631	13979/2005	1	N/C	\N	2	9	N/C	\N	CONFEDERAÇÃO NACIONAL DO SISTEMA FINANCEIRO CONSIF	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Art. 015, § 001º, inciso 0XI, da Lei nº 2657, de 26 de dezembro de 1996, do Estado do Rio de Janeiro.	N/C	N/C	N/C	4	11	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2343547
38	3674	3989/2006 (Junto ao 14043/2011 - processo unificado em 2015)	1	N/C	\N	2	9	Anexo 14043/11 em 22/10/15	\N	GOVERNADORA DO ESTADO DO RIO GRANDE DO NORTE	GOVERNADOR DO ESTADO DO RJ e ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do §5º do art. 12 da Lei nº 4181/2003, QUE ACRESCENTOU OS §§ 4º e 5º do art. 14 DA Lei Nº 2657/1996, que dispõe sobre o Imposto sobre Operações Relativas à Circulação de Mercadorias e sobre Prestação de Serviços de Transporte Interestadual e Intermunicipal e de Comunicação - ICMS. Autoria: PODER EXECUTIVO	-	Medida cautelar suspendo a eficacia e vigência do $5, do art 12, da lei estadual nº 4.181/2003.	-	7	16	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2362514
39	3697	8780/2006	1	N/C	\N	2	9	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos arts. 11 e 35, bem como da expressão " a que se refere o art. 47-A desta Lei ", constante dos arts. 13, 14, 15 e 19 da Lei Complementar nº 111, de 13/03/06 - retribuição estipendial dos agentes inetegrantes da classe final de carreira.Relator: MIN. MARCO AURÉLIO	N/C	N/C	N/C	5	13	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	\N
40	3704	6948/06	1	N/C	\N	2	9	N/C	\N	ASS .DOS NOTÁRIOS E REGISTRADORES DO BRASIL - ANOREG	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do inciso III, do art. 31 da Lei Complementar nº 111, de 13/03/06, do Estado do Rio de Janeiro que dispõe que 5% (cinco por cento) oriundo das receitas incidentes sobre o recolhimento de custas e emolumentos extradjudiciais, etc. Autor: Poder Executivo	N/C	N/C	N/C	4	8	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2377719
41	3782	12321/2006	1	N/C	\N	2	6	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos Arts. 17, 18 e 25 da Lei Estadual nº 4620, de 11/10/2005 - Dispõe sobre a reestruturação dos cargos do quadro único de pessoal do Poder Judiciário do Estado do Rio de Janeiro.	N/C	N/C	N/C	5	11	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2402578
42	3811	15825/2006	1	N/C	\N	2	6	N/C	\N	CONFEDERAÇÃO NACIONAL DA INDÚSTRIA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Tem por objeto a Lei Estadual nº 4.735, de 29 de março de 2006, que estabelece medidas para evitar a intoxicação dos trabalhadores por substâncias químicas presentes em tintas e anticorrosivos, condiciona o uso de revestimento e pinturas anticorrosivas à comprovação de atoxidade à saúde do trabalhador e ao meio ambiente, dentre outras providências.	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:39	2018-03-01 17:56:39	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2426075
43	4069	6863/2008	1	N/C	\N	2	3	N/C	\N	CONFEDERAÇÃO NACIONAL DOS TRABALHADORES NA AGRICULTURA - CONTAG	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Arts 003º, 004º, 005º, 006º, 007º, parágrafo único do art. 008º e os arts. 009º, 010, 012, 013, 014, 017 e 018 da Lei nº 5067, de 09 de julho de 2007, do Estado do Rio de Janeiro.	N/C	N/C	N/C	2	13	\N	3	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2611341
44	4092	13078/2008	1	N/C	\N	2	8	_	\N	CONF.NACIONAL DO COM. DE BENS, SERVIÇOS E TURISMO CNC	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei estadual nº 5198, de 05 de março de 2008, que institui feriado estadual, dia 23 de Abril, como "Dia de São Jorge", e declara sua inconstitucionalidade. "Art. 1º - Fica instituído como feriado estadual o dia 23 de abril, "Dia de São Jorge". Art. 2º - Esta Lei entrará em vigor na data da sua publicação, revogando-se as disposições em contrário." Autoria: Jorge Babu	N/C	NÃO APRECIADA	_	5	12	\N	3	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2624787
46	4235	8191/2009	1	N/C	\N	2	3	_	\N	CONSELHO FEDERAL DA OAB	ALERJ e ERJ	Promovida em face do art. 3º da Lei nº 2.556/96 e art. 4º da Lei nº 3.603/01, no que acresceu ao Código de Organização Judiciária. Autoria: PODER JUDICIÁRIO	N/C	_	_	3	15	\N	3	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2673622
47	4244	9769/2009	1	N/C	\N	2	9	_	\N	ASSOCIAÇÃO DOS MAGISTRADOS BRASILEIROS AMB	ALERJ	Com pedido de medida cautelar em face dos Art. 1º, III, 2º, XI, XX "c", 4º, 5º e 6º, da Lei 5388, de 16/02/09, que estabelece a obrigatoriedade da declaração de bens e rendas para o exercício de cargos, empregos e funções nos Poderes Legislativo, Executivo e Judiciário, bem como no Ministério Público Estadual e na Defensoria Pública. Autoria: Jorge Picciani	N/C	_	_	5	15	\N	3	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2678143
48	4643	18079/2011	1	N/C	\N	2	7	_	\N	ASSOCIAÇÃO DOS MEMBROS DOS TRIBUNAIS DE CONTAS DO BRASIL	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Estadual Complementar 142/11, que dispõe sobre a lei orgânica do Tribunal de Constas do Estado do Rio de Janeiro ,que fere o art. 73, caput, c/c os arts. 96, II, 'd', e 75 CF/88.RELATOR: MIN. LUIZ FUX	N/C	DEFERIDA POR UNANIMIDADE E NOS TERMOS DO VOTO DO RELATOR: Lei Complementar 142 de 2011 ERJ	_	4	12	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4131201
49	4753	22433/2015	1	N/C	\N	2	3	N/C	\N	FEDERAÇÃO DAS ENTIDADES DOS OFICIAIS MILITARES ESTAD. FENEME	ALERJ E GOV ERJ	"Promovida em face do Art. 024 da Lei n° 2556, de 21 de maio de 1996 do ERJ, que Cria os Juizados Especiais Cíveis e Criminais na Justiça do Estado do Rio de Janeiro, dispõe sobre a sua organização, composição e competência e dá outras providências. Autoria : Deputado Ivanir de Mello"	N/C	N/C	N/C	4	11	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	\N
52	4918	4642/2013	1	N/C	\N	2	4	N/C	\N	MESA DIREITORA DA ASSEMBLEIA E PROCURADORIA DA ALERJ	PRESIDENTE DA REPÚBLICA/CONGRESSO NACIONAL	ADI EM FACE DOS Art. 42-B e Art. 42-C da Lei Federal n° 12351, 22 de dezembro de 2010, bem como as redações decorrentes da Lei Federal n° 12734, de 2012, bem como art. 48, II, art. 49, II, art. 49-A, Art. 49-B, art. 49-C, art. 50, art. 50- A, art. 50-B, art. 50-C, art. 50-D e art. 50-E da Lei Federal n° 9478, de 06 de agosto de 1997, com as redações decorrentes da Lei Federal n° 12734, de 30 de novembro de 2012.	Não apreciada	N/C	N/C	4	14	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4379708
89	0016920-56.2014.8.19.0001	N/C	2	3º Juizado Especial Fazendário	\N	12	\N	N/C	24	MARIA TAVARES GUILHERME	ALERJ	Busca-se declaração de nulidade do ato administrativo que anulou o concurso ao cargo de Especialista legislativo Nível IV – especialidade de Assessoramento às Comissões da ALERJ	N/C	N/C	N/C	\N	11	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.013713-0
45	4157	14399/2008	1	N/C	\N	2	8	_	\N	CONFEDERAÇÃO NACIONAL DA INDÚSTRIA - CNI	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do art. 4 da Lei Estadual N° 5.245/08, que dispõe sobre a realização de exame preventivo de câncer em servidoras públicas e dá outras providências.	N/C	_	_	2	35	\N	3	2018-03-01 17:56:40	2018-06-11 10:50:53	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2643057
56	5072	15877/2013	1	N/C	\N	2	6	_	\N	PROCURADOR GERAL DA REPUBLICA	ALERJ / GOVERNO DO ESTADO DO RIO DE JANEIRO	Ação direta de inconstitucionalidade, com pedido de medida cautelar, contra a lei complementar 147, 27 de junho de 2013, alterada pela lei complementar 148, de 22 de agosto de 2013, ambas do Estado do Rio e Janeiro que " Dispõe sobre a utilização de parcela de depósitos judiciais para pagamento de requisições judiciais de pagamento, e dá outras providências."	Não apreciado	N/C	_	7	14	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4506342
58	5222	1437/2015	1	N/C	\N	2	8	_	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	ALERJ	Ação ajuizada pelo Governador do ERJ, contra os Arts. 4º e 5º da Lei 6.897, de 24 de setembro de 2014 do RJ, que dispõe sobre informação a motoristas, a ser prestada pelo Departamento de Trânsito do Estado do Rio de Janeiro (DETRAN/RJ), a respeito de pontuação resultante de infrações de trânsito e de suspensão e cassação da Carteira Nacional de Habilitação (CNH). Autoria: Dionísio Lins	N/C	_	_	2	13	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4699329
60	5298	13698/2015	1	N/C	\N	2	7	ADI 5304	\N	ASSOCIAÇÃO DOS MAGISTRADOS BRASILEIROS - AMB	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO - ALERJ	0VI, do art. 156, e art. 093 do ADCT da Constituição do Estado do Rio de Janeiro, com redação dada pelos arts. 003° e 004° da Emenda Constitucional n° 059, de 08 de abril de 2015, do Estado do Rio de Janeiro.	N/C	DEFERIDA: Inciso VI Art. 156 da CERJ e Art. 93 do ADCT da CERJ com redação da EC 59	_	3	11	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4752741
61	5462	1647/2016	1	N/C	\N	2	15	Não	\N	ASSOCIAÇÃO NACIONAL DAS UNIVERSIDADES PARTICULARES - ANUP	GOVERNADOR DO ESTADO DO RJ E ALERJ	Promovida em face da Lei nº 7202, de 08 de janeiro de 2016 que Proíbe a cobrança de taxa de repetência, taxa sobre disciplina eletiva e taxa de prova por parte das instituições particulares de ensino superior no âmbito do Estado do Rio de Janeiro e dá outras providências. Autoria: Thiago Pampolha	-	Liminar para suspender a eficácia da lei 7.202 de 2016 do ERJ até o julgamento final.	-	7	16	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4917577
64	5482	9765/17	1	N/C	\N	2	8	N/C	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei n° 7003, de 11 de maio de 2015, do ERJ, que Dispõe sobre os pontos perdidos por infrações de trânsito anteriores à renovação da Carteira Nacional de Habitação - CNH.	N/C	N/C	N/C	4	9	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4943563
65	5489	15034/2016	1	N/C	\N	2	11	N/C	\N	CONFEDERAÇÃO NACIONAL DA INDÚSTRIA - CNI	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 7.184, de 30 de dezembro de 2015, do ERJ, que Institui a Taxa de Controle, Monitoramento e Fiscalização Ambiental das Atividades de Geração, Transmissão e ou Distribuição de Energia Elétrica de Origem Hidráulica, Térmica e Termo nuclear - TFGE no Estado do Rio de Janeiro. Autoria: Paulo Ramos	N/C	N/C	N/C	3	13	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4951303
62	5480	3394/2016	1	N/C	\N	2	15	ADI 5512	\N	ABEP - ASSOCIAÇÃO BRASILEIRA DE EMPRESAS DE EXPLORAÇÃO E PRODUÇÃO DE PETRÓLEO E GÁS	ALERJ / GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei n° 7182, de 29 de dezembro de 2015 que Institui a Taxa de Controle, Monitoramento e Fiscalização Ambiental das Atividades de Pesquisa, Lavra, Exploração e Produção de Petróleo e Gás - TFPG no Estado do Rio de Janeiro. Autoria : Luiz Paulo	N/C	N/C	N/C	3	35	\N	2	2018-03-01 17:56:40	2018-06-11 10:49:09	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4936179
57	5156	N/C	1	N/C	\N	6	4	0058516-52.2016.8.19.0000	\N	ESTADO DO RIO DE JANEIRO	LUIZ PAULO CORRÊA DA ROCHA	MS 0058516-52.2016.8.19.0000	N/C	N/C	N/C	\N	35	\N	2	2018-03-01 17:56:40	2018-06-11 10:49:47	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5089100
55	5000	10908/2013	1	N/C	\N	2	9	_	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Com pedido de liminar, tendo por objetos: a) a expressão "que o fixe a maior" contida no caput do Art. 1º; e b) o Art. 3º da lei 6.402, que institui pisos salariais no âmbito do ERJ para as categorias profissionais que menciona e estabelece outras providencias.	N/C	_	_	3	35	\N	2	2018-03-01 17:56:40	2018-06-11 10:50:12	N/C	\N	\N	\N
54	4998	10265/2013	1	N/C	\N	2	3	N/C	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO, PROCURADORIA GERAL DO ESTADO	Promovida em face dos arts. 2o , II, III e IV, e 5o , § 2 o , da Lei 6.107, de 13 de dezembro de 2011, do Estado do Rio de Janeiro. A lei aprova o enquadramento da sociedade que menciona no programa de atração de investimentos estruturantes - RIOINVEST. Projeto de Lei nº 1094/2011 Autoria: Poder Executivo	N/C	N/C	N/C	5	35	\N	2	2018-03-01 17:56:40	2018-06-11 10:50:33	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4425892
53	4994	9803/2013 ( Junto ao 9833/2013)	1	N/C	\N	2	3	N/C	\N	GOVERNADOR DO ESTADO DE SAO PAULO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de ação direta de inconstitucionalidade, com pedido de medida cautelar, dirigida contra o art. 1.º, I, a, II, a e e, §§ 1.º, 2.º, 4.º e 5.º; o art. 3.º, caput; os arts. 5.º e 7.º, e, por arrastamento, o art. 2.º, caput, incisos e parágrafos, o art. 3.º, §§ 1.º a 3.º, e o art. 6.º, caput e parágrafo único, todos da Lei 6.078, de 18 de novembro de 2011, do Estado do Rio de Janeiro, na qual se aprova o enquadramento da empresa Nissan do Brasil Automóveis Ltda no Programa de Atração de Investimentos Estruturantes - RIOINVEST. Projeto de Lei nº 940/2011 Autoria: Poder Executivo. Relator: Min. Edson Fachin	N/C	N/C	N/C	3	35	\N	2	2018-03-01 17:56:40	2018-06-11 11:00:19	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4425857
66	5512	6736/2016	1	N/C	\N	2	15	ADI 5480	\N	CONFEDERAÇÃO NACIONAL DA INDÚSTRIA - CNI	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Proposta pela CNI requerendo seja suspensa a eficácia da Lei 7.182/2015, que dispõe sobre a taxa de controle, monitoramento e fiscalização ambiental das atividades de pesquisa, lavra, exploração e produção de petróleo e gás - TFPG, com pedido liminar. AUTORIA: ANDRÉ CECILIANO, BRUNO DAUAIRE, COMTE BITTENCOURT, EDSON ALBERTASSI, JANIO MENDES, LUIZ PAULO, PAULO RAMOS	N/C	N/C	N/C	3	8	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4973482
67	5514	8459/2016	1	N/C	\N	2	6	N/C	\N	ASSOCIAÇÃO BRASILEIRA DE ADVOGADOS PÚBLICOS - ABRAP	ASSEMBLEIA LEGISTLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do Art. 007º, inc. III e nos Anexos I e II da Lei Ordinária Estadual nº 6720, de 24 de março de 2014 do Estado do Rio de Janeiro. Lei n° 6720, de 24 de março de 2014 Institui o Plano de Cargos, Carreiras e Remuneração da Fundação de Apoio a Escola Tecnica do Estado do Rio de Janeiro – FAETEC e da outras providências.	N/C	N/C	N/C	7	15	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4974456
68	5544	12145/2016	1	N/C	\N	2	7	N/C	\N	CONFEDERAÇÃO NACIONAL DE SAÚDE, HOSPITAIS, ESTABELECIMENTOS E SERVIÇOS - CNS	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da Expressão "que o fixe a maior", contida no caput do art. 001º; a expressão "motorista de ambulância" do inciso 00V, do mesmo art. 001º; e parcialmente a expressão "produzindo os seus efeitos a partir de 01º de janeiro de 2016" no art. 004°, todas da Lei n° 7267, de 26 de abril de 2016 do Estado do Rio de Janeiro. Autoria: Poder Executivo	N/C	N/C	N/C	3	11	\N	2	2018-03-01 17:56:40	2018-03-01 17:56:40	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4997138
69	5545	10638/17	1	N/C	\N	2	7	N/C	\N	GOVERNARDOR DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos Arts. 001°, parte final, e 002°, inciso III, da Lei n° 3990, de 11 de outubro de 2002, do Estado do Rio de Janeiro, que obrigam a adoção de medidas de segurança que evitem, impeçam ou dificultem a troca de recém-nascidos nas depedências de hospitais públicos ou privados, casas de saúde e maternidades, no âmbito do Estado do Rio de Janeiro, que possibilitem a posterior identificação através de exame de DNA, e dá outras providências.	N/C	N/C	N/C	2	9	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4998973
71	5635	4534/2017	1	N/C	\N	2	11	N/C	\N	CONFEDERACÃO NACIONAL DA INDÚSTRIA	ALERJ / Gov. ERJ	Promovda em face do Arts. 002°, 004°, "caput" e 00I e 005° da Lei n° 7428, de 25 de agosto de 2016, e por arrastamento o Decreto n° 45810, de 2016, ambos do Estado do Rio de Janeiro. Lei n° 7428, de 25 de agosto de 2016 Institui o Fundo Estadual de Equilíbrio Fiscal do Estado do Rio de Janeiro. FEEF ( A RI 0063240-02.2016.8.19.0000 trata da mesma lei e MS 0063240-02.2016.8.19.0000)	N/C	N/C	N/C	7	12	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5114305
72	5683	6859/2017	1	N/C	\N	2	11	N/C	\N	REDE SUSTENTABILIDADE / PARTIDO SOCIALISMO E LIBERDADE (P-SOL)	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOVERNADOR ERJ	Promovida em face da Lei 7529, de 07 de 2017, do ERJ, que autoriza o Poder executivo a alienar ações representativas do capital social da Companhia Estadual de Águas e Esgotos - CEDAE, e dá outras providências.	N/C	N/C	N/C	4	8	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	\N
73	5692	ALERJ não é parte - apenas decisõese pareceres	1	N/C	\N	2	2	ALERJ não é pate	\N	PROCURADOR-GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO CEARÁ E GOVERNADOR DO ESTADO DO CEARÁ	Cargos TCE - Ceará	-	-	-	\N	16	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5168608
74	5698	8618/2017	1	N/C	\N	2	7	N/C	\N	ASSOCIACAO NACIONAL DOS AUDITORES (MINISTROS E COSENHEIROS SUBSTITUTOS) DOS TRIBUNAIS DE CONTAS E OUTRO(A/S)	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do § 003º do art. 076-A da Lei Complementar n° 063, de 01 de agosto de 1990 (Lei Orgânica do Tribunal de Contas do Estado do Rio de Janeiro), que dispõe sobre a Lei Orgânica do Tribunal de Contas do Estado do Rio de e dá outras providências. (COMPOSIÇÃO/SUBSTITUIÇÃO CONSELHEIROS TCE/RJ)	N/C	N/C	N/C	2	15	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5178981
75	5745	12897/2017	1	N/C	\N	2	15	N/C	\N	Associação Nacional das Operadoras Celulares	Assembleia Legislativa do Estado do Rio de Janeiro	Arguem os autores a inconstitucionalidade do art. 2º, inciso I da Lei Estadual Fluminense nº7.574, de 12 de maio de 2017. Dizem ser inconstitucional quando impõe as associadas das autoras as obrigações previstas no art.1°, pois teria legislado sobre telefonia e internet.	N/C	Pedido de Liminar	N/C	4	8	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	\N
76	5782	16013/17	1	N/C	\N	2	7	Não	\N	PROCURADOR-GERAL DA REPÚBICA 	ESTADO DO RIO DE JANEIRO / ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Contra o art. 3 o da Lei Complementar 159, de 2 de maio de 2014, do Estado do Rio de Janeiro, que prevê pagamento de auxílio educação a membros do Ministério Público desse estado.	Sem julgamento do mérito	Não apreciado	Não	4	8	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	\N
77	5796	16824/2017	1	N/C	\N	2	1	Não	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei nº 7.718, de 09 de outubro de 2017, e do artigo 2º da Lei 7.717, de 09 de outubro de 2017, ambas do Estado do Rio de Janeiro - Dispõe sobre a inadimplência do imposto sobre propriedade de veículos automotores - IPVA / VISTORIA / DETRAN)	Sem julgamento do mérito	Não apreciado	Não	5	8	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	\N
132	0012937-74.2017.4.02.5102	4288/2017 ( observar ALERJ 3935/2017 )	5	1ª VARA FEDERAL DE NITERÓI	\N	11	\N	N/C	59	Sérgio Luiz Rodrigues de Araújo	Governador e outros	Alienação CEDAE	N/C	N/C	N/C	2	12	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	\N
78	5824	17566/2017	1	N/C	\N	2	3	Não	\N	ASSOCIAÇÃO DOS MAGISTRADOS BRASILEIROS 	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO 	Em face dos §§ 2º a 5º do art. 102 da Constituição do Estado do Rio de Janeiro (com a redação dada pela EC n. 53, de 26/6/2012) nos termos e pelos fundamentos a seguir deduzidos. I – A questão em debate: as imunidades formais dos deputados federais não podem ser estendidas aos deputados estaduais para violar o princípio da separação de poderes (intangibilidade das decisões judiciais)	Sem julgamento de mérito	Não apreciado	Não	5	8	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	\N
84	0000798-73.2011.8.19.0000	11948/2012 ( Reclamação 14851 e ao Alerj 15214/2012	2	OE	\N	10	20	0008915-82.2013.8.19.0000 DES. JOSE CARLOS DE FIGUEIREDO	\N	SINDEPARK RIO	EXMO. SR. PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI ESTADUAL Nº 5862, DE 06 DE JANEIRO DE 2011, QUE DISPÕE SOBRE MEDIDAS ADOTADAS NOS ESTACIONAMENTOS E DÁ OUTRAS PROVIDÊNCIAS.	N/C	DEFERIDA: Concedida com efeitos ex nunc (fl.40)	29/12/2016 : 3VP - RE	2	16	\N	3	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201100700004
87	0004193-51.2017.8.19.0004 / 0500163-55.2017.4.02.5101 ( Novo número Justiça Federal	Ainda Não Recebemos Ofício	4	14ª VARA FEDERAL	\N	11	\N	N/C	23	FLAVIO GUSE DE AGUIAR	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / LUIZ FERNANDO DE SOUZA / COMPANHIA ESTADUAL DE AGUAS E ESGOTOS CEDAE / ESTADO DO RIO DE JANEIRO - PROCURADORIA GERAL DO ESTADO DO RIO DE JANEIRO	ajuizadas por FLAVIO GUSE DE AGUIAR (0004193-51.2017.8.19.0004) e FERNANDO WILLIAN FERREIRA (0028886-11.2017.8.19.0001) que buscam questionar o Termo de Compromisso de Recuperação Fiscal, assinado pelo Governador do Estado do Rio de Janeiro, na data de 26 de janeiro de 2017, e a votação do Projeto de Lei nº 2345/2017 no âmbito da Assembleia Legislativa do Estado do Rio de Janeiro	N/C	N/C	N/C	\N	12	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	\N
88	0008135-40.2016.8.19.0000	2771/2016	2	OE	\N	10	20	N/C	\N	LUIZ PAULO CORRÊA DA ROCHA	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outro	Em face dos art. 5º, inc. II, alínea b e d; art. 12;art. 23; art. 24 e art. 42 ambos da Lei Estadual 7.174, de 28 de dezembro de 2015. que versa sobre o Imposto sobre a Transmissão Causa Mortis e Doação de Quaisquer Bens ou Direitos (ITD), de competência do Estado do Rio de Janeiro. Autoria: PODER EXECUTIVO	N/C	N/C	N/C	2	13	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700020
80	0013529-63.1995.8.19.0000	19464/2007( junto ao Alerj 6414)	2	OE	\N	7	16	_	\N	SINDALERJ	PRESIDENTE DA ALERJ E OUTRO	MS MOVIDO PELO SINDALEJ PARA A EXCLUSÃO DA INCIDÊNCIA DO TETO EMUNERATÓRIO PREVISTO PELA LEI Nº. 1.373/88 SOBRE AS VANTAGENS PESSOAIS PERCEBIDAS POR SERVIDORES DA ALERJ. MS 615/1995 - 1995.004.00615 . Junto ao processo ALERJ 6414/95 e ao Alerj 16616)	N/C	_	RE e Resp / EREsp nº 1182843	5	14	\N	3	2018-03-01 17:56:41	2018-06-04 10:24:51	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0013529-63.1995.8.19.0000
83	0101785-79.2016.5.01.0005	14780/2016	3	5ª VARA DO TRABALHO	\N	9	\N	N/C	19	N/C	N/C	N/C	N/C	N/C	N/C	1	14	\N	1	2018-03-01 17:56:41	2018-04-19 14:57:34	N/C	\N	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1188550&p_grau_pje=1&p_seq=101785&p_vara=5&dt_autuacao=08%2F11%2F2016&cid=550544
79	5833	18619/2017	1	N/C	\N	2	15	Não	\N	ASSOCIACAO NACIONAL DAS OPERADORAS CELULARES - ACEL / ABRAFIX - ASSOCIACAO BRASILEIRA DE CONCESSIONARIAS DE SERVICO TELEFONICO FIXO COMUTADO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	da Lei 7.620, de 8/6/2017, do Estado do Rio de Janeiro, publicada no Diário Oficial do ente federado em 9/6/2017 que DISPÕE SOBRE O TEMPO MÁXIMO DE ESPERA NOS ATENDIMENTOS REALIZADOS NAS LOJAS DAS OPERADORAS DE TELEFONIA NO ÂMBITO DO ESTADO DO RIO DE JANEIRO (Autoria da Lei: Pedro Augusto).	Sem julgamento de mérito	Não apreciado	Não	3	14	\N	2	2018-03-01 17:56:41	2018-04-19 15:13:30	N/C	\N	\N	http://portal.stf.jus.br/processos/detalhe.asp?incidente=5319716
81	0020298-04.2006.8.19.0000	14481/2006	2	OE	\N	7	17	_	\N	SINDICATO DOS NOTÁRIOS E REGISTRADORES DO ESTADO DO R. J.	GOVERNADOR DO ERJ E ALERJ	MS impetrado a fim de que seja declarada a ilegalidade do inciso III do art. 31 da LC nº 111/2006 do ERJ, que cria o Fundo Especial da Procuradoria Geral do Estado do Rio de Janeiro (FUNPERJ). / Manifestação MP pela suspensão do processo (fls. 167/169).	N/C	_	_	5	15	\N	3	2018-03-01 17:56:41	2018-05-30 10:05:18	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=200600400490
86	0003663-64.2014.8.19.0000	2708/2014	2	OE	\N	10	22	N/C	\N	ASSOCIAÇÃO BRASILEIRA DE SHOPPING CENTERS - ABRASCE	ALERJ	Promovida em face da Lei nº 6.568/2013, do RJ (que torna obrigatória a utilização de identificadores eletrônicos de vagas em estacionamentos de shoppings, hipermercados e outros, e dá outras providências). Por maioria, foi concedida a Liminar para suspender a aplicação da lei, nos termos do voto da Desembargadora Relatora. Autoria: Samuel Malafaia	Procedente a representação, por maioria.	Liminar deferida	ARE 977544	7	35	\N	2	2018-03-01 17:56:41	2018-06-11 10:48:21	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0003663-64.2014.8.19.0000
90	0020630-87.2014.8.19.0000	5502/2014	2	OE	\N	10	25	N/C	\N	FEDERAÇÃO DAS INDUSTRIAS DO ESTADO DO RIO DE JANEIRO FIRJAN	PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO RJ - ALERJ	Promovida em face da Lei Estadual nº 6690/2014, que "DISPÕE SOBRE A COMERCIALIZAÇÃO DE ÁGUA MINERAL EM VASILHAME RETORNÁVEL E/OU REAPROVEITAVEL." Autoria:INES PANDELO	N/C	N/C	ARE 1007428	7	8	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201400700020
91	0020906-02.2006.8.19.0000	3983/2006	2	OE	\N	10	26	N/C	\N	PROCURADOR-GERAL DE JUSTIÇA DO E. DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 4527/05, que estende o prazo de contratação do pessoal necessário à implementação, no Estado do Rio de Janeiro, das ações de qualificação social e do plano nacional de qualificação do trabalhador, com aplicação dos recursos do Fundo de Amparo ao Trabalhador.Relator: Des. Marcus Tullius Alves	N/C	N/C	RE 581722	3	8	\N	3	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0020906-02.2006.8.19.0000
92	0052906-43.1992.8.19.0001	13601/2002 ano inicial - Observar Alerj 14929. ( 2 Volumes)	2	6ª V.F.P	\N	13	\N	_	27	ABEL PORTO MARTINS E OUTROS	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Ação Declaratória em face do ERJ E ALERJ pedindo solicitação de gratificação pela prestação de serviço técnico e da gratificação especial, incidente sobre os cargos em comissão na ALERJ. apenso 14929/2002	N/C	_	_	2	9	\N	3	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=1992.001.061516-5
93	0060948-44.2016.8.19.0000	15582/2016	2	OE	\N	10	28	N/C	\N	EXMO SR PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Com pedido de medida cautelar, promovida em face da Lei n°. 3.499/2000, com o propósito de conferir o art. 227, §3°, VI, da Constituição Federal e dos arts. 45 e 54, que formou o Programa Um Lar Para Mim, a ser executado por intermédio do Auxílio-Adoção.	N/C	N/C	N/C	7	15	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700217
94	0155516-20.2014.8.19.0001	6901/2014	2	5ª V.F.P	\N	13	\N	N/C	29	WALDEMAR MUNIZ FILHO	RIO PREVIDÊNCIA E ALERJ	Trata-se de ação de rito ordinário que o Autor propõe em face desta ALERJ e do RIOPREVIDÊNCIA, visando à condenação destes a regularizar a sua situação previdenciária perante o CNIS/INSS, sob pena de astreintes, bem como a lhe indenizar os danos morais suportados.	N/C	Sem pedido liminar	N/C	7	11	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.134711-9
95	01018677220165010050	993/2017	3	50ª VARA DO TRABALHO	\N	9	\N	N/C	30	Gisele Firmo dos Santos da Silva	N/C	N/C	N/C	N/C	N/C	4	11	\N	2	2018-03-01 17:56:41	2018-03-01 17:56:41	N/C	\N	\N	\N
101	0000048-61.2017.8.19.0000	ALERJ não é parte	2	OE	\N	10	35	N/C	\N	PAULO SERGIO RAMOS BARBOZA	GOVERNARDOR DO RJ	Decretos Estaduais n° 45.840 de 05 de dezembro de 2016 e 45.809 de 03 de novembro de 2016	N/C	N/C	N/C	\N	16	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700002
103	0000606-96.2018.8.19.0000	1605/2018	2	OE	\N	10	37	Não	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	GOVERNADOR E ALERJ	Decreto nº 42.897/2011 que reduz a base de cálculo de ICMS na prestação interna de Serviço de Transporte Aquaviário Intermunicipal de passageiros e Resolução nº706/2013, da SEFAZ.	Não apreciado	Não apreciado	Não tem	4	9	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	\N
96	0012598-88.2017.8.19.0000	16730/2017	2	OE	\N	7	31	N/C	\N	EBER SILVA	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Mandado de Sugurança visando investidura no cargo - Suplente Dep. Gil Manhães Vianna Júnior	Sem julgamento do mérito	Não apreciada	Não	3	14	\N	2	2018-03-01 17:56:41	2018-04-19 15:12:48	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700400977
97	0012598-88.2017.8.19.0000	Ainda Não Recebemos Ofício	2	OE	\N	7	31	N/C	\N	EBER SILVA	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Mandado de Sugurança visando investidura no cargo - Suplente Dep. Gil Manhães Vianna Júnior	N/C	N/C	N/C	\N	12	\N	2	2018-03-01 17:56:42	2018-05-10 10:42:22	N/C	2018-05-10	\N	\N
98	0028279-22.2003.4.02.5101	21824/2003	4	23ª V. FED	\N	8	\N	N/C	32	MINISTÉRIO PÚBLICO FEDERAL	ESTADO DO RIO DE JANEIRO	Trata-se de Ação Civil Pública, com pedido de liminar objetivando a condenação do Estado na obrigação de ressarcir os danos decorrentes da destinação incorreta e inadequada da verba orçamentária vinculada à saúde nos anos de 2000, 2001, 2002. Liminar parcialmente deferida. Porém, suspendido o feito aguardando o julgamento do recurso ao STJ. REsp nº 1391822 Relator: Ministro (a) Assusete Magalhães	N/C	N/C	N/C	5	\N	23	3	2018-03-01 17:56:42	2018-06-06 17:17:19	Estagiário: Luan Moreira,	\N	\N	http://www.trf2.gov.br/cgi-bin/pingres-allen?proc=00282792220034025101&andam=1&tipo_consulta=1&mov=3
104	0000846-56.2016.8.19.0000	2382/2016	2	OE	\N	14	20	N/C	\N	JORGE SOARES CHAIM E OUTROS	PRESIDENTE DO TJ E OUTROS	Trata-se de Mandado de Injunção, com pedido de antecipação de tutela, no qual pleiteiam os impetrantes seja concedida a ordem para que seja reconhecida a mora legislativa por omissão das autoridades impetradas, a fim de que seja fixado à título de indenização a correção de seus proventos em 9,53%, a partir de 1º de setembro de 2015, nos termos do art. 16 da Lei Estadual n°4.620/05, com redação dada pela Lei Estadualn° 6.282/12, bem como lhes sejam assegurados o pagamento dos atrasados (SERVIDORES INATIVOS DO TJ).	N/C	N/C	N/C	2	11	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201604600002
105	0000918-11.2017.8.19.0064	12090/2017	2	2ª VARA	\N	13	\N	Não	38	WALTER LUIZ TAVARES	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	AÇÃO DE RECLAMAÇÃO TRABALHISTA, COMINADO COM PEDIDO DE REPARAÇÃO DE DANOS MATERIAIS E MORAIS	Sem julgamento do mérito	Sem pedido liminar	N/C	3	13	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	\N
106	0000990-49.2013.8.19.0060	1154/2014	2	13ª V.F.P	\N	13	\N	N/C	39	MUNICÍPIO DE SUMIDOURO / JUAREZ GONÇALVES CORGUINHA	ESTADO DO RIO DE JANEIRO	N/C	N/C	N/C	N/C	3	13	\N	3	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2013.060.001012-9
107	0001077-56.2017.4.02.000	Apenso ao processo 4288/2017	5	1ª VARA FEDERAL DE NITERÓI	\N	15	40	N/C	\N	Sérgio Luiz Rodrigues de Araújo	Governador e outros	Alienação CEDAE	N/C	N/C	N/C	\N	12	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	\N
111	0003286-88.2017.8.19.0000	4709/2017	2	OE	\N	10	44	N/C	\N	PROCURADOR-GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promivida em face da Lei 2649 de 1996, que regulamenta o O § 5º do artigo 91 da CF do ERJ, que dispõe sobre o direito de associação dos servidores públicos militares. Autoria: Carlos Minc	N/C	A ser apreciado	N/C	4	12	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700036
115	0004992-09.2017.8.19.0000	4095/2017	2	OE	\N	10	48	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOV ERJ	Promovida em face da Lei 7121 DE 2015 do ERJ que dispões sobre o Estatuto dos Bombeiros-Militares de ERJ - art. 1º, na parte que acresce o § 4º ao art. 102 da Lei nº 880 de 1985; art. 2º, na parte que altera a redação do art. 99, inciso II, item 1 da Lei 880. Autoria: Poder Executivo	Sem julgamento do mérito	Sem pedido liminar	Não	7	12	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700062
110	0002356-36.2018.8.19.0000	1488/2018	2	OE	\N	10	43	Não	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	GOVERNADOR E ALERJ	da Lei Estadual nº 3.940, de 9 de setembro de 2002, com a redação que lhe foi conferida pela Lei estadual n.º 6.346/2012 (cópia anexa), por violação à Constituição do Estado do Rio de Janeiro	Não apreciado	Não apreciado	Não tem	7	9	\N	2	2018-03-01 17:56:42	2018-03-19 11:57:56	N/C	\N	\N	\N
108	0001149-02.2018.8.19.0000	1629/2018	2	OE	\N	10	41	Não	\N	ASSOCIAÇÃO DE HOSPITAIS DO ESTADO DO RIO DE JANEIRO AHERJ	GOVERNADOR E ALERJ	em face da Lei Estadual n.º 7.829/2018 que, aprovada pela Assembleia Legislativa do Estado do Rio de Janeiro - ALERJ e sancionada pelo senhor Governador do Estado do Rio de Janeiro, institui a determinação de que os hospitais, postos de saúde e clínicas públicas ou privadas, localizadas no Estado do Rio de Janeiro, comuniquem, imediatamente, ao Conselho Tutelar da região e aos pais ou responsáveis legais, as ocorrências envolvendo crianças ou adolescentes que tenham sido atendidas nos setores de emergência, por consumo excessivo de álcool ou por uso de entorpecente	Não apreciado	Não apreciado	Não tem	7	9	\N	2	2018-03-01 17:56:42	2018-04-19 10:38:01	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700020
116	0005084-84.2017.8.19.0000	5114/2017	2	OE	\N	7	49	N/C	\N	Rejane de Almeida	PRESIDENTE DA ALERJ / GOV ESTADO RIO DE JANEIRO	Alienação CEDAE	N/C	N/C	N/C	2	16	\N	2	2018-03-01 17:56:42	2018-04-25 14:51:02	N/C	2018-04-25	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700400433
133	0013070-52.2018.8.19.0001	16105/2016	2	3ª V.F.P	\N	13	\N	Não	60	STEPHANIE STUMBO PINHO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO ALERJ	Indenização Trabalhista / Contribuições Previdenciárias / Contribuições; Dano Moral / Responsabilidade da Administração	Não apreciado	Não apreciado	Não tem	\N	9	\N	2	2018-03-01 17:56:43	2018-06-05 11:24:20	Apenso ao processo 0101853-60.2016.5.01.0027 (TRT)	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2018.001.009676-8
114	0004414-43.2017.8.19.0001	10125/17	2	8ª V.F.P	\N	11	\N	N/C	47	BRUNO ABREU BASTOS	ESTADO DO RIO DE JANEIRO	Trata-se de Ação Popular movida contra o ERJ,tendo como objeto a nulidade dos atos ilegais praticados pelo Estado do Rio de Janeiro consubstanciados no ressarcimento das remunerações recebidas por servidores e funcionários cedidos por órgãos e entidades de outros entes federativos em acumulação às remunerações recebidas por estes do Estado do Rio de Janeiro pelo cargos ocupados na Administração Pública Estadual sem aplicação do teto remuneratório previsto no art. 37, inciso XI, da Constituição da República Federativa do Brasil.	N/C	N/C	N/C	3	35	\N	2	2018-03-01 17:56:42	2018-06-11 10:47:27	N/C	\N	\N	\N
112	0003515-69.2013.8.19.0006	2447/2014	2	2ª V. CÍVEL	\N	8	\N	N/C	45	MINISTÉRIO PÚBLICO	MAÉRCIO FERNANDO OLIVEIRA DE ALMEIDA	Solicitação dos contracheques do Réu (no período compreendido entre janeiro de 1993 até a data de sua aposentadoria) bem como a informação acerca da natureza do ingresso do Réu no quadro de servidores deste Estado (se por observância do art. 37, II da CRFB, ou por mero ato interno). Juiza: Denise Ferrari Maeda	N/C	N/C	N/C	5	35	\N	3	2018-03-01 17:56:42	2018-06-11 10:47:54	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2013.006.003485-1
109	0001368-15.2018.8.19.0000	1450/2018	2	OE	\N	10	42	Não	\N	LUIZ PAULO CORRÊA DA ROCHA	GOVERNADOR E ALERJ	Declaração de inconstitucionalidade do art. 20 da Lei nº 7.844 de 10 de janeiro de 2018 (documento anexo), que “Dispõe sobre a Regulamentação da Lei de Orçamento Anual (LOA), com base na Emenda Constitucional nº 93 de 08 de setembro de 2016, que Estabelece a Desvinculação de Receitas dos Estados, Distrito Federal e Município”	Não apreciado	Não apreciado	Não tem	\N	9	\N	2	2018-03-01 17:56:42	2018-06-18 11:23:50	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700021
117	0005090-91.2017.8.19.0000	5964/2017	2	OE	\N	10	50	Não	\N	FEDERAÇÃO NACIONAL DAS EMPRESAS DE SEGUROS PRIVADOS, DE CAPITALIZAÇÃO E DE PREVIDÊNCIA COMPLEMENTAR ABERTA - FENASEG	PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOV ERJ PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos artigos 13, inciso II e 23 da Lei nº 7.714, de 28 de dezembro de 2015, do ERJ, que dispões sobre o Imposto de Transmissão Causa Mortis (ITD) - especificamente a expressão “tais como Plano Gerador de Benefício Livre (PGBL)...” – inteiro teor da legislação. Autoria: Poder Executivo Contra a mesma Lei do processo ALERJ 10578/2016	-	Sejam suspensos, cautelarmente, os artios 13, II e p.u. bem como o argio 23 da Lei Estadua 7.174 de 2015.	-	3	16	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700059
119	0006936-80.2016.8.19.0000	2423/2016	2	OE	\N	7	52	N/C	\N	FENALE FED. NACIONAL DS PODERES LEGISLATIVOS	ALERJ	Mandado de segurança preventivo com pedido de liminar inaudita altera parte contra a Mesa Diretora da Alerj, para que a autoridade coatora realize o correto desconto da contribuição sindical prevista nos arts. 578 a 580 da CLT, tendo como base de incidência o mês de Março de 2016. PROCESSO:1779/2016 (ADMINISTRATIVO)	N/C	N/C	N/C	7	15	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600400361
122	0007653-48.2015.8.19.0026	7529/2017	2	2ª VARA	\N	13	\N	N/C	53	SINDICATO DO COMÉRCIO VAREJISTA DE ITAPERUNA / PAULINO PAULA DA ROCHA	ALERJ / GOV ERJ / SECRETARIA DA FAZENDA	N/C	N/C	N/C	N/C	7	15	\N	3	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2015.026.007709-6
123	0008082-25.2017.8.19.0000	10411/2017	2	OE	\N	10	48	Não	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	artigos 55-A, 99, II, 1 e 102, § 4º da Lei 880, de 25 de julho de 1985, com redação dada pela Lei nº. 7.121, de 03 de dezembro de 2015	Sem julgamento do mérito	Com pedido liminar	Sem recurso	3	9	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	\N
124	0010640-43.2012.8.19.0000	5943/2012	2	OE	\N	10	54	Anexo 5943/2012 em 24/09/15	\N	EXMO. SR. PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos Arts. 1º e 2º da Lei Estadual 5938/2011, que traz previsões acerca de fundamentação da reprovação de candidatos no exame psicotécnico de concursos públicos, bem como garantia de realização de novo exame desta natureza. Autoria do Projeto de Lei: Flavio Bolsonaro. Este atua como amicus curiae na R.I.	-	Foi requerido liminar anaudita altera parte, para suspender a vigência dos artigos 1º e 2º da Lei Estadual 5.938 de 2011 até o julgamento final.	ARE nº 787169 (STF)	3	16	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0010640-43.2012.8.19.0000
125	0010847-60.2015.5.01.0009	3852/2017	3	9ª VARA DO TRABALHO	\N	9	\N	N/C	55	N/C	N/C	Trata-se de um Reclamação Trabalhista acerca do cumprimento do Mandado de Penhora de Crédito.	N/C	N/C	N/C	5	15	\N	2	2018-03-01 17:56:42	2018-03-01 17:56:42	N/C	\N	\N	\N
126	0011072-86.2017.8.19.0000	6494/2017	2	OE	\N	10	50	Não	\N	FEDERAÇÃO DO COMÉRCIO DE BENS, SERVIÇOS E TURISMO DO ESTADO DO RIO DE JANEIRO - FECOMÉRCIO RJ	GOV ERJ / PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	PROMOVIDA EM FACE DA LEI 7530 DE 2017 DO ERJ, QUE INSTITUI PISOS SALARIAIS NO ÂMBITO DO ESTADO DO RIO DE JANEIRO PARA AS CATEGORIAS PROFISSIONAIS QUE MENCIONA E ESTABELECE OUTRAS PROVIDÊNCIAS	-	Por unanimidade, foi deferida a liminar	-	7	16	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700078
127	0011376-85.2017.8.19.0000	6009/17 E 6010/17.	2	OE	\N	10	52	N/C	\N	FENATEMA - FEDERAÇÃO NACIONAL DOS TRABALHADORES EM ENERGIA, ÁGUA E MEIO AMBIETE	ILMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 7529 de 2017 do ERJ - Alienação CEDAE	Não foi julgado	Ainda não apreciado	Não	2	16	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	\N
128	0011451-27.2017.8.19.0000	6558/2017	2	OE	\N	10	50	N/C	\N	FEDERAÇÃO DAS INDUSTRIAS DO ESTADO DO RIO DE JANEIRO - FIRJAN	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO	PROMOVIDA EM FACE DA LEI 7530 DE 2017 DO ERJ, QUE INSTITUI PISOS SALARIAIS NO ÂMBITO DO ESTADO DO RIO DE JANEIRO PARA AS CATEGORIAS PROFISSIONAIS QUE MENCIONA E ESTABELECE OUTRAS PROVIDÊNCIAS	N/C	N/C	N/C	7	15	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	\N
129	0011852-02.2012.8.19.0000	5945/ 2012 - Apenso ao 12551/2012	2	OE	\N	10	56	N/C	\N	EXMO SR PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / EXMO. SR. GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI 4948 DO ANO 2006 DO ESTADO DO RIO DE JANEIRO que dispõe sobre a opção de pagamento pelos servidores públicos estaduais, na forma que menciona. Autoria: Paulo Ramos	N/C	NÃO APRECIADA	RE / ARE 1.022.397	2	11	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201625211813
130	0012538-23.2014.8.19.0000	11425/2017	2	OE	\N	10	57	0021119-17.2014.8.19.0000	\N	ASSOCIAÇÃO BRASILEIRA DE SHOPPING CENTERS ABRASCE	ALERJ	LEI N° 6.632, DE 13/12/2013, DO ESTADO DO RIO DE JANEIRO, (que dispõe sobre a instalação de sistema de filmagem e gravação pelos prestadores de serviços de estacionamento)	N/C	NÃO APRECIADO	N/C	2	15	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	\N
131	0012612-72.2017.8.19.0000	6823/2017	2	OE	\N	10	58	N/C	\N	FLAVIO NANTES BOLSONARO	GOVERNADOR, ALERJ	RI em face da Lei 7508/2016 (PL 2242/2016). Aumento alíquota ICMS.	N/C	N/C	N/C	2	14	\N	2	2018-03-01 17:56:43	2018-04-19 15:12:02	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700089
118	0005459-92.2011.8.19.0001	ALERJ não é parte ( apenas decisões)	2	6ª V.F.P	\N	8	\N	N/C	51	MINISTERIO PUBLICO DO ESTADO DO RIO DE JANEIRO	EDUARDO ROCHA ORSINO	Ilícitos praticados pelo réu contra a Administração Pública Estadual, que, na qualidade de servidor efetivo da ALERJ, teria incorporado ao seu patrimônio bens móveis públicos, precisamente valores pecuniários.	N/C	N/C	N/C	\N	11	\N	2	2018-03-01 17:56:42	2018-05-02 10:03:22	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0005459-92.2011.8.19.0001
137	0014366-79.2017.4.02.5101	N/C	4	N/C	\N	11	\N	N/C	62	Sueli Kolling	Governador e outros	Alienação CEDAE	N/C	N/C	N/C	\N	13	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	\N
138	0015123-43.2017.8.19.0000	7311/2017	2	OE	\N	10	52	N/C	\N	FNU FEDERAÇÃO NACIONAL DOS URBANITÁRIOS	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outros / ALERJ	Promovida em face da LEI 7529	N/C	N/C	N/C	2	16	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	\N
140	0015310-27.2012.8.19.0000	12551/2012(apenso ao 5945/12)	2	OE	\N	10	56	N/C	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RJ	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Representação de Inconstitucionalidade em face da Lei n.º 4.948/06 do Estado do Rio de Janeiro que dispõe sobre o direito dos servidores públicos estaduais, também dos pensionistas, de optarem pelo banco e agência onde desejam receber, respectivamente, seus vencimentos e proventos. Projeto de Lei nº 1692-A/2004 Autoria: Paulo Ramos	Acordam os Desembargadores em julgar procedente o pedido, para declarar a inconstitucionalidade da Lei n.º 4.948/06 do Estado do Rio de Janeiro, por unanimidade e conforme o voto do relator. Plenário, 21/07/2014	N/C	N/C	2	11	\N	3	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201200700023
142	0015345-45.2016.8.19.0000	5122/2016	2	OE	\N	10	43	N/C	\N	EXMO SR PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Representação de Inconstitucionalidade em face da Lei Estadual n° 5.816/2010, do Estado do Rio de Janeiro, que dispõe sobre a “Criação em caráter permanente da campanha institucional " Doe seu sangue pelo seu time" No Estádio do Maracanã e outros no âmbito do Estado do Rio de Janeiro.	****Pedido liminar a ser apreciado	N/C	N/C	3	15	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700029
143	0015701-36.2017.4.02.5101	3935/2017 ( observar ALERJ 4288/2017 )	5	1ª VARA FEDERAL DE NITERÓI	\N	11	\N	N/C	59	Humberto Luiz Nunes Lemos	Governador e outros	Alienação CEDAE	N/C	N/C	N/C	2	12	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	\N
260	0084453-95.2015.8.19.0001	24185/2015	2	14ª V.F.P	\N	13	\N	N/C	103	Antonio Carlos Xavier Reis	ALERJ	Pagamento de Férias Não Gozadas	N/C	N/C	N/C	7	15	\N	3	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2015.001.071947-9
135	0014032-54.2013.8.19.0000	10309/2013	2	OE	\N	10	25	N/C	\N	FEDERAÇÃO DAS INDÚSTRIAS DO ESTADO DO RIO DE JANEIRO FIRJAN	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face do art.1° da Lei 6.402/13 do Estado do Rio de Janeiro, que institui pisos salariais para as categorias profissionais que menciona, ante a violação dos arts. 72, 74 e 98 da Constituição Estadual do RJ. Autoria : Poder Executivo Processos apensos 0012544-30.2014.8.19.0000 0012748-74.2014.8.19.0000 0012742-67.2014.8.19.0000 0020510-44.2014.8.19.0000 (Alerj N° 9848/14 - este aguarda julgamento da ADI 5131) 0015628-05.2015.8.19.0000 0017812-31.2015.8.19.0000 0017593.86.2013.8.19.0000 (Alerj N° 6343/13) (Não estão cadastrados no SCPP, por não termos recebido Ofício)	N/C	N/C	N/C	3	8	\N	3	2018-03-01 17:56:43	2018-04-18 10:34:00	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201300700033
134	0013529-63.1995.8.19.0000	19464/2007	2	OE	\N	7	16	455272420108190000( ALERJ 16616/2011)	\N	SINDICATO DOS SERVIDORES DO PODER LEGISLATIVO DO ESTADO RJ	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Cumprimento de Senteça no Mandado de Segurança contra ato que determinou a redução dos vencimentos e proventos dos impetrantes. Junto aos processos Alerj 6414 e Alerj 19464)	N/C	_	Ag. Regimental / Aresp e ARE	5	13	\N	2	2018-03-01 17:56:43	2018-05-30 13:16:35	N/C	2018-05-30	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0013529-63.1995.8.19.0000
144	0016512-68.2014.8.19.0000	9109/2014	2	OE	\N	10	35	_	\N	PROCURADOR GERAL DE JUSTIÇA DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outros	Com pedido cautelar em face do Art. 22 da Lei Estadual nº 5.164, de 17 de dezembro de 2007, que autoriza o Poder Executivo a instituir a Fundação Estatal dos Hospitais Gerais, a Fundação Estatal dos Hospitais de Urgência e a Fundação Estatal dos Institutos de Saúde e da Central Estadual de Transplantes, e dá outras providências. Projeto de Lei nº. 1014/2007. Autoria: Poder Executivo. Processo suspenso. Aguardando julgamento da ADI 4247. Obs: apenso 11947/2012. Despacho no sentido de unificar os processos em 01/12/2015.	N/C	_	_	5	\N	24	2	2018-03-01 17:56:43	2018-06-06 17:13:24	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201400700015
136	0014273-23.2016.8.19.0000	8840/2016	2	OE	\N	10	61	N/C	\N	ASSOCIAÇÃO NACIONAL DE RESTAURANTES	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO / EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI Nr 7047 DE 2015 DO ESTADO DO RIO DE JANEIRO, que Altera o artigo 1º da Lei nº 2424, de 22 de agosto de 1995, que passa a ter a seguinte redação: "Art. 1º - Os bares, restaurantes e estabelecimentos similares ficam obrigados a servirem água filtrada, de forma gratuita, aos seus clientes. Parágrafo Único: Será obrigatoriamente filtrada a água natural potável não mineral de que trata o caput deste artigo." . Autoria:André Ceciliano	N/C	N/C	N/C	3	35	\N	2	2018-03-01 17:56:43	2018-06-11 10:46:36	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700027
139	0015250-20.2013.8.19.0000	6222/2013( Junto ao 6510/2013 - Suspensão de Liminar STF)	2	OE	\N	10	17	152554220138190000	\N	ASSOCIAÇÃO DOS NOTÁRIOS E REGISTRADORES DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO E PRESIDENTE	Promovida em face da Lei Estadual nº 6.370/2012 que alterou o Projeto de Lei nº 1.852/2012 para a implementação de novas tabelas de cobrança de custas e emolumentos judiciais, em violação aos artigos 7º, 112, §2º, 113, II e 152 da Constituição Estadual	N/C	DEFERIDA: Seguintes Tabelas anexas à Lei 6370 de 2012: Tabela 20.1 - para valores até R$80.000,00; Tabela 22 - para valores até R$ 80.000,00 e Tabela 25 - quanto ao Item I, Subitem I, Alíneas A à L	RE 220517 e Resp	3	35	\N	3	2018-03-01 17:56:43	2018-06-11 10:46:59	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0015250-20.2013.8.19.0000
146	0016541-84.2015.8.19.0000	13875/2015	2	OE	\N	7	64	Não	\N	ASS. NAC. DOS AUDITORES DOS TRIB. DE CONTAS - AUDICON	GOVERNADOR DO ESTADO RJ, PRESIDENTE DA ALERJ E PRESIDENTE DO TCE/RJ.	Com o objetivo de obstar o procedimento para escolha do novo integrante do TCE/RJ, uma vez que o mesmo não observa os comandos constitucionais e a jurisprudência do STF, bem como anular os atos de indicação em lista e escolha deflagrados pelo Edital da Mesa Diretora da ALERJ. Caso isso não seja possível, que seja assegurado que a primeira vaga que surgir no TCE/RJ recaia sobre auditor aprovado em concurso público.	-	Liminar indeferida, fls 65.	N/C	2	16	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500400403
147	0016661-59.2017.8.19.0000	6721/2017	2	OE	\N	7	48	N/C	\N	ALERJ	GOVERNADOR DO ERJ	MS COM PEDIDO DE LIMINAR CONTRA ATO OMISSO DO CHEFE PODER EXECUTIVO DO ESTADO DO RIO DE JANEIRO, REFERENTE AO repasses ao legislativo - duodécimo	N/C	N/C	N/C	5	13	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700401240
148	0016740-77.2013.8.19.0000	9477/2013	2	OE	\N	10	17	N/C	\N	FEDERAÇÃO DO COMÉRCIO DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO RIO DE JANEIRO E PRESIDENTE DA ALERJ	Trata-se de Representação de Inconstitucionalidade, com pedido liminar, em face da Lei 6.382/2013, que obriga a divulgação, de todos os anúncios, em todas as formas de comunicação a colocarem o nome da marca do produto a venda.	Liminar concedida	Julgada procedente a RI por maioria	AREsp 706.444 negado provimento / Arex 1.006.438 negado provimento	2	14	\N	3	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0016740-77.2013.8.19.0000
149	0017304-17.2017.8.19.0000	8177/2017	2	OE	\N	10	22	Não	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	GOV ERJ / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	PROMOVIDA EM FACE DO ARTIGO 19 CAPUT E § 3º EXPRESSÃO "E DOS CRÉDITOS ARMAZENADOS" DA LEI 5628 DE 2009, DO ERJ, QUE INSTITUI O BILHETE ÚNICO NOS SERVIÇOS DE TRANSPORTE COLETIVO INTERMUNICIPAL DE PASSAGEIROS NA REGIÃO METROPOLITANA DO ESTADO DO RIO DE JANEIRO.	-	Suspender a eficacia das expressões "vale trasnporte" "e os creditos armazenados na forma de valores monetários" e "dos créditos armazenados" do art 19, caput e $3, da lei 5628 de 2009 com redação dada pelo art 2 da lei 7506/2016 ambas do ERJ	-	7	16	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700103
150	0017478-94.2015.8.19.0000	Ainda Não Recebemos Ofício	2	OE	\N	7	44	N/C	\N	ALUISIO GAMA DE SOUZA	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de mandado de segurança impetrado por Aluisio Gama de Souza contra decisão do PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO, DEPUTADO JORGE SAYED PICCIANI, consubstanciado na assembleia que será convocada visando a escolha do substituto do Impetrante para o cargo de Conselheiro do Tribunal de Contas do Estado do Rio de Janeiro, correspondente à vaga destinada àquela Casa Legislativa, a despeito do protocolo 2 do Requerimento Administrativo de Reversão de Aposentadoria que torna novamente indisponível o cargo objeto da decisão coatora que se pretende preventivamente evitar.	N/C	N/C	N/C	\N	\N	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	Estagiário: Luan Moreira, 	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500400473
151	0017539-52.2015.8.19.0000	15090/2015	2	OE	\N	10	31	N/C	\N	FED. DAS CÂM. DOS DIRIGENTES LOJISTAS DO R.J.	GOVERNADOR DO ESTADO DO R.J. E PRESIDENTE ALERJ	Promovida em face Lei 6 613/13, que impõe aos comércios de todo o estado a obrigatoriedade de adoção de livro de reclamações disponível ao consumidor.Desembargador: Reinaldo Pinto Alberto Filho (Junto com os processos Alerj 10727/2014 e Alerj 11379/2014)	N/C	N/C	N/C	7	13	\N	2	2018-03-01 17:56:43	2018-03-01 17:56:43	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700029
152	0017891-39.2017.8.19.0000	11078/2017	2	OE	\N	7	65	N/C	\N	NILCIMAR DE FREITAS VIEIRA	ILMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de mandado de segurança com pedido liminar impetrado por Nilcimar de Freitas Vieira, visando à nulidade do ato do Presidente da ALERJ que deu posse ao Deputado Estadual ARAMIS BRITO e por sua vez reconhecer o impetrante como o suplente apto ao exercício da vaga aberta à Coligação formada pelos Partidos Trabalhista Cristão (PTC) e Social Cristão (PSC).	N/C	N/C	N/C	3	9	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700401325
153	0019422-88.2002.8.19.0000	8217/2003	2	OE	\N	7	43	_	\N	SINDICATO DOS SERVIDORES DO PODER JUDICIÁRIO - SINDJUSTIÇA	GOVERNADORA DO ESTADO DO RIO DE JANEIRO	Denúncia do colendo Órgão Especial do Tribunal de Justiça do ERJ, contra a Governadora do Estado, por crimes contra a Constituição da república, Constituição do Estado do Rio de Janeiro e leis da República. Apensamento Processo: 2004.137.07515 0019422-88.2002.8.19.0000	Liminar concedida	N/C	RExt / Resp / AGRAVO EM RESP / AI 851747 ( ARE, AREsp)	5	14	\N	3	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0019422-88.2002.8.19.0000
154	0019955-47.2002.8.19.0000	14303/2002	2	OE	\N	10	66	N/C	\N	PROCURADOR GERAL DE JUSTIÇA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação de Inconstitucionalidade, com pedido de liminar, de expressões contidas nos Art. 6º e 32 e do §2º do Art. 45, todos da Lei Estadual 2831/97, que dispõe sobre o regime de concessão de serviços e de obras públicas e de permissão da prestação de serviços públicos. AUTORIA: PODER EXECUTIVO	Deferida a liminar (somente art. 32 declarado inconstitucional em julgamento)	N/C	RE 639430 Inclua-se em pauta	3	14	\N	3	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0019955-47.2002.8.19.0000
155	0020021-02.2017.8.19.0000	8181/2017	2	OE	\N	10	67	Não	\N	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 7457 de 2016 do ERJ, que versa sobre MODIFICA A LEI Nº 3189 DE 22 DE FEVEREIRO DE 1999 QUE INSTITUI O FUNDO ÚNICO DE PREVIDÊNCIA SOCIAL DO RIO DE JANEIRO E DÁ OUTRAS PROVIDÊNCIAS. LOTERJ - Recolhimento ao FEEF. Autoria.: Luiz Paulo, Lucinha	-	Concenção de medidade cautelar para suspender a eficacia da lei estadual nº 7457/2016	-	2	16	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700109
156	0020139-66.2003.8.19.0000	7088/2003	2	OE	\N	10	68	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 2804/1997, Art. 19, § 1º, que impôs a manutenção, por quinze anos, de todas as atuais delegações de serviço público de transporte aquaviário. Relator: Marco Aurélio	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0020139-66.2003.8.19.0000
158	0020834-63.2016.8.19.0000	5108/2017	2	ÓRGÃO ESPECIAL	\N	10	64	Não	\N	FEDERAÇÃO DAS INDÚSTRIAS DO ESTADO DO RIO DE JANEIRO FIRJAN	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO RÉU ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI N 7267/2016 ART. 1º DO ERJ, que INSTITUI PISOS SALARIAIS NO ÂMBITO DO ESTADO DO RIO DE JANEIRO PARA AS CATEGORIAS PROFISSIONAIS QUE MENCIONA E ESTABELECE OUTRAS PROVIDÊNCIAS. AUTORIA: PODER EXECUTIVO	Não apreciado	Não apreciado	Não	7	12	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700047
159	0021097-95.2016.8.19.000	6372/2016	2	OE	\N	10	52	N/C	\N	FEDERAÇÃO DO COMÉRCIO DE BENS SERVIÇOS E TURISMO DO ESTADO DO RIO DE JANEIRO FECOMÉRCIO RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO / EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Expressão "que o fixe a maior" contida no Art. 1º da Lei Estadual nº 7267, de 26 de abril de 2016, de autoria do Poder Executivo, que institui pisos salariais no âmbito do ERJ para categorias profissionais que menciona. Autoria: poder Executivo	N/C	Por unanimidade, foi concedida a liminar, nos termos do voto do Desembargador Relator.	N/C	3	8	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700052
160	0021099-65.2016.8.19.0000	7784/2016	2	OE	\N	10	64	Não	\N	FEDERAÇÃO DO COMÉRCIO DE BENS SERVIÇOS E TURISMO DO ESTADO DO RIO DE JANEIRO FECOMÉRCIO RJ	GOVERNADOR DO ESTADO DO RIO DE JANEIRO e PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI N 7267/2016 INC II ART. 1º DO ERJ, que Institui pisos salariais no âmbito do ERJ para as categorias profissionais que menciona e estabelece outras providências a despeito da existência da Lei Federal 12.190/13 que regula e determina que o piso salaria será fixado através de convenção ou acordo coletivo de trabalho, extrapolando os limites estabelecidos pela LC 103/2000, violando o art 72 da CE e o art 22, I e p.u da CF por invadir a compêtencia exclusiva da união para legislar sobre direto do trabalho.	-	Medica cautelar para suspender a eficacia da lei estadual 7267/2016 quanto ao piso salarial da categoria dos comerciários.	-	3	16	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700050
161	0021119-27.2014.8.19.0000	11424/2017	2	OE	\N	10	57	0012538-23.2014.8.19.000	\N	ASSOCIAÇÃO BRASILEIRA DE SHOPPING CENTERS ABRASCE	ALERJ	LEI N° 6.632, DE 13/12/2013, DO ESTADO DO RIO DE JANEIRO, (que dispõe sobre a instalação de sistema de filmagem e gravação pelos prestadores de serviços de estacionamento)	N/C	NÃO APRECIADO	N/C	2	15	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	\N
163	0024489-77.2015.8.19.0000	16216/2015	2	OE	\N	7	70	RMS nº 51550	\N	FRANCISCO ALVES MACHADO NETO (CHICO MACHADO)	PRESIDENTE DA ALERJ	Trata-se de Mandado de Segurança com pedido de liminar inaudita altera parte contra ato praticado pela Mesa Diretora da ALERJ por exigir a renúncia do mandato titular do impetrante como vereador, para que o mesmo possa tomar posse do cargo de Deputado Estadual do Estado do Rio de Janeiro. Desembargador Relator: Jesse Torres Pereira Junior.	Por maioria de votos, denegou-se a segurança, nos termos do voto do Desembargador Relator, vencidos os Desembargadores Ricardo Rodrigues Cardozo, Mauro Dickstein, Carlos Santos de Oliveira, Marcos Alcino de Azevedo Torres, Gabriel de Oliveira Zéfiro, Nilza Bitar, Nildson Araújo da Cruz, Nagib Slaibi Filho e Odete Knaack de Souza que concediam a segurança. Plenário, 23/11/2015. (Acórdão não publicado)	Acordam, por maioria, em dar provimento ao Agravo Regimental nos termos do voto do Relator vencidos os Desembargadores Jessé Torres - Relator, Bernardo Moreira Garcez Neto, Carlos Santos de Oliveira, Maria Inês da Penha Gaspar, Maria Augusta Vaz, Reinaldo Pinto Alberto Filho e Mauro Dickstein, que negavam provimento ao Agravo Regimental. Plenário, 15/06/2015. (fls. 116/122)	N/C	3	11	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500400779
164	0025273-88.2014.8.19.0000	8873/2014	2	OE	\N	10	71	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 6740/14 QUE ALTERA A LEI Nº 6067, DE 25 DE OUTUBRO DE 2011. Art. 1º Altera a ementa da Lei nº 6067, de 25 de outubro de 2011, que passa a ter a seguinte redação:"DISPÕE SOBRE RESERVA DE VAGAS PARA NEGROS E ÍNDIOS NOS CONCURSOS PÚBLICOS PARA PROVIMENTO DE CARGOS EFETIVOS E EMPREGOS PÚBLICOS INTEGRANTES DOS QUADROS PERMANENTES DE PESSOAL DO PODER LEGISLATIVO, JUDICIÁRIO, MINISTÉRIO PÚBLICO, TRIBUNAL DE CONTAS DO ESTADO DO RIO DE JANEIRO E EXECUTIVO DO ESTADO DO RIO DE JANEIRO E DAS ENTIDADES DE SUA ADMINISTRAÇÃO INDIRETA. RELATOR: MARCO ANTONIO IBRAHIM	N/C	N/C	N/C	7	8	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201400700041
162	0023796-93.2015.8.19.000	22581/2015	2	OE	\N	10	64	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RJ	GOVERNADOR DO ESTADO DO RJ E ALERJ	Promovida em face da Lei 4471/2004, que institui na rede oficial e privada de ensino fundamental do ERJ o estudo referente à dependência de substancias entorpecentes ou psíquicas e suas consequências e implanta o programa permanente de orientação e prevenção ao uso de drogas.	Por maioria, julgou-se parcialmente procedente o pedido, com efeitos ex-nunc, nos termos do voto do Desembargador Relator, vencidos os Exmos. DES. NAGIB SLAIBI FILHO, DES. ANTONIO CARLOS NASCIMENTO AMADO e DES. CLAUDIO BRANDÃO. 	Sem pedido liminar	RECURSO EXTRAORDINÁRIO	7	35	\N	3	2018-03-01 17:56:44	2018-06-11 10:46:16	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700073
166	0026049-54.2015.8.19.0000	18061/2015	2	OE	\N	10	22	N/C	\N	PROCURADORIA GERAL DO ESTADO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO E MESA DIRETORA ALERJ	Promovida em face da LEI ESTADUAL Nº 6208/2012 DE 26/04/2012, QUE DISPÕE SOBRE A CRIAÇÃO DO PROGRAMA DE ATENDIMENTO VETERINÁRIO GRATUITO AOS ANIMAIS DOMÉSTICOS DA POPULAÇÃO CARENTE NO ÂMBITO DO ESTADO DO RIO DE JANEIRO.	N/C	N/C	ARE 1062994	4	8	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700083
169	0026457-45.2015.8.19.0000	17148/2015	2	OE	\N	10	31	Junto aos Processos 16461 / 2015 e 19302/2015	\N	FLAVIO NANTES BOLSONARO	ALERJ	COM pedido de liminar ad cautelam pro societate, em face da Lei Estadual nº 7011 de 25 de maio de 2015, que dispõe sobre "o sistema de revista de visitantes nos estabelecimentos de atendimento ao cumprimento de medidas socioeducativas privativas de liberdade do Estado do Rio de Janeiro". Autoria: Marcelo Freixo, Jorge Picciani e Andre Ceciliano.	Sem julgamento de mérito	Com pedido de liminar, ainda não foi apreciado.	Não	2	15	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700092
171	0027238-04.2014.8.19.0000	13283/2014	2	OE	\N	10	74	_	\N	ANOREG RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 6.723/2014, do ERJ, que "dispõe sobre a obrigatoriedade dos cartórios que prestam serviços notariais em informar, ao DETRAN-RJ, a transferência de propriedade de veículos, no ato do reconhecimento de firmas do vendedor e do comprador, apostas no Certificado de Registro de Veículo (CRV)", por meio eletrônico, sem ônus aos usuários. . Autor: Samuquinha	N/C	DEFERIDA: Lei 6.723 de 2014 de ERJ	ARE 1008.132	7	13	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0027238-04.2014.8.19.0000
173	0027315-08.2017.8.19.0000	9676/2017	2	OE	\N	7	76	N/C	\N	FEDERAÇÃO NACIONAL DE EDUCAÇÃO E INTEGRAÇÃO DOS SURDOS	SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Com pedido liminar para implantação do recurso de acessibilidade da legenda oculta na programação da TV ASSEMBLEIA LEGISLATIVA RJ.	N/C	N/C	N/C	7	9	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	\N
175	0027721-29.2017.8.19.0000	10672/17	2	OE	\N	10	37	Não	\N	FLAVIO NANTES BOLSONARO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº7.606, de 26 de maio de 2017, que altera dispositivos da Lei Estadual nº 3.189 de 22 de fevereiro de 1999	Não julgado	Não julgada	Não	2	9	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700132
310	2334	9684/2002	1	N/C	\N	2	2	N/C	\N	CONFEDERAÇÃO NACIONAL DO COMÉRCIO	ALERJ	Promovida em face da Lei nº 3438, de 7/7/2000 que versa sobre a obrigação das distribuidoras de combustíveis a colocarem lacres eletrônicos nos tanques dos postos de combustíveis.Relator: MIN. GILMAR MENDES	N/C	N/C	N/C	5	8	\N	2	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1870764
167	0026148-29.2012.8.19.0000	11152/2012	2	OE	\N	10	63	7062/2018	\N	FEDERAÇÃO DAS INDÚSTRIAS DO ESTADO DO RIO DE JANIERO- FIRJAN	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Com pedido de cautelar a fim de impugnar a Lei Estadual nº 6192, de 03 de abril de 2012, que, contrariando diretamente a Constituição Estadual, impõe aos beneficiados por incentivo ou insenção fiscal a reserva mínima de 10% (dez por cento) de suas vagas para o primeiro emprego.	Julgado procedente o pedido, para declarar a lei impugnada inconstitucional.	N/C	Rex com Agravo (819771)/Rex	3	14	\N	3	2018-03-01 17:56:44	2018-05-29 13:43:59	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0026148-29.2012.8.19.0000
177	0028762-31.2017.8.19.0000	10671/17	2	OE	\N	10	43	Não	\N	FEDERAÇÃO NACIONAL DE HOTÉIS, RESTAURANTES, BARES E SIMILARES FNHRBS	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei 7595/2017 - Inclusão cachaça carta de bebidas. (Autoria: J. Picciani, Luiz Paulo e outros)	Sem julgamento do mérito	Suspensão cautelar dos dispositivos questionados que integram a prefalada norma estadual	Sem recurso	4	\N	24	2	2018-03-01 17:56:44	2018-04-02 10:59:57	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700138
176	0028499-96.2017.8.19.0000	11213/2017	2	OE	\N	10	43	Não	\N	ASSOCIAÇÃO BRASILEIRA DA INDÚSTRIA DE HOTÉIS DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei nº. 7.595/2017	Sem julgamento do mérito	Com pedido liminar	Sem recurso	2	\N	24	2	2018-03-01 17:56:44	2018-04-02 11:02:33	Estagiário: Sávia Midiã,	\N	\N	\N
172	0027307-07.2012.8.19.0000	11213/2012	2	OE	\N	10	75	_	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 443 de 1981 do ERJ - Art. 96, § 2°, inc. IX, com redação dada pela Lei nº.: 2.206, de 27 de dezembro de 1993. que versa sobre a renovação dos quadros de pessoal militar da polícia militar do Estado do Rio de Janeiro e dá outras providências Autoria: Poder Executivo	N/C	_	RE 1121143	7	8	\N	2	2018-03-01 17:56:44	2018-04-11 10:54:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201200700046
170	0026575-50.2017.8.19.0000	9415/2017	2	OE	\N	7	73	N/C	\N	MARCELO RIBEIRO FREIXO e outros	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Com pedido liminar, contra a tramitação sob o regime de urgência o Projeto de lei n°2240/2016, sem que fosse apresentado o necessário álculo atuarial exigido pelo artigo 40, da Constituição da República e artigo 195, da Constituição do Estado do Rio de Janeiro.	N/C	N/C	N/C	2	35	\N	2	2018-03-01 17:56:44	2018-06-11 10:44:38	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700401954
178	0028768-38.2017.8.19.0000	10372/17	2	OE	\N	10	22	 0028702-58.2017.8.19.0000	\N	ASSOCIAÇÃO DAS EMISSORAS DE RÁDIO E TV DO ESTADO DO RIO DE jANEIRO - AERJ	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO / PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	Lei 7498/2016 - Limita desp. publicidade e propaganda prazo de 4 anos (Autoria: Wanderson Nogueira)	Sem julgamento do mérito	Seja a Lei Estadual nº 7498/2016 cautelarmente suspensa até o julgamento final da ação.	Sem recurso	5	16	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700139
179	0029874-35.2017.8.19.0000	10555/2017	2	OE	\N	7	52	Não	\N	FEDERAÇÃO NACIONAL DOS SERVIDORES DOS PODERES LEGISLATIVOS FEDERAL, ESTADUAIS E DO DISTRITO FEDERAL	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Imposto sindical nos vencimentos dos servidores	Sem julgamento do mérito	Com pedido liminar	Sem recurso	7	9	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	\N
180	0029968-77.2017.8.19.0001	Ainda Não Recebemos Ofício	2	5ª V.F.P	\N	13	\N	N/C	29	PAULO SERGIO RAMOS BARBOZA	GOV ERJ/PRESIDENTE DA ALERJ	Contra PL 2345/2017: ALIENAÇÃO DA CEDAE	N/C	N/C	N/C	\N	16	\N	2	2018-03-01 17:56:44	2018-03-01 17:56:44	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.022413-6
184	0031154-41.2017.8.19.0000	Não recebemos ofício	2	OE	\N	10	78	Não	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei 7374/2016 (Objeto: Dispõe sobre a obrigatoriedade das motocicletas, sujeitas a emplacamento anual, serem obrigadas a possuírem antenas corta linha de cerol.)	Sem julgamento do mérito	Com pedido liminar	Sem recurso	\N	9	\N	2	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	\N
186	0031206-71.2016.8.19.0000	9963/2016	2	OE	\N	10	76	N/C	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO /	Promovida em face da LEI 3280 DO ANO DE 1999 DO ESTADO DO RIO DE que INSTITUI NO ÂMBITO DO ESTADO DO RIO DE JANEIRO O ESTUDO DOS LIVROS DA BÍBLIA, INTEGRANDO O ENSINO RELIGIOSO NAS ESCOLAS PÚBLICAS AUTORIA: PAULO ALBERNAZ	N/C	N/C	N/C	7	15	\N	2	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700083
187	0031404-71.2017.8.19.0001	Ainda Não Recebemos Ofício	2	6ª V.F.P	\N	11	\N	N/C	27	Felipe Michel	Estado do RJ e outros	Ação Popular – PL 2345/17 (alienação CEDAE)	N/C	N/C	N/C	\N	12	\N	2	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.023684-9
188	0031439-78.2010.8.19.0000	9371/2010	2	OE	\N	10	44	N/C	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do §4º, do artigo 90, da Constituição do Estado do Rio de Janeiro, acrescentado pela Emenda Constitucional nº 43, par. 13, art. 91. Versa sobre previsões acerca da reitegração ao serviço público de servidor (es) condenado (s) judicialmente por ato administrativo, cujo efeito da pena, entre outros, consiste em demissão que, a posteriori, obtém absolvição judicial.	N/C	N/C	ARE	2	15	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0031439-78.2010.8.19.0000
189	0031441-77.2012.8.19.0000	12688/2012	2	OE	\N	10	71	N/C	\N	FEDERAÇÃO DO COMERCIO DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO RJ E ASSEMBLEIA LEGISLATIVA DO RJ	Promovida em face do artigo 161, a da Costituição do Estado do Rio de Janeiro, ajuiza ação de Representação de Inconstitucionalidade da lei n° 6.190 de 28 de março de 2012, que trata e ESTABELECE CONDIÇÕES PARA A COMERCIALIZAÇÃO DE PRODUTOS ELÉTRICOS E ELETRÔNICOS NO ÂMBITO DO ESTADO DO RIO DE JANEIRO. Relator: Min. Gilmar Mendes	N/C	N/C	N/C	3	8	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0031441-77.2012.8.19.0000
181	0030222-53.2017.8.19.0000	13314/2017	2	OE	\N	10	37	0030847-87.2017.8.19.0000	\N	SINDICATO ESTADUAL DOS PROFISSIONAIS DE EDUCAÇÃO - SEPE	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do artigo 1º da Lei nº 7.606/17, especificamente no que tange à alteração que o mesmo fez do artigo 33 da Lei nº 3.189, de 22 de fevereiro de 1999, majorando a alíquota da contribuição previdenciária dos servidores públicos estaduais de 11% para 14%. AUTORIA DA LEI: PODER EXECUTIVO	Sem julgamento do mérito	Com pedido liminar	Sem recurso	2	\N	24	2	2018-03-01 17:56:45	2018-05-09 12:00:02	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700142
182	0030279-28.2004.8.19.0000	10869/2004	2	OE	\N	7	77	N/C	\N	CARMEM GOUVÊA GOULART	EXMO. SR. PRESIDENTE DA ALERJ	Trata-se de Mandado de Segurança Preventivo coletivo visando afastar a incidência do desconto sob a rubrica de teto remineratório de servidor estadual, em razão da Emenda Constitucional nº 41/2003.	Acordam os Desembargadores, à unanimidade, em rejeitar as preliminares e, no mérito, por maioria, em denegar a ordem cassando-se a liminar concedida, vencidos os Desembargadores Valéria Maron, Azeredo da Silveira e Nascimento Póvoas Vaz. Plenário, 26/03/2007 (fls. 217/224)	Liminar concedida	RMS 25354 RE 606358	3	\N	23	3	2018-03-01 17:56:45	2018-06-06 17:09:40	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0030279-28.2004.8.19.0000
185	0031189-35.2016.8.19.0000	13756/2016	2	OE	\N	10	36	N/C	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outro	Promovida em face da LEI Nº 6901 DE 02 DE OUTUBRO DE 2014 que DISPÕE SOBRE A CONTRATAÇÃO DE PESSOAL POR PRAZO DETERMINADO PARA ATENDER A NECESSIDADE TEMPORÁRIA DE EXCEPCIONAL INTERESSE PÚBLICO, NOS TERMOS DO INCISO IX DO ART. 37 DA CONSTITUIÇÃO FEDERAL, E DÁ OUTRAS PROVIDÊNCIAS. (autoria da Lei: poder executivo)	Procedente em parte.	Sem pedido liminar	N/C	2	35	\N	2	2018-03-01 17:56:45	2018-06-11 10:44:14	N/C	\N	\N	\N
190	0032281-29.2008.8.19.0000	15976/2008	2	OE	\N	10	31	N/C	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Representação por Inconstitucionalidade, com postulação de liminar, ajuizada em face do art. 4º da Lei Complementar nº 118, de 29/11/2008, que "define a atividade de saudade como área de atuação estatal sujeita a desempenho por fundação pública, nos termos do inciso XIX, do art. 37 da Constituição Federal." Projeto de Lei Complementar nº 5/2007 Autoria: Poder Executivo	N/C	“Acordam os Desembargadores, por maioria, em deferir a liminar, suspendendo-se os efeitos do art. 4º, da Lei atacada. Vencido o Des. Sergio Varani”	N/C	3	12	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0032281-29.2008.8.19.0000
191	0032326-52.2016.8.19.0000	9437/2016	2	OE	\N	10	43	N/C	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI Nº 2657 DO ANO 1996 DO ESTADO DO RIO DE JANEIRO art. 14, incisos VI, alínea b, e inciso VIII, DISPÕE SOBRE O IMPOSTO SOBRE CIRCULAÇÃO DE MERCADORIAS E SERVIÇOS E DÁ OUTRAS PROVIDÊNCIAS.	N/C	N/C	N/C	3	11	\N	2	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700100
192	0032589-94.2010.8.19.0000	9229/2010	2	OE	\N	10	79	_	\N	FEDERAÇÃO DO C OMÉRCIO DO EST. DO RIO DE JANEIRO FECOMERCIO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outros	Visa a suspensão da eficácia e a definitiva declaração de Inconstitucionalidade,sem redução do texto de Lei 5.502, de 15/07/2009 - ''DISPÕE SOBRE A SUBSTITUIÇÃO E RECOLHIMENTO DE SACOLAS PLÁSTICAS EM ESTABELECIMENTOS COMERCIAIS LOCALIZADOS NO ESTADO DO RIO DE JANEIRO COMO FORMA DE COLOCÁ-LAS À DISPOSIÇÃO DO CICLO DE RECICLAGEM E PROTEÇÃO AO MEIO AMBIENTE FLUMINENSE''. NUM CNJ - 0032589-94.2010.8.19.0000 - PROCESSO VINCULADO A ADI 4483 ( aguardando julgamento desta ADI) Processo Unificado ao Alerj 9227/2010.	N/C	_	_	2	12	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201000700033
193	0032597-47.2005.8.19.0000	1749/2006	2	OE	\N	10	80	N/C	\N	ORDEM DOS ADVOGADOS DO BRASIL SECAO DO RIO DE JANEIRO REP/P/S/PRESIDENTE	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 4578 DO ANO 2005 DO ESTADO DO RIO DE JANEIRO - ARTIGO 1 CAPUT, ARTIGO 3, ARTIGO 4- Dispõe sobre os conciliadores e os juízes leigos no âmbito do poder judiciário do estado do rio de janeiro, altera a redação do artigo 12, caput, e §§ 1º, 2º, 3º, 4º e 5º, revoga seus §§ 6º e 7º e altera a redação do artigo 13 e seu parágrafo único, da lei nº 2.556, de 21 de maio de 1996, que cria os juizados especiais cíveis e criminais na justiça do estado do rio de janeiro, dispõe sobre sua organização, composição e competência, acrescenta parágrafo ao artigo 10 da lei nº 1.395, de 08 de dezembro de 1988, altera a redação de dispositivos da lei nº 1.624, de 12 de março de 1990 e dá outras providências. Autoria: Poder Judiciário	N/C	N/C	N/C	2	8	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=200500700219
195	0032744-87.2016.8.19.0000	ALERJ não é pate	2	OE	\N	10	82	Alerj n é parte	\N	MARCELO RIBEIRO FREIXO e outros_x000D_	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO_x000D_	Promovida em face do DECRETO NR 45692 DO ANO DE 2016 DO ESTADO DO RIO DE JANEIRO / Estado de calamidade ERJ, jogos olímpicos..._x000D_	-	-	-	\N	16	\N	2	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	\N
197	0033320-66.2005.8.19.0000	6807/2005	2	OE	\N	10	84	N/C	\N	LUIZ PAULO CORREA DA ROCHA	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Com pedido de suspensão liminar de eficácia dos Art. 6° a 12 da Lei Estadual 4.546/05 que institui o Fundo de Aplicações Econômicas e Sociais do Estado do RJ-FAES, cria a agência FAES, dispõe sobre extinção do crédito tributário mediante compensação, na forma que menciona, e dá outras providências.	Não concedida	N/C	N/C	7	14	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=200500700034
200	0034379-50.2009.8.19.0000	15397/2009	2	OE	\N	10	86	N/C	\N	FED.NAC.DE HOTEIS, RESTAURANTES E BARES FNHRBS	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação de inconstitucionalidade em face dos enunciados normativos contidos na Lei nº 5517, de 17/08/2009, que proibe o consumo de cigarros, cigarrilhas, charutos, cachimbos, em locais fechados. STF ADI 4603 (AUTORIA PODER EXECUTIVO) (SUBPROCURADORA JULIETE STOHLE) (RELATOR: DES. MARIO ROBERT MANNHEIMER).	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=200900700058
201	0034643-67.2009.8.19.0000	5249/2009	2	OE	\N	10	87	ADPF 199	\N	FLAVIO NANTES BOLSONARO	ALERJ	Promovida em face da Lei Estadual nº 5346, de 11/12/2008, que versa sobre o novo sistema de cotas para ingresso nas universidades estaduais e dá outras providências. Autoria: Poder Executivo ( Sérgio Cabral) / Manifestação MP: pela improcedencia.	Improcedente por maioria	DEFERIDA com efeitos ex nunc por maioria: Lei Estadual 5.346 de 2008	RE pelo autor. Tal recurso foi arquivado pois está sobrestado, tendo como paradigma o RE 597285/RS. / 18/09/2012: Arquiamento	2	12	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=200900700009
194	0032612-40.2015.8.19.0202	11605/2017	2	1ª VARA DE FAMÍLIA	\N	16	\N	Não somos parte	81	INSTITUTO DE PREVIDÊNCIA DA ALERJ	HILDA MESQUITA DOS SANTOS	PAGAMENTO INDEVIDO DE BENEFÍCIO PREVIDENCIÁRIO	Sem julgamento do mérito	Sem pedido liminar	Não	3	14	\N	3	2018-03-01 17:56:45	2018-04-19 15:11:04	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2015.202.032241-0
196	0033108-45.2005.8.19.0000	11759/2005	2	OE	\N	10	83	_	\N	ASSOCIAÇÃO DE CLÍNICAS DE TRANSITO DO EST. DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DORIO DE JANEIRO	Promovida em face da Lei 4573 de 11/07/2005 que isenta os motoristas profissionais que encontram-se desempregados, do pagamento da taxa de renovação de sua carteira de habilitação. Autoria: Deputado Gilberto Palmares.	N/C	_	Agravo de Instrumento em RE 603408	2	35	\N	3	2018-03-01 17:56:45	2018-06-11 10:43:50	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0033108-45.2005.8.19.0000
202	0034654-96.2009.8.19.0000	6146/2009	2	OE	\N	10	88	N/C	\N	JOÃO PEDRO CAMPOS DE ANDRADE FIGUEIRA	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Com pedido de concessão de medida cautelar em face do Governador do ERJ e do Presidente da ALERJ, tendo como objeto a declaração de inconstitucionalidade do Art. 3º da Lei Estadual nº 5351 de 15 de dezembro de 2008, que dispõe sobre medidas para incremento da cobrança de créditos inscritos em dívida ativa do ERJ que altera a lei n° 1582, de 04/12/1989, viola o Art. 176, § 6° da CF, etc.	Não apreciada (julgada improcedente a RI)	N/C	N/C	3	14	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0034654-96.2009.8.19.0000
203	0034722-46.2009.8.19.0000	14054/2009	2	OE	\N	10	86	_	\N	ASSOCIAÇÃO DOS DELEGADOS DE POLICIA DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei n ° 5.517, de 17 de agosto de 2009, que proíbe o consumo de cigarros, cigarrilhas, charutos, cachimbos ou de qualquer outro produto fumígeno, derivado ou não do tabaco, e cria ambientes de uso coletivo livres de tabaco. Relator:Desembargador Binato de Castro	N/C	NÃO APRECIADA	_	2	12	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=200900700049
205	0035057-21.2016.8.19.0000	10148/2016	2	OE	\N	10	89	N/C	\N	ORDEM DOS ADVOGADOS DO BRASIL SEÇÃO DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOV ERJ	Promovida em face da LEI NR 7181 DO ANO DE 2015 DO ESTADO DO RIO DE JANEIRO	Vistos, relatados e discutidos estes autos de Representação de Inconstitucionalidade n° 0035057-21.2016.8.19.0000 em que é representante ORDEM DOS ADVOGADOS DO BRASIL – SEÇÃO DO ESTADO DO RIO DE JANEIRO e representados EXMOS. SR. GOVERNADOR DO ESTADO DO RIO DE JANEIRO E SR. PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO. ACORDAM os Desembargadores que compõem o Órgão Especial do Tribunal de Justiça do Estado do Rio de Janeiro, por unanimidade de votos, em julgar procedente o pedido deduzido na representação para declarar a inconstitucionalidade da Lei estadual n° 7.181/15. Trata-se de representação de inconstitucionalidade ajuizada pela Ordem dos Advogados do Brasil em virtude da Lei estadual n° 7.181/15, de iniciativa do chefe do poder executivo, que dispõe sobre a determinação de realização presencial de cursos de atualização e reciclagem, bem como cursos para obtenção da primeira habilitação junto ao Detran/RJ, e dá outras providências	Indeferida	Embargos de Declaração ( que foi negado) / Recurso extraordinário ( admitido)	7	11	\N	2	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700120
210	0038727-43.2011.8.19.0000	521/2012	2	OE	\N	10	17	Anexo 10620/12 em 14/09/2015	\N	ASCOFERJ - ASSOCIAÇÃO DO COM. FARMACEUTICO DO ESTADO DO RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Estadual nº 5.952, de 18 de abril de 2011, que dispõe sobre a obrigatoriedade de empresas que utilizarem serviço de entrega através de motoboys, ou que possuam frota própria para o serviço, contratarem apólice de seguro para seus funcionários e dá outras providências.	-	Não	Recurso Extraordinário com Agravo (ARE 906689) e Agravo em recurso especial (Aresp 388.646)	2	16	\N	3	2018-03-01 17:56:45	2018-03-01 17:56:45	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0038727-43.2011.8.19.0000
211	0039800-74.2016.8.19.0000	13600/2016	2	OE	\N	10	58	N/C	\N	ASSOCIAÇÃO DE OFICIAIS MILITARES ESTADUAIS DO RIO DE JANEIRO AME RJ	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação de inconstitucionalidade, com pedido cautelar, em face da Emenda Constitucional n. 67 DO ESTADO DO RIO DE JANEIRO DO ANO DE 2016	Pedido cautelar indeferido	N/C	N/C	7	14	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700150
212	0040641-35.2017.8.19.0000	12271/2017	2	OE	\N	10	70	Não	\N	EXMO SR PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação por inconstitucionalidade da Lei Estadual nº 1.847, de 21 de julho de 1991 (Paulo Melo), por violação à Constituição do Estado do Rio de Janeiro. Trata-se de lei estadual que “Dispõe sobre a obrigatoriedade da estada de ascensoristas nos locais de que trata”.	Sem julgamento do mérito	NÃO APRECIADO	N/C	7	8	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	\N
207	0035681-38.2014.8.19.0001	17228/2015	2	9ª V.F.P	\N	8	\N	N/C	90	MINSTÉRIO PÚBLICO	MARIA APARECIDA PANISSET	Não somos parte, mas a qualquer momento seremos citados	N/C	N/C	N/C	2	\N	23	2	2018-03-01 17:56:45	2018-03-22 10:34:15	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.030152-5
204	0034957-32.2017.8.19.0000	11547/2017	2	OE	\N	7	57	Não	\N	MARCELO RIBEIRO FREIXO	MESA DIRETORA DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Contra ato da mesa, na forma do artigo 20, § 3°, do Regimento Interno: análise do recurso por eles interposto contra decisão do Presidente da Casa que rejeitou liminarmente denúncia por crime de responsabilidade ofertada contra Governador e Vice-Governador ("impeachment").	Sem julgamento do mérito	Pedido liminar indeferido	Não	4	\N	24	2	2018-03-01 17:56:45	2018-03-07 10:57:00	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700402459
209	0037205-70.2014.8.19.0001	3208/2014	2	5ª V.F.P	\N	13	\N	N/C	29	JORGE ROBERTO SAAD SILVEIRA	TRIBUNAL DE CONTAS DO ESTADO DO RIO DE JANEIRO - TCE	Ação Ordinária que alega ilegitimidade da atual composição do egrégio tribunal de Contas do Estado do Rio de Janeiro; que implica na nulidade do parecer prévio emitido no processo TCE/RJ 210.877-81398.	N/C	N/C	N/C	7	\N	23	2	2018-03-01 17:56:45	2018-05-23 10:20:14	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.031570-6
213	0041378-72.2016.8.19.0000	1820/2017	2	OE	\N	10	91	N/C	\N	FEDERAÇÃO DAS INDÚSTRIAS DO ESTADO DO RIO DE JANEIRO FIRJAN	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOV ERJ	Promovida em face da Lei 7328 DO ANO DE 2016 DO ESTADO DO RIO DE JANEIRO, QUE ALTERA A LEI 4946, DE 20 DE DEZEMBRO DE 2006, QUE DISPÕE SOBRE A OBRICATORIEDADE DA UTILIZAÇÃO DE LACRES DE SEGURANÇA NAS EMBALAGENS DOS PRODUTOS FABRICADOS PELA INDÚRTRIA DE COSMÉTICOS QUE SÃO COMERCIALIZADOS NO ESTADO DO RIO DE JANEIRO. AUTORIA: CIDINHA CAMPOS	N/C	N/C	N/C	2	12	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700158
215	0042460-75.2015.8.19.0000	20670/2015	2	OE	\N	10	25	_	\N	SINDICATO DAS EMPRESAS DE RADIODIFUSÃO DO ESTADO DO RJ	ALERJ E GOVERNADOR DO RIO DE JANEIRO	Promovida em face da Lei Estadual 6.983/2015, artigo 1º, inciso VIII, por incluir a categoria de jornalista. A lei institui pisos salariais no âmbito do Estado do Rio de Janeiro para as categorias profissionais. AUTOR: Poder Executivo	N/C	Liminar concedida	_	7	12	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700150
217	0045496-54.2017.8.19.0001	Ainda Não Recebemos Ofício	2	13ª V.F.P	\N	7	\N	N/C	39	Picciani e Estado do RJ	N/C	Pedido de suspensão do concurso público de 2016, para que os cargos de especialista legislativo seja reservado somente para candidatos com diploma de Bacharel em Administração	N/C	N/C	N/C	\N	9	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	\N
218	0045527-24.2010.8.19.0000	16616/2011	2	OE	\N	7	93	0013529-63.1995.8.19.0000	\N	SINDICATO DOS SERVIDORES DO PODER LEGISLATIVO DO ESTADO RJ	PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Cumprimento de Senteça no Mandado de Segurança contra ato que determinou a redução dos vencimentos e proventos dos impetrantes. (Procuradora: Juliete) (Relator: Manoel Alberto Rebelo Dos Santos). Processo apenso ao ALERJ 19464/07, Judicial 615/95.	N/C	N/C	N/C	5	9	\N	3	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0045527-24.2010.8.19.0000
220	0046339-37.2008.8.19.0000	1035/2009	2	OE	\N	7	95	N/C	\N	ÁLVARO LINS DOS SANTOS	PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do Ato do Presidente da ALERJ, consubstaciado na Resolução 473/08, que decretou a perda do mandato do Deputado Estadual Álvaro Lins. Junto ao 10628/2008 ( Está junto ao 10628/2008 que está arquivado, mas aquele deve ser acompanhado).	N/C	N/C	N/C	5	14	\N	3	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0046339-37.2008.8.19.0000
221	0047693-63.2009.8.19.0000	7701/2009 (2 volumes)	2	OE	\N	7	96	_	\N	CONFEDERAÇÃO DOS SERVIDORES PUBLICOS DO BRASIL CSPB	PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Mandado de Segurança Preventivo, com pedido liminar, em face de possíveis atos omissivos a serem praticados pelos EXMO. Desembargador Presidente do TJ/RJ, EXMO. SR. Governador do RJ e EXMO. SR. PRESIDENTE DA ALERJ, no que se refere ao recolhimento, em seu favor, da parte da contribuição sindical compulsória que deverá incidir sobre a remuneração de todos os servidores públicos civis, ativos e inativos, que possuam vínculo estatutário com os impetrados, independentemente serem a ela filiados, por força do estatuído nos arts. 578 e seguintes da Consolidação das Leis do Trabalho (CLT) e na Instrução Normativa nº I, de 30/09/08. ( Rcl 33796)	Acordam os Desembargadores do Órgão Especial do Tribunal de Justiça do Estado do Rio de Janeiro, por unanimidade, em denegar a segurança, nos termos do voto da Desembargadora Relatora. Rio, 09/11/2009.	_	RMS nº 32091 / RJ	7	11	\N	3	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0047693-63.2009.8.19.0000
222	0049479-81.2005.8.19.0001	9278/2005	2	5ª V.F.P	\N	13	\N	_	33	WALDICEIA ALVES RANGEL RODRIGUES	BANCO ITAÚ	ação de cobrança c/c indenização em face do BANCO ITAÚ e do ERJ pleiteando o pagamento do valor relativo ao seguro de vida contratado junto ao 1º Réu, além de indenização por danos morais.	N/C	_	_	3	11	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0049479-81.2005.8.19.0001
223	0049577-54.2014.8.19.0000	10727/2014	2	OE	\N	10	31	N/C	\N	SINDICATO DO CONCESSIONÁRIOS - SINCODIV/RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Ordinária estadual nº: 6.613/13, que DISPÕE SOBRE A CRIAÇÃO DO LIVRO DE RECLAMAÇÕES EM TODOS OS ESTABELECIMENTOS DE FORNECIMENTO DE BENS OU PRESTAÇÃO DE SERVIÇOS NO ESTADO DO RIO DE JANEIRO. Relator: Reinaldo Pinto Alberto Filho (Junto aos processos Alerj 15090 e Alerj 11379)	Por maioria, julgou-se parcialmente procedente a Direta de Inconstitucionalidade, nos termos do voto do Desembargador Relator; VENCIDO o Desembargador Nagib Slaib Filho que, preliminarmente, não conhecia do pedido por falta de pertinência temática e, no mérito, julgava improcedente o pedido. Lavrará o acórdão o Exmo. Sr. DES. REINALDO PINTO ALBERTO FILHO. Fez uso da palavra o Dr. Jorge Miguel, pela ALERJ.	Com pedido de liminar, ainda não apreciado.	Recurso STF nº 161/2017	7	13	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201400700111
219	0045985-94.2017.8.19.0000	13599/2017 e 18589/2017	2	OE	\N	7	94	Não	\N	MARCELO RIBEIRO FREIXO e outros	MESA DIRETORA DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	MS, com pedido liminar, contra ato ilegal e abusivo da Mesa Diretora da Alerj (CPI para investigar irregularidades da gestão pública no setor de transportes)	Tem pedido liminar ainda não apreciado	N/C	N/C	4	\N	24	2	2018-03-01 17:56:46	2018-06-06 17:08:59	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700403012
214	0041784-06.2010.8.19.0000	13894/2010	2	OE	\N	10	92	_	\N	ASSOC. DOS NOTÁRIOS E REGISTRADORES DO ESTADO DO RJ - ANOREG	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos art. 1º, art. 2º, §§ 1º e 3º do art. 3º e 4º da Lei nº 5788/2010 do Estado do Rio de Janeiro, que "estabelece procedimentos relativamente a custas e emolumentos cartorários para empreendimentos dentro do programa Minha Casa, Minha Vida e parcelamento de solo e incorporações imobiliárias em geral".	N/C	_	RE 835224 e AREsp 344794	3	35	\N	3	2018-03-01 17:56:46	2018-06-11 10:42:46	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0041784-06.2010.8.19.0000
225	0050597-80.2014.8.19.0000	12108/2015	2	OE	\N	10	64	505839620148190000	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO ESTADO DO RJ E ALERJ	Promovida em face da Lei 6.057/2011 do ERJ, que " dispõe sobre o ensino e noçoes do holocausto nazista na ree estadual de ensino." Autoria da Lei: Gerson Bergher	N/C	_	_	2	15	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201400700113
226	0050920-85.2014.8.19.0000	11379/2014	2	OE	\N	10	31	Não	\N	ASSOCIAÇÃO NACIONAL DOS RESTAURANTES	GOVERNADOR DO ESTADO E ALERJ	Promovida em face da Lei Estadual nº 6.613/2013 ( '' DISPÕE SOBRE A CRIAÇÃO DO LIVRO DE RECLAMAÇÕES EM TODOS OS ESTABELECIMENTOS DE FORNECIMENTO DE BENS OU PRESTAÇÃO DE SERVIÇOS NO ESTADO DO RIO DE JANEIRO'') , que visa reforçar os procedimentos de defesa dos direitos dos consumidores, tornando obrigatória a existência e disponibilização do Livro de Reclamações em todos os estabelecimentos sujeitos ao CDC. O Representante utilizou os fundamentos jurídicos de vício de iniciativa (suposta ofensa ao art. 112, § 1º, da Constituição Estadual), afronta ao princípio da razoabilidade e do devido processo legal. Há, também, pedido liminar de suspensão da eficácia da lei. Autor: Wagner Montes ( Junto aos processos Alerj 10727/2014 e Alerj 15090/2015)	Órgão Especial, por maioria,julga procedente em parte a representação para declarar a inconstitucionalidade artigos 8º, caput e parágrafo único; 11, caput e incisos I e II; e 12 da Lei Estadual nº 6.613/2013, por violação dos preceitos inscritos nos artigos 7º; 112, § 1º, inc. II, alínea “d”; da Constituição do Estado do Rio de Janeiro e, por arrastamento, do inciso I do artigo 3º do Decreto n.º 44.810 de 26/05/2014, vencido Desembargador Nagib Slaib Filho que, preliminarmente, não conhecia do pedido por falta de pertinência temática e, no mérito, julgava improcedente o pedido.	Julgado no Mérito	ARE 1066810	7	13	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201400700115
227	0051802-42.2017.8.19.0000	Ainda Não Recebemos Ofício	2	OE	\N	7	41	Não	\N	VAGNER BENEVENUTO CELLINE	PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Sistema Alô Alerj Cidadão	Sem julgamento do mérito	Não apreciado	Não	\N	12	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	\N
229	0053340-29.2015.8.19.0000	23560/2015	2	OE	\N	10	43	_	\N	PROCURADOR GERAL DO ESTADO DO RJ	ALERJ	Promovida em face da Lei 7.009/2015, que declara os limites territoriais dos municipios de Volta Redonda e Barra do Piraí.	Sem julgamento de mérito	DEFERIDA: Lei 7009 de 2015 do ERJ	Não	7	14	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700176
230	0054261-48.2016.8.19.0001	ALERJ não é parte	2	11ª V.F.P	\N	7	\N	Alerj n é parte	97	BG E P BRASIL LTDA e outroS_x000D_	INSPETOR CHEFE DA INSPETORIA DE FISCALIZAÇÃO ESPECIALIZADA IFE 04 DA SECRETARIA DE ESTADO DE FAZENDA DO RIO DE JANEIRO e outros	LEI 7182/2015 conceder em definitivo a segurança pleiteada, para, confirmando a liminar, assegurar o seu direito líquido e certo das Impetrantes (incluindo as suas filiais localizadas nesse Estado) de NÃO se sujeitarem (a) à incidência da TFPG, afastando, assim, as inconstitucionais e ilegais disposições da Lei n° 7.182/2015, bem como de suas atuais e posteriores regulamentações, e (b) ao cumprimento de eventuais obrigações acessórias estabelecidas pelo Estado do Rio de Janeiro relacionadas à Lei no 7.18212015, afastando-se a TEXT R10/171197Av111 198811 ,10 9 11 ~ MACHADOMEYER ........................ www.m a a h a 0 o me y e r. to m. br aplicação de penalidades/sanções de q	N/C	N/C	N/C	\N	16	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	\N
231	0055176-66.2017.8.19.0000	14976/2017	2	OE	\N	7	56	Não	\N	PAULO SERGIO RAMOS BARBOZA	EXMO SR PRESIDENTE EM EXERCÍCIO DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	MANDADO DE SEGURANÇA PREVENTIVO COM PEDIDO DE LIMINAR  PARA RECONHECER A LEGITMIDADE DA AÇÃO, NO SENTIDO DE SUSPENDER A VOTAÇÃO DO PROJETO DE LEI Nº 3.418/2017.	Sem julgamento do mérito	Liminar concedida	Não	5	16	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	\N
233	0057100-25.2011.8.19.0000	5935/2012	2	OE	\N	10	35	_	\N	LUIZ PAULO CORREA DA ROCHA E OUTROS	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI ESTADUAL 6.043 DE 19 DE SETEMBRO DE 2011 (DISPÕE SOBRE A QUALIFICAÇÃO DE ENTIDADES SEM FINS LUCRATIVOS COMO ORGANIZAÇÕES SOCIAIS, NO ÂMBITO DA SAÚDE, MEDIANTE CONTRATO DE GESTÃO), AFRONTA AO ART. 77 DA CONSTITUIÇÃO ESTADUAL (MORALIDADE E IMPESSOALIDADE NAS CONTRATAÇÕES PÚBLICAS) - Autoria PODER EXECUTIVO. (PROCURADOR DR.SÉRGIO CARNEIRO).	N/C	_	_	7	15	\N	3	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201100700079
232	0056611-12.2016.8.19.0000	15026/2016	2	OE	\N	10	50	N/C	\N	SINDICATO DAS EMPRESAS DE COMPRA VENDA LOCAÇÃO E ADMINISTRAÇÃO DE IMÓVEIS E DOS CONDOMÍNIOS RESIDENCIAS E COMERCIAIS EM TODO ESTADO DO RIO DE JANEIRO SECOVI RJ	ALERJ / Gov. ERJ	Promovida em face da Lei 7.351 de 14 de julho de 2016, do ERJ, que dispõe sobre a responsabilidade das administradoras de imóveis (Imobiliárias) no combate do criadouro de mosquito Aedes Aegypti e Aedes Albopictus, em imóveis de sua administração. Autoria: Dep. Bernardo Rossi	declaração de inconstitucionaliade da Lei Estadual 7.351/16	suspender os efeitos da Lei Estadual nº 7.351/16	-	7	\N	23	2	2018-03-01 17:56:46	2018-03-09 10:56:17	Estagiário: Luan Moreira,	\N	\N	\N
224	0049659-80.2017.8.19.0000	15459/2017	2	OE	\N	10	49	Não	\N	ORDEM DOS ADVOGADOS DO BRASIL, SEÇÃO DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Inteiro teor da Lei nº 7.374 de 14 de julho 2016, que legisla sobre a obrigatoriedade dos veículos ciclomotores, motocicletas e triciclos possuírem antena contra linha cortante, gerando, além de uma inconstitucionalidade formal, a material, pois fere o princípio da isonomia (autoria: Bebeto).	Sem julgamento do mérito	Liminar indeferida	Não	7	9	\N	2	2018-03-01 17:56:46	2018-04-19 10:32:51	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700239
235	0057920-68.2016.8.19.0000	1144/2017	2	OE	\N	10	50	N/C	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ALERJ / GOV ERJ	Promovida em face da Lei 6998 de 08 de maio de 2015 do ERJ, que dispõe sobre o direito à objeção de consciência como escusa ao princípio constitucional insculpido no artigo 9º, §1º da Constituição Estadual. Autoria: Ricardo Abrão e Luiz Paulo	N/C	N/C	N/C	2	11	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700186
236	0058516-52.2016.8.19.0000	14614/2016	2	OE	\N	7	98	SS 5156	\N	LUIZ PAULO CORRÊA DA ROCHA	ALERJ / GOV ERJ	Trata-se de mandado de segurança impetrado por parlamentar contra alegada ilegalidade no processo legislativo, onde também vislumbra violação de direitos fundamentais, pleiteando-se, inclusive liminarmente, seja suspensa a tramitação do Projeto de Lei nº 2241/2016, mensagem 38 de 04/11/2016, de autoria do Exmo. Sr. Governador do Estado do Rio de Janeiro, com o objetivo de instituir “provisoriamente, pelo prazo de 4 (quatro) quadrimestres, alíquota adicional extraordinária da contribuição previdenciária”, a exação de 16% (dezesseis por cento) sobre a remuneração de todos os servidores ativos e inativos do Estado do Rio de Janeiro e fixando a alíquota de 30% sobre a remuneração dos servidores inativos que recebem a abaixo do teto do INSS (R$ 5.189,82). ( SS 5156)	N/C	N/C	N/C	3	13	\N	2	2018-03-01 17:56:46	2018-03-01 17:56:46	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600404175
241	0059568-59.2011.8.19.0000	2688/2013	2	OE	\N	10	79	N/C	\N	FLAVIO NANTES BOLSONARO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 6067, 25 de outubro de 2011, que "dispõe sobre reserva de vagas para negros e índios nos concursos públicos para provimento de cargos efetivos e entidades da administração indireta do Estado do Rio de Jneiro. DES. SIDNEY HARTUNG BUARQUE	N/C	N/C	ARE 8317843	3	11	\N	3	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0059568-59.2011.8.19.0000
242	0059639-85.2016.8.19.0000	N/C	2	OE	\N	7	92	N/C	\N	Zaqueu Teixeira	N/C	Objeto:Projeto de Lei no 2.245/2016 visa o “congelamento” por 04 (quatro) anos dos vencimentos base das categorias abrangidas pelas Leis nos 6.833, 6.840, 6.841 e 6.851, todas do ano de 2014, sendo elas, respectivamente, Polícia Civil, Polícia Militar e Bombeiro Militar, Inspetor de Segurança e Administração Penitenciária e Auditor Fiscal da Receita Estadual.	N/C	Liminar indeferida	N/C	\N	13	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600404274
243	0059897-95.2016.8.19.0000	15210/2016	2	OE	\N	17	21	201700000651	\N	Jorge Bulcão Coelho e outros	Presidente da ALERJ e outros	Acesso à Casa Legislativa	N/C	N/C	N/C	3	13	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201605927823
245	0063240-02.2016.8.19.0000	1661/2017	2	OE	\N	10	98	N/C	\N	FEDERAÇÃO DO COMÉRCIO DE BENS SERVIÇOS E TURISMO DO ESTADO DO RIO DE JANEIRO FECOMÉRCIO RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida me face da LEI 7428 DO ERJ LEGISLAÇÃO DECRETO 45810 DO ANO DE 2016 DO ERJ ( ADI 5635 trata da mesma lei e MS 0407299-96.2016.8.19.0001) FEEF	N/C	Pedido Liminar deferido para para suspender a exigibilidade da exação	N/C	3	12	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700292
246	0063754-52.2016.8.19.0000	15636/2016	2	13ª CAM. CÍVEL	\N	15	36	006129747.2016.8.19.0000 / 039452364.2016.8.19.0000	\N	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO ALERJ	MINISTERIO PUBLICO DO ESTADO DO RIO DE JANEIRO	Interposto contra decisão preferida nos autos de ACP ajuizada pelo MP em face do ERJ(0394523- 64.2016.8.19.0001), em que foi deferida tutela de urgência para que a ALERJ providenciasse “o acesso às dependências da Casa para acompanhamento de discussões e votações de projetos de lei do ‘pacote de austeridade’. Junto aos processos ALERJ 15210/2016 e ALERJ 15061/2016	N/C	Deferido	N/C	2	13	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	\N
240	0059461-39.2016.8.19.0000	14852/2016	2	OE	\N	7	52	1067	\N	SIND JUSTI�A SINDICATO DOS SERVIDORES DO PODER JUDICI�RIO DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	garantir livre acesso servidores	N/C	N/C	N/C	3	\N	24	2	2018-03-01 17:56:46	2018-04-19 12:09:50	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600404271
238	0059258-82.2013.8.19.0000	7218/2016	2	OE	\N	10	99	N/C	\N	SINTERJ SINDICATO DOS TITULARES DE SERVENTIAS OFÍCIOS DE JUSTIÇA E SIMILARES DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO / ALERJ	Promovida em face LEI Nº 5352/2008 ART. 1º do Estado do Rio de Janeiro, de 18 de Dezembro de 2008, que entre outras disposições, altera o art. 35 da Lei nº 5260, de 11 de junho de 2008, para impor a vedação da incorporação das gratificações que especifica aos proventos do servidor aposentado.	N/C	N/C	N/C	2	35	\N	2	2018-03-01 17:56:46	2018-06-11 10:43:09	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201300700108
237	0059022-28.2016.8.19.0000	14877/2016	2	OE	\N	7	43	0059391-22.2016.8.19.0000	\N	Flávio Bolsonaro	Governador do RJ e Presidente da ALERJ	Objeto: PL 2244 :extinção do adicional por tempo de serviço do funcionalismo público civil e militar	controlar judicialmente a tramitação do Projeto de Lei nº 2244/2016	pedido de liminar a ser apreciado após vinda das informações dos impetrados.	-	2	35	\N	2	2018-03-01 17:56:46	2018-06-11 10:33:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600404227
244	0061223-27.2015.8.19.0000	24375/2015	2	OE	\N	10	36	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ERJ	GOVERNADOR DO ERJ E PRESIDENTE ALERJ	Promovida em face da Lei Estadual 4.295/2004, que dispõe, AUTORIZA OS DIRETORES DE ESCOLAS PÚBLICAS ESTADUAIS, A CEDER ESPAÇO PARA A REALIZAÇÃO DE ENCONTRO DE CASAIS, JOVENS E ADOLESCENTES DO TODOS OS GRUPOS RELIGIOSOS E DÁ OUTRAS PROVIDÊNCIAS. Autoria: EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	N/C	N/C	ARE 1075428	7	35	\N	2	2018-03-01 17:56:47	2018-06-11 10:33:25	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700218
239	0059391-22.2016.8.19.0000	14854/2016	2	OE	\N	7	43	0059022-28.2016.8.19.0000	\N	Rejane de Almeida	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outros	Objeto: PL 2244 :extinção do adicional por tempo de serviço do funcionalismo público civil e militar	N/C	liminar concedida	N/C	2	35	\N	2	2018-03-01 17:56:46	2018-06-11 10:43:27	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600404249
248	0064958-34.2016.8.19.0000	16174/2016 (JUNTO COM O 43/2017 E 755/2017)	2	OE	\N	7	58	SL 1083 / 0066692-20.2016.8.19.0000	\N	FLAVIO NANTES BOLSONARO	Presidente ALERJ	Trata-se de Mandado de Segurança com pedido de liminar impetrado por FLAVIO NANTES BOLSONARO contra ato praticado pelo EXMO. SR. PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO visando seja declarado o resultado real das votações dos destaques ao Projeto de Lei 2242/2016, ou seja, a rejeição daqueles destaques que tratam do aumento da alíquota de ICMS incidentes sobre energia elétrica, gasolina, serviço de comunicação, cerveja, chope e da majoração do percentual devido pelas empresas ao Fundo Estadual de equilíbrio Fiscal (FEEF) e lternativamente, o Impetrante pleiteia a V. Excelência a suspensão liminar imediata da tramitação do Projeto de Lei nº 2242/2016.	N/C	Deferido	N/C	2	9	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600404644
249	0065375-50.2017.8.19.0000	1379/2018	2	OE	\N	10	73	Não	\N	ASSERJ - ASSOCIAÇÃO DE SUPERMERCADOS DO ESTADO DO RIO DE JANEIRO	ESTADO DO RIO DE JANEIRO / ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	LEI NR 7705 DO ANO 2017 DO ESTADO DO RIO DE JANEIRO (VEDA A EXPOSIÇÃO DO CONSUMIDOR A CONSTRANGIMENTO NO USO DO CARTÃO MAGNÉTICO E DÁ OUTRAS PROVIDÊNCIAS / AUTORIA: ANDRÉ CECILIANO)	Sem julgamento de mérito	Não apreciado	Não	\N	15	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	\N
252	0066838-61.2016.8.19.0000	193/2017	2	OE	\N	7	101	N/C	\N	PARTIDO TRABALHISTA BRASILEIRO - PTB	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO RIO DE JANEIRO	MS com pedido de liminar inaudita altera pars a fim de que a Mesa Diretora da Alerj se abstenha de realizar a posse do Sr. Geraldo Moreira da Silva, e promova a posse do suplente Luciano Luiz Moreira na vaga do Deputado Estadual Farid Abraão David.	N/C	N/C	N/C	3	12	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700400069
253	0067936-47.2017.8.19.0000	18430/2017	2	OE	\N	10	22	Não	\N	SINDICATO DOS SERVIDORES DO PODER JUDICIÁRIO DO ESTADO DO RIO DE JANEIRO 	DESEMBARGADOR PRESIDENTE DO TRIBUNAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Revisão geral anual aos servidores do Poder Judiciário	Não apreciado	Não apreciado	Não tem	2	9	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	\N
254	0068325-03.2015.8.19.0000	1212/2016	2	OE	\N	10	35	N/C	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outro	Promovida em face da Lei 7083/2015 DO ESTADO DO RIO DE JANEIRO, que dispõe sobre a venda e o consumo de bebidas nas arenas desportivas e estádios no âmbito do Estado do RJ. Autoria: Geraldo Pudim	N/C	N/C	N/C	2	9	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700254
255	0070033-20.2017.8.19.0000	18587/2017	2	OE	\N	10	37	Não	\N	OAB - Seção do Estado do RJ	GOVERNADOR E ALERJ	Representação por inconstitucionalidade, com pedido liminar, em face do inteiro teor da Lei 7.781/2017, que dispõe sobre os recursos destinados aos pagamentos decorrentes de precatórios e de requisições de pequeno valor (RPV) estaduais.	Ainda não apreciado	Ainda não julgado o mérito	Não tem	2	14	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700325
258	0081598-85-2011.8.19.0001	1048/2012 (3 volumes)	2	13ª V.F.P	\N	8	\N	_	39	MP	ESTADO DO RIO DE JANEIRO E ALERJ	CARGO COMISSIONADO DE ANIMADOR CULTURAL- AUSENCIA DE CONCURSO PARA A FUNÇÃO- AFRONTA OA DISPOSITIVO 37 V DA CRFB. (PROCURADOR: DRº HARIMAN ANTONIO DIAS DE ARAUJO) (RELATOR: DES. ANDRE GUSTAVO CORREA DE ANDRADE) AREsp 580538	N/C	_	AREsp	4	12	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0081598-85.2011.8.19.0001
259	0081917-24.2009.8.19.0000	11202/2009	2	1ª V.F.P	\N	8	\N	N/C	102	MP	JANE COZZOLINO	MANDADO DE INTIMAÇÃO ( JANE COZZOLINO)	N/C	N/C	N/C	7	13	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	\N
250	0066288-37.2014.8.19.0000	1121/2015 / 17744/2017	2	OE	\N	10	89	Mesmo objeto do processo 10967/15	\N	PROCURADOR GERAL DE JUSTIÇA DO RJ	GOVERNADOR DO RJ E PRESIDENTE DA ALERJ	Trata-se de representação de inconstitucionalidade ajuizada em virtude da Lei Estadual n° 5.998/11. A lei torna obrigatória a manutenção de exemplares da bíblia sagrada em bibliotecas situadas no Estado do Rio de Janeiro. Projeto de Lei nº 2320/2005 Autoria Edson Albertassi	Acordam os Desembargadores, por maioria de votos, em julgar procedente a representação para declarar a inconstitucionalidade da Lei Estadual n° 5.998/11, vencidos os Desembargadores Nagib Slaibi Filho e Nildson Araújo da Cruz, que julgavam a demanda procedente. Plenário, 05/10/2015 (fls. 75/81)	N/C	ARE 101.4615	2	\N	23	2	2018-03-01 17:56:47	2018-06-06 17:07:39	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0066288-37.2014.8.19.0000
251	0066491-91.2017.8.19.0000	17178/2017	2	OE	\N	7	42	Não	\N	MINISTERIO PUBLICO DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE EM EXERCÍCIO DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / MESA DIRETORA DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Mandado de Segurança impetrado pelo Ministério Público do Estado do Rio de Janeiro através do qual postula seja reconhecida a nulidade de todos os atos praticados pelas autoridades apontadas como coatoras relacionados à votação ocorrida por ocasião da sessão realizada em 17/11/2017 pela Assembleia Legislativa Fluminense, com fundamento na alegada violação aos princípios da transparência e publicidade dos quais devem se revestir os atos parlamentares (ms contra atos/nulidades praticados na votação de 17/11/2017 - Resolução 577/2017 - prisão deputados estaduais).	Sem julgamento de mérito	Deferida parcialmente	Não	4	35	\N	2	2018-03-01 17:56:47	2018-06-11 10:41:38	N/C	\N	\N	\N
257	0073203-97.2017.8.19.0000	18665/2017	2	OE	\N	10	89	Não	\N	ORDEM DOS ADVOGADOS DO BRASIL SEÇÃO DO ESTADO DO RIO DE JANEIRO	GOVERNADOR E ALERJ	Representação de Inconstitucionalidade, com pedido liminar, que tem por objeto atacar o inteiro teor da Lei Estadual Lei nº 7786/17, de 16 de novembro de 2017, que altera a Lei Estadual 7.174/2015 que dispõe sobre do Imposto de Transmissão Causa Mortis e doação (ITCD) no Rio de Janeiro, gerando uma inconstitucionalidade formal, pois fere ao art. 192 e 196, III, “c”, da Constituição Estadual combinado com o art.150, III, “c” da Constituição Federal	Não apreciado	Não apreciado	Não tem	3	12	\N	2	2018-03-01 17:56:47	2018-06-15 11:18:31	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700340
267	0101804-54.2016.5.01.0080	16104/2016	3	80ª VARA DO TRABALHO	\N	9	\N	N/C	110	N/C	N/C	N/C	N/C	N/C	N/C	4	15	\N	2	2018-03-01 17:56:47	2018-03-01 17:56:47	N/C	\N	\N	\N
270	0113641-98.2017.4.02.5101	8536/2017	4	5ª VARA FEDERAL DO ERJ	\N	11	\N	N/C	104	DENNIS CINCINATUS	UNIÃO FEDERAL	Ação Popular contra a União, Ministério da Defesa, Ministério da Justiça, Estado do Rio de Janeiro e Secretaria de Segurança Pública do Estado do Rio de Janeiro	N/C	N/C	N/C	7	15	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	\N
272	0125413-89.1998.8.19.0001	8014/1998	2	8ª V.F.P	\N	11	\N	N/C	114	SINDICATO DOS SERVIDORES DO PODER LEGISLATIVO DO ESTADO DO RIO DE JANEIRO e EDUARDO BANKS DOS SANTOS PINHEIRO	ALERJ	Promovida em face do Ato N/MD/Nº 438/98, que incorpora abonos no âmbito da ALERJ. Autor(es): Deputado WOLNEY TRINDADE PROCURADORA RESPONSAVEL: DRA. JULIETTE STOHLER JUIZ ALEXANDRE DE CARVALHO MESQUITA	N/C	N/C	N/C	5	14	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=1998.001.123836-6
273	0134836-43.2016.8.19.0001	5668/2016	2	8ª V.F.P	\N	13	\N	N/C	51	ASSOCIAÇÃO DOS SERVIDORES DA ASSEMBLÉIA LEGISLATIVA DO RJ - ASALERJ	ESTADO DO RJ - PROCURADORIA GERAL DO RJ / FUNDO ÚNICO DA PREVIDÊNCIA	Dispõe sobre o pagamento dos proventos dos inativos, da remuneração dos servidores ativos dos orgãos e entidades da Administração Estadual Direta e Indireta e dos empregados das empresas publicas e sociedades de economia mista sob controle do Estado será creditado, a partir do mês de competência julho de 2010 nas seguintes datas: I- proventos dos inativos: primeiro dia util do mes subsequente ao mês de competência, II - remuneração dos servidores ativos : segundo dia do mês subsequente ao mes de competencia, III - salario dos empregados das empresas publicas e sociedades de enconomia mista: segundo dia util do mes subsequente ao mes de competencia. Procurador: Hariman Antonio Dias de Araujo. Des. Luiz Fernando Ribeiro de Carvalho.	N/C	N/C	N/C	4	15	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2016.001.115469-3
274	0136662-56.2006.8.19.0001	1851/2008	2	4ª V.F.P	\N	8	\N	Não	115	MINISTÉRIO PÚBLICO	DEP. EDSON ALBERTASSI (ALERJ NÃO ESTÁ NO POLO, APENAS INTIIMADA COM FULCRO NO ART 17, $3, DA LEI 8429/92)	Trata-se de Ação Civil Pública por ato de improbidade administrativa imputado ao Deputado Edson Albertassi. Nº Judicial antigo: 2006.001.142513-1	-	Não	_	5	16	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2006.001.142513-1
275	0166546-47.2017.8.19.0001	Não recebemos ofício	2	15ª V.F.P	\N	11	\N	Não	116	FLAVIO SUETH NUNES / THAIS DE ANDRADE RABELO / AUGUSTO CESAR SANTOS DE SOUZA	ESTADO DO RIO DE JANEIRO / ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Ação Popular - Lei 4717/65	Sem julgamento do mérito	Não apreciado	Não	\N	12	\N	3	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	\N
311	241	1997/1990	1	N/C	\N	2	6	N/C	\N	GOVERNADOR DO ERJ	ALERJ	Promovida em face do Artigo 245 da Constituição do ERJ - Competência do Inst. Est. de Terras e Cartografia para promover, através de sua Procuradoria ações discriminatórias - áreas devolutas - Relator: Gilmar Mendes (Processo apenso, N° ALERJ 9568/2013, ADI N° 241)	N/C	N/C	N/C	4	8	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1496734
261	0086173-62.2017.4.02.5101	Ainda Não Recebemos Ofício	4	5ª VARA FEDERAL DO ERJ	\N	11	\N	N/C	104	AUGUSTO CÉSAR SANTOS DE SOUZA/ THAÍS DE ANDRADE RABELO / FLAVIO SUETH NUNES	UNIÃO FEDERAL/ ESTADO DO RIO DE JANEIRO / ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Objetivando que suspendam a eficácia da lei que permite a venda das ações da Cedae Lei 7,529/17 e o processo legislativo Cadastrado por Fábio Augusto de Souza Borges em 28/03/2017 21:14. . de votação das contrapartidas assinadas entre a União Federal e o Governo do Estado do Rio de Janeiro	N/C	N/C	N/C	\N	35	\N	2	2018-03-01 17:56:47	2018-06-11 10:42:26	N/C	\N	\N	\N
269	0102039-87.2017.5.01.0079	520/2018	3	79ª VARA DO TRABALHO	\N	9	\N	Não	112	MARCOS JOSE FERREIRA DANTAS	JOTA ELE/ALERJ	N/C	Não apreciado	Não apreciado	Não tem	4	14	\N	2	2018-03-01 17:56:48	2018-04-19 15:08:21	N/C	\N	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1577682&p_grau_pje=1&popup=0&dt_autuacao=&cid=67165
271	0121892-87.2008.8.19.0001	13503/2008	2	51ª V. CÍVEL	\N	13	\N	N/C	113	CIRA MARIA	JORGE PICCIANI, EDINO FONSECA, JOÃO PEIXOTO E BANCO ITAÚ	Declaração de Inexistência de Débito e / Ou da Relação Jurídica; Dano Material - Outros/ Indenização Por Dano Material; Dano Moral - Outros/ Indenização Por Dano Moral; Antecipação de Tutela E/ou Obrigação de Fazer Ou Não Fazer Ou Dar	N/C	N/C	N/C	7	10	\N	2	2018-03-01 17:56:48	2018-03-22 12:29:18	N/C	2018-03-19	Arquivamento provisório	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0121892-87.2008.8.19.0001
264	0101163-61.2016.5.01.0017	10703/2016	3	17ª VARA DO TRABALHO	\N	9	\N	N/C	107	N/C	N/C	N/C	N/C	N/C	N/C	4	14	\N	2	2018-03-01 17:56:47	2018-04-19 15:00:40	N/C	\N	ARQUIVADO	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1080474&p_grau_pje=1&popup=0&dt_autuacao=&cid=550727
266	SEM NÚMERO	\N	3	8ª TURMA DO TRT	\N	9	\N	N/C	\N	N/C	N/C	N/C	N/C	N/C	N/C	\N	14	\N	2	2018-03-01 17:56:47	2018-04-19 14:56:28	N/C	\N	\N	\N
265	0101707-26.2016.5.01.0057	15827/2016	3	57ª VARA DO TRABALHO	\N	9	\N	N/C	108	ERICA DA SILVA PIRES	BIOTHEC HUMANA	AÇÃO TRABALHISTA MOVIDA EM FACE DE BIOTECH HUMANA ORG SOCIAL DE SAUDE .	N/C	N/C	N/C	4	14	\N	2	2018-03-01 17:56:47	2018-04-19 15:09:32	N/C	\N	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1185778&p_grau_pje=1&popup=0&dt_autuacao=&cid=67165
277	0212624-75.2012.8.19.0001	7500/2012	2	9ª V.F.P	\N	19	\N	_	117	MINISTERIO PUBLICO DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	rata-se de uma Ação de Busca e apreensão de documentos com pedido de liminar (initio litis), pois a ALERJ e a Comissão de Defesa do Consumidor contratou advogados independentemente de licitação, ao invés da Procuradoria Geral da Assembleia Legislativa. Relator: Claudio Brandão de Oliveira. Procurador: Hariman A. Dias de Araújo.	N/C	_	Apelação Conclusão ao Revisor para apreciação - 11/01 ( Relator Claudio Brandão de Oliveira).	4	15	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0212624-75.2012.8.19.0001
278	0223121-80.2014.8.19.0001	8550/2014	2	2ª V.F.P	\N	20	\N	N/C	39	LUIZ PAULO DO CARMO SILVA	ESTADO DO RIO DE JANEIRO, ALERJ E MUNICÍPIO DE TRÊS RIOS	Trata-se de Ação de Obrigação de Fazer c/c Danos Morais, a fim de condenar os réus ao pagamento dos salários dos meses de Março a Novembro de 2009 (totalizando R$61200,00) além do respectivo depósito para a Previdência Social, vinculado ao PIS/NIT/PASEP. EXCEÇÃO DE INCOMPETÊNCIA, em 16/10/2014, estando a mesma TEMPESTIVA, tendo em vista que apresentada dentro do prazo de Contestação, sendo que a mesma recebeu o número 0000907-53.2015.8.19.0063. Tramitando na 13ª VFP, nº 0223121-80.2014.8.19.0001 (Carta Precatoria) APENSO: 11863/2009.	N/C	N/C	N/C	3	14	\N	3	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.192578-4
282	0288675-54.2017.8.19.0001	17085/2017	2	9ª V.F.P	\N	11	\N	não	90	MARCELO RIBEIRO FREIXO	ESTADO DO RIO DE JANEIRO	A presente ação popular tem por objetivo a anulação de ato lesivo à moralidade administrativa, consistente na indicação do Deputado Estadual Edson Albertassi para o cargo de Conselheiro do Tribunal de Contas do Estado do Rio de Janeiro, com desvio de finalidade e evidente violação às normas da Constituição da República e da Constituição do Estado do Rio de Janeiro que estabelecem a forma de composição do Tribunal do Contas.	Sem julgamento de mérito	Liminar indeferida	AI 0064986-65.2017.8.19.0000	5	16	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	\N
284	0292293-80.2012.8.19.0001	14932/2012	2	5ª V.F.P	\N	11	\N	_	18	JANE DANTAS DE ASSIS	ALERJ E ELETRO PLANO COMERCIAL ELETRICA LTDA	Suspender o Pregão Presencial nº 28/2012 (com pedido liminar)	N/C	N/C	_	1	14	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2012.001.256961-2
287	0329648-95.2010.8.19.0001	14944/2013	2	12ª V.F.P	\N	23	\N	N/C	119	MUNICIPIO DO RIO DE JANEIRO	ALERJ	Trata-se de uma ação de execução, sobre o pagamento do tributo imobiliário, que é objeto de um termo de cessão de uso firmado pela Alerj - (IPTU), ao imovel do Municipio. Procurador - Drº Sérgio Leal	N/C	N/C	N/C	7	9	\N	3	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2010.001.297626-2
312	25168-53.2010.8.19.0000	14334/2010 (3 volumes)	2	OE	\N	10	74	N/C	\N	SIND JUSTIÇA - SINDICATO DOS SERVIDORES DO PODER JUDICIÁRIO	EXMO. SR. GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face dos artigos 1° e 2° da Lei Complementar nº 96 de 4 de julho de 2001, que dispõe sobre os provimentos dos servidores do poder judiciário. (AUTORIA: PODER EXECUTIVO)	N/C	N/C	N/C	2	9	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0025168-53.2010.8.19.0000
286	0317478-47.2017.8.19.0001	18191/2017	2	16ª V.F.P	\N	13	\N	Não	118	FUNDAÇÃO PETROBRAS DE SEGURIDADE SOCIAL - PETROS	ESTADO DO RIO DE JANEIRO	CPI PETROBRÁS	Não apreciado	Concedida a Antecipação de tutela	Não tem	3	12	\N	2	2018-03-01 17:56:48	2018-03-19 11:02:06	Agravo de Instrumento 0005444-82.2018.8.19.0000	\N	\N	\N
285	0294756-19.2017.8.19.0001	17084/2017	2	6ª V.F.P	\N	8	\N	Não	27	MINISTÉRIO PÚBLICO	ESTADO DO RIO DE JANEIRO - PROCURADORIA GERAL DO ESTADO DO RIO DE JANEIRO	ACESSO ÀS GALERIAS DA ALERJ	Sem julgamento de mérito	Concedida a Antecipação de tutela	AI 0071646-75.2017.8.19.0000	4	\N	24	2	2018-03-01 17:56:48	2018-06-15 10:55:59	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.242848-1
279	0053398-08.2010.8.19.0000	14480/2010	2	OE	\N	10	79	N/C	\N	SIND. DO COMÉRCIO ATACADISTA DE DROGAS E MEDICAMENTOS	EXMO. SR. GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face Lei Estadual nº 5502 de 2009, que dispõe sobre a substituição e o recolhimento das sacolas plásticas em estabelecimentos comerciais localizados no Estado do Rio de Janeiro como forma de coloca-las à disposição do ciclo de reciclagem e proteção ao meio ambiente fluminense e acrescenta o art. 98-A à lei n° 3467/2000. Apenso: 14484/10. Autoria: Poder Executivo	N/C	N/C	N/C	2	8	\N	3	2018-03-01 17:56:48	2018-06-06 11:17:06	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201000700018
280	0259996-88.2010.8.19.0001	6296/2018	2	2ª V.F.P	\N	13	\N	N/C	105	N/C	N/C	Trata-se de ação de cobrança em face de Waldemira Carvalho da Silva, na qual a Alerj requer com base no artigo 876 do código civil ressarcimento de quantia retirada indevidamente da conta bancária de ex servidor e pagamento de custas processuais.	N/C	N/C	N/C	\N	11	\N	2	2018-03-01 17:56:48	2018-05-21 10:24:24	Quem atua são os próprios procuradores da PGE, desde 2010 a ALERJ nunca se manifestou.	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaMov.do?v=2&numProcesso=2010.001.234873-1&acessoIP=internet&tipoUsuario=
283	0289947-83.2017.8.19.0001	17856/2017	2	17ª V.F.O	\N	22	\N	Não	33	ALEXANDRE FERRIRA LIMA	JONAS LOPES DE CARVALHO JUNIOR / PRESIDENTE DO TRIBUNAL DE CONTAS DO ESTADO DO RIO DE JANEIRO	ato lesivo aos cofres públicos do ERJ, praticado pela Presidente em Exercício do Tribunal de Contas do Estado do Rio de Janeiro, no qual concedeu APOSENTADORIA ao ex-presidente do TCE, Conselheiro Jonas Lopes de Carvalho Junior (1º Réu)	Não apreciado	Não apreciado	Não tem	4	\N	23	2	2018-03-01 17:56:48	2018-06-13 10:19:25	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.237025-9
288	0344282-91.2013.8.19.0001	14674/2013	2	3ª V.F.P	\N	8	\N	N/C	60	MINISTERIO PUBLICO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO E OUTROS	Trata -se de uma Ação Civil Pública em face da Assembléia Legislativa do Estado do Rio de Janeiro, Estado do Rio de Janeiro, Dep. Jorge Moreira Theodoro, Sinval José de Campos Neves,Jacqueline Nascimento da Silva alegando infração aos princípios constitucionais  da legalidade e moralidade administrativa.	“Por tais fundamentos, julgo extinto o processo sem o exame do mérito com relação à ALERJ, com fundamento no art. 267, VI do CPC em razão da sua ilegitimidade passiva, e julgo procedente o pedido com relação aos réus Jorge Moreira Theodoro e Jacqueline Nascimento Da Silva. [...] Julgo procedente o pedido condenar o réu Jorge Moreira Theodoro à perda da função pública, bem como para anular o ato de nomeação dos réus Jacqueline Nascimento Da Silva e Sinval José Campos Neves aos cargos de auxiliar administrativo, bem como os atos administrativos que lhes concederam o pagamento de auxílio-educação. [...] Deixo de condenar o autor ao pagamento dos honorários advocatícios da ré ALERJ por não vislumbrar litigância de má-fé.” Rio, 24/09/2015. (fls. 1860-1865)	Não há pedido liminar	Apelação (fls. 1969/1990)	7	12	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2013.001.304016-7
290	0394523-64.2016.8.19.0001	16175/2016	2	OE	\N	8	\N	0061297-47.2016.8.19.0000 / 006375452.2016.8.19.0000	103	N/C	N/C	acesso ao plenário	N/C	N/C	N/C	2	13	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	\N
291	0449307-59.2014.8.19.0001	11919/2015	2	13ª V.F.P	\N	8	\N	N/C	39	MINISTÉRIO PÚBLICO	MARCO ANTONIO E OUTROS E ALERJ	Ação Civil Pública por atos de improbidade administrativa em virtude de fraudes na concessão do benefício auxílio-educação, bem como desvios de salários através de nomeações em cargos comissionados no âmbito do gabinete do Deputado Estadual Marco Figueiredo na ALERJ.	N/C	N/C	N/C	2	14	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.395789-2
293	0500463-17.2017.4.02.5101	3983/2017	4	N/C	\N	11	\N	N/C	120	LUIZ ALEXANDRE SÁ FARIA	GOVERNADOR /PGE E ALERJ	Ação Popular com pedido de liminar enaldita altera o pars. Antigo número: 0031851-59.2017.8.19.0001 - Alienação CEDAE	N/C	N/C	N/C	2	9	\N	2	2018-03-01 17:56:48	2018-03-01 17:56:48	N/C	\N	\N	\N
297	1325-54.2013.8.19.0000	2690/2012	2	OE	\N	10	121	_	\N	LUIZ PAULO CORREA DA ROCHA	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do Decreto Estadual 43.749/2012 ,que estabelece novas margens de valor agregado para alguns produtos da lista de mercadorias sujeitas ao regime de substitução tributárias nas operações internas e interestaduais, pois fere os arts. 2º e 150, I, III "b" da Constituição Federal (Princípio da Anterioridade) e os arts. 7º, 9º e 196 I e III "b" da Contituição Estadual. (RELATOR: Celso Ferreira Filho)	N/C	_	ARE	7	12	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0001325-54.2013.8.19.0000
298	1396687120068190000	14590/2006	2	2ª V.F.P	\N	8	\N	_	102	MINISTERIO PUBLICO DO ESTADO DO RIO DE JANEIRO	ANDRE LUIZ DA SILVA E ELIANA DA SILVA	N/C	N/C	_	_	5	15	\N	2	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2006.001.145499-4
324	33796 (junto com o MS 7701/2009)	8944/2017	6	N/C	\N	25	126	N/C	\N	CONFEDERAÇÃO DOS SERVIDORES PÚBLICOS DO BRASIL - C S P B	PRESIDENTE DO TRIBUNAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Reclamação em trâmite no STJ contra decisão proferida no MS 00476936320098190000 - CSPB. Contribuição Sindical	N/C	N/C	N/C	7	11	\N	2	2018-03-01 17:56:50	2018-04-25 11:51:12	N/C	\N	\N	https://ww2.stj.jus.br/processo/pesquisa/?tipoPesquisa=tipoPesquisaNumeroRegistro&termo=201700736120&totalRegistrosPorPagina=40&aplicacao=processos.ea
292	0474823-81.2014.8.19.0001	11918/2015	2	1ª V.F.P	\N	13	\N	_	105	CENTRALMED COMÉRCIO E EQUIPAMENTOS MÉDICOS	ALERJ	Com pedido de tutela antecipada, para a anulação do Processo de Licitação 10.860/2014 ( Contratação de empresa especialiazada na prestção de serviços de manutenção preventiva e corretiva de equipamentos médico e odontológicos.	N/C	_	_	4	\N	24	2	2018-03-01 17:56:48	2018-06-05 12:23:14	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.418998-7
294	10079	5980/2010	1	N/C	\N	24	11	N/C	\N	JOSÉ GOMES GRACIOSA	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de reclamação contra ato da Assembléia Legislativa do Estado do Rio de Janeiro, que se consubstanciou na tramitação e aprovação de relatório final de Comissão Parlamentar de Inquérito, criada pela Resolução nº 591/09, para investigar fatos relativos a denúncias de corrupção contra os Conselheiros do Tribunal de Contas do Estado do Rio de Janeiro.	N/C	N/C	N/C	7	\N	23	2	2018-03-01 17:56:49	2018-06-06 17:07:17	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3872453
289	0349801-52.2010.8.19.0001	10064/2012	2	13ª V.F.P	\N	13	\N	Apenso: proc. ALERJ 9430/2014	39	ANA MYRA DOS SANTOS BIANCO	ALERJ E RIO PREVIDÊNCIA	Trata-se de Ação Previdenciária em face da Alerj e Rioprevidencia, objetivando em síntese o reconhecimento do direito de pensão por morte, oriundo do falecimento da beneficiária segurada, MARIA DE LOURDES DOS SANTOS, servidora pública. Sustenta a Autora possuir o direito de pensão. Apenso: proc. ALERJ 9430/2014 Juiz: Luciana Losada Albuquerque Lopes	N/C	N/C	N/C	7	35	\N	3	2018-03-01 17:56:48	2018-06-11 10:40:33	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2010.001.315453-1
302	18828-74.2002.8.19.0000	8886/2002	2	OE	\N	10	122	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do §Único do artigo 68, do Código de Organização e Divisão Judiciárias, com redação dada pela Lei 3603/01 - Delega ao Egrégio Órgão Especial do TJRJ poder para alterar a competência dos vários órgãos judiciários de primeira instância. Desembargador: Humberto De Mendonça Manes	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0018828-74.2002.8.19.0000
303	199 	N/C	1	N/C	\N	3	6	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	ALERJ / GOV ERJ	Lei nº 5346, de 11 de dezembro de 2008.Dispõe sobre o novo sistema de cotas para ingresso nas Universidades Estaduais e dá outras providências.	N/C	N/C	N/C	\N	\N	\N	2	2018-03-01 17:56:49	2018-03-01 17:56:49	Estagiário: Luan Moreira, 	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3798817
304	2001.02.01.015550-8 ( 0015550-09.2001.4.02.0000 )	7851/2001	4	2ª REGIÃO	\N	7	123	N/C	\N	EMPRESA BRASILEIRA DE CORREIOS E TELÉGRAFOS	PRESIDENTE DA ALERJ	Art. 32, caput e parágrafo único da Lei Orgânica do Município de Quatis, de 30/06/93	N/C	N/C	REsp 1603927	2	\N	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	Estagiário: Luan Moreira, 	\N	\N	http://www.trf2.gov.br/cgi-bin/pingres-allen?proc=200102010155508&andam=1&tipo_consulta=1&mov=3
305	20462-32.2007.8.19.0000	5599/2007	2	OE	\N	10	124	N/C	\N	ASSOCIAÇÃO DOS NOTÁRIOS E REGISTRADORES DO EST. DO R. DE JAN	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face do artigo 47 da Lei 3350/1999 que dispõ sobre as custas judiciais e emolumentos dos serviços notariais e de registros do estado do Rio de Janeiro. RELATOR: DES. JOSE MOTA FILHO	N/C	N/C	N/C	2	8	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0020462-32.2007.8.19.0000
306	20469-24.2007.8.19.0000	14443/2007 Junto ao 8331)	2	OE	\N	10	125	N/C	\N	SIPATERJ	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata de uma representação de inconstitucionalidade, com pedido liminar, sobre a Lei nº 4946 do ano de 2006 do Estado do Rio de Janeiro, que dispõe sobre a obrigatoriedade da utilização de lacres de segurança nas embalagens dos produtos fabricados pela indústria de cosméticos que são comercializados no Estado do Rio de Janeiro.DES. MARCUS ANTONIO DE SOUZA FAVER	N/C	N/C	AI 786529	3	8	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0020469-24.2007.8.19.0000
307	2049	10220/1999	1	N/C	\N	2	2	_	\N	PARTIDO SOCIAL LIBERAL	GOVERNADOR DO ESTADO DO RJ E ALERJ	Promovida em face da Lei Ordinária nº 3189, de 22/02/1999, que institui o Fundo Único de Previdência Social do Estado do Rio de Janeiro.Relator: MIN. ELLEN GRACIE . Autoria: Poder Executivo	N/C	DEFERIDA PARCIALMENTE, POR UNANIMIDADE: Expressões " e inativos ",inseridas no Inciso I, do Art. 14 e nos Artigos 18 e 37; " bem como dos beneficiários", do Inciso I, do Art. 14; Da expressões " provento, pensão", inseridas no Art. 18; Do Inciso II do Art. 34; E dos Artigos 35 e 40, da Lei 3.189 de 1999 do ERJ	AGRAVO REGIMENTAL - JULGADO PROCEDENTE Decisão, 03/08/04 (fls. 692)	5	12	\N	2	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1772404
309	22149-39.2010.8.19.0000	7926/2010	2	OE	\N	10	54	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 4940, de 20/12/2006, que dispõe sobre o recolhimento de veiculos a deposito e sua venda em leilão público. Junto ao 5286/12. Autoria CORONEL JAIRO	N/C	N/C	ARE 704910	3	15	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0022149-39.2010.8.19.0000
308	2054	13708/2012	1	N/C	\N	4	6	N/C	\N	PROCURADORIA GERAL DA ALERJ	SUPERINTENDENTE ADJUNTO DA RECEITA FEDERAL DO BRASIL	Cuida-se de mandado de segurança, com pedido de liminar, impetrado como ação cível originária pela Assembleia Legislativa do Estado do Rio de Janeiro contra a negativa, pela Superintendência Regional da Receita Federal da 7ª Região Fiscal, em fornecer à Comissão Parlamentar de Inquérito instituída pela Resolução ALERJ nº 522/2012, os documentos requisitados por meio do Ofício CPI Nº 15/2002 (eDOC 4, sob o fundamento de se tratar de informações protegidas por sigilo fiscal. Liminar deferida Relator: Min. Gilmar Mendes	N/C	N/C	N/C	4	35	\N	2	2018-03-01 17:56:49	2018-06-11 10:40:05	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4332182
301	1795	14110/2011	1	N/C	\N	4	6	N/C	\N	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	SUPERINTENDENTE. ADJUNTO REGIONAL DE RECEITA FEDERAL DA 7ª REG. FISCAL	Trata-se de Ação Civil Originária proposta pela ALERJ em face do Superintendente Adjunto Regional da Regional de Receita Federal da 7ª Região, devido à ameaça ao pacto federativo que faz incidir a regra do artigo 102, I, alínea "f" da Constituição Federal.	N/C	N/C	N/C	4	\N	23	2	2018-03-01 17:56:49	2018-06-06 17:06:36	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4095295
299	0017593-86.2013.8.19.0000	6343/2013	2	OE	\N	10	25	0014032-54.2013.8.19.0000	\N	FECOMÉRCIO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Representação de Inconstitucionalidade proposta pela Federação das Indústrias do Estado do Rio de Janeiro – FIRJAN RJ, com pedido Cautelar, visando à suspensão do caput do artigo 1º da Lei Fluminense nº 6.402 de 08/03/2013, em especial a expressão “que o fixe a maior”. Projeto de Lei nº 1907/2013 Autoria: Poder Executivo - Lei Revogada - Texto da Revogação: Lei Nº 6702 de 11 de Março de 2014.	N/C	Acordam os Desembargadores, à unanimidade, em conceder parcialmente a liminar para suspensão da eficácia da expressão “que o fixe a maior” do art. 1º da Lei Estadual nº 6.402/2013. Plenário, 15/07/2013 (processo físico, sem numeração nos autos).	N/C	3	35	\N	3	2018-03-01 17:56:49	2018-06-11 10:32:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201300700039
315	27293-23.2012.8.19.0000	11153/2012	2	OE	\N	10	76	_	\N	PROCURADOR GERAL DA JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ALERJ E GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 5766, de 29 de junho de 2010, que transfere cargos da estrutura da Secretaia de Estado de Educação - SEEDUC para a fundação de apoio à Escola Técnica do Estado do Rio de Janeiro - FAETEC e da Lei nº 5.974, de 20 de Maio de 2011, que altera a Lei nº 5.766, de 29 de Junho de 2010, que: " Transfere cargos da estrutura da Secretaia de Estado de Educação - SEEDUC para a fundação de apoio à Escola Técnica do Estado do Rio de Janeiro - FAETEC, para dispor sobre o regime de trabalho dos servidores".	N/C	INDEFERIDA: Acordaram os Desembargadores, por maioria, em julgar improcedente o pedido, para declarar constitucionais as leisobjeto da presente ação. Votou vencido o Des. Ricardo Rodrigues Cardozo. ( o processo é fisíco e não há datas ou numeração nos autos disponíveis eletronicamente)	RE 861871	5	12	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0027293-23.2012.8.19.0000
316	2764	473/2003	1	N/C	\N	2	8	_	\N	GOVERNADORA DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 3375/2000, que versa sobre conceder efeito suspensivo à aplicação da penalidade que menciona e dá outras providências. Autoria: Carlos Dias	N/C	_	_	5	16	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2074683
318	27744-77.2014.8.19.0000	10640/2015	2	OE	\N	10	56	_	\N	PROCURADOR DE JUSTIÇA DO RJ	EXMO SR GOVERNADOR E ALERJ	Trata-se de Representação de Inconstitucionalidade em face da Lei Estadual n° 5.816/2010, do Estado do Rio de Janeiro, que dispõe sobre a “Criação em caráter permanente da campanha institucional " Doe seu sangue pelo seu time" No Estádio do Maracanã e outros no âmbito do Estado do Rio de Janeiro.	N/C	_	_	3	15	\N	2	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201400700048
319	2910/03	16120/2003	1	N/C	\N	2	15	_	\N	PGR	ALERJ	Promovida em face da Lei nº 2538, de 19/04/1996 onde "fica proibida a prática vexatória em alunos iniciantes em cursos de graduação em Universidades e/ou Faculdades públicas e particulares localizadas no Estado do Rio de Janeiro. Autoria: MARCO ANTÔNIO ALENCAR / Manifestação AGU / Manifestação PGR (Em 13/01/04 e 30/03/05, pela procedência do pedido).	N/C	_	_	5	15	\N	3	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2140657
321	3161	3724/2004	1	N/C	\N	2	9	_	\N	PROCURADOR GERAL DA REPÚBLICA	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do §2º do artigo 263 da Constituição ERJ, porquanto contrário ao disposto 128, §5º, e 129 da Constituição da república, por prever atribuições ao Ministério Público, extrapolando aqueles que foram estatuídas pela Carta Magna.	N/C	_	_	2	8	\N	2	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2206513
322	32446-66.2014.8.19.0000	9260/2014 ( 2 volumes)	2	OE	\N	10	31	_	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 6.483 de 4 de Julho de 2013 do EJ que "dispõe sobre a aplicabilidade das penalidades administrativas, motivadas pela prática de atos de discriminação racial." Autoria: Dep.Gilberto Palmares.	N/C	_	ARE e AREsp no 862445	3	16	\N	2	2018-03-01 17:56:49	2018-03-01 17:56:49	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0032446-66.2014.8.19.0000
323	331992020148190000	2052/2014 (apenso ao 4165/2014)	2	11ª V.F.P	\N	13	\N	ALERJ 4165/2014	97	N/C	ESTADO DO RIO DE JANEIRO	Declaração de inexistência de relação jurídica obrigacional tributária no tocante ao Imposto de Renda Pessoa Física-IRPF, incidente sobre os valores que apresentam natureza indenizatória- auxílio educação, auxílio alimentação e terço constitucional de férias.	N/C	NÃO APRECIADA	Agravo de Instrumento: 0001460-95.2015.8.19.0000 DES. PATRICIA RIBEIRO SERRA VIEIRA 05/03/2015 - Certidão Processo Findo - Não houve interposição de Recurso	4	12	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2014.001.028014-5
320	3111	3174/2004	1	N/C	\N	2	15	N/C	\N	PROCURADOR-GERAL DA REPÚBLICA	GOVERNADOR DO RJ E ALERJ	Promovida em face do Art. 1º da Lei 3761, de 07 de janeiro de 2002 do RJ, que altera o parágrafo primeiro do art. 10 do Dec.-Lei nº 122/69, que contraria o Art. 5º, Caput e art. 145,II da Constituição Federal. LEI Nº 3761, DE 07 DE JANEIRO DE 2002. " Art. 1º - O artigo 1º da Lei nº 3528, de 9/01/2001, e o parágrafo 1º do Art. 10 do Decreto-Lei nº 122 de 13/8/1969, do antigo Estado da Guanabara, já alterado pelas Leis nºs 290, de 6/12/1979, e 489, de 19/11/1981, passam a vigorar com a seguinte redação:	N/C	N/C	N/C	7	\N	23	3	2018-03-01 17:56:49	2018-06-06 17:04:50	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2194134
317	27691-96.2014.8.19.0000	8319/2014	2	OE	\N	10	76	_	\N	PROCURADOR GERAL DE JUSTIÇA DO RIO DE JANEIRO	ALERJ E GOVERNADOR DO RJ	Promovida em face da Lei n° 6.450 de 2013, que "dispõe sobre o custeio de prestação de serviços de natureza jurídica com o fim que se especifica, e dá outras provdências." Autoria: Poder Executivo STF/RE: 932396	N/C	_	RE: 932396 Min. Edson Fachin	2	35	\N	2	2018-03-01 17:56:49	2018-06-11 10:38:31	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0027691-96.2014.8.19.0000
326	34728-53.2009.8.19.0000	14358/2009 ( Junto ao Alerj 4850)	2	OE	\N	10	88	N/C	\N	ASSOCIAÇÃO COMERCIAL DO RIO DE JANEIRO	PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 5351 de 2008 "DISPÕE SOBRE MEDIDAS PARA INCREMENTO DA COBRANÇA DE CRÉDITOS INSCRITOS EM DÍVIDA ATIVA DO ESTADO DO RIO DE JANEIRO, ALTERA A LEI N° 1582, DE 04 DE DEZEMBRO DE 1989, E DÁ OUTRAS PROVIDÊNCIAS." Art. 3º Fica o Poder Executivo autorizado a: I - efetuar, nos termos da Lei Federal nº 9.492, de 10 de setembro de 1997, o protesto extrajudicial dos créditos inscritos em dívida ativa; II - fornecer às instituições de proteção ao crédito informações a respeito dos créditos tributários e não tributários inscritos em dívida ativa; competencia da Procuradoria Geral do Estado na cobrança judicial de créditos na divida ativa." AREsp 406034 AUTORIA: Sérgio Cabral	N/C	_	ARE e AREsp 406034	3	15	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0034728-53.2009.8.19.0000
327	3703	6949/2006	1	N/C	\N	2	3	N/C	\N	ASS. BRAS. DOS DISTRIBUIDORES DE ENERGIA ELET - ABRADEE	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei do estado do RJ nº 4.724 de 2006, a qual obriga "as concessionárias de serviço público fornecedora de energia elétrica aexpedir notificação com aviso de recebimento para realizar vistoria técnica no medidor do usuário. Relator: Min. Edson Fachin	N/C	N/C	N/C	7	11	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2377442
328	3874	8681/2007	1	N/C	\N	2	11	N/C	\N	CONFEDERAÇÃO NACIONAL DE ESTAB. DE ENSINO CONFENEN	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos arts. 1º, 2º, 3º e 4º, da Lei 4675, de 20/12/2005, que proibe a cobrança, por provas de segunda chamada, provas finais, etc. Relator: MIN. ROBERTO BARROSO	N/C	N/C	N/C	2	11	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2499596
329	4118	12427/2008	1	N/C	\N	2	2	N/C	\N	CONFEDERAÇÃO NACIONAL DO COM. DE BENS, SERV. E TURISMO CNC	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 5273, de 26/06/08, que estabelece a obrigatoriedade de todas as empresas de televisão por assinatura, estabelecimentos comerciais de vendas no varejo e atacado, que possuam serviço de atendimento ao consumidor, colocarem a disposição de seus clientes, atendimento gratuito através o prefixo 0800. Relator: MIN. ROSA WEBER	N/C	N/C	N/C	4	8	\N	2	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2633282
330	4131	13077/08	1	N/C	\N	2	7	_	\N	CONFEDERAÇÃO NAC. DO COM. DE BENS, SERVIÇOS E TURISMO CNC	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	CARNAVAL	N/C	NÃO APRECIADA	_	5	15	\N	2	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2636281
331	4188	4135	1	N/C	\N	2	8	_	\N	CONSELHO FEDERAL DA ORDEM DOS ADVOGADOS DO BRASIL	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de ação direta de inconstitucionalidade, com pedido cautelar, em face da Lei nº 5061, de 06/07/2007 que "cria, na confecção de registro de ocorrências pelas delegacias de policia submetidas ao sistema delegacia legal, a obrigação de supressão de dados pessoais dos envolvidos, que permitam sua localização por pessoas estranhas aos quadros da Policia Civil, Ministério Publico e Poder Judiciário. Projeto de Lei nº 93/2007 Autoria Pedro Paulo	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	_	2	9	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	\N
332	4190	5572	1	N/C	\N	2	8	N/C	\N	ASSOCIAÇÃO DOS MEMBROS DOS TRIBUNAIS DE CONTAS DO BRASIL	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do art.128, § §5° e 6°, da constituição do Estado do Rio de Jnaeiro, com a redação a ele conferida pela Emenda Constitucional n° 40, de 3 de fevereiro de 2009. EMENDA CONSTITUCIONAL N° 40, DE 2009 DECRETA: Art. 1º O art. 128 da Constituição passa a vigorar acrescido dos §§ 5º e 6º, com a seguinte redação: “Art. 128 - ... (...) §5º - São infrações administrativas de Conselheiro do Tribunal de Contas, sujeitas a julgamento pela Assembléia Legislativa e sancionadas, mesmo na forma tentada, com o afastamento do cargo: §6º - Assegurados o contraditório e ampla defesa, o processo administrativo por fato descrito no parágrafo anterior obedecerá ao seguinte rito: Autoria da Emenda: Jorge Picciani	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2662073
333	4191	4260/2009	1	N/C	\N	2	11	N/C	\N	ASSSOCIAÇÃO DOS MEMBROS DOS TRIBUNAIS DE CONTAS DO BRASIL	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da lei complementar 124 de 16 de janeiro de 2009 :ALTERA A REDAÇÃO DA LEI COMPLEMENTAR Nº 63, DE 1º DE AGOSTO DE 1990, QUE DISPÕE SOBRE A LEI ORGÂNICA DO TRIBUNAL DE CONTAS DO ESTADO DO RIO DE JANEIRO E DÁ OUTRAS PROVIDÊNCIAS. AUTORIA: PAULO MELO	N/C	N/C	N/C	5	8	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2662068
334	4247	9747/2009	1	N/C	\N	2	9	N/C	\N	PARTIDO SOCIALISMO E LIBERDADE PSOL	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do art. 22 da Lei Estadual nº. 5.164, de 17 de dezembro de 2007, e a impugnação da Lei Complementar do Estado do Rio de Janeiro nº 118, de 29 de dezembro de 2007. LEI Nº 5164 DE 17 DE DEZEMBRO DE 2007. AUTORIZA O PODER EXECUTIVO A INSTITUIR A FUNDAÇÃO ESTATAL DOS HOSPITAIS GERAIS", A FUNDAÇÃO ESTATAL DOS HOSPITAIS DE URGÊNCIA E A FUNDAÇÃO ESTATAL DOS INSTITUTOS DE SAÚDE E DA CENTRAL ESTADUAL DE TRANSPLANTE, E DÁ OUTRAS PROVIDÊNCIAS. Autoria: Poder Executivo Projeto de Lei nº. 1014/2007 LEI COMPLEMENTAR Nº 118, DE 29 DE NOVEMBRO DE 2007. DEFINE A ATIVIDADE DE SAÚDE COMO ÁREA DE ATUAÇÃO ESTATAL SUJEITA A DESEMPENHO POR FUNDAÇÃO PÚBLICA, NOS TERMOS DO INCISO XIX DO ART. 37 DA CONSTITUIÇÃO FEDERAL, E DÁ OUTRAS PROVIDÊNCIAS. Projeto de Lei Complementar nº. 5/2007 Autoria: Poder Executivo	N/C	N/C	N/C	3	8	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2680930
335	4306	15057/2009	1	N/C	\N	2	3	_	\N	CONFEDERAÇÃO NAC. DO COM. DE BENS, SERVIÇOS E TURISMO CNC	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de ação direta de inconstitucionalidade, com pedido de medida cautelar, contra os arts. 2º, 3º, 4º, 5º, 7º e 8º da Lei 5.517, de 17 de agosto de 2009, do Estado do Rio de Janeiro. A Lei proíbe o consumo de produto fumígeno na forma que especifica, e cria ambientes de uso coletivo livres de tabaco. Projeto de Lei nº 2325/2009 Autoria Poder Executivo	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	_	3	15	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3765134
336	4342	17670/2009	1	N/C	\N	2	15	_	\N	ASS, NAC. DOS MAGISTRADOS ESTADUAIS ANAMAGES	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do art. 29 da Lei nº. 5535, de 10 de setembro de 2009, do Estado do Rio de Janeiro, que dispõe sobre os fatos funcionais da magistratura do Estado do Rio de Janeiro, por ofensa ao art. 93, V, da CR/88 e ao art. 5ª, I da CR/88.	23/05/2017: Publicação, DJE   "...JULGO EXTINTO o processo sem resolução de mérito, com base nos arts. 21, § 1º, do Regimento Interno do Supremo Tribunal Federal e 485, VI, do Código de Processo Civil de 2015. Publique-se. Intime-se."	NÃO APRECIADA	Agravo Regimental	2	12	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3794855
337	4381	2143/2010	1	N/C	\N	2	11	N/C	\N	CONFEDERAÇÃO NACIONAL DO COM. DE BENS, SERVIÇOS E TURISMO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Ação direta de inconstitucionalidade, com pedido de liminar, da Lei nº 5.605, de 18/12/2009 que proíbe os postos de gasolina a impor o uso de uniformes que coloquem em evidência o corpo de suas funcionárias. Autoria: Geraldo Moreira, Ines Pandelo. A LEI ENCONTRA-SE EM VIGOR.	Não apreciada	N/C	N/C	7	14	\N	2	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3829763
338	4393	4140/2010	1	N/C	\N	2	10	N/C	\N	PROCURADOR GERAL DA REPUBLICA	GOVERNADOR DO ESTADO, ALERJ e AMB	Ação direta de inconstitucionalida, com pedido de medida cautelar, em impugnação à Lei 5.535, de 10 de setembro de 2009, do ERJ, que dispõe sobre os fatos funcionais da Magistratura do ERJ dá outras providências.	Não apreciada	N/C	N/C	2	14	\N	2	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3847970
339	44100-55.2011.8.19.0000	20230/2011	2	OE	\N	10	127	N/C	\N	EXMO. SR. PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei 2505/96 - DISPÕE SOBRE INGRESSO GRATUITO DE ATLETAS PROFISSIONAIS E AMADORES EM EVENTOS DESPORTIVOS REALIZADOS EM PRÓPRIOS DO ESTADO DO RIO DE JANEIRO.	N/C	INDEFERIDA	STF: RE 730465 Relator: Min. Teori Zavascki	2	12	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0044100-55.2011.8.19.0000
343	4535	15609/2011	1	N/C	\N	2	2	_	\N	CNCBST - CONF. NAC. DE BENS, SERVIÇOS E TURISMO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Art. 003° da Lei do Estado do Rio de Janeiro n° 5.356, de 23 de dezembro de 2008.	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	_	2	12	\N	2	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4013494
344	4579	22078/2011	1	N/C	\N	2	7	_	\N	PARTIDO SOCIAL LIBERAL	GOVERNARDOR DO ESTADO DO RJ E ALERJ	Promovida em face do artigo 110 da Lei Complementar 69/1990, que dispõe sobre DISPÕE SOBRE A CARREIRA DE FISCAL DE RENDA DA SECRETARIA DE ESTADO DE FAZENDA DO ESTADO DO RIO DE JANEIRO,com redação conferida pelo artigo 4º da Lei Complementar 135/2009, do Estado do Rio de Janeiro.	N/C	_	_	7	12	\N	2	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4056960
347	4700	22431/2011	1	N/C	\N	2	6	N/C	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do Art.101, caput, da Constituição do Estado do Rio de Janeiro de 1989.	N/C	N/C	N/C	4	\N	\N	2	2018-03-01 17:56:50	2018-03-01 17:56:50	Estagiário: Luan Moreira, 	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4180019
348	470550820018190000	9609/2001	2	21ª V. CÍVEL	\N	13	\N	N/C	128	ANTHONY GAROTINHO	INFOGLOBO COMUNICAÇÕES E OUTROS	Trata-se de Ação Indenizatória, antecipada por uma cautelar preventiva, proposta pelo autor em face de diversos veículos de comunicação a fim de evitar que conversas suas gravadas clandestinamente fossem divulgadas na mídia. ALERJ não é parte.	N/C	N/C	RE 638360	5	8	\N	3	2018-03-01 17:56:50	2018-03-01 17:56:50	N/C	\N	\N	\N
340	4419	12759/2010	1	N/C	\N	2	6	N/C	\N	EXMO GOVERNADOR DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face dos parágrafos 1° e 2°, do Art. 1°, da Lei Estadual nº 4744, de 11 de abril de 2006 que dispõe sobre vedações à formalização de contratos e convênios com órgãos e entidades da administração pública do estado do rio de janeiro e o cancelamento de concessões de serviço público a empresas que, direta ou indiretamente, utilizem trabalho escravo na produção de bens e serviços.	N/C	N/C	N/C	3	\N	23	2	2018-03-01 17:56:50	2018-06-06 17:03:49	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3889665
346	4664	14984/2012	1	N/C	\N	2	7	N/C	\N	CONFEDERAÇÃO NACIONAL DE SAÚDE - CNS	GOVERNADOR DO ESTADO DO RIO DE JANEIRO E ALERJ	Promovida em face da Lei Estadual 5950/11, que dispõe sobre o aumento do piso salarial de diversas categorias profissionais e prevê a inclusão de mais 36 categorias profissionais no piso salarial fluminense. Projeto de Lei nº 189/2011, Autoria PODER EXECUTIVO. ADI 4664	N/C	INDEFERIDA	N/C	3	\N	23	2	2018-03-01 17:56:50	2018-06-06 17:04:20	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4152255
3	497	17695/2017	1	N/C	\N	3	3	Não	\N	PROCURADORA-GERAL DA REPÚBLICA 	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO 	Revogação da prisão preventiva dos deputados estaduais Picciani, Albertassi e Paulo Melo (Resolução 577/2017 - prisão preventiva dos dep. estaduais)	Sem julgamento de mérito	Não apreciado	Não	2	35	\N	2	2018-03-01 17:56:38	2018-06-11 10:36:25	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5315426
342	451	4131/1991	1	N/C	\N	2	11	_	\N	CONFEDERAÇÃO NACIONAL DO COMÉRCIO	GOVERNADOR DO ERJ E ALERJ	Promovida em face dos Artigos 1º, 4º e 5º da Lei nº 1748, de 19/11/90 do ERJ - Dispõe sobre medidas de segurança nos estacionamentos destinados a veículos automotores - manter empregados próprios e responsabilidade civil do empresário	N/C	INDEFERIDA	_	2	35	\N	3	2018-03-01 17:56:50	2018-06-11 10:37:32	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1514839
341	4483	5265/2013	1	N/C	\N	2	8	_	\N	CONFEDERAÇÃO NACIONAL DO COMERCIO DE BENS... - CNC	GOVERNADOR DO ESTADO E ALERJ	Lei n° 5502, de 15 de julho de 2009, do Estado do Rio de Janeiro.	N/C	_	_	2	35	\N	2	2018-03-01 17:56:50	2018-06-11 10:38:04	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=3980287
349	47398-60.2008.8.19.0000	3609/2008	2	OE	\N	10	31	N/C	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Representação por Inconstitucionalidade em face da Lei n° 5.164 do ano 2007 do Estado do Rio de Janeiro. A lei “autoriza o Poder Executivo a instituir a “Fundação Estatal dos Hospitais Gerais”, a “Fundação Estatal dos Hospitais de Urgência” e a “Fundação Estatal dos Institutos de Saúde e a da Central Estadual de Transplante” e dá outras providências.” Projeto de Lei nº 1014/2007 Autoria Poder Executivo	Despacho Suspensão ou Sobrestamento - Defiro o pleito formulado às fls. 240/241(MP), reconhecendo o vínculo de prejudicialidade entre a presente demanda e aquela em trâmite perante Supremo Tribunal Federal, nos autos da Ação Direita de Inconstitucionalidade n.º 4.247, até final julgamento pelo STF. Rio, 25/02/2013	Acordam os Desembargadores, por maioria, em deferir a liminar, suspendendo-se os efeitos dos Artigos 44 e 45 da Lei atacada, vencidos os Desembargadores Sergio de Souza Verani e Valmir de Oliveira. Plenário, 07/07/2008	N/C	3	12	\N	3	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0047398-60.2008.8.19.0000
351	4782	13744/2012	1	N/C	\N	2	6	_	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do Art. 83, IX, da Constituição do ERJ. Art. 083 - Aos servidores públicos civis ficam assegurados, além de outros que a lei estabelecer, os seguintes direitos: (...) 0IX - incidência da gratificação adicional por tempo de serviço sobre o valor dos vencimentos;	Não apreciada	N/C	_	2	14	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4247736
359	5071	16021/2013	1	N/C	\N	2	15	N/C	\N	ASSOCIAÇÃO N. DE DEFESA DOS CARTORIOS DA ATIVIDADE NOTORIAL	GOVERNADOR DO ESTADO E ASSEMBLEIA LEGISLATIVA DO RJ	Promovida em face do inciso II, artigo 7° da Lei Estadual n° 6.370 de 20/12/2012, do Estado do Rio de Janeiro QUE MODIFICA A REDAÇÃO DAS TABELAS 16 A 25 DA LEI ESTADUAL Nº. 3.350/1999, VISANDO À SIMPLIFICAÇÃO DO RECOLHIMENTO DE EMOLUMENTOS, À NORMATIZAÇÃO DAS INOVAÇÕES EM SEDE NOTARIAL/REGISTRAL, À COMPATIBILIZAÇÃO COM A COBRANÇA DE EMOLUMENTOS EFETUADA NOS DEMAIS ESTADOS DA FEDERAÇÃO, BEM COMO À ADEQUAÇÃO AOS PRECEITOS DA LEI FEDERAL Nº 10.169/2000	N/C	N/C	N/C	3	11	\N	2	2018-03-01 17:56:51	2018-03-06 11:11:36	N/C	2018-02-21	Trânsito em Julgado em 15/02/2018.	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4506322
355	4958	9915/2013	1	N/C	\N	2	8	ADI 4960	\N	CONFEDERAÇÃO NACIONAL DO COMÉRCIO DE BENS SERVIÇOS E TURISMO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Art. 001°, 00I, "a", 0II, "a" e "e", §§ 001°, 002° e 005°; art. 003°, "caput" e art. 005°, da Lei n° 6108, de 13 de dezembro de 2011, do Estado do Rio de Janeiro. Por arrastamento, art. 002°, incisos e §§; art. 003°, §§ 001°, 002° e 003° e art. 006° e seu parágrafo único, da Lei n° 6108, de 13 de dezembro de 2011, do Estado do Rio de Janeiro.	N/C	_	_	2	15	\N	2	2018-03-01 17:56:51	2018-04-24 10:52:50	N/C	\N	\N	\N
358	4996	10853/2013	1	N/C	\N	2	9	_	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO E ALERJ	Decreto n° 29.591 de 26 de outubro de 2001 e o art. 3º da Lei Estadual n° 2.823 de 07 de novembro de 1997, com a redação dada pelo Art. 6º da Lei n°3.347 de 29 de dezembro de 1999, que instruíram suposto benefício fiscal.	N/C	_	_	3	9	\N	2	2018-03-01 17:56:51	2018-04-24 10:54:07	N/C	\N	\N	\N
357	4995	9833/2013 ( Junto ao 9803/2013)	1	N/C	\N	2	3	N/C	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei n° 6.077 de 18 de novembro de 2011, editados pelo Estado do Rio de Janeiro. Ministro Sr. Edson Facchin	N/C	N/C	N/C	2	35	\N	2	2018-03-01 17:56:51	2018-06-11 10:36:44	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4425860
356	4993	11153/2013	1	N/C	\N	2	6	N/C	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de ação direta de inconstitucionalidade, com pedido de medida cautelar, contra o art. 2.º, §§ 1.º, 2.º, 6.º e 7.º, da Lei 6.439, de 26 de abril de 2013, do Estado do Rio de Janeiro, que criou o Programa de Incentivo à Moderniza- ção, Renovação e Sustentabilidade da Frota de Caminhões do Estado. Projeto de Lei nº 2066/2013 Autoria: Poder Executivo	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	N/C	2	\N	23	2	2018-03-01 17:56:51	2018-06-06 17:03:12	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4425838
352	4789	9879/2012	1	N/C	\N	2	3	_	\N	PARTIDO SOCIALISMO E LIBERDADE - PSOL	ALERJ E GOVERNADOR DO ESTADO DO RIO DE JANEIRO	APromovida em face do art. 3º da Lei Estadual nº 4.529 de 31 de março de 2005, do Estado do Rio de Janeiro, que "aprova o enquadramento das sociedades CSA Companhia Siderúrgica do Atlantico, ThyssenKrupp Stahl A. G, Companhia Vale do Rio Doce no Programa de Atração de Investimentos Estruturantes - RIOINVEST, instituído pelo Decreto nº 23.012/97, para a construção e exploração de complexo siderúrgica no Estado do Rio de Janeiro e dá outras providências". Projeto de Lei nº 2349-A/2005 Autoria: Poder Executivo	N/C	_	_	5	\N	23	2	2018-03-01 17:56:51	2018-06-06 17:03:31	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4255808
353	0048165-59.2012.8.19.0000	11906/2012	2	OE	\N	10	129	_	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ALERJ E GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 5575/2009 e Decreto nº 42369/2010 que dispõe sobre a contratação temporária de pessoal sob a vigência dos convênios que envolvem o Programa do Sistema Nacional de Empregos - SINE.	N/C	_	Aresp 567.716 e ARE	2	13	\N	3	2018-03-01 17:56:51	2018-06-08 11:24:34	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0048165-59.2012.8.19.0000
350	4751	5200/2012	1	N/C	\N	2	3	N/C	\N	FED. DAS ENTIDADES DOS OFICIAIS MILITARES ESTADUAIS - FENEME	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Estadual nº 3586 de 21 de junho de 2001. QUE DISPÕE SOBRE A REESTRUTURAÇÃO DO QUADRO PERMANENTE DA POLÍCIA CIVIL DO ESTADO DO RIO DE JANEIRO E DÁ OUTRAS PROVIDÊNCIAS. Projeto de Lei nº 2314-A/2001, Autoria: PODER EXECUTIVO. PROCURADORA: DENISE SETSUKO Relator: MIN. RICARDO LEWANDOWSKI	N/C	N/C	N/C	2	35	\N	2	2018-03-01 17:56:51	2018-06-11 10:37:11	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4223259
360	5093	4773/2014	1	N/C	\N	2	8	_	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	ALERJ E OUTROS	Trata-se de ação direta de inconstitucionalidade, com pedido de liminar, tendo por objeto os artigos 2° §§ 1°, 4°, 10 e 13; 3° inciso II; 4° 6° incisos I e II e §§ 1° 2° e 3°' e 9°, incisos I e II e parágrafo único, todos da Lei nº 6.331, de 10 de outubro de 2012, do Estado do Rio de Janeiro, que "dispõe sobre aplicação de regime especial de tributação para estabelecimentos fabricantes de produtos têxteis, de confecções e aviamentos, nas condições que especifica". Projeto de Lei nº 1603/2012 Autoria Andre Correa, Rogerio Cabral, Sabino, Bernardo Rossi, Marcus Vinícius	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	_	3	13	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4539049
361	5094	3131/2014	1	N/C	\N	2	7	_	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei n° 5636, de 06 de janeiro de 2010, do Estado do Rio de Janeiro.	N/C	_	_	3	13	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4539057
362	5173	13145/2014	1	N/C	\N	2	6	_	\N	UNIÃO NACIONAL DAS INSTITUIÇÕES AUTOGESTÃO EM SAÚDE UNIDAS	ALERJ	Trata-se de ação direta de inconstitucionalidade ajuizada contra a Lei 6.881, de 5 de setembro de 2014, do Estado do Rio de Janeiro, a qual “obriga operadoras de planos de saúde a avisar, previamente e individualmente, aos consumidores, sobre o descredenciamento de Hospitais e Médicos no âmbito do Estado do Rio de Janeiro”. Projeto de Lei nº 1563-A/2012 Autoria André Ceciliano, Zaqueu Teixeira	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	_	7	8	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4658811
364	5176	13005/2014	1	N/C	\N	2	6	N/C	\N	CONFEDERAÇÃO NACIONAL DE TRANSPORTE - CNT	GOVERNADOR DO ESTADO DO RIO DE JANEIRO E ALERJ	Arts. 001º, 002º, 003º, "caput", incisos e parágrafos e art. 004º, "caput" e paragrafo único da Lei Estadual nº 6585, de 15 de Setembro de 2014, do Estado do Rio de Janeiro.	N/C	N/C	N/C	3	13	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4665369
365	5304	13826/2015	1	N/C	\N	2	7	N/C	\N	ASS NACIONAL DOS MEMBROS DO MINISTÉRIO PÚBLICO - CONAMP	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Emenda Constitucional n 59/2015 à Constituição do Estado do Rio de Janeiro, que modifica o inciso II do artigo 89, altera o inciso I do §1º do artigo 128 e o inciso VI do artigo 156, e acrescenta dispositivo ao ato das disposições constitucionais transitórias da constituição Estadual, relativo ao limite da idade para a aposentadoria compulsória do servidor público em geral.	N/C	N/C	N/C	3	13	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4754991
367	5336	17244/2015	1	N/C	\N	2	15	_	\N	CONFEDERAÇÃO NACIONAL DE SAÚDE - HOSPITAIS - CNS	GOVERNADOR E ALERJ	Promovida em face da lei Estadual nº 6296/2012: DISPÕE SOBRE A ATENÇÃO À SAÚDE OCUPACIONAL DOS PROFISSIONAIS DE ENFERMAGEM. Autor da PL: ENFERMEIRA REJANE	N/C	_	_	7	15	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4795216
368	5408	24376	1	N/C	\N	2	8	_	\N	PROCURADORIA-GERAL DA REPÚBLICA	ESTADO DO RIO DE JANEIRO E ALERJ	Promovida em face da Lei nº 7014/2015, especificamente contra as expressões "magistrados e" e "magistrados ou", contidas nos arts. 1°, 2º, e 4°, parágrafo único, da Lei 7.014/2015, que prevê pagamento de auxílio-educação a juízes e servidores do Poder Judiciário.	N/C	_	_	1	15	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4878104
369	58664-39.2011.8.19.0000	21795/2011	2	OE	\N	10	54	Anexo 11947/12 em 26/01/16	\N	DEPUTADA ESTADUAL JANIRA DA ROCHA SILVA COELHO BARRETO	EXMO. SR. PRESIDENTE DA ALERJ	Com pedido cautelar em face do Art. 22 da Lei Estadual nº 5.164, de 17 de dezembro de 2007, que autoriza o Poder Executivo a instituir a Fundação Estatal dos Hospitais Gerais, a Fundação Estatal dos Hospitais de Urgência e a Fundação Estatal dos Institutos de Saúde e da Central Estadual de Transplantes, e dá outras providências. Projeto de Lei nº. 1014/2007. Autoria: Poder Executivo. Processo suspenso. Aguardando julgamento da ADI 4247. Obs: apenso 11947/2012. Despacho no sentido de unificar os processos em 01/12/2015.	-	Medida cautelar para suspender até o dia do julgamento final desta representação por inconstitucionalidade os efetiso juridicos da redação do art 22 da lei 5167/2007	_	7	16	\N	3	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201100700093
370	60087-68.2010.8.19.000	494/2011	2	OE	\N	10	31	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	suspensão da eficácia dos disposivos da Lei nº 5373, de 15 de janeiro de 2009, QUE ALTERA A LEI Nº 3350 DE 29 DE DEZEMBRO DE 1999, E DÁ OUTRAS PROVIDÊNCIAS, Redação da Lei nº 3350 DE 29 DE DEZEMBRO DE 1999 QUE DISPÕE SOBRE AS CUSTAS JUDICIAIS E EMOLUMENTOS DOS SERVIÇOS NOTARIAIS E DE REGISTROS NO ERJ DÁ OUTRAS PROVIDÊNCIAS, de Autoria do Dep. Luiz Paulo, PL. 1721/2008 Publicado em 16/01/2009, do Estado do Rio de Janeiro, pelo conteúdo flagrantemente inconstitucional dos dispositivos impugnados e por sua nítida aptidão para infligir descabido ônus	N/C	INDEFERIDA	STJ AREsp 205175 RELATOR: Min. GURGEL DE FARIA - PRIMEIRA TURMA	3	12	\N	3	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0060087-68.2010.8.19.0000
366	5314	15652/2015	1	N/C	\N	2	11	N/C	\N	CONDEFERAÇÃO NACIONAL DE AGRICULTURA E PECUÁRIA DO BR - CNA	GOVERNADOR DO ESTADO DO RIO DE JANEIRO E ALERJ	Trata-se de ação direta de inconstitucionalidade, com pedido de medida cautelar, proposta pela Confederação Nacional da Agricultura e Pecuária do Brasil – CNA contra o art. 1º, caput e incisos I, II e IV, da Lei nº 6.983/2015, do Estado do Rio de Janeiro, que estabelecem piso salarial estadual em favor de diversas categorias. Projeto de Lei nº 91/2015 Autoria: Poder Executivo	N/C	N/C	N/C	4	\N	23	2	2018-03-01 17:56:51	2018-06-06 17:02:54	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4762216
372	907	7528/1993	1	N/C	\N	2	15	_	\N	CONFEDERÇÃO NACIONAL DO COMÉRCIO	ALERJ	Promovida em face da Lei Estadual 2.130, de 16/06/93, que obriga os supermecados e empresas congêneres a manterem pelo menos um funcionário empacotador em cada máquina registradora. Autoria : Leonel Brizola	N/C	DEFERIDA: Lei 2130 de 1993 do ERJ	_	5	13	\N	3	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1568949
376	ADI 5778	15987/2017	1	N/C	\N	2	7	Não	\N	GOVERNADOR DO ERJ	ALERJ	Trata-se de uma ação Direita de Inconstitucionalidade que tem como objeto a Lei 6323/12 que instituiu o parcelamento de multa de transito no Estado do Rio de Janeiro	_	Não apreciado	Não	3	12	\N	2	2018-03-01 17:56:51	2018-03-01 17:56:51	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5262373
375	0000990-49.2013.8.19.0060	1154/2014(apensado ao 2166/07 e 13542/12)	2	13ª V.F.P	\N	13	\N	N/C	39	MUNICÍPIO DE SUMIDOURO E OUTRO(S)	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO - ALERJ	Trata-se de Ação de Cobrança em que é o Requerente o MUNiCÍPIO DE SUMIDOURO e a Requerida é a ALERJ, objetivando em síntese a obrigação de fazer por parte da Alerj no sentido de arcar com o ônus de pagar o funcionário originário da parte requerenrte, pois a requerida seria cessionária).	Despacho da Dra Denise em 18/03/2016 : " Face aos excelentes relatórios elaborados às fls 67 e 67 vrs., ratifico o entendimento qto à desnecessidade de acompanhamento do presente processo, eis que a ALERJ foi excluida do polo passivo." Desta forma, o processo passa a estar arquivado nesta Secretaria.	N/C	N/C	3	15	\N	3	2018-03-01 17:56:51	2018-03-02 10:43:04	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2013.060.001012-9
363	5174	12552/2014	1	N/C	\N	2	6	_	\N	ASSOCIAÇÃO BRASILEIRA DAS DISTRIBUIDORAS DE GÁS - ADEGÁS	ALERJ E GOVERNADOR RJ	Trata-se de ação direta de inconstitucionalidade, com pedido de medida liminar, tendo por objeto a Lei n° 3.762, de 07 de janeiro de 2002, do Estado do Rio de Janeiro, que "proíbe a inscrição de usuários de serviços públicos em cadastros de devedores" Projeto de Lei nº 2760/2001 Autoria Carlos Dias	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	_	7	14	\N	2	2018-03-01 17:56:51	2018-03-02 10:47:43	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4659811
392	0017613-04.2018.8.19.0000	4236/2018	2	OE	2018-04-06 00:00:00	26	67	0005073-21.2018.8.19.0000	\N	FETRANSPOR	GOVERNADOR DO ESTADO DO RIO DE JANEIRO; PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Requerimento de tutela provisória de urgência de natureza cautelar e de caráter incidental a ser distribuído por dependência à RI em referência, 0005073-21.2018.8.19.0000.	\N	\N	\N	\N	14	\N	2	2018-04-11 15:07:09	2018-04-19 15:33:08	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201822800140
141	0015314-64.2012.8.19.0000	5937/2012 / 18071/2017	2	OE	\N	10	63	N/C	\N	EXMO PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Ação Direta de Inconstitucionalidade formulada pelo Chefe do Ministério Público deste Estado, no tocante à Lei Fluminense nº 6.058 de 07 de outubro de 2011; a qual estatui preferência de tramitação aos procedimentos judiciais que tenham por objeto adoção de menores. Projeto de Lei nº 509/2011 Autoria: Paulo Melo, Sabino	Acordam os Desembargadores, por unanimidade de votos, em rejeitar as preliminares contidas nas manifestações do Governador e do Presidente da ALERJ, com respaldo da Procuradoria do Estado. E no mérito, julgar procedente a postulação, em se declarando a inconstitucionalidade formal da Lei Fluminense 6.058 de 07/10/2011, no cotejo da Carta Estadual. Plenario, 05/11/2012	N/C	AREsp 421653 / ARE 1008426	2	\N	23	3	2018-03-01 17:56:43	2018-03-05 09:59:07	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0015314-64.2012.8.19.0000
85	0001961-25.2010.8.19.0000	8106/2010	2	OE	\N	10	21	N/C	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 5619, de 2009 "determina às agências reguladoras estaduais, o envio de planilhas de custos que justificaram aumentos de tarifas, sob pena de, não as enviando, ficarem suspensos os aumentos de tarifas. Autoria GILBERTO PALMARES	N/C	N/C	ARE 981575	2	\N	23	3	2018-03-01 17:56:41	2018-05-17 15:19:44	\N	2018-05-16	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0001961-25.2010.8.19.0000
374	0009815-17.2003.8.19.0000	21611/2003	2	OE	\N	10	131	Não	\N	ASSOCIAÇÃO BRASILEIRA DE CONCESSIONÁRIAS DE RODOVIAS ABCR	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 4044/2002, do Rio de Janeiro - Proibe a construção de praças de pedágio. Art. 1º - Fica proibida no âmbito territorial do Estado do Rio de Janeiro a construção de praças para cobrança de pedágio em qualquer ponto da via fora da divisa entre Municípios, exceto quando praças para cobrança de pedágios que antecedem túneis e pontes, ou vias construídas com a previsão de existência de praça de pedágio. Autora da Lei : Deputada Graça Matos Pede a autora da presente ação que sejam sustados os efeitos da Lei 4044/02 do Rio de Janeiro, assegurando as concessionárias o direito de manter as praças de pedágio nos locais em que estão instaladas e continuar nelas a cobrar tarifas. N° no STF: AI 741346 Relator: Min. Roberto Barroso	*	Pedido Cautelar	*Agravo de Instrumento N° STJ 741.346 *	2	8	\N	3	2018-03-01 17:56:51	2018-05-24 10:45:34	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0009815-17.2003.8.19.0000
373	0096265-81.2008.8.19.0001	11026/2008	2	1ª V.F.P	\N	8	\N	N/C	105	MINISTERIO PÚBLICO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Ação Civil Pública em face do concurso público referente aos anos de 1988 e 1989 (Admissão Servidores 1988) Junto aos processos : Alerj 13584/15, Alerj 13770 , Alerj 402, Alerj 20998	N/C	N/C	N/C	5	\N	23	2	2018-03-01 17:56:51	2018-06-06 17:02:21	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2008.001.094725-0
168	0026431-47.2015.8.19.0000	16461/2015	2	OE	\N	10	31	19302/2015 e 17148/2015	\N	FLÁVIO NANTES BOLSONÁRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Representação por Inconstitucionalidade, com pedido de concessão de medida liminar, impugnando a Lei Estadual nº 7.010 de 25 de maio de 2015, a qual "Dispõe sobre o Sistema de Revista de Visitantes nos estabelecimentos prisionais do Estado do Rio de Janeiro e dá outras providências" . Projeto de Lei nº 77/2015 Autoria Marcelo Freixo, Jorge Picciani, André Ceciliano	Ainda não houve pronunciamento a respeito da liminar	Ainda não foi julgada a ação.	N/C	5	\N	23	2	2018-03-01 17:56:44	2018-03-05 10:04:45	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700099
208	0036136-69.2015.8.19.0000	19302/2015 ( Apenso ao processo 19095/2015) e 17148/2015	2	OE	\N	10	31	16461/2015	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO ESTADO DO RJ, PRESIDENTE DA ALERJ	Representação por Inconstitucionalidade impugnando a Lei 7.010, de 2015, do Estado do Rio de Janeiro, que dispõe sobre o sistema de revista de visitantes nos estabelecimentos prisionais do Rio de Janeiro e dá outras providências.	N/C	Ainda não foi julgada a ação.	-	5	\N	23	2	2018-03-01 17:56:45	2018-03-05 10:05:30	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700131
276	0206046-23.2017.8.19.0001	12961/2017	2	3ª V.F.P	\N	13	\N	Não	60	PETROLEO BRASILEIRO S A PETROBRAS	ESTADO DO RIO DE JANEIRO / ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	O autor alega na inicial que foi instaurada uma Comissão Parlamentar de Inquérito no âmbito da Assembleia Legislativa do Estado do Rio de Janeiro - ALERJ para apurar o que jocosamente se denominou "desmonte da Petrobrás", ou seja, a venda de ativos em desrespeito à lei. 	Sem julgamento do mérito	"Desta forma, DEFIRO A TUTELA DE URGÊNCIA, na forma do art. 300 do CPC, para determinar a suspensão das convocações de gestores da PETROBRAS e de requisições de documentação da companhia por parte da CPI vinculada à Assembleia Legislativa Estadual. "	AI 0051702-87.2017.8.19.0000 / 0054106-14.2017.8.19.0000	3	11	\N	2	2018-03-01 17:56:48	2018-03-05 10:08:04	N/C	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.168696-6
216	0043864-93.2017.8.19.0000	13104/2017	2	OE	\N	10	73	N/C	\N	EXMO SR PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e outros	Representação por inconstitucionalidade com pedido de medida cautelar do art. 14-A da Lei nº 6.701, de 11 de março de 2014, acrescentado pelo art. 8º da lei nº7.426, de 24 de agosto de 2016, ambas do Estado do Rio de janeiro, e a resolução nº7, de 03 de junho de 2016, aprovada pelo conselho universitário da Universidade do Estado do Rio de Janeiro.	Sem julgamento do mérito	Pedido de medida cautelar	#REF!	3	\N	24	2	2018-03-01 17:56:46	2018-03-05 10:20:22	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700209
354	0048796-03.2012.8.19.0000	12660/2012	2	OE	\N	10	129	_	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do inciso X do Art. 358 da Constituição Estadual, acrescentado pela Emenda Constitucional nº 47, de 7 de junho de 2011, que estabelece que fica garantido aos Municípios o direito de liberdade de decisão quanto à associação ou não à Associação Estadual de Municípios do RJ (AEMERJ) e da Confederação Nacional de Municípios (CNM), inclusive com pagamento de contribuição.	N/C	_	ARE 876566	7	11	\N	3	2018-03-01 17:56:51	2018-03-05 10:25:57	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0048796-03.2012.8.19.0000
234	0057915-46.2016.8.19.0000	15027/2016	2	OE	\N	10	50	N/C	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ALERJ / GOV.ERJ	Promovida em face da Lei 6128 de 2011 do ERJ que modifica os limites da área de proteção ambiental de Massambaba, criada pelo decreto nº 9.529-c, de 15 de dezembro de 1986, na sua porção situada no município de Saquarema e dá outras providências. Autoria: Poder Executivo	declaração de inconstitucionaliade da Lei Estadual 6.128/11	suspender os efeitos da Lei Estadual nº 6.128/11	-	2	\N	23	2	2018-03-01 17:56:46	2018-03-06 10:17:45	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700190
121	0007160-81.2017.8.19.0000	4313/2017	2	OE	\N	7	52	N/C	\N	SINDJustiça	Presidente da ALERJ 	Impetrado pelo SIND JUSTIÇA, com pedido liminar, visando coibir a proibição de acesso ao Plenário da Casa Legislativa	Mérito não julgado.	Liminar parcialmente deferida, nas fls. 26	Contém agravo, interposto pela ALERJ	3	\N	24	2	2018-03-01 17:56:42	2018-03-06 10:22:36	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700400583
377	0005073-21.2018.8.19.0000	2409/2018	2	ÓRGÃO ESPECIAL	2018-02-05 00:00:00	10	22	0017613-04.2018.8.19.0000	\N	FEDERAÇÃO DAS EMPRESAS DE TRANSPORTES DE PASSAGEIROS DO ESTADO DO RIO DE JANEIRO FETRANSPOR	GOVERNADOR e ALERJ	Seja suspensa a eficácia do §3º do art. 19, da Lei Estadual nº 5.628/2009, incluído pela Lei Estadual nº 7.506/2016, art. 2º e, posteriormente, seja declarada a inconstitucionalidade do referido dispositivo legal.	\N	Há pedido de liminar	\N	4	14	\N	2	2018-03-02 13:16:50	2018-04-11 15:08:37	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700031
263	0091131-44.2006.8.19.0001	20998/2007	2	1ª V.F.P	\N	18	\N	N/C	106	MINISTÉRIO PULBICO DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Medida Cautelar Inominada preparatória de Ação Civil Pública devido a contratação de centenas de servidores públicos pela ALERJ, nos anos de 1998 e 1999. Junto aos processos : Alerj 13584/15, Alerj 13770 , Alerj 402 , Alerj 11026	N/C	N/C	N/C	2	\N	23	2	2018-03-01 17:56:47	2018-03-07 10:20:35	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2006.001.097091-5
120	0006943-04.2018.8.19.0000	2857/2018	2	OE	\N	10	36	8235/2017  (00165394620178190000)	\N	ORDEM DOS ADVOGADOS DO BRASIL SEÇÃO DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Contra a Lei 7701/2017, que dispõe sobre a redução da jornada de trabalho dos servidores médicos do Hospital Universitário Pedro Ernesto e da Policlínica Piquet Carneiro; e de Enfermagem, auxiliares, técnicos e enfermeiros, mantendo a remuneração originária do cargo, bem como sobre a redução da remuneração dos advogados públicos integrantes do Procuratório da UERJ	Sem julgamento do mérito	Não apreciado	Não	3	\N	24	2	2018-03-01 17:56:42	2018-04-02 11:50:44	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700034
393	0018223-69.2018.8.19.0000	4763/2018	2	OE	2018-04-10 00:00:00	10	92	Sem apensos	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Em face dos arts. 3º, 4º, 5º e 6º da Lei 7658/2017 do Estado do Rio de Janeiro.	Não julgado	Não apreciada	Sem recurso	2	13	\N	2	2018-04-11 16:09:18	2018-04-25 10:14:08	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700101
20	2877	10106/2003	1	N/C	\N	2	9	N/C	\N	PARTIDO DEMOCRÁTICO TRABALHISTA - PDT	GOVERNADOR DO ESTADO DO RIO DE JANEIRO E ALERJ	Trata-se de ação direta de inconstitucionalidade,com pedido de medida cautelar, em face do inciso VII, do parágrafo único, do Art. 118 da Constituição do ERJ - Lei Orgânica da Carreira de Fiscal de Rendas - e a totalidade da Lei Complementar nº 107, de 07/02/2003, que dispõe sobre as condições para a ocupação das funções de chefia e assessoramento superior dos orgãos de direção de fiscalização e tribu tação e altera a competência da Corregedoria da Secretaria de Estado competente para a fiscalização e arrecadação tributária. Projeto de Lei Complementar nº 32-A/2003 Autoria Poder Executivo	N/C	Rito abreviado - artigo 12 da Lei 9.868/99.	N/C	2	\N	23	3	2018-03-01 17:56:39	2018-03-09 11:06:56	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2115565
145	0016539-46.2017.8.19.0000	8235/2017	2	OE	\N	10	36	2857/2018 (00069430420188190000)	\N	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	PROMOVIDA EM FACE DA LEI 7426 DE 2016 DO ERJ QUE ALTERA A LEI Nº 6701/2014, PARA APERFEIÇOAR A CARREIRA TÉCNICO-ADMINISTRATIVA DA UERJ, E DÁ OUTRAS PROVIDÊNCIAS	N/C	N/C	N/C	4	\N	24	2	2018-03-01 17:56:43	2018-03-20 10:06:59	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700101
378	0008395-49.2018.8.19.0000	3130/2018	2	OE	\N	10	\N	\N	76	EXMO SR DEFENSOR PÚBLICO GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	RI COM PEDIDO DE LIMINAR DE SUSPENSÃO DE EFICÁCIA, EM FACE DA LEI ESTADUAL, Nº1.125, DE 12 DE FEVEREIRO DE 1987.	\N	\N	\N	7	13	\N	2	2018-03-20 11:24:04	2018-03-20 11:25:55	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700047
381	0011419-85.2018.8.19.0000	\N	2	OE	2018-03-09 00:00:00	10	43	Sem apensos.	\N	FEDERAÇÃO DO COMÉRCIO DE BENS, SERVIÇOS E TURISMO DO ESTADO DO RIO DE JANEIRO - FECOMÉRCIO RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO;  ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO; ILMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Declaração de inconstitucionalidade da Lei Estadual nº 7.898/2018, ante a i agressão aos artigos 22, incisos I e XXVII, 7º XXVI, 8º, I e VI e 170, inciso IV da CF.	Não julgado.	Não apreciado.	Sem recurso.	\N	11	\N	2	2018-03-20 17:11:14	2018-03-20 17:11:14	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700055
384	5916	3456/2018	1	\N	2018-03-15 00:00:00	2	9	Sem apenso.	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Declaração de inconstitucionalidade da Lei nº 7.345, de 14 de julho de 2016, do Estado do Rio de Janeiro, por violação ao art. 22, XI, e ao art. 16, §1, 11, da CF, de forma a que não mais produza efeito de qualquer natureza	Não Julgado.	Não apreciado.	Sem recurso.	7	15	\N	2	2018-03-20 17:29:26	2018-04-06 09:47:34	\N	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5373505
100	0010429-49.2013.5.01.0056	1932/2016	3	56ª VARA DO TRABALHO	\N	9	\N	N/C	34	MARCELO SOARES DA SILVA	UNIRIO MANUTENÇÃO E SERVIÇOS LTDA E OUTROS 2	N/C	N/C	N/C	N/C	4	14	\N	2	2018-03-01 17:56:42	2018-04-19 15:05:50	N/C	\N	ARQUIVADO	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=79789&p_grau_pje=1&popup=0&dt_autuacao=&cid=67165
380	0012995-16.2018.8.19.0000	\N	2	OE	2018-03-16 00:00:00	10	43	Sem apensos	\N	FEDERAÇÃO DO COMÉRCIO DE BENS SERVIÇOS E TURISMO DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO; PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Inciso II, art. 1º, da Lei Estadual 7898 de 2018  (suspender a categoria dos comerciários)	Não julgado	Não apreciada	Sem recurso	\N	11	\N	2	2018-03-20 17:08:48	2018-03-22 11:15:55	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700076
382	0011864-06.2018.8.19.0000	\N	2	OE	2018-03-12 00:00:00	10	43	Sem apenso	\N	FEDERAÇÃO DAS MISERICÓRDIAS E ENTIDADES FILANTRÓPICAS E BENEFICENTES DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO; EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação de Inconstitucionalidade com Pedido Liminar em face da Lei Estadual nº\r\n7.898 de 07 de março de 2018 que prevê o piso salarial dos empregados, integrantes das categorias profissionais (citadas na Lei) , que não o tenham definido em lei federal, convenção ou acordo coletivo de trabalho.	Não julgado	Pedido de liminar não apreciado	Sem recurso	\N	11	\N	2	2018-03-20 17:11:58	2018-03-22 11:17:15	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700058
379	0011133-10.2018.8.19.0000	3776/2018 e 4765/2018	2	OE	2018-03-08 00:00:00	10	43	Sem apenso.	\N	FEDERAÇÃO DAS INDÚSTRIAS DO ESTADO DO RIO DE JANEIRO - FIRJAN	EXMO. SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO; ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO;	Declarar a inconstitucionalidade do artigo 1º da Lei nº 7.898, de 08 de\r\nmarço de 2018, com efeitos ex tunc, excluindo-se da parte final do seu artigo 1º a\r\nexpressão “(...) que o fixe a maior”, o que se fará em preservação da supremacia\r\nconstitucional.	Não julgado.	Não apreciado.	Sem recurso.	3	11	\N	2	2018-03-20 17:04:02	2018-04-20 13:52:14	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700054
113	0004163-91.2018.8.19.0000	1606/2018	2	OE	\N	10	46	Não	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	A presente Representação de Inconstitucionalidade tem como objeto a impugnação do artigo 1º da Lei estadual nº 7.717/2017 (doc. 01), originário do Projeto de Lei nº 2329/2017, de iniciativa parlamentar, o qual institui tratamento desigual entre contribuintes do Imposto sobre Propriedade de Veículos Automotores (IPVA) que se encontram na mesma situação.	Não apreciado	Não apreciado	Não tem	4	\N	24	2	2018-03-01 17:56:42	2018-04-26 10:15:58	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700030
383	0012619-30.2018.8.19.0000	6384/2018	2	OE	2018-03-15 00:00:00	10	22	Sem apensos	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO; PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei Estadual nº 7577 de 2017	Não julgado	Não apreciada	Sem recursos	7	15	\N	2	2018-03-20 17:18:20	2018-05-15 14:40:16	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700072
386	0008254-30.2018.8.19.0000	2858/2018	2	OE	2018-02-22 00:00:00	10	85	Sem apenso.	\N	ASSOCIAÇÃO DOS NOTÁRIOS E REGISTRADORES DO ESTADO DO RIO DE JANEIRO - ANOREG - RJ	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO;	Declare a inconstitucionalidade da Lei 7380 de 14 de julho de 2016\r\nna sua integralidade.	Não julgado.	Cuida-se de Representação de Inconstitucionalidade em face da Lei\r\nEstadual 7.380, de 14 de julho de 2016, que “Reconhece o pastor evangélico e padres\r\ncomo juízes eclesiásticos de paz e altera a Lei nº 5645/2010, incluindo no calendário\r\noficial do Estado do Rio de Janeiro, o Dia Estadual do Juiz Eclesiástico de Paz, a ser\r\ncomemorado no dia 10 (dez) de janeiro”.\r\n\r\nArgui o representante a inconstitucionalidade material e formal por violação\r\nao artigo 168 da Constituição Estadual, porquanto ao conferir a qualidade de juízes de\r\npaz a padres e pastores evangélicos, afasta a obrigatoriedade de que tal cargo seja\r\nocupado por cidadão eleito pelo voto direto, exigência expressa tanto na\r\nConstituição Federal quanto na Constituição Estadual, bem como a qualidade de\r\nbacharel em Direito; afirma que o Supremo Tribunal Federal já consolidou\r\nentendimento através da ADI nº 1051/SC, de que os juízes de paz integram o\r\nPoder Judiciário e, portanto, a competência para regulamentar e encaminhar proposta\r\nde lei à Assembléia Legislativa, referente a tal matéria, é deste Tribunal de Justiça.\r\nRequer seja deferida medida cautelar para suspensão imediata da eficácia\r\nda mencionada norma.\r\n\r\n1) Notifique-se o órgão do qual emanou a lei impugnada, na forma do art.\r\n105 do RITJERJ.\r\n\r\n2) Após, à d. Procuradoria Geral do Estado, nos moldes do artigo 162,\r\n§ 3º, da Constituição do Estado.	Sem Recurso.	2	15	\N	2	2018-03-20 17:36:55	2018-03-20 17:36:55	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700044
387	0069384-55.2017.8.19.0000	1381/2018	2	OE	2017-12-04 00:00:00	10	85	Não há	\N	EXMO SR PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação de Inconstitucionalidade, com pedido liminar, contra a Lei Estadual nº 7.340, de 14 de julho de 2016, que “Dispõe sobre a concessão, pelo Departamento de Trânsito do Estado do Rio de Janeiro (DETRAN), de adesivo especial para trânsito em faixas seletivas, nas vias, para pessoas com deficiência proprietárias de veículos ...”"	Ainda não julgado	Ainda não apreciado	Não há	2	9	\N	2	2018-03-21 16:36:28	2018-03-21 16:36:28	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700324
388	0033687-07.2016.8.19.0000	14824/2017	2	OE	2016-07-06 00:00:00	10	82	\N	\N	SINDICATO DOS SERVIDORES DO PODER JUDICIÁRIO DO ESTADO DO RIO DE JANEIRO SINDJUSTIÇA-RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Em razão da inconstitucionalidade do Decreto nº 45.692, artigos 1º, 2º, 3º e 4º, de 17 de junho de 2016, que decretou o Estado de Calamidade Pública, no âmbito da administração financeira no Estado do Rio de Janeiro diante da violação direta o artigo 6º e 77, ambos da Constituição do Estado do Rio de Janeiro	Ainda não julgado o mérito	Não concedida a liminar	Agravo interno contra a decisão que indeferiu a liminar	\N	\N	24	2	2018-03-21 16:42:17	2018-03-21 16:48:02	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600700114
59	5248	10967/2015	1	N/C	\N	2	15	Mesmo objeto do processo 1121/15	\N	PROCURADOR-GERAL DA REPÚBLICA	GOVERNADOR DO RJ E ALERJ	Trata-se de ação direta de inconstitucionalidade para impugnar a validade constitucional da Lei 5.998/2011, do ERJ, que, entre outras providências, "torna obrigatório que as bibliotecas situadas no Estado do Rio de Janeiro mantenham exemplares da Bíblia Sagrada". Autoria: Edson Albertassi	N/C	_	_	2	15	\N	2	2018-03-01 17:56:40	2018-03-21 17:03:28	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4723922
385	0012085-86.2018.8.19.0000	\N	2	OE	2018-03-13 00:00:00	10	43	Sem apenso	\N	FEDERAÇÃO DOS HOSPITAIS E ESTABELECIMENTOS DE SERVIÇOS DE SAUDE DO ESTADO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO; EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação de Inconstitucionalidade com Pedido Liminar em face da Lei Estadual n.º 7.898/2018 que, aprovada pela Assembleia\r\nLegislativa do Estado do Rio de Janeiro - ALERJ e sancionada pelo Sr.\r\nGovernador do Estado do Rio de Janeiro, institui pisos salariais no âmbito do\r\nEstado do Rio de Janeiro para as categorias profissionais que menciona, e\r\nestabelece outras providências, em razão dos fatos e fundamentos jurídicos que\r\npassa a expor.	Não julgado	Liminar não apreciado	Sem recurso	\N	11	\N	2	2018-03-20 17:31:22	2018-03-22 11:16:40	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700061
389	0010834-33.2018.8.19.0000	3403/2018	2	OE	2018-03-13 00:00:00	10	36	Sem apenso	\N	PREFEITO DO MUNICÍPIO DE CABO FRIO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de representação de inconstitucionalidade do artigo 1º da Lei Estadual 7880/2018, que alterou a Lei Estadual 2498/1995, estabelecendo nova linha divisória entre os Municípios de Cabo Frio e Armação dos Búzios.	Não julgado	Não apreciado	Sem recurso	\N	13	\N	2	2018-03-21 16:44:36	2018-03-27 15:49:11	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700053
199	0033961-34.2017.8.19.0000	11766/2017	2	OE	\N	10	85	Não	\N	ASSOCIAÇÃO DE HOSPITAIS DO ESTADO DO RIO DE JANEIRO AHERJ	GOVERNADOR DO ESTADO DO RIO DE JANEIRO e PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei Estadual do Rio de Janeiro nº 7.621 que institui a obrigatoriedade dos estabelecimentos hospitalares públicos e privados, conveniados ou não, a prestar atendimento emergencial e integral a pacientes com suspeita de infarto agudo do miocárdio, no âmbito do Estado do Rio De Janeiro / Autoria da Lei: Ana Paula Rechuan	N/C	Com pedido liminar	N/C	3	9	\N	2	2018-03-01 17:56:45	2018-05-15 10:28:42	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700160
406	0007890-30.1996.8.19.0000	\N	2	OE	1996-04-17 00:00:00	7	\N	\N	\N	MUNICIPIO DO CANTAGALO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO; MESA DIRETORA DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	\N	\N	\N	\N	\N	\N	\N	3	2018-05-17 15:39:55	2018-05-17 15:41:01	ESTAGIÁRIA FERNANDA PENNA	\N	\N	\N
411	7636	Sem ofício	1	\N	2018-05-22 00:00:00	2	\N	\N	7	FABIO AUGUSTO DE SOUZA BORGES	UNIÃO; ESTADO DO RIO DE JANEIRO; PROCURADOR-GERAL  ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Tutela Provisória	\N	\N	\N	\N	\N	\N	2	2018-05-25 12:27:11	2018-05-25 12:27:11	\N	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5457241
390	0014391-28.2018.8.19.0000	7238/2018	2	OE	2018-03-22 00:00:00	10	31	Sem apensos	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei 7917/2018 do Estado do Rio de Janeiro (tempo de permanência do preso provisório)	Sem julgamento	Não apreciada	Sem recursos	\N	35	\N	2	2018-03-23 16:05:59	2018-06-14 17:21:57	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700079
82	213289520118190000	5987/2011	2	5ª V.F.P	\N	8	\N	N/C	18	MINISTÉRIO PÚBLICO DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / JORGE MOREIRA THEODORO E OUTROS	Trata-se de Ação Civil Pública por ato de Improbidade Administrativa, com pedido liminar, proposta pelo Ministério Público em face de Jorge Moreira Theodoro, CarlaCôrrea Francisco e outros, na qual se requereu a condenação dos dois primeiros demandados às sanções previstas no Art. 12, II e III, da Lei nº 8.429/92, bem como a anulação do ato de nomeação da segunda demandada ao cargo de auxiliar administrativo na ALERJ e dos atos que lhe concederam o pagamento do auxílio-educação.	A matéria pertinente ao ato de nomeação da servidora e concessão de pagamento de auxilio educação aqui tratada não tem relação com prerrogativas institucionais da ALERJ, pelo que, reconsidero a decisão de fls.507, parte inicial para acolher a preliminar de ilegitimidade passiva da ALERJ, determinado sua exclusão do pólo passivo da ação. Rio, 30/10/2014 (fls. 638) XXX Por todos os motivos acima elencados, julgo improcedentes os pedidos formulados pelo MP em face do 1º réu (Jorge Moreira Theodoro) e julgo procedente em parte os pedidos formulados em face da 2ª ré (Carla Correa Francisco) apenas para condená-la ao ressarcimento ao erário público das quantias recebidas a título de auxílio educação no ano de 2007, corrigidas e com a incidência de juros de 1% ao mês, a ser apurado em liquidação de sentença. Rio, 18/12/2015.	Pedido liminar indeferido. Rio, 20/05/2013	Recurso de Apelação - MP	7	\N	23	2	2018-03-01 17:56:41	2018-03-26 10:18:34	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2011.001.015337-2
256	0070287-90.2017.8.19.0000	3562/2018	2	OE	\N	10	49	Não	\N	ASSOCIAÇÃO DOS HOSPITADOR DO ESTADO DO RJ - AHERJ	GOVERNADOR E ALERJ	Representação de Inconstitucionalidade, com pedido liminar, em face da Lei 7.797/2017, que institui a obrigatoriedade da divulgação, por clínicas e hospitais em funcionamento no Estado do Rio de Janeiro, das informações profissionais e curriculares de médicos que exercem atividades nesses locais, com vistas à sua identificação pelos pacientes.	Ainda não apreciado	Ainda não julgado o mérito	Não tem	3	14	\N	2	2018-03-01 17:56:47	2018-04-02 15:35:58	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700330
296	0012538-23.2014.8.19.0000	3256/2014	2	OE	\N	10	57	211192720148190000	\N	SINDEPARK	EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da LEI Nº 6632, DE 13 DE DEZEMBRO DE 2013, PUBLICADA NO DIA 16 ,QUE DISPÕE SOBRE A INSTALAÇÃO DE SISTEMA DE FILMAGEM E GRAVAÇÃO AOS PRESTADORES DE SERVIÇOS DE ESTACIONAMENTO. Relator: Carlos Santos de Oliveira	N/C	DEFERIDA: Lei 6632 de 2013 ERJ	ARE	7	15	\N	2	2018-03-01 17:56:49	2018-05-30 10:07:38	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0012538-23.2014.8.19.0000
313	25170-81.2014.8.19.0000	9107/2014	2	OE	\N	10	65	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Representação por Inconstitucionalidade tendo por objeto as expressões “convencionais” e “não seletivo”, inscritas, respectivamente, no caput do art. 1º da Lei Estadual 4.510/05 e no §2º do mesmo dispositivo. A lei dispõe sobre a isenção do pagamento de tarifas nos serviços de transporte intermunicipal. Projeto de Lei nº 2173/2004 Autoria Poder Executivo	Acordam os Desembargadores, por unanimidade, em julgar procedente o pedido, na conformidade do voto em separado. Plenário, 12/05/2015 (fls. 77/84)	N/C	ARE 960394	7	\N	23	2	2018-03-01 17:56:49	2018-04-04 10:47:54	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0025170-81.2014.8.19.0000
70	5552	9270/2016	1	N/C	\N	2	3	Não	\N	PROCURADOR-GERAL DA REPÚBLICA	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO/ GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face do Art. 004°, inciso XIII, da n° Lei 2819, de 07 de novembro de 1997, do Estado do Rio de Janeiro; e a Resolução GPGJ n° 1221, de 05 de maio de 2004, e as alterações feitas pelas Resolução GPGJ n° 1292, de 06 de abril 2005, e a Resolução GPGJ n° 1601, de 06 de julho de 2010, todas do Procurador-Geral de Justiça do Estado do ERJ. Nos pontos em que disciplinam a cobrança de despesas operacionais na expedição de certidões, informações e cópias reprográficas pelo Ministério Público do Estado do Rio de Janeiro (MPRJ). Aquela, Cria Fundo Especial do Ministério Público - F. E. M. P. e dá outras providências e esta, Dispõe sobre as normas sobre a expedição e cobrança das despesas operacionais na expedição de certidão, informação e de cópia reprográfica.	OFICIO EXPEDIDO EXPEDIDO À ALERJ EM 01/07	Não	-	2	16	\N	2	2018-03-01 17:56:41	2018-04-04 15:14:04	N/C	2018-04-02	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5009974
247	0064833-32.2017.8.19.0000	17189/2017	2	OE	\N	7	100	Não	\N	ASSOCIAÇÃO NACIONAL DOS MINISTROS E CONSELHEIROS SUBSTITUTOS DOS TRIBUNAIS DE CONTAS AUDICON	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DO TRIBUNAL DE CONTAS DO ESTADO DO RIO DE JANEIRO	em face dos seguintes atos que compõem o procedimento de escolha de membro para ocupar cargo de conselheiro no TCE/RJ: a) ato de indicação, por parte do Governador do Estado do Rio de Janeiro, do Sr. Edson Albertassi, deputado estadual, para ocupar a vaga deixada pelo Conselheiro do TCE/RJ Jonas Lopes de Carvalho Junior; b) ato de aprovação, pela Alerj, do indicado; c) ato de nomeação, por parte do Governador do Estado do Rio de Janeiro, do Sr. Edson Albertassi; ato de posse do indicado, a ser conferido pela Presidente do TCE/RJ	Sem julgamento de mérito	Não apreciado	Não	4	16	\N	2	2018-03-01 17:56:47	2018-04-10 12:36:06	N/C	2018-04-06	\N	\N
394	0019107-98.2018.8.19.0000	\N	2	OE	2018-04-13 00:00:00	10	\N	Sem apensos	\N	ORDEM DOS ADVOGADOS DO BRASIL - SEÇÃO DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO; PREFEITO DO MUNICÍPIO DE BARRA MANSA	Inteiro teor da Lei Municipal de Barra Mansa nº4637 de 13 de julho de 2017, que redefiniu o limite para as obrigações de pequeno valor a que alude o § 12º, inciso II do art. 97 do Ato das disposições Constitucionais Transitórias de 30 (trinta) salários-mínimos para 8 (oito) salários	\N	Não apreciada	Sem recurso	\N	\N	\N	2	2018-04-18 10:00:18	2018-04-18 10:00:18	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700103
371	0063245-34.2010.8.19.0000	15544/2010	2	OE	\N	10	130	6743-2012	\N	EXMO. SR. PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RJ	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de Representação por Inconstitucionalidade, com pedido de liminar, da Lei Estadual nº 5.530, de 02 de setembro de 2009, que dispõe sobre o monitoramento eletrônico de apenados no âmbito do Estado do Rio de Janeiro. Projeto de Lei nº 1017/2007 Autoria: Cidinha Campos	Acordam os Desembargadores, por maioria, em julgar procedente a representação, para declarar a inconstitucionalidade da Lei atacada. Plenário 09/04/2012. (processo físico sem numeração)	N/C	ARE 742952	3	\N	23	3	2018-03-01 17:56:51	2018-04-18 13:11:27	\N	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0063245-34.2010.8.19.0000
300	0017774-24.2012.8.19.0000	5940/2012 ( 2 Volumes)	2	OE	\N	10	67	_	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	ALERJ E GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei nº 3406, de 15 de maio de 2000 , que, estabelece penalidades aos estabelecimentos que discriminem pessoas em virtude de sua orientação sexual, e dá outras providências.RELATOR DES. NILZA BITAR	N/C	INDEFERIDA: Acordaram os Desembargadores por maioria de votos, rejeitar a preliminar, e no mérito, julgar procedente o pedido para declarar a inconstitucionalidadeda. Votou vencido o Des Nagib Slaibi. ( o processo é fisíco e não há datas ou numeração nos autos disponíveis eletronicamente)	AREsp nº 433619 AREsp nº 696359. ARE 956044	4	12	\N	3	2018-03-01 17:56:49	2018-04-20 10:28:52	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0017774-24.2012.8.19.0000
198	0033434-82.2017.8.19.0000	11423/2017	2	OE	\N	10	85	N/C	\N	FEDERAÇÃO DOS HOSPITAIS E ESTABELECIMENTOS DE SERVIÇOS DE SAÚDE DO ESTADO DO RIO DE JANEIRO	ALERJ E GOVERNADOR	LEI 7621/2017 / Obrigatoriedade dos hospitais públicos e privados, conveniados ou não, a prestar atendimento emergencial e integral a pacientes com suspeita de infarto agudo do miocárdio... Autoria da Lei: Ana Paula Rechuan	N/C	NÃO APRECIADO	Não	3	9	\N	2	2018-03-01 17:56:45	2018-04-19 10:30:18	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700158
99	0197134-08.2015.8.19.0001	4525/2018	2	7ª V.F.P	\N	13	\N	Não	33	AUDICON	PRESIDENTE DA MESA DIRETORA DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO / GOVERNADOR DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DO TRIBUNAL DE CONTAS DO ESTADO DO RIO DE JANEIRO /	Com liminar, a presente ação visa que que seja declarada a nulidade absoluta do ato de indicação do Sr. Domingos Inácio Brazão para o cargo de Conselheiro do TCE/RJ, bem como a anulação de todos os atos subsequentes, ou seja, a nomeação e posse; Que seja determinado que o Governador do Estado abstenha-se de nomear o Sr. Domingos Inácio Brazão ao cargo de Conselheiro no TCE/RJ e qualquer outra pessoa eventualmente indicada que não atenda aos requisitos constitucionais de habilitação ao cargo de Conselheiro de Contas; Que também seja determinado que o Presidente do TCE/RJ abstenha-se de dar posse, no cargo de Conselheiro, ao Sr. Domingos Inácio Brazão e a qualquer outra pessoa eventualmente indicada e nomeada que não atenda aos requisitos constitucionais de habilitação ao cargo de Conselheiro de Contas; Seja determinado, caso o Sr. Domingos Inácio Brazão tenha entrado em exercício, o afastamento do cargo de Conselheiro do TCE/RJ;	-	Liminar indeferida.	0028845-18.2015.8.19.0000 (Rel. Des. Mario Guimarães Neto (Ordinária c/c T. A.: AUDICON X ALERJ e outros). 01/12/2015. (	2	8	\N	2	2018-03-01 17:56:42	2018-04-19 15:07:00	Trata-se do mesmo assunto do MS 13875/2015	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2015.001.179324-9
206	0035345-66.2016.8.19.0000	1012/2017	2	OE	\N	7	35	N/C	\N	ATILA NUNES PEREIRA FILHO	EXMO SR PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Trata-se de mandado de segurança impetrado por Átila Nunes Pereira Filho contra ato do PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO, DEPUTADO JORGE SAYED PICCIANI, consubstanciado na nomeação pelo edital de convocação o Sr. Carlos Augusto Carvalho Balthazar para assumir o mandato de Deputado Estadual pelo Partido Social Liberal - PSL no afastamento do Deputado ora impetrante, decorrente do cumprimento de decisão judicial do Tribunal Superior Eleitoral.	N/C	N/C	N/C	3	\N	23	2	2018-03-01 17:56:45	2018-05-07 16:05:27	Estagiário: Luan Moreira,	2018-04-20	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201600402536
183	0030847-87.2017.8.19.0000	13105/2017	2	OE	\N	10	37	0030222-53.2017.8.19.0000	\N	SINDICATO DOS SERVIDORES DO PODER JUDICIÁRIO DO ESTADO DO RIO DE JANEIRO – SINDJUSTIÇA-RJ	 GOVERNADOR DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	em razão da inconstitucionalidade dos artigos 1º, 2º e 3º da Lei 7.606, de 26 de maio de 2017 (anexa), que determinou o aumento da alíquota da contribuição previdenciária de 11 para 14% para os servidores públicos estatutários, ativos e inativos, do Estado do Rio de Janeiro, suas autarquias e fundações, assim como aos beneficiários de pensão por morte de servidor público estadual estatutário, diante da violação direta ao artigo 192, 195 e 196, IV,3 da Constituição do Estado do Rio de Janeiro e dos artigos 150, IV4 , 167, XI5 e 195, § 5º, da Constituição Federal de 1988	Sem julgamento do mérito	Não apreciado	Não	2	\N	24	2	2018-03-01 17:56:45	2018-05-09 11:59:10	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700143
396	0078225-02.2018.8.19.0001	4764/2018	2	5ª Vara de Fazenda Pública	2018-04-05 00:00:00	8	\N	Sem apenso	29	MINISTÉRIO PÚBLICO	ESTADO DO RIO DE JANEIRO	para que se abstenha de nomear Murilo Provençano do Reis Leal;\r\nGothardo Lopes Netto; Maria das Graças Tuze de Matos; e Lucineide Pereira Cabral\r\nMarchi, ao cargo de Conselheiro-Diretor da AGETRANSP, bem como que o Estado do Rio\r\nde Janeiro, na pessoa de seu Governador, encaminhe nova lista que contemple a\r\nindicação de candidatos que preencham os requisitos legais, notadamente os previstos\r\nna Lei Estadual 4.555/2005 e na Lei Federal 9.986/2000, no prazo de 30 (trinta) dias, na\r\nforma do artigo 45 da Lei Estadual 5.427/2009, a ser submetida à aprovação da ALERJ,\r\npreenchendo os cargos de Conselheiro-Diretor;	Sem mérito.	A concessão de medida liminar inaudita altera parte, na forma do\r\nart. 294, parágrafo único, do CPC/2015, para que, em sede de tutela provisória de\r\nurgência antecipada, o Estado do Rio de Janeiro se abstenha de nomear Murilo\r\nProvençano do Reis Leal; Gothardo Lopes Netto; Maria das Graças Tuze de Matos; e\r\nLucineide Pereira Cabral Marchi, ao cargo de Conselheiro-Diretor da AGETRANSP, bem\r\ncomo que o Estado do Rio de Janeiro, na pessoa de seu Governador, encaminhe nova\r\nlista que contemple a indicação de candidatos que preencham os requisitos legais,\r\nnotadamente os previstos na Lei Estadual 4.555/2005 e na Lei Federal 9.986/2000, no prazo de 30 (trinta) dias, na forma do artigo 45 da Lei Estadual 5.427/2009,\r\na ser submetida à aprovação da ALERJ, preenchendo assim na forma da lei os cargos de\r\nConselheiro-Diretor;	Sem recurso	\N	16	\N	2	2018-04-24 15:06:54	2018-04-24 15:06:54	\N	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaMov.do?v=2&numProcesso=2018.001.062702-6&acessoIP=internet&tipoUsuario=
325	0034639-30.2009.8.19.0000	4050/2009	2	OE	\N	10	67	N/C	\N	PROCURADORIA GERAL DO ESTADO DO RIO DE JANEIRO	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Estadual nº 5.327/2008, que tem por objeto a organização e a reestruturação do quadro de pessoal, em especial a transposição de cargos, na Fundação Departamento de Estradas e Rodagem do ERJ.	N/C	N/C	N/C	2	13	\N	3	2018-03-01 17:56:50	2018-04-26 10:02:53	N/C	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0034639-30.2009.8.19.0000
391	0015045-15.2018.8.19.0000	5394/2018	2	OE	2018-03-26 00:00:00	10	49	Sem apensos	\N	FEDERAÇÃO DAS INDÚSTRIAS DO ESTADO DO RIO DE JANEIRO - FIRJAN	PRESIDENTE DA ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Suspender a eficácia e declarar a inconstitucionalidade da Lei Estadual nº 7.818 de 15 de dezembro de 2017.	Não julgado	Não apreciada	Sem recurso	\N	16	\N	2	2018-03-27 14:27:10	2018-04-27 16:32:28	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700082
174	0027457-12.2017.8.19.0000	10272/2017	2	OE	\N	10	37	N/C	\N	FEDERAÇÃO DAS ASSOCIAÇÕES E SINDICATOS DOS SERVIDORES PÚBLICOS NO ESTADO DO RIO DE JANEIRO FASP	GOVERNADOR DO ESTADO DO RIO DE JANEIRO / PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do PROJETO DE LEI Nº 2240/2016 (Lei 3189/1999 RioPrevidência) NO DIA 24 DE MAIO DE 2017 QUE ALTERA A LEI 3.189 DE 22 DE FEVEREIRO DE 1999, QUE INSTITUI O FUNDO ÚNICO DE PREVIDÊNCIA SOCIAL DO ESTADO DO RIO DE JANEIRO (RIOPREVIDÊNCIA), majorando, dentre outros fatores, a aliquota de 11% para 14% de contribuição previdenciária dos servidores ativos, inativos e pensionistas do Estado do Rio de Janeiro.	N/C	N/C	N/C	2	\N	23	2	2018-03-01 17:56:44	2018-05-02 10:28:55	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=2017.007.00128&USER=
398	5936	5085/2018	1	\N	2018-04-24 00:00:00	2	9	\N	\N	MESA DIRETORA DA ALERJ	PRESIDENTE DA REPÚBLICA	A DECLARAÇÃO DE INCONSTITUCIONALIDADE SEM REDUÇÃO DO TEXTO A FIM DE, EM RELAÇÃO AO CONJUNTO NORMATIVO DECORRENTE DO ART. 46 DA LEI FEDERAL Nº 9.478/1997, DO ART. 2º, XII, E DO ART. 42, §2º, OS ÚLTIMOS DA LEI FEDERAL Nº 12.351/2010, DAR-SE INTERPRETAÇÃO CONFORME A CONSTITUIÇÃO DA REPÚBLICA, AFIRMANDO QUE OS ROYALTIES DE PETRÓLEO INCIDEM SOBRE O BÔNUS DE ASSINATURA.	\N	\N	\N	4	9	\N	2	2018-04-26 13:03:57	2018-05-04 12:24:36	\N	\N	\N	http://portal.stf.jus.br/processos/detalhe.asp?incidente=5445358
400	2865	5084	1	\N	2016-04-26 00:00:00	4	7	\N	\N	ESTADO DO RIO DE JANEIRO	UNIÃO	Resolução CNPE 01/2016 e da Resolução de Diretoria/ANP 34/2016.	\N	\N	\N	4	9	\N	2	2018-04-26 13:08:13	2018-04-27 14:54:03	\N	\N	\N	http://portal.stf.jus.br/processos/detalhe.asp?incidente=4970854
407	0026870-53.2018.8.19.0000	8140/2018	2	OE - Órgão Especial RJ	2018-05-22 00:00:00	10	\N	\N	\N	GOVERNADOR DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ALERJ	RI que tem por objeto os artigos 3º, 5º, 6º, 13, 15, 16, 17, 18, 20, 21, 22, 23, 24, 25, 29, 30, 31 e 32 da Lei Estadual nº 7.916/2018	\N	\N	\N	2	13	\N	2	2018-05-22 12:32:53	2018-06-18 16:01:23	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700134
402	6320	5775/2018	1	\N	2014-04-30 00:00:00	14	15	Sem apenso	\N	ASSEMBLEIA LEGISLATIVA DO ESTADO DO PARÁ	PRESIDENTE DA CÂMARA DOS DEPUTADOS  e \tCONGRESSO NACIONAL	Mandado de injunção em face de omissão legislativa atribuída aos presidentes da Câmara dos deputados e do Senado Federal, relativamente à edição de lei complementar federal destinada a regulamentar o Art. 45, §1, da Constituição \r\nFederal.	Sem Mérito	Sem liminar	Sem Recurso	\N	16	\N	2	2018-05-07 16:58:11	2018-05-07 16:58:11	\N	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4567442
262	0087620-67.2008.8.19.0001	402/2014 (Junto ao ALERJ 13770) ( partir de agora, utilizaremos apenas o proc. 13770/2012 tanto fisicamente, para juntar peças e publicações, quanto eletronicamente, para atualizar andamentos no SCPP)	2	1ª V.F.P	\N	18	\N	N/C	105	MINISTERIO PUBLICO DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO E OUTRO(S)...	inquérito civil instaurado em 12/06/2000, COM O ESCOPO DE APURAR AS CIRCUNSTÂNCIAS EM QUE SE DEU A CONTRATAÇÃO CENTENAS DE SERVIDORES PÚBLICOS PELA ALERJ, NOS ANOS 1988 E 1989. Junto aos processos : ALERJ 11026/08 + ALERJ 13584/15 + ALERJ 20998/07	N/C	N/C	AGRAVO DE INSTRUMENTO CÍVEL N° 0053405-87.2016.8.19.0000 / AGRAVO DE INSTRUMENTO CÍVEL N°0051575-86.2016.8.19.0000	5	\N	23	2	2018-03-01 17:56:47	2018-05-09 10:13:12	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2008.001.086302-8
268	0101853-60.2016.5.01.0027	16105/2016	3	27ª VARA DO TRABALHO	\N	9	\N	N/C	111	STEPHANIE STUMBO PINHO	ALERJ	Indenização Trabalhista / Contribuições Previdenciárias / Contribuições; Dano Moral / Responsabilidade da Administração	N/C	N/C	N/C	1	14	\N	2	2018-03-01 17:56:47	2018-06-05 11:26:24	Apenso ao processo 0013070-52.2018.8.19.0001 (TJRJ)	\N	ARQUIVADO	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1211009&p_grau_pje=1&popup=0&dt_autuacao=&cid=17362
401	35677	5446/2018	1	\N	2018-05-02 00:00:00	7	1	\N	\N	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	TRIBUNAL DE CONTAS DA UNIÃO	MS CONTRA O VENERANDO ACORDÃO Nº 672/2018-PL	\N	\N	\N	4	35	\N	2	2018-05-02 13:13:20	2018-06-11 10:33:05	\N	\N	\N	http://portal.stf.jus.br/processos/detalhe.asp?incidente=5450191
102	0000338-42.2018.8.19.0000	2046/2018	2	OE	\N	10	36	Não	\N	PROCURADOR GERAL DO ESTADO DO RIO DE JANEIRO	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Lei Estadual nº 7.372, de 14/07/2016, oriunda do Projeto de Lei nº 990/2011, de autoria do Deputado Estadual Luiz Paulo Correa da Rocha, que faculta à Administração estender efeitos financeiros de sentença transitada em julgado a servidores que não integraram a lide, concedendo-lhes reajuste de vencimentos ou proventos.	Não apreciado	Não apreciado	Não tem	7	9	\N	2	2018-03-01 17:56:42	2018-06-04 10:35:55	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700008
395	0019774-84.2018.8.19.0000	7236/2018	2	OE	2018-04-19 00:00:00	14	42	Sem apenso	\N	NELSON DOS SANTOS LAMEGO, ARNALDO DUTRA GOMES e VICTORINO BIRUTTI	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	concessão da injunção, para, reconhecendo a falta\r\nde norma regulamentadora do direito à aposentadoria especial dos\r\nservidores públicos “cujas atividades sejam exercidas sob condições\r\nespeciais que prejudiquem a saúde ou a integridade física”, remover\r\no obstáculo criado pela omissão legislativa e, supletivamente,\r\nviabilizar o exercício do direito estabelecido no artigo 40, § 4°, III, da\r\nConstituição, nos termos dos artigos 57 e 58, da Lei 8.213, de 1991,\r\naté que seja editada a lei complementar pertinente, sanando a\r\nomissão legislativa na regulamentação do artigo 7º, inciso XXIII, da\r\nConstituição da República e do artigo 83, inciso XXVIII, da\r\nConstituição do Estado do Rio de Janeiro e, para reconhecer o \r\ndireito à integração (incorporação) do adicional de periculosidade\r\nna aposentadoria dos impetrantes.	Sem mérito	Sem liminar	Sem recurso	\N	16	\N	2	2018-04-24 14:58:43	2018-06-04 14:05:47	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201804600008
403	0023140-34.2018.8.19.0000	7237/2018	2	\N	2018-05-04 00:00:00	2	\N	\N	\N	EXMO SR PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	EXMO  SR  GOVERNADOR  DO  ESTADO  DO  RIO  DE  JANEIRO e ALERJ	LEI Nº 7380 DE 14 DE JULHO 2016.\r\nRECONHECE O PASTOR EVANGÉLICO E PADRES COMO JUIZES ECLESIÁSTICOS DE PAZ E ALTERA A LEI Nº 5.645/2010, INCLUINDO NO CALENDÁRIO OFICIAL DO ESTADO DO RIO DE JANEIRO, O DIA ESTADUAL DO JUIZ ECLESIÁSTICO DE PAZ, A SER COMEMORADO NO DIA 10 (DEZ) DE JANEIRO.	\N	Com pedido de liminar ainda não apreciado.	\N	\N	12	\N	2	2018-05-08 08:46:48	2018-06-04 14:21:49	\N	\N	\N	\N
413	0028603-54.2018.8.19.0000	Sem ofício	2	OE - Órgão Especial RJ	2018-05-30 00:00:00	10	\N	\N	91	FEDERAÇÃO DAS MISERICÓRDIAS E ENTIDADES FILANTRÓPICAS E BENEFICENTES DO ESTADO DO RIO DE JANEIRO	PRESIDENTE DA ALERJ; GOVERNADOR e 2º VICE-PRESIDENTE DA ALERJ	RI em face da inclusão do parágrafo 2º do artigo 1º na Lei Estadual no 7.898/2018, promulgada pela ALERJ.	\N	\N	\N	\N	15	\N	2	2018-06-04 11:57:51	2018-06-04 12:04:57	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700137
417	0028706-61.2018.8.19.0000	Sem ofício	2	OE - Órgão Especial RJ	2018-05-30 00:00:00	10	\N	\N	43	FEDERAÇÃO DOS HOSPITAIS E ESTABELECIMENTOS DE SAÚDE DO ESTADO DO RIO DE JANEIRO (FEHERJ)	PRESIDENTE DA ALERJ E GOVERNADOR	RI em face da LEI ESTADUAL DO RIO DE JANEIRO Nº. 7.898/2018, publicada no Diário Oficial do Estado do Rio de Janeiro no dia 28.05.2018, que institui pisos salariais no âmbito do Estado do Rio de Janeiro para as categorias profissionais que menciona e estabelece outras providências.	\N	\N	\N	\N	15	\N	2	2018-06-04 12:01:18	2018-06-04 12:05:21	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700138
412	0028332-45.2018.8.19.0000	Sem ofício	2	OE - Órgão Especial RJ	2018-05-29 00:00:00	10	\N	\N	43	ASSOCIAÇÃO DE HOSPITAIS DO ESTADO DO RIO DE JANEIRO - AHERJ	PRESIDENTE DA ALERJ E GOVERNADOR	RI em face do § 2.º do artigo 1.º e artigo 8.º da Lei Estadual n.º 7.898/2018 que, promulgada pela Assembleia Legislativa do Estado do Rio de Janeiro - ALERJ, determina que o piso salarial dos empregados, integrantes das categorias profissionais de Auxiliares de Enfermagem (CBO 3222-30); Técnicos em Enfermagem (CBO 3222-05); E, Enfermeiros (CBO 2235).	\N	\N	\N	\N	15	\N	2	2018-06-04 11:40:49	2018-06-04 12:05:41	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700136
404	0023985-66.2018.8.19.0000	7235/2018	2	OE - Órgão Especial RJ	2018-05-09 00:00:00	10	\N	\N	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ALERJ	RI em face da Lei nº 2332/1994 do estado do RJ, a Lei nº 4528/2005, art. 63, a Lei nº 5597/2009, item 4 dos Objetivos e Metas para a Educação Básica, a  Lei nº 7517/2017, a Lei nº 7703/2017, o Decreto nº 21288/1995, expressão "e de Ensino Fundamental" consoante dos arts.. 1º e 3º, o Decreto nº 24150/1998, a Resolução SEEDUC nº 5549/2017, a Resolução SEEDUC nº 5532/2017, art. 12, II, art. 13, parágrafo único, II, art. 16 e art. 17.	\N	\N	\N	\N	35	\N	2	2018-05-09 12:47:35	2018-06-05 10:48:13	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700123
408	5949	7033/2018	1	\N	2018-05-23 00:00:00	2	\N	\N	12	ASSOCIAÇÃO DOS MAGISTRADOS BRASILEIROS	PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	ADI com pedido de medida cautelar em face da Lei n. 7.917/2018, editada pela Assembleia Legislativa do Estado do Rio de Janeiro, que legislou sobre matéria processual, ao dispor sobre um limite máximo de tempo à vigência da prisão de natureza provisória (180 dias) e permanência do preso provisório em qualquer das unidades do Sistema Penitenciário Estadual,  em manifesta violação ao art. 22, I, da CF	\N	DEFERIDA	\N	7	35	\N	2	2018-05-25 12:18:08	2018-06-11 10:29:14	\N	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5468027
418	0028320-31.2018.8.19.0000	\N	2	OE	2018-05-29 00:00:00	7	\N	Sem Apenso.	78	MUNICÍPIO DE SÃO JOSÉ DO VALE DO RIO PRETO	EXMO SR PRESIDENTE DA ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	A concessão da segurança para SUSPENDER DE FORMA\r\nDEFINITIVA o projeto de lei nº 4.029/2018, uma vez que o mesmo\r\nnão observou os estritos termos do §4º do artigo 18 da Constituição\r\nFederal de 1988;	Sem Mérito.	A concessão de medida liminar inaudita altera pars para suspender,\r\nEM CARÁTER DE URGÊNCIA, o processo de votação do Projeto\r\nde Lei nº 4.029/2018, cuja previsão é a data de 30/05/2018,\r\nevitando-se assim, em seu nascedouro, a edição de lei\r\nexpressamente inconstitucional, uma vez que o referido projeto de\r\nlei não observou os estritos termos do §4º do artigo 18 da\r\nConstituição Federal de 1988;	Sem Recurso.	\N	16	\N	2	2018-06-05 14:31:37	2018-06-05 14:31:37	\N	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800401146
419	0118911-36.2018.8.19.0001	sem oficio	2	6ª Vara de Fazenda Pública	\N	11	\N	\N	\N	ANTONIO GILSON DE OLIVEIRA	ALERJ, TCE, ERJ, DEPUTADOS E OUTROS	Suspender o pagamento dos salários e benefícios acessórios dele decorrentes, ao parlamentares e conselheiros do TCE/RJ que se encontra afastado dos cargos	\N	Há pedido de liminar	\N	\N	35	\N	2	2018-06-06 11:44:12	2018-06-06 11:44:12	\N	\N	\N	\N
345	4609	13972/2011	1	N/C	\N	2	11	N/C	\N	CONSELHO FEDERAL DA ORDEM DOS ADVOGADOS DO BRASIL	ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Visa à suspensão da eficácia do parágrafo único do Art. 1º da emenda nº 27/2002 à Constituição do Estado do Rio de Janeiro. Tal emenda revoga os Art. 62 e 63 do ato das Disposições Constitucionais Transitórias da Constituição do Estado do Rio de Janeiro de 05/10/1989. Autoria: Dep. Nilton Salomão.	N/C	N/C	N/C	2	\N	23	2	2018-03-01 17:56:50	2018-06-06 11:46:38	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4085616
228	0052756-30.2013.8.19.0000	13255/2013	2	OE	\N	10	17	13940/2013 - Nº Judicial 0053071-58.2013.8.19.0000 (RI em arquivamento definitivo - mesma lei)	\N	DIRETÓRIO REGIONAL DO PARTIDO DA REPÚBLICA - PR	EXMO SR GOVERNADOR DO ESTADO DO RIO DE JANEIRO e ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei Estadual nº 6528/2013, que proíbe o uso de máscaras em manifestações, sob a alegação de violação ao Art. 23 da Constituição ERJ. Junto ao processo 13940 ( RI arquivada - mesma lei) - Autoria: Domingos Brazão e Paulo Melo	N/C	INDEFERIDA	ARE 905149 RELATOR: MIN. ROBERTO BARROSO	2	\N	23	2	2018-03-01 17:56:46	2018-06-06 17:09:20	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0052756-30.2013.8.19.0000
165	0026000-13.2015.8.19.0000	16995/2015	2	OE	\N	10	72	N/C	\N	FECOMERCIO-RJ	GOVERNADOR DO ERJ E ALERJ	Promovida em face do § 9º, do artigo 22-A da Lei Estadual nº 6805, de 18 de junho de 2014, que versa sobre a inclusão da modalidade de desconto para o consumidor que, no ato da compra, entregue seu produto, como baterias de celulares, pilhas, lâmpadas fluorescentes, pneus usados, etc.Relator: DES. MARILIA DE CASTRO NEVES VIEIRA	N/C	N/C	N/C	2	\N	24	2	2018-03-01 17:56:44	2018-06-06 17:10:15	Estagiário: Sávia Midiã,	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201500700079
157	0020770-58.2013.8.19.0000	7798/2013	2	OE	\N	10	69	N/C	\N	PROCURADOR GERAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	GOVERNADOR DO ESTADO E PRESIDENTE DA ALERJ	Trata-se de Representação de Inconstitucionalidade do art. 2º da Lei Estadual 2162/1993(1); Decreto Regulamentar 19803/1994 (2); Lei Estadual 5608/2009 (3) e Emenda nº 44 à Constituição do Estado do Rio de Janeiro (4), todos pertinentes à criação da função gratificada de Animador Cultural. (1) Projeto de Lei nº 1610/93 Autoria: Poder Executivo (3) Projeto de Lei nº 1037/2007 Autoria: DR Wilson Cabral (4) Proposta de Emenda Constitucional nº 48/2009 Autoria: Marcelo Freixo, Gilberto Palmares	Acordam os Desembargadores, por maioria, em acolher a presente Direta de Inconstitucionalidade, vencido o Eminente e Culto Desembargador Sérgio de Souza Verani, que julgava improcedente o pedido. Plenario, 10/03/2014	N/C	ARE 842529	7	\N	23	3	2018-03-01 17:56:44	2018-06-06 17:11:06	Estagiário: Luan Moreira,	\N	\N	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0020770-58.2013.8.19.0000
35	3478	6486/2005	1	N/C	\N	2	3	N/C	\N	ASSINAP ASS. DOS ATIVOS E INATIVOS PENSIONISTAS DAS POLICIAS	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	Promovida em face do parágrafo 12 do Art. 91 da Constituição do ERJ, que permite a designação de um Pastor Evangélico para desempenhar função de orientador religioso junto às corporações da Polícia Militar e do Corpo de Bombeiros, com direito a ingressar no oficialato capelão. Dispositivo encontra-se VIGENTE.	N/C	N/C	N/C	5	\N	23	3	2018-03-01 17:56:39	2018-06-06 17:16:37	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=2292004
50	4834	11167/2012	1	N/C	\N	2	12	N/C	\N	GOVERNADOR DO ESTADO DE SÃO PAULO	ALERJ E GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Arts. 001°, 'caput' e 002°, incisos 00I, 0II e III, alíneas 'a', 'b' e 'c', ambos da Lei Estadual n° 4174, de 29 de setembro de 2003, do Estado do Rio de Janeiro.	N/C	INDEFERIDA	N/C	1	\N	23	2	2018-03-01 17:56:40	2018-06-06 17:16:57	Estagiário: Luan Moreira,	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4284719
405	0108530-66.2018.8.19.0001	\N	2	7ª Vara de Fazenda Pública	2018-05-10 00:00:00	13	\N	Sem apensos	\N	ELEUTERO GOMES DA SILVA	ESTADO DO RIO DE JANEIRO; FUNDO ÚNICO DE PREVIDÊNCIA SOCIAL DO ESTADO DO RIO DE JANEIRO - RIOPREVIDÊNCIA; ALERJ	Gratificação Incorporada / Quintos e Décimos / VPNI / Sistema Remuneratório e Benefícios / Servidor (AÇÃO ORDINÁRIA DE INCORPORAÇÃO DE FUNÇÃO GRATIFICADA)	Não julgado	Não apreciada	Sem recurso	\N	35	\N	2	2018-05-14 15:17:22	2018-06-11 10:32:21	\N	\N	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2018.001.088198-8
295	1100	6219/1994	1	N/C	\N	2	11	_	\N	GOVERNADOR DO ERJ	ALERJ	Trata-se de Ação Direta de Inconstitucionalidade, com pedido de liminar, tendo por objeto o art. 11 do Ato de Disposição Constitucional Transitórias da CERJ, co redação que lhe confere a Emenda Constitucional nº 05, de 16 de janeiro de 1992. A emenda assegura aos militares estaduais o exercício cumulativo de dois cargos ou empregos privativos de profissinais de saúde. Proposta de Emenda Constitucional nº 18/92 Autoria: Emir Larangeira	N/C	Por votação uânime, o tribunal não conheceu do pedido de medida liminar. Votou o Presidente. Ausente, ocasionalmente, o Min. Celso de Mello. Plenário, 11/11/1994 (fls. 47/54)	_	3	35	\N	3	2018-03-01 17:56:49	2018-06-11 10:38:53	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1594183
314	26874-91.1998.8.19.0000	2917/1998	2	OE	\N	10	31	N/C	\N	FEDERAÇÃO NACIONAL DOS URBANITÁRIOS DA CENTRAL UNIDA - CUT	ALERJ	Promovida em face da Lei Complementar nº 87, de 18/12/97, que dispõe sobre a região metropolitana do RJ, sua composição, organização e gestão, e sobre a microrregião dos lagos, define as funções públicas e seviços de interesse comum e da outras providências; e da Lei Ordinária Estadual nº 2869, de 18/12/97, que dispõe sobre o regime de prestação de serviçoes públicos de transporte ferroviário e metroviário de passageiros no Estado do Rio de Janeiro, e sobre o serviço público de saneamento básico no Estado do Rio de Janeiro, e dá outras providências. Autoria: Poder Executivo . Processo suspenso, aguardando julgamento das ADI n.º 1.826 e 1.843. e 1842	N/C	N/C	N/C	5	35	\N	3	2018-03-01 17:56:49	2018-06-11 10:39:33	N/C	\N	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=199800700027
281	0262891-75.2017.8.19.0001	17674/2017	2	OE	\N	21	\N	Não	27	MINISTÉRIO PÚBLICO	JOSÉ LUIZ LIMA/CARLOS EVANGELISTA DOS SANTOS FILHO/ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	A partir de matérias jornalísticas publicadas no Jornal “O Globo” e de reportagem exibida pelo “RJTV”, nos dias 27 e 28 de março de 2008, o Ministério Público do Estado do Rio de Janeiro, por intermédio de sua 7ª Promotoria de Justiça de Tutela Coletiva do Núcleo da Capital, instaurou o Inquérito Civil nº 9294/08 com vistas a apurar tanto a irregularidade na nomeação de assessores parlamentares, quanto no pagamento de auxílios-educação.	Sem julgamento do mérito	Não apreciado	Não	3	35	\N	2	2018-03-01 17:56:48	2018-06-11 10:41:00	N/C	\N	\N	\N
63	5481	3268/2016	1	N/C	\N	2	12	N/C	\N	ABEP - ASSOCIAÇÃO BRASILEIRA DE EMPRESAS DE EXPLORAÇÃO E PRODUÇÃO DE PETRÓLEO E GÁS	ALERJ/ GOVERNADOR DO ESTADO DO RIO DE JANEIRO	Promovida em face da Lei n° 7183, de 29 de dezembro de 2015, que Dispõe sobre alíquota do Imposto sobre Operações Relativas à Circulação de Mercadorias e sobre Prestações de Serviços de Transpor Interestadual e Intermunicipal e de Comunicações - ICMS, incidente sobre Operações de Circulação de Petróleo, nas condições que especifica, e dá outras providências. Autoria : Luiz Paulo	N/C	N/C	N/C	3	35	\N	2	2018-03-01 17:56:40	2018-06-11 10:48:47	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4936204
51	4908	4131/2013	1	N/C	\N	2	2	N/C	\N	ASSOCIAÇÃO NACIONAL DAS OPERADORAS CELULARES - ACEL	GOVERNADOR DO ESTADO DO RIO DE JANEIRO E ALERJ	Promovida em face da Lei 6.295, de 19 de julho de 2012, do Estado do Rio de Janeiro, que obriga concessionárias de telefonia fixa e celular a cancelar multas por rescisão contratual, em caso de rompimento do vínculo empregatício do usuário após adesão ao contrato. Projeto de Lei nº 138/2011 Autoria: Wagner Montes	N/C	N/C	N/C	3	35	\N	2	2018-03-01 17:56:40	2018-06-11 10:51:12	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4358364
5	558	7875/1991	1	N/C	\N	2	4	_	\N	PROCURADOR GERAL DA REPÚBLICA	ALERJ	Promovida em face do artigo 99, inciso XIV (Artigo 162 da Nova Constituição); Artigo 158, inciso IV, letra "d", item 2 e 3; Artigo 342, inciso VI; Artigo 159; Artigo 168, parágrafo 1º; caput do Artigo 176, parágrafo 1º, incisos I a IV, alíneas e,f,g,h,i do inciso V (do parágrafo 2º); artigo 178 (alínea "g" do inciso I e alínea "a" do inciso IV); artigo 346 e artigo 352 - parágrafo único; todos da Constituição do Estado do Rio de Janeiro.	N/C	DEFERIDA PARCIALMENTE: Reduzir a aplicação do Art. 176, Parágrafo 2º, Alínea E, no tocante à defesa de" interesses coletivos"; Da Alínea F, às hipóteses nelas previstas em que, ademais, concorra o requisito da necessidade do interessado, e suspendê-la, nos demais casos; Art. 346 e Parágrafo Único do Art. 352 da Constituição do ERJ	_	5	35	\N	3	2018-03-01 17:56:38	2018-06-11 11:00:44	N/C	\N	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=1522832
\.


--
-- Name: processos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.processos_id_seq', 419, true);


--
-- Data for Name: revisions; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.revisions (id, revisionable_type, revisionable_id, user_id, key, old_value, new_value, created_at, updated_at) FROM stdin;
1	App\\Data\\Models\\TipoUsuario	1	\N	created_at	\N	2018-02-08 20:21:37	2018-02-08 20:21:37	2018-02-08 20:21:37
2	App\\Data\\Models\\TipoUsuario	2	\N	created_at	\N	2018-02-08 20:21:37	2018-02-08 20:21:37	2018-02-08 20:21:37
3	App\\Data\\Models\\TipoUsuario	3	\N	created_at	\N	2018-02-08 20:21:37	2018-02-08 20:21:37	2018-02-08 20:21:37
4	App\\Data\\Models\\Tribunal	1	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
5	App\\Data\\Models\\Acao	1	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
6	App\\Data\\Models\\Juiz	1	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
7	App\\Data\\Models\\Tribunal	2	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
8	App\\Data\\Models\\Acao	2	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
9	App\\Data\\Models\\Juiz	2	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
10	App\\Data\\Models\\Tribunal	3	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
11	App\\Data\\Models\\Acao	3	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
12	App\\Data\\Models\\Juiz	3	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
13	App\\Data\\Models\\Acao	4	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
14	App\\Data\\Models\\Juiz	4	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
15	App\\Data\\Models\\Acao	5	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
16	App\\Data\\Models\\Juiz	5	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
17	App\\Data\\Models\\Acao	6	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
18	App\\Data\\Models\\Juiz	6	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
19	App\\Data\\Models\\Juiz	7	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
20	App\\Data\\Models\\Juiz	8	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
21	App\\Data\\Models\\Juiz	9	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
22	App\\Data\\Models\\Acao	7	\N	created_at	\N	2018-02-08 20:22:45	2018-02-08 20:22:45	2018-02-08 20:22:45
23	App\\Data\\Models\\Acao	8	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
24	App\\Data\\Models\\Juiz	10	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
25	App\\Data\\Models\\Juiz	11	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
26	App\\Data\\Models\\Juiz	12	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
27	App\\Data\\Models\\Juiz	13	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
28	App\\Data\\Models\\Juiz	14	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
29	App\\Data\\Models\\Juiz	15	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
30	App\\Data\\Models\\Juiz	16	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
31	App\\Data\\Models\\Juiz	17	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
32	App\\Data\\Models\\Juiz	18	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
33	App\\Data\\Models\\Acao	9	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
34	App\\Data\\Models\\Juiz	19	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
35	App\\Data\\Models\\Juiz	20	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
36	App\\Data\\Models\\Juiz	21	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
37	App\\Data\\Models\\Juiz	22	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
38	App\\Data\\Models\\Acao	10	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
39	App\\Data\\Models\\Juiz	23	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
40	App\\Data\\Models\\Tribunal	4	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
41	App\\Data\\Models\\Acao	11	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
42	App\\Data\\Models\\Juiz	24	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
43	App\\Data\\Models\\Juiz	25	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
44	App\\Data\\Models\\Acao	12	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
45	App\\Data\\Models\\Juiz	26	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
46	App\\Data\\Models\\Juiz	27	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
47	App\\Data\\Models\\Juiz	28	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
48	App\\Data\\Models\\Juiz	29	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
49	App\\Data\\Models\\Juiz	30	\N	created_at	\N	2018-02-08 20:22:46	2018-02-08 20:22:46	2018-02-08 20:22:46
50	App\\Data\\Models\\Acao	13	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
51	App\\Data\\Models\\Acao	14	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
52	App\\Data\\Models\\Juiz	31	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
53	App\\Data\\Models\\Juiz	32	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
54	App\\Data\\Models\\Juiz	33	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
55	App\\Data\\Models\\Tribunal	5	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
56	App\\Data\\Models\\Acao	15	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
57	App\\Data\\Models\\Juiz	34	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
58	App\\Data\\Models\\Juiz	35	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
59	App\\Data\\Models\\Acao	16	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
60	App\\Data\\Models\\Juiz	36	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
61	App\\Data\\Models\\Juiz	37	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
62	App\\Data\\Models\\Juiz	38	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
63	App\\Data\\Models\\Juiz	39	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
64	App\\Data\\Models\\Juiz	40	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
65	App\\Data\\Models\\Juiz	41	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
66	App\\Data\\Models\\Juiz	42	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
67	App\\Data\\Models\\Juiz	43	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
68	App\\Data\\Models\\Juiz	44	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
69	App\\Data\\Models\\Juiz	45	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
70	App\\Data\\Models\\Juiz	46	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
71	App\\Data\\Models\\Juiz	47	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
72	App\\Data\\Models\\Juiz	48	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
73	App\\Data\\Models\\Juiz	49	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
74	App\\Data\\Models\\Juiz	50	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
75	App\\Data\\Models\\Juiz	51	\N	created_at	\N	2018-02-08 20:22:47	2018-02-08 20:22:47	2018-02-08 20:22:47
76	App\\Data\\Models\\Tribunal	6	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
77	App\\Data\\Models\\Acao	17	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
78	App\\Data\\Models\\Juiz	52	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
79	App\\Data\\Models\\Tribunal	7	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
80	App\\Data\\Models\\Acao	18	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
81	App\\Data\\Models\\Juiz	53	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
82	App\\Data\\Models\\Juiz	54	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
83	App\\Data\\Models\\Juiz	55	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
84	App\\Data\\Models\\Juiz	56	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
85	App\\Data\\Models\\Juiz	57	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
86	App\\Data\\Models\\Juiz	58	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
87	App\\Data\\Models\\Juiz	59	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
88	App\\Data\\Models\\Juiz	60	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
89	App\\Data\\Models\\Acao	19	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
90	App\\Data\\Models\\Juiz	61	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
91	App\\Data\\Models\\Juiz	62	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
92	App\\Data\\Models\\Acao	20	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
93	App\\Data\\Models\\Juiz	63	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
94	App\\Data\\Models\\Juiz	64	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
95	App\\Data\\Models\\Juiz	65	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
96	App\\Data\\Models\\Juiz	66	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
97	App\\Data\\Models\\Tribunal	8	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
98	App\\Data\\Models\\Juiz	67	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
99	App\\Data\\Models\\Juiz	68	\N	created_at	\N	2018-02-08 20:22:48	2018-02-08 20:22:48	2018-02-08 20:22:48
100	App\\Data\\Models\\Juiz	69	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
101	App\\Data\\Models\\Juiz	70	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
102	App\\Data\\Models\\Juiz	71	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
103	App\\Data\\Models\\Juiz	72	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
104	App\\Data\\Models\\Juiz	73	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
105	App\\Data\\Models\\Juiz	74	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
106	App\\Data\\Models\\Tribunal	9	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
107	App\\Data\\Models\\Acao	21	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
108	App\\Data\\Models\\Juiz	75	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
109	App\\Data\\Models\\Juiz	76	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
110	App\\Data\\Models\\Juiz	77	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
111	App\\Data\\Models\\Juiz	78	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
112	App\\Data\\Models\\Juiz	79	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
113	App\\Data\\Models\\Juiz	80	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
114	App\\Data\\Models\\Juiz	81	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
115	App\\Data\\Models\\Juiz	82	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
116	App\\Data\\Models\\Juiz	83	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
117	App\\Data\\Models\\Tribunal	10	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
118	App\\Data\\Models\\Acao	22	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
119	App\\Data\\Models\\Juiz	84	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
120	App\\Data\\Models\\Acao	23	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
121	App\\Data\\Models\\Juiz	85	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
122	App\\Data\\Models\\Juiz	86	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
123	App\\Data\\Models\\Tribunal	11	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
124	App\\Data\\Models\\Acao	24	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
125	App\\Data\\Models\\Juiz	87	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
126	App\\Data\\Models\\Juiz	88	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
127	App\\Data\\Models\\Juiz	89	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
128	App\\Data\\Models\\Tribunal	12	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
129	App\\Data\\Models\\Acao	25	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
130	App\\Data\\Models\\Juiz	90	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
131	App\\Data\\Models\\Juiz	91	\N	created_at	\N	2018-02-08 20:22:49	2018-02-08 20:22:49	2018-02-08 20:22:49
132	App\\Data\\Models\\Juiz	92	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
133	App\\Data\\Models\\Juiz	93	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
134	App\\Data\\Models\\Juiz	94	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
135	App\\Data\\Models\\Juiz	95	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
136	App\\Data\\Models\\Juiz	96	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
137	App\\Data\\Models\\Juiz	97	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
138	App\\Data\\Models\\Acao	26	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
139	App\\Data\\Models\\Acao	27	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
140	App\\Data\\Models\\Juiz	98	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
141	App\\Data\\Models\\Tribunal	13	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
142	App\\Data\\Models\\Acao	28	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
143	App\\Data\\Models\\Juiz	99	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
144	App\\Data\\Models\\Tribunal	14	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
145	App\\Data\\Models\\Juiz	100	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
146	App\\Data\\Models\\Juiz	101	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
147	App\\Data\\Models\\Juiz	102	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
148	App\\Data\\Models\\Tribunal	15	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
149	App\\Data\\Models\\Juiz	103	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
150	App\\Data\\Models\\Tribunal	16	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
151	App\\Data\\Models\\Acao	29	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
152	App\\Data\\Models\\Juiz	104	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
153	App\\Data\\Models\\Tribunal	17	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
154	App\\Data\\Models\\Acao	30	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
155	App\\Data\\Models\\Juiz	105	\N	created_at	\N	2018-02-08 20:22:50	2018-02-08 20:22:50	2018-02-08 20:22:50
156	App\\Data\\Models\\Juiz	106	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
157	App\\Data\\Models\\Juiz	107	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
158	App\\Data\\Models\\Juiz	108	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
159	App\\Data\\Models\\Juiz	109	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
160	App\\Data\\Models\\Juiz	110	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
161	App\\Data\\Models\\Juiz	111	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
162	App\\Data\\Models\\Acao	31	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
163	App\\Data\\Models\\Juiz	112	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
164	App\\Data\\Models\\Acao	32	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
165	App\\Data\\Models\\Acao	33	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
166	App\\Data\\Models\\Acao	34	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
167	App\\Data\\Models\\Juiz	113	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
168	App\\Data\\Models\\Juiz	114	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
169	App\\Data\\Models\\Juiz	115	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
170	App\\Data\\Models\\Juiz	116	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
171	App\\Data\\Models\\Tribunal	18	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
172	App\\Data\\Models\\Acao	35	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
173	App\\Data\\Models\\Juiz	117	\N	created_at	\N	2018-02-08 20:22:51	2018-02-08 20:22:51	2018-02-08 20:22:51
174	App\\Data\\Models\\Acao	36	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
175	App\\Data\\Models\\Juiz	118	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
176	App\\Data\\Models\\Juiz	119	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
177	App\\Data\\Models\\Juiz	120	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
178	App\\Data\\Models\\Acao	37	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
179	App\\Data\\Models\\Juiz	121	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
180	App\\Data\\Models\\Tribunal	19	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
181	App\\Data\\Models\\Acao	38	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
182	App\\Data\\Models\\Juiz	122	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
183	App\\Data\\Models\\Juiz	123	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
184	App\\Data\\Models\\Juiz	124	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
185	App\\Data\\Models\\Juiz	125	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
186	App\\Data\\Models\\Juiz	126	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
187	App\\Data\\Models\\Juiz	127	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
188	App\\Data\\Models\\Juiz	128	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
189	App\\Data\\Models\\Tribunal	20	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
190	App\\Data\\Models\\Juiz	129	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
191	App\\Data\\Models\\Juiz	130	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
192	App\\Data\\Models\\Acao	39	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
193	App\\Data\\Models\\Juiz	131	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
194	App\\Data\\Models\\Juiz	132	\N	created_at	\N	2018-02-08 20:22:52	2018-02-08 20:22:52	2018-02-08 20:22:52
195	App\\Data\\Models\\Tribunal	21	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
196	App\\Data\\Models\\Acao	40	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
197	App\\Data\\Models\\Juiz	133	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
198	App\\Data\\Models\\Acao	41	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
199	App\\Data\\Models\\Juiz	134	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
200	App\\Data\\Models\\Juiz	135	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
201	App\\Data\\Models\\Acao	42	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
202	App\\Data\\Models\\Juiz	136	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
203	App\\Data\\Models\\Juiz	137	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
204	App\\Data\\Models\\Juiz	138	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
205	App\\Data\\Models\\Juiz	139	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
206	App\\Data\\Models\\Juiz	140	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
207	App\\Data\\Models\\Juiz	141	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
208	App\\Data\\Models\\Tribunal	22	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
209	App\\Data\\Models\\Juiz	142	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
210	App\\Data\\Models\\Juiz	143	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
211	App\\Data\\Models\\Acao	43	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
212	App\\Data\\Models\\Tribunal	23	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
213	App\\Data\\Models\\Juiz	144	\N	created_at	\N	2018-02-08 20:22:53	2018-02-08 20:22:53	2018-02-08 20:22:53
214	App\\Data\\Models\\Juiz	145	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
215	App\\Data\\Models\\Acao	44	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
216	App\\Data\\Models\\Tribunal	24	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
217	App\\Data\\Models\\Acao	45	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
218	App\\Data\\Models\\Juiz	146	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
219	App\\Data\\Models\\Acao	46	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
220	App\\Data\\Models\\Acao	47	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
221	App\\Data\\Models\\Juiz	147	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
222	App\\Data\\Models\\Tribunal	25	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
223	App\\Data\\Models\\Juiz	148	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
224	App\\Data\\Models\\Juiz	149	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
225	App\\Data\\Models\\Juiz	150	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
226	App\\Data\\Models\\Juiz	151	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
227	App\\Data\\Models\\Juiz	152	\N	created_at	\N	2018-02-08 20:22:54	2018-02-08 20:22:54	2018-02-08 20:22:54
228	App\\Data\\Models\\Tribunal	26	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
229	App\\Data\\Models\\Juiz	153	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
230	App\\Data\\Models\\Juiz	154	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
231	App\\Data\\Models\\Juiz	155	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
232	App\\Data\\Models\\Tribunal	27	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
233	App\\Data\\Models\\Juiz	156	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
234	App\\Data\\Models\\Juiz	157	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
235	App\\Data\\Models\\Acao	48	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
236	App\\Data\\Models\\Juiz	158	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
237	App\\Data\\Models\\Juiz	159	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
238	App\\Data\\Models\\Juiz	160	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
239	App\\Data\\Models\\Juiz	161	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
240	App\\Data\\Models\\Juiz	162	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
241	App\\Data\\Models\\Juiz	163	\N	created_at	\N	2018-02-08 20:22:55	2018-02-08 20:22:55	2018-02-08 20:22:55
242	App\\Data\\Models\\Juiz	164	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
243	App\\Data\\Models\\Tribunal	28	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
244	App\\Data\\Models\\Acao	49	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
245	App\\Data\\Models\\Juiz	165	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
246	App\\Data\\Models\\Tribunal	29	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
247	App\\Data\\Models\\Juiz	166	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
248	App\\Data\\Models\\Tribunal	30	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
249	App\\Data\\Models\\Acao	50	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
250	App\\Data\\Models\\Juiz	167	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
251	App\\Data\\Models\\Tribunal	31	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
252	App\\Data\\Models\\Acao	51	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
253	App\\Data\\Models\\Juiz	168	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
254	App\\Data\\Models\\Tribunal	32	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
255	App\\Data\\Models\\Juiz	169	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
256	App\\Data\\Models\\Juiz	170	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
257	App\\Data\\Models\\Juiz	171	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
258	App\\Data\\Models\\Juiz	172	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
259	App\\Data\\Models\\Juiz	173	\N	created_at	\N	2018-02-08 20:22:56	2018-02-08 20:22:56	2018-02-08 20:22:56
260	App\\Data\\Models\\Tribunal	1	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
261	App\\Data\\Models\\Acao	1	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
262	App\\Data\\Models\\TipoJuiz	1	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
263	App\\Data\\Models\\Juiz	1	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
264	App\\Data\\Models\\Meio	1	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
265	App\\Data\\Models\\Juiz	2	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
266	App\\Data\\Models\\Meio	2	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
267	App\\Data\\Models\\Acao	2	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
268	App\\Data\\Models\\Meio	3	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
269	App\\Data\\Models\\TipoJuiz	2	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
270	App\\Data\\Models\\Juiz	3	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
271	App\\Data\\Models\\Acao	3	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
272	App\\Data\\Models\\Juiz	4	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
273	App\\Data\\Models\\Acao	4	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:00	2018-02-28 17:47:00
274	App\\Data\\Models\\Juiz	5	\N	created_at	\N	2018-02-28 17:47:00	2018-02-28 17:47:01	2018-02-28 17:47:01
275	App\\Data\\Models\\Juiz	6	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
276	App\\Data\\Models\\Acao	5	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
277	App\\Data\\Models\\Juiz	7	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
278	App\\Data\\Models\\Tribunal	2	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
279	App\\Data\\Models\\Acao	6	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
280	App\\Data\\Models\\Juiz	8	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
281	App\\Data\\Models\\Juiz	9	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
282	App\\Data\\Models\\Juiz	10	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
283	App\\Data\\Models\\Acao	7	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
284	App\\Data\\Models\\Juiz	11	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
285	App\\Data\\Models\\Tribunal	3	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
286	App\\Data\\Models\\Acao	8	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
287	App\\Data\\Models\\Juiz	12	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
288	App\\Data\\Models\\TipoJuiz	3	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
289	App\\Data\\Models\\Juiz	13	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
290	App\\Data\\Models\\Juiz	14	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
291	App\\Data\\Models\\Juiz	15	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
292	App\\Data\\Models\\Acao	9	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
293	App\\Data\\Models\\Juiz	16	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
294	App\\Data\\Models\\Acao	10	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
295	App\\Data\\Models\\Juiz	17	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
296	App\\Data\\Models\\Tribunal	4	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
297	App\\Data\\Models\\Juiz	18	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
298	App\\Data\\Models\\Juiz	19	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
299	App\\Data\\Models\\Juiz	20	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
300	App\\Data\\Models\\Juiz	21	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
301	App\\Data\\Models\\Juiz	22	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
302	App\\Data\\Models\\Juiz	23	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
303	App\\Data\\Models\\Juiz	24	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
304	App\\Data\\Models\\Acao	11	\N	created_at	\N	2018-02-28 17:47:01	2018-02-28 17:47:01	2018-02-28 17:47:01
305	App\\Data\\Models\\Juiz	25	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
306	App\\Data\\Models\\Juiz	26	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
307	App\\Data\\Models\\Juiz	27	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
308	App\\Data\\Models\\Acao	12	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
309	App\\Data\\Models\\Juiz	28	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
310	App\\Data\\Models\\Juiz	29	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
311	App\\Data\\Models\\Juiz	30	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
312	App\\Data\\Models\\Juiz	31	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
313	App\\Data\\Models\\Juiz	32	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
314	App\\Data\\Models\\Juiz	33	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
315	App\\Data\\Models\\Juiz	34	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
316	App\\Data\\Models\\Juiz	35	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
317	App\\Data\\Models\\Juiz	36	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
318	App\\Data\\Models\\Juiz	37	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
319	App\\Data\\Models\\Juiz	38	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
320	App\\Data\\Models\\Juiz	39	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
321	App\\Data\\Models\\Juiz	40	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
322	App\\Data\\Models\\Juiz	41	\N	created_at	\N	2018-02-28 17:47:02	2018-02-28 17:47:02	2018-02-28 17:47:02
323	App\\Data\\Models\\Juiz	42	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
324	App\\Data\\Models\\Juiz	43	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
325	App\\Data\\Models\\Juiz	44	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
326	App\\Data\\Models\\Juiz	45	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
327	App\\Data\\Models\\Acao	13	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
328	App\\Data\\Models\\Acao	14	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
329	App\\Data\\Models\\Juiz	46	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
330	App\\Data\\Models\\Juiz	47	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
331	App\\Data\\Models\\Juiz	48	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
332	App\\Data\\Models\\Acao	15	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
333	App\\Data\\Models\\Juiz	49	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
334	App\\Data\\Models\\Juiz	50	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
335	App\\Data\\Models\\Juiz	51	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
336	App\\Data\\Models\\Juiz	52	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
337	App\\Data\\Models\\Juiz	53	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
338	App\\Data\\Models\\Juiz	54	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
339	App\\Data\\Models\\Juiz	55	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
340	App\\Data\\Models\\Juiz	56	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
341	App\\Data\\Models\\Acao	16	\N	created_at	\N	2018-02-28 17:47:03	2018-02-28 17:47:03	2018-02-28 17:47:03
342	App\\Data\\Models\\Juiz	57	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
343	App\\Data\\Models\\Juiz	58	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
344	App\\Data\\Models\\Acao	17	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
345	App\\Data\\Models\\Juiz	59	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
346	App\\Data\\Models\\Juiz	60	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
347	App\\Data\\Models\\Juiz	61	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
348	App\\Data\\Models\\Juiz	62	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
349	App\\Data\\Models\\Juiz	63	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
350	App\\Data\\Models\\Juiz	64	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
351	App\\Data\\Models\\Juiz	65	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
352	App\\Data\\Models\\Juiz	66	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
353	App\\Data\\Models\\TipoJuiz	4	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
354	App\\Data\\Models\\Juiz	67	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
355	App\\Data\\Models\\Juiz	68	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
356	App\\Data\\Models\\Juiz	69	\N	created_at	\N	2018-02-28 17:47:04	2018-02-28 17:47:04	2018-02-28 17:47:04
357	App\\Data\\Models\\Juiz	70	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
358	App\\Data\\Models\\Juiz	71	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
359	App\\Data\\Models\\Juiz	72	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
360	App\\Data\\Models\\Juiz	73	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
361	App\\Data\\Models\\Juiz	74	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
362	App\\Data\\Models\\Juiz	75	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
363	App\\Data\\Models\\Juiz	76	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
364	App\\Data\\Models\\Juiz	77	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
365	App\\Data\\Models\\Juiz	78	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
366	App\\Data\\Models\\Juiz	79	\N	created_at	\N	2018-02-28 17:47:05	2018-02-28 17:47:05	2018-02-28 17:47:05
367	App\\Data\\Models\\Juiz	80	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
368	App\\Data\\Models\\Juiz	81	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
369	App\\Data\\Models\\Juiz	82	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
370	App\\Data\\Models\\Juiz	83	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
371	App\\Data\\Models\\Juiz	84	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
372	App\\Data\\Models\\Juiz	85	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
373	App\\Data\\Models\\Juiz	86	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
374	App\\Data\\Models\\Juiz	87	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
375	App\\Data\\Models\\Juiz	88	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
376	App\\Data\\Models\\Juiz	89	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
377	App\\Data\\Models\\Juiz	90	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
378	App\\Data\\Models\\Juiz	91	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
379	App\\Data\\Models\\Juiz	92	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
380	App\\Data\\Models\\Juiz	93	\N	created_at	\N	2018-02-28 17:47:06	2018-02-28 17:47:06	2018-02-28 17:47:06
381	App\\Data\\Models\\Juiz	94	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
382	App\\Data\\Models\\Juiz	95	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
383	App\\Data\\Models\\Juiz	96	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
384	App\\Data\\Models\\Juiz	97	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
385	App\\Data\\Models\\Juiz	98	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
386	App\\Data\\Models\\Juiz	99	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
387	App\\Data\\Models\\Juiz	100	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
388	App\\Data\\Models\\Juiz	101	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
389	App\\Data\\Models\\Juiz	102	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
390	App\\Data\\Models\\Juiz	103	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
391	App\\Data\\Models\\Juiz	104	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
392	App\\Data\\Models\\Juiz	105	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
393	App\\Data\\Models\\Juiz	106	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
394	App\\Data\\Models\\Juiz	107	\N	created_at	\N	2018-02-28 17:47:07	2018-02-28 17:47:07	2018-02-28 17:47:07
395	App\\Data\\Models\\Juiz	108	\N	created_at	\N	2018-02-28 17:47:08	2018-02-28 17:47:08	2018-02-28 17:47:08
396	App\\Data\\Models\\Acao	18	\N	created_at	\N	2018-02-28 17:47:08	2018-02-28 17:47:08	2018-02-28 17:47:08
397	App\\Data\\Models\\Juiz	109	\N	created_at	\N	2018-02-28 17:47:08	2018-02-28 17:47:08	2018-02-28 17:47:08
398	App\\Data\\Models\\Juiz	110	\N	created_at	\N	2018-02-28 17:47:08	2018-02-28 17:47:08	2018-02-28 17:47:08
399	App\\Data\\Models\\Juiz	111	\N	created_at	\N	2018-02-28 17:47:08	2018-02-28 17:47:08	2018-02-28 17:47:08
400	App\\Data\\Models\\Juiz	112	\N	created_at	\N	2018-02-28 17:47:08	2018-02-28 17:47:08	2018-02-28 17:47:08
401	App\\Data\\Models\\Juiz	113	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
402	App\\Data\\Models\\Juiz	114	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
403	App\\Data\\Models\\Juiz	115	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
404	App\\Data\\Models\\Juiz	116	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
405	App\\Data\\Models\\Juiz	117	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
406	App\\Data\\Models\\Tribunal	5	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
407	App\\Data\\Models\\Acao	19	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
408	App\\Data\\Models\\Juiz	118	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
409	App\\Data\\Models\\Acao	20	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
410	App\\Data\\Models\\Juiz	119	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
411	App\\Data\\Models\\Juiz	120	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
412	App\\Data\\Models\\Juiz	121	\N	created_at	\N	2018-02-28 17:47:09	2018-02-28 17:47:09	2018-02-28 17:47:09
413	App\\Data\\Models\\Juiz	122	\N	created_at	\N	2018-02-28 17:47:10	2018-02-28 17:47:10	2018-02-28 17:47:10
414	App\\Data\\Models\\Juiz	123	\N	created_at	\N	2018-02-28 17:47:10	2018-02-28 17:47:10	2018-02-28 17:47:10
415	App\\Data\\Models\\Acao	21	\N	created_at	\N	2018-02-28 17:47:10	2018-02-28 17:47:10	2018-02-28 17:47:10
416	App\\Data\\Models\\Acao	22	\N	created_at	\N	2018-02-28 17:47:10	2018-02-28 17:47:10	2018-02-28 17:47:10
417	App\\Data\\Models\\Juiz	124	\N	created_at	\N	2018-02-28 17:47:10	2018-02-28 17:47:10	2018-02-28 17:47:10
418	App\\Data\\Models\\Juiz	125	\N	created_at	\N	2018-02-28 17:47:10	2018-02-28 17:47:10	2018-02-28 17:47:10
419	App\\Data\\Models\\Juiz	126	\N	created_at	\N	2018-02-28 17:47:11	2018-02-28 17:47:11	2018-02-28 17:47:11
420	App\\Data\\Models\\Acao	23	\N	created_at	\N	2018-02-28 17:47:11	2018-02-28 17:47:11	2018-02-28 17:47:11
421	App\\Data\\Models\\Juiz	127	\N	created_at	\N	2018-02-28 17:47:11	2018-02-28 17:47:11	2018-02-28 17:47:11
422	App\\Data\\Models\\Acao	24	\N	created_at	\N	2018-02-28 17:47:11	2018-02-28 17:47:11	2018-02-28 17:47:11
423	App\\Data\\Models\\Juiz	128	\N	created_at	\N	2018-02-28 17:47:11	2018-02-28 17:47:11	2018-02-28 17:47:11
424	App\\Data\\Models\\Juiz	129	\N	created_at	\N	2018-02-28 17:47:12	2018-02-28 17:47:12	2018-02-28 17:47:12
425	App\\Data\\Models\\Juiz	130	\N	created_at	\N	2018-02-28 17:47:12	2018-02-28 17:47:12	2018-02-28 17:47:12
426	App\\Data\\Models\\Juiz	131	\N	created_at	\N	2018-02-28 17:47:12	2018-02-28 17:47:12	2018-02-28 17:47:12
427	App\\Data\\Models\\Tribunal	6	\N	created_at	\N	2018-02-28 17:47:13	2018-02-28 17:47:13	2018-02-28 17:47:13
428	App\\Data\\Models\\Acao	25	\N	created_at	\N	2018-02-28 17:47:13	2018-02-28 17:47:13	2018-02-28 17:47:13
429	App\\Data\\Models\\Juiz	132	\N	created_at	\N	2018-02-28 17:47:13	2018-02-28 17:47:13	2018-02-28 17:47:13
430	App\\Data\\Models\\Acao	26	\N	created_at	\N	2018-02-28 17:47:13	2018-02-28 17:47:13	2018-02-28 17:47:13
431	App\\Data\\Models\\Juiz	133	\N	created_at	\N	2018-02-28 17:47:13	2018-02-28 17:47:13	2018-02-28 17:47:13
432	App\\Data\\Models\\Juiz	134	\N	created_at	\N	2018-02-28 17:47:13	2018-02-28 17:47:13	2018-02-28 17:47:13
433	App\\Data\\Models\\Acao	27	\N	created_at	\N	2018-02-28 17:47:13	2018-02-28 17:47:13	2018-02-28 17:47:13
434	App\\Data\\Models\\Juiz	135	\N	created_at	\N	2018-02-28 17:47:14	2018-02-28 17:47:14	2018-02-28 17:47:14
435	App\\Data\\Models\\Juiz	136	\N	created_at	\N	2018-02-28 17:47:14	2018-02-28 17:47:14	2018-02-28 17:47:14
436	App\\Data\\Models\\Juiz	137	\N	created_at	\N	2018-02-28 17:47:14	2018-02-28 17:47:14	2018-02-28 17:47:14
437	App\\Data\\Models\\Tribunal	1	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
438	App\\Data\\Models\\Acao	1	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
439	App\\Data\\Models\\Juiz	1	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
440	App\\Data\\Models\\Acao	2	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
441	App\\Data\\Models\\Juiz	2	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
442	App\\Data\\Models\\Acao	3	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
443	App\\Data\\Models\\Juiz	3	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
444	App\\Data\\Models\\Juiz	4	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
445	App\\Data\\Models\\Acao	4	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
446	App\\Data\\Models\\Juiz	5	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
447	App\\Data\\Models\\Juiz	6	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
448	App\\Data\\Models\\Acao	5	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
449	App\\Data\\Models\\Juiz	7	\N	created_at	\N	2018-03-01 09:34:07	2018-03-01 09:34:07	2018-03-01 09:34:07
450	App\\Data\\Models\\Juiz	8	\N	created_at	\N	2018-03-01 09:34:08	2018-03-01 09:34:08	2018-03-01 09:34:08
451	App\\Data\\Models\\Juiz	9	\N	created_at	\N	2018-03-01 09:34:08	2018-03-01 09:34:08	2018-03-01 09:34:08
452	App\\Data\\Models\\Juiz	10	\N	created_at	\N	2018-03-01 09:34:08	2018-03-01 09:34:08	2018-03-01 09:34:08
453	App\\Data\\Models\\Juiz	11	\N	created_at	\N	2018-03-01 09:34:08	2018-03-01 09:34:08	2018-03-01 09:34:08
454	App\\Data\\Models\\Juiz	12	\N	created_at	\N	2018-03-01 09:34:08	2018-03-01 09:34:08	2018-03-01 09:34:08
455	App\\Data\\Models\\Juiz	13	\N	created_at	\N	2018-03-01 09:34:08	2018-03-01 09:34:08	2018-03-01 09:34:08
456	App\\Data\\Models\\Juiz	14	\N	created_at	\N	2018-03-01 09:34:08	2018-03-01 09:34:08	2018-03-01 09:34:08
457	App\\Data\\Models\\Acao	6	\N	created_at	\N	2018-03-01 09:34:09	2018-03-01 09:34:09	2018-03-01 09:34:09
458	App\\Data\\Models\\Juiz	15	\N	created_at	\N	2018-03-01 09:34:09	2018-03-01 09:34:09	2018-03-01 09:34:09
459	App\\Data\\Models\\Juiz	16	\N	created_at	\N	2018-03-01 09:34:09	2018-03-01 09:34:09	2018-03-01 09:34:09
460	App\\Data\\Models\\Acao	7	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
461	App\\Data\\Models\\Acao	8	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
462	App\\Data\\Models\\Juiz	17	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
463	App\\Data\\Models\\Tribunal	2	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
464	App\\Data\\Models\\Juiz	18	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
465	App\\Data\\Models\\Juiz	19	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
466	App\\Data\\Models\\Acao	9	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
467	App\\Data\\Models\\Juiz	20	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
468	App\\Data\\Models\\Tribunal	3	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
469	App\\Data\\Models\\Acao	10	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
470	App\\Data\\Models\\Juiz	21	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
471	App\\Data\\Models\\Acao	11	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
472	App\\Data\\Models\\Juiz	22	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
473	App\\Data\\Models\\Juiz	23	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
474	App\\Data\\Models\\Juiz	24	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
475	App\\Data\\Models\\Tribunal	4	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
476	App\\Data\\Models\\Acao	12	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
477	App\\Data\\Models\\Juiz	25	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
478	App\\Data\\Models\\Juiz	26	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
479	App\\Data\\Models\\Acao	13	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
480	App\\Data\\Models\\Juiz	27	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
481	App\\Data\\Models\\Juiz	28	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
482	App\\Data\\Models\\Juiz	29	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
483	App\\Data\\Models\\Acao	14	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
484	App\\Data\\Models\\Juiz	30	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
485	App\\Data\\Models\\Juiz	31	\N	created_at	\N	2018-03-01 09:34:10	2018-03-01 09:34:10	2018-03-01 09:34:10
486	App\\Data\\Models\\Juiz	32	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
487	App\\Data\\Models\\Juiz	33	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
488	App\\Data\\Models\\Juiz	34	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
489	App\\Data\\Models\\Juiz	35	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
490	App\\Data\\Models\\Juiz	36	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
491	App\\Data\\Models\\Juiz	37	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
492	App\\Data\\Models\\Juiz	38	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
493	App\\Data\\Models\\Juiz	39	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
494	App\\Data\\Models\\Juiz	40	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
495	App\\Data\\Models\\Acao	15	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
496	App\\Data\\Models\\Juiz	41	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
497	App\\Data\\Models\\Juiz	42	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
498	App\\Data\\Models\\Juiz	43	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
499	App\\Data\\Models\\Tribunal	5	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
500	App\\Data\\Models\\Acao	16	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
501	App\\Data\\Models\\Juiz	44	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
502	App\\Data\\Models\\Juiz	45	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
503	App\\Data\\Models\\Juiz	46	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
504	App\\Data\\Models\\Juiz	47	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
505	App\\Data\\Models\\Juiz	48	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
506	App\\Data\\Models\\Juiz	49	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
507	App\\Data\\Models\\Juiz	50	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
508	App\\Data\\Models\\Juiz	51	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
509	App\\Data\\Models\\Juiz	52	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
510	App\\Data\\Models\\Juiz	53	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
511	App\\Data\\Models\\Juiz	54	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
512	App\\Data\\Models\\Juiz	55	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
513	App\\Data\\Models\\Juiz	56	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
514	App\\Data\\Models\\Juiz	57	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
515	App\\Data\\Models\\Juiz	58	\N	created_at	\N	2018-03-01 09:34:11	2018-03-01 09:34:11	2018-03-01 09:34:11
516	App\\Data\\Models\\Juiz	59	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
517	App\\Data\\Models\\Juiz	60	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
518	App\\Data\\Models\\Juiz	61	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
519	App\\Data\\Models\\Juiz	62	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
520	App\\Data\\Models\\Juiz	63	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
521	App\\Data\\Models\\Juiz	64	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
522	App\\Data\\Models\\Juiz	65	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
523	App\\Data\\Models\\Juiz	66	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
524	App\\Data\\Models\\Juiz	67	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
525	App\\Data\\Models\\Juiz	68	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
526	App\\Data\\Models\\Juiz	69	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
527	App\\Data\\Models\\Juiz	70	\N	created_at	\N	2018-03-01 09:34:12	2018-03-01 09:34:12	2018-03-01 09:34:12
528	App\\Data\\Models\\Juiz	71	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
529	App\\Data\\Models\\Juiz	72	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
530	App\\Data\\Models\\Juiz	73	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
531	App\\Data\\Models\\Juiz	74	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
532	App\\Data\\Models\\Acao	17	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
533	App\\Data\\Models\\Juiz	75	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
534	App\\Data\\Models\\Juiz	76	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
535	App\\Data\\Models\\Juiz	77	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
536	App\\Data\\Models\\Juiz	78	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
537	App\\Data\\Models\\Juiz	79	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
538	App\\Data\\Models\\Juiz	80	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
539	App\\Data\\Models\\Juiz	81	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
540	App\\Data\\Models\\Juiz	82	\N	created_at	\N	2018-03-01 09:34:13	2018-03-01 09:34:13	2018-03-01 09:34:13
541	App\\Data\\Models\\Juiz	83	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
542	App\\Data\\Models\\Juiz	84	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
543	App\\Data\\Models\\Juiz	85	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
544	App\\Data\\Models\\Acao	18	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
545	App\\Data\\Models\\Juiz	86	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
546	App\\Data\\Models\\Juiz	87	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
547	App\\Data\\Models\\Juiz	88	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
548	App\\Data\\Models\\Juiz	89	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
549	App\\Data\\Models\\Juiz	90	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
550	App\\Data\\Models\\Juiz	91	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
551	App\\Data\\Models\\Juiz	92	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
552	App\\Data\\Models\\Juiz	93	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
553	App\\Data\\Models\\Juiz	94	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
554	App\\Data\\Models\\Juiz	95	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
555	App\\Data\\Models\\Juiz	96	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
556	App\\Data\\Models\\Juiz	97	\N	created_at	\N	2018-03-01 09:34:14	2018-03-01 09:34:14	2018-03-01 09:34:14
557	App\\Data\\Models\\Acao	19	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
558	App\\Data\\Models\\Juiz	98	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
559	App\\Data\\Models\\Juiz	99	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
560	App\\Data\\Models\\Juiz	100	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
561	App\\Data\\Models\\Juiz	101	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
562	App\\Data\\Models\\Juiz	102	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
563	App\\Data\\Models\\Juiz	103	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
564	App\\Data\\Models\\Juiz	104	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
565	App\\Data\\Models\\Acao	20	\N	created_at	\N	2018-03-01 09:34:15	2018-03-01 09:34:15	2018-03-01 09:34:15
566	App\\Data\\Models\\Juiz	105	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
567	App\\Data\\Models\\Juiz	106	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
568	App\\Data\\Models\\Juiz	107	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
569	App\\Data\\Models\\Juiz	108	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
570	App\\Data\\Models\\Juiz	109	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
571	App\\Data\\Models\\Acao	21	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
572	App\\Data\\Models\\Juiz	110	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
573	App\\Data\\Models\\Juiz	111	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
574	App\\Data\\Models\\Juiz	112	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
575	App\\Data\\Models\\Juiz	113	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
576	App\\Data\\Models\\Juiz	114	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
577	App\\Data\\Models\\Juiz	115	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
578	App\\Data\\Models\\Juiz	116	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
579	App\\Data\\Models\\Juiz	117	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
580	App\\Data\\Models\\Juiz	118	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
581	App\\Data\\Models\\Juiz	119	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
582	App\\Data\\Models\\Juiz	120	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
583	App\\Data\\Models\\Juiz	121	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
584	App\\Data\\Models\\Juiz	122	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
585	App\\Data\\Models\\Acao	22	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
586	App\\Data\\Models\\Juiz	123	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
587	App\\Data\\Models\\Acao	23	\N	created_at	\N	2018-03-01 09:34:16	2018-03-01 09:34:16	2018-03-01 09:34:16
588	App\\Data\\Models\\Acao	24	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
589	App\\Data\\Models\\Juiz	124	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
590	App\\Data\\Models\\Acao	25	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
591	App\\Data\\Models\\Juiz	125	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
592	App\\Data\\Models\\Juiz	126	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
593	App\\Data\\Models\\Acao	26	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
594	App\\Data\\Models\\Juiz	127	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
595	App\\Data\\Models\\Juiz	128	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
596	App\\Data\\Models\\Juiz	129	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
597	App\\Data\\Models\\Juiz	130	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
598	App\\Data\\Models\\Juiz	131	\N	created_at	\N	2018-03-01 09:34:17	2018-03-01 09:34:17	2018-03-01 09:34:17
599	App\\Data\\Models\\Tribunal	6	\N	created_at	\N	2018-03-01 09:34:18	2018-03-01 09:34:18	2018-03-01 09:34:18
600	App\\Data\\Models\\Acao	27	\N	created_at	\N	2018-03-01 09:34:18	2018-03-01 09:34:18	2018-03-01 09:34:18
601	App\\Data\\Models\\Juiz	132	\N	created_at	\N	2018-03-01 09:34:18	2018-03-01 09:34:18	2018-03-01 09:34:18
602	App\\Data\\Models\\Juiz	133	\N	created_at	\N	2018-03-01 09:34:18	2018-03-01 09:34:18	2018-03-01 09:34:18
603	App\\Data\\Models\\Juiz	134	\N	created_at	\N	2018-03-01 09:34:19	2018-03-01 09:34:19	2018-03-01 09:34:19
604	App\\Data\\Models\\Juiz	135	\N	created_at	\N	2018-03-01 09:34:19	2018-03-01 09:34:19	2018-03-01 09:34:19
605	App\\Data\\Models\\Juiz	136	\N	created_at	\N	2018-03-01 09:34:19	2018-03-01 09:34:19	2018-03-01 09:34:19
606	App\\Data\\Models\\Juiz	137	\N	created_at	\N	2018-03-01 09:34:19	2018-03-01 09:34:19	2018-03-01 09:34:19
607	App\\Data\\Models\\Tribunal	1	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
608	App\\Data\\Models\\Acao	1	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
609	App\\Data\\Models\\Juiz	1	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
610	App\\Data\\Models\\Acao	2	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
611	App\\Data\\Models\\Juiz	2	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
612	App\\Data\\Models\\Acao	3	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
613	App\\Data\\Models\\Juiz	3	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
614	App\\Data\\Models\\Juiz	4	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
615	App\\Data\\Models\\Acao	4	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
616	App\\Data\\Models\\Juiz	5	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
617	App\\Data\\Models\\Juiz	6	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
618	App\\Data\\Models\\Acao	5	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
619	App\\Data\\Models\\Juiz	7	\N	created_at	\N	2018-03-01 09:34:34	2018-03-01 09:34:34	2018-03-01 09:34:34
620	App\\Data\\Models\\Juiz	8	\N	created_at	\N	2018-03-01 09:34:35	2018-03-01 09:34:35	2018-03-01 09:34:35
621	App\\Data\\Models\\Juiz	9	\N	created_at	\N	2018-03-01 09:34:35	2018-03-01 09:34:35	2018-03-01 09:34:35
622	App\\Data\\Models\\Juiz	10	\N	created_at	\N	2018-03-01 09:34:35	2018-03-01 09:34:35	2018-03-01 09:34:35
623	App\\Data\\Models\\Juiz	11	\N	created_at	\N	2018-03-01 09:34:35	2018-03-01 09:34:35	2018-03-01 09:34:35
624	App\\Data\\Models\\Juiz	12	\N	created_at	\N	2018-03-01 09:34:35	2018-03-01 09:34:35	2018-03-01 09:34:35
625	App\\Data\\Models\\Juiz	13	\N	created_at	\N	2018-03-01 09:34:35	2018-03-01 09:34:35	2018-03-01 09:34:35
626	App\\Data\\Models\\Juiz	14	\N	created_at	\N	2018-03-01 09:34:35	2018-03-01 09:34:35	2018-03-01 09:34:35
627	App\\Data\\Models\\Acao	6	\N	created_at	\N	2018-03-01 09:34:36	2018-03-01 09:34:36	2018-03-01 09:34:36
628	App\\Data\\Models\\Juiz	15	\N	created_at	\N	2018-03-01 09:34:36	2018-03-01 09:34:36	2018-03-01 09:34:36
629	App\\Data\\Models\\Juiz	16	\N	created_at	\N	2018-03-01 09:34:36	2018-03-01 09:34:36	2018-03-01 09:34:36
630	App\\Data\\Models\\Acao	7	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
631	App\\Data\\Models\\Acao	8	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
632	App\\Data\\Models\\Juiz	17	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
633	App\\Data\\Models\\Tribunal	2	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
634	App\\Data\\Models\\Juiz	18	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
635	App\\Data\\Models\\Juiz	19	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
636	App\\Data\\Models\\Acao	9	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
637	App\\Data\\Models\\Juiz	20	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
638	App\\Data\\Models\\Tribunal	3	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
639	App\\Data\\Models\\Acao	10	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
640	App\\Data\\Models\\Juiz	21	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
641	App\\Data\\Models\\Acao	11	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
642	App\\Data\\Models\\Juiz	22	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
643	App\\Data\\Models\\Juiz	23	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
644	App\\Data\\Models\\Juiz	24	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
645	App\\Data\\Models\\Tribunal	4	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
646	App\\Data\\Models\\Acao	12	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
647	App\\Data\\Models\\Juiz	25	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
648	App\\Data\\Models\\Juiz	26	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
649	App\\Data\\Models\\Acao	13	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
650	App\\Data\\Models\\Juiz	27	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
651	App\\Data\\Models\\Juiz	28	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
652	App\\Data\\Models\\Juiz	29	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
653	App\\Data\\Models\\Acao	14	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
654	App\\Data\\Models\\Juiz	30	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
655	App\\Data\\Models\\Juiz	31	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
656	App\\Data\\Models\\Juiz	32	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
657	App\\Data\\Models\\Juiz	33	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
658	App\\Data\\Models\\Juiz	34	\N	created_at	\N	2018-03-01 09:34:37	2018-03-01 09:34:37	2018-03-01 09:34:37
659	App\\Data\\Models\\Juiz	35	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
660	App\\Data\\Models\\Juiz	36	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
661	App\\Data\\Models\\Juiz	37	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
662	App\\Data\\Models\\Juiz	38	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
663	App\\Data\\Models\\Juiz	39	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
664	App\\Data\\Models\\Juiz	40	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
665	App\\Data\\Models\\Acao	15	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
666	App\\Data\\Models\\Juiz	41	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
667	App\\Data\\Models\\Juiz	42	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
668	App\\Data\\Models\\Juiz	43	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
669	App\\Data\\Models\\Tribunal	5	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
670	App\\Data\\Models\\Acao	16	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
671	App\\Data\\Models\\Juiz	44	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
672	App\\Data\\Models\\Juiz	45	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
673	App\\Data\\Models\\Juiz	46	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
674	App\\Data\\Models\\Juiz	47	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
675	App\\Data\\Models\\Juiz	48	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
676	App\\Data\\Models\\Juiz	49	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
677	App\\Data\\Models\\Juiz	50	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
678	App\\Data\\Models\\Juiz	51	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
679	App\\Data\\Models\\Juiz	52	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
680	App\\Data\\Models\\Juiz	53	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
681	App\\Data\\Models\\Juiz	54	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
682	App\\Data\\Models\\Juiz	55	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
683	App\\Data\\Models\\Juiz	56	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
684	App\\Data\\Models\\Juiz	57	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
685	App\\Data\\Models\\Juiz	58	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
686	App\\Data\\Models\\Juiz	59	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
687	App\\Data\\Models\\Juiz	60	\N	created_at	\N	2018-03-01 09:34:38	2018-03-01 09:34:38	2018-03-01 09:34:38
688	App\\Data\\Models\\Juiz	61	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
689	App\\Data\\Models\\Juiz	62	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
690	App\\Data\\Models\\Juiz	63	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
691	App\\Data\\Models\\Juiz	64	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
692	App\\Data\\Models\\Juiz	65	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
693	App\\Data\\Models\\Juiz	66	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
694	App\\Data\\Models\\Juiz	67	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
695	App\\Data\\Models\\Juiz	68	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
696	App\\Data\\Models\\Juiz	69	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
697	App\\Data\\Models\\Juiz	70	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
698	App\\Data\\Models\\Juiz	71	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
699	App\\Data\\Models\\Juiz	72	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
700	App\\Data\\Models\\Juiz	73	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
701	App\\Data\\Models\\Juiz	74	\N	created_at	\N	2018-03-01 09:34:39	2018-03-01 09:34:39	2018-03-01 09:34:39
702	App\\Data\\Models\\Acao	17	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
703	App\\Data\\Models\\Juiz	75	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
704	App\\Data\\Models\\Juiz	76	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
705	App\\Data\\Models\\Juiz	77	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
706	App\\Data\\Models\\Juiz	78	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
707	App\\Data\\Models\\Juiz	79	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
708	App\\Data\\Models\\Juiz	80	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
709	App\\Data\\Models\\Juiz	81	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
710	App\\Data\\Models\\Juiz	82	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
711	App\\Data\\Models\\Juiz	83	\N	created_at	\N	2018-03-01 09:34:40	2018-03-01 09:34:40	2018-03-01 09:34:40
712	App\\Data\\Models\\Juiz	84	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
713	App\\Data\\Models\\Juiz	85	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
714	App\\Data\\Models\\Acao	18	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
715	App\\Data\\Models\\Juiz	86	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
716	App\\Data\\Models\\Juiz	87	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
717	App\\Data\\Models\\Juiz	88	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
718	App\\Data\\Models\\Juiz	89	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
719	App\\Data\\Models\\Juiz	90	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
720	App\\Data\\Models\\Juiz	91	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
721	App\\Data\\Models\\Juiz	92	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
722	App\\Data\\Models\\Juiz	93	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
723	App\\Data\\Models\\Juiz	94	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
724	App\\Data\\Models\\Juiz	95	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
725	App\\Data\\Models\\Juiz	96	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
726	App\\Data\\Models\\Juiz	97	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
727	App\\Data\\Models\\Acao	19	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
728	App\\Data\\Models\\Juiz	98	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
729	App\\Data\\Models\\Juiz	99	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
730	App\\Data\\Models\\Juiz	100	\N	created_at	\N	2018-03-01 09:34:41	2018-03-01 09:34:41	2018-03-01 09:34:41
731	App\\Data\\Models\\Juiz	101	\N	created_at	\N	2018-03-01 09:34:42	2018-03-01 09:34:42	2018-03-01 09:34:42
732	App\\Data\\Models\\Juiz	102	\N	created_at	\N	2018-03-01 09:34:42	2018-03-01 09:34:42	2018-03-01 09:34:42
733	App\\Data\\Models\\Juiz	103	\N	created_at	\N	2018-03-01 09:34:42	2018-03-01 09:34:42	2018-03-01 09:34:42
734	App\\Data\\Models\\Juiz	104	\N	created_at	\N	2018-03-01 09:34:42	2018-03-01 09:34:42	2018-03-01 09:34:42
735	App\\Data\\Models\\Acao	20	\N	created_at	\N	2018-03-01 09:34:42	2018-03-01 09:34:42	2018-03-01 09:34:42
736	App\\Data\\Models\\Juiz	105	\N	created_at	\N	2018-03-01 09:34:42	2018-03-01 09:34:42	2018-03-01 09:34:42
737	App\\Data\\Models\\Juiz	106	\N	created_at	\N	2018-03-01 09:34:42	2018-03-01 09:34:42	2018-03-01 09:34:42
738	App\\Data\\Models\\Juiz	107	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
739	App\\Data\\Models\\Juiz	108	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
740	App\\Data\\Models\\Juiz	109	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
741	App\\Data\\Models\\Acao	21	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
742	App\\Data\\Models\\Juiz	110	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
743	App\\Data\\Models\\Juiz	111	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
744	App\\Data\\Models\\Juiz	112	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
745	App\\Data\\Models\\Juiz	113	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
746	App\\Data\\Models\\Juiz	114	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
747	App\\Data\\Models\\Juiz	115	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
748	App\\Data\\Models\\Juiz	116	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
749	App\\Data\\Models\\Juiz	117	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
750	App\\Data\\Models\\Juiz	118	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
751	App\\Data\\Models\\Juiz	119	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
752	App\\Data\\Models\\Juiz	120	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
753	App\\Data\\Models\\Juiz	121	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
754	App\\Data\\Models\\Juiz	122	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
755	App\\Data\\Models\\Acao	22	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
756	App\\Data\\Models\\Juiz	123	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
757	App\\Data\\Models\\Acao	23	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
758	App\\Data\\Models\\Acao	24	\N	created_at	\N	2018-03-01 09:34:43	2018-03-01 09:34:43	2018-03-01 09:34:43
759	App\\Data\\Models\\Juiz	124	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
760	App\\Data\\Models\\Acao	25	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
761	App\\Data\\Models\\Juiz	125	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
762	App\\Data\\Models\\Juiz	126	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
763	App\\Data\\Models\\Acao	26	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
764	App\\Data\\Models\\Juiz	127	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
765	App\\Data\\Models\\Juiz	128	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
766	App\\Data\\Models\\Juiz	129	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
767	App\\Data\\Models\\Juiz	130	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
768	App\\Data\\Models\\Juiz	131	\N	created_at	\N	2018-03-01 09:34:44	2018-03-01 09:34:44	2018-03-01 09:34:44
769	App\\Data\\Models\\Tribunal	6	\N	created_at	\N	2018-03-01 09:34:45	2018-03-01 09:34:45	2018-03-01 09:34:45
770	App\\Data\\Models\\Acao	27	\N	created_at	\N	2018-03-01 09:34:45	2018-03-01 09:34:45	2018-03-01 09:34:45
771	App\\Data\\Models\\Juiz	132	\N	created_at	\N	2018-03-01 09:34:45	2018-03-01 09:34:45	2018-03-01 09:34:45
772	App\\Data\\Models\\Juiz	133	\N	created_at	\N	2018-03-01 09:34:45	2018-03-01 09:34:45	2018-03-01 09:34:45
773	App\\Data\\Models\\Juiz	134	\N	created_at	\N	2018-03-01 09:34:45	2018-03-01 09:34:45	2018-03-01 09:34:45
774	App\\Data\\Models\\Juiz	135	\N	created_at	\N	2018-03-01 09:34:46	2018-03-01 09:34:46	2018-03-01 09:34:46
775	App\\Data\\Models\\Juiz	136	\N	created_at	\N	2018-03-01 09:34:46	2018-03-01 09:34:46	2018-03-01 09:34:46
776	App\\Data\\Models\\Juiz	137	\N	created_at	\N	2018-03-01 09:34:46	2018-03-01 09:34:46	2018-03-01 09:34:46
777	App\\Data\\Models\\User	3	3	remember_token	\N	n0qjCxM4mtwjWJTeYHj8lvJL07AougkJGhYAht1EFPm9QLG7hDxw4n9dDRlr	2018-03-01 10:56:34	2018-03-01 10:56:34
778	App\\Data\\Models\\User	3	3	remember_token	n0qjCxM4mtwjWJTeYHj8lvJL07AougkJGhYAht1EFPm9QLG7hDxw4n9dDRlr	Jaxd1bZmTCWDMzHK60iruDx29MF4uiH97ZalWgMnMkhNDfYLdhWGBUY3GFFm	2018-03-01 10:58:49	2018-03-01 10:58:49
779	App\\Data\\Models\\Tribunal	1	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
780	App\\Data\\Models\\Acao	1	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
781	App\\Data\\Models\\Juiz	1	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
782	App\\Data\\Models\\Acao	2	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
783	App\\Data\\Models\\Juiz	2	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
784	App\\Data\\Models\\Acao	3	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
785	App\\Data\\Models\\Juiz	3	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
786	App\\Data\\Models\\Juiz	4	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
787	App\\Data\\Models\\Acao	4	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
788	App\\Data\\Models\\Juiz	5	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
789	App\\Data\\Models\\Juiz	6	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
790	App\\Data\\Models\\Acao	5	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
791	App\\Data\\Models\\Juiz	7	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
792	App\\Data\\Models\\Juiz	8	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
793	App\\Data\\Models\\Juiz	9	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
794	App\\Data\\Models\\Juiz	10	\N	created_at	\N	2018-03-01 11:12:50	2018-03-01 11:12:50	2018-03-01 11:12:50
795	App\\Data\\Models\\Juiz	11	\N	created_at	\N	2018-03-01 11:12:51	2018-03-01 11:12:51	2018-03-01 11:12:51
796	App\\Data\\Models\\Juiz	12	\N	created_at	\N	2018-03-01 11:12:51	2018-03-01 11:12:51	2018-03-01 11:12:51
797	App\\Data\\Models\\Juiz	13	\N	created_at	\N	2018-03-01 11:12:51	2018-03-01 11:12:51	2018-03-01 11:12:51
798	App\\Data\\Models\\Juiz	14	\N	created_at	\N	2018-03-01 11:12:51	2018-03-01 11:12:51	2018-03-01 11:12:51
799	App\\Data\\Models\\Acao	6	\N	created_at	\N	2018-03-01 11:12:52	2018-03-01 11:12:52	2018-03-01 11:12:52
800	App\\Data\\Models\\Juiz	15	\N	created_at	\N	2018-03-01 11:12:52	2018-03-01 11:12:52	2018-03-01 11:12:52
801	App\\Data\\Models\\Juiz	16	\N	created_at	\N	2018-03-01 11:12:52	2018-03-01 11:12:52	2018-03-01 11:12:52
802	App\\Data\\Models\\Acao	7	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
803	App\\Data\\Models\\Acao	8	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
804	App\\Data\\Models\\Juiz	17	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
805	App\\Data\\Models\\Tribunal	2	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
806	App\\Data\\Models\\Juiz	18	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
807	App\\Data\\Models\\Juiz	19	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
808	App\\Data\\Models\\Acao	9	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
809	App\\Data\\Models\\Juiz	20	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
810	App\\Data\\Models\\Tribunal	3	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
811	App\\Data\\Models\\Acao	10	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
812	App\\Data\\Models\\Juiz	21	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
813	App\\Data\\Models\\Acao	11	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
814	App\\Data\\Models\\Juiz	22	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
815	App\\Data\\Models\\Juiz	23	\N	created_at	\N	2018-03-01 11:12:53	2018-03-01 11:12:53	2018-03-01 11:12:53
816	App\\Data\\Models\\Juiz	24	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
817	App\\Data\\Models\\Tribunal	4	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
818	App\\Data\\Models\\Acao	12	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
819	App\\Data\\Models\\Juiz	25	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
820	App\\Data\\Models\\Juiz	26	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
821	App\\Data\\Models\\Acao	13	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
822	App\\Data\\Models\\Juiz	27	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
823	App\\Data\\Models\\Juiz	28	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
824	App\\Data\\Models\\Juiz	29	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
825	App\\Data\\Models\\Acao	14	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
826	App\\Data\\Models\\Juiz	30	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
827	App\\Data\\Models\\Juiz	31	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
828	App\\Data\\Models\\Juiz	32	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
829	App\\Data\\Models\\Juiz	33	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
830	App\\Data\\Models\\Juiz	34	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
831	App\\Data\\Models\\Juiz	35	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
832	App\\Data\\Models\\Juiz	36	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
833	App\\Data\\Models\\Juiz	37	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
834	App\\Data\\Models\\Juiz	38	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
835	App\\Data\\Models\\Juiz	39	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
836	App\\Data\\Models\\Juiz	40	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
837	App\\Data\\Models\\Acao	15	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
838	App\\Data\\Models\\Juiz	41	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
839	App\\Data\\Models\\Juiz	42	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
840	App\\Data\\Models\\Juiz	43	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
841	App\\Data\\Models\\Tribunal	5	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
842	App\\Data\\Models\\Acao	16	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
843	App\\Data\\Models\\Juiz	44	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
844	App\\Data\\Models\\Juiz	45	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
845	App\\Data\\Models\\Juiz	46	\N	created_at	\N	2018-03-01 11:12:54	2018-03-01 11:12:54	2018-03-01 11:12:54
846	App\\Data\\Models\\Juiz	47	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
847	App\\Data\\Models\\Juiz	48	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
848	App\\Data\\Models\\Juiz	49	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
849	App\\Data\\Models\\Juiz	50	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
850	App\\Data\\Models\\Juiz	51	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
851	App\\Data\\Models\\Juiz	52	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
852	App\\Data\\Models\\Juiz	53	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
853	App\\Data\\Models\\Juiz	54	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
854	App\\Data\\Models\\Juiz	55	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
855	App\\Data\\Models\\Juiz	56	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
856	App\\Data\\Models\\Juiz	57	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
857	App\\Data\\Models\\Juiz	58	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
858	App\\Data\\Models\\Juiz	59	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
859	App\\Data\\Models\\Juiz	60	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
860	App\\Data\\Models\\Juiz	61	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
861	App\\Data\\Models\\Juiz	62	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
862	App\\Data\\Models\\Juiz	63	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:55	2018-03-01 11:12:55
863	App\\Data\\Models\\Juiz	64	\N	created_at	\N	2018-03-01 11:12:55	2018-03-01 11:12:56	2018-03-01 11:12:56
864	App\\Data\\Models\\Juiz	65	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
865	App\\Data\\Models\\Juiz	66	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
866	App\\Data\\Models\\Juiz	67	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
867	App\\Data\\Models\\Juiz	68	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
868	App\\Data\\Models\\Juiz	69	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
869	App\\Data\\Models\\Juiz	70	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
870	App\\Data\\Models\\Juiz	71	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
871	App\\Data\\Models\\Juiz	72	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
872	App\\Data\\Models\\Juiz	73	\N	created_at	\N	2018-03-01 11:12:56	2018-03-01 11:12:56	2018-03-01 11:12:56
873	App\\Data\\Models\\Juiz	74	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
874	App\\Data\\Models\\Acao	17	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
875	App\\Data\\Models\\Juiz	75	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
876	App\\Data\\Models\\Juiz	76	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
877	App\\Data\\Models\\Juiz	77	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
878	App\\Data\\Models\\Juiz	78	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
879	App\\Data\\Models\\Juiz	79	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
880	App\\Data\\Models\\Juiz	80	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
881	App\\Data\\Models\\Juiz	81	\N	created_at	\N	2018-03-01 11:12:57	2018-03-01 11:12:57	2018-03-01 11:12:57
882	App\\Data\\Models\\Juiz	82	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
883	App\\Data\\Models\\Juiz	83	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
884	App\\Data\\Models\\Juiz	84	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
885	App\\Data\\Models\\Juiz	85	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
886	App\\Data\\Models\\Acao	18	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
887	App\\Data\\Models\\Juiz	86	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
888	App\\Data\\Models\\Juiz	87	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
889	App\\Data\\Models\\Juiz	88	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
890	App\\Data\\Models\\Juiz	89	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
891	App\\Data\\Models\\Juiz	90	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
892	App\\Data\\Models\\Juiz	91	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
893	App\\Data\\Models\\Juiz	92	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
894	App\\Data\\Models\\Juiz	93	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
895	App\\Data\\Models\\Juiz	94	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
896	App\\Data\\Models\\Juiz	95	\N	created_at	\N	2018-03-01 11:12:58	2018-03-01 11:12:58	2018-03-01 11:12:58
897	App\\Data\\Models\\Juiz	96	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
898	App\\Data\\Models\\Juiz	97	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
899	App\\Data\\Models\\Acao	19	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
900	App\\Data\\Models\\Juiz	98	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
901	App\\Data\\Models\\Juiz	99	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
902	App\\Data\\Models\\Juiz	100	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
903	App\\Data\\Models\\Juiz	101	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
904	App\\Data\\Models\\Juiz	102	\N	created_at	\N	2018-03-01 11:12:59	2018-03-01 11:12:59	2018-03-01 11:12:59
905	App\\Data\\Models\\Juiz	103	\N	created_at	\N	2018-03-01 11:13:00	2018-03-01 11:13:00	2018-03-01 11:13:00
906	App\\Data\\Models\\Juiz	104	\N	created_at	\N	2018-03-01 11:13:00	2018-03-01 11:13:00	2018-03-01 11:13:00
907	App\\Data\\Models\\Acao	20	\N	created_at	\N	2018-03-01 11:13:00	2018-03-01 11:13:00	2018-03-01 11:13:00
908	App\\Data\\Models\\Juiz	105	\N	created_at	\N	2018-03-01 11:13:00	2018-03-01 11:13:00	2018-03-01 11:13:00
909	App\\Data\\Models\\Juiz	106	\N	created_at	\N	2018-03-01 11:13:00	2018-03-01 11:13:00	2018-03-01 11:13:00
910	App\\Data\\Models\\Juiz	107	\N	created_at	\N	2018-03-01 11:13:00	2018-03-01 11:13:00	2018-03-01 11:13:00
911	App\\Data\\Models\\Juiz	108	\N	created_at	\N	2018-03-01 11:13:00	2018-03-01 11:13:00	2018-03-01 11:13:00
912	App\\Data\\Models\\Juiz	109	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
913	App\\Data\\Models\\Acao	21	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
914	App\\Data\\Models\\Juiz	110	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
915	App\\Data\\Models\\Juiz	111	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
916	App\\Data\\Models\\Juiz	112	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
917	App\\Data\\Models\\Juiz	113	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
918	App\\Data\\Models\\Juiz	114	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
919	App\\Data\\Models\\Juiz	115	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
920	App\\Data\\Models\\Juiz	116	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
921	App\\Data\\Models\\Juiz	117	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
922	App\\Data\\Models\\Juiz	118	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
923	App\\Data\\Models\\Juiz	119	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
924	App\\Data\\Models\\Juiz	120	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
925	App\\Data\\Models\\Juiz	121	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
926	App\\Data\\Models\\Juiz	122	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
927	App\\Data\\Models\\Acao	22	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
928	App\\Data\\Models\\Juiz	123	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
929	App\\Data\\Models\\Acao	23	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
930	App\\Data\\Models\\Acao	24	\N	created_at	\N	2018-03-01 11:13:01	2018-03-01 11:13:01	2018-03-01 11:13:01
931	App\\Data\\Models\\Juiz	124	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
932	App\\Data\\Models\\Acao	25	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
933	App\\Data\\Models\\Juiz	125	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
934	App\\Data\\Models\\Juiz	126	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
935	App\\Data\\Models\\Acao	26	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
936	App\\Data\\Models\\Juiz	127	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
937	App\\Data\\Models\\Juiz	128	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
938	App\\Data\\Models\\Juiz	129	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
939	App\\Data\\Models\\Juiz	130	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
940	App\\Data\\Models\\Juiz	131	\N	created_at	\N	2018-03-01 11:13:02	2018-03-01 11:13:02	2018-03-01 11:13:02
941	App\\Data\\Models\\Tribunal	6	\N	created_at	\N	2018-03-01 11:13:03	2018-03-01 11:13:03	2018-03-01 11:13:03
942	App\\Data\\Models\\Acao	27	\N	created_at	\N	2018-03-01 11:13:03	2018-03-01 11:13:03	2018-03-01 11:13:03
943	App\\Data\\Models\\Juiz	132	\N	created_at	\N	2018-03-01 11:13:03	2018-03-01 11:13:03	2018-03-01 11:13:03
944	App\\Data\\Models\\Juiz	133	\N	created_at	\N	2018-03-01 11:13:03	2018-03-01 11:13:03	2018-03-01 11:13:03
945	App\\Data\\Models\\Juiz	134	\N	created_at	\N	2018-03-01 11:13:04	2018-03-01 11:13:04	2018-03-01 11:13:04
946	App\\Data\\Models\\Juiz	135	\N	created_at	\N	2018-03-01 11:13:04	2018-03-01 11:13:04	2018-03-01 11:13:04
947	App\\Data\\Models\\Juiz	136	\N	created_at	\N	2018-03-01 11:13:05	2018-03-01 11:13:05	2018-03-01 11:13:05
948	App\\Data\\Models\\Juiz	137	\N	created_at	\N	2018-03-01 11:13:05	2018-03-01 11:13:05	2018-03-01 11:13:05
949	App\\Data\\Models\\User	1	1	remember_token	\N	2QPxTh7PdhtteahhbghQRzoFAID49YpnmeCbXUzJb5lYZ5avRup7PNPErHvz	2018-03-01 11:13:19	2018-03-01 11:13:19
950	App\\Data\\Models\\User	28	28	remember_token	\N	MygoqmYcaAbJHM0NphOoZrmskOv0vI0QeQI7LXzRZBAkmsFm6Qh4YWmmRQGD	2018-03-01 11:19:10	2018-03-01 11:19:10
951	App\\Data\\Models\\User	10	10	remember_token	\N	sOYUGgbBipvusoanyw47Gmw7gaqVtLig8CiMvwD1Q8GW2dfFngJpGG7K43aH	2018-03-01 11:43:42	2018-03-01 11:43:42
952	App\\Data\\Models\\User	11	11	remember_token	\N	z5oAdiOrE8UWCKy1X9V7VQ9IHUSGezBlEM3TeUtfwekmiRtPVAz7WjdfXlR2	2018-03-01 11:57:08	2018-03-01 11:57:08
953	App\\Data\\Models\\User	16	16	remember_token	\N	rkTWckqlOlapuADm90yNdsIUYXnV9qd185PdxEMnngGQrPOkcMYnJMczglN3	2018-03-01 13:04:59	2018-03-01 13:04:59
954	App\\Data\\Models\\User	11	11	remember_token	z5oAdiOrE8UWCKy1X9V7VQ9IHUSGezBlEM3TeUtfwekmiRtPVAz7WjdfXlR2	yiUVh0U2fMSnbFMZAcFVSVK7sNzt36efThTE02gTicD46zzCnAmlg9ldoPBR	2018-03-01 13:06:11	2018-03-01 13:06:11
955	App\\Data\\Models\\Processo	430	10	observacao	Estagiário: RETIRAR, 	Estagiário: RETIRAR,	2018-03-01 14:10:57	2018-03-01 14:10:57
956	App\\Data\\Models\\User	10	10	remember_token	sOYUGgbBipvusoanyw47Gmw7gaqVtLig8CiMvwD1Q8GW2dfFngJpGG7K43aH	dNrcN3AHlKjdzXc2UXgxFqHbF41YPLuMmPiKzXBe4Djrwb5vDjji1PhMrXcZ	2018-03-01 14:25:54	2018-03-01 14:25:54
957	App\\Data\\Models\\User	14	14	remember_token	\N	cU5UrSQjR0e4kg3gM2x7LKjNppuqGA359bFN14QF68QJcA5qMSO1jwYaCyDq	2018-03-01 14:33:59	2018-03-01 14:33:59
958	App\\Data\\Models\\User	14	14	remember_token	cU5UrSQjR0e4kg3gM2x7LKjNppuqGA359bFN14QF68QJcA5qMSO1jwYaCyDq	VTAqV5wrX1pijSUSouleMHhhPxHCq7ANvqtOfW9zofoLdOhZl82PIrf9FHyS	2018-03-01 15:07:02	2018-03-01 15:07:02
959	App\\Data\\Models\\User	14	14	remember_token	VTAqV5wrX1pijSUSouleMHhhPxHCq7ANvqtOfW9zofoLdOhZl82PIrf9FHyS	efIDSwYtDPm6tVEUKrY5LyQEDgND3mY72xbcWYTl48GH4GRmFfhz2Q1Pn7lg	2018-03-01 16:08:04	2018-03-01 16:08:04
960	App\\Data\\Models\\User	14	14	remember_token	efIDSwYtDPm6tVEUKrY5LyQEDgND3mY72xbcWYTl48GH4GRmFfhz2Q1Pn7lg	E7vTtw8WnyWtF9bt9PLQzFOoSJQ5pINLPacaJWWG0x1iSHLQrfWA0QHVduKu	2018-03-01 16:08:18	2018-03-01 16:08:18
961	App\\Data\\Models\\Tribunal	1	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
962	App\\Data\\Models\\Acao	1	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
963	App\\Data\\Models\\Juiz	1	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
964	App\\Data\\Models\\Acao	2	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
965	App\\Data\\Models\\Juiz	2	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
966	App\\Data\\Models\\Acao	3	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
967	App\\Data\\Models\\Juiz	3	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
968	App\\Data\\Models\\Juiz	4	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
969	App\\Data\\Models\\Acao	4	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
970	App\\Data\\Models\\Juiz	5	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
971	App\\Data\\Models\\Juiz	6	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
972	App\\Data\\Models\\Acao	5	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
973	App\\Data\\Models\\Juiz	7	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
974	App\\Data\\Models\\Juiz	8	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
975	App\\Data\\Models\\Juiz	9	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
976	App\\Data\\Models\\Juiz	10	\N	created_at	\N	2018-03-01 17:21:18	2018-03-01 17:21:18	2018-03-01 17:21:18
977	App\\Data\\Models\\Juiz	11	\N	created_at	\N	2018-03-01 17:21:19	2018-03-01 17:21:19	2018-03-01 17:21:19
978	App\\Data\\Models\\Juiz	12	\N	created_at	\N	2018-03-01 17:21:19	2018-03-01 17:21:19	2018-03-01 17:21:19
979	App\\Data\\Models\\Juiz	13	\N	created_at	\N	2018-03-01 17:21:19	2018-03-01 17:21:19	2018-03-01 17:21:19
980	App\\Data\\Models\\Acao	6	\N	created_at	\N	2018-03-01 17:21:20	2018-03-01 17:21:20	2018-03-01 17:21:20
981	App\\Data\\Models\\Juiz	14	\N	created_at	\N	2018-03-01 17:21:20	2018-03-01 17:21:20	2018-03-01 17:21:20
982	App\\Data\\Models\\Juiz	15	\N	created_at	\N	2018-03-01 17:21:20	2018-03-01 17:21:20	2018-03-01 17:21:20
983	App\\Data\\Models\\Tribunal	2	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
984	App\\Data\\Models\\Acao	7	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
985	App\\Data\\Models\\Juiz	16	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
986	App\\Data\\Models\\Juiz	17	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
987	App\\Data\\Models\\Acao	8	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
988	App\\Data\\Models\\Juiz	18	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
989	App\\Data\\Models\\Tribunal	3	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
990	App\\Data\\Models\\Acao	9	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
991	App\\Data\\Models\\Juiz	19	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
992	App\\Data\\Models\\Acao	10	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
993	App\\Data\\Models\\Juiz	20	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
994	App\\Data\\Models\\Juiz	21	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
995	App\\Data\\Models\\Juiz	22	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
996	App\\Data\\Models\\Tribunal	4	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
997	App\\Data\\Models\\Acao	11	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
998	App\\Data\\Models\\Juiz	23	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
999	App\\Data\\Models\\Acao	12	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1000	App\\Data\\Models\\Juiz	24	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1001	App\\Data\\Models\\Juiz	25	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1002	App\\Data\\Models\\Juiz	26	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1003	App\\Data\\Models\\Acao	13	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1004	App\\Data\\Models\\Juiz	27	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1005	App\\Data\\Models\\Juiz	28	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1006	App\\Data\\Models\\Juiz	29	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1007	App\\Data\\Models\\Juiz	30	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1008	App\\Data\\Models\\Juiz	31	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1009	App\\Data\\Models\\Juiz	32	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1010	App\\Data\\Models\\Juiz	33	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1011	App\\Data\\Models\\Juiz	34	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1012	App\\Data\\Models\\Juiz	35	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1013	App\\Data\\Models\\Juiz	36	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1014	App\\Data\\Models\\Juiz	37	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1015	App\\Data\\Models\\Acao	14	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1016	App\\Data\\Models\\Juiz	38	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1017	App\\Data\\Models\\Juiz	39	\N	created_at	\N	2018-03-01 17:21:21	2018-03-01 17:21:21	2018-03-01 17:21:21
1018	App\\Data\\Models\\Tribunal	5	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1019	App\\Data\\Models\\Acao	15	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1020	App\\Data\\Models\\Juiz	40	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1021	App\\Data\\Models\\Juiz	41	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1022	App\\Data\\Models\\Juiz	42	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1023	App\\Data\\Models\\Juiz	43	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1024	App\\Data\\Models\\Juiz	44	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1025	App\\Data\\Models\\Juiz	45	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1026	App\\Data\\Models\\Juiz	46	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1027	App\\Data\\Models\\Juiz	47	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1028	App\\Data\\Models\\Juiz	48	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1029	App\\Data\\Models\\Juiz	49	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1030	App\\Data\\Models\\Juiz	50	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1031	App\\Data\\Models\\Juiz	51	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1032	App\\Data\\Models\\Juiz	52	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1033	App\\Data\\Models\\Juiz	53	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1034	App\\Data\\Models\\Juiz	54	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1035	App\\Data\\Models\\Juiz	55	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1036	App\\Data\\Models\\Juiz	56	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1037	App\\Data\\Models\\Juiz	57	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1038	App\\Data\\Models\\Juiz	58	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1039	App\\Data\\Models\\Juiz	59	\N	created_at	\N	2018-03-01 17:21:22	2018-03-01 17:21:22	2018-03-01 17:21:22
1040	App\\Data\\Models\\Juiz	60	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1041	App\\Data\\Models\\Juiz	61	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1042	App\\Data\\Models\\Juiz	62	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1043	App\\Data\\Models\\Juiz	63	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1044	App\\Data\\Models\\Juiz	64	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1045	App\\Data\\Models\\Juiz	65	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1046	App\\Data\\Models\\Juiz	66	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1047	App\\Data\\Models\\Juiz	67	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1048	App\\Data\\Models\\Juiz	68	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1049	App\\Data\\Models\\Juiz	69	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1050	App\\Data\\Models\\Juiz	70	\N	created_at	\N	2018-03-01 17:21:23	2018-03-01 17:21:23	2018-03-01 17:21:23
1051	App\\Data\\Models\\Juiz	71	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1052	App\\Data\\Models\\Juiz	72	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1053	App\\Data\\Models\\Juiz	73	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1054	App\\Data\\Models\\Juiz	74	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1055	App\\Data\\Models\\Juiz	75	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1056	App\\Data\\Models\\Juiz	76	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1057	App\\Data\\Models\\Juiz	77	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1058	App\\Data\\Models\\Juiz	78	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1059	App\\Data\\Models\\Juiz	79	\N	created_at	\N	2018-03-01 17:21:24	2018-03-01 17:21:24	2018-03-01 17:21:24
1060	App\\Data\\Models\\Juiz	80	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1061	App\\Data\\Models\\Juiz	81	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1062	App\\Data\\Models\\Acao	16	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1063	App\\Data\\Models\\Juiz	82	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1064	App\\Data\\Models\\Juiz	83	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1065	App\\Data\\Models\\Juiz	84	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1066	App\\Data\\Models\\Juiz	85	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1067	App\\Data\\Models\\Juiz	86	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1068	App\\Data\\Models\\Juiz	87	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1069	App\\Data\\Models\\Juiz	88	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1070	App\\Data\\Models\\Juiz	89	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1071	App\\Data\\Models\\Juiz	90	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1072	App\\Data\\Models\\Juiz	91	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1073	App\\Data\\Models\\Juiz	92	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1074	App\\Data\\Models\\Juiz	93	\N	created_at	\N	2018-03-01 17:21:25	2018-03-01 17:21:25	2018-03-01 17:21:25
1075	App\\Data\\Models\\Juiz	94	\N	created_at	\N	2018-03-01 17:21:26	2018-03-01 17:21:26	2018-03-01 17:21:26
1076	App\\Data\\Models\\Juiz	95	\N	created_at	\N	2018-03-01 17:21:26	2018-03-01 17:21:26	2018-03-01 17:21:26
1077	App\\Data\\Models\\Juiz	96	\N	created_at	\N	2018-03-01 17:21:26	2018-03-01 17:21:26	2018-03-01 17:21:26
1078	App\\Data\\Models\\Juiz	97	\N	created_at	\N	2018-03-01 17:21:26	2018-03-01 17:21:26	2018-03-01 17:21:26
1079	App\\Data\\Models\\Juiz	98	\N	created_at	\N	2018-03-01 17:21:26	2018-03-01 17:21:26	2018-03-01 17:21:26
1080	App\\Data\\Models\\Juiz	99	\N	created_at	\N	2018-03-01 17:21:26	2018-03-01 17:21:26	2018-03-01 17:21:26
1081	App\\Data\\Models\\Juiz	100	\N	created_at	\N	2018-03-01 17:21:26	2018-03-01 17:21:26	2018-03-01 17:21:26
1082	App\\Data\\Models\\Acao	17	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1083	App\\Data\\Models\\Juiz	101	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1084	App\\Data\\Models\\Juiz	102	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1085	App\\Data\\Models\\Juiz	103	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1086	App\\Data\\Models\\Juiz	104	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1087	App\\Data\\Models\\Juiz	105	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1088	App\\Data\\Models\\Acao	18	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1089	App\\Data\\Models\\Juiz	106	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1090	App\\Data\\Models\\Juiz	107	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1091	App\\Data\\Models\\Juiz	108	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1092	App\\Data\\Models\\Juiz	109	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1093	App\\Data\\Models\\Juiz	110	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1094	App\\Data\\Models\\Juiz	111	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1095	App\\Data\\Models\\Juiz	112	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1096	App\\Data\\Models\\Juiz	113	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1097	App\\Data\\Models\\Juiz	114	\N	created_at	\N	2018-03-01 17:21:27	2018-03-01 17:21:27	2018-03-01 17:21:27
1098	App\\Data\\Models\\Juiz	115	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1099	App\\Data\\Models\\Juiz	116	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1100	App\\Data\\Models\\Juiz	117	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1101	App\\Data\\Models\\Acao	19	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1102	App\\Data\\Models\\Juiz	118	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1103	App\\Data\\Models\\Acao	20	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1104	App\\Data\\Models\\Acao	21	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1105	App\\Data\\Models\\Acao	22	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1106	App\\Data\\Models\\Juiz	119	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1107	App\\Data\\Models\\Acao	23	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1108	App\\Data\\Models\\Juiz	120	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1109	App\\Data\\Models\\Juiz	121	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1110	App\\Data\\Models\\Acao	24	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1111	App\\Data\\Models\\Juiz	122	\N	created_at	\N	2018-03-01 17:21:28	2018-03-01 17:21:28	2018-03-01 17:21:28
1112	App\\Data\\Models\\Juiz	123	\N	created_at	\N	2018-03-01 17:21:29	2018-03-01 17:21:29	2018-03-01 17:21:29
1113	App\\Data\\Models\\Juiz	124	\N	created_at	\N	2018-03-01 17:21:29	2018-03-01 17:21:29	2018-03-01 17:21:29
1114	App\\Data\\Models\\Juiz	125	\N	created_at	\N	2018-03-01 17:21:29	2018-03-01 17:21:29	2018-03-01 17:21:29
1115	App\\Data\\Models\\Juiz	126	\N	created_at	\N	2018-03-01 17:21:29	2018-03-01 17:21:29	2018-03-01 17:21:29
1116	App\\Data\\Models\\Tribunal	6	\N	created_at	\N	2018-03-01 17:21:29	2018-03-01 17:21:29	2018-03-01 17:21:29
1117	App\\Data\\Models\\Acao	25	\N	created_at	\N	2018-03-01 17:21:29	2018-03-01 17:21:29	2018-03-01 17:21:29
1118	App\\Data\\Models\\Juiz	127	\N	created_at	\N	2018-03-01 17:21:29	2018-03-01 17:21:30	2018-03-01 17:21:30
1119	App\\Data\\Models\\Juiz	128	\N	created_at	\N	2018-03-01 17:21:30	2018-03-01 17:21:30	2018-03-01 17:21:30
1120	App\\Data\\Models\\Juiz	129	\N	created_at	\N	2018-03-01 17:21:30	2018-03-01 17:21:30	2018-03-01 17:21:30
1121	App\\Data\\Models\\Juiz	130	\N	created_at	\N	2018-03-01 17:21:30	2018-03-01 17:21:30	2018-03-01 17:21:30
1122	App\\Data\\Models\\Juiz	131	\N	created_at	\N	2018-03-01 17:21:31	2018-03-01 17:21:31	2018-03-01 17:21:31
1123	App\\Data\\Models\\Juiz	132	\N	created_at	\N	2018-03-01 17:21:31	2018-03-01 17:21:31	2018-03-01 17:21:31
1124	App\\Data\\Models\\User	28	28	remember_token	\N	epf5vpQMIaOeXEufC3G96dL7d5YiJwONHrwmOn8W9sObBbuLpAt1jUXJ2m2J	2018-03-01 17:22:46	2018-03-01 17:22:46
1125	App\\Data\\Models\\Tribunal	1	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1126	App\\Data\\Models\\Acao	1	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1127	App\\Data\\Models\\Juiz	1	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1128	App\\Data\\Models\\Acao	2	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1129	App\\Data\\Models\\Juiz	2	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1130	App\\Data\\Models\\Acao	3	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1131	App\\Data\\Models\\Juiz	3	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1132	App\\Data\\Models\\Juiz	4	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1133	App\\Data\\Models\\Acao	4	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1134	App\\Data\\Models\\Juiz	5	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1135	App\\Data\\Models\\Juiz	6	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1136	App\\Data\\Models\\Acao	5	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1137	App\\Data\\Models\\Juiz	7	\N	created_at	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	2018-03-01 17:56:38
1138	App\\Data\\Models\\Juiz	8	\N	created_at	\N	2018-03-01 17:56:39	2018-03-01 17:56:39	2018-03-01 17:56:39
1139	App\\Data\\Models\\Juiz	9	\N	created_at	\N	2018-03-01 17:56:39	2018-03-01 17:56:39	2018-03-01 17:56:39
1140	App\\Data\\Models\\Juiz	10	\N	created_at	\N	2018-03-01 17:56:39	2018-03-01 17:56:39	2018-03-01 17:56:39
1141	App\\Data\\Models\\Juiz	11	\N	created_at	\N	2018-03-01 17:56:39	2018-03-01 17:56:39	2018-03-01 17:56:39
1142	App\\Data\\Models\\Juiz	12	\N	created_at	\N	2018-03-01 17:56:39	2018-03-01 17:56:39	2018-03-01 17:56:39
1143	App\\Data\\Models\\Juiz	13	\N	created_at	\N	2018-03-01 17:56:39	2018-03-01 17:56:39	2018-03-01 17:56:39
1144	App\\Data\\Models\\Acao	6	\N	created_at	\N	2018-03-01 17:56:40	2018-03-01 17:56:40	2018-03-01 17:56:40
1145	App\\Data\\Models\\Juiz	14	\N	created_at	\N	2018-03-01 17:56:40	2018-03-01 17:56:40	2018-03-01 17:56:40
1146	App\\Data\\Models\\Juiz	15	\N	created_at	\N	2018-03-01 17:56:40	2018-03-01 17:56:40	2018-03-01 17:56:40
1147	App\\Data\\Models\\Tribunal	2	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1148	App\\Data\\Models\\Acao	7	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1149	App\\Data\\Models\\Juiz	16	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1150	App\\Data\\Models\\Juiz	17	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1151	App\\Data\\Models\\Acao	8	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1152	App\\Data\\Models\\Juiz	18	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1153	App\\Data\\Models\\Tribunal	3	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1154	App\\Data\\Models\\Acao	9	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1155	App\\Data\\Models\\Juiz	19	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1156	App\\Data\\Models\\Acao	10	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1157	App\\Data\\Models\\Juiz	20	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1158	App\\Data\\Models\\Juiz	21	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1159	App\\Data\\Models\\Juiz	22	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1160	App\\Data\\Models\\Tribunal	4	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1161	App\\Data\\Models\\Acao	11	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1162	App\\Data\\Models\\Juiz	23	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1163	App\\Data\\Models\\Acao	12	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1164	App\\Data\\Models\\Juiz	24	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1165	App\\Data\\Models\\Juiz	25	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1166	App\\Data\\Models\\Juiz	26	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1167	App\\Data\\Models\\Acao	13	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1168	App\\Data\\Models\\Juiz	27	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1169	App\\Data\\Models\\Juiz	28	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1170	App\\Data\\Models\\Juiz	29	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1171	App\\Data\\Models\\Juiz	30	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1172	App\\Data\\Models\\Juiz	31	\N	created_at	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	2018-03-01 17:56:41
1173	App\\Data\\Models\\Juiz	32	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1174	App\\Data\\Models\\Juiz	33	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1175	App\\Data\\Models\\Juiz	34	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1176	App\\Data\\Models\\Juiz	35	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1177	App\\Data\\Models\\Juiz	36	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1178	App\\Data\\Models\\Juiz	37	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1179	App\\Data\\Models\\Acao	14	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1180	App\\Data\\Models\\Juiz	38	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1181	App\\Data\\Models\\Juiz	39	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1182	App\\Data\\Models\\Tribunal	5	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1183	App\\Data\\Models\\Acao	15	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1184	App\\Data\\Models\\Juiz	40	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1185	App\\Data\\Models\\Juiz	41	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1186	App\\Data\\Models\\Juiz	42	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1187	App\\Data\\Models\\Juiz	43	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1188	App\\Data\\Models\\Juiz	44	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1189	App\\Data\\Models\\Juiz	45	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1190	App\\Data\\Models\\Juiz	46	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1191	App\\Data\\Models\\Juiz	47	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1192	App\\Data\\Models\\Juiz	48	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1193	App\\Data\\Models\\Juiz	49	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1194	App\\Data\\Models\\Juiz	50	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1195	App\\Data\\Models\\Juiz	51	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1196	App\\Data\\Models\\Juiz	52	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1197	App\\Data\\Models\\Juiz	53	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1198	App\\Data\\Models\\Juiz	54	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1199	App\\Data\\Models\\Juiz	55	\N	created_at	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	2018-03-01 17:56:42
1200	App\\Data\\Models\\Juiz	56	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1201	App\\Data\\Models\\Juiz	57	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1202	App\\Data\\Models\\Juiz	58	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1203	App\\Data\\Models\\Juiz	59	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1204	App\\Data\\Models\\Juiz	60	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1205	App\\Data\\Models\\Juiz	61	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1206	App\\Data\\Models\\Juiz	62	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1207	App\\Data\\Models\\Juiz	63	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1208	App\\Data\\Models\\Juiz	64	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1209	App\\Data\\Models\\Juiz	65	\N	created_at	\N	2018-03-01 17:56:43	2018-03-01 17:56:43	2018-03-01 17:56:43
1210	App\\Data\\Models\\Juiz	66	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1211	App\\Data\\Models\\Juiz	67	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1212	App\\Data\\Models\\Juiz	68	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1213	App\\Data\\Models\\Juiz	69	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1214	App\\Data\\Models\\Juiz	70	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1215	App\\Data\\Models\\Juiz	71	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1216	App\\Data\\Models\\Juiz	72	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1217	App\\Data\\Models\\Juiz	73	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1218	App\\Data\\Models\\Juiz	74	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1219	App\\Data\\Models\\Juiz	75	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1220	App\\Data\\Models\\Juiz	76	\N	created_at	\N	2018-03-01 17:56:44	2018-03-01 17:56:44	2018-03-01 17:56:44
1221	App\\Data\\Models\\Juiz	77	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1222	App\\Data\\Models\\Juiz	78	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1223	App\\Data\\Models\\Juiz	79	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1224	App\\Data\\Models\\Juiz	80	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1225	App\\Data\\Models\\Acao	16	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1226	App\\Data\\Models\\Juiz	81	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1227	App\\Data\\Models\\Juiz	82	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1228	App\\Data\\Models\\Juiz	83	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1229	App\\Data\\Models\\Juiz	84	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1230	App\\Data\\Models\\Juiz	85	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1231	App\\Data\\Models\\Juiz	86	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1232	App\\Data\\Models\\Juiz	87	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1233	App\\Data\\Models\\Juiz	88	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1234	App\\Data\\Models\\Juiz	89	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1235	App\\Data\\Models\\Juiz	90	\N	created_at	\N	2018-03-01 17:56:45	2018-03-01 17:56:45	2018-03-01 17:56:45
1236	App\\Data\\Models\\Juiz	91	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1237	App\\Data\\Models\\Juiz	92	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1238	App\\Data\\Models\\Juiz	93	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1239	App\\Data\\Models\\Juiz	94	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1240	App\\Data\\Models\\Juiz	95	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1241	App\\Data\\Models\\Juiz	96	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1242	App\\Data\\Models\\Juiz	97	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1243	App\\Data\\Models\\Juiz	98	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1244	App\\Data\\Models\\Juiz	99	\N	created_at	\N	2018-03-01 17:56:46	2018-03-01 17:56:46	2018-03-01 17:56:46
1245	App\\Data\\Models\\Acao	17	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1246	App\\Data\\Models\\Juiz	100	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1247	App\\Data\\Models\\Juiz	101	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1248	App\\Data\\Models\\Juiz	102	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1249	App\\Data\\Models\\Juiz	103	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1250	App\\Data\\Models\\Juiz	104	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1251	App\\Data\\Models\\Acao	18	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1252	App\\Data\\Models\\Juiz	105	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1253	App\\Data\\Models\\Juiz	106	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1254	App\\Data\\Models\\Juiz	107	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1255	App\\Data\\Models\\Juiz	108	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1256	App\\Data\\Models\\Juiz	109	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1257	App\\Data\\Models\\Juiz	110	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1258	App\\Data\\Models\\Juiz	111	\N	created_at	\N	2018-03-01 17:56:47	2018-03-01 17:56:47	2018-03-01 17:56:47
1259	App\\Data\\Models\\Juiz	112	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1260	App\\Data\\Models\\Juiz	113	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1261	App\\Data\\Models\\Juiz	114	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1262	App\\Data\\Models\\Juiz	115	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1263	App\\Data\\Models\\Juiz	116	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1264	App\\Data\\Models\\Acao	19	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1265	App\\Data\\Models\\Juiz	117	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1266	App\\Data\\Models\\Acao	20	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1267	App\\Data\\Models\\Acao	21	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1268	App\\Data\\Models\\Acao	22	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1269	App\\Data\\Models\\Juiz	118	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1270	App\\Data\\Models\\Acao	23	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1271	App\\Data\\Models\\Juiz	119	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1272	App\\Data\\Models\\Juiz	120	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1273	App\\Data\\Models\\Acao	24	\N	created_at	\N	2018-03-01 17:56:48	2018-03-01 17:56:48	2018-03-01 17:56:48
1274	App\\Data\\Models\\Juiz	121	\N	created_at	\N	2018-03-01 17:56:49	2018-03-01 17:56:49	2018-03-01 17:56:49
1275	App\\Data\\Models\\Juiz	122	\N	created_at	\N	2018-03-01 17:56:49	2018-03-01 17:56:49	2018-03-01 17:56:49
1276	App\\Data\\Models\\Juiz	123	\N	created_at	\N	2018-03-01 17:56:49	2018-03-01 17:56:49	2018-03-01 17:56:49
1277	App\\Data\\Models\\Juiz	124	\N	created_at	\N	2018-03-01 17:56:49	2018-03-01 17:56:49	2018-03-01 17:56:49
1278	App\\Data\\Models\\Juiz	125	\N	created_at	\N	2018-03-01 17:56:49	2018-03-01 17:56:49	2018-03-01 17:56:49
1279	App\\Data\\Models\\Tribunal	6	\N	created_at	\N	2018-03-01 17:56:50	2018-03-01 17:56:50	2018-03-01 17:56:50
1280	App\\Data\\Models\\Acao	25	\N	created_at	\N	2018-03-01 17:56:50	2018-03-01 17:56:50	2018-03-01 17:56:50
1281	App\\Data\\Models\\Juiz	126	\N	created_at	\N	2018-03-01 17:56:50	2018-03-01 17:56:50	2018-03-01 17:56:50
1282	App\\Data\\Models\\Juiz	127	\N	created_at	\N	2018-03-01 17:56:50	2018-03-01 17:56:50	2018-03-01 17:56:50
1283	App\\Data\\Models\\Juiz	128	\N	created_at	\N	2018-03-01 17:56:50	2018-03-01 17:56:50	2018-03-01 17:56:50
1284	App\\Data\\Models\\Juiz	129	\N	created_at	\N	2018-03-01 17:56:51	2018-03-01 17:56:51	2018-03-01 17:56:51
1285	App\\Data\\Models\\Juiz	130	\N	created_at	\N	2018-03-01 17:56:51	2018-03-01 17:56:51	2018-03-01 17:56:51
1286	App\\Data\\Models\\Juiz	131	\N	created_at	\N	2018-03-01 17:56:51	2018-03-01 17:56:51	2018-03-01 17:56:51
1287	App\\Data\\Models\\User	29	29	remember_token	\N	XScyA6H98KNRAUPRBzDsoNXJ5ywGZ0lRaJ5a3jbGLlmUTEwQnYsavtp6SSiA	2018-03-01 17:58:06	2018-03-01 17:58:06
1288	App\\Data\\Models\\User	27	10	disabled_by_id	\N	10	2018-03-01 18:04:04	2018-03-01 18:04:04
1289	App\\Data\\Models\\User	27	10	disabled_at	\N	2018-03-01 18:04:04	2018-03-01 18:04:04	2018-03-01 18:04:04
1290	App\\Data\\Models\\User	27	10	disabled_by_id	10	\N	2018-03-01 18:04:09	2018-03-01 18:04:09
1291	App\\Data\\Models\\User	27	10	disabled_at	2018-03-01 18:04:04	\N	2018-03-01 18:04:09	2018-03-01 18:04:09
1292	App\\Data\\Models\\User	30	30	remember_token	\N	zAmnNMnKTaorvSqDxisUATrbxBCJX4vvByLpsVSd2zX7qWv6gaBn1ce9tfRH	2018-03-01 18:06:50	2018-03-01 18:06:50
1293	App\\Data\\Models\\User	11	11	remember_token	\N	CdSvOslfPzELzyNcXWZBfZUbaFNXddAlHaq4Yj89eVd1T3FvJVGVsSGNc2bz	2018-03-02 10:38:23	2018-03-02 10:38:23
1294	App\\Data\\Models\\Processo	375	11	numero_judicial	9904920138190060	0000990-49.2013.8.19.0060	2018-03-02 10:43:04	2018-03-02 10:43:04
1295	App\\Data\\Models\\Processo	375	11	link	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2013.060.001012-9	2018-03-02 10:43:04	2018-03-02 10:43:04
1296	App\\Data\\Models\\Processo	363	11	link	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=4659811	2018-03-02 10:47:43	2018-03-02 10:47:43
1297	App\\Data\\Models\\Processo	373	11	numero_judicial	962658120088190000	0096265-81.2008.8.19.0001	2018-03-02 12:56:37	2018-03-02 12:56:37
1298	App\\Data\\Models\\Processo	373	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-02 12:56:37	2018-03-02 12:56:37
1299	App\\Data\\Models\\Processo	377	11	created_at	\N	2018-03-02 13:16:50	2018-03-02 13:16:50	2018-03-02 13:16:50
1300	App\\Data\\Models\\Processo	377	11	vara	\N	ÓRGÃO ESPECIAL	2018-03-02 13:18:03	2018-03-02 13:18:03
1301	App\\Data\\Models\\Processo	85	11	assessor_id	\N	23	2018-03-05 09:57:11	2018-03-05 09:57:11
1302	App\\Data\\Models\\Processo	85	11	observacao	Estagiário: Luan Moreira, 	\N	2018-03-05 09:57:11	2018-03-05 09:57:11
1303	App\\Data\\Models\\Processo	141	11	assessor_id	\N	23	2018-03-05 09:59:07	2018-03-05 09:59:07
1304	App\\Data\\Models\\Processo	141	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-05 09:59:07	2018-03-05 09:59:07
1305	App\\Data\\Models\\Processo	3	11	link	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5315426	2018-03-05 10:03:25	2018-03-05 10:03:25
1306	App\\Data\\Models\\Processo	168	11	assessor_id	\N	23	2018-03-05 10:04:45	2018-03-05 10:04:45
1307	App\\Data\\Models\\Processo	168	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-05 10:04:45	2018-03-05 10:04:45
1308	App\\Data\\Models\\Processo	208	11	assessor_id	\N	23	2018-03-05 10:05:30	2018-03-05 10:05:30
1309	App\\Data\\Models\\Processo	208	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-05 10:05:30	2018-03-05 10:05:30
1370	App\\Data\\Models\\Processo	379	10	recurso	Não.	Sem recurso.	2018-03-20 17:18:33	2018-03-20 17:18:33
1310	App\\Data\\Models\\Processo	276	11	link	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.168696-6	2018-03-05 10:08:04	2018-03-05 10:08:04
1311	App\\Data\\Models\\Processo	216	11	numero_alerj	13104/17	13104/2017	2018-03-05 10:19:56	2018-03-05 10:19:56
1312	App\\Data\\Models\\Processo	216	11	assessor_id	\N	24	2018-03-05 10:19:56	2018-03-05 10:19:56
1313	App\\Data\\Models\\Processo	216	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-03-05 10:19:56	2018-03-05 10:19:56
1314	App\\Data\\Models\\Processo	216	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700209	2018-03-05 10:20:22	2018-03-05 10:20:22
1315	App\\Data\\Models\\Processo	354	11	numero_judicial	48796-03.2012.8.19.0000	0048796-03.2012.8.19.0000	2018-03-05 10:25:57	2018-03-05 10:25:57
1316	App\\Data\\Models\\Processo	234	11	assessor_id	\N	23	2018-03-06 10:17:45	2018-03-06 10:17:45
1317	App\\Data\\Models\\Processo	234	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-06 10:17:45	2018-03-06 10:17:45
1318	App\\Data\\Models\\Processo	121	11	assessor_id	\N	24	2018-03-06 10:22:36	2018-03-06 10:22:36
1319	App\\Data\\Models\\Processo	121	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-03-06 10:22:36	2018-03-06 10:22:36
1320	App\\Data\\Models\\Processo	120	11	assessor_id	\N	23	2018-03-06 10:26:19	2018-03-06 10:26:19
1321	App\\Data\\Models\\Processo	120	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-06 10:26:19	2018-03-06 10:26:19
1322	App\\Data\\Models\\Processo	120	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700034	2018-03-06 10:29:13	2018-03-06 10:29:13
1323	App\\Data\\Models\\Processo	359	11	data_arquivamento	\N	2018-02-21	2018-03-06 11:11:36	2018-03-06 11:11:36
1324	App\\Data\\Models\\Processo	359	11	observacao_arquivamento	\N	Trânsito em Julgado em 15/02/2018.	2018-03-06 11:11:36	2018-03-06 11:11:36
1325	App\\Data\\Models\\Processo	263	11	assessor_id	\N	23	2018-03-07 10:20:35	2018-03-07 10:20:35
1326	App\\Data\\Models\\Processo	263	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-07 10:20:35	2018-03-07 10:20:35
1327	App\\Data\\Models\\Processo	204	11	assessor_id	\N	24	2018-03-07 10:54:09	2018-03-07 10:54:09
1328	App\\Data\\Models\\Processo	204	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-03-07 10:54:09	2018-03-07 10:54:09
1329	App\\Data\\Models\\Processo	204	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700402459	2018-03-07 10:57:00	2018-03-07 10:57:00
1330	App\\Data\\Models\\Processo	377	11	estagiario_id	\N	11	2018-03-09 10:41:47	2018-03-09 10:41:47
1331	App\\Data\\Models\\Processo	377	11	procurador_id	\N	4	2018-03-09 10:44:24	2018-03-09 10:44:24
1332	App\\Data\\Models\\Processo	377	11	estagiario_id	11	14	2018-03-09 10:49:00	2018-03-09 10:49:00
1333	App\\Data\\Models\\Processo	232	11	assessor_id	\N	23	2018-03-09 10:56:17	2018-03-09 10:56:17
1334	App\\Data\\Models\\Processo	232	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-09 10:56:17	2018-03-09 10:56:17
1335	App\\Data\\Models\\Processo	20	11	assessor_id	\N	23	2018-03-09 11:06:56	2018-03-09 11:06:56
1336	App\\Data\\Models\\Processo	20	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-09 11:06:56	2018-03-09 11:06:56
1337	App\\Data\\Models\\User	33	33	remember_token	\N	jxZ4ClFdQWorEYaG0pmfkcPN7jpMpExHNcLKy8DMMgY4NozbnCPVHsuIJC4R	2018-03-10 14:14:01	2018-03-10 14:14:01
1338	App\\Data\\Models\\User	28	28	remember_token	\N	nTVOyUfU6wxnsEiuc3bQtmC6KUyhtJQxt2LCh3x7t9mwF3K8twHkMPp9N5Nf	2018-03-12 13:48:25	2018-03-12 13:48:25
1339	App\\Data\\Models\\User	14	14	remember_token	\N	0dh7CPuHqjiw1dtr5G21BrZ0oDHkNZMfttaytOchJBWC7H40TJHd2Q7UKp3f	2018-03-13 14:10:34	2018-03-13 14:10:34
1340	App\\Data\\Models\\Processo	113	10	estagiario_id	14	\N	2018-03-13 14:44:00	2018-03-13 14:44:00
1341	App\\Data\\Models\\Processo	113	10	assessor_id	\N	24	2018-03-13 14:44:00	2018-03-13 14:44:00
1342	App\\Data\\Models\\Processo	268	10	observacao_arquivamento	\N	ARQUIVADO	2018-03-13 14:54:48	2018-03-13 14:54:48
1343	App\\Data\\Models\\Processo	264	10	observacao_arquivamento	\N	ARQUIVADO	2018-03-13 14:56:03	2018-03-13 14:56:03
1344	App\\Data\\Models\\Processo	100	10	observacao_arquivamento	\N	ARQUIVADO	2018-03-13 14:57:10	2018-03-13 14:57:10
1345	App\\Data\\Models\\Processo	174	11	assessor_id	\N	23	2018-03-14 10:35:35	2018-03-14 10:35:35
1346	App\\Data\\Models\\Processo	174	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-14 10:35:35	2018-03-14 10:35:35
1347	App\\Data\\Models\\User	10	10	remember_token	\N	me15Ceeg7KERntSf2kZp9dDtNfCPf7JY9NopWHlMJw8Krl4PtB21rVTBjqTg	2018-03-15 14:30:01	2018-03-15 14:30:01
1348	App\\Data\\Models\\User	8	8	remember_token	\N	EvEHN3NvIKXq6Iyp02z09DuHAdJYXg9cBeFasIWt4EeNH5z4K3gV1PBZCZHh	2018-03-15 14:30:24	2018-03-15 14:30:24
1349	App\\Data\\Models\\Processo	286	11	observacao	N/C	Agravo de Instrumento 0005444-82.2018.8.19.0000	2018-03-19 11:02:06	2018-03-19 11:02:06
1350	App\\Data\\Models\\Processo	110	25	procurador_id	\N	7	2018-03-19 11:57:56	2018-03-19 11:57:56
1351	App\\Data\\Models\\Processo	120	25	numero_alerj	Não recebemos ofício	2857/2017	2018-03-20 09:57:55	2018-03-20 09:57:55
1352	App\\Data\\Models\\Processo	120	25	procurador_id	\N	4	2018-03-20 09:57:55	2018-03-20 09:57:55
1353	App\\Data\\Models\\Processo	120	25	assessor_id	23	24	2018-03-20 09:57:55	2018-03-20 09:57:55
1354	App\\Data\\Models\\Processo	120	25	observacao	Estagiário: Luan Moreira,	\N	2018-03-20 09:57:55	2018-03-20 09:57:55
1355	App\\Data\\Models\\Processo	120	25	apensos_obs	Não	8235/2017  (00165394620178190000)	2018-03-20 10:05:22	2018-03-20 10:05:22
1356	App\\Data\\Models\\Processo	145	25	apensos_obs	N/C	2857/2018 (00069430420188190000)	2018-03-20 10:06:59	2018-03-20 10:06:59
1357	App\\Data\\Models\\Processo	145	25	estagiario_id	15	\N	2018-03-20 10:06:59	2018-03-20 10:06:59
1358	App\\Data\\Models\\Processo	145	25	assessor_id	\N	24	2018-03-20 10:06:59	2018-03-20 10:06:59
1359	App\\Data\\Models\\Processo	378	11	created_at	\N	2018-03-20 11:24:04	2018-03-20 11:24:04	2018-03-20 11:24:04
1360	App\\Data\\Models\\Processo	378	11	estagiario_id	11	13	2018-03-20 11:25:55	2018-03-20 11:25:55
1361	App\\Data\\Models\\User	8	8	remember_token	EvEHN3NvIKXq6Iyp02z09DuHAdJYXg9cBeFasIWt4EeNH5z4K3gV1PBZCZHh	aRBgg6KBVeEJuHR6WuNFM0mEAKbBGVmdN9ScFqMYxeyUq7Z30Ot7mmbZdDMD	2018-03-20 16:41:44	2018-03-20 16:41:44
1362	App\\Data\\Models\\Processo	379	10	created_at	\N	2018-03-20 17:04:02	2018-03-20 17:04:02	2018-03-20 17:04:02
1363	App\\Data\\Models\\Processo	380	10	created_at	\N	2018-03-20 17:08:48	2018-03-20 17:08:48	2018-03-20 17:08:48
1364	App\\Data\\Models\\Processo	381	10	created_at	\N	2018-03-20 17:11:14	2018-03-20 17:11:14	2018-03-20 17:11:14
1365	App\\Data\\Models\\Processo	382	10	created_at	\N	2018-03-20 17:11:58	2018-03-20 17:11:58	2018-03-20 17:11:58
1366	App\\Data\\Models\\Processo	383	10	created_at	\N	2018-03-20 17:18:20	2018-03-20 17:18:20	2018-03-20 17:18:20
1367	App\\Data\\Models\\Processo	379	10	apensos_obs	Não.	Sem apenso.	2018-03-20 17:18:33	2018-03-20 17:18:33
1368	App\\Data\\Models\\Processo	379	10	merito	Não.	Não julgado.	2018-03-20 17:18:33	2018-03-20 17:18:33
1369	App\\Data\\Models\\Processo	379	10	liminar	Sim, sem apreciação	Não apreciado.	2018-03-20 17:18:33	2018-03-20 17:18:33
1371	App\\Data\\Models\\Processo	384	10	created_at	\N	2018-03-20 17:29:26	2018-03-20 17:29:26	2018-03-20 17:29:26
1372	App\\Data\\Models\\Processo	384	10	procurador_id	2	\N	2018-03-20 17:31:08	2018-03-20 17:31:08
1373	App\\Data\\Models\\Processo	385	10	created_at	\N	2018-03-20 17:31:22	2018-03-20 17:31:22	2018-03-20 17:31:22
1374	App\\Data\\Models\\Processo	386	10	created_at	\N	2018-03-20 17:36:55	2018-03-20 17:36:55	2018-03-20 17:36:55
1375	App\\Data\\Models\\Lei	1	10	created_at	\N	2018-03-20 17:43:27	2018-03-20 17:43:27	2018-03-20 17:43:27
1376	App\\Data\\Models\\User	10	10	remember_token	me15Ceeg7KERntSf2kZp9dDtNfCPf7JY9NopWHlMJw8Krl4PtB21rVTBjqTg	3FHGa9unMUmg9RmIpqj64BQ671WIUoyhwSetBTrkPvNs7GrB19ifXmZxopaI	2018-03-20 17:46:36	2018-03-20 17:46:36
1377	App\\Data\\Models\\User	10	10	remember_token	3FHGa9unMUmg9RmIpqj64BQ671WIUoyhwSetBTrkPvNs7GrB19ifXmZxopaI	VUNhKxpEA45RooGgZLSGbAKk5xAxQ3otzCf8ZjzIyvaPlb4BSuEgr9amwB4Q	2018-03-20 17:46:37	2018-03-20 17:46:37
1378	App\\Data\\Models\\Lei	2	10	created_at	\N	2018-03-20 17:50:19	2018-03-20 17:50:19	2018-03-20 17:50:19
1379	App\\Data\\Models\\Lei	3	10	created_at	\N	2018-03-20 17:54:12	2018-03-20 17:54:12	2018-03-20 17:54:12
1380	App\\Data\\Models\\User	10	10	remember_token	VUNhKxpEA45RooGgZLSGbAKk5xAxQ3otzCf8ZjzIyvaPlb4BSuEgr9amwB4Q	5F6Zq6oQIFZe5ze95sWh5aE5uxxu2ngDb3Ddlw5Tp1pHM9NWhuJkCr1dXTUj	2018-03-20 18:43:50	2018-03-20 18:43:50
1381	App\\Data\\Models\\Processo	387	10	created_at	\N	2018-03-21 16:36:28	2018-03-21 16:36:28	2018-03-21 16:36:28
1382	App\\Data\\Models\\Processo	388	10	created_at	\N	2018-03-21 16:42:17	2018-03-21 16:42:17	2018-03-21 16:42:17
1383	App\\Data\\Models\\Processo	389	10	created_at	\N	2018-03-21 16:44:36	2018-03-21 16:44:36	2018-03-21 16:44:36
1384	App\\Data\\Models\\Lei	4	10	created_at	\N	2018-03-21 16:46:41	2018-03-21 16:46:41	2018-03-21 16:46:41
1385	App\\Data\\Models\\Processo	388	10	merito	Ainda não julgado	Ainda não julgado o mérito	2018-03-21 16:48:02	2018-03-21 16:48:02
1386	App\\Data\\Models\\Processo	388	10	recurso	\N	Agravo interno contra a decisão que indeferiu a liminar	2018-03-21 16:48:02	2018-03-21 16:48:02
1387	App\\Data\\Models\\Lei	5	10	created_at	\N	2018-03-21 16:50:01	2018-03-21 16:50:01	2018-03-21 16:50:01
1388	App\\Data\\Models\\Lei	6	10	created_at	\N	2018-03-21 16:53:01	2018-03-21 16:53:01	2018-03-21 16:53:01
1389	App\\Data\\Models\\Processo	59	10	relator_id	14	15	2018-03-21 17:03:28	2018-03-21 17:03:28
1390	App\\Data\\Models\\Processo	207	11	assessor_id	\N	23	2018-03-22 10:34:15	2018-03-22 10:34:15
1391	App\\Data\\Models\\Processo	207	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-22 10:34:15	2018-03-22 10:34:15
1392	App\\Data\\Models\\Processo	380	11	estagiario_id	15	11	2018-03-22 11:15:55	2018-03-22 11:15:55
1393	App\\Data\\Models\\Processo	385	11	estagiario_id	14	11	2018-03-22 11:16:40	2018-03-22 11:16:40
1394	App\\Data\\Models\\Processo	382	11	estagiario_id	14	11	2018-03-22 11:17:15	2018-03-22 11:17:15
1395	App\\Data\\Models\\Processo	271	10	data_arquivamento	\N	2018-03-19	2018-03-22 12:29:18	2018-03-22 12:29:18
1396	App\\Data\\Models\\Processo	271	10	observacao_arquivamento	\N	Arquivamento provisório	2018-03-22 12:29:18	2018-03-22 12:29:18
1397	App\\Data\\Models\\Processo	390	10	created_at	\N	2018-03-23 16:05:59	2018-03-23 16:05:59	2018-03-23 16:05:59
1398	App\\Data\\Models\\Lei	7	10	created_at	\N	2018-03-23 16:09:41	2018-03-23 16:09:41	2018-03-23 16:09:41
1399	App\\Data\\Models\\Lei	7	10	link	http://alerjln1.alerj.rj.gov.br/contlei.nsf/b24a2da5a077847c032564f4005d4bf2/e7b9c83e89f72e39832582510062653a?OpenDocument	http://www2.alerj.rj.gov.br/lotus_notes/default.asp?id=53&url=L2NvbnRsZWkubnNmL2IyNGEyZGE1YTA3Nzg0N2MwMzI1NjRmNDAwNWQ0YmYyL2U3YjljODNlODlmNzJlMzk4MzI1ODI1MTAwNjI2NTNhP09wZW5Eb2N1bWVudA==	2018-03-23 16:10:16	2018-03-23 16:10:16
1400	App\\Data\\Models\\Processo	283	11	assessor_id	\N	23	2018-03-26 09:44:40	2018-03-26 09:44:40
1401	App\\Data\\Models\\Processo	283	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-26 09:44:40	2018-03-26 09:44:40
1402	App\\Data\\Models\\Processo	82	11	assessor_id	\N	23	2018-03-26 10:18:34	2018-03-26 10:18:34
1403	App\\Data\\Models\\Processo	82	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-03-26 10:18:34	2018-03-26 10:18:34
1404	App\\Data\\Models\\Processo	391	10	created_at	\N	2018-03-27 14:27:10	2018-03-27 14:27:10	2018-03-27 14:27:10
1405	App\\Data\\Models\\Lei	8	10	created_at	\N	2018-03-27 14:30:46	2018-03-27 14:30:46	2018-03-27 14:30:46
1406	App\\Data\\Models\\Andamento	1	25	created_at	\N	2018-03-27 14:37:29	2018-03-27 14:37:29	2018-03-27 14:37:29
1407	App\\Data\\Models\\Andamento	2	25	created_at	\N	2018-03-27 14:43:06	2018-03-27 14:43:06	2018-03-27 14:43:06
1408	App\\Data\\Models\\Processo	384	25	procurador_id	\N	7	2018-03-27 14:43:48	2018-03-27 14:43:48
1409	App\\Data\\Models\\Processo	389	10	numero_alerj	\N	3403/2018	2018-03-27 15:49:11	2018-03-27 15:49:11
1410	App\\Data\\Models\\Processo	296	11	estagiario_id	12	15	2018-03-28 09:25:59	2018-03-28 09:25:59
1411	App\\Data\\Models\\Processo	285	11	assessor_id	\N	24	2018-03-28 09:58:21	2018-03-28 09:58:21
1412	App\\Data\\Models\\Processo	285	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-03-28 09:58:21	2018-03-28 09:58:21
1413	App\\Data\\Models\\Processo	177	11	assessor_id	\N	24	2018-04-02 10:59:57	2018-04-02 10:59:57
1414	App\\Data\\Models\\Processo	177	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-04-02 10:59:57	2018-04-02 10:59:57
1415	App\\Data\\Models\\Processo	176	11	assessor_id	\N	24	2018-04-02 11:02:33	2018-04-02 11:02:33
1416	App\\Data\\Models\\Processo	176	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-04-02 11:02:33	2018-04-02 11:02:33
1417	App\\Data\\Models\\Processo	120	25	numero_alerj	2857/2017	2857/2018	2018-04-02 11:50:44	2018-04-02 11:50:44
1418	App\\Data\\Models\\Processo	120	25	procurador_id	4	3	2018-04-02 11:50:44	2018-04-02 11:50:44
1419	App\\Data\\Models\\Processo	256	10	numero_alerj	Não recebemos ofício	3562/2018	2018-04-02 15:35:58	2018-04-02 15:35:58
1420	App\\Data\\Models\\Processo	256	10	procurador_id	\N	3	2018-04-02 15:35:58	2018-04-02 15:35:58
1421	App\\Data\\Models\\Processo	183	11	assessor_id	\N	24	2018-04-03 11:57:28	2018-04-03 11:57:28
1422	App\\Data\\Models\\Processo	183	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-04-03 11:57:28	2018-04-03 11:57:28
1423	App\\Data\\Models\\Processo	183	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700143	2018-04-03 12:15:39	2018-04-03 12:15:39
1424	App\\Data\\Models\\Processo	379	25	numero_alerj	\N	3776/2018	2018-04-04 10:02:19	2018-04-04 10:02:19
1425	App\\Data\\Models\\Processo	379	25	procurador_id	\N	3	2018-04-04 10:02:19	2018-04-04 10:02:19
1426	App\\Data\\Models\\Processo	181	11	assessor_id	\N	24	2018-04-04 10:32:24	2018-04-04 10:32:24
1427	App\\Data\\Models\\Processo	181	11	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-04-04 10:32:24	2018-04-04 10:32:24
1428	App\\Data\\Models\\Processo	313	11	assessor_id	\N	23	2018-04-04 10:47:54	2018-04-04 10:47:54
1429	App\\Data\\Models\\Processo	313	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-04-04 10:47:54	2018-04-04 10:47:54
1430	App\\Data\\Models\\Processo	70	10	data_arquivamento	\N	2018-04-02	2018-04-04 15:14:04	2018-04-04 15:14:04
1431	App\\Data\\Models\\Processo	384	11	numero_alerj	\N	3456/2018	2018-04-06 09:47:34	2018-04-06 09:47:34
1432	App\\Data\\Models\\Processo	247	10	data_arquivamento	\N	2018-04-06	2018-04-10 12:36:06	2018-04-10 12:36:06
1433	App\\Data\\Models\\Processo	371	11	assessor_id	\N	23	2018-04-11 10:08:36	2018-04-11 10:08:36
1434	App\\Data\\Models\\Processo	371	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-04-11 10:08:36	2018-04-11 10:08:36
1435	App\\Data\\Models\\Processo	172	11	recurso	_	RE 1121143	2018-04-11 10:54:42	2018-04-11 10:54:42
1436	App\\Data\\Models\\Processo	102	25	procurador_id	\N	7	2018-04-11 11:46:27	2018-04-11 11:46:27
1437	App\\Data\\Models\\Acao	26	10	created_at	\N	2018-04-11 14:54:10	2018-04-11 14:54:10	2018-04-11 14:54:10
1438	App\\Data\\Models\\Processo	392	10	created_at	\N	2018-04-11 15:07:09	2018-04-11 15:07:09	2018-04-11 15:07:09
1439	App\\Data\\Models\\Apenso	1	10	created_at	\N	2018-04-11 15:07:59	2018-04-11 15:07:59	2018-04-11 15:07:59
1440	App\\Data\\Models\\Apenso	2	10	created_at	\N	2018-04-11 15:08:22	2018-04-11 15:08:22	2018-04-11 15:08:22
1441	App\\Data\\Models\\Processo	377	10	apensos_obs	\N	0017613-04.2018.8.19.0000	2018-04-11 15:08:37	2018-04-11 15:08:37
1442	App\\Data\\Models\\Processo	393	10	created_at	\N	2018-04-11 16:09:18	2018-04-11 16:09:18	2018-04-11 16:09:18
1443	App\\Data\\Models\\Processo	393	10	estagiario_id	\N	11	2018-04-11 16:12:28	2018-04-11 16:12:28
1444	App\\Data\\Models\\Processo	99	25	numero_alerj	Sem processo ALERJ - Ainda não recebemos Citação.	4525/2018	2018-04-13 12:34:37	2018-04-13 12:34:37
1445	App\\Data\\Models\\Processo	99	25	procurador_id	\N	2	2018-04-13 12:34:37	2018-04-13 12:34:37
1446	App\\Data\\Models\\Processo	99	25	estagiario_id	16	8	2018-04-13 12:34:37	2018-04-13 12:34:37
1447	App\\Data\\Models\\User	8	8	remember_token	aRBgg6KBVeEJuHR6WuNFM0mEAKbBGVmdN9ScFqMYxeyUq7Z30Ot7mmbZdDMD	mPhi13hkOLDBG4lE8GyyWe8Sx6xX0fQbJOOo2ZoLqgrSuvYDiSKpvywex9LF	2018-04-16 11:50:18	2018-04-16 11:50:18
1448	App\\Data\\Models\\User	8	8	remember_token	mPhi13hkOLDBG4lE8GyyWe8Sx6xX0fQbJOOo2ZoLqgrSuvYDiSKpvywex9LF	w8qcAXbqNU3qHQkX3Hz4yfmPej2MqpWd2EzipAuqJ5T0OwypHXCszokU0vkO	2018-04-16 14:19:48	2018-04-16 14:19:48
1449	App\\Data\\Models\\User	8	8	remember_token	w8qcAXbqNU3qHQkX3Hz4yfmPej2MqpWd2EzipAuqJ5T0OwypHXCszokU0vkO	hiCORABGMtmC1UabVbatvmW2wysN6iDBiCa4S0e5cmduuXkaETVBnncuGtUO	2018-04-16 15:17:14	2018-04-16 15:17:14
1450	App\\Data\\Models\\Processo	394	10	created_at	\N	2018-04-18 10:00:18	2018-04-18 10:00:18	2018-04-18 10:00:18
1451	App\\Data\\Models\\Processo	135	11	numero_alerj	10309	10309/2013	2018-04-18 10:34:00	2018-04-18 10:34:00
1452	App\\Data\\Models\\Processo	371	23	observacao	Estagiário: Luan Moreira,	\N	2018-04-18 12:40:14	2018-04-18 12:40:14
1453	App\\Data\\Models\\Processo	371	11	numero_judicial	63245-34.2010.8.19.0000	0063245-34.2010.8.19.0000	2018-04-18 13:11:27	2018-04-18 13:11:27
1454	App\\Data\\Models\\Processo	99	8	observacao	N/C	Trata-se do mesmo assunto do MS 13875/2015	2018-04-18 17:27:38	2018-04-18 17:27:38
1455	App\\Data\\Models\\Processo	198	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700158	2018-04-19 10:30:18	2018-04-19 10:30:18
1456	App\\Data\\Models\\Processo	224	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700239	2018-04-19 10:32:17	2018-04-19 10:32:17
1457	App\\Data\\Models\\Processo	224	11	numero_alerj	15459/17	15459/2017	2018-04-19 10:32:51	2018-04-19 10:32:51
1458	App\\Data\\Models\\Processo	108	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700020	2018-04-19 10:38:01	2018-04-19 10:38:01
1459	App\\Data\\Models\\Processo	240	10	estagiario_id	13	\N	2018-04-19 12:09:50	2018-04-19 12:09:50
1460	App\\Data\\Models\\Processo	240	10	assessor_id	\N	24	2018-04-19 12:09:50	2018-04-19 12:09:50
1461	App\\Data\\Models\\Processo	83	14	numero_judicial	1017857920165010000	0101785-79.2016.5.01.0005	2018-04-19 13:52:38	2018-04-19 13:52:38
1462	App\\Data\\Models\\Processo	266	14	numero_judicial	0101785-79.2016.5.01.0005	SEM NÚMERO	2018-04-19 14:55:41	2018-04-19 14:55:41
1463	App\\Data\\Models\\Processo	266	14	numero_alerj	15827/2016	\N	2018-04-19 14:55:41	2018-04-19 14:55:41
1464	App\\Data\\Models\\Processo	266	14	relator_id	109	\N	2018-04-19 14:56:28	2018-04-19 14:56:28
1465	App\\Data\\Models\\Processo	266	14	procurador_id	4	\N	2018-04-19 14:56:28	2018-04-19 14:56:28
1466	App\\Data\\Models\\Processo	83	14	link	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1188550&p_grau_pje=1&p_seq=101785&p_vara=5&dt_autuacao=08%2F11%2F2016&cid=550544	2018-04-19 14:57:34	2018-04-19 14:57:34
1467	App\\Data\\Models\\Processo	181	14	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700142	2018-04-19 14:59:11	2018-04-19 14:59:11
1468	App\\Data\\Models\\Processo	264	14	link	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1080474&p_grau_pje=1&popup=0&dt_autuacao=&cid=550727	2018-04-19 15:00:40	2018-04-19 15:00:40
1469	App\\Data\\Models\\Processo	100	14	numero_judicial	*00104294920135010056*	0010429-49.2013.5.01.0056	2018-04-19 15:05:50	2018-04-19 15:05:50
1470	App\\Data\\Models\\Processo	100	14	tribunal_id	4	3	2018-04-19 15:05:50	2018-04-19 15:05:50
1471	App\\Data\\Models\\Processo	100	14	link	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=79789&p_grau_pje=1&popup=0&dt_autuacao=&cid=67165	2018-04-19 15:05:50	2018-04-19 15:05:50
1472	App\\Data\\Models\\Processo	99	14	numero_judicial	(0197134-08.2015.8.19.0001)	0197134-08.2015.8.19.0001	2018-04-19 15:07:00	2018-04-19 15:07:00
1473	App\\Data\\Models\\Processo	269	14	link	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1577682&p_grau_pje=1&popup=0&dt_autuacao=&cid=67165	2018-04-19 15:08:21	2018-04-19 15:08:21
1474	App\\Data\\Models\\Processo	265	14	link	\N	https://consultapje.trt1.jus.br/consultaprocessual/pages/consultas/DetalhaProcesso.seam?p_num_pje=1185778&p_grau_pje=1&popup=0&dt_autuacao=&cid=67165	2018-04-19 15:09:32	2018-04-19 15:09:32
1475	App\\Data\\Models\\Processo	194	14	link	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2015.202.032241-0	2018-04-19 15:11:04	2018-04-19 15:11:04
1476	App\\Data\\Models\\Processo	131	14	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700089	2018-04-19 15:12:02	2018-04-19 15:12:02
1477	App\\Data\\Models\\Processo	96	14	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700400977	2018-04-19 15:12:48	2018-04-19 15:12:48
1478	App\\Data\\Models\\Processo	79	14	link	\N	http://portal.stf.jus.br/processos/detalhe.asp?incidente=5319716	2018-04-19 15:13:30	2018-04-19 15:13:30
1479	App\\Data\\Models\\Processo	392	14	objeto	\N	Requerimento de tutela provisória de urgência de natureza cautelar e de caráter incidental a ser distribuído por dependência à RI em referência, 0005073-21.2018.8.19.0000.	2018-04-19 15:33:08	2018-04-19 15:33:08
1480	App\\Data\\Models\\Processo	280	11	link	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaMov.do?v=2&numProcesso=2010.001.234873-1&acessoIP=internet&tipoUsuario=	2018-04-20 10:18:18	2018-04-20 10:18:18
1481	App\\Data\\Models\\Processo	300	11	numero_judicial	17774-24.2012.8.19.0000	0017774-24.2012.8.19.0000	2018-04-20 10:28:52	2018-04-20 10:28:52
1482	App\\Data\\Models\\Processo	393	10	numero_alerj	\N	4763/2018	2018-04-20 13:44:27	2018-04-20 13:44:27
1483	App\\Data\\Models\\Processo	379	10	numero_alerj	3776/2018	3776/2018 e 4765/2018	2018-04-20 13:52:14	2018-04-20 13:52:14
1484	App\\Data\\Models\\Processo	355	10	numero_alerj	10853/2013	9915/2013	2018-04-24 10:52:50	2018-04-24 10:52:50
1485	App\\Data\\Models\\Processo	358	10	numero_alerj	9915/2013	10853/2013	2018-04-24 10:54:07	2018-04-24 10:54:07
1486	App\\Data\\Models\\Processo	206	11	assessor_id	\N	23	2018-04-24 10:56:58	2018-04-24 10:56:58
1487	App\\Data\\Models\\Processo	206	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-04-24 10:56:58	2018-04-24 10:56:58
1488	App\\Data\\Models\\Processo	237	10	objeto	PL 2235/16, que extingue o instituto de terras e cartografia	Objeto: PL 2244 :extinção do adicional por tempo de serviço do funcionalismo público civil e militar	2018-04-24 10:58:12	2018-04-24 10:58:12
1489	App\\Data\\Models\\Processo	244	10	recurso	N/C	ARE 1075428	2018-04-24 11:01:37	2018-04-24 11:01:37
1490	App\\Data\\Models\\Processo	395	16	created_at	\N	2018-04-24 14:58:43	2018-04-24 14:58:43	2018-04-24 14:58:43
1491	App\\Data\\Models\\Processo	396	16	created_at	\N	2018-04-24 15:06:54	2018-04-24 15:06:54	2018-04-24 15:06:54
1492	App\\Data\\Models\\Processo	4	12	objeto	Artigo 223, paragrafo 001º da Constituicao do Estado do Rio de Janeiro e art. 56 do Ato das Disposições Constitucionais Transitórias, da Constituição do Estado do Rio de Janeiro.	O objeto da ação questiona a validade constitucional do art. 226, § 1º  da Constituição do Estado do Rio de Janeiro e do art. 56 do Ato das Disposições Constitucionais Transitórias\r\ndessa Constituição, ao argumento de que estariam em desconformidade com os arts. 158, 159, 165, § 8º  e  167, IV, e 212 da Constituição da República.	2018-04-24 17:53:09	2018-04-24 17:53:09
1493	App\\Data\\Models\\Processo	393	11	estagiario_id	11	13	2018-04-25 10:01:27	2018-04-25 10:01:27
1494	App\\Data\\Models\\Processo	393	11	procurador_id	\N	2	2018-04-25 10:14:08	2018-04-25 10:14:08
1495	App\\Data\\Models\\Processo	324	11	link	\N	https://ww2.stj.jus.br/processo/pesquisa/?tipoPesquisa=tipoPesquisaNumeroRegistro&termo=201700736120&totalRegistrosPorPagina=40&aplicacao=processos.ea	2018-04-25 11:51:12	2018-04-25 11:51:12
1496	App\\Data\\Models\\Processo	116	10	data_arquivamento	\N	2018-04-25	2018-04-25 14:51:02	2018-04-25 14:51:02
1497	App\\Data\\Models\\Processo	325	11	numero_judicial	34639-30.2009.8.19.0000	0034639-30.2009.8.19.0000	2018-04-26 10:02:53	2018-04-26 10:02:53
1498	App\\Data\\Models\\Processo	113	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700030	2018-04-26 10:15:58	2018-04-26 10:15:58
1499	App\\Data\\Models\\Processo	398	14	created_at	\N	2018-04-26 13:03:57	2018-04-26 13:03:57	2018-04-26 13:03:57
1500	App\\Data\\Models\\Processo	398	14	link	\N	http://portal.stf.jus.br/processos/detalhe.asp?incidente=5445358	2018-04-26 13:04:33	2018-04-26 13:04:33
1501	App\\Data\\Models\\Processo	400	14	created_at	\N	2018-04-26 13:08:13	2018-04-26 13:08:13	2018-04-26 13:08:13
1502	App\\Data\\Models\\Processo	398	14	relator_id	\N	9	2018-04-26 13:08:50	2018-04-26 13:08:50
1503	App\\Data\\Models\\Processo	398	14	estagiario_id	\N	14	2018-04-26 13:32:54	2018-04-26 13:32:54
1504	App\\Data\\Models\\Processo	400	14	estagiario_id	\N	11	2018-04-26 13:33:31	2018-04-26 13:33:31
1505	App\\Data\\Models\\Processo	268	14	numero_alerj	N/C	16105/2016	2018-04-26 14:53:52	2018-04-26 14:53:52
1506	App\\Data\\Models\\User	27	27	remember_token	\N	GHk90qIJXCH68VlYDQGOQANwPBoTiNwfqOi0aolIgZ9kh3shSOb1M1olEAL6	2018-04-26 15:00:03	2018-04-26 15:00:03
1507	App\\Data\\Models\\Processo	398	11	numero_alerj	5085	5085/2018	2018-04-27 10:59:04	2018-04-27 10:59:04
1508	App\\Data\\Models\\Processo	133	14	link	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2018.001.009676-8	2018-04-27 12:03:22	2018-04-27 12:03:22
1509	App\\Data\\Models\\Processo	268	14	objeto	-	Indenização Trabalhista / Contribuições Previdenciárias / Contribuições; Dano Moral / Responsabilidade da Administração	2018-04-27 12:04:31	2018-04-27 12:04:31
1510	App\\Data\\Models\\Processo	400	14	estagiario_id	11	9	2018-04-27 14:54:03	2018-04-27 14:54:03
1511	App\\Data\\Models\\Processo	398	14	estagiario_id	14	9	2018-04-27 14:54:25	2018-04-27 14:54:25
1512	App\\Data\\Models\\Processo	391	10	numero_alerj	\N	5394/2018	2018-04-27 16:30:31	2018-04-27 16:30:31
1513	App\\Data\\Models\\Processo	391	10	estagiario_id	\N	16	2018-04-27 16:32:28	2018-04-27 16:32:28
1514	App\\Data\\Models\\Processo	118	11	link	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2011.001.003258-1	http://www4.tjrj.jus.br/numeracaoUnica/faces/index.jsp?numProcesso=0005459-92.2011.8.19.0001	2018-05-02 10:03:22	2018-05-02 10:03:22
1515	App\\Data\\Models\\Processo	174	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=2017.007.00128&USER=	2018-05-02 10:28:55	2018-05-02 10:28:55
1516	App\\Data\\Models\\Processo	401	11	created_at	\N	2018-05-02 13:13:20	2018-05-02 13:13:20	2018-05-02 13:13:20
1517	App\\Data\\Models\\Processo	401	8	tribunal_id	2	1	2018-05-02 13:32:24	2018-05-02 13:32:24
1518	App\\Data\\Models\\Processo	401	8	procurador_id	\N	4	2018-05-02 13:33:17	2018-05-02 13:33:17
1519	App\\Data\\Models\\Processo	401	14	numero_judicial	000.016-2018-7	35677	2018-05-03 13:57:46	2018-05-03 13:57:46
1520	App\\Data\\Models\\Processo	401	14	relator_id	\N	1	2018-05-03 13:57:46	2018-05-03 13:57:46
1521	App\\Data\\Models\\Processo	401	14	autor	ALERJ	ASSEMBLÉIA LEGISLATIVA DO ESTADO DO RIO DE JANEIRO	2018-05-03 13:57:46	2018-05-03 13:57:46
1522	App\\Data\\Models\\Processo	401	14	reu	TCU	TRIBUNAL DE CONTAS DA UNIÃO	2018-05-03 13:57:46	2018-05-03 13:57:46
1523	App\\Data\\Models\\Processo	401	14	observacao	Ainda não temos o número judicial. Assim que entrar, trocar o número judicial.	\N	2018-05-03 13:57:46	2018-05-03 13:57:46
1524	App\\Data\\Models\\Processo	401	14	link	\N	http://portal.stf.jus.br/processos/detalhe.asp?incidente=5450191	2018-05-03 13:57:46	2018-05-03 13:57:46
1525	App\\Data\\Models\\Processo	398	11	estagiario_id	9	14	2018-05-04 11:43:18	2018-05-04 11:43:18
1526	App\\Data\\Models\\Processo	398	14	autor	MESA DIRETORA DA ALER	MESA DIRETORA DA ALERJ	2018-05-04 12:24:36	2018-05-04 12:24:36
1527	App\\Data\\Models\\Processo	398	14	estagiario_id	14	9	2018-05-04 12:24:36	2018-05-04 12:24:36
1528	App\\Data\\Models\\User	27	27	remember_token	GHk90qIJXCH68VlYDQGOQANwPBoTiNwfqOi0aolIgZ9kh3shSOb1M1olEAL6	w98CXtZCWZdiqmhw1jK7XT0qgmv4NOkhXLEvHPecvuWl2LVhqlVAGWxde4IQ	2018-05-04 13:46:38	2018-05-04 13:46:38
1529	App\\Data\\Models\\Processo	401	10	estagiario_id	\N	10	2018-05-07 15:39:02	2018-05-07 15:39:02
1530	App\\Data\\Models\\Processo	206	10	data_arquivamento	\N	2018-04-20	2018-05-07 16:05:27	2018-05-07 16:05:27
1531	App\\Data\\Models\\Processo	402	16	created_at	\N	2018-05-07 16:58:11	2018-05-07 16:58:11	2018-05-07 16:58:11
1532	App\\Data\\Models\\User	27	27	remember_token	w98CXtZCWZdiqmhw1jK7XT0qgmv4NOkhXLEvHPecvuWl2LVhqlVAGWxde4IQ	0JTJNUyIWtuc8uUx07I1iOVE10dczB42ZTqad4yOoPeyKDr2anxKXKJtwZlx	2018-05-07 17:33:28	2018-05-07 17:33:28
1533	App\\Data\\Models\\Processo	403	13	created_at	\N	2018-05-08 08:46:48	2018-05-08 08:46:48	2018-05-08 08:46:48
1534	App\\Data\\Models\\Processo	299	11	numero_judicial	17593-86.2013.8.19.0000	0017593-86.2013.8.19.0000	2018-05-08 10:27:37	2018-05-08 10:27:37
1586	App\\Data\\Models\\Processo	417	11	estagiario_id	\N	15	2018-06-04 12:05:21	2018-06-04 12:05:21
1535	App\\Data\\Models\\User	26	26	remember_token	\N	Ns1OYiTUuCJREUuZNobG2Ij3F1K7V5IGCLzaDDHplkGexpBkaykiTLQ2d875	2018-05-09 08:48:01	2018-05-09 08:48:01
1536	App\\Data\\Models\\Processo	262	11	assessor_id	\N	23	2018-05-09 10:13:12	2018-05-09 10:13:12
1537	App\\Data\\Models\\Processo	262	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-05-09 10:13:12	2018-05-09 10:13:12
1538	App\\Data\\Models\\Processo	183	11	procurador_id	7	2	2018-05-09 11:59:10	2018-05-09 11:59:10
1539	App\\Data\\Models\\Processo	181	11	procurador_id	4	2	2018-05-09 12:00:02	2018-05-09 12:00:02
1540	App\\Data\\Models\\Processo	404	11	created_at	\N	2018-05-09 12:47:35	2018-05-09 12:47:35	2018-05-09 12:47:35
1541	App\\Data\\Models\\Processo	404	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700123	2018-05-09 12:48:15	2018-05-09 12:48:15
1542	App\\Data\\Models\\User	14	14	remember_token	0dh7CPuHqjiw1dtr5G21BrZ0oDHkNZMfttaytOchJBWC7H40TJHd2Q7UKp3f	0JgsBrPYkkvQCJzzuY9DeXPgpYhboC6B5VRIObK3xfkwOGjmsTr3PaKhyQHj	2018-05-09 14:06:14	2018-05-09 14:06:14
1543	App\\Data\\Models\\User	28	28	remember_token	nTVOyUfU6wxnsEiuc3bQtmC6KUyhtJQxt2LCh3x7t9mwF3K8twHkMPp9N5Nf	8RtA5ZZDhotaFlISxazlg4m0NKEbyahuOKm42Lua4n5PsIpHAQdjzE9tVypi	2018-05-09 15:03:19	2018-05-09 15:03:19
1544	App\\Data\\Models\\User	36	36	remember_token	\N	J3gQfxYSchXTFGW2KHjCRYndNu4sK7kLIt4EH95aQPo0G5Z0jpSCaNAhUnyS	2018-05-09 15:04:38	2018-05-09 15:04:38
1545	App\\Data\\Models\\Processo	97	11	data_arquivamento	\N	2018-05-10	2018-05-10 10:42:22	2018-05-10 10:42:22
1546	App\\Data\\Models\\Processo	405	10	created_at	\N	2018-05-14 15:17:22	2018-05-14 15:17:22	2018-05-14 15:17:22
1547	App\\Data\\Models\\Processo	199	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700160	2018-05-15 10:28:42	2018-05-15 10:28:42
1548	App\\Data\\Models\\Processo	383	15	numero_alerj	\N	6384/18	2018-05-15 14:38:32	2018-05-15 14:38:32
1549	App\\Data\\Models\\Processo	383	15	procurador_id	\N	7	2018-05-15 14:38:32	2018-05-15 14:38:32
1550	App\\Data\\Models\\Processo	383	15	numero_alerj	6384/18	6384/2018	2018-05-15 14:40:16	2018-05-15 14:40:16
1551	App\\Data\\Models\\Processo	85	10	data_arquivamento	\N	2018-05-16	2018-05-17 15:19:44	2018-05-17 15:19:44
1552	App\\Data\\Models\\Processo	406	10	created_at	\N	2018-05-17 15:39:55	2018-05-17 15:39:55	2018-05-17 15:39:55
1553	App\\Data\\Models\\Processo	406	10	estagiario_id	9	\N	2018-05-17 15:41:01	2018-05-17 15:41:01
1554	App\\Data\\Models\\Processo	406	10	observacao	\N	ESTAGIÁRIA FERNANDA PENNA	2018-05-17 15:41:01	2018-05-17 15:41:01
1555	App\\Data\\Models\\User	27	27	remember_token	0JTJNUyIWtuc8uUx07I1iOVE10dczB42ZTqad4yOoPeyKDr2anxKXKJtwZlx	uR3LsHSGlTRtHwRqkiKexfgQOZNkLq4FaDhMlNIBgbCTXxyDB5YDtQ2nRYHg	2018-05-17 16:24:57	2018-05-17 16:24:57
1556	App\\Data\\Models\\Processo	280	11	numero_alerj	Quem atua são os próprios procuradores da PGE, por isso não existe número Alerj.	6296/2018	2018-05-21 10:24:24	2018-05-21 10:24:24
1557	App\\Data\\Models\\Processo	280	11	observacao	N/C	Quem atua são os próprios procuradores da PGE, desde 2010 a ALERJ nunca se manifestou.	2018-05-21 10:24:24	2018-05-21 10:24:24
1558	App\\Data\\Models\\Processo	353	13	estagiario_id	12	13	2018-05-22 11:15:57	2018-05-22 11:15:57
1559	App\\Data\\Models\\Processo	407	11	created_at	\N	2018-05-22 12:32:53	2018-05-22 12:32:53	2018-05-22 12:32:53
1560	App\\Data\\Models\\Processo	209	11	assessor_id	\N	23	2018-05-23 10:20:14	2018-05-23 10:20:14
1561	App\\Data\\Models\\Processo	209	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-05-23 10:20:14	2018-05-23 10:20:14
1562	App\\Data\\Models\\User	27	27	remember_token	uR3LsHSGlTRtHwRqkiKexfgQOZNkLq4FaDhMlNIBgbCTXxyDB5YDtQ2nRYHg	VI1jZzHGeDlIXe5GRNhtydkrkYBc5apOWZU2fDXIiGqVTjELSBSRKjmmo2KI	2018-05-23 16:21:17	2018-05-23 16:21:17
1563	App\\Data\\Models\\User	27	27	remember_token	VI1jZzHGeDlIXe5GRNhtydkrkYBc5apOWZU2fDXIiGqVTjELSBSRKjmmo2KI	YxZEXO0J5sc4xZvoORTIFGqd2XQmZTTHeeNWABxdqgBDSChlJy80OItdE6qz	2018-05-23 16:21:30	2018-05-23 16:21:30
1564	App\\Data\\Models\\User	27	27	remember_token	YxZEXO0J5sc4xZvoORTIFGqd2XQmZTTHeeNWABxdqgBDSChlJy80OItdE6qz	qhilB6FhevLaa8QyI9JmwyRWFNy6grIeE6iXdzS9X2RJmOiChYq0qHL3khFZ	2018-05-23 17:32:13	2018-05-23 17:32:13
1565	App\\Data\\Models\\Processo	374	11	numero_judicial	9815-17.2003.8.19.0000	0009815-17.2003.8.19.0000	2018-05-24 10:45:34	2018-05-24 10:45:34
1566	App\\Data\\Models\\Processo	408	11	created_at	\N	2018-05-25 12:18:08	2018-05-25 12:18:08	2018-05-25 12:18:08
1567	App\\Data\\Models\\Processo	408	11	link	\N	http://www.stf.jus.br/portal/processo/verProcessoAndamento.asp?incidente=5468027	2018-05-25 12:19:49	2018-05-25 12:19:49
1568	App\\Data\\Models\\Processo	408	11	data_distribuicao	\N	2018-05-23 00:00:00	2018-05-25 12:24:38	2018-05-25 12:24:38
1569	App\\Data\\Models\\Processo	411	11	created_at	\N	2018-05-25 12:27:11	2018-05-25 12:27:11	2018-05-25 12:27:11
1570	App\\Data\\Models\\Processo	167	8	apensos_obs	N/C	7062/2018	2018-05-29 13:43:59	2018-05-29 13:43:59
1571	App\\Data\\Models\\Processo	81	11	numero_judicial	202980420068190000	0020298-04.2006.8.19.0000	2018-05-30 10:05:18	2018-05-30 10:05:18
1572	App\\Data\\Models\\Processo	296	11	numero_judicial	12538-23.2014.8.19.0000	0012538-23.2014.8.19.0000	2018-05-30 10:07:38	2018-05-30 10:07:38
1573	App\\Data\\Models\\Processo	408	11	numero_alerj	Sem ofício	7033/2018	2018-05-30 11:37:35	2018-05-30 11:37:35
1574	App\\Data\\Models\\Processo	134	13	data_arquivamento	\N	2018-05-30	2018-05-30 13:16:35	2018-05-30 13:16:35
1575	App\\Data\\Models\\User	8	8	remember_token	hiCORABGMtmC1UabVbatvmW2wysN6iDBiCa4S0e5cmduuXkaETVBnncuGtUO	M2VhonvvJJiPry4SfYoSxFSIMgDiUxb0z2LBNgw1iwBg9bvngxFceRy50zlO	2018-05-30 14:03:44	2018-05-30 14:03:44
1576	App\\Data\\Models\\Processo	80	11	numero_judicial	135296319958190000	0013529-63.1995.8.19.0000	2018-06-04 10:24:51	2018-06-04 10:24:51
1577	App\\Data\\Models\\Processo	102	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700008	2018-06-04 10:35:55	2018-06-04 10:35:55
1578	App\\Data\\Models\\Processo	412	11	created_at	\N	2018-06-04 11:40:49	2018-06-04 11:40:49	2018-06-04 11:40:49
1579	App\\Data\\Models\\Processo	413	11	created_at	\N	2018-06-04 11:57:51	2018-06-04 11:57:51	2018-06-04 11:57:51
1580	App\\Data\\Models\\Processo	417	11	created_at	\N	2018-06-04 12:01:18	2018-06-04 12:01:18	2018-06-04 12:01:18
1581	App\\Data\\Models\\Processo	412	11	juiz_id	\N	43	2018-06-04 12:01:46	2018-06-04 12:01:46
1582	App\\Data\\Models\\Processo	412	11	objeto	em face do § 2.º do artigo 1.º e artigo 8.º da Lei Estadual n.º 7.898/2018 que, promulgada pela Assembleia Legislativa do Estado do Rio de Janeiro - ALERJ, determina que o piso salarial dos empregados, integrantes das categorias profissionais de Auxiliares de Enfermagem (CBO 3222-30); Técnicos em Enfermagem (CBO 3222-05); E, Enfermeiros (CBO 2235).	RI em face do § 2.º do artigo 1.º e artigo 8.º da Lei Estadual n.º 7.898/2018 que, promulgada pela Assembleia Legislativa do Estado do Rio de Janeiro - ALERJ, determina que o piso salarial dos empregados, integrantes das categorias profissionais de Auxiliares de Enfermagem (CBO 3222-30); Técnicos em Enfermagem (CBO 3222-05); E, Enfermeiros (CBO 2235).	2018-06-04 12:02:42	2018-06-04 12:02:42
1583	App\\Data\\Models\\Processo	417	11	data_distribuicao	\N	2018-05-30 00:00:00	2018-06-04 12:03:43	2018-06-04 12:03:43
1584	App\\Data\\Models\\Processo	413	11	data_distribuicao	\N	2018-05-30 00:00:00	2018-06-04 12:04:32	2018-06-04 12:04:32
1585	App\\Data\\Models\\Processo	413	11	estagiario_id	\N	15	2018-06-04 12:04:57	2018-06-04 12:04:57
1587	App\\Data\\Models\\Processo	412	11	estagiario_id	\N	15	2018-06-04 12:05:41	2018-06-04 12:05:41
1588	App\\Data\\Models\\Processo	408	25	objeto	ADI com pedido de medida cautelar em face da Lei n. 7.917/2018, editada pela Assembleia Legislativa do Estado do Rio de Janeiro, que legislou sobre matéria processual, em manifesta violação ao art. 22, I, da CF	ADI com pedido de medida cautelar em face da Lei n. 7.917/2018, editada pela Assembleia Legislativa do Estado do Rio de Janeiro, que legislou sobre matéria processual, ao dispor sobre um limite máximo de tempo à vigência da prisão de natureza provisória (180 dias) e permanência do preso provisório em qualquer das unidades do Sistema Penitenciário Estadual,  em manifesta violação ao art. 22, I, da CF	2018-06-04 12:57:05	2018-06-04 12:57:05
1589	App\\Data\\Models\\Processo	408	25	liminar	\N	DEFERIDA	2018-06-04 12:57:05	2018-06-04 12:57:05
1590	App\\Data\\Models\\Processo	408	25	procurador_id	\N	7	2018-06-04 12:57:05	2018-06-04 12:57:05
1591	App\\Data\\Models\\Processo	408	25	estagiario_id	\N	10	2018-06-04 12:57:05	2018-06-04 12:57:05
1592	App\\Data\\Models\\Processo	395	11	numero_alerj	\N	7236/2018	2018-06-04 14:05:47	2018-06-04 14:05:47
1593	App\\Data\\Models\\Processo	403	11	numero_alerj	\N	7237/2018	2018-06-04 14:08:49	2018-06-04 14:08:49
1594	App\\Data\\Models\\Processo	403	11	estagiario_id	\N	12	2018-06-04 14:21:49	2018-06-04 14:21:49
1595	App\\Data\\Models\\Processo	404	11	numero_alerj	Sem ofício	7235/2018	2018-06-05 10:45:06	2018-06-05 10:45:06
1596	App\\Data\\Models\\Processo	404	11	estagiario_id	\N	35	2018-06-05 10:48:13	2018-06-05 10:48:13
1597	App\\Data\\Models\\Processo	133	10	numero_alerj	Não recebemos ofício	16105/2016	2018-06-05 11:23:03	2018-06-05 11:23:03
1598	App\\Data\\Models\\Apenso	3	10	created_at	\N	2018-06-05 11:23:28	2018-06-05 11:23:28	2018-06-05 11:23:28
1599	App\\Data\\Models\\Apenso	4	10	created_at	\N	2018-06-05 11:23:59	2018-06-05 11:23:59	2018-06-05 11:23:59
1600	App\\Data\\Models\\Processo	133	10	observacao	N/C	Apenso ao processo 0101853-60.2016.5.01.0027 (TRT)	2018-06-05 11:24:20	2018-06-05 11:24:20
1601	App\\Data\\Models\\Processo	268	10	observacao	N/C	Apenso ao processo 0013070-52.2018.8.19.0001 (TJRJ)	2018-06-05 11:26:24	2018-06-05 11:26:24
1602	App\\Data\\Models\\Processo	292	10	estagiario_id	13	\N	2018-06-05 12:23:14	2018-06-05 12:23:14
1603	App\\Data\\Models\\Processo	292	10	assessor_id	\N	24	2018-06-05 12:23:14	2018-06-05 12:23:14
1604	App\\Data\\Models\\Processo	418	16	created_at	\N	2018-06-05 14:31:37	2018-06-05 14:31:37	2018-06-05 14:31:37
1605	App\\Data\\Models\\User	27	27	remember_token	qhilB6FhevLaa8QyI9JmwyRWFNy6grIeE6iXdzS9X2RJmOiChYq0qHL3khFZ	ByC2mJiC8Aji3zi8ubLCEDggqwDXkIUtutOBG7vbNO86iYomDZFAgNef1b3a	2018-06-05 18:03:36	2018-06-05 18:03:36
1606	App\\Data\\Models\\Processo	279	11	numero_judicial	025168-53.2010.8.19.0000	0053398-08.2010.8.19.0000	2018-06-06 11:17:06	2018-06-06 11:17:06
1607	App\\Data\\Models\\Processo	279	11	relator_id	74	79	2018-06-06 11:17:06	2018-06-06 11:17:06
1608	App\\Data\\Models\\Processo	419	35	created_at	\N	2018-06-06 11:44:12	2018-06-06 11:44:12	2018-06-06 11:44:12
1609	App\\Data\\Models\\Processo	345	11	assessor_id	\N	23	2018-06-06 11:46:38	2018-06-06 11:46:38
1610	App\\Data\\Models\\Processo	345	11	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 11:46:38	2018-06-06 11:46:38
1611	App\\Data\\Models\\Processo	373	10	assessor_id	\N	23	2018-06-06 17:02:21	2018-06-06 17:02:21
1612	App\\Data\\Models\\Processo	366	10	assessor_id	\N	23	2018-06-06 17:02:54	2018-06-06 17:02:54
1613	App\\Data\\Models\\Processo	366	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:02:54	2018-06-06 17:02:54
1614	App\\Data\\Models\\Processo	356	10	assessor_id	\N	23	2018-06-06 17:03:12	2018-06-06 17:03:12
1615	App\\Data\\Models\\Processo	356	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:03:12	2018-06-06 17:03:12
1616	App\\Data\\Models\\Processo	352	10	assessor_id	\N	23	2018-06-06 17:03:31	2018-06-06 17:03:31
1617	App\\Data\\Models\\Processo	352	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:03:31	2018-06-06 17:03:31
1618	App\\Data\\Models\\Processo	340	10	assessor_id	\N	23	2018-06-06 17:03:49	2018-06-06 17:03:49
1619	App\\Data\\Models\\Processo	340	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:03:49	2018-06-06 17:03:49
1620	App\\Data\\Models\\Processo	346	10	assessor_id	\N	23	2018-06-06 17:04:20	2018-06-06 17:04:20
1621	App\\Data\\Models\\Processo	346	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:04:20	2018-06-06 17:04:20
1622	App\\Data\\Models\\Processo	320	10	assessor_id	\N	23	2018-06-06 17:04:50	2018-06-06 17:04:50
1623	App\\Data\\Models\\Processo	320	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:04:50	2018-06-06 17:04:50
1624	App\\Data\\Models\\Processo	301	10	assessor_id	\N	23	2018-06-06 17:06:36	2018-06-06 17:06:36
1625	App\\Data\\Models\\Processo	301	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:06:36	2018-06-06 17:06:36
1626	App\\Data\\Models\\Processo	294	10	assessor_id	\N	23	2018-06-06 17:07:17	2018-06-06 17:07:17
1627	App\\Data\\Models\\Processo	294	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:07:17	2018-06-06 17:07:17
1628	App\\Data\\Models\\Processo	250	10	assessor_id	\N	23	2018-06-06 17:07:39	2018-06-06 17:07:39
1629	App\\Data\\Models\\Processo	250	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:07:39	2018-06-06 17:07:39
1630	App\\Data\\Models\\Processo	219	10	assessor_id	\N	24	2018-06-06 17:08:59	2018-06-06 17:08:59
1631	App\\Data\\Models\\Processo	219	10	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-06-06 17:08:59	2018-06-06 17:08:59
1632	App\\Data\\Models\\Processo	228	10	assessor_id	\N	23	2018-06-06 17:09:20	2018-06-06 17:09:20
1633	App\\Data\\Models\\Processo	228	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:09:20	2018-06-06 17:09:20
1634	App\\Data\\Models\\Processo	182	10	assessor_id	\N	23	2018-06-06 17:09:40	2018-06-06 17:09:40
1635	App\\Data\\Models\\Processo	182	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:09:40	2018-06-06 17:09:40
1636	App\\Data\\Models\\Processo	165	10	assessor_id	\N	24	2018-06-06 17:10:15	2018-06-06 17:10:15
1637	App\\Data\\Models\\Processo	165	10	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-06-06 17:10:15	2018-06-06 17:10:15
1638	App\\Data\\Models\\Processo	157	10	assessor_id	\N	23	2018-06-06 17:11:06	2018-06-06 17:11:06
1639	App\\Data\\Models\\Processo	157	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:11:06	2018-06-06 17:11:06
1640	App\\Data\\Models\\Processo	144	10	assessor_id	\N	24	2018-06-06 17:13:24	2018-06-06 17:13:24
1641	App\\Data\\Models\\Processo	144	10	observacao	Estagiário: Sávia Midiã, 	Estagiário: Sávia Midiã,	2018-06-06 17:13:24	2018-06-06 17:13:24
1642	App\\Data\\Models\\Processo	35	10	assessor_id	\N	23	2018-06-06 17:16:37	2018-06-06 17:16:37
1643	App\\Data\\Models\\Processo	35	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:16:37	2018-06-06 17:16:37
1644	App\\Data\\Models\\Processo	50	10	assessor_id	\N	23	2018-06-06 17:16:57	2018-06-06 17:16:57
1645	App\\Data\\Models\\Processo	50	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:16:57	2018-06-06 17:16:57
1646	App\\Data\\Models\\Processo	98	10	assessor_id	\N	23	2018-06-06 17:17:19	2018-06-06 17:17:19
1647	App\\Data\\Models\\Processo	98	10	observacao	Estagiário: Luan Moreira, 	Estagiário: Luan Moreira,	2018-06-06 17:17:19	2018-06-06 17:17:19
1648	App\\Data\\Models\\Processo	353	11	numero_judicial	48165-59.2012.8.19.0000	0048165-59.2012.8.19.0000	2018-06-08 11:24:34	2018-06-08 11:24:34
1649	App\\Data\\Models\\Processo	408	11	estagiario_id	10	35	2018-06-11 10:29:14	2018-06-11 10:29:14
1650	App\\Data\\Models\\Processo	407	11	estagiario_id	10	35	2018-06-11 10:29:57	2018-06-11 10:29:57
1651	App\\Data\\Models\\Processo	12	11	estagiario_id	10	35	2018-06-11 10:31:49	2018-06-11 10:31:49
1652	App\\Data\\Models\\Processo	405	11	estagiario_id	10	35	2018-06-11 10:32:21	2018-06-11 10:32:21
1653	App\\Data\\Models\\Processo	299	11	estagiario_id	10	35	2018-06-11 10:32:42	2018-06-11 10:32:42
1654	App\\Data\\Models\\Processo	401	11	estagiario_id	10	35	2018-06-11 10:33:05	2018-06-11 10:33:05
1655	App\\Data\\Models\\Processo	244	11	estagiario_id	10	35	2018-06-11 10:33:25	2018-06-11 10:33:25
1656	App\\Data\\Models\\Processo	237	11	estagiario_id	10	35	2018-06-11 10:33:47	2018-06-11 10:33:47
1657	App\\Data\\Models\\Processo	390	11	estagiario_id	10	35	2018-06-11 10:36:01	2018-06-11 10:36:01
1658	App\\Data\\Models\\Processo	3	11	estagiario_id	10	35	2018-06-11 10:36:25	2018-06-11 10:36:25
1659	App\\Data\\Models\\Processo	357	11	estagiario_id	10	35	2018-06-11 10:36:44	2018-06-11 10:36:44
1660	App\\Data\\Models\\Processo	350	11	estagiario_id	10	35	2018-06-11 10:37:11	2018-06-11 10:37:11
1661	App\\Data\\Models\\Processo	342	11	estagiario_id	10	35	2018-06-11 10:37:32	2018-06-11 10:37:32
1662	App\\Data\\Models\\Processo	341	11	estagiario_id	10	35	2018-06-11 10:38:05	2018-06-11 10:38:05
1663	App\\Data\\Models\\Processo	317	11	estagiario_id	10	35	2018-06-11 10:38:31	2018-06-11 10:38:31
1664	App\\Data\\Models\\Processo	295	11	estagiario_id	10	35	2018-06-11 10:38:53	2018-06-11 10:38:53
1665	App\\Data\\Models\\Processo	314	11	estagiario_id	10	35	2018-06-11 10:39:33	2018-06-11 10:39:33
1666	App\\Data\\Models\\Processo	308	11	estagiario_id	10	35	2018-06-11 10:40:05	2018-06-11 10:40:05
1667	App\\Data\\Models\\Processo	289	11	estagiario_id	10	35	2018-06-11 10:40:33	2018-06-11 10:40:33
1668	App\\Data\\Models\\Processo	281	11	estagiario_id	10	35	2018-06-11 10:41:00	2018-06-11 10:41:00
1669	App\\Data\\Models\\Processo	251	11	estagiario_id	10	35	2018-06-11 10:41:38	2018-06-11 10:41:38
1670	App\\Data\\Models\\Processo	261	11	estagiario_id	10	35	2018-06-11 10:42:26	2018-06-11 10:42:26
1671	App\\Data\\Models\\Processo	214	11	estagiario_id	10	35	2018-06-11 10:42:46	2018-06-11 10:42:46
1672	App\\Data\\Models\\Processo	238	11	estagiario_id	10	35	2018-06-11 10:43:09	2018-06-11 10:43:09
1673	App\\Data\\Models\\Processo	239	11	estagiario_id	10	35	2018-06-11 10:43:27	2018-06-11 10:43:27
1674	App\\Data\\Models\\Processo	196	11	estagiario_id	10	35	2018-06-11 10:43:50	2018-06-11 10:43:50
1675	App\\Data\\Models\\Processo	185	11	estagiario_id	10	35	2018-06-11 10:44:14	2018-06-11 10:44:14
1676	App\\Data\\Models\\Processo	170	11	estagiario_id	10	35	2018-06-11 10:44:38	2018-06-11 10:44:38
1677	App\\Data\\Models\\User	31	11	disabled_by_id	\N	11	2018-06-11 10:45:23	2018-06-11 10:45:23
1678	App\\Data\\Models\\User	31	11	disabled_at	\N	2018-06-11 10:45:23	2018-06-11 10:45:23	2018-06-11 10:45:23
1679	App\\Data\\Models\\Processo	162	11	estagiario_id	10	35	2018-06-11 10:46:16	2018-06-11 10:46:16
1680	App\\Data\\Models\\Processo	136	11	estagiario_id	10	35	2018-06-11 10:46:36	2018-06-11 10:46:36
1681	App\\Data\\Models\\Processo	139	11	estagiario_id	10	35	2018-06-11 10:46:59	2018-06-11 10:46:59
1682	App\\Data\\Models\\Processo	114	11	estagiario_id	10	35	2018-06-11 10:47:27	2018-06-11 10:47:27
1683	App\\Data\\Models\\Processo	112	11	estagiario_id	10	35	2018-06-11 10:47:54	2018-06-11 10:47:54
1684	App\\Data\\Models\\Processo	86	11	estagiario_id	10	35	2018-06-11 10:48:21	2018-06-11 10:48:21
1685	App\\Data\\Models\\Processo	63	11	estagiario_id	10	35	2018-06-11 10:48:47	2018-06-11 10:48:47
1686	App\\Data\\Models\\Processo	62	11	estagiario_id	10	35	2018-06-11 10:49:09	2018-06-11 10:49:09
1687	App\\Data\\Models\\Processo	57	11	estagiario_id	10	35	2018-06-11 10:49:47	2018-06-11 10:49:47
1688	App\\Data\\Models\\Processo	55	11	estagiario_id	10	35	2018-06-11 10:50:12	2018-06-11 10:50:12
1689	App\\Data\\Models\\Processo	54	11	estagiario_id	10	35	2018-06-11 10:50:33	2018-06-11 10:50:33
1690	App\\Data\\Models\\Processo	45	11	estagiario_id	10	35	2018-06-11 10:50:53	2018-06-11 10:50:53
1691	App\\Data\\Models\\Processo	51	11	estagiario_id	10	35	2018-06-11 10:51:12	2018-06-11 10:51:12
1692	App\\Data\\Models\\Processo	53	11	estagiario_id	10	35	2018-06-11 11:00:19	2018-06-11 11:00:19
1693	App\\Data\\Models\\Processo	5	11	estagiario_id	10	35	2018-06-11 11:00:44	2018-06-11 11:00:44
1694	App\\Data\\Models\\Processo	6	11	estagiario_id	10	35	2018-06-11 11:01:06	2018-06-11 11:01:06
1695	App\\Data\\Models\\Processo	11	11	objeto	Arts. 001 º e 002 º parte final, 003 º e incisos , 004 º , 005 º, 006 º , 007 º , 008 º , 009 º , 010 e 011 da Lei Complementar 087 /97, bem como dos arts. 008 º , 009 º , 010 , 011 , 012 , 013 , 014 , 015 , 016 , 017 , 018 , 019 , 020 , 021 da Lei Orgânica 2869 /97	Arts. 1º e 2º parte final, 3º e incisos , 4º, 5º, 6º, 7º, 8º, 9º, 10 e 11 da Lei Complementar 087 /97, bem como dos arts. 8 º, 9 º, 10 , 11 , 12 , 13 , 14 , 15 , 16 , 17 , 18 , 19 , 20 , 21 da Lei Orgânica 2869 /97	2018-06-11 11:04:30	2018-06-11 11:04:30
1696	App\\Data\\Models\\Processo	11	11	estagiario_id	10	35	2018-06-11 11:04:30	2018-06-11 11:04:30
1697	App\\Data\\Models\\Processo	13	11	estagiario_id	10	35	2018-06-11 11:04:53	2018-06-11 11:04:53
1698	App\\Data\\Models\\Processo	11	11	objeto	Arts. 1º e 2º parte final, 3º e incisos , 4º, 5º, 6º, 7º, 8º, 9º, 10 e 11 da Lei Complementar 087 /97, bem como dos arts. 8 º, 9 º, 10 , 11 , 12 , 13 , 14 , 15 , 16 , 17 , 18 , 19 , 20 , 21 da Lei Orgânica 2869 /97	Arts. 1º, 2º parte final, 3º e incisos , 4º, 5º, 6º, 7º, 8º, 9º, 10 e 11 da Lei Complementar 087 /97, bem como dos arts. 8º, 9º, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21 da Lei Orgânica 2869 /97	2018-06-11 11:06:32	2018-06-11 11:06:32
1699	App\\Data\\Models\\User	27	27	remember_token	ByC2mJiC8Aji3zi8ubLCEDggqwDXkIUtutOBG7vbNO86iYomDZFAgNef1b3a	xDJ0zucYHr3QAXuOakoFEdTmbMmeOFNnp5o8A0GcAHDN3u322MSmEBjtbLTW	2018-06-11 16:48:46	2018-06-11 16:48:46
1700	App\\Data\\Models\\Processo	283	11	link	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.237025-9	2018-06-13 10:19:25	2018-06-13 10:19:25
1701	App\\Data\\Models\\Processo	407	11	estagiario_id	35	13	2018-06-13 12:48:21	2018-06-13 12:48:21
1702	App\\Data\\Models\\Processo	390	25	numero_alerj	\N	7238/2018	2018-06-14 17:21:57	2018-06-14 17:21:57
1703	App\\Data\\Models\\Processo	285	11	link	\N	http://www4.tjrj.jus.br/consultaProcessoWebV2/consultaProc.do?v=2&FLAGNOME=&back=1&tipoConsulta=publica&numProcesso=2017.001.242848-1	2018-06-15 10:55:59	2018-06-15 10:55:59
1704	App\\Data\\Models\\Processo	257	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201700700340	2018-06-15 11:18:31	2018-06-15 11:18:31
1705	App\\Data\\Models\\Processo	109	11	numero_alerj	Não recebemos ofício	1450/2018	2018-06-18 11:23:27	2018-06-18 11:23:27
1706	App\\Data\\Models\\Processo	109	11	link	\N	http://www4.tjrj.jus.br/ejud/ConsultaProcesso.aspx?N=201800700021	2018-06-18 11:23:50	2018-06-18 11:23:50
1707	App\\Data\\Models\\Processo	407	27	numero_alerj	Sem ofício	8140/2018	2018-06-18 16:00:29	2018-06-18 16:00:29
1708	App\\Data\\Models\\Processo	407	27	procurador_id	\N	2	2018-06-18 16:01:23	2018-06-18 16:01:23
\.


--
-- Name: revisions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.revisions_id_seq', 1708, true);


--
-- Data for Name: taggables; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.taggables (tag_id, taggable_id, taggable_type) FROM stdin;
\.


--
-- Data for Name: tags; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.tags (id, name, slug, type, order_column, created_at, updated_at) FROM stdin;
\.


--
-- Name: tags_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.tags_id_seq', 1, false);


--
-- Data for Name: tipos_andamentos; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.tipos_andamentos (id, nome, created_at, updated_at) FROM stdin;
1	Prazo	\N	\N
\.


--
-- Name: tipos_andamentos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.tipos_andamentos_id_seq', 1, false);


--
-- Data for Name: tipos_entradas; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.tipos_entradas (id, nome, created_at, updated_at) FROM stdin;
1	Manual	\N	\N
2	Automatico	\N	\N
\.


--
-- Name: tipos_entradas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.tipos_entradas_id_seq', 1, false);


--
-- Data for Name: tipos_juizes; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.tipos_juizes (id, nome, created_at, updated_at) FROM stdin;
1	JUIZ	2018-02-28 17:47:00	2018-02-28 17:47:00
2	DESEMBARGADOR	2018-02-28 17:47:00	2018-02-28 17:47:00
3	N/C	2018-02-28 17:47:01	2018-02-28 17:47:01
4	MINISTRO	2018-02-28 17:47:04	2018-02-28 17:47:04
\.


--
-- Name: tipos_juizes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.tipos_juizes_id_seq', 4, true);


--
-- Data for Name: tipos_prazos; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.tipos_prazos (id, nome, created_at, updated_at) FROM stdin;
1	Audiência	\N	\N
\.


--
-- Name: tipos_prazos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.tipos_prazos_id_seq', 1, false);


--
-- Data for Name: tipos_usuarios; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.tipos_usuarios (id, nome, created_at, updated_at) FROM stdin;
1	Procurador	2018-02-08 20:21:37	2018-02-08 20:21:37
2	Estagiario	2018-02-08 20:21:37	2018-02-08 20:21:37
3	Assessor	2018-02-08 20:21:37	2018-02-08 20:21:37
\.


--
-- Name: tipos_usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.tipos_usuarios_id_seq', 3, true);


--
-- Data for Name: tribunais; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.tribunais (id, nome, url_api, created_at, updated_at, abreviacao) FROM stdin;
1	SUPERIOR TRIBUNAL FEDERAL	\N	2018-03-01 17:56:38	2018-03-01 17:56:38	STF
2	TRIBUNAL DE JUSTIÇA DO ESTADO DO RIO DE JANEIRO	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	TJRJ
3	TRIBUNAL REGIONAL DO TRABALHO	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	TRT
4	TRIBUNAL REGIONAL FEDERAL	\N	2018-03-01 17:56:41	2018-03-01 17:56:41	TRF
5	JUSTIÇA FEDERAL DO RIO DE JANEIRO	\N	2018-03-01 17:56:42	2018-03-01 17:56:42	JFRJ
6	SUPERIOR TRIBUNAL DE JUSTIÇA	\N	2018-03-01 17:56:50	2018-03-01 17:56:50	STJ
\.


--
-- Name: tribunais_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.tribunais_id_seq', 6, true);


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: forge
--

COPY public.users (id, name, email, password, remember_token, created_at, updated_at, username, user_type_id, disabled_by_id, disabled_at) FROM stdin;
1	Bruno Barata Magalhaes	bruno82@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	bruno82	1	\N	\N
2	Denise Setsuko Okada Ahmed	dahmed@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	dahmed	1	\N	\N
3	Fatima Maria Amaral	famaral@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	famaral	1	\N	\N
4	Hariman Antonio Dias de Araujo	haraujo@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	haraujo	1	\N	\N
5	Juliette Stohler Ferreira	jstohler@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	jstohler	1	\N	\N
6	Renata Queiroz Galvao	ramantino@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	ramantino	1	\N	\N
7	Sergio Eduardo Leal Carneiro	scarneir@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	scarneir	1	\N	\N
9	Deborah Leal de Souza Magalhaes	dmagalhães@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	dmagalhães	2	\N	\N
12	Luis Felipe Rodrigues Paranhos	lparanhos@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	lparanhos	2	\N	\N
13	Luma Ger Bessa da Silva	lbessa@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	lbessa	2	\N	\N
15	Priscilla Pinto Gomez Rodriguez Moura	prmoura@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	prmoura	2	\N	\N
16	Sergio Raphael de Matos Bittencourt Lopes	sblopes@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	sblopes	2	\N	\N
17	Bruna Dias Filgueras de Moraes	bmoraes@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	bmoraes	3	\N	\N
18	Rosa Daniele Ferreira de Oliveira	rdoliveira@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	rdoliveira	3	\N	\N
19	Marianna Pinto Falcao Rosa	mfalcão@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	mfalcão	3	\N	\N
20	Nathalia Ferreira da Silva	nfsilva@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	nfsilva	3	\N	\N
21	Priscila Seixas Silveira Costa	pscosta@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	pscosta	3	\N	\N
22	Rosana Colafranceschi Durante	rdurante@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	rdurante	3	\N	\N
23	Luan Moreira da Fonseca Carnevale	lcarnevale@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	lcarnevale	3	\N	\N
24	Savia Midia Florindo Pereira de Brito	sflorindo@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	sflorindo	3	\N	\N
25	Luciana Felicio Rodrigues	lurodrigues@alerj.rj.gov.br	-	\N	2018-03-01 17:56:34	2018-03-01 17:56:34	lurodrigues	3	\N	\N
29	afdsilva	afdsilva@alerj.rj.gov.br	$2y$10$Kh1m4X/eoeQGZ1ugZrV4A.2N4odNHTkkUcWLvaW1eqYxXKEMc6g7q	XScyA6H98KNRAUPRBzDsoNXJ5ywGZ0lRaJ5a3jbGLlmUTEwQnYsavtp6SSiA	2018-03-01 17:58:06	2018-03-01 17:58:06	afdsilva	2	\N	\N
36	transporteop	transporteop@alerj.rj.gov.br	$2y$10$O3aVZrs7qWAAWhs8Cun1n.trpO9XJ1Z8ztcN30G9Hj4AG11MpV9dW	J3gQfxYSchXTFGW2KHjCRYndNu4sK7kLIt4EH95aQPo0G5Z0jpSCaNAhUnyS	2018-05-09 15:03:28	2018-05-09 15:03:28	transporteop	2	\N	\N
27	Teresa Cristina Peixoto Lage Savino	csavino@alerj.rj.gov.br	-	xDJ0zucYHr3QAXuOakoFEdTmbMmeOFNnp5o8A0GcAHDN3u322MSmEBjtbLTW	2018-03-01 17:56:34	2018-03-01 18:04:09	csavino	3	\N	\N
30	Afdsilva	Afdsilva@alerj.rj.gov.br	$2y$10$bpD2CqpgJk2dShZcRa/wOuB5wyhaLQLSUdFNhKBtWO1KLhPGZUQWS	zAmnNMnKTaorvSqDxisUATrbxBCJX4vvByLpsVSd2zX7qWv6gaBn1ce9tfRH	2018-03-01 18:06:50	2018-03-01 18:06:50	Afdsilva	2	\N	\N
11	Isabela Maria Marinho de Souza	imarinho@alerj.rj.gov.br	-	CdSvOslfPzELzyNcXWZBfZUbaFNXddAlHaq4Yj89eVd1T3FvJVGVsSGNc2bz	2018-03-01 17:56:34	2018-03-01 17:56:34	imarinho	2	\N	\N
32	ovalenca	ovalenca@alerj.rj.gov.br	$2y$10$mq1yG6OMdOUb.cuTwTJdgOgDLgdj5gxe4UmrjryI4d4GezzScCzm.	\N	2018-03-07 11:43:12	2018-03-07 11:43:12	ovalenca	2	\N	\N
33	Bmasquio	Bmasquio@alerj.rj.gov.br	$2y$10$4PEw/YVKBwG8IkdJIbCUY.lKU5oJ0hzl13d24vRTzyApYVH0zhCI2	jxZ4ClFdQWorEYaG0pmfkcPN7jpMpExHNcLKy8DMMgY4NozbnCPVHsuIJC4R	2018-03-10 14:10:00	2018-03-10 14:10:00	Bmasquio	2	\N	\N
37	vmaranhao	vmaranhao@alerj.rj.gov.br	$2y$10$exJTGu9WvWoe.9JDhU88O.QgGDUMqA49HawN99XL6Fiinjd4MYAau	\N	2018-06-14 16:57:29	2018-06-14 16:57:29	vmaranhao	2	\N	\N
8	Daniel de Souza Soares	dssoares@alerj.rj.gov.br	-	M2VhonvvJJiPry4SfYoSxFSIMgDiUxb0z2LBNgw1iwBg9bvngxFceRy50zlO	2018-03-01 17:56:34	2018-03-01 17:56:34	dssoares	2	\N	\N
35	fpalmeida	fpalmeida@alerj.rj.gov.br	$2y$10$YUjiJ/f4ZFeXlAZc9iozgOLQnoDvGW.6fIxFGO9bTX5ABRzwa43vC	\N	2018-04-24 12:28:02	2018-04-24 12:28:02	fpalmeida	2	\N	\N
10	Ingrid Mello Abreu Coimbra	icoimbra@alerj.rj.gov.br	-	5F6Zq6oQIFZe5ze95sWh5aE5uxxu2ngDb3Ddlw5Tp1pHM9NWhuJkCr1dXTUj	2018-03-01 17:56:34	2018-03-01 17:56:34	icoimbra	2	\N	\N
34	bmasquio	bmasquio@alerj.rj.gov.br	$2y$10$Jnq33mpj4XeXAOOvFve3eOPVECrjtNT2kxfpDCvCUHE0EwoheArwG	\N	2018-03-21 13:15:46	2018-03-21 13:15:46	bmasquio	2	\N	\N
31	dmagalhaes	dmagalhaes@alerj.rj.gov.br	$2y$10$Ei2eiCBERebcKwFuns0xLOO.QViwStJgdN5Zr82HaLX89Qg94fD8S	\N	2018-03-02 12:10:11	2018-06-11 10:45:23	dmagalhaes	2	11	2018-06-11 10:45:23
26	Andre Luiz Barboza da Silva	albsilva@alerj.rj.gov.br	-	Ns1OYiTUuCJREUuZNobG2Ij3F1K7V5IGCLzaDDHplkGexpBkaykiTLQ2d875	2018-03-01 17:56:34	2018-03-01 17:56:34	albsilva	3	\N	\N
14	Mariana Oliveira dos Santos	mosantos@alerj.rj.gov.br	-	0JgsBrPYkkvQCJzzuY9DeXPgpYhboC6B5VRIObK3xfkwOGjmsTr3PaKhyQHj	2018-03-01 17:56:34	2018-03-01 17:56:34	mosantos	2	\N	\N
28	afaria	afaria@alerj.rj.gov.br	$2y$10$/GtrOfYnOvxn6ISCdX.DCuiHCtaE3gBUCZJ9QBLogIDGRodCkBHDK	8RtA5ZZDhotaFlISxazlg4m0NKEbyahuOKm42Lua4n5PsIpHAQdjzE9tVypi	2018-03-01 17:57:24	2018-03-01 17:57:24	afaria	2	\N	\N
\.


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: forge
--

SELECT pg_catalog.setval('public.users_id_seq', 37, true);


--
-- Name: acoes_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.acoes
    ADD CONSTRAINT acoes_pkey PRIMARY KEY (id);


--
-- Name: andamentos_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.andamentos
    ADD CONSTRAINT andamentos_pkey PRIMARY KEY (id);


--
-- Name: apensos_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.apensos
    ADD CONSTRAINT apensos_pkey PRIMARY KEY (id);


--
-- Name: juizes_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.juizes
    ADD CONSTRAINT juizes_pkey PRIMARY KEY (id);


--
-- Name: leis_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.leis
    ADD CONSTRAINT leis_pkey PRIMARY KEY (id);


--
-- Name: meios_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.meios
    ADD CONSTRAINT meios_pkey PRIMARY KEY (id);


--
-- Name: migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: processos_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.processos
    ADD CONSTRAINT processos_pkey PRIMARY KEY (id);


--
-- Name: revisions_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.revisions
    ADD CONSTRAINT revisions_pkey PRIMARY KEY (id);


--
-- Name: tags_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tags
    ADD CONSTRAINT tags_pkey PRIMARY KEY (id);


--
-- Name: tipos_andamentos_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_andamentos
    ADD CONSTRAINT tipos_andamentos_pkey PRIMARY KEY (id);


--
-- Name: tipos_entradas_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_entradas
    ADD CONSTRAINT tipos_entradas_pkey PRIMARY KEY (id);


--
-- Name: tipos_juizes_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_juizes
    ADD CONSTRAINT tipos_juizes_pkey PRIMARY KEY (id);


--
-- Name: tipos_prazos_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_prazos
    ADD CONSTRAINT tipos_prazos_pkey PRIMARY KEY (id);


--
-- Name: tipos_usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tipos_usuarios
    ADD CONSTRAINT tipos_usuarios_pkey PRIMARY KEY (id);


--
-- Name: tribunais_abreviacao_unique; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tribunais
    ADD CONSTRAINT tribunais_abreviacao_unique UNIQUE (abreviacao);


--
-- Name: tribunais_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.tribunais
    ADD CONSTRAINT tribunais_pkey PRIMARY KEY (id);


--
-- Name: users_email_unique; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users_pkey; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: users_username_unique; Type: CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_username_unique UNIQUE (username);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: forge
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- Name: revisions_revisionable_id_revisionable_type_index; Type: INDEX; Schema: public; Owner: forge
--

CREATE INDEX revisions_revisionable_id_revisionable_type_index ON public.revisions USING btree (revisionable_id, revisionable_type);


--
-- Name: taggables_tag_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: forge
--

ALTER TABLE ONLY public.taggables
    ADD CONSTRAINT taggables_tag_id_foreign FOREIGN KEY (tag_id) REFERENCES public.tags(id) ON DELETE CASCADE;


--
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

