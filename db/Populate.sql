-- Inserting records into a table
use parksys;
insert into location (loc_id, loc_name) values (1, 'Briggs Field');
insert into location (loc_id, loc_name) values (2, 'Ceurvels Field');
insert into location (loc_id, loc_name) values (3, 'Calvin J. Ellis Field');
insert into location (loc_id, loc_name) values (4, 'Forge Pond Park');
insert into location (loc_id, loc_name) values (5, 'Amos Gallant Field');
insert into location (loc_id, loc_name) values (6, 'B Everett Hall');
										
insert into areas (area_name, area_loc_id) values ('T-Ball', 1);

insert into areas (area_name, area_loc_id) values ('Full-size Baseball', 2);
insert into areas (area_name, area_loc_id) values ('Little League', 2);
insert into areas (area_name, area_loc_id) values ('Softball', 2);
insert into areas (area_name, area_loc_id) values ('Lacrosse', 2);
insert into areas (area_name, area_loc_id) values ('Soccer', 2);
insert into areas (area_name, area_loc_id) values ('Basketball', 2);

insert into areas (area_name, area_loc_id) values ('Little League #1', 3);
insert into areas (area_name, area_loc_id) values ('Little League #2', 3);
insert into areas (area_name, area_loc_id) values ('Little League #3', 3);
insert into areas (area_name, area_loc_id) values ('Field #4', 3);
insert into areas (area_name, area_loc_id) values ('Soccer', 3);

insert into areas (area_name, area_loc_id) values ('Little League #1', 4);
insert into areas (area_name, area_loc_id) values ('Little League #2', 4);
insert into areas (area_name, area_loc_id) values ('Little League #3', 4);
insert into areas (area_name, area_loc_id) values ('Softball #4', 4);
insert into areas (area_name, area_loc_id) values ('Softball #5', 4);
insert into areas (area_name, area_loc_id) values ('Softball #6', 4);
insert into areas (area_name, area_loc_id) values ('Multi-use Soccer', 4);
insert into areas (area_name, area_loc_id) values ('Multi-use Lacrosse', 4);
insert into areas (area_name, area_loc_id) values ('Multi-use Other', 4);
insert into areas (area_name, area_loc_id) values ('Pavilion',  4);
insert into areas (area_name, area_loc_id) values ('Kitchen & Pavilion',  4);

insert into areas (area_name, area_loc_id) values ('Main Field', 5);

insert into areas (area_name, area_loc_id) values ('Full-size Baseball', 6);
insert into areas (area_name, area_loc_id) values ('Little League', 6);
insert into areas (area_name, area_loc_id) values ('Basketball #1', 6);
insert into areas (area_name, area_loc_id) values ('Basketball #2', 6);
insert into areas (area_name, area_loc_id) values ('Football', 6);
insert into areas (area_name, area_loc_id) values ('Street Hockey Rink', 6);



