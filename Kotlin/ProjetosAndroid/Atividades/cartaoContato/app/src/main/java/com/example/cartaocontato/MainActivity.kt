package com.example.cartaocontato
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.*
import androidx.compose.material3.*
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.cartaocontato.ui.theme.CartaoContatoTheme

//Exibição celular
class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState) //3 linhas que vem com qlqr codigo
        setContent {
            CartaoContatoTheme {
                Surface(
                    modifier = Modifier.fillMaxSize(),
                    color = Color(0xFFE3F2FD) // Cor de fundo do app
                ) {
                    CartaoContato()
                }
            }
        }
    }
}
@Composable
fun CartaoContato() {

    Column(
        modifier = Modifier
            .fillMaxSize()
            .padding(16.dp),
        verticalArrangement = Arrangement.Center,
        horizontalAlignment = Alignment.CenterHorizontally
    )
    {

        Text(text="Cartões de contato", style = TextStyle(fontSize = 20.sp))
        Spacer(modifier = Modifier.height(20.dp))
        // Cartão 1
        Card(
            modifier = Modifier
                .fillMaxWidth()
                .padding(8.dp),
            colors = CardDefaults.cardColors(
                containerColor = Color(0xFFBBDEFB) // Cor de fundo do Card
            )
        ) {
            Column(
                modifier = Modifier
                    .padding(16.dp)
                    .fillMaxWidth(),
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ) {
                Box(){
                    Column {
                        Text(text = "Nome: João Silva")
                        Text(text = "Tel: (11) 99999-9999")
                        Text(text = "Email: joao@email.com")
                    }

                }
            }
        }

        Spacer(modifier = Modifier.height(24.dp)) // Espaço entre os cartões

        // Cartão 2
        Card(
            modifier = Modifier
                .fillMaxWidth()
                .padding(8.dp),
            colors = CardDefaults.cardColors(
                containerColor = Color(0xFFBBDEFB) // Cor de fundo do Card
            )
        ) {
            Column(
                modifier = Modifier
                    .padding(16.dp)
                    .fillMaxWidth(),
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ) {
                Box(){
                    Column(){

                        Text(text = "Nome: Maria Souza")
                        Text(text = "Tel: (21) 98888-8888")
                        Text(text = "Email: maria@email.com")
                    }
                }
            }
        }
    }
}

@Preview(showBackground = true)
@Composable
fun CartaoContatoPreview() {
    CartaoContatoTheme {
        Surface(
            modifier = Modifier.fillMaxSize(),
            color = Color(0xFFE3F2FD)
        ) {
            CartaoContato()
        }
    }
}