package com.example.cartaoproduto

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.*
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.cartaoproduto.ui.theme.CartaoProdutoTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            CartaoProdutoTheme {
                Surface(
                    modifier = Modifier.fillMaxSize(),
                    color = Color(0xFFB4D9F5) // Azul claro
                ) {
                    CartaoProduto()
                }
            }
        }
    }
}

@Composable
fun CartaoProduto() {
        Column(
            horizontalAlignment = Alignment.CenterHorizontally,
            verticalArrangement = Arrangement.Center
        ) {
            Box(){
                Column {
                    Text(text = "Produto: Fone Bluetooth")
                    Text(text = "Preço: R$ 149,90") }
                    Spacer(modifier = Modifier.height(60.dp))
            }


            Card(
                shape = CircleShape,
                modifier = Modifier
                    .size(95.dp),
                colors = CardDefaults.cardColors(containerColor = Color(0xFF90CAF9)) // Azul
            ) {
                Box(
                    modifier = Modifier.fillMaxSize(),
                    contentAlignment = Alignment.Center
                ) {
                    Text(text = "Comprar")
                }
            }
        }
    }

@Preview(showBackground = true)
@Composable
fun CartaoProdutoPreview() {
    CartaoProdutoTheme {
        Surface(
            modifier = Modifier.fillMaxSize(),
            color = Color(0xFFE3F2FD)
        ) {
            CartaoProduto()
        }
    }
}
