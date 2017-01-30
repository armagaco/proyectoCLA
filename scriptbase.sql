﻿CREATE SCHEMA IF NOT EXISTS ControlAgricola;

DROP SCHEMA IF EXISTS controlAgricola;

-- -----------------------------------------------------
-- Table controlAgricola.cultivo
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.cultivo 
(
	idCultivo INT NOT NULL,
	nombre VARCHAR(45) NULL,
	estado INT NULL,
	PRIMARY KEY (idCultivo)
	CONSTRAINT cultivo_pkey PRIMARY KEY (idcultivo)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cultivo
  OWNER TO postgres;



-- -----------------------------------------------------
-- Table controlAgricola.area
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.area 
(
	idArea INT NOT NULL,
	nombre VARCHAR(45) NULL,
	tamano DECIMAL(10,0) NULL,
	estado INT NULL,
	CONSTRAINT area_pkey PRIMARY KEY (idArea)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.area
  OWNER TO postgres;


-- -----------------------------------------------------
-- Table controlAgricola.lote
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.lote 
(
	idLote INT NOT NULL,
	idArea INT NULL,
	nombre VARCHAR(45) NULL,
	tamano DECIMAL NULL,
	estado INT NULL,
	CONSTRAINT lote_pkey PRIMARY KEY (idLote),
	CONSTRAINT lote_ukey UNIQUE INDEX idarea_UNIQUE (idArea ASC),
	CONSTRAINT fkArea
	FOREIGN KEY (idArea)
	REFERENCES controlAgricola.area (idArea)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.lote
  OWNER TO postgres;


-- -----------------------------------------------------
-- Table controlAgricola.periodo
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.periodo 
(
	idPeriodo INT NOT NULL,
	nombre VARCHAR(45) NULL,
	fechainicio DATETIME NULL,
	fechafinal DATETIME NULL,
	estado INT NULL,
	CONSTRAINT periodo_pkey PRIMARY KEY (idPeriodo)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.periodo
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cultivoLote
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.cultivoLote 
(
	idcultivoLote INT NOT NULL,
	idPeriodo INT NULL,
	idLote INT NULL,
	idCultivo INT NULL,
	fecha VARCHAR(45) NULL,
	estado INT NULL,
	CONSTRAINT cultivoLote_pkey PRIMARY KEY (idcultivoLote),
	CONSTRAINT lote_cl_ukey UNIQUE INDEX idLote_UNIQUE (idLote ASC),
	CONSTRAINT cultivo_cl_ukey UNIQUE INDEX idCultivo_UNIQUE (idCultivo ASC),
	UNIQUE INDEX periodo_UNIQUE (idPeriodo ASC),
	CONSTRAINT fkPeriodo
	FOREIGN KEY (idPeriodo)
	REFERENCES controlAgricola.periodo (idPeriodo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkLote
	FOREIGN KEY (idLote)
	REFERENCES controlAgricola.lote (idLote)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCultivo
	FOREIGN KEY (idCultivo)
	REFERENCES controlAgricola.cultivo (idCultivo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cultivoLote
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.departamento
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.departamento 
(
	idDepartamento INT NOT NULL,
	nombre VARCHAR(45) NULL,
	estado INT NULL,
	PRIMARY KEY (idDepartamento)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.departamento
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cargo
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.cargo 
(
	idCargo INT NOT NULL,
	nombre VARCHAR(45) NULL,
	estado INT NULL,
	PRIMARY KEY (idCargo)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cargo
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.empleado
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.empleado 
(
	idempleado INT NOT NULL,
	nombre VARCHAR(45) NULL,
	apellido VARCHAR(45) NULL,
	departamento INT NULL,
	cargo INT NULL,
	PRIMARY KEY (idempleado),
	UNIQUE INDEX departamento_UNIQUE (departamento ASC),
	UNIQUE INDEX cargo_UNIQUE (cargo ASC),
	CONSTRAINT fkDepartamento
	FOREIGN KEY (departamento)
	REFERENCES controlAgricola.departamento (idDepartamento)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCargo
	FOREIGN KEY (cargo)
	REFERENCES controlAgricola.cargo (idCargo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.empleado
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cabeceraTarea
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.cabeceraTarea 
(
	idCabeceraTarea INT NOT NULL,
	periodo INT NULL,
	fecha DATETIME NULL,
	supervisor INT NULL,
	idCultivoLote INT NULL,
	estado INT NULL,
	PRIMARY KEY (idCabeceraTarea),
	UNIQUE INDEX periodo_UNIQUE (periodo ASC),
	UNIQUE INDEX supervisor_UNIQUE (supervisor ASC),
	UNIQUE INDEX idCultivoLote_UNIQUE (idCultivoLote ASC),
	CONSTRAINT fkPeriodo
	FOREIGN KEY (periodo)
	REFERENCES controlAgricola.periodo (idPeriodo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCultivoLote
	FOREIGN KEY (idCultivoLote)
	REFERENCES controlAgricola.cultivoLote (idcultivoLote)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkSupervisor
	FOREIGN KEY (supervisor)
	REFERENCES controlAgricola.empleado (idempleado)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cabeceraTarea
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.grupoLabor
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.grupoLabor 
(
	idGrupoLabor INT NOT NULL,
	nombre VARCHAR(45) NULL,
	estado INT NULL,
	PRIMARY KEY (idGrupoLabor)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.grupoLabor
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.labor
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.labor 
(
idLabor INT NOT NULL,
idGrupoLabor INT NULL,
nombre VARCHAR(45) NULL,
estado INT NULL,
PRIMARY KEY (idLabor),
UNIQUE INDEX idGrupoLabor_UNIQUE (idGrupoLabor ASC),
CONSTRAINT fkGrupoLabor
FOREIGN KEY (idGrupoLabor)
REFERENCES controlAgricola.grupoLabor (idGrupoLabor)
ON DELETE NO ACTION
ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.labor
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.detalleTarea
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.detalleTarea 
(
	idCabeceraTarea INT NOT NULL,
	idDetalleTarea INT NOT NULL,
	idEmpleado INT NULL,
	idLabor INT NULL,
	cantidad DECIMAL NULL,
	tarifa DECIMAL NULL,
	PRIMARY KEY (idCabeceraTarea, idDetalleTarea),
	UNIQUE INDEX idEmpleado_UNIQUE (idEmpleado ASC),
	UNIQUE INDEX idLabor_UNIQUE (idLabor ASC),
	CONSTRAINT fkEmpleado
	FOREIGN KEY (idEmpleado)
	REFERENCES controlAgricola.empleado (idempleado)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkLabor
	FOREIGN KEY (idLabor)
	REFERENCES controlAgricola.labor (idLabor)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCabeceraTarea
	FOREIGN KEY (idCabeceraTarea)
	REFERENCES controlAgricola.cabeceraTarea (idCabeceraTarea)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.detalleTarea
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.cabeceraTarifario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.cabeceraTarifario 
(
	idCabeceraTarifario INT NOT NULL,
	idPeriodo INT NULL,
	idCultivo INT NULL,
	fecha DATETIME NULL,
	estado INT NULL,
	PRIMARY KEY (idCabeceraTarifario),
	UNIQUE INDEX idCultivo_UNIQUE (idCultivo ASC),
	UNIQUE INDEX idPeriodo_UNIQUE (idPeriodo ASC),
	CONSTRAINT fkPeriodo
	FOREIGN KEY (idPeriodo)
	REFERENCES controlAgricola.periodo (idPeriodo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCultivo
	FOREIGN KEY (idCultivo)
	REFERENCES controlAgricola.cultivo (idCultivo)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.cabeceraTarifario
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.medida
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.medida 
(
	idMedida INT NOT NULL,
	nombre VARCHAR(45) NULL,
	PRIMARY KEY (idMedida)
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.medida
  OWNER TO postgres;

-- -----------------------------------------------------
-- Table controlAgricola.detalleTarifario
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS controlAgricola.detalleTarifario 
(
	idCabeceraTarifario INT NOT NULL,
	idDetalleTarifario INT NOT NULL,
	idLabor INT NULL,
	idMedida INT NULL,
	valor VARCHAR(45) NULL,
	PRIMARY KEY (idCabeceraTarifario, idDetalleTarifario),
	INDEX fkLabor_idx (idLabor ASC),
	INDEX fkMedida_idx (idMedida ASC),
	CONSTRAINT fkLabor
	FOREIGN KEY (idLabor)
	REFERENCES controlAgricola.labor (idLabor)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkMedida
	FOREIGN KEY (idMedida)
	REFERENCES controlAgricola.medida (idMedida)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION,
	CONSTRAINT fkCabeceraTarifario
	FOREIGN KEY (idCabeceraTarifario)
	REFERENCES controlAgricola.cabeceraTarifario (idCabeceraTarifario)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION
)
WITH 
(
  OIDS=FALSE
);
ALTER TABLE controlagricola.detalleTarifario
  OWNER TO postgres;

