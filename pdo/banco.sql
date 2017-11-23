--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.4
-- Dumped by pg_dump version 9.6.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: tb_alunos; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE tb_alunos (
    id integer NOT NULL,
    nome character varying(150) NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(25) NOT NULL,
    cpf character varying(11) NOT NULL,
    rg character varying(20),
    dt_nasc date
);


ALTER TABLE tb_alunos OWNER TO lucas;

--
-- Name: tb_alunos_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE tb_alunos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tb_alunos_id_seq OWNER TO lucas;

--
-- Name: tb_alunos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE tb_alunos_id_seq OWNED BY tb_alunos.id;


--
-- Name: tb_cursos; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE tb_cursos (
    id integer NOT NULL,
    nome character varying,
    tipo character varying,
    carga_horaria integer,
    requisitos text
);


ALTER TABLE tb_cursos OWNER TO lucas;

--
-- Name: tb_cursos_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE tb_cursos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tb_cursos_id_seq OWNER TO lucas;

--
-- Name: tb_cursos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE tb_cursos_id_seq OWNED BY tb_cursos.id;


--
-- Name: tb_matriculas; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE tb_matriculas (
    id integer NOT NULL,
    aluno_id integer,
    turma_id integer,
    prova1 double precision,
    prova2 double precision,
    recuperacao double precision,
    frequencia integer
);


ALTER TABLE tb_matriculas OWNER TO lucas;

--
-- Name: tb_matriculas_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE tb_matriculas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tb_matriculas_id_seq OWNER TO lucas;

--
-- Name: tb_matriculas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE tb_matriculas_id_seq OWNED BY tb_matriculas.id;


--
-- Name: tb_periodos; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE tb_periodos (
    id integer NOT NULL,
    descricao character varying
);


ALTER TABLE tb_periodos OWNER TO lucas;

--
-- Name: tb_periodos_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE tb_periodos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tb_periodos_id_seq OWNER TO lucas;

--
-- Name: tb_periodos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE tb_periodos_id_seq OWNED BY tb_periodos.id;


--
-- Name: tb_turmas; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE tb_turmas (
    id integer NOT NULL,
    curso_id integer,
    periodo_id integer,
    instrutor_id integer
);


ALTER TABLE tb_turmas OWNER TO lucas;

--
-- Name: tb_turmas_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE tb_turmas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tb_turmas_id_seq OWNER TO lucas;

--
-- Name: tb_turmas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE tb_turmas_id_seq OWNED BY tb_turmas.id;


--
-- Name: teste; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE teste (
    id integer NOT NULL,
    turma_id integer
);


ALTER TABLE teste OWNER TO lucas;

--
-- Name: teste_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE teste_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE teste_id_seq OWNER TO lucas;

--
-- Name: teste_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE teste_id_seq OWNED BY teste.id;


--
-- Name: tb_alunos id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_alunos ALTER COLUMN id SET DEFAULT nextval('tb_alunos_id_seq'::regclass);


--
-- Name: tb_cursos id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_cursos ALTER COLUMN id SET DEFAULT nextval('tb_cursos_id_seq'::regclass);


--
-- Name: tb_matriculas id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_matriculas ALTER COLUMN id SET DEFAULT nextval('tb_matriculas_id_seq'::regclass);


--
-- Name: tb_periodos id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_periodos ALTER COLUMN id SET DEFAULT nextval('tb_periodos_id_seq'::regclass);


--
-- Name: tb_turmas id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_turmas ALTER COLUMN id SET DEFAULT nextval('tb_turmas_id_seq'::regclass);


--
-- Name: teste id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY teste ALTER COLUMN id SET DEFAULT nextval('teste_id_seq'::regclass);


