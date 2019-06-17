CREATE TABLE noticeboard(
           id int(11) unsigned NOT NULL auto_increment,
           name varchar(20) NULL,
           email varchar(30) NULL,
           pass varchar(10) NULL,
           title varchar(70) NULL,
           comment text,
           wdate datetime NULL,
           ip varchar(16) NULL,
           view int(11) NULL,
           PRIMARY KEY(id)
         );
