<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-home">

    <div class="intro">
        <p>Bem vindo *-*Nome da Pessoa*-*</p>
        <p>*-*Data de hoje*-*</p>
    </div>

    <div class="options">
        <button class="book">
            Agendar
        </button>

        <button class="see">
            Vizualizar
        </button>
    </div>
</div>

<div class="container-booking">

    <form action="">
        <div>
            <p>Escolha o equipamento:</p>
            <select name="" id="">
                <option value="">DVD-1</option>
                <option value="">DVD-2</option>
                <option value="">DVD-3</option>
            </select>
        </div>

        <div>
            <p>Escolha o dia:</p>
            <input type="date">
        </div>

        <div>
            <p>Escolha o turno:</p>
            <select name="" id="">
                <option value="">Matutino</option>
                <option value="">Vespertino</option>
                <option value="">Noturno</option>
            </select>
        </div>

        <div>
            <p>Escolha a aula:</p>
            <select name="" id="">
                <option value="">Aula 1</option>
                <option value="">Aula 2</option>
                <option value="">Aula 3</option>
                <option value="">Aula 4</option>
                <option value="">Aula 5</option>
            </select>
        </div>

        <button>Confirmar</button>
    </form>
</div>

<div class="container-see-and-cancel">
    <div>
        <p>Aparece os agendamentos</p>

    </div>
</div>








</body>
</html>
