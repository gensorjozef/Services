
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script>
        var array = [];
        $(document).ready(function(){
            $("#getHoliday").click(function(){
                var type = document.getElementById('type')
                console.log(type.value)
                $.ajax({
                    type: 'GET',
                    url: 'https://wt53.fei.stuba.sk/zad6/getHoliday.php?type=' + type.value,
                    success: function(msg){
                        $("#table").html("");
                        if (msg[0].type === "sk_holiday"){
                            $("#tname").html("Sviatky na Slovenksu");
                        }
                        if (msg[0].type === "cz_holiday"){
                            $("#tname").html("Sviatky v Čechách");
                        }
                        for (var i = 0; i < msg.length; i++) {

                            var newRow = $(document.createElement('tr'))
                            newRow.after().html('<td>' + msg[i].day + '.'+ msg[i].month + ' ' + msg[i].value + '</td>')
                            newRow.appendTo("#table");
                        }

                        $('#exampleModal').modal('show')

                    }});
            });
            $("#getPamat").click(function(){
                $.ajax({
                    type: 'GET',
                    url: 'https://wt53.fei.stuba.sk/zad6/getHoliday.php?type=sk_pamat',
                    success: function(msg){
                        $("#table").html("");
                        $("#tname").html("Pamätné dni na Slovensku");
                        for (var i = 0; i < msg.length; i++) {

                            var newRow = $(document.createElement('tr'))
                            newRow.after().html('<td>' + msg[i].day + '.'+ msg[i].month + ' ' + msg[i].value + '</td>')
                            newRow.appendTo("#table");
                        }

                        $('#exampleModal').modal('show')
                    }});
            });
            $("#getDateFromName").click(function(){
                var x = document.getElementById("date").value;
                var month = x.substring(5, 7);
                var day = x.substring(8, 10);
                $.ajax({
                    type: 'GET',
                    url: 'https://wt53.fei.stuba.sk/zad6/getDateFromName.php?day='+ day +'&month=' + month,
                    success: function(msg){
                        if (msg.response_code == 400){
                            $("#table").html("");
                            $("#tname").html("Error " + msg.response_code + " " + msg.response_desc);
                        }
                        else if (msg.response_code == 200){
                            $("#table").html("");
                            $("#tname").html("Error " + msg.response_code + " " + msg.response_desc);
                        }else {
                            $("#table").html("");
                            $("#tname").html("Mená pre deň " + day + "." + month);
                            for (var i = 0; i < msg.length; i++) {

                                var newRow = $(document.createElement('tr'))
                                newRow.after().html('<td>' + msg[i].title + ':  ' + msg[i].value + '</td>')
                                newRow.appendTo("#table");
                            }
                        }
                        $('#exampleModal').modal('show')
                    }});
            });
            $("#getNameFromDate").click(function(){
                var contry_id = document.getElementById('contry_id').value;
                console.log(contry_id)
                var value = document.getElementById("name").value;
                console.log(value)
                $.ajax({
                    type: 'GET',
                    url: 'https://wt53.fei.stuba.sk/zad6/getNameFromDate.php?country_id='+ contry_id +'&value=' + value,
                    success: function(msg){
                        if (msg.response_code == 400){
                            $("#table").html("");
                            $("#tname").html("Error " + msg.response_code + " " + msg.response_desc);
                        }
                        else if (msg.response_code == 200){
                            $("#table").html("");
                            $("#tname").html("Error " + msg.response_code + " " + msg.response_desc);
                        }else {
                            $("#table").html("");
                            $("#tname").html("Dátumy pre slovo " + value);
                            for (var i = 0; i < msg.length; i++) {

                                var newRow = $(document.createElement('tr'))
                                newRow.after().html('<td>' + msg[i].day + '.'+ msg[i].month + ' ' + msg[i].value + '</td>')
                                newRow.appendTo("#table");
                            }
                        }
                        $('#exampleModal').modal('show')
                    }});
            });
            $("#addRecord").click(function(){
                var value = document.getElementById("nameAdd").value;
                var x = document.getElementById("dateAdd").value;
                var month = x.substring(5, 7);
                var day = x.substring(8, 10);
                $.ajax({
                    type: 'POST',
                    url: 'https://wt53.fei.stuba.sk/zad6/addName.php?day='+ day +'&month=' + month +'&value=' + value,
                    success: function(msg){
                        if (msg.response_code == 400){
                            $("#table").html("");
                            $("#tname").html("Error " + msg.response_code + " " + msg.response_desc);
                        }
                        if (msg.response_code == 200){
                            $("#table").html("");
                            $("#tname").html("Error " + msg.response_code + " " + msg.response_desc);
                        }if (msg.status == "success") {
                            $("#table").html("");
                            $("#tname").html("Záznam bol vložený " + value + " " + day + "."+ month);

                        }
                        $('#exampleModal').modal('show')
                    }});
            });
        });

    </script>
