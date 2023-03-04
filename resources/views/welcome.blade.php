<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="master-container flex space-x-2">
    <div class="container-sign-in-login">

        <div class="header">
            <p>Bem vindo a Escola das Gostosas</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="container-form">
            <form action="">
                <div>
                    <p>Insira seu código de funcionário:</p>
                    <input type="text">
                </div>

                <div class="pb-10">
                    <p>Insira a senha:</p>
                    <input type="password">
                </div>

                <div class="flex justify-around">
                    <button class="sign-in">
                        Cadastrar
                    </button>

                    <button class="login">
                        Logar
                    </button>
                </div>
            </form>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-home">

        <div class="header">
            <p>Bem vindo *-*Nome da Pessoa*-*</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="options">
            <div>
                <button class="book">
                    Agendar
                </button>
            </div>

            <div>
                <button class="see">
                    Vizualizar
                </button>
            </div>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-booking">

        <div class="header mb-4">
            <p>*-*Data de hoje*-*</p>
        </div>

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

            <div class="flex justify-center mt-4">
                <button class="confirm">Confirmar</button>
            </div>
        </form>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

    <div class="container-see-and-cancel">
        <div class="header">
            <p>Seus Agendamentos:</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="bookings">
            <p class="insert-from-db">vem do banco</p>
            <p class="cancel">X</p>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>
</div>








</body>
</html>
