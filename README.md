### DB connection requisites

https://www.phpmyadmin.co (PMA)<br>
Server: sql8.freemysqlhosting.net<br>
DBName: sql8709907<br>
Username: sql8709907<br>
Password: Pcup9deyDD<br>
Port number: 3306<br>

##### Tables: incomes, orders, stocks, sales.

Примеры запросов:

##### INCOMES
GET http://127.0.0.1:8000/api/incomes?dateFrom=2024-04-01&dateTo=2024-05-29&page=1&limit=500

#### STOCKS 
(only dateFrom === today-date)<br>
GET http://127.0.0.1:8000/api/stocks?dateFrom=2024-05-29&page=1&limit=500

#### SALES
GET http://127.0.0.1:8000/api/sales?dateFrom=2024-04-01&dateTo=2024-05-29&page=1&limit=500

#### ORDERS
GET http://127.0.0.1:8000/api/orders?dateFrom=2024-04-01&dateTo=2024-05-29&page=1&limit=500


Немного не понял, на каком стеке делать?
В ТГ бот пишет Laravel+MySQL. На Гитхабе  - docker, Laravel (Oсtane).<br>
Склонировал репозиторий, запустил контейнер (с некоторыми сложностями, но всё же), 
запустил Октан. Но запросы к БД Ларавел не может обработать, пишет <br>
Couldn't find driver SQL (SELECT * FROM ........)<br>
Хотя в Докер-файле pdo&pdo_mysql есть.
Сделал через artisan, локально установленный РНР и удалённую БД. 
