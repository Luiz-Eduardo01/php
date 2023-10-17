<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Faça 20 flexões</title>
</head>
<body>
    <h1>Faça 20 flexões</h1>
    <p>Para começar, clique no botão abaixo:</p>
    <button onclick="start()">Começar</button>

    <script>
        function start() {
            // Contador de flexões
            var count = 0;

            // Função para realizar uma flexão
            function doPushup() {
                // Aumenta o contador
                count++;

                // Exibe o número de flexões realizadas
                document.getElementById("count").innerHTML = count;

                // Verifica se o usuário completou as 20 flexões
                if (count == 20) {
                    // Exibe uma mensagem de sucesso
                    document.getElementById("message").innerHTML = "Parabéns! Você completou as 20 flexões.";

                    // Desabilita o botão
                    document.getElementById("button").disabled = true;
                }
            }

            // Inicializa o botão
            document.getElementById("button").onclick = doPushup;
        }
    </script>

    <p id="count"></p>
    <p id="message"></p>
</body>
</html>
