create table users (
    id_user primary key NOT NULL,
    firstname varchar NOT NULL, 
    lastname varchar NOT NULL, 
    email varchar UNIQUE, 
    password varchar NOT NULL ,
    mobile_phone char(10) NOT NULL,
    status type boolean,
    profile_photo VARCHAR (255)
)