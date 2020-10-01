create table team (
team_id int not null primary key,
team varchar(100) not null
);

create table employeer (
employeer_id int not null auto_increment primary key,
name varchar(100) not null,
surname varchar(100) not null,
lastname varchar(100),
sex varchar(100),
wage int not null,
team_id int,
foreign key (team_id) REFERENCES team(team_id)
);

insert into team (team_id, team)
values (101, 'junior');
insert into team (team_id, team)
values (202, 'midle');
insert into team (team_id, team)
values (303, 'senior');
