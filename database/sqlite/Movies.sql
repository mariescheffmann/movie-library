INSERT INTO movies(title, imageReference, duration, releaseYear, descriptionShort, descriptionLong, rating)
VALUES ('The Dark Knight', 'movie-posters/dark_knight.jpg','2-34-0','2008','Im batman','The movie follows a superhero named batman', 5),
('Fight Club', 'movie-posters/fight_club.jpg','2-19-0',1999,'We fight in a club','This movie is about a club that fights', 4),
('Forrest Gump', 'movie-posters/forrest_gump.jpg','2-22-0',1994,'Forrest Gump runs a lot','This movie is about a man named Forrest Gump who runs a lot', 4),
('The Godfather','movie-posters/godfather.jpg','2-55-0',1972,'It is about a god who is a father','This movie is about a mafia where the leader is the godfather',5),
('The Godfather part 2','movie-posters/godfather2.jpg','3-22-0',1974,'It is about a god who is a father 2', 'This movie is about a mafia where the leader is the godfather the second time',3),
('Interstellar','movie-posters/interstellar.jpg','2-49-0',2014,'It is a space movie','When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', 5),
('Pulp Fiction','movie-posters/pulp_fiction.jpg','2-34-0',1994,'It is a fiction about pulps','The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',3.5),
('Shawshank Redemption','movie-posters/shawshank_redemption.jpg','2-22-0',1994, 'It is a movie about jail','Over the course of several years, two convicts form a friendship, seeking consolation and, eventually, redemption through basic compassion.', 5);


INSERT INTO people(id,name, birthday, nationality, imageReference, biography) VALUES
(3,'Morgan Freeman', '01-06-1937', 'American','actor-pictures/Morgan_Freeman.jpg','With an authoritative voice and calm demeanor, this ever popular American actor has grown into one of the most respected figures in modern US cinema. Morgan was born on June 1, 1937 in Memphis, Tennessee, to Mayme Edna (Revere)'),
(4, 'Frank Darabont','28-01-1959', 'American', 'actor-pictures/Frank_Darabont.jpg','He is a director'),
(5, 'Niki Marvin','01-01-1963','English','actor-pictures/Niki_Marvin.jpg','She is an english film producer'),
(6,'Matthew McConaughey','4-11-1969','American','actor-pictures/Matthew_McConaughey.jpg','Matthew is an american actor');


INSERT INTO movieActorRelations(id,actorId, movieId) VALUES
(4,3, 10),
(6,6,8);

INSERT INTO directorsMovieRelations(id,personId, movieId) VALUES
(5,4, 10);

INSERT INTO producersMovieRelations(id,personId,movieId) VALUES
(6,5,10);