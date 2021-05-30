package main

import (
	"fmt"
)

func main() {
  //Iteration statements provided
  //For
  //String
  myString := "apple"
  for i := 0; i < 5; i++{
    fmt.Printf("%d ", myString[i])
  }
  fmt.Println("")

  //Array
  array := [5]int{ 1, 2, 3, 4, 5 }
  for i := 0; i < 5; i++{
    fmt.Printf("%d ", array[i])
  }
  fmt.Println("")

  //For without init and post statements
  //String
  i := 0
  for i < 5 {
     fmt.Printf("%d ", myString[i])
     i++
  }

  fmt.Println("")

  //Array
  j := 0
  for j < 5{
      fmt.Printf("%d ", array[j])
      j++
  }

  fmt.Println("")

  //For without conditions
  for {
    fmt.Println("forLoop")
    break
  }

  //The way that next item accessed
  //Loop condition is tested before the execution of the for loop
  for i := 0; i < 5; i++{
    fmt.Printf("%d ", myString[i])
    i = 10
  }
  fmt.Println("")

  k := 0
  for k < 5{
      fmt.Printf("%d ", array[k])
      k = 10
  }
}
