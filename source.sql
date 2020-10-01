create table team (
team_id int not null primary key,
team varchar(100) not null,
team_salary int not null,
number_empl int not null,
max_salary int not null
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

insert into team (team_id, team, team_salary, number_empl, max_salary)
values (101, 'junior', 100000, 2, 140000);
insert into team (team_id, team, team_salary, number_empl, max_salary)
values (202, 'midle', 200000, 2, 300000);
insert into team (team_id, team, team_salary, number_empl, max_salary)
values (303, 'senior', 1000000, 1, 3000000);