</head>
<body>
<div class="card bg-light ">
    <article class="card-body mx-auto" style="max-width: 400px">

        <form method="get" class="">
            <div class="form-group input-group">
                <div class="col text-center">
                <label for="getHoliday" class=" col-form-label">Zobraz sviatky na:</label>
                <select id="type" name="type" class="">
                    <option value="sk_holiday">Slovensku</option>
                    <option value="cz_holiday">Česku</option>
                </select>
                </div>
            </div>
                <div class="form-group input-group">
                    <div class="col text-center">
                        <button id="getHoliday" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Zobraz
                        </button>
                    </div>
                </div>

            <br>
            <div class="form-group input-group">
                <div class="col text-center">
                <label for="getPamat" class=" col-form-label">Zobraz pamätné dni na Slovensku</label>
                </div>
                <div class="form-group input-group">
                    <div class="col text-center">
                        <button id="getPamat" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Zobraz
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group input-group">

                    <label for="date" class="col-form-label">Zobraz meniny pre dátum</label>
                    <input name="date" id="date" type="date" class="form-control"  placeholder="ddmm">
                <div class="form-group input-group">
                    <div class="col text-center">
                        <button id="getDateFromName" type="button" value="Submit form" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Zobraz
                        </button>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <div class="form-group input-group">
                    <label for="date" class="col-form-label">Zobraz dátum pre meno</label>
                        <input name="name" id="name" type="text" class=" form-control" placeholder="Meno ">

                    <select id="contry_id" name="contry_id" class="">
                        <option value="4">SK</option>
                        <option value="5">CZ</option>
                        <option value="2">PL</option>
                        <option value="1">HU</option>
                        <option value="3">AT</option>
                    </select>
                    <div class="form-group input-group">
                        <div class="col text-center">
                            <button id="getNameFromDate" type="button" value="Submit form" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Zobraz
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!--Add record-->
        <form method="post" class="">
            <div class="form-group input-group">
                <div class="col text-center">
                    <label for="" class="col-form-label">Pridaj do Slovenského kalendára</label>
                </div>
            </div>
            <div class="form-group input-group">
                    <label for="dateAdd" class="col-form-label">Vyber dátum: </label>
                    <input name="dateAdd" id="dateAdd" type="date" class="form-control">
            </div>
            <div class="form-group input-group">
                    <label for="nameAdd" class="col-form-label">Zadaj meno: </label>
                    <input name="nameAdd" id="nameAdd" type="text" class=" form-control" placeholder="Meno">
            </div>
            <div class="form-group input-group">
                <div class="col text-center">
                        <button id="addRecord" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Pridaj
                        </button>
                    </div>
            </div>
            <div class="form-group input-group">
                <div class="col text-center">
                    <p>
                        <a href="doc.php" class="btn btn-block btn-info"> <i class="fas fa-info-circle"></i>   Dokumentácia</a>
                    </p>
                </div>
            </div>
            </div>

            </form>
    </article>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">

            <div class="modal-body" id="div1">
                <table class="table table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col" id="tname"></th>
                    </tr>
                    </thead>
                    <tbody id="table">

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>
