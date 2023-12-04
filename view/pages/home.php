<h1 class="mx-auto">Transforme seus 💚 Desejos em Presentes Memoráveis 🎅🏼</h1>
<p class="mx-auto">Crie sua lista de desejos publicamente, permitindo que amigos e familiares escolham presentes perfeitos sem constrangimentos</p>

<input type="email" class="form-control mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pesquise seu presente...">

<div id="items">
<?php

foreach ($items as $item) {
    echo $item['nome'] . "<br>";
    echo $item['descricao']. "<br>";
    echo $item['categoria']. "<br>";
    echo $item['nivel_desejo']. "<br>";
    echo "R$".$item['media_preco']. "<br>";
}

?>
</div>
