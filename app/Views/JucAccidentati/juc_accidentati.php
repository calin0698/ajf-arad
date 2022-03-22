<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <div class="container-svg">
        <h1>Jucatori Accidentati</h1>

        <div class="container col-10 col-sm-10  " id="container_1">


            <div class="child ">
                <h4 style="font-weight: 600">Au fost jucatori accidentati?</h4>
                <div class=" col-10">
                    <input type="text" class="form-control" id="input1">

                </div>
                <form action="" method="post" class="d-flex flex-column gap-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="btn1"
                        data-bs-target="#Modal">Adaugare jucator accidentat</button>
                    <button type="button" class="btn btn-primary" id="btn2" data-bs-target="">Nu a fost jucator
                        accidentat</button>
                    <button type="button" class="btn btn-primary" id="btn3" data-bs-target="">Inapoi</button>



                </form>

            </div>

        </div>
    </div>



    <div class="modal fade " id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="col-form-label"
                                style="color: #284775; font-weight:600;">Nume</label>
                            <input type="text" class="form-control" style="border: 1px solid #284775" id="name">
                        </div>

                        <div class="mb-3">
                            <label for="prenume" class="col-form-label"
                                style="color: #284775; font-weight:600;">Prenume</label>
                            <input type="text" class="form-control" style="border: 1px solid #284775" id="prenume">
                        </div>

                        <div class="mb-3">
                            <label for="echipa" class="col-form-label"
                                style="color: #284775; font-weight:600;">Echipa</label>
                            <input type="text" class="form-control" style="border: 1px solid #284775" id="echipa">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label"
                                style="color: #284775; font-weight:600;">Diagnostic medical</label>
                            <textarea class="form-control" style="border: 1px solid #284775"
                                id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary " id="btn2">Salveaza</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>