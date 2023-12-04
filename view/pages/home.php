<h1 class="mx-auto">Transforme seus 💚 Desejos em Presentes Memoráveis 🎅🏼</h1>
<p class="mx-auto">Crie sua lista de desejos publicamente, permitindo que amigos e familiares escolham presentes perfeitos sem constrangimentos</p>

<input type="email" class="form-control mx-auto" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pesquise seu presente...">

<div id="items">
<?php

foreach ($items as $item) {
    echo "<div class='row'>";
    echo "<div class='col'>". $item['nome'] . "</div>";
    echo $item['descricao'];
    echo "<div class='col'>". $item['categoria']. "</div>";
    echo "<div class='col'>". $item['nivel_desejo']. "</div>";
    echo "<div class='col'>R$".$item['media_preco']. "</div>";
    echo "</div>";
}

?>
</div>
