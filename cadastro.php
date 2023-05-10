<?php
			// Array que armazena os peixes cadastrados
			$peixes = array();

			// Verifica se o formulário foi submetido
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				// Recupera os dados do formulário e adiciona ao array
				$peixe = array(
					"especie" => $_POST["especie"],
					"tamanho" => $_POST["tamanho"],
					"cor" => $_POST["cor"],
					"habitat" => $_POST["habitat"],
					"alimentacao" => $_POST["alimentacao"],
					"observacoes" => $_POST["observacoes"]
				);
				array_push($peixes, $peixe);
			}

			// Percorre o array de peixes e exibe na tabela
			foreach ($peixes as $peixe) {
				echo "<tr>";
				echo "<td>" . $peixe["especie"] . "</td>";
				echo "<td>" . $peixe["tamanho"] . "</td>";
				echo "<td>" . $peixe["cor"] . "</td>";
				echo "<td>" . $peixe["habitat"] . "</td>";
				echo "<td>" . $peixe["alimentacao"] . "</td>";
				echo "<td>" . $peixe["observacoes"] . "</td>";
				echo "<td><a href='editar.php'>Editar</a> | <a href='excluir.php'>Excluir</a></td>";
				echo "</tr>";
		