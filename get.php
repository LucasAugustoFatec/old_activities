
    header("Content-type: text/html; charset=utf-8");

    $nome = $_GET['nome'];
    $datadeNascimento = $_GET['datadeNascimento'];
    $Ndocumento = $_GET['numeroDocumento'];
    $dataExpedicao = $_GET['dataExpedicao'];
    $Naturalidade = $_GET['Naturalidade'];
    $nomedoPai = $_GET['nomePai'];
    $nomedaMae = $_GET['nomeMae'];
    $Secao = $_GET['Secao'];
    $Zona = $_GET['Zona'];
    $Inscricao = $_GET['Inscricao'];
    $nomeCandidato = $_GET['nomeCandidato'];
    $Cargo = $_GET['Cargo'];
    $partidoPolitico = $_GET['partidoPolitico'];

    echo "<b>Nome</b>: $nome </br> <b>Data de Nascimento</b>:$datadeNascimento </br> <b>Nº do documento</b>:$Ndocumento </br> <b>Data de expedição</b>:$dataExpedicao </br> <b>Naturalidade</b>:$Naturalidade </br> <b>Nome do pai</b>:$nomedoPai </br> <b>Nome da mãe</b>:$nomedaMae </br> <b>Seção</b>:$Secao </br> <b>Zona</b>:$Zona </br> <b>Inscricao</b>:$Inscricao </br> <b>Nome candidato</b>:$nomeCandidato </br> <b>Cargo</b>:$Cargo </br> <b>Partido político</b>:$partidoPolitico";
?>
