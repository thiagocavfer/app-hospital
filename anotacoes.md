# Anotações


**MIGRATIONS**
- Primeiramente, toquei o nome das campos de chaves (FK).
Anteriormente eles foram escritos como "id_paciente" ou "id_medico".
Porém, uma boa prática, é colocarmos o nome que lembra a entidade com que se quer relacionar em primeiro lugar. Sendo assim, "id_paciente" passaria para "paciente_id", "id_medico" para "medico_id", etc...

- Comentei as linhas de "dropForeign" que haviam no método "down" das migrations. Eles não são necessários. Quando o método down é realizado, as FKs também são destruidas.

- Retirei as citações de relacionamentos de PACIENTES, MEDICOS e HOSPITAIS com ENDEREÇOS de dentro da migration de ENDEREÇOS e as coloquei cada uma em sua própria migration.

- Eliminei a migration "2022_08_11_125729_update_constraint_enderecos_table.php".
Não havia nada nela.

- Uma boa prática também, na organização dos campos dentro de uma entidade, é colocar as chaves estrangeiras logo após a chave primária da entidade. Realizei essas mudanças também.

