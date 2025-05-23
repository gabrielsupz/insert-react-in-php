CREATE TABLE partido (id BIGINT, nome TEXT NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE TABLE vereador (id BIGINT, nome TEXT NOT NULL, telefone TEXT, email TEXT, numero_votos BIGINT, partido_id BIGINT NOT NULL, created_at TIMESTAMP NOT NULL, updated_at TIMESTAMP NOT NULL, PRIMARY KEY(id));
CREATE SEQUENCE partido_id_seq INCREMENT 1 START 1;
CREATE SEQUENCE vereador_id_seq INCREMENT 1 START 1;
ALTER TABLE vereador ADD CONSTRAINT vereador_partido_id_partido_id FOREIGN KEY (partido_id) REFERENCES partido(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