--
-- Data for Name: tb_alunos; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY tb_alunos (id, nome, email, senha, cpf, rg, dt_nasc) FROM stdin;
1	Lucas César Marques	lucasmarques73@hotmail.com	123	10815386605	123456	\N
2	Lucas César Marques	lucasmarques73@hotmail.com	123	10815386605	123456	\N
3	Lucas César Marques	lucasmarques73@hotmail.com	123	10815386605	123456	\N
4	joão da Silva	js@gmail.com	123	1231321	1231321	\N
6	Lucas	lucas@lucas	123	11	\N	\N
\.


--
-- Name: tb_alunos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('tb_alunos_id_seq', 6, true);


--
-- Data for Name: tb_cursos; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY tb_cursos (id, nome, tipo, carga_horaria, requisitos) FROM stdin;
5	PHP	Presencial	80	Lógica de Programação.
7	Java	Presencial	40	Requisitos do Curso
8	Python	Presencial	40	Requisitos do Curso
6	Java	Presencial	40	Lógica de Programação
\.


--
-- Name: tb_cursos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('tb_cursos_id_seq', 8, true);


--
-- Data for Name: tb_matriculas; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY tb_matriculas (id, aluno_id, turma_id, prova1, prova2, recuperacao, frequencia) FROM stdin;
\.


--
-- Name: tb_matriculas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('tb_matriculas_id_seq', 1, false);


--
-- Data for Name: tb_periodos; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY tb_periodos (id, descricao) FROM stdin;
1	noturno
3	matutino
4	sabado
5	domingo
6	diurno
\.


--
-- Name: tb_periodos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('tb_periodos_id_seq', 6, true);


--
-- Data for Name: tb_turmas; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY tb_turmas (id, curso_id, periodo_id, instrutor_id) FROM stdin;
2	5	1	1
1	7	4	2
3	8	1	3
\.


--
-- Name: tb_turmas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('tb_turmas_id_seq', 3, true);


--
-- Data for Name: teste; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY teste (id, turma_id) FROM stdin;
\.


--
-- Name: teste_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('teste_id_seq', 1, false);


--
-- Name: tb_alunos tb_alunos_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_alunos
    ADD CONSTRAINT tb_alunos_pkey PRIMARY KEY (id);


--
-- Name: tb_cursos tb_cursos_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_cursos
    ADD CONSTRAINT tb_cursos_pkey PRIMARY KEY (id);


--
-- Name: tb_matriculas tb_matriculas_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_matriculas
    ADD CONSTRAINT tb_matriculas_pkey PRIMARY KEY (id);


--
-- Name: tb_periodos tb_periodos_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_periodos
    ADD CONSTRAINT tb_periodos_pkey PRIMARY KEY (id);


--
-- Name: tb_turmas tb_turmas_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_turmas
    ADD CONSTRAINT tb_turmas_pkey PRIMARY KEY (id);


--
-- Name: teste teste_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY teste
    ADD CONSTRAINT teste_pkey PRIMARY KEY (id);


--
-- Name: tb_matriculas tb_matriculas_aluno_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_matriculas
    ADD CONSTRAINT tb_matriculas_aluno_id_fkey FOREIGN KEY (aluno_id) REFERENCES tb_alunos(id);


--
-- Name: tb_matriculas tb_matriculas_turma_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_matriculas
    ADD CONSTRAINT tb_matriculas_turma_id_fkey FOREIGN KEY (turma_id) REFERENCES tb_turmas(id);


--
-- Name: tb_turmas tb_turmas_curso_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_turmas
    ADD CONSTRAINT tb_turmas_curso_id_fkey FOREIGN KEY (curso_id) REFERENCES tb_cursos(id);


--
-- Name: tb_turmas tb_turmas_periodo_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY tb_turmas
    ADD CONSTRAINT tb_turmas_periodo_id_fkey FOREIGN KEY (periodo_id) REFERENCES tb_periodos(id);


--
-- Name: teste teste_turma_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY teste
    ADD CONSTRAINT teste_turma_id_fkey FOREIGN KEY (turma_id) REFERENCES tb_periodos(id);


--
-- PostgreSQL database dump complete
--

