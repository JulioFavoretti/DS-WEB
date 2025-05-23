package com.example.painelpontuacao
import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.layout.width
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.painelpontuacao.ui.theme.PainelPontuacaoTheme



class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            PainelPontuacaoTheme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp(){
    var timeA by remember { mutableStateOf(0)}
    var timeB by remember { mutableStateOf(0)}
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFFD2AED6)
    ){
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Text(text = "Time A",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 23.sp)
            )
            Spacer(modifier = Modifier.height(5.dp))
            Text(text = "$timeA",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 25.sp)
            )
            Spacer(modifier = Modifier.height(5.dp))
            CreateCircle(timeA) {timeA+=1}

            Spacer(modifier = Modifier.height(50.dp))

            //time B
            Text(text = "Time B",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 23.sp)
            )
            Spacer(modifier = Modifier.height(5.dp))
            Text(text = "$timeB",
                style = TextStyle(
                    color = Color.White,
                    fontSize = 25.sp)
            )
            Spacer(modifier = Modifier.height(5.dp))
            CreateCircle(timeB) {timeB+=1}

        }
    }
}

@Composable
fun CreateCircle(moneyCounter: Int, onTap: () -> Unit) {
    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(50.dp)
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $moneyCounter")
            },
        shape = CircleShape // Formato circular
    ) {
        Box (modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center){
            Text(text = "Add")
        }
    }
}


@Preview(showBackground = true)
@Composable
fun DefaultPreview() {
    PainelPontuacaoTheme {
        MyApp()
    }
}

