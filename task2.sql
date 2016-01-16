-- таблица для хранения книг
CREATE TABLE `books` (
	`id` int(11),
	`title` varchar(255)
)

-- таблица для хранения авторов
CREATE TABLE `authors` (
	`id` int(11),
	`name` varchar(255)
)

-- таблица связывающая книги и авторов
CREATE TABLE `book_authors` (
	`id` int(11),
	`book_id` int(11),
	`author_id` int(11)
)