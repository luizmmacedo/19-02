<?php
// Definindo a data de início
$data_inicio = new DateTime("2022-02-19");
$data_atual = new DateTime();

// Calculando a diferença
$diferenca = $data_inicio->diff($data_atual);

// Formatando a diferença em anos, meses, dias, horas e minutos
$anos = $diferenca->y;
$meses = $diferenca->m;
$dias = $diferenca->d;
$horas = $data_atual->format('H');
$minutos = $data_atual->format('i');
$segundos = $data_atual->format('s');

// Encontrar a próxima ocorrência do dia 19 do mês atual ou do próximo mês
$proxima_data = new DateTime();
if ($proxima_data->format('d') > 19) {
    $proxima_data->modify('first day of next month');
}
$proxima_data->setDate($proxima_data->format('Y'), $proxima_data->format('m'), 19);
$diferenca_proxima = $data_atual->diff($proxima_data);

// Formatando a diferença até a próxima data
$anos_proxima = $diferenca_proxima->y;
$meses_proxima = $diferenca_proxima->m;
$dias_proxima = $diferenca_proxima->d;
$horas_proxima = $proxima_data->format('H');
$minutos_proxima = $proxima_data->format('i');
$segundos_proxima = $proxima_data->format('s');

// Exibindo os resultados
echo "Estamos juntos há $anos anos, $meses meses, $dias dias, $horas horas, $minutos minutos, $segundos segundos.<br> <br>";

echo "Vamos comemorar o próximo dia 19 em: $dias_proxima dias, $horas_proxima horas, $minutos_proxima minutos, $segundos_proxima segundos.";
?>
