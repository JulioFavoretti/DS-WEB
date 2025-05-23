package com.example.lib

class MyClass {
}

fun main() {
    val alunos = mutableListOf<String>()
    var opcao: Int?

    do {
        println("\n===== MENU =====")
        println("1 - Cadastrar aluno")
        println("2 - Listar alunos")
        println("3 - Buscar aluno")
        println("4 - Remover aluno")
        println("0 - Sair")
        print("Escolha uma opção: ")

        val input = readLine()
        opcao = input?.toIntOrNull()

        when (opcao) {
            1 -> {
                print("Digite o nome do aluno: ")
                val nome = readLine()
                if (!nome.isNullOrBlank()) {
                    alunos.add(nome)
                    println("Aluno cadastrado com sucesso!")
                } else {
                    println("Nome inválido. Tente novamente.")
                }
            }

            2 -> {
                if (alunos.isEmpty()) {
                    println("Nenhum aluno cadastrado.")
                } else {
                    println("Lista de alunos:")
                    alunos.forEachIndexed { index, aluno ->
                        println("${index + 1}. $aluno")
                    }
                }
            }

            3 -> {
                print("Digite o nome do aluno para buscar: ")
                val nomeBusca = readLine()

                if (!nomeBusca.isNullOrBlank()) {
                    val encontrados = alunos.filter { it.contains(nomeBusca, ignoreCase = true) }
                    if (encontrados.isNotEmpty()) {
                        println("Alunos encontrados:")
                        encontrados.forEach { println(it) }
                    } else {
                        println("Nenhum aluno encontrado com esse nome.")
                    }
                } else {
                    println("Entrada inválida. Você precisa digitar algum nome.")
                }
            }
            4 -> {
                print("Digite o nome do aluno a ser removido: ")
                val nomeRemover = readLine()
                if (alunos.remove(nomeRemover)) {
                    println("Aluno removido com sucesso.")
                } else {
                    println("Aluno não encontrado.")
                }
            }

            0 -> println("Saindo do sistema...")

            else -> println("Opção inválida. Tente novamente.")
        }

    } while (opcao != 0)
}
