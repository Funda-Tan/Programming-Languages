#include <stdio.h>

int main (){
  //Iteration statements provided
  //For
  //String
  char string[5] = "apple";
  for (int i = 0; i < 5; i++)
    printf ("%d ", string[i]);
  printf ("\n");

  //Array
  int array[5] = { 1, 2, 3, 4, 5 };
  for (int i = 0; i < 5; i++)
    printf ("%d ", array[i]);
  printf ("\n");

  //While
  //String
  int i = 0;
  while (i < 5){
      printf ("%d ", string[i]);
      i++;
  }
  printf ("\n");

  //Array
  i = 0;
  while (i < 5){
      printf ("%d ", array[i]);
      i++;
  }
  printf ("\n");

  //Do-While
  //String
  i = 0;
  do{
    printf("%d ", string[i]);
    i++;
  } while( i < 5);
  printf("\n");

  //Array
  i = 0;
  do{
      printf ("%d ", array[i]);
      i++;
  } while (i < 5);
  printf ("\n");

  //The way that next item accessed
  //Loop condition is tested before the execution of for loop
  for (int i = 0; i < 5; i++){
    printf ("%d ", string[i]);
    printf("In for loop");
    i = 10;
  }
  printf ("\n");

  for (int i = 0; i < 5; i++){
    printf ("%d ", array[i]);
    printf("In for loop two");
    i = 10;
  }
  printf ("\n");

  //Loop condition is tested before the execution of while loop
  i = 0;
  while (i < 5){
      printf ("%d ", string[i]);
      printf("In while loop");
      i = 10;
  }
  printf ("\n");

  i = 0;
  while (i < 5){
      printf ("%d ", array[i]);
      printf("In while loop two");
      i = 10;
  }
  printf ("\n");

  //Loop condition is tested after the execution of the do while loop
  i = 0;
  do{
    printf("%d ", string[i]);
    printf("In do while loop");
    i++;
    i = 10;
  } while( i < 5);
  printf("\n");

  i = 0;
  do{
    printf("%d ", array[i]);
    printf("In do while loop two");
    i++;
    i = 10;
  } while( i < 5);
  printf("\n");

  return 0;
}
