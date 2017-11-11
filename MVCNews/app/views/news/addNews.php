<style>
    h2 {
        color: steelblue;
    }

    textarea {
        resize: none;
    }

    .form-control {
        border-radius: 0;
        border-color: lightblue;
        border-width: 0 0 1px 0;
        border-style: none none solid none;
        box-shadow: none;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: skyblue;
    }

    .btn-start-order {
        background: 0 0 #ffffff;
        border: 1px solid lightblue;
        border-radius: 3px;
        color: #2f323a;
        font-family: "Raleway", sans-serif;
        font-size: 16px;
        line-height: inherit;
        margin: 30px 0;
        padding: 10px 50px;
        text-transform: uppercase;
        transition: all 0.25s ease 0s;
    }

    .btn-start-order:hover,.btn-start-order:active, .btn-start-order:focus {
        border-color: #5e9bfc;
        color: #5e9bfc;
    }
</style>

<!--<form align="center" action="http://localhost/MVCNews/news/add-news" method="post">-->
<!--    <p> Title :  <input type="text" value="" name="title"></p>-->
<!--    <p> English text: <input type="text" value="" name="$data_en"></p>-->
<!--    <p> Russian text : <input type="text" name="$data_rus"> <br></p>-->
<!--    <p> Data :  <input type="date" name="ins_date"><br></p>-->
<!---->
<!--    <input type="hidden" name="action" value="addNews">-->
<!--    <input type="submit" name="addNews">-->
<!--</form><br>-->


<div class="container" align="center">
    <h2>Add piece of news / Добавить новость</h2>
    <div class="row">
        <form class="form-group" action="http://localhost/MVCNews/news/add-news" method="POST">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"><br><br>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Заголовок"><br><br>
            <input type="date" class="form-control" id="subject" name="ins_date" placeholder="Дата \ Date"><br><br>
            <textarea rows="5" cols="50" name="$data_en" class="form-control" id="message" placeholder="peace of news..." required></textarea><br>
            <textarea rows="5" cols="50" name="$data_rus" class="form-control" id="message" placeholder="новость..." required></textarea>
            <input type="hidden" name="action" value="addNews">
            <div class="text-center">
                <button type="submit" class="btn btn-start-order" name="addNews">Send / Отправить</button>
            </div>
        </form>
    </div>
</div>