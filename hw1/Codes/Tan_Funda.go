package main
import "fmt"

   func func1() bool{
      fmt.Print("a ");
      return true;
   }

   func func2() bool{
      fmt.Print("b ");
      return true;
   }

   func func3() bool{
      fmt.Print("c ");
      return true;
   }

func main() {
   var a bool = true
   var b bool = true
   var c bool = false

   fmt.Print(a && b)
   fmt.Printf("\n")

   fmt.Print(a || b)
   fmt.Printf("\n")

   fmt.Print(!a)
   fmt.Printf("\n")

   var result bool = a || b && c
   fmt.Print(result)
   fmt.Printf("\n")

   result = (a || b) && c
   fmt.Print(result)
   fmt.Printf("\n")

   result = a || (b && c)
   fmt.Print(result)
   fmt.Printf("\n")

   //AND has precedence over OR

   var result2 bool = !a || b
   fmt.Print(result2)
   fmt.Printf("\n")

   result2 = !(a || b)
   fmt.Print(result2)
   fmt.Printf("\n")

   result2 = (!a) || b
   fmt.Print(result2)
   fmt.Printf("\n")

   //NOT have precedence over OR

   result2 = !a && c
   fmt.Print(result2)
   fmt.Printf("\n")

   result2 = !(a && c)
   fmt.Print(result2)
   fmt.Printf("\n")

   result2 = (!a) && c
   fmt.Print(result2)
   fmt.Printf("\n")

   //NOT have precedence over AND

   //OPERATOR ASSOCIATIVITY RULES and OPERAND EVALUATION ORDER

   result2 = func1() && func2() && func3()
   //func1's output is a, func2's output is b, func3's output is c
   fmt.Print(result2)
   fmt.Printf("\n")

   result2 = !func1() || !func2() || func3()
   //func1's output is a, func2's output is b, func3's output is c
   fmt.Print(result2)
   fmt.Printf("\n")

   /*OR and AND operators has left to right associativity because leftmost function is evaluated first*/

   /*AND and OR operands are evaluated left to right because they evaluated func1 and stopped. Operand evaluation order is from left to right for AND and OR operators.*/

   a = false
   b = false

   result2 = !a && b
   fmt.Print(result2)
   fmt.Printf("\n")

   result2 = !(a && b)
   fmt.Print(result2)
   fmt.Printf("\n")

   result2 = (!a) && b
   fmt.Print(result2)
   fmt.Printf("\n")

   //Result of !a && b is like (!a) && b so it NOT operator is right associative

   //SHORT-CIRCUIT EVALUATION

   result2 = !func1() && func2() && func3()

   //func1's return value is false

   fmt.Print(result2)
   fmt.Printf("\n")

   //Only func1 is evaluated, other ones are not executed because of short-circuit.

   result2 = func1() || func2() || func3()
   //func1's return value is true
   fmt.Print(result2)
   fmt.Printf("\n")

   //Only func1 is evaluated, other ones are not executed because of short-circuit.
} 
