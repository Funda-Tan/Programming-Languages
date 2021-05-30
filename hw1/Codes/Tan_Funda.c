#include <stdio.h>
#include<stdbool.h>
int main()
{
    //Boolean operators provided (NOT, AND, OR)
    bool value1 = false;
    bool value2 = true;

    bool booleanExpressionValue = false;

    //NOT operator
    booleanExpressionValue = !value1;
    printf("The result of boolean expression is: %d\n", booleanExpressionValue);

    //AND operator
    booleanExpressionValue = value1 && value2;
    printf("The result of boolean expression is: %d\n", (int)booleanExpressionValue);

    //OR operator
    booleanExpressionValue = value1 || value2;
    printf("The result of boolean expression is: %d\n", booleanExpressionValue);

    //Data types for operands of boolean operators (integer, boolean)
    //integer type operands for boolean exporession
    booleanExpressionValue = value1 && value2;
    printf("The result of boolean expression is: %d\n", booleanExpressionValue);

    //boolean type operands for boolean expression
    bool myBool1 = true;
    bool myBool2 = false;
    booleanExpressionValue = myBool1 && myBool2;
    printf("The result of boolean expression is: %d\n", booleanExpressionValue);

    //Operator precedence rules

    //AND operator have precedence over OR operator
    bool myBool3 = false;
    booleanExpressionValue = myBool1 || myBool2 && myBool3;
    printf("The result of boolean expression is: %d\n", booleanExpressionValue);

    //NOT operator have precedence over AND operator
    booleanExpressionValue = !myBool1 && myBool2;
    printf("The result of boolean expression is: %d\n", booleanExpressionValue);

    //NOT operator have precedence over OR operator
    booleanExpressionValue = !myBool2 || myBool3;
    printf("The result of boolean expression is: %d\n", booleanExpressionValue);

    bool a() {
      printf("a");
      return true;
    }

    bool b() {
      printf("b");
      return true;
    }

    bool c() {
      printf("c");
      return true;
    }

    //Operator associativity rules and operand evaluation order
    booleanExpressionValue = a() || b() || c();
    printf("\n");
    booleanExpressionValue = a() && b() && c();
    printf("\n");
    //left to right associativity because a is evaluated only, if it was
    //right to left associativity, c would have been evaluated first.
    //Operators are evaluated left to right since function a is evaluated first.

    //Short-circuit evaluation
    printf("Short-circuit evalution examples\n");
    booleanExpressionValue = a() || b() || c();
    booleanExpressionValue = !a() && b() && c();
    //there is short-circuit evalutaion in C.

    return 0;
}
