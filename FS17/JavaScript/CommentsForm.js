/**
 http://take.ms/QQjO1
 Написать класс для создания формы добавления комментариев, используйте наследование.
 Кнопки должны иметь только одно действие, у каждой кнопки оно может быть разным
 В выпадающих списках могут быть как выпадающие списки так и кнопки
 Должен притустовать метод для добавления новой кнопки, которая сможет выполнять ту функцию которую
 вы ей передате, а также у нее должно быть свое название, тип, и картинка (url)

 Рекомендации:
 1) Ипользуйте публичные, приватные и защищенные свойства
 2) Используйте обьекты
 Задание на 2 урока
 */
'use strict';

function Button(action) {
    if (action == 'click') {
        return true;
    } else {
        return;
    }
}

function CommentForm()
{

var comments = [];
var counter = 0;

    this.add = function (userName, text, button)
    {
        if (typeof userName == 'string' && typeof text == 'string' && button() == true) {
            comments.push({
                "id": counter++,
                "name": userName,
                "comment": text
            });
        } else
        {
            throw new Error('Ошибка при вводе имени пользователя либо комментария');
            return;
        }
    }

    this.get = function () {
        return comments;
    }
}

function NewButton() {
    Button.call(this);

    this.newButton = function (buttonName, buttonFunction)
    {

    }
}


var myCommentForm = new CommentForm();
myCommentForm.add('User1', 'First comment');
myCommentForm.add('User2', 'Second comment');
myCommentForm.add('User3', 'Third comment');

console.log (myCommentForm.get());