-- ###################################################################
-- # Application : SQL script
-- # File        : create_achat.sql
-- # Revision    : decembre 2020 (Guillaume Delamotte)
-- # Author      : Guillaume Delamotte
-- # Function    : Create the achat relation
-- ###################################################################

-- If table already exists
DROP TABLE IF EXISTS achat;

CREATE TABLE achat(
    n_achat INTEGER,
    montant_achat DECIMAL,
    date_achat DATETIME,
    client INTEGER,
    CONSTRAINT pk_achat PRIMARY KEY(n_achat),
    FOREIGN KEY (client) REFERENCES client(n_client)
);