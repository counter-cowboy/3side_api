DB connection requisites

https://www.phpmyadmin.co (PMA)
Server: sql8.freemysqlhosting.net
DBName: sql8709907
Username: sql8709907
Password: Pcup9deyDD
Port number: 3306

Примеры запросов:

INCOMES
GET http://127.0.0.1:8000/api/incomes?dateFrom=2024-04-01&dateTo=2024-05-29&page=1&limit=500

STOCKS (only dateFrom === today-date)
GET http://127.0.0.1:8000/api/stocks?dateFrom=2024-05-29&page=1&limit=500

SALES
GET http://127.0.0.1:8000/api/sales?dateFrom=2024-04-01&dateTo=2024-05-29&page=1&limit=500

ORDERS
GET http://127.0.0.1:8000/api/orders?dateFrom=2024-04-01&dateTo=2024-05-29&page=1&limit=500


Немного не понял, на каком стеке делать?
В ТГ бот пишет Laravel+MySQL. На Гитхабе  - docker, Laravel (Oсtane).
Склонировал репозиторий, запустил контейнер (с некоторыми сложностями, но всё же), 
запустил Октан. Но запросы к БД Ларавел не может обработать, пишет 
Couldn't find driver SQL (SELECT * FROM ........)
Хотя в Докер-файле pdo&pdo_mysql есть.
Сделал через artisan, локально установленный РНР и удалённую БД. 
