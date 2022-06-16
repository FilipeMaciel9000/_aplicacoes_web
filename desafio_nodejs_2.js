/* Coemntario de Multiplas linhas:
*   *   *
*  @goal: Programa que troca os valores de uma variavel\n
*    + Por outra variavel;
*  @author: Filipe Rios Maciel Maciel;
*  @date: 18/03/2022;
*	*	*
*  @algorithm:
*   1) Receber e mostrar o valor de duas variaveis;
*   2) Trocar os valores dessas duas variaveis ;
*   3) Mostrar os valores trocados;
*  	*	*
*  @Declarations:
*
*  	*	*
*  @notes:
*
*/

var x = 0;
var a = 1;
var b = 2;

console.log("A primeira variável equivale a: "+a);
console.log("A segunda variável equivale a: "+b);

x = a;
a = b;
b = x;
console.log("Trocando os valores atribuidos.\nA primeira variável agora equivale a : "+a);
console.log("E a segunda variável agora equivale a :"+b);
