# labs

#Регистрация участников соревнований

Написать программу для регистрации участников семинара.
Информация о каждом участнике – город, фамилия, организация. После
регистрации информацию выдать на экран следующим образом:
распечатать список городов по алфавиту и для каждого города список
участников по алфавиту (названия городов поместить в двоичное дерево
поиска, и в каждом его узле хранить ссылку на его двоичное дерево
участников).

#Частотный словарь 

Написать программу «частотный словарь». С клавиатуры вводятся
слова, которые помещаются в двоичное дерево поиска. После окончания
ввода слова выводятся на экран в алфавитном порядке (использовать
обратный обход) с указанием частоты появления каждого слова.

#Односвязный список 
- основные действия с ним

#Двусвязный список 
- основные действия с ним

#Разработка чата на сокетах

Необходимо реализовать – «ЧАТ».
Необходимо реализовать с использованием сетевых сокетов две программы: Клиент и Сервер. Сервер должен быть один. Клиентов может быть много.
Сервер.  
После запуска работает в бесконечном цикле слушая закрепленный за ним сокет, пока не поступит команда на его завершения.
К серверу через сокет, могут поступать следующие виды запросов от клиента:
1.	Запрос на регистрацию (сервер должен вести список зарегистрированных клиентов). При поступлении данного запроса проверяется данный список, если клиент там не зарегистрирован, то происходит его регистрация. Клиенту отправляется ответ с подтверждением регистрации или сообщением о том, что он уже зарегистрирован.
2.	Запрос на получение списка зарегистрированных клиентов. В ответ сервер отправляет Имена клиентов, зарегистрированных в данный момент.
3.	Запрос на передачу сообщения клиенту. (в запросе указывается имя клиента получателя и текст сообщения). Если клиент получатель не зарегистрирован в чате, то отправителю сообщения отправляется об этом информация, иначе сообщение пересылается клиенту получателю.
4.	Запрос на отключение от чата. В этом случае клиент удаляется из чата.

Клиент. 
После запуска запрашивает параметры сервера (адрес и порт), а также имя клиента и пытается подключиться к серверу – отправляет запрос на регистрацию. Если подключение невозможно (не получен ответ), то завершает свою работу.
Иначе либо ждет команду от пользователя, либо сообщение от сервера.
При поступлении сообщения, выводит имя отправителя и сам текст сообщения.
Пользователь может ввести следующие команды: 
Получить список зарегистрированных в чате. В этом случае клиент запрашивает этот список на сервере и выводит его на экране.
Отправить сообщение. Указывается имя клиента получателя и текст сообщения.
Команда на завершение работы. Отправляется соответствующий запрос на сервер и программа завершает свою работу.
