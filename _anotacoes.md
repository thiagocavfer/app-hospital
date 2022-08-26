# Anotações

Thiago C Ferreira, 25 de Agosto de 2022.

**MIGRATIONS**
- Primeiramente, toquei o nome das campos de chaves (FK).
Anteriormente eles foram escritos como "id_paciente" ou "id_medico".
Porém, uma boa prática, é colocarmos o nome que lembra a entidade com que se quer relacionar em primeiro lugar. Sendo assim, "id_paciente" passaria para "paciente_id", "id_medico" para "medico_id", etc...

- Comentei as linhas de "dropForeign" que haviam no método "down" das migrations. Eles não são necessários. Quando o método down é realizado, as FKs também são destruidas.

- Retirei as citações de relacionamentos de PACIENTES, MEDICOS e HOSPITAIS com ENDEREÇOS de dentro da migration de ENDEREÇOS e as coloquei cada uma em sua própria migration.

- Eliminei a migration "2022_08_11_125729_update_constraint_enderecos_table.php".
Não havia nada nela.

- Uma boa prática também, na organização dos campos dentro de uma entidade, é colocar as chaves estrangeiras logo após a chave primária da entidade. Realizei essas mudanças também.

**MODELS**

- Reordenei os campos dos atributos "$fillable" para que fiquem na mesma ordem dos campos na tabela. Isso é "perfumaria", mas a coisa fica mais organizada.

- Fiz a devida referência ao "extends" da Model Consulta. Ela estava extendendo de "Models" e essa classe não existe. Extendi da classe Model (Illuminate\Database\Eloquent\Model).

- Criei os métodos "belongsTo" (1:1) e "hasMany" (1:N) de todos os relacionamentos das models Consulta, Paciente, Medico e Hospital.

**CONTROLLER: PacienteController**

- Criei o método "PacienteControlle@store" (rota ".../api/paciente/store" do tipo POST). Ele é responsável pelo cadastro de um novo paciente. Para testar, basta somente seguir os passos abaixo:
     - Abra um aplicativo de teste de API como o POSTMAN, por exemplo.
     - Caso tenha usado o "php artisan serve" para levantar um servidor para a aplicação, acesse o endereço "http://localhost:8000/api/paciente/store" via POST utilizando o POSTMAN.
     - Envie, como parametro do tipo JSON o seguinte objeto: 
        ```
        {
            "logradouro": "Rua das Flores",
            "numero" : "150",
            "complemento" : "Bloco B, Apto 105",
            "cep" : "23039-115",
            "bairro" : "Recreio dos Bandeirantes",
            "cidade" : "Rio de Janeiro",
            "uf" : "RJ",
            "nome" : "José Luiz de Almeida Saião",
            "sexo" : "M",
            "email" : "jose.almeida.saiao@gmail.com",
            "telefone" : "21 99988-5566",
            "data_nascimento" : "1985-08-12"
        }
        ```
    - O retorno do método executado acima (PacienteController@store) retornará um objeto contendo os dados do paciente cadastrado e seu endereço.

**DESAFIO PROPOSTO**
- Replicar as alterações que realizei neste FORK no projeto original.
- Criar o método "PacienteController@show" onde, passando o ID do paciente, possamos acessar um objeto com as informações do PACIENTE e seu ENDERECO através da rota ".../api/paciente/{id}/show" do tipo GET.
- Criar o método "PacienteController@delete" onde, passando o ID do paciente, possamos excluir os dados do PACIENTE e o seu respectivo ENDEREÇO através da rota ".../api/paciente/{id}/delete" do tipo DELETE.
            