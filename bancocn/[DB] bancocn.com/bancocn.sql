CREATE TABLE `categories` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `txt` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO categories VALUES('1','contato','<p>Email: contato@bancocn.com</p><p>Tel: +835 66 7070, se nao der certo 70 de novo</p>');
INSERT INTO categories VALUES('2','emprestimos','Com juros de apenas 53426% ao ano, temos as melhores taxas de emprestimos da Coreia, envie seu pedido para emprestimos@bancocn.com que o dinheiro estara disponivel em sua conta em menos de 24 horas!');
INSERT INTO categories VALUES('3','historia','Ainda estamos bolando algo legal para colocar aqui, volte em breve!');
CREATE TABLE `pictures` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `cat` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO pictures VALUES('7','estatua','dsc_0699-min.jpg','1');
INSERT INTO pictures VALUES('4','predios','1490906279.jpg','2');
INSERT INTO pictures VALUES('6','foguete','north-korea-science-technology.jpg','3');
CREATE TABLE `stats` (
  `ip` varchar(20) NOT NULL,
  `count` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO stats VALUES('192.168.229.1','7');

CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES('1','admin','7b71be0e85318117d2e514ce2a2e222c');