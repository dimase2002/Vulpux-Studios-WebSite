CREATE TABLE Pilote(
    idPil INT AUTO_INCREMENT,
    Nom VARCHAR(15),
    Brevet VARCHAR(15),
    ChefPil VARCHAR(15),
    NbtVol INT(5),
    Embauche Date,
    Typeavion VARCHAR (15),
    Comp VARCHAR(10),
    CONSTRAINT pk_Pilote PRIMARY KEY (idPil))
    ENGINE=InnoDB;

CREATE TABLE Compagnie (
    idComp INT AUTO_INCREMENT,
    Numcomp VARCHAR(10),
    Adresse VARCHAR(30),
    Ville VARCHAR(10),
    CONSTRAINT pk_Compagnie PRIMARY KEY (idComp))
    ENGINE=InnoDB;


INSERT INTO Pilote(idPil, Nom, Brevet, ChefPil, NbtVol, Embauche,Typeavion,Comp) VALUES 
('1','Gamma4','A7BCO8','oui',400,20020915,'B747','AF'),
('2','Kilo2','B5CD51','oui',350,20050814,'B727','BA'), 
('3','Beta5','C3VK32','non',280,20070523,'A340','KLM'),
('4','Alpha9','D5HG42','non',120,20100210,'A320','LUFT'),
('5','Pilot','E31CT46','oui',500,20000318,'A310','AF');

INSERT INTO Compagnie (idComp, Numcomp, adresse, ville) VALUES 
('1','AF','71_Bd_Bompard_13007','Marseille'),
('2','BA','21-15_Bd_Saint_Michel','Paris'),
('3','KLM','Stralsunder_Str_57_13355','Berlin'),
('4','LUFT','Spreetalallee_141_14050','Berlin'),
('5','DEUTSCH','Württembergische_Str_15_10707','Berlin');


