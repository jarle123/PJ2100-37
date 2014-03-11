CREATE TABLE user
(
	id int NOT NULL auto_increment,
	email varchar(100) NOT NULL,
	password varchar(100) NOT NULL,
	firstname varchar(50) NOT NULL,
	surname varchar(50) NOT NULL,
	CONSTRAINT user_id_pk
		PRIMARY KEY(id)
);

CREATE TABLE selection
(
	id int NOT NULL auto_increment,
	name varchar(100) NOT NULL,
	abbreviation varchar(20),
	description text,
	logo varchar(50),
	CONSTRAINT selection_id_pk
		PRIMARY KEY(id)
);

CREATE TABLE activity
(
	id int NOT NULL auto_increment,
	selection_id int NOT NULL,
	name varchar(100) NOT NULL,
	description text,
	time DATE,
	CONSTRAINT activity_id_pk
		PRIMARY KEY(id),
	CONSTRAINT activity_selection_id_fk
		FOREIGN KEY(selection_id) REFERENCES selection(id)
);

CREATE TABLE user_selection
(
	user_id int NOT NULL,
	selection_id int NOT NULL,
	isadmin int NOT NULL default 0,
	CONSTRAINT user_selection_user_id_selection_id_pk
		PRIMARY KEY(user_id, selection_id),
	CONSTRAINT user_selection_user_id_fk
		FOREIGN KEY(user_id) REFERENCES user(id),
	CONSTRAINT user_selection_selection_id_fk
		FOREIGN KEY(selection_id) REFERENCES selection(id)
);

CREATE TABLE user_activity
(
	user_id int NOT NULL,
	activity_id int NOT NULL,
	isadmin int DEFAULT 0,
	CONSTRAINT user_activity_user_id_activity_id_pk
		PRIMARY KEY(user_id, activity_id),
	CONSTRAINT user_activity_user_id_fk
		FOREIGN KEY(user_id) REFERENCES user(id),
	CONSTRAINT user_activity_activity_id_fk 
		FOREIGN KEY(activity_id) REFERENCES activity(id)
);