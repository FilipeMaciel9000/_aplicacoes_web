/* Comentario de multiplas linhas:
*   *   *
*  @goal: Programa que calcula a area da circunferencia;
*  @author: Filipe Rios Maciel Maciel;
*  @date: 19/02/2022;
*	*	*
*  @algorithm:
* 1) Declarar as variaveis e constantes da formula da area da circunferencia;
* 2) Realizar os calculos corretamente;
* 3) Mostar o resultado na tela;
*  	*	*
*  @Declarations:
* 1) A variavel Pi nunca vai mudar por isso\n 
*   + É delarada como cost inves de var pois é um constante\n
*   + Tambem usamos a biblioteca Math que é o valor atribuido a constante Pi;
* 2) O valor da variavel do raio é 10;
* 3) O caluculo de uma circunferencia é dado por a = Pi x raio²\n
    + Por isso declaramos a variavel quadrado_raio e usamos a biblioteca Math\n
    + para elevar a variavel raio ao quadrado;
*  	*	*
*  @notes:
*  -> O principal objetivo do desafio é entender a diferença entre variáveis e constantes;
*  -> O objetivo secundario é entender um pouco da biblioteca Math;
*/
const PI = Math.PI;
var raio = 10;
var quadrado_raio = Math.pow(raio,2);
var areac = PI * quadrado_raio;
console.log ("A area da circunferência com o raio de "+raio+"m é de "+areac+"m²");